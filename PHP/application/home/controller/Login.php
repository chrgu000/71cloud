<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/7/30
 * Time: 16:53
 *
 * 登录注册
 *
 */

namespace app\home\controller;

use think\captcha\Captcha;
use think\Config;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;

class Login extends Base
{
    public $branch = [];
    public $rand   = []; //随机数数组

    public function __construct()
    {
        $this->rand = array_merge(range("a", "z"), range(0, 9));
    }

    /**
     *
     * 注册 POST
     *
     * @param $tel     string 手机号
     * @param $captcha string 图形验证码
     * @param $code    string 验证码
     *
     *
     */
<<<<<<< .mine
    public function register(){
        $param = json_decode(trim(file_get_contents('php://input')));
        $tel = htmlspecialchars_decode($param->tel);
        $captcha = htmlspecialchars_decode($param->captcha);
        $id = htmlspecialchars_decode($param->id);
        $code = htmlspecialchars_decode($param->code);
||||||| .r114
    public function register(){
//        $method = $request->method();
//        if($method == 'post'){
//            return json(['code'=>0,'msg'=>'请将信息填写完整','data'=>'']);
//        }
//        $param = $request->param();
        $param = json_decode(trim(file_get_contents('php://input')));
        $tel = htmlspecialchars_decode($param->tel);
        $captcha = htmlspecialchars_decode($param->captcha);
        $id = htmlspecialchars_decode($param->id);
        $code = htmlspecialchars_decode($param->code);
=======
>>>>>>> .r125

    public function register(Request $request)
    {
        $param   = $request->param();
        $tel     = $param['tel'];
        $captcha = $param['captcha'];
        $id      = $param['id'];
        $code    = $param['code'];

        if (empty($tel) || empty($code) || empty($captcha)) {
            return json(['code' => 2, 'msg' => '请将信息填写完整', 'data' => '']);
        }

        //检测验证码
//        if (time() - session('randStr')['time'] > 5 * 60) {
//            return json(['code' => 3, 'msg' => '手机验证码过期,请重新获取', 'data' => '']);
//        }

//        图形验证码验证
//        $config = Config::get('captcha');
//
//        if (!captcha_check($captcha, $id, $config)) {
//            return json(['code' => 4, 'msg' => '图形验证码错误', "data" => ""]);
//        }

        //手机号是否注册
        $userModel = db('User');
        $res       = $userModel->where("tel = $tel")->find();
        if (!empty($param['type']) && $param['type'] == 1) {
            if (!$res) {
                #修改密码验证是否注册
                return json(['code' => 5, 'msg' => '该手机号没有注册,请先注册!', 'data' => '']);
            }
        }
        if (empty($param['type']) && $res) {
            return json(['code' => 6, 'msg' => '手机号已注册,请直接登录', 'data' => '']);
        }

//        if (session('randStr')['randStr'] != $code) {
//            return json(['code' => 0, 'msg' => '手机验证码错误', 'data' => '']);
//        }

        return json(['code' => 1, 'msg' => '手机验证通过', 'data' => '']);
    }

    //

    /**
     *
     * 生成图片验证码 get
     *
     * @param $id 验证码id
     */
    function create(Request $request)
    {
        $data    = $request->param();
        $id      = $data['id'];
        $config  = Config::get('captcha');
        $captcha = new Captcha($config);

        return $captcha->entry($id); #传入比对标识

    }

    /**
     * 注册时的组织
     */
    public function tissue()
    {
        $data = db('company')->field('id,company_name')->select();

        return json(['code' => 1, 'msg' => '', 'data' => $data]);
    }

    /**、
     *
     * @getBranchs 注册时的支部
     *
     * @param \think\Request $request
     *
     * @author     : Mr_peng
     * @retur
     *
     */
    public function getBranchs(Request $request)
    {
        $data       = $request->post();
        $company_id = $data['company_id'];
        $bran       = Db::name('branchs')->where('pid=' . $company_id)->field('branchs_name,id')->select();
        if (empty($bran)) {
            return json(['code' => 0, 'msg' => '该公司暂无支部', 'data' => []]);
        } else {
            return json(['code' => 1, 'msg' => '', 'data' => $bran]);
        }
    }

    /**
     * 个人信息录入 POST
     *
     * @param $username     真实姓名
     * @param $password     密码
     * @param $password1    确认密码
     * @param $branchs_id   所属组织id
     * @param $party_status 党员状态
     * @param $tel          手机号
     *
     */
    public function entry(Request $request)
    {
        $data = $request->param();

        $username     = $data['username'];
        $password     = $data['password'];
        $password1    = $data['password1'];
        $branchs_id   = $data['branchs_id'];
        $party_status = $data['party_status'];
        $tel          = $data['tel'];
        $company_id   = $data['company_id'];
        //默认用户名
        //默认头像
        $face = 'http://pc5hsiop1.bkt.clouddn.com/avaturl.png';
        if (empty($tel) || empty($username) || empty($password) || empty($password1) || empty($branchs_id) || empty($party_status)) {
            return json(['code' => 2, 'msg' => '请将信息填写完整', 'data' => '']);
        }
        //检测密码位数
        if (strlen($password) < 6) {
            return json(['code' => 3, 'msg' => '密码至少6位', 'data' => '']);
        }

        if ($password == $password1) {
            $user = db('user')->insert(['tel' => $tel, 'username' => $username, 'password' => md5(md5($password)), 'branchs_id' => $branchs_id, 'party_status' => $party_status, 'face' => $face, 'ctime' => time(), 'company' => $company_id]);
            if ($user) {
                //查询公司
                $res = db('company')->where(['id' => $company_id])->field('company_name')->find();
                //查询支部
                $res_ = db('branchs')->where(['id' => $branchs_id])->field('branchs_name')->find();
                //查询用户id
                $uid = db('user')->where(['tel' => $tel])->field('id,face,nickname')->find();

                //定义一个空数组,把数据存入数组
                $data                 = [];
                $data['tel']          = $tel;
                $data['uid']          = $uid['id'];
                $data['face']         = $uid['face'];
                $data['nickname']     = empty($uid['nickname']) ?'': $uid['nickname'];
                $data['username']     = $username;
                $data['password']     = $password;
                $data['company_name'] = $res['company_name'];
                $data['branchs_name'] = $res_['branchs_name'];
                //判断是党员还是群众
                if ($party_status == 1) {
                    $party = '党员';
                } else {
                    $party = '群众';
                }
                $data['party_status'] = $party;

                //获取token
                $check = new Check();
                $token = $check->getnonce();

                if ($token) {
                    $data['token'] = $token . $data['uid'];
                    db('user')->where(['id' => $data['uid']])->setField('last_time', time());
                    db('user')->where(['id' => $uid['id']])->update(['token' => $data['token']]);
                } else {
                    return json(['code' => 4, 'msg' => 'token请求失败', 'data' => '']);
                }

                return json(['code' => 1, 'msg' => '注册成功', 'data' => $data]);
            } else {
                return json(['code' => 5, 'msg' => '注册失败', 'data' => '']);
            }
        } else {
            return json(['code' => 6, 'msg' => '两次输入密码不一致', 'data' => '']);
        }
    }

    /**
     *
     * 手机验证码 GET
     *
     * @param $tel string 手机号
     *
     */
    public function sendMsg()
    {

        $tel = trim(input('get.tel'));
        if (empty($tel)) {
            return json(['code' => 0, 'msg' => '参数错误', 'data' => '']);
        }

        return json(sendMsg($tel));
    }

    /**
     *
     * 重发手机验证码
     *
     * @param $signName string 签证名称
     * @param $tempCode string 模板CODE
     *
     */
    public function sendSmsMsg()
    {
        $signName = input('post.signName');
        $tempCode = input('post.tempCode');
        $tel      = session('tel');

        $this->ajaxReturn(sendMsg($tel, $signName, $tempCode));
    }

    /**
     *
     * 手机号登录 POST
     *
     * @param $tel      string 手机号
     * @param $password string 密码
     * @param $captcha  string 图形验证码
     * @param $id       string 图形验证码随机数
     */
    public function login(Request $request)
    {
        $param    = $request->param();
        $tel      = $param['tel'];
        $password = $param['password'];
        $captcha  = $param['captcha'];
        $id       = $param['id'];

        if (empty($tel) || empty($password) || empty($captcha)) {
            return json(['code' => 2, 'msg' => '请将信息填写完整', 'data' => '']);
        }

        //图形验证码验证
//        $config = Config::get('captcha');
//        if (!captcha_check($captcha, $id, $config)) {
//            return json(['code' => 3, 'msg' => '图形验证码错误', "data" => ""]);
//        }

        //检测账号是否存在
        $userModel = db('user');
        $res       = $userModel->where("tel = '$tel'")->find();
        if (!$res) {
            return json(['code' => 4, 'msg' => '该账号未注册，请先注册', 'data' => '']);
        }

        //检测账号密码是否正确
        $pass = md5(md5($password));
        $data = $userModel->field('tel,status')->where("tel = '$tel' AND password= '$pass' ")->find();
        if (!$data) {
            return json(['code' => 5, 'msg' => '账号或者密码错误', 'data' => '']);
        }

        //检测账号状态 1正常2被禁用
        if ($data['status'] == 2) {
            return json(['code' => 6, 'msg' => '账号已被禁用,请联系管理员', 'data' => '']);
        }
        unset($data['status']);
        //根据手机号查用户token和id
        $row                  = db('user')->where(['tel' => $tel])->field('company,token,face,id,username,nickname,password,branchs_id,party_status')->find();
        $branchs_id           = $row['branchs_id'];
        $branchs_name         = db('branchs')->where(['id' => $branchs_id])->field('branchs_name')->find();
        $company_id           = $row['company'];
        $company_name         = db('company')->where(['id' => $company_id])->field('company_name')->find();
        $data['uid']          = $row['id'];
        $data['token']        = $row['token'];
        $data['face']         = $row['face'];
        $data['username']     = $row['username'];
        $data['company_name'] = $company_name['company_name'];
        $data['nickname']     = empty($row['nickname']) ? '' : $row['nickname'];
        $data['branchs_name'] = $branchs_name['branchs_name'];
        $data['party_status'] = $row['branchs_id'] == 1 ? "党员" : "群众";

        //获取token
        $check = new Check();
        $token = $check->getToken($data['uid']);

        if ($token) {
            $data['token'] = $token;
            $userModel->where('id=' . $data['uid'])->setField('last_time', time());
        } else {
            return json(['code' => 7, 'msg' => 'token请求失败', 'data' => '']);
        }

        return json(['code' => 1, 'msg' => '登录成功', 'data' => $data]);
    }

    /**
     *
     * 修改密码/找回密码 POST
     *
     * @param $tel      string 手机号
     * @param $code     string 验证码
     * @param $old_pass string 旧密码
     * @param $new_pass string 新密码
     * @param $type     int 类型 1修改密码 2找回密码
     *
     */
    public function modifyPass(Request $request)
    {
        $param = $request->param();
        $tel   = $param['tel'];
        $pass  = $param['pass'];
        $pass1 = $param['pass1'];

        if (empty($tel) || empty($pass1) || empty($pass)) {
            return json(['code' => 2, 'msg' => '请将信息填写完整', 'data' => '']);
        }

        //若是修改密码 需要检测旧密码是否正确
        if ($pass1 != $pass) {
            return json(['code' => 3, 'msg' => '两次密码不一致', 'data' => '']);
        }

        //检测新密码位数
        if (strlen($pass) < 6) {
            return json(['code' => 4, 'msg' => '新密码至少6位', 'data' => '']);
        }

        //检测手机号是否存在
        $userModel = db('User');
//        $password  = $userModel->where("tel = '$tel'")->find();
//        if (!$password) {
//            return json(['code' => 0, 'msg' => '手机号不存在,请注册后登陆', 'data' => '']);
//        }

        $userModel->where("tel = '$tel'")->setField('password', md5(md5($pass)));

        return json(['code' => 1, 'msg' => '密码修改成功,请使用新密码登录', 'data' => '']);
    }

}