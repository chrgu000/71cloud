<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 15:56
 *
 * 活动报名 接口
 *
 */

namespace app\home\controller;

use think\Request;

class Activity extends Base
{
    /**
     *
     * 活动列表
     *
     * @param $uid  int 用户id
     * @param $type int 活动类型 1表示待报名2表示已报名3表示所有活动
     *
     */
    public function getAct(Request $request)
    {
        $data = $request->get();
        $type = $data['type'];
        $uid  = $data['uid'];

        if (empty($type) || empty($uid)) {
            return json(['code' => 1, 'msg' => '参数错误', 'data' => '']);
        }

        $data = model('home/Activity')->getActList($uid);
//            dump($data);
//            die();
        $data = empty($data) ? [] : $data;
        if ($type == 3) {
            //全部活动

            foreach ($data as &$v) {
                $v['url'] = addDomain('home/Article/getActDetail/?id=' . $v['id'] . '&uid=' . $uid);
            }

            return json(['code' => 1, 'msg' => '', 'data' => $data]);
        } elseif ($type == 1) {
            //待报名
            $no_apply = [];
            foreach ($data as &$v) {
                $v['url'] = addDomain('home/Article/getActDetail/?id=' . $v['id'] . '&uid=' . $uid);
                if ($v['is_apply'] == 0) {
                    $no_apply[] = $v;
                }
            }

            return json(['code' => 1, 'msg' => '', 'data' => $no_apply]);
        } elseif ($type == 2) {
            //已报名
            $apply = [];
            foreach ($data as &$v) {
                $v['url'] = addDomain('home/Article/getActDetail/?id=' . $v['id'] . '&uid=' . $uid);
                if ($v['is_apply'] == 1) {
                    $apply[] = $v;
                }
            }

            return json(['code' => 1, 'msg' => '', 'data' => $apply]);
        }
    }

//    /**
//     *
//     * 详情页
//     * @param $uid int 用户id
//     * @param $id int 活动id
//     *
//     */
//    public function getActDetail(){
//        $uid = intval(I('get.uid'));
//        $id = intval(I('get.id'));
//
//        if($uid<=0 || $id<=0) $this->error('参数错误');
//
//        $data = D('Home/Activity')->getActDetail($uid,$id);
//
//        $this->assign('data',$data);
//        $this->display('/actDetail');
//
//
//    }

    /**
     *
     * 报名
     *
     * @param $uid    int 用户id
     * @param $act_id int 活动id
     *
     *
     */
    public function apply(Request $request)
    {
        $data   = $request->post();
        $uid    = $data['uid'];
        $act_id = $data['act_id'];
        if (empty($uid) || empty($act_id)) {
            return json(['code' => 0, 'msg' => '参数错误', 'data' => '']);
        }

        $res = model('home/Activity')->apply($uid, $act_id);

        return json($res);
    }

}