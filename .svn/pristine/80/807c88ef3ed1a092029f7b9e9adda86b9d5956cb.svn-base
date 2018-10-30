<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 17:30
 *
 * 通知
 *
 */
namespace app\home\model;

use think\Model;

class Notice extends Model{
    /**
     *
     * 通知列表页
     *
     */
    public function getNoticeList($cate_id = null,$p,$pageSize){

        //新闻
        $map = [];
        $map['is_del'] = 0;

        //分类筛选
        if($cate_id != null && $cate_id != 'all'){
            $map['cate_id'] = $cate_id;
        }

        //获取分页数据
        $data = db('notice')
            -> field('id,title,thumb,ctime,istop')
            -> where($map)
            -> order('istop desc,ctime desc')
            -> page($p,$pageSize)
            -> select();

        //数据格式化
        foreach ($data as &$v){
            $v['ctime'] = date('Y-m-d', $v['ctime']);
            $v['istop'] = empty($v['istop']) ?  '' : '置顶';
        }

        return $data;

    }

    /**
     *
     * 详情页
     *
     */
    public function getDetail($id){

        $data = db('Notice')->field('title,content,ctime')->where('id = '.$id)->find();
        $data['content'] = htmlspecialchars_decode($data['content']);

        return $data;
    }



}