<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/14
 * Time: 15:30
 *
 * 用户消息
 *
 */
namespace app\home\model;

use think\Model;

class UserMsg extends Model{

    /**
     *
     * 消息列表
     * @param $uid int 用户id
     *
     */
    public function getUserMsg($uid){

        //获取所有消息
        $data = $this->field('id,type,message,ctime,is_see')->where('uid='.$uid)->order('ctime desc')->select();
        foreach ($data as &$v){
            //消息状态 投稿成功消息为1  失败消息为2
//            if(strpos($v['message'],'已被采用') !== false){
//                $v['status'] = 1 ;
//            }elseif (strpos($v['message'],'未被采用') !== false){
//                $v['status'] = 2 ;
//            }
            $v['ctime'] = date('Y-m-d', $v['ctime']);
        }

        //更改查看状态
        $this->where('uid='.$uid.' AND is_see = 0')->setField('is_see',1);

        return $data;


    }





}