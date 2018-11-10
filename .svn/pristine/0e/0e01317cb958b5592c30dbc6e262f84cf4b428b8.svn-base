<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;

/**
 * 管理员
 *
 */

class Admin extends Base{

    //启用账号状态
    public function status(){
       $id=input('id');

        $res=db('branch_admin')->where(array('id'=>$id))->update(array('status'=>1));
        if($res){
            $message=array(
                "error"=>0,
                "message"=>"修改成功"
            );
        }else{
            $message=array(
                "error"=>1,
                "message"=>"修改失败"
            );
        }
        return json($message);
    }

    //停用账号状态
    public function statu(){
        $id=input('id');

        $res=db('branch_admin')->where(array('id'=>$id))->update(array('status'=>0));
        if($res){
            $message=array(
                "error"=>0,
                "message"=>"修改成功"
            );
        }else{
            $message=array(
                "error"=>1,
                "message"=>"修改失败"
            );
        }
        return json($message);
    }



    //管理员列表
    public function adminindex(){

        //查询共有多少条数据
        $num=db('admin')->count();
        //查管理员表
        $res=db('admin')->select();

        $this->assign('res',$res);
        $this->assign('num',$num);

        return $this->fetch('admin/admin-list');
    }

    //管理员添加
    public function insert(){
        if (Request::instance()->isPost()){
            //获取post数据
            $res = input('post.');

            //把当前时间戳存到$res里
            $res['ctime'] = time();


            if($res['admin_password'] != $res['admin_password2']){
                return json(['code'=>0,'msg'=>'两次输入密码不一致，请重新输入']);
            }else{
                if(strlen($res['admin_password'])<6){
                    return json(['code'=>0,'msg'=>'请输入6位数以上密码']);
                }else{

                    //加密密码
                    $res['admin_password'] = encrypt_password($res['admin_password']);

                    //去掉$res中bradmin_password2字段
                    unset($res['admin_password2']);

                    //将post里的数据插入到数据库
                    db('admin')->insert($res);
                    return json(['code'=>1,'msg'=>'添加成功']);
                }
            }

        }


        return $this->fetch('admin/admin-add');
    }


    //管理员修改及密码修改
    public function update(){
        $id=input('id');
        //查询修改的数据
        $res=db('admin')->where(array('id'=>$id))->find();
        if(Request::instance()->isPost()) {
            $row = input('post.');

            //加密post传过来的密码
            $admin_password = encrypt_password($row['admin_password']);


            $result = db('admin')->where(array('id' => $id, 'admin_password' => $admin_password))->select();
            //查询当前修改记录的密码
            $pass = db('admin')->where(array('id' => $id))->field('admin_password')->find();

            //判断输入的原密码是否和数据库密码一致
            if ($admin_password == $pass['admin_password']) {
                //判断修改的密码是否大于6位数
                if(strlen($row['admin_password1'])<6){
                    return json(['code'=>0,'msg'=>'请输入6位数以上密码']);
                }
                //判断新密码和确认密码是否一致
                if($row['admin_password1']!=$row['admin_password2']){
                    return json(['code'=>0,'msg'=>'新密码与确认密码不一致']);
                }
                unset($row['admin_password']);//删除原密码
                unset($row['admin_password2']);//删除确认密码
                $row['admin_password'] = encrypt_password($row['admin_password1']);
                unset($row['admin_password1']);//删除新密码

                $row['utime'] = time();//获取时间
                //将修改的数据插入数据库
                db('admin')->where(array('id' => $id))->update($row);
                return json(['code'=>1,'msg'=>'修改成功']);


            } else {
                return json(['code'=>0,'msg'=>'原密码错误']);
            }
        }
        $this->assign('res',$res);
        return $this->fetch('admin/admin-edit');
    }

    //管理员删除
    public function del(){
        $id=input('id');
        $res=db('admin')->where(array('id'=>$id))->delete();
        return json(['code'=>1,'msg'=>'删除成功']);
    }



}