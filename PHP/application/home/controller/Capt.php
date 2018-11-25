<?php
namespace Home\Controller;

use captcha\Captcha;
class Capt extends Base{

    // 登录验证码
    public function captcha()
    {
        $config = [
        // 验证码加密密钥
        'codeSet' => '2345678',
        // 验证码字体大小(px)
        'fontSize' => 20,
        // 验证码图片高度
        'imageH' => 40,
        // 验证码图片宽度
        'imageW' => 120,
        // 验证码位数
        'length' => 4,
        ];
        $referer = $this->request->header('referer');
        $captcha = new Captcha($config);
        return $captcha->entry(md5($referer));
    }
}