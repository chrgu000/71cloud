<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/7/27
 * Time: 14:52
 *
 * 课程分类
 *
 */

namespace app\branchadmin\controller;

use think\Db;
use think\Request;

class Contentclasscate extends Base
{

    /**
     *
     * 分类列表
     *
     *
     */
    public function index()
    {
        $this->view->engine->layout(false);
        $data = getTree(db('ClassCate')->select());

        $company_id  = session('branchadmin_info.company_id');
        $CompanyData = getTree_sec(db('CompanyClassCate')->where(['company_id' => $company_id])->select());

        $this->assign('data', $data);
        $this->assign('CompanyData', $CompanyData);


        #获取已经选择的内容
        $company = explode(',', Db::name('company_resources')->where(['company_id' => $company_id])->value('classcate'));
        $admin   = explode(',', Db::name('admin_resources')->where(['company_id' => $company_id])->value('classcate'));

        $this->assign('admin', $admin);
        $this->assign('company', $company);

        return $this->fetch('content/ContentClassCate/index');
    }

    /**
     *
     * 添加分类
     *
     */
    public function add()
    {
        $company_id = session('branchadmin_info.company_id');
        if (Request::instance()->isGet()) {
//            $cate = db('ClassCate') ->where('pid = 0') ->select();

            #公司党校内容分类管理

            $where = ['pid' => 0, 'company_id' => $company_id];
            $cate  = db('CompanyClassCate')->where($where)->select();

            $this->assign('cate', $cate);

            return $this->fetch('content/ContentClassCate/add');
        } else {
            $name = trim(input('post.name'));
            $pid  = intval(input('post.pid'));
            $sort = trim(input('post.sort'));

            if (!$name) {
                return json(['code' => 0, 'msg' => '分类名称未填写！']);
            }

            $cateModel = db('CompanyClassCate');
            //检测重名
            if ($cateModel->where("name = '$name' ")->find()) {
                return json(['code' => 0, 'msg' => '分类名称重复！']);
            }
            $data = [
                'name'       => $name,
                'pid'        => $pid,
                'sort'       => $sort,
                'company_id' => $company_id,
            ];
//            dump($data);
//            die();
            $cateModel->insert($data);

            return json(['code' => 1, 'msg' => '添加成功！']);
        }
    }

    /**
     *
     * 编辑分类
     *
     * @param       $id     int     分类id
     *
     */
    public function edit()
    {
        $id = intval(input('request.id'));
        if ($id <= 0) {
            return json(['code' => 0, 'msg' => '参数错误！']);
        }

        if (Request::instance()->isGet()) {

            $cateModel = db('CompanyClassCate');
            //当前分类信息
            $data = $cateModel->where('id = ' . $id)->find();

            //顶级分类
            $cate = $cateModel->where('pid = 0')->select();

            $this->assign('cate', $cate);
            $this->assign('data', $data);

            return $this->fetch('content/ContentClassCate/edit');
        } else {
            $name = trim(input('post.name'));
            $pid  = intval(input('post.pid'));
            $sort = trim(input('post.sort'));

            if (empty($name)) {
                return json(['code' => 0, 'msg' => '分类名称未填写！']);
            }

            $cateModel = db('CompanyClassCate');
            //检测重名
            if ($cateModel->where("name = '$name' AND id != $id ")->find()) {
                return json(['code' => 0, 'msg' => '分类名称重复！']);
            }

            $data = [
                'name' => $name,
                'pid'  => $pid,
                'sort' => $sort,
                'id'   => $id,
            ];
//            dump($data);
//            die();

            $cateModel->where('id =' . $id)->update($data);

            return json(['code' => 1, 'msg' => '修改成功！']);
        }
    }

    /**
     *
     * 删除分类
     *
     * @param       $id     int     分类id
     *
     */
    public function del()
    {

        $id = intval(input('post.id'));
        if ($id <= 0) {
            return json(['code' => 0, 'msg' => '参数错误！']);
        }

        $cateModel = db('CompanyClassCate');
        //当前分类下有子分类，不允许删除
        if ($cateModel->where('pid =' . $id)->find()) {
            return json(['code' => 0, 'msg' => '当前分类下有子分类，不允许删除！']);
        }
        //当前分类下有新闻，不允许删除
        if (db('Class')->where('cate_id =' . $id)->find()) {
            return json(['code' => 0, 'msg' => '当前分类下有课程，不允许删除！']);
        }

        $cateModel->where('id = ' . $id)->delete();

        return json(['code' => 1, 'msg' => '删除成功！']);
    }

}