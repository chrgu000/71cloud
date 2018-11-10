<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/7/26
 * Time: 10:58
 *
 * 课程
 *
 */

namespace app\branchadmin\controller;

use think\Db;
use think\Request;

class Contentclasscourse extends Base
{
    /**
     *
     * 课程列表
     *
     */
    public function index()
    {
        $this->view->engine->layout(false);
        $logmin  = strtotime(trim(input('get.logmin')));
        $logmax  = strtotime(trim(input('get.logmax')));
        $cate_id = intval(input('get.cate'));
        $name    = trim(input('get.name'));

        //分类
        $cate = getTree(db('ClassCate')->select());

        $map = [];
        //日期筛选
        if ($logmin && $logmax) {
            $map['a.ctime'] = ['between', "$logmin,$logmax"];
        }

        //分类筛选
        if ($cate_id) {
            $cate_ids         = getSon($cate, $cate_id);
            $cate_ids[]       = $cate_id;
            $map['a.cate_id'] = ['IN', $cate_ids];
        }

        //名称筛选
        if ($name) {
            $map['a.name'] = ['LIKE', "%$name%"];
        }

        $data = db('Class')->alias('a')
            ->join('c_class_cate b', 'a.cate_id = b.id')
            ->join('c_user_class c', 'a.id = c.class_id')
            ->field('a.id,a.name,a.thumb,a.period,a.ctime,a.visit,a.status,b.name as cate_name,GROUP_CONCAT(c.uid) uid')
            ->group('a.id')
            ->where($map)
            ->select();

        foreach ($data as &$v) {
            //加入学习计划的人数
            $v['study_person'] = !empty($v['uid']) ? count(explode(',', $v['uid'])) : 0;
        }
        $this->assign('data', $data);


        #公司自己的信息
        $company_id = session("branchadmin_info.company_id");
        $map['b.company_id'] = $company_id;
        $sql = "SELECT a.id,a.name,a.thumb,a.period,a.ctime,a.visit,a.status,b.name as cate_name,GROUP_CONCAT(c.uid) uid FROM c_company_class a INNER JOIN c_company_class_cate b ON a.cate_id=b.id left JOIN c_user_class c ON a.id=c.class_id WHERE  b.company_id = $company_id GROUP BY a.id";
        $CompanyClassData = Db::query($sql);
        $this->assign('CompanyClassData', $CompanyClassData);

//        dump($CompanyClassData);
//        die();
        $count = count($data) + count($CompanyClassData);

        #获取已经选择的内容
        $company = explode(',', Db::name('company_resources')->where(['company_id' => $company_id])->value('class'));
        $admin   = explode(',', Db::name('admin_resources')->where(['company_id' => $company_id])->value('class'));

        $this->assign('admin', $admin);
        $this->assign('company', $company);
//        dump($data);
//        die();

        $this->assign('cate', $cate);
        $this->assign('count', $count);

        return $this->fetch('content/ContentClassCourse/index');
    }

    /**
     *
     * 添加课程
     *
     */
    public function add()
    {
        $company_id = session("branchadmin_info.company_id");
        if (Request::instance()->isGet()) {
            //分类
            $cate = getTree(db('CompanyClassCate')->where(['company_id' => $company_id])->select());

            $this->assign('cate', $cate);

            return $this->fetch('content/ContentClassCourse/add');
        } else {
            $name      = trim(input('post.name'));
            $introduce = trim(input('post.editorValue'));
            $cate_id   = intval(input('post.cate'));

            if (empty($name) || empty($introduce) || empty($cate_id)) {
                return json(['code' => 0, 'msg' => '请将信息填写完整！']);
            }

            if (empty($_FILES)) {
                return json(['code' => 0, 'msg' => '请上传缩略图！']);
            }

            //检测重名
            $ClassModel = db('CompanyClass');
            if ($ClassModel->where("name = '$name'")->find()) {
                return json(['code' => 0, 'msg' => '名称重复！']);
            }

            /*-------图片上传开始--------*/
            $file = request()->file('thumb');

            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . '/' . 'uploads');

            if ($info) {
                //获取图片路径并把路径从'\'转换成'/'
                $getSaveName = str_replace("\\", "/", $info->getSaveName());

                //拼接图片路径
                $thumb = '/' . 'Uploads' . '/' . $getSaveName;
            }
            /*-------图片上传结束---------*/

            //数据入库
            $ClassModel->insert([
                'name'       => $name,
                'introduce'  => $introduce,
                'cate_id'    => $cate_id,
                'thumb'      => $thumb,
                'status'     => 2,
                'ctime'      => time(),
                'company_id' => $company_id,
            ]);

            return json(['code' => 1, 'msg' => '添加成功！']);
        }
    }

    /**
     *
     * 编辑
     *
     * @param   $id     int     课程id
     *
     */
    public function edit()
    {
        $id = intval(input('request.id'));
        if ($id <= 0) {
            return json(['code' => 0, 'msg' => '参数错误！']);
        }

        if (Request::instance()->isGet()) {

            $data              = db('CompanyClass')->where('id=' . $id)->field('id,name,introduce,cate_id,thumb,period')->find();
            $data['introduce'] = htmlspecialchars_decode($data['introduce']);
            //分类
            $cate = getTree(db('CompanyClassCate')->select());

            $this->assign('cate', $cate);
            $this->assign('data', $data);

            return $this->fetch('content/ContentClassCourse/edit');
        } else {

            $name      = trim(input('post.name'));
            $introduce = trim(input('post.editorValue'));
            $cate_id   = intval(input('post.cate'));

            if (empty($name) || empty($introduce) || empty($cate_id)) {
                return json(['code' => 0, 'msg' => '请将信息填写完整！']);
            }

            //检测重名
            $ClassModel = db('CompanyClass');
            if ($ClassModel->where("name = '$name' AND id !=" . $id)->find()) {
                return json(['code' => 0, 'msg' => '名称重复！']);
            }

            /*-------图片上传开始--------*/
            $file = request()->file('thumb');
            if ($file) {
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . '/' . 'uploads');

                if ($info) {
                    //获取图片路径并把路径从'\'转换成'/'
                    $getSaveName = str_replace("\\", "/", $info->getSaveName());

                    //拼接图片路径
                    $thumb = '/' . 'Uploads' . '/' . $getSaveName;
                    $ClassModel->where('id=' . $id)->setField('thumb', $thumb);
                }
            }
            /*-------图片上传结束---------*/

            //数据入库
            $ClassModel->where('id=' . $id)->update([
                'name'      => $name,
                'introduce' => $introduce,
                'cate_id'   => $cate_id,
                'ctime'     => time(),
            ]);

            return json(['code' => 1, 'msg' => '修改成功！']);
        }
    }

    /**
     *
     * 上架
     *
     * @param      $id      int         课程id
     *
     *
     */
    public function up()
    {
        $id = input('post.id');

        if ($id <= 0) {
            return json(['code' => 0, 'msg' => '参数错误！']);
        }

        db('Class')->where('id=' . $id)->setField('status', 1);

        return json(['code' => 1, 'id' => $id, 'msg' => '已上架!']);
    }

    /**
     *
     * 下架
     *
     * @param      $id      int         课程id
     *
     *
     */
    public function down()
    {
        $id = input('post.id');

        if ($id <= 0) {
            return json(['code' => 0, 'msg' => '参数错误！']);
        }

        db('Class')->where('id=' . $id)->setField('status', 2);

        return json(['code' => 1, 'id' => $id, 'msg' => '已下架!']);
    }


    /**
     *
     * 删除
     *
     */
    Public function del(Request $request){
        $res = $request->post();
        $id = $res['id'];
        if($id <= 0){
            return json(['code' => 0,'msg' => '参数错误！']);
        }

        db('CompanyClass') -> where('id = '.$id) -> delete();
        return json(['code' => 1,'msg' => '删除成功！']);


    }

}