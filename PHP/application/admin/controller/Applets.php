<?php
/**
 * Created by PhpStorm.
 * Applets.php
 * author: Mr_peng
 * Date: 2018/11/15
 * Time: 8:52
 * description:
 */

namespace app\admin\controller;

use    think\Controller;
use think\Request;
use think\Db;
use think\View;
use Qiniu\Auth;
use \Qiniu\Storage\UploadManager;

require_once '../vendor/Qiniu/autoload.php';

class Applets extends Controller
{

    public function index()
    {
        $list = Db::name('applets')->alias('a')
            ->join('c_app_class b', 'a.app_class_id = b.id ')
            ->field('a.id,a.name,a.appid,a.image,a.count,a.status,b.app_classname,a.sort')
            ->select();
        $num=count($list);
        return view('index', ['list' => $list,'num'=>$num]);
    }

    public function create(Request $request)
    {
        $param = $request->param();
        $list  = Db::name('app_class')->field('app_classname,id')->select();

//        $list =   Db::name('applets')->field('id,name,appid,image,count,status')->select();
        if (!empty($param['id'])) {
            $id  = $param['id'];
            $arr = Db::name('applets')->alias('a')
                ->join('c_app_class b', 'a.app_class_id = b.id ')
                ->where(['a.id' => $id])
                ->field('a.id applets_id,b.id,a.name,a.appid,a.image,a.status,b.app_classname,a.sort')
                ->find();

            return view('create', ['list' => $list, 'arr' => $arr]);
        }

        return view('create', ['list' => $list]);
    }

    public function delete(Request $request)
    {
        $data = $request->param();
        $id   = $data['id'];

        $res_app = Db::name('app_banner')->where(['app_banner' => $id])->find();

        if ($res_app){
            $this->error('该小程序有对应banner，请先删除banner!');
        }
        $res = Db::name('applets')->where(['id' => $id])->delete();
        if (!$res) {
            $this->error('删除成功!');
        }
        $this->success('删除失败!');
    }

    /**
     * @save    创建小程序
     *
     * @param \think\Request $request
     *
     * @author  : Mr_peng
     * @return
     */
    public function save(Request $request)
    {
        $data = $request->post();

        $accessKey = Config("UPLOAD_FILE_QINIU")['driverConfig']['accessKey'];
        $secretKey = Config("UPLOAD_FILE_QINIU")['driverConfig']['secretKey'];

        $bucket = Config("UPLOAD_FILE_QINIU")['driverConfig']['bucket'];

        $auth = new Auth($accessKey, $secretKey);

        $token = $auth->uploadToken($bucket);

        if (request()->isPost()) {
            $file = $request->file('thumb');
            if (!$file && empty($data['applets_id'])) {
                return ["code" => 0, "msg" => '图标不能为空', "data" => ""];
            } elseif ($file) {
                // 要上传图片的本地路径
                $filePath = $file->getRealPath();
                $ext      = pathinfo($file->getInfo('name'), PATHINFO_EXTENSION);  //后缀
                // 上传到七牛后保存的文件名
                $key = substr(md5($file->getRealPath()), 0, 5) . date('YmdHis') . rand(0, 9999) . '.' . $ext;
                // 初始化 UploadManager 对象并进行文件的上传
                $uploadMgr = new UploadManager();
                // 调用 UploadManager 的 putFile 方法进行文件的上传
                list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
                if ($err !== null) {
                    return ["code" => 0, "msg" => '图标上传失败', "data" => ""];
                } else {
                    //返回图片的完整URL
                    $img_path = "http://oss.co-links.com/" . $ret['key'];
                }
            }

            if (empty($data['appname']) || empty($data['appid'])) {
                return ["code" => 0, "msg" => '小程序参数不能为空', "data" => ""];
            }
            $model = Db::name('applets');
            if ($model->where(['name' => $data['appname']])->value('id')) {
                return ["code" => 0, "msg" => '小程序名称已存在', "data" => ""];
            }
            if ($model->where(['name' => $data['appid']])->value('appid')) {
                return ["code" => 0, "msg" => '小程序appid', "data" => ""];
            }
            $arr['name']         = $data['appname'];
            $arr['sort']         = empty($data['sort']) ? 0 : (int) $data['sort'];
            $arr['app_class_id'] = $data['app_class_id'];
            $arr['appid']        = $data['appid'];
            if (!empty($img_path)) {
                $arr['image'] = $img_path;
            }
            if (empty($data['applets_id'])) {

                $res = $model->insert($arr);
            } else {
                $res = $model->where(['id' => $data['applets_id']])->update($arr);
            }
            if (!$res) {
                return ["code" => 0, "msg" => '提交失败', "data" => ""];
            }

            return ["code" => 1, "msg" => '提交成功', "data" => $arr];
        }
    }

    /**
     * @classification
     * @author : Mr_peng
     * @return 小程序分类列表页
     */
    public function classification()
    {
        $list = Db::name('app_class')->field('id,app_classname,status')->select();
        $num=count($list);
        return view("index_class", ['list' => $list,'num'=>$num]);
    }

    public function class_create(Request $request)
    {
        $param = $request->param();
        if (!empty($param['id'])) {

            $id            = $param['id'];
            $app_classname = Db::name('app_class')->where(['id' => $id])->field('app_classname,id')->find();

            return view("class_create", ['app_classname' => $app_classname]);
        }

        return view("class_create");
    }

    public function save_class(Request $request)
    {

        $post          = $request->post();
        $app_classname = $post['appname'];
        $model         = Db::name('app_class');
        $find          = $model->where(['app_classname' => $app_classname])->find();
        if ($find) {
            return ["code" => 0, "msg" => '有相同类名', "data" => []];
        }

        if ($post['app_class_id']) {
            $res = $model->where(['id' => $post['app_class_id']])->update(['app_classname' => $app_classname]);
        } else {
            $res = $model->insert(['app_classname' => $app_classname, 'app_id' => '0']);
        }

        if (!$res) {
            return ["code" => 0, "msg" => '提交失败', "data" => []];
        }

        return ["code" => 1, "msg" => '提交成功', "data" => []];
    }

    public function delete_class(Request $request)
    {
        $data = $request->param();
        $id   = $data['id'];

        $res_app = Db::name('applets')->where(['app_class_id' => $id])->find();
        if ($res_app){
            $this->error('该分类下面有小程序，请先删除对应小程序');
        }
        $res = Db::name('app_class')->where(['id' => $id])->delete();
        if (!$res) {
            $this->error('删除成功!');
        }
        $this->success('删除失败!');
    }

    public function banner()
    {
        $list =  $list = Db::name('app_banner')->alias('a')
            ->join('c_applets b', 'a.appid = b.id ')
            ->field('a.id,a.image,a.sort,b.name')
            ->select();
        $num=count($list);
        return view('banner', ['list' => $list,'num'=>$num]);
    }

    public function banner_create(Request $request)
    {
        $param = $request->param();
        $list = Db::name('applets')
            ->field('id,name')
            ->select();
        if (!empty($param['id'])) {

            $id            = $param['id'];
            $app_classname = Db::name('app_banner')->where(['id' => $id])->field('id,appid')->find();

            return view("class_create", ['list' => $list,'app_classname' => $app_classname]);
        }

        return view("banner_create", ['list' => $list]);
    }

    public function save_banner(Request $request)
    {
        $data = $request->post();
//        dump($data);
//        die();

        $accessKey = Config("UPLOAD_FILE_QINIU")['driverConfig']['accessKey'];
        $secretKey = Config("UPLOAD_FILE_QINIU")['driverConfig']['secretKey'];

        $bucket = Config("UPLOAD_FILE_QINIU")['driverConfig']['bucket'];

        $auth = new Auth($accessKey, $secretKey);

        $token = $auth->uploadToken($bucket);

        if (request()->isPost()) {
            $file = $request->file('thumb');
            if (!$file && empty($data['applets_id'])) {
                return ["code" => 0, "msg" => 'banner不能为空', "data" => ""];
            } elseif ($file) {
                // 要上传图片的本地路径
                $filePath = $file->getRealPath();
                $ext      = pathinfo($file->getInfo('name'), PATHINFO_EXTENSION);  //后缀
                // 上传到七牛后保存的文件名
                $key = substr(md5($file->getRealPath()), 0, 5) . date('YmdHis') . rand(0, 9999) . '.' . $ext;
                // 初始化 UploadManager 对象并进行文件的上传
                $uploadMgr = new UploadManager();
                // 调用 UploadManager 的 putFile 方法进行文件的上传
                list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
                if ($err !== null) {
                    return ["code" => 0, "msg" => 'banner上传失败', "data" => ""];
                } else {
                    //返回图片的完整URL
                    $img_path = "http://oss.co-links.com/" . $ret['key'];
                }
            }

            if (empty($data['app_id'])) {
                return ["code" => 0, "msg" => '小程序参数不能为空', "data" => ""];
            }
            $model = Db::name('app_banner');
            if ($model->where(['id' => $data['app_id']])->value('id')) {
                return ["code" => 0, "msg" => '小程序banner已存在', "data" => ""];
            }

            $arr['appid']         = $data['app_id'];
            $arr['sort']         = empty($data['sort']) ? 0 : (int) $data['sort'];
            if (!empty($img_path)) {
                $arr['image'] = $img_path;
            }
            if (empty($data['app_banner_id'])) {

                $res = $model->insert($arr);
            } else {
                $res = $model->where(['id' => $data['app_banner_id']])->update($arr);
            }
            if (!$res) {
                return ["code" => 0, "msg" => '提交失败', "data" => ""];
            }

            return ["code" => 1, "msg" => '提交成功', "data" => $arr];
        }
    }



    public function delete_banner(Request $request)
    {
        $data = $request->param();
        $id   = $data['id'];

        $res = Db::name('app_banner')->where(['id' => $id])->delete();
        if (!$res) {
            $this->error('删除成功!');
        }
        $this->success('删除失败!');
    }

}