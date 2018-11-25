<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use think\response\Json;


class Company extends Base{
    public $branch = array();
    public  $rand = array(); //随机数数组
    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        $branch =  db('branch')->select();
        $this->rand  = array_merge(range("A","Z"),range("a","z"),range(0,9));
    }


    //公司管理员列表
    public function adminlist(){
        $company_name = trim(input('get.company_name'));
        //公司名称筛选
<<<<<<< HEAD

=======
//        print_r($company_name);die;
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
        $map=[];
        if($company_name){
            $map['company_name'] = ['LIKE',"%$company_name%"];
        }
        //查询共有多少条数据
        $num=db('branch_admin')->count();
        $res=db('branch_admin')->alias('a')
<<<<<<< HEAD
            ->join('c_company c','a.company_id = c.id')
            ->field('c.id,a.bradmin_username,a.status,a.ctime,c.phone,c.company_name,c.address,c.logo,c.company_email,c.id as company_id')
=======
            ->join('c_role b','a.role_id= b.id')
            ->join('c_company c','a.company_id = c.id')
            ->field('a.id,a.bradmin_username,a.status,a.ctime,b.name,c.phone,c.company_name,c.id as company_id')
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
            ->where($map)
            ->select();


        $this->assign('res',$res);
        $this->assign('num',$num);
        return $this->fetch('company/company-admin-list');
    }


<<<<<<< HEAD
    //添加公司及管理员
    public function adminadd(){

=======
    //添加公司管理员
    public function adminadd(){

        //查找角色
        $role = db('role')->field("id,name")->select();
        //查找公司
        $company=db('company')->field('id,company_name')->select();

        //查找已经绑定的公司id
        $cid=db('branch_admin')->distinct("company_id")->column('company_id');

        $cid = implode(",",$cid);
        $name=db('company')->where(array('id'=>array('not in',$cid)))->field('id,company_name')->select();

>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
        if (Request::instance()->isPost()){
            //获取post数据
            $res = input('post.');

<<<<<<< HEAD
            if(!$res['company_name'] || !$res['company_email'] || !$res['address'] || !$res['phone'] || !$res['bradmin_username'] || !$res['bradmin_password']){
                return json (['code' => 0,'msg' => '请将信息填写完整！']);
            }
            if(db('company')->where(array('company_name'=>$res['company_name']))->find()){
                return json(['code'=>0,'msg'=>'公司名称重复']);
            }
            if(db('branch_admin')->where(['bradmin_username'=>$res['bradmin_username']])->find()){
                return json(['code'=>0,'msg'=>'该账户已存在!']);
            }
=======
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
            //把当前时间戳存到$res里
            $res['ctime'] = time();

            //获取后台管理员登录的id
            $admin_id = input('session.admin.id');
<<<<<<< HEAD
            $res['pid']=0;
            //把管理员id存入$res里
            $res['admin_id'] = $admin_id;

            //生成公司唯一标识符并存进$_post
            $identifier = $this->getnonce();
            $res['identifier'] = $identifier;

            /**
             * 创建公司自动给所有权限
             */
            //查所有顶级权限id
            $auth=db('auth')->where(['pid'=>0])->field('id')->select();
            $auth_id=array_column($auth,'id','id');
            $auth_id=implode(',',$auth_id);


            // 调用upload_img进行图片上传
            $file = request()->file('logo');

            if ($file) {
                //存入数组
                $res['logo'] =  $this->upload_img();

            }else{
                return json(['code'=>0,'msg'=>'请上传图片']);
                // 上传失败获取错误信息
                //echo $file->getError();
            }
=======

            //把pid=0存到$res里
            $res['pid']=0;

            //把管理员id存入$res里
            $res['admin_id'] = $admin_id;

>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118

            if($res['bradmin_password'] != $res['bradmin_password2']){
                return json(['code'=>0,'msg'=>'两次输入密码不一致，请重新输入']);

            }else{
                if(strlen($res['bradmin_password'])<6){
                    return json(['code'=>0,'msg'=>'请输入6位数以上密码']);
                    //echo '<script>alert("请输入6位数以上密码")</script>';
                }else{

                    //加密密码
                    $res['bradmin_password'] = encrypt_password($res['bradmin_password']);

                    //去掉$res中bradmin_password2字段
                    unset($res['bradmin_password2']);

<<<<<<< HEAD
                    Db::startTrans();
                    try{
                        Db::name('company')->insert(
                            [
                                'company_name'=>$res['company_name'],
                                'company_email'=>$res['company_email'],
                                'address'=>$res['address'],
                                'phone'=>$res['phone'],
                                'identifier'=>$res['identifier'],
                                'logo'=>$res['logo'],
                                'ctime'=>$res['ctime']
                            ]
                        );
                        //获取新增后的公司id
                        $company_id=Db::name('user')->getLastInsID();

                        Db::name('branch_admin')->insert(
                            [
                                'bradmin_username'=>$res['bradmin_username'],
                                'bradmin_password'=>$res['bradmin_password'],
                                'admin_id'=>$res['admin_id'],
                                'company_id'=>$company_id,
                                'pid'=>$res['pid'],
                                'ctime'=>$res['ctime']
                            ]
                        );

                        Db::name('auth_company')->insert(
                            [
                                'auth_id'=>$auth_id,
                                'company_id'=>$company_id,
                                'ctime'=>$res['ctime']
                            ]
                        );
                        // 提交事务
                        Db::commit();
                        return json(['code'=>1,'msg'=>'添加成功']);
                    }catch (\Exception $e){
                        // 回滚事务
                        Db::rollback();
                        return json(['code'=>0,'msg'=>'添加失败']);
                    }
                }
            }

        }

=======
                    //将post里的数据插入到数据库
                    db('branch_admin')->insert($res);
                    return json(['code'=>1,'msg'=>'添加成功']);
                }
            }
            /*$this->assign('rows', $rows);*/
        }
        $this->assign('role',$role);
        $this->assign('company',$company);
        $this->assign('name',$name);
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
        return $this->fetch('company/company-admin-add');
    }



    //公司管理员修改
    public function adminedit(){
<<<<<<< HEAD

        //获取公司id
        $id=input('id');
        if (Request::instance()->isGet()) {
            //查询共有多少条数据
            $num = db('branch_admin')->count();
            $res = db('branch_admin')->alias('a')
                ->join('c_company c', 'a.company_id = c.id')
                ->field('a.id,a.bradmin_username,a.status,a.ctime,c.phone,c.company_name,c.address,c.logo,c.company_email,c.id as company_id')
                ->where(['c.id' => $id])
                ->find();
        }else{
            $data=input('post.');
            if(!$data['company_name'] || !$data['address'] || !$data['company_email'] || !$data['phone']){
                return json (['code' => 0,'msg' =>'请将信息填写完整！']);
            }

            //检测重名
            $newModel = db('company');
            if($newModel -> where(array('company_name'=> $data['company_name'],'id'=>array('neq',$id))) -> find()){
                return json(['code' => 0,'msg' => '公司名称重复！']);
            }
            //把当前时间存进$_post
            $data['utime']=time();
            // 调用upload_img进行图片上传
            $file = request()->file('logo');
            if ($file) {
                //存入数组
                $data['logo'] = $this->upload_img();
            }

            db('company')->where(['id'=>$id])->update($data);
            return json(['code'=>1,'msg'=>'修改成功']);
        }
        $this->assign('res',$res);
        $this->assign('num',$num);
        return $this->fetch('company/company-admin-edit');
    }

    /*//公司管理员删除
=======
        $id = input('id');
        //查找公司
        $company=db('company')->field('id,company_name')->select();

        //查找角色
        $role = db('role')->field("id,name")->select();
        //查找当前修改的角色id
        $crole=db('branch_admin')->where(array('id'=>$id))->field('role_id,company_id')->find();
        //查找修改的数据
        $res=db('branch_admin')->where(array('id'=>$id))->find();

        $companyname=db('company')->where(array('id'=>$res['company_id']))->field('id,company_name,company_email')->find();

        //查找已经绑定的公司id
        $cid=db('branch_admin')->distinct("company_id")->where(array("id"=>array("neq",$id)))->column('company_id');

        $cid = implode(",",$cid);
        $name=db('company')->where(array('id'=>array('not in',$cid)))->field('id,company_name')->select();
         if(Request::instance()->isPost()) {
            $post=input('post.');
            $post['utime']=time();
            $rows=db('branch_admin')->where(array('id'=>$id))->update($post);
            $this->redirect('adminlist');
        }
        $this->assign('res',$res);
        $this->assign('role',$role);
        $this->assign('crole',$crole);
        $this->assign('company',$company);
        $this->assign('companyname',$companyname);
        $this->assign('name',$name);

        return $this->fetch('company/company-admin-edit');
    }

    //公司管理员删除
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
    public function admindel(){
        $id=input('id');
        $res=db('branch_admin')->where(array('id'=>$id))->delete();
        return json(['code'=>1,'msg'=>'删除成功']);


<<<<<<< HEAD
    }*/
=======
    }
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118


    //公司管理员密码修改
    public function passedit(){
        $id=input('id');
        //查询修改的数据
        $res=db('branch_admin')->where(array('id'=>$id))->find();
        if(Request::instance()->isPost()) {
            $row = input('post.');

            //加密post传过来的密码
            $admin_password = encrypt_password($row['bradmin_password']);

            $result = db('branch_admin')->where(array('id' => $id, 'bradmin_password' => $admin_password))->select();
            //查询当前修改记录的密码
            $pass = db('branch_admin')->where(array('id' => $id))->field('bradmin_password')->find();

            //判断输入的原密码是否和数据库密码一致
            if ($admin_password == $pass['bradmin_password']) {
                //判断修改的密码是否大于6位数
                if(strlen($row['bradmin_password1'])<6){
                    return json(['code'=>0,'msg'=>'请输入6位数以上密码']);
                }
                if($row['bradmin_password1'] != $row['bradmin_password2']){
                   return json(['code'=>0,'msg'=>'确认密码和新密码不一致']);
                }
                unset($row['bradmin_password']);//删除原密码
                unset($row['bradmin_password2']);//删除确认密码
                $row['bradmin_password'] = encrypt_password($row['bradmin_password1']);
                unset($row['bradmin_password1']);//删除新密码

                $row['utime'] = time();//获取时间
                //将修改的结果插入数据库
                $rows = db('branch_admin')->where(array('id' => $id))->update($row);

                //对结果判断
                if ($rows) {
                    return json(['code'=>1,'msg'=>'修改成功']);
                } else {
                    return json(['code'=>0,'msg'=>'修改失败']);
                }

            } else {
                return json(['code'=>0,'msg'=>'原密码错误']);
            }
        }

        return $this->fetch('company/admin-password-edit');
    }


    //公司列表
    public function companylist(){

        $company_name = trim(input('get.company_name'));
        //公司名称筛选
        $map=[];
        if($company_name){
            $map['company_name'] = ['LIKE',"%$company_name%"];
        }

        //查询总记录条数
        $num=db('company')->count();
        //查找公司
        $rows=db('company')->where($map)->select();

        $this->assign('rows',$rows);
        $this->assign('num',$num);
        return $this->fetch('company/company-list');
    }

    //公司添加
    public function companyadd(){
        if (Request::instance()->isPost()) {
            $data = input('post.');

            if(!$data['company_name'] || !$data['company_email'] || !$data['address'] || !$data['phone']){
                return json (['code' => 0,'msg' => '请将信息填写完整！']);
            }
            if(db('company')->where(array('company_name'=>$data['company_name']))->find()){
                return json(['code'=>0,'msg'=>'公司名称重复']);
            }

            //把当前时间存到$_post里
            $data['ctime'] = time();

            // 调用upload_img进行图片上传
            $file = request()->file('logo');

            if ($file) {
                //存入数组
                $data['logo'] =  $this->upload_img();

            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }


            //生成公司唯一标识符并存进$_post
            $identifier = $this->getnonce();
            $data['identifier'] = $identifier;

            //把数据插入数据库
            db('company')->insert($data);
            return json(['code'=>1,'msg'=>'添加成功']);
        }

        return $this->fetch('company/company-add');
    }


    // 定义缩略图上传方法,实现头像上传
    private function upload_img()
    {
        $file = request()->file('logo');
        if (empty($file)) {
            $this->error($file->getError());
        }
        $info = $file->validate(['size' => 5 * 1024 * 1024, 'ext' => 'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . '/' . 'Uploads');
        if ($info) {
            //获取图片路径并把路径从'\'转换成'/'
            $getSaveName=str_replace("\\","/",$info->getSaveName());
<<<<<<< HEAD

            // 上传图片成功，获取文件访问路径并返回
            $img_logo = '/' . 'Uploads' . '/' . $getSaveName;
            $type=$info->getExtension();
            //判断如果是gif图就不转成缩略图(gif转缩略图会报错)
            if($type == 'gif'){
                return $img_logo;
            }
=======
            // 上传图片成功，获取文件访问路径并返回
            $img_logo = '/' . 'Uploads' . '/' . $getSaveName;

>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
            // 使用open方法打开原始图片
            $image = \think\Image::open('.' . $img_logo);

            //调用thumb方法生成缩略图，调用save方法保存缩略图
            $image->thumb(100, 50)->save('.' . $img_logo);

            return $img_logo;

        } else {
            // 上传出错
            $error = $file->getError();
            $this->error($error);
        }
    }

    //公司修改
    public function companyedit(){
        //获取当前修改的id
        $id=input('id');

        if (Request::instance()->isGet()) {
            //查找当前修改的数据显示出来
            $res = db('company')->where(array('id' => $id))->find();
            $this->assign('res',$res);
            return $this->fetch('company/company-edit');
        }else{
            $_post=input('post.');

            //把当前时间存进$_post
            $_post['utime']=time();

            // 调用upload_img进行图片上传
            $file = request()->file('logo');
            if ($file) {
                //存入数组
                $_post['logo'] =  $this->upload_img();
            }

            db('company')->where(array('id'=>$id))->update($_post);

            return json(['code'=>1,'msg'=>'修改成功']);
        }
    }

<<<<<<< HEAD
    /*//公司删除
    public function companydel(){
        //获取当前修改的id
        $id=input('id');
        //删除公司
        $res=db('company')->where(array('id'=>$id))->delete();
        //删除公司下的所有用户
        db('user')->where(['company_id'=>$id])->delete();

        return json(['code'=>1,'msg'=>'删除成功']);

    }*/
=======
    //公司删除
    public function companydel(){
        //获取当前修改的id
        $id=input('id');
        $res=db('company')->where(array('id'=>$id))->delete();
        if($res){
            return json(['code'=>1,'msg'=>'删除成功']);
        }else{
            return json(['code'=>1,'msg'=>'删除失败']);
        }

    }
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118


    /**
     * 公司列表页里用户功能 点击查看修改功能
     *
     * 显示编辑页面资源
     */
    public function cedit(Request $request){

        if(Request::instance()->isGet()) {
            //获取公司id
            $cid = input('id');

            $com_id=db('auth_company')->where(array('company_id'=>$cid))->field('company_id')->find();
            if(empty($com_id)){
                $this->error('该公司尚未绑定权限，请先绑定权限!');
                //return json(['code'=>0,'msg'=>'该公司尚未绑定权限，请先绑定权限!']);
            }
            /*if(){
                return json(['code'=>0,'msg'=>'该公司尚未绑定权限，请先绑定权限!']);
            }*/


            //根据id查公司
            $company_id = db('company')->where(array('id' => $cid))->field('company_name,id')->find();

            //根据公司id查对应权限id
            $auth_id = db('auth_company')->where(array('company_id' => $cid))->field('auth_id')->find();

            //查找所有权限
            $dingji = db('auth')->where('pid=0')->field('id,auth_name')->select();
            $this->assign('company_id', $company_id);
            $this->assign('auth_id', $auth_id);
            $this->assign('dingji', $dingji);
        }else{
            $data=input('post.');

            //转换成字符串
            $data['auth_id']=implode(',',$data['auth_id']);
            $result=db('auth_company')->where(array('company_id'=>$data['id']))->update(['auth_id'=>$data['auth_id'],'utime'=>time()]);
            if($result){
                return json(['code'=>1,'msg'=>'修改成功']);
            }else{
                return json(['code'=>0,'msg'=>'修改失败']);
            }

        }
        return $this->fetch('company/update');
    }


<<<<<<< HEAD
    //启用账号状态
    public function status(){
        $id=input('id');
        print_r($id);die;
        $res=db('branch_admin')->where(array('id'=>$id))->update(array('status'=>1));
        if($res){
            return json(['code'=>0,'msg'=>'修改成功']);
        }else{
            return json(['code'=>1,'msg'=>'修改失败']);
        }

    }

    //停用账号状态
    public function statu(){
        $id=input('id');
        print_r($id);die;
        $res=db('branch_admin')->where(array('id'=>$id))->update(array('status'=>0));
        if($res){
            return json(['code'=>0,'msg'=>'修改成功']);
        }else{
            return json(['code'=>1,'msg'=>'修改失败']);
        }

    }

=======
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118

    //随机生成随机数
    public function getnonce($length = 8){
        $token ="";
        $token_arr = $this->rand;
        shuffle($token_arr);
        $count = count($token_arr);
        for($i=0;$i<=$length;$i++){
            $index = rand(0,$count-1);
            $token.=$token_arr[$index];
        }
        return $token;
    }
    //用当前毫秒拼接随机数
    function geturlnonce(){
        $time = microtime(true);
        $str= $time.$this->getnonce(8);
        return md5($str);

    }

}