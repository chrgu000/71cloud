<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;



class Login extends Controller

{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */

    //登录
    public function index()
    {
        //接收参数
        $data = request()->param();

        /* //验证 验证码
         $verify =  trim(input('post.verify'));
         $Verify = new \think\Verify();
         $res = $Verify -> check($verify);
         if(!$res){
             $this->error('验证码错误！',Url('login/Index'));
         }*/

        //判断是否是post请求
        if (Request::instance()->isPost()) {

            //检测验证码
            if(!captcha_check($data['code'])){
                //验证码错误
                $this->error('验证码错误','login/index','','1');
            }

            //获取输入的用户名和密码
            $username = input('post.username');
            $password = input('post.password');
            if ($username == '') {
                $this->error('账号必须填写！', Url('login/Index'));
            }
            //查询admin表数据
            $userInfo = db('admin')->where("admin_username= '$username'")->find();
            if (!$userInfo) {
                $this->error('账号不存在！', Url('login/Index'));
            }
            //加密方式
            $pass = encrypt_password($data['password']);

            //判断加密后的密码是否与数据库加密的密码相同
            if ($pass == $userInfo['admin_password']) {

                //用户信息入session
                $admin = [
                    'id' => $userInfo['id'],
                    'username' => $userInfo['admin_username'],

                ];

                session('admin', $admin);

                $this->redirect('index/index');
            } else {
                $this->error( '密码错误','login/index','','1');
            }

        }


        return $this->fetch('login/login');
    }


    //退出登陆
    public function loginout()
    {
        //清空session数据
        session(null);
        //页面跳转 登录页
        $this->redirect('login/index');
    }









}