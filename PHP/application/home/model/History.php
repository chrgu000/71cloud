<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 10:55
 *
 * 党史故事接口
 *
 */
namespace app\home\model;

use think\Model;

class History extends Model{
    /**
     *
     * 分类
     *
     */
    public function getCate(){
        $cate = M('HistoryCate')->field('id,name')->order('sort desc')->select();

        return $cate;

    }

    /**
     *
     * 列表页
     * @param $cate_id int 分类id
     *
     */
    public function getHistoryList($cate_id){

        $data =$this->field('id,name,thumb,episode')->where('cate_id='.$cate_id.' AND is_del = 0')->order('episode asc')->select();
        foreach ($data as &$v){
            $v['episode'] = '第'.numToWord($v['episode']).'集';
        }

        return $data;


    }

    /**
     *
     * 详情页
     * @param $id int 视频id
     *
     */
    public function getHistoryDetail($id){
        //当前视频信息
        $video = $this->field('id,name,cate_id,thumb,path')->where('id='.$id)->find();
        $cate_id = $video['cate_id'];

        //分类介绍
        $introduce = M('HistoryCate')->field('name,introduce')->where('id='.$cate_id)->find();
        $introduce['introduce'] = htmlspecialchars_decode($introduce['introduce']);

        //分类下所有视频
        $data = $this->field('id,name,episode,thumb,path')->where('cate_id='.$cate_id.' AND is_del = 0')->order('episode asc')->select();
        foreach ($data as &$v){
            $v['episode'] = '第'.numToWord($v['episode']).'集';
        }

        return ['video'=>$video,'introduce'=>$introduce,'data'=>$data];


    }




}