<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 15:56
 *
 * 活动报名 接口
 *
 */

namespace app\home\controller;
use think\Controller;
use think\Request;

class Archives extends Base{

    /**
     * 档案管理小程序接口
     */

    //档案小程序验证
    public function check(Request $request){
        $param=$request->param();
        $uid=$param['uid'];
        //判断是否是党员
        $party_status=db('user')->where(['id'=>$uid])->field('party_status')->value('party_status');
        if($party_status == 2){
            return json(['code'=>0,'msg'=>'你还不是党员,无法进入!']);
        }
        //判断该党员是否录入过信息
        $current=db('party_information')->where(['id'=>$uid])->find();
        if($current){
            return json(['code'=>0,'msg'=>'你已录入过信息!']);
        }
    }

    //党员个人信息录入
    public function index(Request $request){
        $param = $request->param();
        $data['uid']=$param['uid'];//用户id
        $data['name']=$param['name'];//姓名
        $data['id_card']=$param['id_card'];//身份证
        $data['date_birth']=$param['date_birth'];//出生日期
        $data['sex']=$param['sex'];//性别
        $data['ethnic']=$param['ethnic'];//名族
        $data['degree']=$param['degree'];//学历
        $data['jobs']=$param['jobs'];//工作岗位
        if(!$data['uid'] || !$data['name'] || !$data['id_card'] || !$data['date_birth'] || !$data['sex'] || !$data['ethnic'] || !$data['degree'] || !$data['jobs']){
            return json(['code'=>0,'msg'=>'请将信息填写完整!']);
        }
        $results=db('party_information')->insert($data);
        if($results){
            return json(['code'=>1,'msg'=>'信息录入成功!']);
        }else{
            return json(['code'=>1,'msg'=>'信息录入失败!']);
        }

    }

    //党员信息录入
    public function party(Request $request){
        $param = $request->param();
        $uid=$param['uid']; //入党时间
        $data['party_time']=$param['party_time']; //入党时间
        $data['organisation_id']=$param['organisation_id'];//所属组织id
        $data['party_posts']=$param['party_posts'];//党内职务id
        $data['group_address']=$param['group_address'];//组织关系所在地

        if(!$data['party_time'] || !$data['organisation_id'] || !$data['party_posts'] || !$data['group_address']){
            return json(['code'=>0,'msg'=>'请将信息填写完整!']);
        }
        $results=db('party_information')->where(['uid'=>$uid])->update($data);
        if($results){
            $res=db('party_information')->where(['uid'=>$uid])->find();
            return json(['code'=>0,'msg'=>'信息录入成功!','data'=>$res]);
        }else{
            db('party_information')->where(['uid'=>$uid])->delete();
            return json(['code'=>0,'msg'=>'信息录入失败，请重新录入!']);
        }
    }

    //所属组织和党内职务接口
    /**
     * 注册时的组织
     */
    public function tissue(Request $request)
    {
        $param=$request->param();
        $uid=$param['uid'];
        //找公司id
        $company_id=db('user')->where(['id'=>$uid])->field('company_id')->value('company_id');
        //根据公司id找对应的支部
        $data=db('branchs')->where(['company_id'=>$company_id])->field('id,branchs_name')->select();

        return json(['code' => 1,'data' => $data]);
    }

}