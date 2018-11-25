<?php
namespace app\home\controller;

use think\Redis;

class SpiImgVerify
{

    public $code = null;

    /**
     * 生成图片验证码
     * 
     * @author baiyouwen
     */
    public function spi_captcha($id = '', $imei = '')
    {
        $cap = new \think\captcha\Captcha();
        $img = $cap->entry($id);
        $this->code = $cap->getCode();
        $this->code = implode('', $this->code);
        
        // save code into redis
        $redis = new Redis();
        file_put_contents('../runtime/captcha.txt', $this->code . PHP_EOL, FILE_APPEND);
        $redisCodeKey = sprintf(config('app_login_img_code'), $imei);
        $redis->set($redisCodeKey, $this->code, config('app_login_img_code_expire_time'));
        
        return $img;
    }

    /**
     * 验证
     * 
     */
    public function spi_captcha_check($imgCode, $imei = '')
    {
        $redis = new Redis();
        $codeKey = sprintf(config('app_login_img_code'), $imei);
        $redisImgCode = $redis->get($codeKey);
        if (strtoupper($redisImgCode) == strtoupper($imgCode)) {
            return true;
        }
        return false;
    }
}
