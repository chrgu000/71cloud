<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/7/26
 * Time: 16:08
 *
 * 课程视频
 *
 */
namespace app\branchadmin\controller;
use think\Db;
use think\Request;

class Contentclasschapter extends Base{

    /**
     *
     * 课程视频列表
     *
     */
    public function index(){
        $this->view->engine->layout(false);
        $logmin = strtotime(trim(input('get.logmin')));
        $logmax = strtotime(trim(input('get.logmax')));
        $class_id = intval(input('get.class_id'));
        $name = trim(input('get.name'));

        //课程
        $class = db('Class')->field('id,name')->select();


        $map = [];
        $map['is_del'] = 0;
        //日期筛选
        if ($logmin && $logmax) $map['a.ctime'] = ['between', "$logmin,$logmax"];

        //分类筛选
        if ($class_id) $map['a.class_id'] = $class_id;

        //名称筛选
        if ($name) $map['a.name'] = ['LIKE', "%$name%"];

        $data = db('ClassChapter')->alias('a')
            ->field('a.id,a.name,a.thumb,a.path,a.vtime,a.episode,a.ctime,b.name as class_name')
            ->join('c_class b','a.class_id = b.id')
            ->where($map)
            ->select();

        $count = count($data);

        #获取已经选择的内容
        $company_id = session('branchadmin_info.company_id');
        $company = explode(',', Db::name('company_resources')->where(['company_id' => $company_id])->value('classchapter'));
        $admin   = explode(',', Db::name('admin_resources')->where(['company_id' => $company_id])->value('classchapter'));

        $this->assign('admin', $admin);
        $this->assign('company', $company);

        $this->assign('class', $class);
        $this->assign('count', $count);
        $this->assign('data', $data);
        return $this->fetch('content/ContentClassChapter/index');

    }

    /**
     *
     * 添加视频
     *
     *
     */
    public function add(){
        if(Request::instance()->isGet()){
            //课程
            $class = db('Class')->field('id,name')->select();

            $this->assign('class',$class);
            return $this->fetch('content/ContentClassChapter/add');

        }else{
            $name = trim(input('post.name'));
            $class_id = trim(input('post.class_id'));
            $path = trim(input('post.path'));
            $episode = trim(input('post.episode'));
            $vtime = trim(input('post.vtime'));

            if(empty($name) || empty($class_id) || empty($episode) || empty($path) || empty($vtime)){
                return json(['code' => 0,'msg' => '请将信息填写完整！']);
            }

            if(empty($_FILES['thumb'])){
                return json(['code' => 0,'msg' => '请上传缩略图！']);
            }

            //检测重名
            $classChapterModel = db('ClassChapter');
            if($classChapterModel->where("name = '$name'")->find()){
                return json(['code' => 0,'msg' => '名称重复！']);
            }




            /*-------图片上传开始--------*/
            $file = request()->file('thumb');

            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . '/' . 'uploads');

            if($info){
                //获取图片路径并把路径从'\'转换成'/'
                $getSaveName=str_replace("\\","/",$info->getSaveName());

                //拼接图片路径
                $thumb = '/'.'Uploads'.'/'.$getSaveName;


            }
            /*-------图片上传结束---------*/

            $data = [
                'name'      =>  $name,
                'class_id'  =>  $class_id,
                'thumb'     =>  $thumb,
                'path'      =>  $path,
                'vtime'     =>  $vtime,
                'episode'   =>  $episode,
                'ctime'     =>  time()
            ];

            //开启事务
            db()->startTrans();
            $res = $classChapterModel->insert($data);

            if($res){
                //课时+1
                $res1 = db('Class')->where('id='.$class_id)->setInc('period');
            }


            if($res && $res1){
                db('')->commit();
               return json(['code' => 1,'msg' => '添加成功！']);
            }else{
                db('')->rollback();
                return json(['code' => 0,'msg' => '添加失败！']);
            }

            return json(['code' => 1,'msg' => '添加成功！']);

        }


    }




    /**
     *
     * 编辑视频
     * @param       $id     int     视频id
     *
     */
    public function edit(){
        $id = intval(input('request.id'));
        if($id <= 0){
            $this->error('参数错误!');
        }

        if(Request::instance()->isGet()){
            $data = db('ClassChapter')->where('id='.$id)->find();
            if($data['is_del'] == 1){
                $this->error('该视频已删除!');
            }

            //课程
            $class = db('Class')->field('id,name')->select();


            $this->assign('class',$class);
            $this->assign('data',$data);

            return $this->fetch('classChapter/edit');

        }else{
            $name = trim(input('post.name'));
            $class_id = trim(input('post.class_id'));
            $path = trim(input('post.path'));
            $episode = trim(input('post.episode'));
            $vtime = trim(input('post.vtime'));

            if(empty($name) || empty($class_id) || empty($episode) || empty($path) || empty($vtime)){
                return json(['code' => 0,'msg' => '请将信息填写完整！']);
            }

            //检测重名
            $classChapterModel = db('ClassChapter');
            if($classChapterModel->where("name = '$name' AND id != $id")->find()){
                return json(['code' => 0,'msg' => '名称重复！']);
            }




            /*-------图片上传开始--------*/
            $file = request()->file('thumb');
            if($file){
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . '/' . 'uploads');

                if($info){
                    //获取图片路径并把路径从'\'转换成'/'
                    $getSaveName=str_replace("\\","/",$info->getSaveName());

                    //拼接图片路径
                    $thumb = '/'.'Uploads'.'/'.$getSaveName;
                    if(!empty($thumb)) $classChapterModel->where('id='.$id)->setField('thumb',$thumb);

                }
            }
            /*-------图片上传结束---------*/

            $data = [
                'name'      =>  $name,
                'class_id'  =>  $class_id,
                'path'      =>  $path,
                'vtime'     =>  $vtime,
                'episode'   =>  $episode,
            ];


            $classChapterModel->where('id='.$id)->update($data);

            return json(['code' => 1,'msg' => '修改成功！']);



        }
    }

    /**
     *
     * 删除视频
     * @param       $id     int     视频id
     *
     *
     */
    public function del(){
        $id = intval(input('post.id'));
        if($id <= 0)  $this->error('参数错误!');

        db()->startTrans();
        $classChapterModel = db('ClassChapter');

        $res = $classChapterModel->where('id='.$id)->setField(['dtime' => time(),'is_del' => 1]);

        if($res){
            //课时-1
            $class_id = $classChapterModel->where('id='.$id)->value('class_id');

            $res1 = db('Class')->where('id='.$class_id)->setDec('period');
        }


        if($res && $res1){
            db()->commit();
            return json(['code' => 1,'msg' => '删除成功！']);
        }else{
            db()->rollback();
            return json(['code' => 0,'msg' => '删除失败！']);
        }






    }

}