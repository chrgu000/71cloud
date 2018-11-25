<?php

namespace app\branchadmin\controller;

use think\Db;
use think\Request;

class Roles extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    //角色列表展示
    public function index()
    {
        //关闭临时模板
        $this->view->engine->layout(false);
<<<<<<< HEAD
        $company_id = session('branchadmin_info.company_id');
        $where      = ["company_id" => $company_id];
        //查询角色表的所有数据
//        $list = \app\branchadmin\model\Roles::select();
        $list = Db::name('roles')->where($where)->select();
=======
        //查询角色表的所有数据
        $list = \app\branchadmin\model\Roles::select();
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118

        // var_dump($list);die;
        return view('index', ['list' => $list]);
    }

    // //为角色分配权限 页面展示
    // public function setauth($id)
    // {
    //     //查询角色信息（角色名称）
    //     $role = \app\branchadmin\model\Roles::find($id);
    //     //查询一级权限
    //     $top_auth = \app\branchadmin\model\Auth::where('pid', 0)->select();
    //     //查询二级权限
    //     $second_auth = \app\branchadmin\model\Auth::where('pid', '>', 0)->select();
    //     return view('setauth', ['role' => $role, 'top_auth' => $top_auth, 'second_auth' => $second_auth]);
    // }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    //角色添加
    public function create()
    {
        //关闭临时模板
        $this->view->engine->layout(false);
        //查询一级权限
        $company_id = session('branchadmin_info.company_id');
        $where      = ["company_id" => $company_id];
        $auth_id    = Db::name('auth_company')->where($where)->value('auth_id');
        $top_auth   = Db::name('auth')->whereIn('id', "$auth_id")->select();
        //查询二级权限
        $second_auth = \app\branchadmin\model\Auth::where('pid', '>', 0)->select();

        return view('create', ['top_auth' => $top_auth, 'second_auth' => $second_auth]);
        // return view('create');
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     *
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //接收数据
        $data = $request->param();
        //将$data['roles_auth_ids'] 数组，转化为用逗号拼接的字符串
        $data['roles_auth_ids'] = implode(',', $data['roles_auth_ids']);
        //print_r($data);die;
        //定义验证规则
        $rule = [
            'roles_name' => 'require',
            'roles_note' => 'require',
        ];

        //定义提示信息
        $msg = [
<<<<<<< HEAD
            'roles_name.require' => '角色名称不能为空',
=======
            'roles_name.require' => 'j角色名称不能为空',
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
            'roles_note.require' => '角色介绍不能为空',
        ];
        //实例化验证类
        $validata = new \think\validate($rule, $msg);
        //执行验证
        if (!$validata->check($data)) {
            $error = $validata->getError();
            $this->error($error);
        }
        //添加时间
        $data['ctime'] = time();

        $company_id = session('branchadmin_info.company_id');

        $data['company_id'] = $company_id;

        //把数据添加到数据库
        \app\branchadmin\model\Roles::create($data, true);
        //页面跳转
        //$this->success('添加成功','index');
        $this->redirect('index');
    }

    public function edit($id)
    {
        //关闭临时模板
        $this->view->engine->layout(false);
        //查询一级权限
        $top_auth = \app\branchadmin\model\Auth::where('pid', 0)->select();
        //查询二级权限
        $second_auth = \app\branchadmin\model\Auth::where('pid', '>', 0)->select();
        //根据$id查询一条数据
        $info = \app\branchadmin\model\Roles::find($id);

        return view('edit', ['top_auth' => $top_auth, 'second_auth' => $second_auth, 'info' => $info]);
    }

    //将修改的数据接收并保存
    public function update(Request $request, $id)
    {
        //接收数据
        $data = $request->param();
//        dump($data);die;
        $data['roles_auth_ids'] = implode(',', $data['roles_auth_ids']);

//        dump($data['roles_auth_ids']);die;
        //使用update函数更新数据
        \app\branchadmin\model\Roles::update($data, ['id' => $id], true);
        //页面跳转
        $this->redirect('index');
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     *
     * @return \think\Response
     */
    public function delete($id)
    {
        //删除角色
        \app\branchadmin\model\Roles::destroy($id);
        $this->success('删除成功', 'index');
    }
}
