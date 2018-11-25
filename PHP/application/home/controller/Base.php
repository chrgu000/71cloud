<?php
namespace app\home\controller;
use think\Controller;
use think\Request;
use think\Session;

class Base extends Controller
{
    public $rest = array();

    //构造方法
    public function __construct(Request $request)
    {
        parent::__construct();
        /* //接口安全处理
         $check = new Check();*/

        $this->checkSafe();

    }

    //地址加密
    function checkSafe()
    {
        $secret = input("secret", '71clouddangjiang');
        $uid = input("uid");
        $time = input("time");
        $str = md5('71clouddangjiang');

        //判断时间戳是否过期
        if (time() - $time > 300) {
            return json(['code' => 0, 'msg' => '时间已过期', 'data' => '']);
        }
<<<<<<< HEAD
        if ($uid == 0) {
=======
        if ($uid = 0) {
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
            if ($secret = $str) {
                return json(['code' => 1, 'msg' => '', 'data' => '']);
            } else {
                return json(['code' => 0, 'msg' => '参数错误', 'data' => '']);
            }
        } else {
            // $token = db('user')->where(array('id'=>$uid))->getfield('token');
            //根据用户id查token
            $token = db('user')->where(array('id' => $uid))->field('token')->find();
            $token = $token["token"];
            /*$str='$token,$time,$uid';//定义排序规则*/

            $arr = array(
                "token" => $token,
                "time" => $time,
                "uid" => $uid
            );

            /*sort($arr);//排序*/
            $arr = implode($arr); //将数组转化成字符串

            $secret_server = md5($arr);

            if ($secret != $secret_server) {
                $this->rest['code'] = '0';
                $this->rest['data'] = '';
                $this->rest['message'] = '您输入的参数错误';
                $this->json($this->rest);
            }

        }
    }

    //权限访问
    function checkpower()
    {
//        $url = '';
//
//        $power = 'select power';
        $appid = input("appid"); //获取微信的appid
        $role = db('user')->join("c_role", "c_user.role_id = c_role.id")->where(array('c_role.appid' => $appid))->field('c_role.menu_id')->find();

        $role_id = explode(",", $role["menu_id"]);

        $request = Request::instance();
        $module = $request->module();
        $controller = $request->controller();
        $action = $request->action();

        $menu_url = $controller . "/" . $action;
        $permission_id = db('permissions')->where(array("pagemodule" => $module, "menu_url" => $menu_url))->value("id");
        if (in_array($permission_id, $role_id)) {

            echo '您有访问该页面的权限';
            die;
        }


    }

    public function json($result)
    {
        // header();
        header('Content-Type:application/json;charset=utf-8');
        return json($result);
<<<<<<< HEAD
//        exit;
=======
        exit;
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
    }


    //生成图片验证码
    /*public function show_imagecode($id = "")
    {

        return "<div>" . captcha_img() . "</div>";
        //return $this->fetch();

    }*/
    //生成uuid
    function uuid($prefix = ''){
        $chars = md5(uniqid(mt_rand(), true));
        $uuid  = substr($chars,0,8) . '-';
        $uuid .= substr($chars,8,4) . '-';
        $uuid .= substr($chars,12,4) . '-';
        $uuid .= substr($chars,16,4) . '-';
        $uuid .= substr($chars,20,12);
        return $prefix . $uuid;
        echo uuid();
    }




    //验证图片验证码
   /*public function check_imagecode()
   {

           //接收参数

           $captcha = input("post.captcha", "");

           if (!captcha_check($captcha)) {

               return json(['code' => 0, 'msg' => '验证失败', "data" => ""]);

           } else {
               return json(['code' => 1, 'msg' => '验证成功', "data" => ""]);
           }
       }*/

}



