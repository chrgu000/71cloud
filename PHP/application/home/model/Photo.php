<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 9:45
 *
 * 党建相册 模型
 *
 */

namespace app\home\model;

use think\Model;

class Photo extends Model{
    /**
     *
     * 列表页
     *
     */
    public function getPhotoList($p,$pageSize){

        $data =db('Photo')->alias('a')
            ->join('c_photo_img b','a.id = b.photo_id')
            ->field('a.id,a.name,a.ctime,GROUP_CONCAT(b.path) path')
            ->where('a.is_del = 0')
            ->group('a.id')
            ->order('a.ctime desc')
            ->page($p,$pageSize)
            ->select();

        foreach ($data as &$v){
            $v['path'] =explode(',', $v['path']);
            $v['ctime'] = date('Y-m-d H:i:s',$v['ctime']);
        }

        return $data;



    }


    /**
     *
     * 详情页
     *
     *
     */
    public function getPhotoDetail($id){

        $data = db('Photo')->alias('a')
            ->join('c_photo_img b','a.id = b.photo_id')
            ->field('a.id,a.name,a.content,GROUP_CONCAT(b.path) path')
            ->where('a.id ='.$id)
            ->find();

        $data['path'] =explode(',', $data['path']);
        $data['content'] = convertContent($data['content'],100);

        $count = count($data['path']);


        return ['data'=>$data,'count'=>$count];


    }



}