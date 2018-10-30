<?php
/**
 * Created by PhpStorm.
 * WeChatLn.php
 * author: Mr_peng
 * Date: 2018/10/13
 * Time: 13:53
 * description:
 */
namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Config;
include EXTEND.'/WeChatDeveloper/include.php';


class WeChatLn extends Controller
{
    /**
     * 微信配置验证url
     * @return bool
     */
    public function index()
    {
        header("Content-type: text/html; charset=utf-8");
        $data = Request::instance()->get();
        $signature = $data['signature'];
        $timestamp = $data['timestamp'];
        $nonce = $data['nonce'];
        $echostr = $data['echostr'];

        //计算微信签名
        $token = 'smile_pengchang';
        //将参数组成一维数组
        $signeSeed = [$token, $timestamp, $nonce];
        //对参数字典序排序
        sort($signeSeed, SORT_STRING);
        //拼接成字符串
        $signeStr = implode($signeSeed);
        //加密字符串成签名
        $signeHash = sha1($signeStr);

        if ($signeHash == $signature) {
            echo $echostr;
        }else{
            return false;
        }
    }


    public function menu()
    {
        $config = [
            'token'          => 'zheshipengchangdeceshihao',
            'appid'          => 'wx6b1ad519e78f6251',
            'appsecret'      => '69a9ce0216cb5cd0c330e792c0b7295f',
            'encodingaeskey' => 'tKGhed1XgOPUZwDRTRAhVDxVVHZFEnFbIea13ZDwm4n',
        ];

        try {

            // 实例对应的接口对象
            $user = new \WeChat\User($config);

            // 调用接口对象方法
            $list = $user->getUserList();

            // 处理返回的结果
            echo '<pre>';
            var_export($list);

        } catch (Exception $e) {

            // 出错啦，处理下吧
            echo $e->getMessage() . PHP_EOL;

        }
    }

}
