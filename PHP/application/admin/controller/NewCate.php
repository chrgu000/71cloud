<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/7/9
 * Time: 17:20
 *
 * 分类控制器
 *
 */
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;


class NewCate extends Base{
   /**
    * 分类列表
    *
    */
    public function index(){
        $data = getTree(db('NewCate') ->select());
        $this->assign('data',$data);
        return $this->fetch('NewCate/index');

    }


    /**
     *
     * 添加分类
     *
     */
    public function add(){
        if (Request::instance()->isGet()) {

            $cate = db('NewCate') ->where('pid = 0') ->select();

            $this->assign('cate',$cate);
            return $this->fetch('NewCate/add');
        }else{
            $name = trim(input('post.name'));
            $pid = intval(input('post.pid'));
            $sort = trim(input('post.sort'));

            if(!$name){
                return json (['code' => 0,'msg' => '分类名称未填写！']);
            }

            $cateModel = db('NewCate');
            //检测重名
            if($cateModel->where("name = '$name' ")->find()){
                return json (['code' => 0,'msg' => '分类名称重复！']);
            }

            $cateModel->insert([
                'name'  =>  $name,
                'pid'   =>  $pid,
                'sort'  =>  $sort
            ]);

            return json (['code' => 1,'msg' => '添加成功！']);
        }


    }

    /**
     *
     * 编辑分类
     * @param        $id     int     分类id
     *
     */
    public function edit(){
        $id = intval(input('id'));

        if($id <= 0){
            return json (['code' => 0,'msg' => '参数错误！']);
        }

        if (Request::instance()->isGet()) {

            $cateModel = db('NewCate');
            //当前分类信息
            $data = $cateModel -> where('id = '.$id) -> find();

            //顶级分类
            $cate = $cateModel -> where('pid = 0') -> select();

            $this->assign('cate',$cate);
            $this->assign('data',$data);
            return $this->fetch('NewCate/edit');
        }else{

            $name = trim(input('post.name'));
            $pid = intval(input('post.pid'));
            $sort = trim(input('post.sort'));

            if(empty($name)){
                return json(['code' => 0,'msg' => '分类名称未填写！']);
            }

            $cateModel = db('NewCate');
            //检测重名
            if($cateModel->where("name = '$name' AND id != $id ")->find()){
                return json (['code' => 0,'msg' => '分类名称重复！']);
            }


            $cateModel->where('id ='.$id)->update([
                'name'  =>  $name,
                'pid'   =>  $pid,
                'sort'  =>  $sort
            ]);
            return json (['code' => 1,'msg' => '修改成功！']);

        }


    }

    /**
     * 删除分类
     * @param        $id     int     分类id
     *
     */
    public function del(){
        $id = intval(input('post.id'));
        if($id <= 0){
            return json (['code' => 0,'msg' => '参数错误！']);
        }

        $cateModel = db('NewCate');
        //当前分类下有子分类，不允许删除
        if($cateModel->where('pid ='.$id)->find()){
            return json (['code' => 0,'msg' => '当前分类下有子分类，不允许删除！']);
        }
        //当前分类下有新闻，不允许删除
        if(db('News')->where('cate_id ='.$id)->find()){
            return json (['code' => 0,'msg' => '当前分类下有新闻，不允许删除！']);
        }

        $cateModel -> where('id = '.$id) -> delete();
        return json (['code' => 1,'msg' => '删除成功！']);
    }

}