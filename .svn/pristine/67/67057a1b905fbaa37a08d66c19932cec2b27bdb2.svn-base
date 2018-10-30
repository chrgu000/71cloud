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


class Exam extends Base{
    /**
     * 小程序使用
     * @param $tel string 用户手机号
     * @param $name string 考试名称
     *
     */
    public function score(){
        $tel = trim(input('post.tel'));
        $name = trim(input('post.name'));

        if(empty($tel) || empty($name)){
            return json(['code'=>0,'msg'=>'参数错误','data'=>'']);
            exit();
        }

        $uid = db('User')->where("tel = '$tel'")->getField('id');

        model('Home/UserScore')->addScore($uid,$name,$type=5);

        return json(['code'=>1,'msg'=>'积分成功','data'=>'']);

    }



}