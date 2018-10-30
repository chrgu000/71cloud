<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 11:16
 *
 * 党史故事 接口
 *
 */
namespace app\home\controller;


class History extends Base{

    /**
     *
     * 分类
     *
     */
    public function getHistoryCate(){

        $cate = model('home/History')->getCate();

        return json(['code'=>1,'msg'=>'','data'=>$cate]);

    }


    /**
     *
     * 视频列表
     * @param  $cate_id  int  分类id
     *
     */
    public function getHistory(){
        $cate_id = intval(input('get.cate_id'));
        if($cate_id <= 0){
            echo json_encode(['code'=>0,'msg'=>'参数错误','data'=>'']);
            exit();
        }

        $data = model('home/History')->getHistoryList($cate_id);
        foreach ($data as &$v){
            $v['thumb'] =  addDomain($v['thumb']);
        }
        return json(['code'=>1,'msg'=>'','data'=>$data]);
    }

    /**
     *
     * 视频详情页
     * @param      $id          int     视频id
     *
     */
    public function getHistoryDetail(){
        $id = intval(input('get.id'));
        if($id <= 0) echo json_encode(['code'=>1,'msg'=>'参数错误','data'=>'']);

        $data = model('home/History')->getHistoryDetail($id);

        foreach ($data["data"] as $key=>$v){
            $key=(int)$key;
            $data["data"][$key]['thumb'] = addDomain($v['thumb']);

        }

        return json(['code'=>1,'msg'=>'','data'=>$data]);



    }





}