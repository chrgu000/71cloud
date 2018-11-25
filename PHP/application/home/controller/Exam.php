<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/14
 * Time: 8:31
 *
 * 考试积分接口
 *
 */
namespace app\home\controller;
use think\Controller;
use think\Request;
include_once "wxBizDataCrypt.php";

class Exam extends Base{
    /**
     * 小程序授权免登录
     */
    //调用微信接口获取sessionkey
    public function score(Request $request){

        //接收参数
        $param   = $request->param();
        $appid = $param['appid'];
        $appsecret=$param['appsecret'];


        //接收code
        $code=$param['code'];

        if(!isset($code)){
            return json(['code'=>0,'msg'=>'code凭证不能为空']);
        }

        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, "https://api.weixin.qq.com/sns/jscode2session?appid=$appid&secret=$appsecret&js_code=$code&grant_type=authorization_code");//输入自己的微信公众号APPID和secret
        //设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); //不验证证书

        curl_setopt($curl, CURLOPT_HEADER, 0);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //执行命令
        $data = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        //显示获得的数据
        $data=json_decode($data,true);

        if(!empty($data)){
            return json(['code'=>1,'data'=>$data['session_key']]);
        }else{
            return json(['code'=>0,'data'=>'']);
        }



    }

    //获取用户微信信息
    public function index(Request $request){
        $param = $request->param();
        $encryptedData= $param['encryptedData'];
        $iv= $param['iv'];
        $appid = $param['appid'];
        $sessionKey = $param['sessionkey'];

        $pc = new WXBizDataCrypt($appid, $sessionKey);
        $errCode = $pc->decryptData($encryptedData, $iv, $data );

        if ($errCode == 0) {
            $data=json_decode($data,true);
            $row=db('user')->where(['unionid'=>$data['unionId']])->find();
            if($row){
                $res=[
                  'code'=>1,
                  'data'=>[
                      'uid'=>$row['id'],
                      'username'=>$row['username'],
                      'tel'=>$row['tel'],
                      'token'=>$row['token'],
                      'company_id'=>$row['company_id'],
                      'openid'=>$row['openid'],
                      'unionid'=>$row['unionid'],
                      'headimgurl'=>$row['face'],
                      'nickname'=>$row['nickname'],
                      'party_status'=>$row['party_status'],
                  ]
                ];
                return json(['code'=>1,'data'=>$res]);
            }else{
                return json(['code'=>0,'msg'=>'请登录!','data'=>'']);
            }
            //print($data . "\n");
        } else {
            return json(['code'=>0,'data'=>'请登录!']);
            //print($errCode . "\n");
        }
    }




}