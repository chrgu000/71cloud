<?php
namespace app\branchadmin\controller;
use think\Request;

class Examcate extends Base{
    /**
     * 关卡页面
     */
    //关卡首页
    public function index(){
        //关闭临时公共模板
        $this->view->engine->layout(false);
        //从session中获取当前的组织id
        $company_id = session('branchadmin_info.company_id');
        if(Request::instance()->isAjax()){
            $data=input('post.');
            if(empty($data['activity'])){
                return json(['code'=>0,'msg'=>'请选择所属活动']);
            }
            if(empty($data['company'])){
                return json(['code'=>0,'msg'=>'请勾选关卡']);
            }

            //活动id
            $activity_id=$data['activity'];

            $row=implode(',',$data['company']);

            $res=db('exampaper_admin')->where(['id'=>array('in',$row)])->select();
            foreach ($res as $k=>&$v){
                //存入活动id和公司id
                $v['exam_activity_id']=$activity_id;
                $v['company_id']=$company_id;
                //删除字段
                unset($v['is_admin']);
                unset($v['id']);
            }
            //批量插入
            db('exampaper')->insertAll($res);
            return json(['code'=>1,'msg'=>'关卡添加成功']);

        }

        //接收搜索框传过来的值
        $exampaper_name=input('get.exampaper_name');
        //定义一个空数组放条件
        $map = [];

        //题目筛选
        if($exampaper_name){
            $map['exampaper_name'] = ['LIKE',"%$exampaper_name%"];
        }


        //查找该公司的活动
        $activity=db('exam_activity')->where(['company_id'=>$company_id])->field('id,exam_activity_name')->select();

        //查找数据
        $data=db('exampaper_admin')
            ->field('id,exampaper_name,questions_ids,long_time,score,pass_score,exam_questions_num,is_admin')
            ->where($map)
            ->select();
        $count=count($data);
        $this->assign('count',$count);
        $this->assign('activity',$activity);
        $this->assign('data',$data);
        return $this->fetch();
    }


    //添加关卡
    public function add(){
        //关闭临时公共模板
        $this->view->engine->layout(false);
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
            //1代表客户后台添加
            $data['is_admin']=1;
            db('exampaper_admin')->insert($data);
            return json(['code'=>1,'msg'=>'添加成功!']);
        }
        return $this->fetch();

    }

    //修改关卡
    public function edit(){
        //关闭临时公共模板
        $this->view->engine->layout(false);
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

            db('exampaper_admin')->where(['id'=>$id,'is_admin'=>1])->update($data);
            return json(['code'=>1,'msg'=>'修改成功']);
        }
        return $this->fetch();
    }

    //删除关卡
    public function del(){
        $id=input('id');
        print_r($id);die;
        db('exampaper_admin')->where(['id'=>$id,'is_admin'=>1])->delete();
        return json(['code'=>1,'msg'=>'删除成功']);
    }

}