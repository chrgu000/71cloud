<?php
/**
 * Created by PhpStorm.
 *
 * 新闻
 *
 */
namespace app\branchadmin\controller;

use think\Db;
use think\Request;

class Contentnews extends Base{

    /**
     * 新闻列表
     *
     */
    public function index(){
        $this->view->engine->layout(false);
        $logmin = strtotime(trim(input('get.logmin')));
        $logmax = strtotime(trim(input('get.logmax')));
        $cate_id = intval(input('get.cate'));
        $title = trim(input('get.title'));

        //分类
        $cate =getTree(db('NewCate')->select());
        $CompanyNewCate = getTree_sec(model('company_new_cate')->select());

        $map = [];
        $map['is_del'] = 0;
        //日期筛选
        if($logmin && $logmax){
            $map['ctime'] = ['between',"$logmin,$logmax"];
        }

        //分类筛选
        if($cate_id){
            $cate_ids = getSon($cate,$cate_id);
            $cate_ids[] = $cate_id;
            $map['cate_id'] = ['IN',$cate_ids];
        }


        //标题筛选
        if($title){
            $map['title'] = ['LIKE',"%$title%"];
        }

        //新闻
        $data = db('News')->alias('a')
            ->join('c_new_cate b','a.cate_id = b.id')
            ->field('a.id,a.title,a.thumb,b.name as cate_name,a.ctime,a.recommend')
            ->where($map)
            ->select();

        #用户后台自己添加
        $company_id = session('branchadmin_info.company_id');

        $CompanyNews_model = model('company_news');

        $sql = "SELECT a.id,a.title,a.thumb,b.name as cate_name,a.ctime,a.recommend FROM c_company_news a left JOIN c_company_new_cate b ON a.cate_id=b.id WHERE  is_del = 0  AND a.company_id = $company_id";

        $CompanyNews_data = $CompanyNews_model->query($sql);
//        dump($CompanyNews_model->query($sql));
//        die();
        //数据总数量
        $count = count($data) + count($CompanyNews_data);

        #获取已经选择的内容
        $company = explode(',', Db::name('company_resources')->where(['company_id' => $company_id])->value('news'));
        $admin   = explode(',', Db::name('admin_resources')->where(['company_id' => $company_id])->value('news'));

        $this->assign('admin', $admin);
        $this->assign('company', $company);

        $this->assign('cate',$cate);
        $this->assign('CompanyNewCate',$CompanyNewCate);
        $this->assign('count',$count);
        $this->assign('CompanyNews_data',$CompanyNews_data);
        $this->assign('data',$data);
        return $this->fetch('content/ContentNews/index');

    }

    /**
     * 添加新闻
     *
     */
    public function add(){
        if(Request::instance()->isGet()){
            //分类
            $cate =getTree(db('NewCate')->select());
            $CompanyNewCate = getTree_sec(model('company_new_cate')->select()->toArray());

            $this->assign('cate',$cate);
            $this->assign('CompanyNewCate',$CompanyNewCate);
            return $this->fetch('content/ContentNews/add');
        }else{
            /*接收参数*/
            $data=input('post.');

//            dump($data);
//            die();
            if(!$data['title'] || !$data['cate'] || !$data['content']){
                return json (['code' => 0,'msg' => '请将信息填写完整！']);
            }


            //检测重名
            $newModel = db('News');
            if($newModel -> where(array('title'=>$data['title'])) -> find()){
                return json(['code' => 0,'msg' => '标题重复！']);
            }

            //图片上传
            $file = request()->file('thumb');

            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . '/' . 'uploads');


            if($info){
                //获取图片路径并把路径从'\'转换成'/'
                $getSaveName=str_replace("\\","/",$info->getSaveName());

                //拼接图片路径
                $data['thumb'] = '/'.'Uploads'.'/'.$getSaveName;


            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }

            $data['cate_id']=$data['cate'];
            $company_id = session('branchadmin_info.company_id');
            $data['company_id']=$company_id;



            unset($data['cate']);
            dump($data);
            $newModel -> insert($data);
            return json(['code' => 1,'msg' => '添加成功！']);

        }

    }



    /**
     * 编辑新闻
     * @param       $id     int     新闻id
     *
     */
    public function edit(){

        $id = intval(input('id'));

        if($id <= 0){
            return json (['code' => 0,'msg' => '参数错误！']);
        }
//        dump($id);

        if (Request::instance()->isGet()) {
            //分类
            $cate =getTree(db('CompanyNewCate')->select());
            $data =db('CompanyNews')->field('id,title,content,thumb,cate_id,recommend') ->where('id = '.$id) ->find();
//            dump($data);
//            die();
            $data['content'] = htmlspecialchars_decode($data['content']);
            $this->assign('cate',$cate);
            $this->assign('data',$data);
            return $this->fetch('content/ContentNews/edit');
        }else{
            $data=input('post.');


            if(!$data['title'] || !$data['cate'] || !$data['content']){
                return json (['code' => 0,'msg' => '请将信息填写完整！']);
            }

            if(!$_FILES['thumb']){
                return json(['code' => 0,'msg' => '请上传缩略图！']);
            }

            //检测重名
            $newModel = db('News');
            if($newModel -> where(array('title'=> $data['title'],'id'=>array('neq',$id))) -> find()){
                return json(['code' => 0,'msg' => '标题重复！']);
            }


            /*-------图片上传开始--------*/

            $file = request()->file('thumb');
            if($file) {
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->move(ROOT_PATH . 'public' . '/' . 'uploads');

                if ($info) {
                    //获取图片路径并把路径从'\'转换成'/'
                    $getSaveName = str_replace("\\", "/", $info->getSaveName());

                    //拼接图片路径
                    $data['thumb'] = '/' . 'Uploads' . '/' . $getSaveName;


                } else {
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
            /*-------图片上传结束---------*/

            $data['cate_id']=$data['cate'];


            unset($data['cate']);


            $newModel -> where('id = '.$id) -> update($data);
            return json(['code' => 1,'msg' => '修改成功！']);


        }


    }


    /**
     * 新闻删除
     * @param       $id     int     新闻id
     *
     *
     */
    public function del(){
        $id = intval(input('post.id'));
        if($id <= 0){
            return json(['code' => 0,'msg' => '参数错误！']);
        }

        db('News') -> where('id = '.$id) -> setField(['dtime' => time(),'is_del' => 1]);
        return json(['code' => 1,'msg' => '删除成功！']);


    }


    /**
     * 推荐
     * @param       $brand_id       int         品牌id
     *
     *
     */
    public function recommend(){
        $id = intval(input('post.id'));
        if($id <= 0){
            return json(['code' => 0,'msg' => '参数错误!']);
        }

        db('News') -> where('id = '.$id) -> setField('recommend',1);
        return json(['code' => 1,'id' => $id,'msg' => '推荐成功!']);
    }


    /**
     *
     * 取消推荐
     * @param       $brand_id       int         品牌id
     *
     */
    public function cancel_recommend(){
        $id = intval(input('post.id'));
        if($id <= 0){
            return json(['code' => 0,'msg' => '参数错误!']);
        }

        db('News') -> where('id = '.$id) -> setField('recommend',0);
        return json (['code' => 1,'id' => $id,'msg' => '取消成功!']);
    }



}