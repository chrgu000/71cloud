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
namespace app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
class Pagemodule extends Base{
    /**
     * 页面模块管理
     */
    //列表页
    public function index(){
        //总数
        $num=db('pagemodule')->count();
        $data=db('pagemodule')->select();
        $this->assign('data',$data);
        $this->assign('num',$num);
        return $this->fetch();
    }

    //添加
    public function add(){
        if(Request::instance()->isPost()){
            $data=input('post.');
            $data['ctime']=time();

            if(empty($data['module_name'])){
                return json(['code' => 0,'msg' => '模块名称不能为空!']);
            }

            if(db('pagemodule')-> where(array('module_name'=> $data['module_name'])) -> find()){
                return json(['code' => 0,'msg' => '模块名称重复！']);
            }

            //检测参数格式
            //定义验证规则
            $rule=[
                'auth_c'   =>'alpha',
                'auth_a'   =>'alpha',
            ];

            //定义提示信息
            $msg=[
                'auth_c.alpha'      =>'控制器只能填字母',
                'auth_a.alpha'      =>'操作方法只能填字母',
            ];
            //实例化验证类
            $validata=new \think\validate($rule,$msg);
            //执行验证
            if (!$validata->check($data)) {
                $error = $validata->getError();
                $this->error($error);
            }
            //将控制器名称和方法名称，转化为固定的大小写格式，比如全小写
            $data['auth_c'] = strtolower($data['auth_c']);
            $data['auth_a'] = strtolower($data['auth_a']);


            // 调用upload_img方法进行图片上传
            $file = request()->file('thumb');

            if ($file) {
                //存入数组
                $data['thumb'] =  $this->upload_img();
            }else{
                return json(['code'=>0,'msg'=>'请上传图片']);
            }
            db('pagemodule')->insert($data);
           return json(['code'=>1,'msg'=>'添加成功']);
        }

        return $this->fetch();
    }

    //修改
    public function edit(){
        $id=input('id');

        if(Request::instance()->isGet()){
            //查找当前修改的数据
            $res=db('pagemodule')->where(['id'=>$id])->find();

            $this->assign('res',$res);
        }else{
            $data=input('post.');
            $data['utime']=time();

            //检测参数格式
            //定义验证规则
            $rule=[
                'auth_c'   =>'alpha',
                'auth_a'   =>'alpha',
            ];

            //定义提示信息
            $msg=[
                'auth_c.alpha'      =>'控制器只能填字母',
                'auth_a.alpha'      =>'操作方法只能填字母',
            ];
            //实例化验证类
            $validata=new \think\validate($rule,$msg);
            //执行验证
            if (!$validata->check($data)) {
                $error = $validata->getError();
                $this->error($error);
            }
            //将控制器名称和方法名称，转化为固定的大小写格式，比如全小写
            $data['auth_c'] = strtolower($data['auth_c']);
            $data['auth_a'] = strtolower($data['auth_a']);

            if(!$_FILES['thumb']){
                return json(['code' => 0,'msg' => '请上传缩略图！']);
            }

            if(db('pagemodule')-> where(array('module_name'=> $data['module_name'],'id'=>array('neq',$id))) -> find()){
                return json(['code' => 0,'msg' => '模块名称重复！']);
            }

            // 调用upload_img方法进行图片上传
            $file = request()->file('thumb');

            if ($file) {
                //存入数组
                $data['thumb'] =  $this->upload_img();
            }

            db('pagemodule')->where(array('id'=>$id))->update($data);
            return json(['code'=>1,'msg'=>'修改成功']);
        }
        return $this->fetch();
    }


    //删除
    public function del(){
        $id=input('id');

        db('pagemodule')->where(['id'=>$id])->delete();
        return json(['code'=>1,'msg'=>'删除成功']);
    }

    // 定义缩略图上传方法,实现头像上传
    private function upload_img()
    {
        $file = request()->file('thumb');
        if (empty($file)) {
            $this->error($file->getError());
        }
        $info = $file->validate(['size' => 5 * 1024 * 1024, 'ext' => 'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . '/' . 'Uploads');
        if ($info) {
            //获取图片路径并把路径从'\'转换成'/'
            $getSaveName=str_replace("\\","/",$info->getSaveName());

            // 上传图片成功，获取文件访问路径并返回
            $img_logo = '/' . 'Uploads' . '/' . $getSaveName;

            // 使用open方法打开原始图片
            $image = \think\Image::open('.' . $img_logo);

            //调用thumb方法生成缩略图，调用save方法保存缩略图
            $image->thumb(200, 120)->save('.' . $img_logo);

            return $img_logo;

        } else {
            // 上传出错
            $error = $file->getError();
            $this->error($error);
        }
    }

}