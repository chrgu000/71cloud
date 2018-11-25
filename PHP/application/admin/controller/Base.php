<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;

class Base extends Controller
{


    //构造方法
    public function __construct(Request $request)
    {
        parent::__construct($request);
        //登录判断
        if(!session('admin')){
            //没有登录，跳转到登录页
            $this->redirect('admin/login/index');
        }



    }

    /**
     * 单图片上传
     * @param       $name        string      上传文件name值
     *
     */
    public function uploadOne($name,$maxSize=null){
        $upload = new \Think\Upload();// 实例化上传类
        if($maxSize == null){
            $upload->maxSize = 102400; //文件上传的最大文件大小（以字节为单位）
        }else{
            $upload->maxSize = $maxSize;
        }
        if($_FILES['thumb']['size'] > $upload->maxSize ){
            $this->ajaxReturn(['code' => 0,'msg' =>'图片尺寸过大，限制大小100k !' ]);
        };
        $info   =   $upload->uploadOne($_FILES[$name]);
        if(!$info){
            $this->ajaxReturn(['code' => 0,'msg' =>'图片上传失败 !' ]);
        }

        $img = 'Uploads/'.$info['savepath'].$info['savename'];

        return $img;
    }


}

