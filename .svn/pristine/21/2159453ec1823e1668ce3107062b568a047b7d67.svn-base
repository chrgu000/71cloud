<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/13
 * Time: 15:00
 *
 * 七牛文件上传接口
 *
 */
namespace app\home\controller;
use Qiniu\Auth;

require_once '../vendor/Qiniu/autoload.php';

class Qiniu extends Base{
    /**
     *
     * APP使用
     *
     */
    public function upload(){
        $accessKey = Config("UPLOAD_FILE_QINIU")['driverConfig']['accessKey'];
        $secretKey = Config("UPLOAD_FILE_QINIU")['driverConfig']['secretKey'];

        $bucket = Config("UPLOAD_FILE_QINIU")['driverConfig']['bucket'];

        $auth = new Auth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        echo json_encode(['code'=>1,'msg'=>'','token'=>$token]);

    }





}