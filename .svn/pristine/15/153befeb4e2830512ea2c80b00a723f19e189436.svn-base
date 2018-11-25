<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/14
 * Time: 9:42
 *
 * 用户模型
 *
 */

namespace app\home\model;

use think\Db;
use think\Model;

class User extends Model
{
    /**
     *
     * 个人积分排行
     *
     * @param $uid  int 用户id
     * @param $time string 年月
     * @param $type int 类型 1月度排名  2年度排名
     *
     */
    public function getUserRank($time = null, $type, $uid)
    {

        //日期筛选
        if ($time == null || $type == 2) {
            //$type==2 供app接口使用 获取本年排行
            if ($type == 1) {
                //本月排行
                $start = mktime(0, 0, 0, date('m'), 1, date('Y')); //本月开始
                $end   = mktime(23, 59, 59, date('m'), date('t'), date('Y')); //本月结束

            } else {
                //本年排行
                $start = strtotime(date("Y", time()) . "-1" . "-1"); //本年开始
                $end   = strtotime(date("Y", time()) . "-12" . "-31"); //本年结束
            }
        } else {
            $time  = explode('-', $time);
            $year  = $time[0];
            $month = $time[1];

            $start = mktime(0, 0, 0, date($month), 1, date($year));
            $end   = mktime(23, 59, 59, date($month), date('t'), date($year));
        }

        //积分
        $sql = "select a.id,a.username,a.nickname,a.face,GROUP_CONCAT(b.score) as score from c_user as a left join c_user_score as b on a.id = b.uid  where b.ctime between $start and $end group by a.id";

        $data = User::query($sql);

        //统计总分
        foreach ($data as &$v) {
            $v['score']       = explode(',', $v['score']);
            $v['total_score'] = array_sum($v['score']);
            unset($v['score']);
            //当前用户信息
            if ($v['id'] == $uid) {
                $user = $v;
            }
        }
        //按照总分排序
        array_multisort(array_column($data, 'total_score'), SORT_DESC, $data);

        //个人信息 总分 排名
        if (empty($user)) {
            //当前用户没有积分
            $user['total_score'] = 0;
            $user['rank']        = 0;
        } else {
            //寻找当前用户的键名
            $uid_key      = array_search($uid, array_column($data, 'id'));
            $user         = $data[$uid_key];
            $user['rank'] = $uid_key + 1;
        }
        $res_user             = Db::name('user')->field('id,username,face,branchs_id,company_id,nickname')->where('id=' . $uid)->find();
        $branchs_id           = $res_user['branchs_id'];
        $res                  = db('branchs')->where(['id' => $branchs_id])->field('branchs_name')->find();
        $company_id_id           = $res_user['company_id'];
        $res_                 = db('company')->where(['id' => $company_id_id])->field('company_name')->find();
        $user['branchs_name'] = $res['branchs_name'];
        $user['company_name'] = $res_['company_name'];

        $user['face']     = $res_user['face'];
        $user['username'] = empty($res_user['username']) ? '' : $res_user['username'];
        $user['nickname'] = $res_user['nickname'];
        $user['id']       = $res_user['id'];

        return ['user' => $user, 'data' => $data];
    }

    /**
     *
     * 单位排行榜
     *
     * @param $uid  int 用户id
     * @param $time string 年月
     * @param $type int 类型 1本月度排名  2本年度排名
     *
     */
    public function getCompanyRank($time = null, $type, $uid)
    {

        if ($time == null || $type == 2) {//$type==2 供app接口使用 获取本年排行
            //本月 本年度排名
            if ($type == 1) {
                //本月排行
                $start = mktime(0, 0, 0, date('m'), 1, date('Y')); //本月开始
                $end   = mktime(23, 59, 59, date('m'), date('t'), date('Y')); //本月结束
            } else {
                //本年排行
                $start = strtotime(date("Y", time()) . "-1" . "-1"); //本年开始
                $end   = strtotime(date("Y", time()) . "-12" . "-31"); //本年结束
            }
        } else {
            //日期筛选
            $time  = explode('-', $time);
            $year  = $time[0];
            $month = $time[1];

            $start = mktime(0, 0, 0, date($month), 1, date($year));
            $end   = mktime(23, 59, 59, date($month), date('t'), date($year));
        }

        //积分
//        $map['b.ctime'] = ['between', "$start,$end"];

//        //统计公司总人数
//        $data = $this->field('GROUP_CONCAT(id) as uid,company_id')->group('company_id')->select();
//
//        //统计公司总分数
//        $data1 = $this->alias('a')
//            ->field('a.company_id,GROUP_CONCAT(b.score) as score')
//            ->join('LEFT JOIN p_user_score as b on a.id = b.uid')
//            ->where($map)
//            ->group('a.company_id')
//            ->select();


//        统计支部总人数company_id
        $data  = User::field('GROUP_CONCAT(id) as uid,company_id')->group('company_id')->select();
        //随机取一个公司id查支部id
//        dump(User::getLastSql());
        $sql   = "select a.company_id,GROUP_CONCAT(b.score) as score from c_user as a left join c_user_score as b on a.id = b.uid where b.ctime between $start and $end group by a.company_id";
//        dump($sql);
//        die;
        $data1 = User::query($sql);

//        dump($data);
//        dump($data1);
//        die();

        foreach ($data as $k => &$v) {
            $v['total_score'] = 0;//初始化
            $v['avg_score']   = 0;//初始化
            $v['user_num']    = count(explode(',', $v['uid']));//公司总人数
            foreach ($data1 as $key => $value) {
                if ($v['company_id'] == $value['company_id']) {

                    $v['total_score'] = array_sum(explode(',', $value['score'])); //公司总积分
                    $v['avg_score']   = round($v['total_score'] / $v['user_num'], 2); //公司平均积分  总分/公司总人数
                }
            }

            if (empty($v['company_id'])) {
                unset($data[$k]);
//                unset($data[$k]['uid']);
            }//删除没有填写公司名的用户
        }
//        die(1);
        //按照总分排序
        $data = collection($data)->toArray();

        $test = array_column($data, 'avg_score');

        array_multisort($test, SORT_DESC, $data);

        //当前用户所属公司排名
        $user = $this->field('username,face,company_id')->where('id=' . $uid)->find();
        //寻找当前用户的键名
        $uid_key = array_search($user['company_id'], array_column($data, 'company_id'));

        if ($uid_key === false) {
            $user['avg_score'] = 0;
            $user['rank']      = 0;
        } else {
            $user['avg_score'] = $data[$uid_key]['avg_score'];
            $user['rank']      = $uid_key + 1;
        }
//        $company_id = $user['company_id'];
        $user['company_name'] =  Db::name('company')->where(['id'=>$user['company_id']])->value('company_name');
//        dump($data);
//        die();
        foreach ($data as &$v){
            unset($v['uid']);
            $company_id = $v['company_id'];

            $v['company_name'] = Db::name('company')->where(['id'=>$company_id])->value('company_name');
//            dump($v['company_name']);
        }
        return ['user' => $user, 'data' => $data];

//        if ($time == null || $type == 2) {
//            //$type==2 供app接口使用 获取本年排行
//            //本月 本年度排名
//            if ($type == 1) {
//                //本月排行
//                $start = mktime(0, 0, 0, date('m'), 1, date('Y')); //本月开始
//                $end   = mktime(23, 59, 59, date('m'), date('t'), date('Y')); //本月结束
//            } else {
//                //本年排行
//                $start = strtotime(date("Y", time()) . "-1" . "-1"); //本年开始
//                $end   = strtotime(date("Y", time()) . "-12" . "-31"); //本年结束
//            }
//        } else {
//            //日期筛选
//            $time  = explode('-', $time);
//            $year  = $time[0];
//            $month = $time[1];
//
//            $start = mktime(0, 0, 0, date($month), 1, date($year));
//            $end   = mktime(23, 59, 59, date($month), date('t'), date($year));
//        }
//
//        //统计支部总人数company_id
//        $data  = User::field('GROUP_CONCAT(id) as uid,branchs_id')->group('branchs_id')->select();
//        //随机取一个公司id查支部id
//        $branchs_id = $data[0]['branchs_id'];
//
////        dump($data);
////        die();
//        $sql   = "select a.branchs_id,GROUP_CONCAT(b.score) as score from c_user as a left join c_user_score as b on a.id = b.uid where b.ctime between $start and $end group by a.branchs_id";
//        $data1 = User::query($sql);
//        //统计支部总分数
////        dump($data);
////        dump($data1);
////        die();
////        dump($sql);
//
//        foreach ($data as $k => &$v) {
//            $v['total_score'] = 0;//初始化
//            $v['avg_score']   = 0;//初始化
//            $v['user_num']    = count(explode(',', $v['uid']));//公司总人数
//            foreach ($data1 as $key => $value) {
//                if ($v['branchs_id'] == $value['branchs_id']) {
//                    $branchs_id = $value['branchs_id'];
//                    $res        = db('branchs')->where(['id' => $branchs_id])->field('branchs_name')->find();
////                    dump($res);
//                    $v['branchs_name'] = $res['branchs_name'];
//                    $v['branchs_id'] = $branchs_id;
//                    $v['total_score']  = array_sum(explode(',', $value['score'])); //公司总积分
//                    $v['avg_score']    = round($v['total_score'] / $v['user_num'], 2); //公司平均积分  总分/公司总人数
//                }
//            }
//
//            if (empty($v['branchs_name'])) {
//                unset($data[$k]);
//            }
//            //删除没有填写公司名的用户
//            unset($data[$k]['uid']);
//        }
//
//
//        //按照总分排序
//        array_multisort(array_column($data, 'avg_score'), SORT_DESC, $data);
//
//        //当前用户所属公司排名
//        $user = $this->field('username,face,company_id,branchs_id')->where('id=' . $uid)->find()->toArray();
//
////        所属公司
//        $company_id_id   = $user['company_id'];
//        $company_id_name = db('company_id')->where(['id' => $company_id_id])->field('company_id_name')->find();
//
////        dump($data);
//        $test = array_column($data, 'company_id');
////        dump($test);
//        //寻找当前用户的键名
//        $uid_key = array_search($user['company_id'], array_column($data, 'company_id'));
//
////        dump($uid_key);
////        die;
//        if ($uid_key === false) {
//            $user['avg_score'] = 0;
//            $user['rank']      = 0;
//        } else {
//            $user['avg_score'] = $data[$uid_key]['avg_score'];
//            $user['rank']      = $uid_key + 1;
//        }
//
//
///*
//        //当前用户所属支部排名
//        $user = User::field('username,face,branchs_id,company_id')->where('id=' . $uid)->find()->toArray();
//            dump($user);
//            die();
//        //查询公司
//        $company_id_id   = $user['company_id'];
//        $company_id_name = db('company_id')->where(['id' => $company_id_id])->field('company_id_name')->find();
//        //寻找当前用户的键名
////        dump($user['branchs_id']);
////        dump(array_column($data, 'branchs_id'));
//        $i = 0;
//        foreach ($data as $v){
//            $branchs_id_arr[$i] = $v['branchs_id'];
//            $i++;
//        }
//        $uid_key              = array_search($user['branchs_id'], $branchs_id_arr);
////        dump($uid_key);
////        die();
//        $user['company_id_name'] = $company_id_name['company_id_name'];
//        if ($uid_key === false) {
//            $user['avg_score'] = 0;
//            $user['rank']      = 0;
//        } else {
//            $user['avg_score'] = $data[$uid_key]['avg_score'];
//            $user['rank']      = $uid_key+1;
//        }*/
//
//        return ['user' => $user, 'data' => $data];

    }

}