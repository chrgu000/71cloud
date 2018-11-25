<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/16
 * Time: 14:03
 *
 * 文章详情页
 *
 */
namespace app\home\controller;

use think\Controller;
use think\Request;

class Article extends Base{
    /**
     *
     * 一颗红心首页
     *
     */
    public function getHeartIndex(){

        return $this->fetch('/heart');
    }


    /**
     *
     * 一颗红心详情页
     * @param $id int 稿件id
     *
     */
    public function getHeartDetail(){

        $id = intval(input('id'));
        if($id <= 0) $this->error('参数错误！');

        $data = model('home/Heart')->getHeartDetail($id);
        if($data['code'] == 0){
            $this->error($data['msg']);
        }

        $this->assign('data',$data['data']);
        return $this->fetch('/heartDetail');

    }


    /**
     *
     * 活动详情页
     * @param $uid int 用户id
     * @param $id int 活动id
     *
     */
    public function getActDetail(Request $request){
        $data = $request->get();
        $uid = $data['uid'];
        $id = $data['id'];

        if($uid<=0 || $id<=0) $this->error('参数错误');

        $data = model('home/Activity')->getActDetail($uid,$id);

        $this->assign('data',$data);
        return $this->fetch('/actDetail');

    }

    /**
     *
     * 新闻详情页
     * @param $id int 新闻id
     *
     */
    public function getNewsDetail(){

        $id = intval(input('id'));
        if($id <= 0) $this->error('参数错误！');

        $data = model('home/News')->getDetail($id);

        $this->assign('data',$data);
        return $this->fetch('/newDetail');
    }


    /**
     *
     * 通知公告详情页
     *
     */
    public function getNoticeDetail(){

        $id = intval(input('id'));

        if($id <= 0) $this->error('参数错误！');

        $data = model('home/Notice')->getDetail($id);

        $this->assign('data',$data);
        return $this->fetch('/noticeDetail');

    }









}