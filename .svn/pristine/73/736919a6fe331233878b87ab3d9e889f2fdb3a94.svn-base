<?php

namespace app\branchadmin\controller;

use think\Controller;
use think\Request;

class DangyuanJobname extends Base
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
        //关闭模板引擎布局
        $this->view->engine->layout(false);
        // 从session中获取对应的党组织id
        $branchs_id = session('branchadmin_info.branchs_id');
        // 从党组织机构表获取对应的信息
        $data = model('Branchs')->get($branchs_id);
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
        // 接收数据
        $data = $request->param();
        // dump($data);die;
         //定义验证规则
        $rule = [
            'job_name' => 'require|min:2'
        ];
        //定义提示信息
        $msg = [
            'job_name.require' => '行政职称不能为空',
        ];
        //实例化验证类
        $validate = new \think\Validate($rule, $msg);
        //执行验证
        if( !$validate->check($data) ){
            //验证失败，报错
            $error = $validate->getError();
            $this->error($error);
        }
        $job_name = $data['job_name'];
         $branchs_id = session('branchadmin_info.branchs_id');
         $job = model('DangyuanJobname');
         $job->job_name = $job_name;
         $job->save();
         // 获取当前新增的行政职称的记录的主键id
         $jobid = $job->id;
         // 通过brachs_id 去数据库中查询到对应的job_ids，查询得到就追加，查询不到就新增一条记录即可
         $job_branch = model('DangyuanJobidBranchsid')->where('branchs_id',$branchs_id)->find();
         if(!empty($job_branch)){
            $temp = explode(',',$job_branch->job_ids);
            $temp[] = $jobid;
            $str = implode(',',$temp);
            $job_branch->job_ids = $str;
            $job_branch->save();
            $this->success('党员行政职称添加成功','lst');
         }else{
            // 查询不到直接新增一条记录即可
            model('DangyuanJobidBranchsid')->save(array('branchs_id'=>$branchs_id,'job_ids'=>$jobid));
            $this->success('党员行政职称添加成功','lst');
            
         }
    }

    /**
     * [lst 所属支部行政职称列表]
     * @param  string $value [description]
     * @return [type]        [description]
     */
    public function lst()
    {
        // 通过session获取对应的支部表c_branchs的主键id
        $branchs_id = session('branchadmin_info.branchs_id');

        // 根据branchs_id获取支部名称
        $branchs_name = model('branchs')->get($branchs_id)->branchs_name;
        // 获取当前支部所拥有的行政职称名称
        $jobsname = \app\branchadmin\model\DangyuanJobidBranchsid::branchsIdJobnames($branchs_id);
        return view('lst',['jobsname'=>$jobsname,'branchs_name'=>$branchs_name]);
    }


    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //根据c_dangyuan_jobname表的主键id获取对应的消息
        $jobinfo = model('DangyuanJobname')->get($id);
        return view('edit',['jobinfo'=>$jobinfo]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request)
    {
        $data =$request->param();
        $res = model('DangyuanJobname')->save(['job_name'=>$data['job_name']],['id'=>$data['job_id']]);
        if ($res) {
            $this->success('修改成功！','lst');
        }
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
