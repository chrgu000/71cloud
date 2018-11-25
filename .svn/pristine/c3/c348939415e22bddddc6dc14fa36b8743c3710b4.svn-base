<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/9
 * Time: 13:45
 *
 * 广告位
 *
 */

namespace app\branchadmin\controller;

use think\Controller;
use think\Request;
use think\Db;

class ContentadBanner extends Base
{

    /**
     * 列表
     *
     * @param $type int 类型 1广告位2首页banner
     *
     */
    public function index()
    {
        $type = intval(input('type'));

        $logmin = strtotime(trim(input('get.logmin')));
        $logmax = strtotime(trim(input('get.logmax')));
        $name   = trim(input('get.name'));

        $map         = [];
        $map['type'] = empty($type) ? 2 : $type;
        //日期筛选
        if ($logmin && $logmax) {
            $map['ctime'] = ['between', "$logmin,$logmax"];
        }

        //名称筛选
        if ($name) {
            $map['name'] = ['LIKE', "%$name%"];
        }

        $data = db('Ad')->where($map)->select();

        #用户后台上传
        $company_id        = session("branchadmin_info.company_id");
        $map['company_id'] = $company_id;
        $CompanyData       = db('CompanyAd')->where($map)->select();
        $count             = count($data) + count($CompanyData);

        #获取已经选择的内容
        $company = explode(',', Db::name('company_resources')->where(['company_id' => $company_id])->value('banner'));
        $admin   = explode(',', Db::name('admin_resources')->where(['company_id' => $company_id])->value('banner'));

        $this->assign('admin', $admin);
        $this->assign('company', $company);


        $this->assign('data', $data);
        $this->assign('CompanyData', $CompanyData);
        $this->assign('count', $count);
        $this->assign('type', 'banner');

        return $this->fetch('content/ContentAd/index');
    }

    /**
     *
     * 添加
     *
     * @param $type int 类型 1广告位2首页banner
     *
     */
    public function add()
    {
        $type = intval(input('type'));

        if ($type <= 0) {
            $this->error('参数错误！');
        }

        if (Request::instance()->isGet()) {

            return $this->fetch("content/ContentAd/add");
        } else {
            $data         = input('post.');
            $data['type'] = 2;

            if (empty($data['name'])) {
                return json(['code' => 0, 'msg' => '广告名称未填写！']);
            }

            // 调用upload_img进行图片上传
            /* $file = request()->file('thumb');

             //上传缩略图
             if($file){
                 $data['thumb'] = $this->upload_img();
             }*/

            //检测重名
            $adModel = db('CompanyAd');
            if ($adModel->where(['name' => $data['name']])->find()) {
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
                $path = '/' . 'Uploads' . '/' . $getSaveName;

                $data['thumb'] = $path;
            } else {
                // 上传失败获取错误信息
                echo $file->getError();
            }
            /*-------图片上传结束--------*/

            if (empty($data['thumb'])) {
                return json(['code' => 0, 'msg' => '请上传缩略图！']);
            }

            $company_id         = session('branchadmin_info.company_id');
            $data['company_id'] = $company_id;
            $adModel->insert($data);

            return json(['code' => 1, 'msg' => '添加成功！']);
        }
    }

    /**
     *
     * 删除
     *
     */
    Public function del()
    {
        $id = intval(input('post.id'));
        if ($id <= 0) {
            return json(['code' => 0, 'msg' => '参数错误！']);
        }

        db('CompanyAd')->where('id = ' . $id)->delete();

        return json(['code' => 1, 'msg' => '删除成功！']);
    }

    /**
     *
     * 编辑
     *
     */
    public function edit()
    {


        if (Request::instance()->isGet()) {
            $id   = intval(input('id'));
            $data = db('CompanyAd')->where('id=' . $id)->find();
            $this->assign('data', $data);

            return $this->fetch("content/ContentAd/edit");
        } else {
            $data         = input('post.');
            $data['type'] = 2;
            $data['id']   = $id;
            if (empty($data['name'])) {
                return json(['code' => 0, 'msg' => '广告名称未填写！']);
            }

            //检测重名
            $adModel = db('CompanyAd');
            if ($adModel->where(['name' => $data['name'], 'id' => ['neq', $id]])->find()) {
                return json(['code' => 0, 'msg' => '名称重复！']);
            }

            //图片上传
            $file = request()->file('thumb');
            if ($file) {
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . '/' . 'uploads');
                if ($info) {
                    //获取图片路径并把路径从'\'转换成'/'
                    $getSaveName = str_replace("\\", "/", $info->getSaveName());
                    //拼接图片路径
                    $path          = '/' . 'Uploads' . '/' . $getSaveName;
                    $data['thumb'] = $path;
                }
            }

            $adModel->where('id = ' . $id)->update($data);

            return json(['code' => 1, 'msg' => '修改成功！']);
        }
    }

}