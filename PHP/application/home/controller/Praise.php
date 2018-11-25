<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/14
 * Time: 9:01
 *
 * 点赞接口
 *
 */

namespace app\home\controller;

use think\Request;

class Praise extends Base
{
    /**
     *
     * 点赞
     *
     * @param $id   int 新闻id
     * @param $uid  int 用户id
     * @param $type int 类型 1点赞 2取消点赞
     *
     *
     */
    public function index(Request $request)
    {
        $param = $request->param();
        $id    = $param['id'];
        $uid   = $param['uid'];

        $newModel = db('News');
        $name     = $newModel->where('id', $id)->column('title');
        $name     = $name[0];
//        $res = db('UserScore')->where("name = '$name' AND uid = $uid")->find();
//            dump($res);
//        die;
        if (db('UserScore')->where("name = '$name' AND uid = $uid")->find()) {
            #取消点赞
            //点赞量-1
            $newModel->where('id', $id)->setDec('praise');

            //删除之前的积分
            db('UserScore')->where("uid = $uid AND name = '$name' AND type = 1 ")->delete();

            return json(['code' => 1, 'msg' => '取消点赞成功', 'data' => '']);
        } else {
            #点赞
            //看新闻点赞 积分+1
            $res = model('home/UserScore')->addScore($uid, $name, $type = 1);

            //点赞量+1
            $res = $newModel->where('id', $id)->setInc('praise');
            if ($res['code']== 0){
                return json(['code' => 1, 'msg' => '点赞成功', 'data' => '']);
            }

            return json(['code' => 1, 'msg' => '点赞成功', 'data' => '']);
        }
    }

}