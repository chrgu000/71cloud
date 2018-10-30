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
     * @param $title string 文章标题
     * @param $cate_id int 分类id
     * @param $content string 投稿内容
     * @param $uid int 用户id
     *
     */
    public function contribute(){

        $param = json_decode(trim(file_get_contents('php://input')));
        $title = htmlspecialchars_decode($param->title);
        $cate_id =  htmlspecialchars_decode($param->cate_id);
        $content =  htmlspecialchars_decode($param->content);
        $uid =  htmlspecialchars_decode($param->uid);

        if(empty($title) || empty($cate_id) || empty($content) || empty($uid)){
            echo json_encode(['code'=>0,'msg'=>'请将信息填写完整','data'=>'']);
            exit();
        }

        $res =  model('home/Heart')->contribute($title,$uid,$cate_id,$content);
        echo json_encode($res);

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