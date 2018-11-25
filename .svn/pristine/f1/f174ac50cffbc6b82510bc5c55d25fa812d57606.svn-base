<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
class Message extends Base{

    /**
     * 消息列表
    **/
    public function index(){
        //联表查询
        $data =Db::table('c_branch_message')->alias('a')
            ->join('c_branch_admin b','b.id=a.receive_id')
            ->join('c_company c','c.id=b.company_id')
            ->where('b.id=a.receive_id')
            ->where('c.id=b.company_id')
            ->field('b.bradmin_username,a.content,a.send_id,a.receive_id,a.create_time,a.id,a.title')
            ->order('create_time desc')
            ->select();
        //查询总记录条数
        $num=db('branch_message')->where(array('is_admin'=>1))->count();

        foreach ($data as $k=>&$v){
            $v['company_id']=db('branch_admin')->where('id','in',$v['receive_id'])->field('company_id')->select();
            //把二维数组转成一维数组
            $v['coid'] = array_column($v['company_id'],'company_id',0);
            //根据支部管理员id查找对应的公司名
            $v['company_name']=db('company')->where('id','in',$v['coid'])->field('company_name')->select();
            //把二维数组转成一维数组
            $v['company_name'] = array_column($v['company_name'],'company_name',0);
            //用逗号把公司名称隔开
            $v['company_name']=implode(',',$v['company_name']);
        }
        $this->assign('num',$num);
        $this->assign('data',$data);
        return $this->fetch('message/index');
    }

    //发送消息
    public function add(){
        //查找管理员收件人
        $data=db('branch_admin')->alias('a')
            ->join('c_company b','a.company_id=b.id')
            ->where('a.company_id=b.id')
            ->field('a.id,a.bradmin_username,b.company_name')
            ->select();

        if (Request::instance()->isPost()) {
            $res=input('post.');
            //判断收件人是否为空
            if(empty($res['receive_id'])){
                return json(['code'=>0,'msg'=>'请选择收件人']);
            }
            $rows=array();
            foreach ($res['receive_id'] as $k=>$v){
                $rows[$k]['receive_id']=$v;
                //当前时间存入数组
                $rows[$k]['create_time']=time();
                //获取当前管理员(发件人)id
                $admin_id = input('session.admin.id');
                $rows[$k]['send_id']=$admin_id;
                $rows[$k]['content']=$res['content'];
                $rows[$k]['title']=$res['title'];
                $rows[$k]['is_admin']=1;
            }

            //用逗号分隔收件人id
            //$res['receive_id']=implode(',',$res['receive_id']);

            foreach ($rows as $k1=>$v1){
                $results=db('branch_message')->insert($v1);
            }


            if($results){
                return json(['code'=>1,'msg'=>'发送成功']);
            }else{
                return json(['code'=>0,'msg'=>'发送失败']);
            }
        }
        $this->assign('data',$data);
        return $this->fetch('message/add');
    }




    public function del(){
        $id=input('id');
        $results=db('branch_message')->where(array('id'=>$id))->delete();
        if($results){
            return json(['code'=>1,'msg'=>'删除成功']);
        }else{
            return json(['code'=>1,'msg'=>'删除失败']);
        }
    }



}