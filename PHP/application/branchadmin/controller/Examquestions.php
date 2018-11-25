<?php

namespace app\branchadmin\controller;

use think\Controller;
use think\Request;
use think\Validate;

class Examquestions extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return view();
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->param();
        // 检测参数格式，表单验证
        // 定义验证规则
        $rule = [
            'content'=>'require|min:3',
            'opt1'=>'require',
            'opt2'=>'require',
            'opt3'=>'require',
            'opt4'=>'require',
            'answer_k'=>'require'
        ];
        // 定义提示信息
        $msg = [
            'content.require'=>'题干内容不能不能为空',
            'opt1.require'=>'可选项1不能为空',
            'opt2.require'=>'可选项2不能为空',
            'opt3.require'=>'可选项3不能为空',
            'opt4.require'=>'可选项4不能为空',
            'answer_k.require'=>'正确选项不能为空'
        ];
        // 实例化验证器类
        $validate = new Validate($rule,$msg);
        //执行验证
        if( !$validate->check($data) ){
            //验证失败，报错
            $error = $validate->getError();
            $this->error($error);
        }
        $data['branchs_id'] = session('branchadmin_info.branchs_id');
        $res = model('ExamQuestions')->data($data)->save();
        if ($res){
            $this->success("添加题目成功！");
        }
    }

// 测试用
//    public function test()
//    {
//        $data = model('ExamQuestions')->select();
        // 将对象转换为标准数组
//        $data = (new \think\Collection($data))->toArray();
//        $user = model('ExamQuestions');
//        foreach($data as &$v)
//        {
//            $temp['opt1'] = $v['opt1'];
//            $temp['opt2'] = $v['opt2'];
//            $temp['opt3'] = $v['opt3'];
//            $temp['opt4'] = $v['opt4'];
//            // 将键与值进行反转
//            $temp = array_flip($temp);
////            dump($temp);die;
//            if (empty($temp[$v['answer_k']]))
//            {
//                continue;
//            }
//            $v['answer_k'] = $temp[$v['answer_k']];
//            $v['branchs_id'] = 1;
//        }
//        $user->saveAll($data);

//        $data = model('ExamQuestions')->paginate(5,10);
//        return view('test',['data'=>$data]);
//    }


    /**
     * 测试使用
     */
    public function testsave()
    {
//        dump(request()->param());die;
        $data = request()->param();
        $res = array();
        foreach($data as $k=>$v)
        {
            $temp = explode('-',$k);
//            dump($temp);
            $res[$temp[1]] = $v;
        }
//        dump($res);die;
        $count = 0;
        foreach ($res as $k=>$v) {
            $eachres = model('ExamQuestions')->find($k);
//            dump($eachres->answer_k);
            if ($eachres->answer_k == $v)
            {
                $count++;
                echo "第" .$k."题你答对了，恭喜你";
                echo '<br>';
            }
        }
        echo "<hr>";
        echo "您最终结果答对题数为：".$count;
//        $result =  model('Test')->data(['test'=>$json])->save();

    }

    /**
     * 测试使用
     */
    public function requestTest()
    {
        $data = model('Test')->value('test');
//        dump($data);die;
        $obj = json_decode($data,true);
        dump($obj);
    }


    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {

    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
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
