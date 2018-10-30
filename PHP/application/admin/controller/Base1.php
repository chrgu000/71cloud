<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;

class Base1 extends Controller
{
    public $rest = array();

    //构造方法
    public function __construct(Request $request)
    {
        parent::__construct($request);
        //登录判断
        if(!session('?admin_info')){
            //没有登录，跳转到登录页
            $this->redirect('admin/login/index');
        }

        $this->checkSafe();

    }

    // /xxx?secret=xxxxxx&uid=xxxx&time=xxxx&wxid=
    function checkSafe()
    {
        $secret = input("secret");
        $uid = input("uid");
        $time = time();

        // $token = db('user')->where(array('id'=>$uid))->getfield('token');
        $token = db('user')->where(array('id'=>$uid))->field('token')->find();
        $token = $token["token"];

        $arr = array(
            "token"=>$token,
            "time"=>$time,
            "uid"=>$uid
        );
        sort($arr);
        implode($arr); //将数组转化成字符串
        $secret_server = md5($arr);

        if ($secret != $secret_server){
            $this->rest['code'] = '1';
            $this->rest['data'] = '';
            $this->rest['message'] = '您输入的参数错误';
            $this->json($this->reset);
        }

    }


    function checkpower()
    {
//        $url = '';
//
//        $power = 'select power';
        $appid = input("appid"); //获取微信的appid
        $role = db('user')->join("c_role","c_user.role_id = c_role.id")->where(array('c_role.appid'=>$appid))->field('c_role.menu_id')->find();

        $role_id = explode(",",$role["menu_id"]);

        $request = Request::instance();
        $module = $request->module();
        $controller  = $request->controller();
        $action = $request->action();

        $menu_url =$controller."/".$action;
        $permission_id  = db('permissions')->where(array("module"=>$module,"menu_url"=>$menu_url))->value("id");
        if(in_array($permission_id,$role_id)){

             echo '您有访问该页面的权限';die;
        }



    }

    public function json($result)
    {
        // header();
        header('Content-Type:application/json;charset=utf-8');
        return json($result);
        exit;
    }

}
