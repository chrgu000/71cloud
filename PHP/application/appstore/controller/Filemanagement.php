<?php
/**
 * Created by PhpStorm.
 * Filemanagement.php
 * author: Mr_peng
 * Date: 2018/11/16
 * Time: 14:40
 * description:
 */
namespace app\appstore\controller;

use Qiniu\Config;
use think\Controller;
use think\Request;

include  EXTEND_PATH."baidu_face/AipFace.php";

class Filemanagement extends Controller{

        /**
         * 百度人脸检测
         */
        public function index(Request $request)
        {
            $param = $request->param();
            $app_id = \think\Config::get("app_id");
            $api_key = \think\Config::get("api_key");
            $secret_key = \think\Config::get("secret_key");

            $client = new \AipFace($app_id,$api_key,$secret_key);

            //$image = "取决于image_type参数，传入BASE64字符串或URL字符串或FACE_TOKEN字符串";
            //$image ="http://img4.imgtn.bdimg.com/it/u=161290607,2674713101&fm=26&gp=0.jpg";
            $uid=$param['uid'];
            $image=$param['url'];
            $imageType = "URL";
            $options["max_face_num"] = 10;

            //222202图片中没有人脸
            //222203无法解析人脸
            //222204从图片的url中下载图片失败
            // 带参数调用人脸检测
            $data=$client->detect($image, $imageType,$options);

            if($data['error_code']==222204){
                return json(['code'=>1,'type'=>0,'msg'=>'从图片的url中下载图片失败']);
            }
            if($data['error_code']==222203){
                return json(['code'=>1,'type'=>1,'msg'=>'无法解析人脸']);
            }
            if($data['error_code']==222202){
                return json(['code'=>1,'type'=>2,'msg'=>'图片中没有人脸']);
            }
            //检测的人脸数量
            $face_num=$data['result']['face_num'];
            if($data['error_code']==0){

                if($face_num==1){
                    db('party_information')->insert(['uid'=>$uid,'img'=>$image]);
                    return json(['code'=>1,'type'=>3,'msg'=>'人脸识别成功']);
                }else{
                    return json(['code'=>1,'type'=>4,'msg'=>'只能识别一张人脸']);
                }

            }


        }

}