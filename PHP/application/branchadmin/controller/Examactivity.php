<?php

namespace app\branchadmin\controller;

use think\Controller;
use think\Request;

class Examactivity extends Controller
{
    /**
<<<<<<< HEAD
     * 活动列表
=======
     * 显示资源列表
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
     *
     * @return \think\Response
     */
    public function index()
    {
        //从session中获取当前的组织id
        $company_id = session('branchadmin_info.company_id');
<<<<<<< HEAD
        $data=db('exam_activity')->where(['company_id'=>$company_id])->select();

=======
        $data       = model('ExamActivity')->where('company_id', $company_id)->select();
        foreach($data as &$v)
        {
            if(empty($v['id']))
            {
                continue;
            }
            $v['exampaperinfo'] = model('Exampaper')->where('exam_activity_id',$v['id'])->select();
        }
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
        return view('index',['data'=>$data]);
    }

    /**
<<<<<<< HEAD
     * 活动添加
     *
     */
    public function add(){

        //从session中获取当前的组织id
        $company_id = session('branchadmin_info.company_id');
        if(Request::instance()->isPost()){
            //获取提交数据
            $data=input('post.');
            if(db('exam_activity')->where(['exam_activity_name'=>$data['exam_activity_name'],'company_id'=>$company_id])->find()){
                return json (['code' => 0,'msg' => '活动名称重复!']);
            }

            if(!$data['exam_activity_name']){
                return json (['code' => 0,'msg' => '请将信息填写完整！']);
            }


            //图片上传
            $file = request()->file('thumb');

            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . '/' . 'Uploads');

            if($info){
                //获取图片路径并把路径从'\'转换成'/'
                $getSaveName=str_replace("\\","/",$info->getSaveName());

                //拼接图片路径
                $data['img_src'] = '/'.'Uploads'.'/'.$getSaveName;

            }else{
                return json(['code'=>0,'msg'=>'请上传图片']);
            }
            $data['create_time']=time();
            //存入当前公司id
            $data['company_id']=$company_id;
            db('exam_activity')->insert($data);
            return json(['code'=>1,'msg'=>'创建成功']);
        }
        return $this->fetch();
    }

    //活动修改
    public function edit(){
        $id=input('id');
        //从session中获取当前的组织id
        $company_id = session('branchadmin_info.company_id');
        if(Request::instance()->isGet()){
            $data=db('exam_activity')->where(['id'=>$id])->find();

            $this->assign('data',$data);
        }else{
            $data=input('post.');

            if(db('exam_activity')->where(['exam_activity_name'=>$data['exam_activity_name'],'company_id'=>$company_id,'id'=>array('neq',$id)])->find()){
                return json (['code' => 0,'msg' => '活动名称重复!']);
            }
            if(!$data['exam_activity_name']){
                return json (['code' => 0,'msg' => '请将信息填写完整！']);
            }

            //图片上传
            $file = request()->file('thumb');

            if($file){
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . '/' . 'Uploads');
                //获取图片路径并把路径从'\'转换成'/'
                $getSaveName=str_replace("\\","/",$info->getSaveName());

                //拼接图片路径
                $data['img_src'] = '/'.'Uploads'.'/'.$getSaveName;
            }
            db('exam_activity')->where(['id'=>$id,'company_id'=>$company_id])->update($data);

            return json(['code'=>1,'msg'=>'修改成功']);
        }
        return $this->fetch();
    }

    public function del(){
        //从session中获取当前的组织id
        $company_id = session('branchadmin_info.company_id');
        //获取删除的id
        $id=input('id');
        db('exam_activity')->where(['id'=>$id,'company_id'=>$company_id])->delete();
        //db('examrecord')->
        return json(['code'=>1,'msg'=>'删除成功']);
=======
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
        // 通过session获取组织id
        $company_id         = session('branchadmin_info.company_id');
        $data               = $request->param();
        $data['company_id'] = $company_id;
        $res                = model('ExamActivity')->data($data)->save();
        if ($res)
        {
            $this->success("活动添加成功",'index');
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

    public function test()
    {
        // 通过组织id获取对应的
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
    }

}
