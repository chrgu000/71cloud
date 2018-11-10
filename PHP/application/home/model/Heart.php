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
    public function contribute($time,$uid,$take,$content,$title){

        $res = $this->insert(['title' => $title, 'uid' => $uid, 'take' => $take, 'content' => $content, 'ctime' => time()]);

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
     * @param $cate_id int 分类id
     * @param $p int 页码
     * @param $pageSize int 页长
     */
    public function getHeartList($cate_id = null,$p,$pageSize){
        $map = [];
        $map['a.is_del'] = 0;

        if($cate_id != null && $cate_id != 'all'){
            $map['a.cate_id'] = $cate_id;
        }

        //审核通过
        $map['a.status'] = 2;

        $data = $this->alias('a')
            ->field('a.id,a.title,a.ctime,b.username,b.face')
            ->join('c_user b','a.uid = b.id')
            ->where($map)
            ->order('a.ctime desc')
            ->page($p,$pageSize)
            ->select();

        //数据格式化
        foreach ($data as &$v){
            $v['ctime'] = date('Y-m-d',$v['ctime']);
        }

        return $data;


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