<?php

namespace app\branchadmin\controller;

use think\Controller;
use think\Request;
use think\Db;
use think\Validate;
class Dangyuan extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */

    public function permission()
    {
        //关闭临时模板
        $this->view->engine->layout(false);
        // branchs_id 对应c_dangyuan的pid
        $branchs_id = session('branchadmin_info.branchs_id');
        // 通过查询对应的党组织pid实现对应的管理员只能访问所属组织的党员信息
        // paginate实现分页显示数据
        // 原生SQL语句为：select d.*,j.job_name,b.branchs_name from c_dangyuan d left join c_dangyuan_jobname j on d.job_id = j.id left join c_branchs b on d.pid = b.id where d.pid = $branchs_id  
        $data = model('Dangyuan')->alias('d')
                ->field('d.*,b.branchs_name,j.job_name')
                ->join('c_branchs b','d.pid = b.id','left')
                ->join('c_dangyuan_jobname j','d.job_id = j.id','left')
                ->where('d.pid',$branchs_id)
                ->paginate(3);
        return view('permission',['data'=>$data]);
    }



    /**
     * [memberadd 新增党员页面]
     * @return [type] [description]
     */
    public function memberadd()
    {
         //临时关闭模板布局
        $this->view->engine->layout(false);
        // 获取当前用户的组织branchs_id
        $branchs_id = session('branchadmin_info.branchs_id');
        // 从c_branchs中获取对应的党支部消息
        $branchsinfo = model('Branchs')->get($branchs_id);
        // 根据组织id获取对应的所有的行政职称信息
        $jobsname = \app\branchadmin\model\DangyuanJobidBranchsid::branchsIdJobnames($branchs_id);
        return view('memberadd',['branchsinfo'=>$branchsinfo,'jobsname'=>$jobsname]);
    }

    public function membersave(Request $request)
    {
        // dump($request->param());die;
        // 接收当前的请求参数
        $data = $request->param();
        //定义验证规则
         $rules = [
         'job_id'=>'require',
        'member_name' => 'require|min:2|max:45',
         ];

         //定义错误提示信息
         $msg = [
         'member_name' => '党员名称不正确',
         'job_id' => '党员职称必须选择',
         ];

         //实例化验证器类
         $validate = new Validate($rules,$msg);

         //执行验证 调用check方法
         if (!$validate->check($data)) {
            # 验证失败  调用getError方法获取具体的错误提示
            $error = $validate->getError();
            $this->error($error);
         }
         // 调用upload_img进行图片上传
          $file = request()->file('member_img');

           if ($file) {
                $data['member_img'] =  $this->upload_img();
            }
            $data['member_is'] = 1;  //通过后台管理员直接添加的党员默认就为党员了
            $data['pid'] = session('branchadmin_info.branchs_id');

            $info = \app\branchadmin\model\Dangyuan::create($data,true);
            if ($info) {
                $this->success('添加党员成功','permission');
            }
    }

    // 定义图片上传方法,实现党员头像上传
    private function upload_img()
    {
        $file = request()->file('member_img');
        if (empty($file)) {
            $this->error($file->getError());
        }

        $info = $file->validate(['size'=> 5*1024*1024,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH.'public'.DS.'Uploads');
        if ($info) {
            // 上传图片成功，获取文件访问路径并返回
            $img_logo = DS.'Uploads'.DS.$info->getSaveName();
             // 使用open方法打开原始图片
             $image = \think\Image::open('.'.$img_logo);
             //调用thumb方法生成缩略图，调用save方法保存缩略图
            $image->thumb(200,120)->save('.'.$img_logo);
             return $img_logo;
        }else{
            // 上传出错
            $error = $file->getError();
            $this->error($error);
        }
    }

    /**
     * [dangyuanindex 党员信息列表]
     * @return [type] [description]
     */

    // 审核党员信息
    public function status(Request $request)
    {
        $data = $request->param();
        // 接收参数，判断是否为ajax请求
        if ($request->isAjax()) {
            $id = $data['id'];
            $member = model('Dangyuan')->get($id);
            $member->allowField(true)->save($data);
            $res = [
                'code'=>1
            ];
            return $res;
        }
    }


    public function getjobinfo($id)
    {
        $branchs_id = $id;
        //先通过branchs_id党支部id获取对应的行政职称ids
        $job_ids = model('DangyuanJobidBranchsid')
                ->field('job_ids')
                ->where('branchs_id',$branchs_id)
                ->find();
        if ($job_ids) {
            $job_ids = $job_ids->job_ids;
            $data = model('DangyuanJobname')
                    ->where('id','in',$job_ids)
                    ->select();
            $res = [
                'msg'=>'success',
                'data'=>$data
            ];
            return $res;
        }
        return ['msg'=>'error'];
    }




    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        // dump($id);die;
        //关闭临时布局模板
        $this->view->engine->layout(false);
        $data = model('Dangyuan')->get($id);
        $branchs_id = $data->pid;
        $branchsinfo = model('Branchs')->find($branchs_id);
        $jobsname = \app\branchadmin\model\DangyuanJobidBranchsid::branchsIdJobnames($branchs_id);
        return view('edit',['data'=>$data,'branchs_id'=>$branchs_id,'branchsinfo'=>$branchsinfo,'jobsname'=>$jobsname,'id'=>$id]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function memberupdate(Request $request)
    {   
        // 接收参数
        $data = $request->param();
         //检测参数格式 表单验证
        //定义验证规则
        $rule = [
            'member_name' => 'require',
            // 'pid' => 'require|number',
            'job_id' => 'require|number',
        ];
        //定义提示信息
        $msg = [
            'member_name.require' => '党员名称不能为空',
            // 'pid.require' => '所属支部必须选择',
            'job_id.require' => '行政职称不能为空',
        ];
        //实例化验证类
        $validate = new \think\Validate($rule, $msg);
        //执行验证
        if( !$validate->check($data) ){
            //验证失败，报错
            $error = $validate->getError();
            $this->error($error);
        }

        // 调用upload_img进行图片上传
        $file = request()->file('member_img');
        // 如果图片存在就进行图片上传，以及更新表记录
        if ($file){
                $data['member_img'] =  $this->upload_img();
        }
        $res = model('Dangyuan')->allowField(true)->save($data,['id'=>$data['id']]);
        if ($res) {
            $this->success('修改党员信息成功！','permission');
        }else{
            $this->error("修改党员信息失败，请重试！");
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
       $res =  model('Dangyuan')->find($id)->delete();
       if ($res)
       {
           $data = [
               'msg'=> 'success'
           ];
           return $data;
       }
    }
}
