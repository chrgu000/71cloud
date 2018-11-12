<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/13
 * Time: 16:44
 *
 * 一颗红心
 *
 */
namespace app\home\model;

use think\Model;

class Heart extends Model{
    /**
     *
     * 投稿
     * @param $time string 入党时间
     * @param $content int 投稿内容
     * @param $take string 照片url
     * @param $uid int 用户id
     *
     */
    public function contribute($time, $uid, $take, $content, $title, $department)
    {

        $res = $this->insert(['rudang_time' => $time, 'title' => $title, 'uid' => $uid, 'take' => $take, 'content' => $content, 'ctime' => time(), 'department' => $department]);

        if($res){
            //积分 +2
            model('home/UserScore')->addScore($uid, $title, $type = 3);
           return ['code' => 1,'msg' => '恭喜您，投稿成功，请等待审核！'];
        }else{
           return ['code' => 0,'msg' => '很抱歉，投稿失败，请稍后再试！'];
        }


    }

    /**
     *
     * 稿件列表页
     * @param $p int 页码
     * @param $pageSize int 页长
     */
    public function getHeartList($p, $pageSize, $uid)
    {
        $map = [];
        $map['a.is_del'] = 0;

        $map['a.title'] = '一颗红心投稿';
//        $map['a.uid'] = $uid;

        //审核通过
        $map['a.status'] = 1;

        $data = $this->alias('a')
            ->field('a.id,a.title,a.ctime,b.username,a.take,a.content,a.department,c.company_name')
            ->join('c_user b','a.uid = b.id')
            ->join('company c', 'c.id = b.company_id')
            ->where($map)
            ->order('a.ctime desc')
            ->page($p,$pageSize)
            ->select();

        //数据格式化
        foreach ($data as &$v){
            $v['ctime']      = date('Y' . '年' . 'm' . '月', $v['ctime']);
            $v['department'] = empty($v['department']) ? '测试部门' : $v['department'];

        }
        $num = $this->alias('a')
            ->field('a.id,a.title,a.ctime,b.username,a.take,a.content,a.department,c.company_name')
            ->join('c_user b', 'a.uid = b.id')
            ->join('company c', 'c.id = b.company_id')
            ->where($map)
            ->order('a.ctime desc')
            ->count();

        $sum = ceil($num / $pageSize);

        return ['sum' => $sum, 'data' => $data];


    }

    /**
     *
     * 详情页
     * @param $id int 稿件id
     *
     */
    public function getHeartDetail($id){

        $data = $this->field('title,content,ctime,status,is_del') -> where('id = '.$id) -> find();

        if($data['is_del'] == 1){
            return ['code'=>0,'msg'=>'稿件已删除','data'=>''];
        }

        if($data['status'] == 1){
            return ['code'=>0,'msg'=>'稿件正在审核中','data'=>''];
        }else if($data['status'] == 3){
            return ['code'=>0,'msg'=>'稿件审核未通过','data'=>''];
        }

        $data['content'] = htmlspecialchars_decode($data['content']);

        return ['code'=>1,'msg'=>'','data'=>$data];



    }




}