<?php
/**
 * Created by PhpStorm.
 * WetchContent.php
 * author: Mr_peng
 * Date: 2018/11/1
 * Time: 17:04
 * description:
 */

namespace app\branchadmin\controller;

use think\Controller;
use think\Request;
use think\Db;

class Wechatcontent extends Base
{

    public function resources(Request $request)
    {
        if (!$request->isAjax()) {
            return json(['code' => 0, 'msg' => '非法访问']);
        }

        $data = $request->post();
        #type 关联数据对应字段
        $type = $data['type'];

        if ($type == 'classchapter') {
            #课程视频后台只能是由系统后台提供
            $data['company'] = [];
        }

        $admin      = implode(',', $data['admin']);
        $company    = implode(',', $data['company']);
        $company_id = session("branchadmin_info.company_id");
        $res        = Db::name("admin_resources")->where(['company_id' => $company_id])->find();
//            用于判断是插入数据还是修改数据
        // 启动事务
        Db::startTrans();
        try {
            if (!$res) {
                Db::name('company_resources')->insert([$type => $company, 'company_id' => $company_id]);
                Db::name('admin_resources')->insert([$type => $admin, 'company_id' => $company_id]);
            } else {
                Db::name('company_resources')->where(['company_id' => $company_id])->update([$type => $company]);
                Db::name('admin_resources')->where(['company_id' => $company_id])->update([$type => $admin]);
            }

            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();

            return json(['code' => 0, 'msg' => '修改失败']);
        }

        return json(['code' => 1, 'msg' => '修改成功']);
    }
}