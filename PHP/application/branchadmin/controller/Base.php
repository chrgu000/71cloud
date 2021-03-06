<?php

namespace app\branchadmin\controller;

use think\Controller;
use think\Db;
use think\Request;

class Base extends Controller
{
    //构造方法
    public function __construct(Request $request)
    {
        parent::__construct($request);
        //登录判断
        if (!session('?branchadmin_info')) {
            //没有登录，跳转到登录页
            $this->redirect('branchadmin/Login/login');
        }
        //检测权限
        $this->checkauth();
        //调用getauth方法，查询菜单权限
        $this->getauth();
        // 获取登录用户的未读消息总数
        $this->getMessage();

        //判断组织id是否为空为空就证明是公司后台新增的用户，需要初始化组织
        $branchs_id = session('branchadmin_info.branchs_id');
        if (empty($branchs_id)) {
            $company_id            = session('branchadmin_info.company_id');
            $res                   = model('company')->where('id', $company_id)->field('phone,company_name')->find();
            $company_name          = $res['company_name'];
            $branchs               = model('branchs');
<<<<<<< HEAD
            $branchs->branchs_name = $company_name;
=======
            $branchs->branchs_name = $company_name . "党支部";
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
            $branchs->phone        = $res['phone'];
            $branchs->company_id   = $company_id;
            $branchs->pid          = 0;
            $branchs->roles_id     = 1;
            $branchs->ctime        = time();
            $branchs->save();
            $branchadmin             = model('BranchAdmin')->find(session('branchadmin_info.id'));
            $branchadmin->branchs_id = $branchs->id;
            $branchadmin->save();
            $branchs_id = $branchs->id;
            session("branchadmin_info.branchs_id", $branchs_id);
        }
    }

    //查询菜单权限
    public function getauth()
    {
        //从session中获取登录的管理员的支部id
        $branchs_id = session('branchadmin_info.branchs_id');
//        //根据$branchs_id获取角色id
        $roles_id = \app\branchadmin\model\Branchs::where('id', $branchs_id)->value('roles_id');
//        dump($roles_id);
        //从session中获取登录的管理员的支部id
        $pid        = session('branchadmin_info.pid');
        $company_id = session('branchadmin_info.company_id');
        //判断，超级管理员和其他管理员
//        dump($pid);
        if (0 == $pid) {
//            $map   = ['pid' => 0, 'is_nav' => 1];
//            $map[] = ['exp', "FIND_IN_SET($company_id,company_id )"];
            $map = ['company_id' => $company_id];
            //超级管理员，直接查询权限表  顶级菜单权限、二级菜单权限
            $auth_id = Db::name('auth_company')->where($map)->value('auth_id');
            $sql     = "select * from c_auth where id IN ($auth_id)";
            $top_nav = Db::query($sql);
//            dump(model('auth')->getLastSql());
            $second_nav = \app\branchadmin\model\Auth::where([
                'pid'    => ['gt', 0],
                'is_nav' => 1,
            ])->select();
        } else {
            //其他管理员，查询角色表，取到拥有的权限id  role_auth_ids
            $roles          = \app\branchadmin\model\Roles::find($roles_id);
            $roles_auth_ids = $roles['roles_auth_ids'];
            //查询权限表 拥有的顶级菜单权限、拥有的二级菜单权限
            $top_nav    = \app\branchadmin\model\Auth::where([
                'pid'    => 0,
                'is_nav' => 1,
                'id'     => ['in', $roles_auth_ids],
            ])->select();
            $second_nav = \app\branchadmin\model\Auth::where([
                'pid'    => ['gt', 0],
                'is_nav' => 1,
                'id'     => ['in', $roles_auth_ids],
            ])->select();
        }
<<<<<<< HEAD
//            dump($second_nav);
=======
//            dump()
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
        //变量赋值
        $this->assign('top_nav', $top_nav);
        $this->assign('second_nav', $second_nav);
    }

    public function getMessage()
    {
        // 从session中获取登录的管理的员的主键id
        $id = session('branchadmin_info.id');
        // 从adminMessage管理员消息表中查找发送给当前管理员的所有未读的消息
        $unreadMessage = \think\Db::table('c_branch_message')->where(['receive_id' => $id, 'status' => '0'])->count();
        $this->assign('unreadMessage', $unreadMessage);
    }

    //检测权限
    public function checkauth()
    {
        //从session中获取登录的管理员的支部id
        $pid = session('branchadmin_info.pid');
        //从session中获取登录的管理员的支部id
        $branchs_id = session('branchadmin_info.branchs_id');
//        //根据$branchs_id获取角色id
        $roles_id = \app\branchadmin\model\Branchs::where('id', $branchs_id)->value('roles_id');
        //判断是否超级管理员（超级管理员不需要检测）
        if (0 == $pid) {
            //超级管理员 不需要检测
            return;
        }
        //判断是否特殊页面（比如首页，不需要检测）
        //分别获取当前访问的控制器名称和方法名称
        $controller = request()->controller();
        $action     = request()->action();
        if ($controller == 'Index' && $action == 'index') {
            //特殊页面，不需要检测
            return;
        }
        if ($controller == 'Index' && $action == 'welcome') {
            //特殊页面，不需要检测
            return;
        }
        //查询当前管理员所拥有的权限ids（从角色表查询对应的role_auth_ids）

        $roles = \app\branchadmin\model\Roles::find($roles_id);
        //$role['role_auth_ids']
        //根据当前访问的控制器、方法查询到具体的权限id
        $auth = \app\branchadmin\model\Auth::where(['auth_c' => strtolower($controller), 'auth_a' => $action])->find();
        //$auth['id']
        //判断当前权限id是否在role_auth_ids范围中。
        $roles_auth_ids = explode(',', $roles['roles_auth_ids']);
        // print_r($roles_auth_ids);die;
        if (!in_array($auth['id'], $roles_auth_ids)) {
            $this->error('没有权限', 'branchadmin/index/welcome');
        }

        return true;
    }
}
