<?php

namespace app\branchadmin\controller;

use think\Request;
use think\Validate;

class Exampaper extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $company_id = session('branchadmin_info.company_id');
//        die();
        $data = model('Exampaper')->where(['company_id' => $company_id])->select();
       return view('index',['data'=>$data]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        // 获取当前用户的所属组织id
        $company_id = session('branchadmin_info.company_id');
        $data       = model('ExamActivity')->where('company_id', $company_id)->select();
        return view('create',['data'=>$data]);
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        // 数据合法性验证先省略
//        dump($request->param());
        $data = $request->param();
        // 检测参数格式，表单验证
        // 定义验证规则
        $rule = [
            'exam_activity_id'=>'require',
            'question_num'=>'require',
            'exampaper_name'=>'require',
            'long_time'=>'require',
            'score'=>'require',
            'pass_score'=>'require'
        ];
        // 定义提示信息
        $msg = [
            'exam_activity_id.require'=>'所属活动不能为空',
            'question_num.require'=>'题目数量不能为空！',
            'exampaper_name.require'=>'试卷名称不能为空',
            'long_time.require'=>'考试时长不能为空',
            'score.require'=>'试卷总分值不能为空',
            'pass_score.require'=>'试卷及格分数不能为空'
        ];
        // 实例化验证器类
        $validate = new Validate($rule,$msg);
        //执行验证
        if( !$validate->check($data) ){
            //验证失败，报错
            $error = $validate->getError();
            $this->error($error);
        }
        $question_num = $data['question_num'];
        // 获取对应的组织的所有的题目表的主键id
        $company_id = session('branchadmin_info.company_id');
        // 获取题目表中对应组织所有的试题的总数量
        $count = model('ExamQuestions')->where('company_id', $company_id)->count();
        // 判断如果用户选择的题目数量大于其所属组织的题目总数量就为不合法进行跳转
        if($question_num > $count)
        {
            $this->error('题目总数量选择不合法，请重新选择');
        }
        $all_questionid = \think\Db::table('c_exam_questions')->where('company_id', $company_id)->column('id');
//        dump($all_questionid);die;
        // 将试卷的主键id构成的数组打乱，然后从中抽取对应用户勾选的数量的数据
        shuffle($all_questionid);
        // array_slice() 返回根据 offset 和 length 参数所指定的 array 数组中的一段序列。
        $result_arry = array_slice($all_questionid,0,$question_num);
        $result_str  = implode(',',$result_arry);
        // 将接收到的时间转换为时间戳秒数的形式
        $data['long_time']     = $data['long_time'] * 3600;
        $data['questions_ids'] = $result_str;
        $data['company_id']    = $company_id;
        unset($data['question_num']);
        // 创建对应的试卷记录
        $res =  model('Exampaper')->data($data)->save();
        if ($res)
        {
            $this->success("试卷添加成功！",'index');
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //传入的$id对应的试卷表的主键id
        // 通过试卷id获取对应试卷表的相关相信
        $paper_info = \think\Db::table('c_exampaper')->find($id);
        $questions_ids = $paper_info['questions_ids'];
        // 通过主键ids，去题目表查找所有的题目
        $questions_info = model('ExamQuestions')->where('id','in',$questions_ids)->select();
        return view('read',['questions_info'=>$questions_info,'paper_info'=>$paper_info,'paper_id'=>$id]);
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function test()
    {
//        dump(request()->param());die;
//        $data = request()->param();
//        $paper_id = request()->param()['exampaper_id'];
//        // 通过试卷表主键id，获取对应的题目表的主键ids
//        $question_ids = model('Exampaper')->find($paper_id)->questions_ids;
//        // 通过题目表的主键ids获取题目的答案组成的数组
//        $arr_rightanswer  = model('ExamQuestions')->where('id','in',$question_ids)->select();
//        // 保存遍历有规律的数组，键名为questions表的主键id，值为客户提交的对应的选项
//        $res = array();
//        foreach ($data as $k => $v)
//        {
//            if ($k == 'exampaper_id')
//            {
//                continue;
//            }
//            $temp = explode('-',$k);
//            $res[$temp[1]] = $v;
//        }

    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
