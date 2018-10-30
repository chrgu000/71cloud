<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 15:27
 *
 * 活动 模型
 *
 */

namespace app\home\model;

use think\Db;
use think\Model;

class Activity extends Model
{
    /**
     *
     * 活动列表
     *
     * @param $uid int 用户id
     */
    public function getActList($uid)
    {
        //所有活动
        $data = Activity::where(['is_del' => 0])->order('ctime desc')->field('id,name,apply_etime,applied')->select();
        //已报名活动id
        $act_ids = Db::name('apply')->where('uid = ' . $uid)->field('act_id')->select();
        //二维数组转一维
        foreach ($act_ids as $key => &$value) {
            $act_ids[$key] = $value['act_id'];
        }

        foreach ($data as &$v) {
            //活动状态 0表示过期 1表示正常
            if ($v['apply_etime'] > time()) {
                $v['is_past'] = 0;
            } else {
                $v['is_past'] = 1;//过期
            }

            //时间格式化
            $v['apply_etime'] = date('Y-m-d H:i', $v['apply_etime']);

            //报名状态 0表示未报名 1表示已报名
            in_array($v['id'], $act_ids) ? $v['is_apply'] = 1 : $v['is_apply'] = 0;
        }

        //按照是否过期排序
//        array_multisort(array_column($data,'is_past'),SORT_ASC,$data);

        return $data;
    }

    /**
     *
     * 活动详情页
     *
     * @param $uid int 用户id
     * @param $id  int 活动id
     *
     *
     */
    public function getActDetail($uid, $id)
    {

        $data = $this->where('id =' . $id)->find();
        //判断当前活动 是否报名 0无 1已报名
        if (Db::name('apply')->where('uid=' . $uid . ' AND act_id = ' . $id)->find()) {
            $data['is_apply'] = 1;
        } else {
            $data['is_apply'] = 0;
        }

        //判断活动是否过期 0无 1过期
        if ($data['apply_etime'] > time()) {
            $data['is_past'] = 0;
        } else {
            $data['is_past'] = 1;
        }

        //判断活动 是否有名额 0无 1有
        if ($data['quota'] == $data['applied']) {
            $data['is_quota'] = 0;
        } else {
            $data['is_quota'] = 1;
        }

        $data['content'] = htmlspecialchars_decode($data['content']);

        return $data;
    }

    /**
     *
     * 报名
     *
     * @param $uid    int 用户id
     * @param $act_id int 活动id
     */
    public function apply($uid, $act_id)
    {
        //检查名额
        $data = Activity::where('id = ' . $act_id)->field('name,quota,applied,apply_etime')->find();
//        dump($data);
//        dump($data['applied']);
//        die;
        if ($data['applied'] == $data['quota']) {
            return ['code' => 2, 'msg' => '很抱歉，已无名额！'];
        }

        //检查报名是否结束
        if ($data['apply_etime'] < time()) {
            return ['code' => 3, 'msg' => '很抱歉，报名已截止！'];
        }

        //检查是否已报名
        $apply_model = Db::name('apply');
        if ($apply_model->where('uid = ' . $uid . ' AND act_id = ' . $act_id)->find()) {
            return ['code' => 4, 'msg' => '请勿重复报名！'];
        }

        //开启事务
        Db::startTrans();

        $data_in = ['uid' => $uid, 'act_id' => $act_id, 'ctime' => time()];
        $res = $apply_model->insert($data_in);
        if ($res) {
            $res1 = Activity::where('id = ' . $act_id)->setInc('applied');
        }

        if ($res && $res1) {
            //报名活动 积分+5
            model('home/UserScore')->addScore($uid, $data['name'], $type = 6);

            //提交事务
            Db::commit();

            return ['code' => 1, 'msg' => '恭喜您，报名成功！'];
        } else {
            //回滚
            Db::rollback();

            return ['code' => 5, 'msg' => '很遗憾，报名失败！'];
        }
    }
}