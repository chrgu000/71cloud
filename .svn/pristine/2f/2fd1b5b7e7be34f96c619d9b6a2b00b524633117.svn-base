<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/6
 * Time: 14:54
 *
 * 党建新闻
 *
 */
namespace app\home\controller;

use think\Controller;
use think\Db;
use think\Request;
use think\Response;

class Party extends Base{
    /**
     *
     * 党建要闻分类 GET
     *
     */
    public function getPartyCate(){
        $data = model('home/News')->getNewsCate($type=1);

        //数组中添加'全部'
        array_unshift($data,['id'=>'all','name'=>'全部']);

        return json_encode(['code' => 1,'msg'=>'','data' => $data]);

    }

    /**
     *
     * 新闻列表 GET
     * @param $cate_id int 分类id
     * @param $p int 页码
     * @param $pageSize int 页长
     * @param $uid int 用户id 非必须
     */
    public function getPartyNews(Request $request){
        $data = $request->param();
        $cate_id = $data['cate_id'];
//        $company_id = $data['company_id'];
        $p= empty($data['p'])?1:$data['p'];
        $pageSize = empty($data['pageSize']) ? 6:$data['pageSize'];
        $uid = empty($data['uid']) ? "" :$data['uid'];
//        dump($uid);

        $data = model('home/News')->getPartyNewsList($cate_id,$p,$pageSize);
        //用户点赞的新闻
        $news=array();
        if(!empty($uid)){
            $where['uid'] = $uid;
            $where['type'] = 1;
            $news = Db::name('user_score')->where($where)->select();
            foreach ($news as $k => $v){
                $news[$k] = $v['name'];
            }
        }

//        dump($news);
//        dump($data['news']);
        //图片加域名 新闻详情页拼链接
        foreach ($data['news'] as &$v){
            $v['thumb'] = addDomain($v['thumb']);
            $v['url'] = addDomain('home/Article/getNewsDetail?id='.$v['id']);
            //点赞状态 0未点赞 1已点赞
            $v['is_praise'] = in_array($v['title'],$news) ?  1 : 0;

        }
//        dump($data);
//        die;
        foreach ($data['recommend'] as &$v){
            $v['thumb'] = addDomain($v['thumb']);
            $v['url'] = addDomain('home/Article/getNewsDetail?id='.$v['id']);

            //点赞状态 0未点赞 1已点赞
            $v['is_praise'] = in_array($v['title'],$news) ?  1 : 0;
            unset($v['content']);
        }

        return json_encode(['code'=>1,'msg'=>'','data'=>$data]);

    }






}
