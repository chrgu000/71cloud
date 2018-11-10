<?php
/**
 * Created by PhpStorm.
 * ContentNewClass.php
 * author: Mr_peng
 * Date: 2018/10/30
 * Time: 17:04
 * description:
 */

namespace app\branchadmin\controller;

use think\Db;
use think\Request;

class ContentNewClass extends Base
{
//    public function news()
//    {
//        view();
//    }
    /**
     * 分类列表
     *
     */
    public function news()
    {
        //关闭临时模板
//        $this->view->engine->layout(false);
        $this->view->engine->layout(false);
        //分别获得系统和自己提供的微信内容

        $NewCate = getTree(model('new_Cate')->select());
        $this->assign('NewCate', $NewCate);

        $CompanyNewCate = getTree_sec(model('company_new_cate')->select());
        $this->assign('CompanyNewCate', $CompanyNewCate);

        $company_id = session("branchadmin_info.company_id");

        //获取已经选用了的内容
        $company = explode(',', Db::name('company_resources')->where(['company_id' => $company_id])->value('newcate'));
        $admin   = explode(',', Db::name('admin_resources')->where(['company_id' => $company_id])->value('newcate'));

        $this->assign('admin', $admin);
        $this->assign('company', $company);

        return $this->fetch('content/ContentNewClass/index');
    }

    /**
     *
     * 添加分类
     *
     */
    public function add()
    {
        if (Request::instance()->isGet()) {
            #系统后台
//            $NewCate = db('NewCate')->where('pid = 0')->field('id,name')->select();
            #用户后台数据
            $CompanyNewCate = db('CompanyNewCate')->where('pid = 0')->field('id,name')->select();

//            $this->assign('NewCate', $NewCate);
            $this->assign('CompanyNewCate', $CompanyNewCate);

            return $this->fetch('content/ContentNewClass/add');
        } else {
            $name = trim(input('post.name'));
            $pid  = intval(input('post.pid'));
            $sort = trim(input('post.sort'));

            if (!$name) {
                return json(['code' => 0, 'msg' => '分类名称未填写！']);
            }

            $CompanyNewCateModel = db('CompanyNewCate');

            $NewCateModel = db('NewCate');
            //检测重名
            if ($CompanyNewCateModel->where("name = '$name' ")->find() && $NewCateModel->where("name = '$name' ")->find()) {
                return json(['code' => 0, 'msg' => '分类名称重复！']);
            }

            $CompanyNewCateModel->insert([
                'name' => $name,
                'pid'  => $pid,
                'sort' => $sort,
            ]);

            return json(['code' => 1, 'msg' => '添加成功！']);
        }
    }

    /**
     *
     * 编辑分类
     *
     * @param        $id     int     分类id
     *
     */
    public function edit()
    {
        $id = intval(input('id'));

        if ($id <= 0) {
            return json(['code' => 0, 'msg' => '参数错误！']);
        }

        if (Request::instance()->isGet()) {

            $cateModel = db('NewCate');
            //当前分类信息
            $data = $cateModel->where('id = ' . $id)->find();

            //顶级分类
            $cate = $cateModel->where('pid = 0')->select();

            $this->assign('cate', $cate);
            $this->assign('data', $data);

            return $this->fetch('content/ContentNewClass/edit');
        } else {

            $name = trim(input('post.name'));
            $pid  = intval(input('post.pid'));
            $sort = trim(input('post.sort'));

            if (empty($name)) {
                return json(['code' => 0, 'msg' => '分类名称未填写！']);
            }

            $cateModel = db('NewCate');
            //检测重名
            if ($cateModel->where("name = '$name' AND id != $id ")->find()) {
                return json(['code' => 0, 'msg' => '分类名称重复！']);
            }

            $cateModel->where('id =' . $id)->update([
                'name' => $name,
                'pid'  => $pid,
                'sort' => $sort,
            ]);

            return json(['code' => 1, 'msg' => '修改成功！']);
        }
    }

    /**
     * 删除分类
     *
     * @param        $id     int     分类id
     *
     */
    public function del()
    {
        $id = intval(input('post.id'));
        if ($id <= 0) {
            return json(['code' => 0, 'msg' => '参数错误！']);
        }

        $cateModel = db('NewCate');
        //当前分类下有子分类，不允许删除
        if ($cateModel->where('pid =' . $id)->find()) {
            return json(['code' => 0, 'msg' => '当前分类下有子分类，不允许删除！']);
        }
        //当前分类下有新闻，不允许删除
        if (db('News')->where('cate_id =' . $id)->find()) {
            return json(['code' => 0, 'msg' => '当前分类下有新闻，不允许删除！']);
        }

        $cateModel->where('id = ' . $id)->delete();

        return json(['code' => 1, 'msg' => '删除成功！']);
    }
}