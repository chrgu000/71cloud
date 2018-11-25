<?php

namespace app\branchadmin\controller;

use think\Controller;
use think\Request;

class Login extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */

    //登陆页面
    public function login()
    {
        //一个方法处理两个业务逻辑：页面展示、表单提交
        if (request()->isGet()) {
            //临时关闭模板布局
            $this->view->engine->layout(false);

            return view();
        }
        //post请求 表单提交
        //接收参数
        $data = request()->param();
        // print_r($data);die;
        //检测参数格式 表单验证
        //定义验证规则
        $rule = [
            'bradmin_username' => 'require',
            'bradmin_password' => 'require',
            // 'code' => 'require',
        ];
        //定义提示信息
        $msg = [
            'bradmin_username.require' => '用户名不能为空',
            'bradmin_password.require' => '密码不能为空',
            // 'code.require' => '验证码不能为空',
        ];
        //实例化验证类
        $validate = new \think\Validate($rule, $msg);
        //执行验证
        if (!$validate->check($data)) {
            //验证失败，报错
            $error = $validate->getError();
            $this->error($error);
        }
        //检测验证码
        /* if(!captcha_check($data['code'])){
             //验证码错误
             $this->error('验证码错误');
         }*/
        //检查是否禁用，查询branchadmin表的数据
        $status = \app\branchadmin\model\BranchAdmin::where('bradmin_username', $data['bradmin_username'])->value('status');
        //print_r($status);die;
        if ($status == 0) {
            //0是禁用
            $this->error('该管理员已被禁用');
        }

        //查询管理员用户表 c_branch_admin
        $password = encrypt_password($data['bradmin_password']);
//        $info = \app\admin\model\Manager::where('username', '=', $data['username'])->where('password', '=', $password)->find();
        $where = [
            'bradmin_username' => $data['bradmin_username'],
            'bradmin_password' => $password,
        ];
        $info  = \app\branchadmin\model\BranchAdmin::where($where)->find();
        //print_r($info);die;
        //判断结果
        if (empty($info)) {
            //用户名或者密码错误
            $this->error('用户名或密码错误');
        }
        //设置登录标识
        session('branchadmin_info', $info->toArray());
        //页面跳转 到 后台首页
        //$this->success('登录成功', 'branchadmin/Index/Index');
        $this->redirect('branchadmin/Index/index');
    }

    //退出登陆
    public function logout()
    {
        //清空session数据
        session(null);
        //页面跳转 登录页
        $this->redirect('login');
    }
}
