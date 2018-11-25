<?php
/**
 * Created by PhpStorm.
 * Applets.php
 * author: Mr_peng
 * Date: 2018/11/15
 * Time: 16:51
 * description:
 */

namespace app\home\controller;

use think\Db;
use think\Request;

class Applets extends Base
{
    public function getindex()
    {
        #分类
        $app_class = Db::name("app_class")->column('id,app_classname');
        #分类排序获取小程序信息
        $i = 0;
        foreach ($app_class as $k => $v) {
            $arr[$i]['title'] = $v;
            $arr[$i]['info']  = Db::name('applets')->alias('a')
                ->join("c_app_class b", 'a.app_class_id = b.id')
                ->where(['a.status' => 1, 'app_class_id' => $k])
                ->field('a.id,a.name,a.appid,a.image')
                ->order('sort', 'desc')
                ->select();
            $i++;
        }

        #热度排行
        $hot = Db::name('applets')->alias('a')
            ->join("c_app_class b", 'a.app_class_id = b.id')
            ->where(['a.status' => 1])
            ->field('a.id,a.name,a.appid,a.image,b.app_classname')
            ->order('count', 'desc')
            ->limit(4)
            ->select();

        #banner
        $banner = Db::name('app_banner')->alias('a')
            ->join('c_applets b', 'a.appid = b.id')
            ->field('b.id,a.image,a.appid,b.name')
            ->order('a.sort', 'desc')
            ->select();

        return json(['code' => 1, 'data' => ['class' => $arr, 'hot' => $hot, 'banner' => $banner]]);
    }

    public function get_recording(Request $request)
    {
        #记录点击次数
        if (!$request->isPost()) {
            return json(['code' => 0, 'msg' => '网络错误']);
        }
        $post  = $request->post();
        $appid = $post['appid'];
        $res   = Db::name('applets')->where(['id' => $appid])->setInc('count');
        if ($res) {
            return json(['code' => 1, 'msg' => '记录成功继续跳转']);
        }

        return json(['code' => 0, 'msg' => '记录失败阻止跳转']);
    }
}