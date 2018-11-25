<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@613.com
 * Date: 2018/7/11
 * Time: 13:27
 *
 * 活动
 *
 */
namespace app\admin\controller;

use think\Request;

class Activity extends Base{

    /**
     * 活动列表
     *
     */
    public function index(){

        $logmin = strtotime(trim(input('get.logmin')));
        $logmax = strtotime(trim(input('get.logmax')));
        $name = trim(input('get.name'));

        $map = [];
        $map['is_del'] = 0;
        //日期筛选
        if($logmin && $logmax) $map['ctime'] = ['between',"$logmin,$logmax"];

        //标题筛选
        if($name) $map['name'] = ['LIKE',"%$name%"];

        //活动
        $data = db('Activity')->alias('a')
            ->field('id,name,ctime,quota,applied,apply_etime,time,address')
            ->where($map)
            ->select();

        //数据总数量
        $count = count($data);

        $this->assign('count',$count);
        $this->assign('data',$data);
        return $this->fetch();

    }

    /**
     * 添加活动
     *
     */
    public function add(){
        if(Request::instance()->isGet()){

            return $this->fetch();
        }else{
            $name = trim(input('post.name'));
            $time = strtotime(trim(input('post.time')));
            $address = trim(input('post.address'));
            $apply_etime = strtotime(trim(input('post.apply_etime')));
            $quota = intval(input('post.quota'));
            $content = input('post.content');

            if(!$name || !$time || !$address || !$apply_etime || !$quota || !$content){
                return json(['code' => 0,'msg' => '请将信息填写完整！']);
            }

            //检测重名
            $ActModel = db('Activity');
            if($ActModel -> where("name  = '$name'") -> find()){
                return json(['code' => 0,'msg' => '名称重复！']);
            }


            $data = [
                'name'          =>  $name,
                'time'          =>  $time,
                'address'       =>  $address,
                'apply_etime'   =>  $apply_etime,
                'quota'         =>  $quota,
                'content'       =>  $content,
                'ctime'         =>  time()
            ];

            $ActModel -> insert($data);
            return json(['code' => 1,'msg' => '添加成功！']);

        }

    }

    /**
     * 编辑活动
     * @param       $id     int     新闻id
     *
     */
    public function edit(){
        $id = intval(input('id'));
        if($id <= 0){
            return json(['code' => 0,'msg' => '参数错误！']);
        }
        if(Request::instance()->isGet()){

            $data =db('Activity')->field('id,name,ctime,quota,applied,apply_etime,time,address,content') ->where('id = '.$id) ->find();
            $data['content'] = htmlspecialchars_decode($data['content']);

            $this->assign('data',$data);
            return $this->fetch();
        }else{

            $name = trim(input('post.name'));
            $time = strtotime(trim(input('post.time')));
            $address = trim(input('post.address'));
            $apply_etime = strtotime(trim(input('post.apply_etime')));
            $quota = intval(input('post.quota'));
            $content = input('post.content');

            if(!$name || !$time || !$address || !$apply_etime || !$quota || !$content){
                return json(['code' => 0,'msg' => '请将信息填写完整！']);
            }

            //检测重名
            $ActModel = db('Activity');
            if($ActModel -> where("name  = '$name' AND id != $id") -> find()){
                return json(['code' => 0,'msg' => '名称重复！']);
            }


            $data = [
                'name'          =>  $name,
                'time'          =>  $time,
                'address'       =>  $address,
                'apply_etime'   =>  $apply_etime,
                'quota'         =>  $quota,
                'content'       =>  $content,
                'ctime'         =>  time()
            ];

            $ActModel -> where('id = '.$id) -> update($data);
            return json(['code' => 1,'msg' => '修改成功！']);


        }


    }


    /**
     * 活动删除
     * @param       $id     int     活动id
     *
     *
     */
    public function del(){
        $id = intval(input('post.id'));
        if($id <= 0) return json(['code' => 0,'msg' => '参数错误！']);


        db('Activity') -> where('id = '.$id) -> setField(['dtime' => time(),'is_del' => 1]);
        return json(['code' => 1,'msg' => '删除成功！']);


    }


    /**
     *
     * 报名人员
     * @param       $id     int     活动id
     */
    public function showApplied(){
        $id = intval(input('get.id'));
        if($id <= 0) return json(['code' => 0,'msg' => '参数错误！']);


        $data = db('Apply')->alias('a')
            ->join('p_user b', 'a.uid = b.id')
            ->field('a.ctime,b.id,b.username,b.face,b.tel,b.company')
            ->where('a.act_id = '.$id)
            ->select();


        $this->assign('data',$data);
        return $this->fetch();

    }




}
