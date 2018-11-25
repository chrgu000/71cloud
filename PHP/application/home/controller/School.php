<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/6
 * Time: 17:01
 *
 * 微党校
 *
 */

namespace app\home\controller;

use think\Db;
use think\Request;

class School extends Base
{
    /**
     *
     * 我的课程 GET
     *
     * @param $uid  int 用户id
     * @param $type int 类型 1表示学习中 2表示已完成
     *
     */
    public function getUserClass(Request $request)
    {
        $data = $request->get();
        $uid  = $data['uid'];
        $type = $data['type'];
        if ($uid <= 0 || $type <= 0) {
            return json(['code' => 2, 'msg' => '参数错误', 'data' => []]);
        }

        $data = model('home/Clas')->getUserClass($uid, $type);
//        dump($data);
//        die();
        if (empty($data)) {
            return json(['code' => 1, 'msg' => '没有课程', 'data' => []]);
        }
//        dump($data);
//        die();
        foreach ($data as &$v) {
            $v['last_time'] = date('Y-m-d', $v['last_time']);
            $v['thumb']     = addDomain($v['thumb']);
        }

        return json(['code' => 1, 'msg' => '', 'data' => $data]);
    }

    /**
     *
     * 课程分类
     *
     */
    public function getCate()
    {

        /*$data = M('ClassCate')->field('id,name,pid')->select();

        foreach ($data as &$v){
            if($v['pid'] == 0){
                foreach ($data as $key => $value){
                    if($value['pid'] == $v['id']){
                        $v['son'][] = $value;
                        unset($data[$key]);
                    }
                }
            }
        }*/
        $model = Db::name('class_cate');
        $data  = $model->where(['pid' => 0])->field('id,name,pid')->select();
        foreach ($data as $k => &$v) {
            $zi = $model->field('id,name,pid')->select();
            foreach ($zi as $k1 => $v1) {
                if ($v['id'] == $v1['pid']) {
                    $v['son'][] = $v1;
                }
            }
        }

        return json(['code' => 1, 'msg' => '', 'data' => $data]);
    }

    /**
     *
     * 课程列表
     *
     * @param $cate_id  int 分类id
     * @param $p        int 页码
     * @param $pageSize int 页长
     *
     *
     */
    public function getClassList(Request $request)
    {
        $par      = $request->get();
        $cate_id  = $par['cate_id'];
        $p        = empty($par['p']) ? 1 : $par['p'];
        $pageSize = empty($par['pageSize']) ? 6 : $par['pageSize'];

        $data = model('home/Clas')->getClassList($p, $pageSize, $cate_id);
        if (empty($data)) {
            return json(['code' => 1, 'msg' => '暂无更多课程', 'data' => []]);
        }
        foreach ($data as &$v) {
            $v['thumb'] = addDomain($v['thumb']);
        }

        return json(['code' => 1, 'msg' => '', 'data' => $data]);
    }

    /**
     *
     * 课程详情
     *
     * @param $uid        int 用户id
     * @param $class_id   int 课程id
     * @param $chapter_id int 视频id  非必须
     *
     */
    public function getDetail(Request $request)
    {
        $pre        = $request->get();
        $uid        = $pre['uid'];
        $class_id   = $pre['class_id'];
        $chapter_id = empty($pre['chapter_id']) ? null : $pre['chapter_id'];

        if ($class_id <= 0 || $uid <= 0) {
            return json(['code' => 0, 'msg' => '参数错误', 'data' => '']);
        }

        $data = model('home/Clas')->getClassDetail($uid, $class_id, $chapter_id);
        if ($data['code'] == 0) {
            return json(['code' => 1, 'msg' => '本课程暂无视频', 'data' => []]);
        }
        foreach ($data['data']['data'] as &$v) {
            $v['thumb'] = addDomain($v['thumb']);
        }
        $data['data']['video']['thumb'] = addDomain($data['data']['video']['thumb']);

        if ($data['code'] == 0) {
            return json(['code' => 1, 'msg' => $data['msg'], 'data' => []]);
        }

        return json($data);
    }

    /**
     *
     * 加入学习计划
     *
     * @param $uid      int 用户id
     * @param $class_id int 课程id
     *
     */
    public function addStudy(Request $request)
    {
        $data     = $request->post();
        $class_id = $data['class_id'];
        $uid      = $data['uid'];

        if ($class_id <= 0) {
<<<<<<< HEAD
            return json(['code' => 4,'status'=>4, 'msg' => '参数错误', 'data' => '']);
=======
            return json(['code' => 4, 'msg' => '参数错误', 'data' => '']);
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
        }

        $res = model('home/Clas')->addStudy($uid, $class_id);

        return json($res);
    }

    /**
     *
     * 记录观看时间
     *
     * @param $currentTime int 当前观看时间
     * @param $chapter_id  int 当前观看视频id
     * @param $class_id    int 当前课程id
     * @param $uid         int 用户id
     *
     */
    public function saveTime(Request $request)
    {
        $data        = $request->post();
        $currentTime = $data['currentTime'];
        $chapter_id  = $data['chapter_id'];
        $class_id    = $data['class_id'];
        $uid         = $data['uid'];

        if (empty($currentTime) || empty($chapter_id) || empty($class_id) || empty($uid)) {
            return json(['code' => 3, 'msg' => '参数错误', 'data' => []]);
        }

        $res = model('home/Clas')->saveTime($uid, $chapter_id, $class_id, $currentTime);
        if (empty($res)) {
            return json(['code' => 1, 'msg' => '记录失败', 'data' => []]);
        }
        $where = ['b.uid'=>$uid];
        $where = ['b.chapter_id'=>$chapter_id];
        $arr = Db::name('class_chapter')->alias('a')
            ->join("c_user_chapter b", 'a.id = b.chapter_id', 'LEFT')
            ->field('a.id,a.name,a.thumb,a.episode,a.path,a.vtime,b.see_time,b.is_over')
            ->where('b.uid='.$uid.' and b.chapter_id =  '.$chapter_id)
            ->order('a.id desc')
            ->select();
        foreach ($arr as $k => $v){
            if($v['episode']){
                $arr[$k]['episode'] = '第' . numToWord($v['episode']) . '章';
            }
        }
        return json(['code' => 1, 'msg' => '记录成功', 'data' => $arr]);
    }

}