<?php

namespace app\branchadmin\controller;

use think\Controller;
use think\Request;

include EXTEND.'/WeChatDeveloper/include.php';
class WechatMenu extends Controller
{
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
