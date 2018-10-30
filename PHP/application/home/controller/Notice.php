<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 17:41
 *
 * 通知公告 接口
 *
 */
namespace app\home\controller;


class Notice extends Base{
    /**
     *
     * 通知列表
     *
     */
    public function getNotice(){
        $cate_id = intval(input('get.cate_id'));
        $p = intval(input('get.p'));
        $pageSize = intval(input('get.pageSize'));

        $p = !empty($p) ? $p : 1;
        $pageSize = !empty($pageSize) ? $pageSize : 6;

        $data = model('home/Notice')->getNoticeList($cate_id,$p,$pageSize);
        foreach ($data as &$v){
            $v['thumb'] = addDomain($v['thumb']);
            $v['url'] = addDomain('home/Article/getNoticeDetail/id/'.$v['id']);
        }

        return json(['code'=>1,'msg'=>'','data'=>$data]);

    }


    /**
     *
     * 分类
     *
     */
    public function getCate(){

        $data = db('NoticeCate')->field('id,name')->order('sort desc')->select();
        array_unshift($data,['id'=>'all','name'=>'全部']);
        return json(['code'=>1,'msg'=>'','data'=>$data]);
    }


}