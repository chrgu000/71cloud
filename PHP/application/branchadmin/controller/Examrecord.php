<?php
namespace app\branchadmin\controller;

use think\Request;
use think\Validate;

class Examrecord extends Base{

    /**
     *考试记录
     */

    //考试记录首页
    public function index(){
        //获取session里公司id
        $company_id = session('branchadmin_info.company_id');
        $data=db('exam_info')
            ->alias('a')
            ->join('c_user b','a.user_id=b.id')
            ->join('c_exam_activity c','c.id=a.exam_activity_id')
            ->join('c_exampaper d','d.id = exampaper_id')
            ->where(['a.company_id'=>$company_id,'b.company_id'=>$company_id,'c.company_id'=>$company_id,'d.company_id'=>$company_id])
            ->field('b.username,c.exam_activity_name,d.exampaper_name,d.pass_score,d.score,d.exam_questions_num,a.id,a.result_score,a.right_num,a.use_time,a.create_time')
            ->select();
        $count=count($data);
       return view('index',['count'=>$count,'data'=>$data]);
    }




}
