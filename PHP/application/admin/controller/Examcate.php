<?php
namespace app\admin\controller;
use think\Request;

class Examcate extends Base{
    /**
     * 系统后台题目分类页
     */
    //分类首页
    public function index(){
        //接收搜索框传过来的值
        $exampaper_name=input('get.exampaper_name');
        //定义一个空数组放条件
        $map = [];

        //题目筛选
        if($exampaper_name){
            $map['exampaper_name'] = ['LIKE',"%$exampaper_name%"];
        }
        //查找数据
        $data=db('exampaper_admin')
            ->field('id,exampaper_name,questions_ids,long_time,score,pass_score,exam_questions_num')
            ->where($map)
            ->where(['is_admin'=>0])
            ->select();
        $count=count($data);
        $this->assign('count',$count);
        $this->assign('data',$data);
        return $this->fetch();
    }


    //添加分类
    public function add(){
        if(Request::instance()->isPost()){
            //接受数据
            $data=input('post.');

            if(!$data['exampaper_name'] || !$data['long_time'] || !$data['score'] || !$data['pass_score'] || !$data['exam_questions_num']){
                return json (['code' => 0,'msg' => '请将信息填写完整！']);
            }
            //查找题目所有id
            $id=db('exam_questions')->field('id')->column('id');
            //随机抽取指定数量题目id
            $rand_num=array_rand($id,10);
            //转成字符串
            $data['questions_ids']=implode(',',$rand_num);
            //存入添加时间
            $data['create_time']=time();
            $data['is_admin']=0;
            db('exampaper_admin')->insert($data);
            return json(['code'=>1,'msg'=>'添加成功!']);
        }
        return $this->fetch();

    }

    //修改
    public function edit(){
        //获取修改的id
        $id=input('id');
        if(Request::instance()->isGet()){
            $data=db('exampaper_admin')->where(['id'=>$id])->find();
            $this->assign('data',$data);
        }else{
            $data=input('post.');
            if(!$data['exampaper_name'] || !$data['long_time'] || !$data['score'] || !$data['pass_score'] || !$data['exam_questions_num']){
                return json (['code' => 0,'msg' => '请将信息填写完整！']);
            }

            db('exampaper_admin')->where(['id'=>$id,'is_admin'=>0])->update($data);
            return json(['code'=>1,'msg'=>'修改成功']);
        }
        return $this->fetch();
    }

    public function del(){
        $id=input('id');
        db('exampaper_admin')->where(['id'=>$id,'is_admin'=>0])->delete();
        return json(['code'=>1,'msg'=>'删除成功']);
    }

}