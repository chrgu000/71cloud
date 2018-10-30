<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;

class Weixin extends Controller{
   public $branch = array();
   public  $rand = array(); //随机数数组
   public function __construct(Request $request = null)
   {
       parent::__construct($request);
       $branch =  db('branch')->select();
       $this->rand  = array_merge(range("A","Z"),range("a","z"),range(0,9));
   }

    //公众号列表
    public function index(){
        //查找微信表总记录条数
        $num=db('weixin')->count();
        //查找微信表
        $data =  db('weixin')->select();

        foreach($data as $k=>&$v){
            //查找支部管理员表支部名称
           $v['branch_name']=db('branch_admin')->where(array('id'=>$v['branch_id']))->field('branch_company')->find();

           //查找角色名称
           $v['role_name']=db('role')->where(array('id'=>$v['role_id']))->field('name')->find();
        }


        $this->assign("num",$num);
        $this->assign("data",$data);
        return $this->fetch('Weixin/index');
    }

    //公众号修改
    public function edit(){
        $id =input("id");
        //查找角色
        $role = db('role')->field("id,name")->select();
        //查找当前修改的weixin表角色id
        $wrole = db('weixin')->where(array('id'=>$id))->field("role_id")->find();


        //查找微信公众号
        $data = db('weixin')->where(array("id"=>$id))->find();
        //查找支部
        $rows=db('branch_admin')->field('branch_company,id')->select();
        //查找当前修改的支部id
        $crows=db('weixin')->where(array('id'=>$id))->field('branch_id')->find();
        if(Request::instance()->isPost()){
            $post=input('post.');
            db('weixin')->where(array('id'=>$id))->update($post);
            $this->redirect('index');
        }



        $this->assign("data",$data);
        $this->assign("role",$role);
        $this->assign("rows",$rows);
        $this->assign("wrole",$wrole);
        $this->assign("crows",$crows);
        return $this->fetch('Weixin/edit');
    }



    //公众号添加
    public function add(){
       if(Request::instance()->isPost()){
           $data = input("post.");
           //把当前毫秒生成的随机数存入$data中
           $data['rand']=$this->geturlnonce();
           $data = db('weixin')->insert($data);
           $this->redirect("index");die;
       }
        //查找角色
        $role = db('role')->field("id,name")->select();
        //查找支部
        $rows=db('branch_admin')->field('branch_company,id')->select();

        $this->assign("role",$role);
        $this->assign("rows",$rows);
        $this->assign("branch",$this->branch);
        return $this->fetch('Weixin/add');
    }


    //公众号删除
    public function del(){
        $id=input('id');
        $rows=db('weixin')->where(array('id'=>$id))->delete();
        $this->redirect('index');
    }

    /*//公众号权限
    public function permission(){
        return $this->fetch('Weixin/permission');
    }


    //公众号权限添加
    public function peradd(){
        return $this->fetch('Weixin/permission-add');
    }*/

    //验证
    public  function check(){
        $id =input("id");
        $res = db('weixin')->where(array("id"=>$id))->find();
        //判断token是否为空
        if(empty($res["check_token"])){
             $check_token = $this->getnonce();
            db('weixin')->where(array("id"=>$id))->update(array("check_token"=>$check_token));
            $res["check_token"] =$check_token;
        }
        //判断aeskey是否为空
        if(empty($res["check_aeskey"])){
            $check_aeskey = $this->getnonce(25);
            db('weixin')->where(array("id"=>$id))->update(array("check_aeskey"=>$check_aeskey));
            $res["check_aeskey"] =$check_aeskey;
        }
        //判断地址是否为空
        if(empty($res["check_url"])) {
            $res["check_url"] = Config("check_url");
            //查找当前验证的公众号的随机数
            $rand=db('weixin')->where(array('id'=>$id))->field('rand')->find();

            $res["check_url"].='/'.$rand['rand'];

            }

        $this->assign('res',$res);
        return $this->fetch('weixin/check');
    }

    //随机生成随机数
    public function getnonce($length = 8){
         $token ="";
         $token_arr = $this->rand;
            shuffle($token_arr);
            $count = count($token_arr);
             for($i=0;$i<=$length;$i++){
                 $index = rand(0,$count-1);
                 $token.=$token_arr[$index];
             }
            return $token;
    }
    //用当前毫秒拼接随机数
    function geturlnonce(){
        $time = microtime(true);
        $str= $time.$this->getnonce(8);
        return md5($str);

    }




}
