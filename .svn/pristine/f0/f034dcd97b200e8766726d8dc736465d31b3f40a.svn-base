<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 9:07
 *
 * 反腐倡廉接口
 *
 */
namespace app\home\controller;


class Clear extends Base {

    /**
     *
     * 反腐倡廉分类 GET
     *
     */
    public function getClearCate(){
        $data = model('home/News')->getNewsCate($type=2);
        //数组中添加'全部'
        array_unshift($data,['id'=>'all','name'=>'全部']);

        return json(['code' => 1,'msg'=>'','data' => $data]);

    }

    /**
     *
     * 反腐倡廉-新闻列表 GET
     * @param $cate_id int 分类id
     * @param $p int 页码
     * @param $pageSize int 页长
     * @param $uid int 用户id 非必须
     *
     */
    public function getClearNews(){
        $cate_id = intval(input('get.cate_id'));
        $p = intval(input('get.p'));
        $pageSize = intval(input('get.pageSize'));
        $uid = intval(input('get.uid'));

        $p = !empty($p) ? $p : 1;
        $pageSize = !empty($pageSize) ? $pageSize : 6;

        //定义一个空数组防止不传uid  $news为空报未定义错误
        $news=array();

        //用户点赞的新闻id
        if(!empty($uid)){
            $news = db('UserScore')->field('name')->where('uid='.$uid.' AND type=1 ')->select();
            foreach ($news as $k => $v){
                $news[$k] = $v['name'];
            }
        }

        $data = model('home/News')->getClearNewsList($cate_id,$p,$pageSize);



        //图片加域名 新闻详情页拼链接
        foreach ($data as &$v){
            $v['thumb'] = addDomain($v['thumb']);
            $v['url'] = addDomain('home/Article/getNewsDetail/id/'.$v['id']);

            //点赞状态 0未点赞 1已点赞
            $v['is_praise'] = in_array($v['title'],$news) ?  1 : 0;


        }


        return json(['code'=>1,'msg'=>'','data'=>$data]);

    }




}