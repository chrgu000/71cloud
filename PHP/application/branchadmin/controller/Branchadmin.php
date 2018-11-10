<?php

namespace app\branchadmin\controller;

use think\Controller;
use think\Request;
use think\Response;
class Branchadmin extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    //子级党支部
    public function index()
    {
        //临时关闭模板布局
        $this->view->engine->layout(false);
        //查询管理员表的数据
        $company_id = session('branchadmin_info.company_id');
        $list=model('branch_admin')->where(['company_id'=>$company_id])->select()->toArray();
        //使用递归函数进行处理
//        dump($list);
//        die;
        $list = getTree($list);
        return view('index',['list'=>$list]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */

    //新增管理员
    public function create()
    {
        //临时关闭模板布局
        $this->view->engine->layout(false);
        //查询所有一级权限，用于下拉列表展示
        $model = model('branch_admin');
        $company_id = session('branchadmin_info.company_id');
        $where = ['company_id'=>$company_id];
        $list = getTree($model->where($where)->select()->toArray());
        //查询Branchs 支部表的所有数据
        $data  = model('branchs')->where($where)->select();
        return view('create', ['list' => $list,'data'=>$data]);
    }

    //启用账号状态
    public function status(){
        $id=input('id');

        $res=db('branch_admin')->where(array('id'=>$id))->update(array('status'=>1));
        if($res){
            $message=array(
                "error"=>0,
                "message"=>"修改成功"
            );
        }else{
            $message=array(
                "error"=>1,
                "message"=>"修改失败"
            );
        }
        return json($message);
    }

    //停用账号状态
    public function statu(){
        $id=input('id');

        $res=db('branch_admin')->where(array('id'=>$id))->update(array('status'=>0));
        if($res){
            $message=array(
                "error"=>0,
                "message"=>"修改成功"
            );
        }else{
            $message=array(
                "error"=>1,
                "message"=>"修改失败"
            );
        }
        return json($message);
    }


    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    //前端数据接收 新增管理员数据
   public function save(Request $request)
    {
        //接收数据
        $data = $request->param();
        //参数检测
        //定义验证规则
        $rule = [
            'bradmin_username' => 'require',
            'phone' => 'require|max:11|number',
            'email' => 'require|email',
            'bradmin_password'=>'require|confirm:password2',

        ];
        //定义提示信息
        $msg = [
            'bradmin_username.require' => '用户名不能为空',
            'bradmin_password.require' => '密码不能为空',
            'bradmin_password.confirm' => '确认密码不正确',
            'phone.require' => '验证码不能为空',
            'phone.max' => '电话号码最多不能超过11个字符',
            'phone.number' => '电话号码只能是数字',
            'email.require' => '邮箱不能为空',
            'email.email' => '邮箱格式错误',

        ];

        //实例化验证类
        $validate = new \think\Validate($rule, $msg);
        //执行验证
        if( !$validate->check($data) ){
            //验证失败，报错
            $error = $validate->getError();
            $this->error($error);
        }

        //加密密码
        $data['bradmin_password'] = encrypt_password($data['bradmin_password']);
        //添加时间
        $data['ctime']=time();
        $data['bradmin_role']='';
        $info = session('branchadmin_info');

        $data['admin_id'] = $info['admin_id'];
        $company_id = session('branchadmin_info.company_id');
        $data['company_id'] = $company_id;
//        dump($data);
//        die;
        //添加数据到数据表
       \app\branchadmin\model\BranchAdmin::create($data, true);
        //页面跳转
        $this->success('操作成功', 'index');
    }
    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    //删除功能
     public function delete($id)
    {
        //直接删除 destroy方法
         \app\branchadmin\model\BranchAdmin::destroy($id);
        //页面跳转
        $this->success('操作成功', 'index');
    }


    public function read($id)
    {
        $user = \app\branchadmin\model\BranchAdmin::find($id);
        //党支部
        $branch = $user->branch->getData();
        return ['data'=>$branch,'code'=>1];
    }

}
