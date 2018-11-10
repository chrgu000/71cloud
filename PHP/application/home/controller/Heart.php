<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 14:55
 *
 * 一颗红心接口
 *
 */
namespace app\home\controller;


use think\Request;

class Heart extends Base{

    /**
     *
     * 稿件分类
     *
     */
    public function getCate(){

        $data = db('HeartCate') ->order('sort desc')-> select();
//        dump($data);
//        die;
        //数组中添加'全部'
        array_unshift($data,['id'=>'all','name'=>'全部']);

       return json(['code'=>1,'msg'=>'','data'=>$data]);

    }

    /**
     *
     * 投稿
     * @param $time string 时间
     * @param $content int 投稿内容
     * @param $take string 照片url
     * @param $uid int 用户id
     *
     */
    public function contribute(Request $request)
    {
        $data = $request->post();
//        dump($data);
//        die();
        if(empty($data)){
            return $this->json(['code'=>0,'msg'=>'参数错误']);
        }
        $time    = intval(strtotime($data['time']));
        $content = $data['content'];
        $take    = $data['take'];
        $uid     = $data['uid'];

        if (empty($time) || empty($take) || empty($content) || empty($uid)) {
            return $this->json(['code' => 0, 'msg' => '请将信息填写完整']);
        }
        #一颗红心投稿
        $title = '一颗红心投稿';
        $res   = model('home/Heart')->contribute($time, $uid, $take, $content, $title);

        return $this->json($res);

    }


    /**
     *
     * 列表页
     * @param $cate_id int 分类id
     * @param $p int 页码
     * @param $pageSize int 页长
     *
     */
    public function getHeartList(){

        $cate_id = intval(input('get.cate_id'));
        $p = intval(input('get.p'));
        $pageSize = intval(input('get.pageSize'));

        $p = !empty($p) ? $p : 1;
        $pageSize = !empty($pageSize) ? $pageSize : 6;

        $data = model('home/Heart')->getHeartList($cate_id,$p,$pageSize);
        foreach ($data as &$v){
            $v['url'] = addDomain('home/Article/getHeartDetail/id/'.$v['id']);
        }

        return json(['code'=>1,'msg'=>'','data'=>$data]);

    }




}