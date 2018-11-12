<?php
/**
 * Created by PhpStorm.
 * Hearts.php
 * author: Mr_peng
 * Date: 2018/11/9
 * Time: 15:22
 * description:
 */

namespace app\branchadmin\controller;

use think\Db;

class Hearts extends Base
{
    public function index()
    {
        $this->view->engine->layout(false);
        $company_id = session('branchadmin_info.company_id');
        $uid        = Db::name('user')->where(['company_id' => $company_id])->column('id');
        $list = Db::name('heart')->whereIn('uid', $uid)->field('content,rudang_time,take,id')->select();

        return view('', ['list' => $list]);
    }

}
