<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 11:54
 *
 * 举报 接口
 *
 */
namespace app\home\controller;

class Report extends Base{
    /**
     *
     * 举报
     * @param $question_type string 问题类别
     * @param $title string 举报标题
     * @param $content string 举报内容
     * @param $belong_company string 问题所属公司
     * @param $belong_dept string 被反映对象(部门)
     * @param $rank string 职级
     * @param $img string 照片附件  多个路径以逗号分隔
     * @param $video string 视频附件 多个路径以逗号分隔
     *
     */
    public function report(){
        $param = json_decode(trim(file_get_contents('php://input')));
        $question_type = htmlspecialchars_decode($param->question_type);
        $title = htmlspecialchars_decode($param->title);
        $content = htmlspecialchars_decode($param->content);
        $belong_company = htmlspecialchars_decode($param->belong_company);
        $belong_dept = htmlspecialchars_decode($param->belong_dept);
        $rank = htmlspecialchars_decode($param->rank);
        $img=array();
        $video=array();
        if(!empty($img)){
            $img = htmlspecialchars_decode($param->img);
        }
        if(!empty($video)){
            $video = htmlspecialchars_decode($param->video);
        }
        if(!$question_type || !$title || !$content || !$belong_company || !$belong_dept || !$rank ){
            return json(['code'=>2,'msg'=>'请将信息填写完整','data'=>'']);
            exit();
        }


        //开启事务
        db()->startTrans();

        $id = db('report')->insert([
            'title'             =>  $title,
            'content'           =>  $content,
            'belong_company'    =>  $belong_company,
            'belong_dept'       =>  $belong_dept,
            'rank'              =>  $rank,
            'question_type'     =>  $question_type,
            'ctime'             =>  time()
        ]);


        //附件数据入库
        if($id){

            //附件不得超过4个
            if(count($img)+count($video) > 4){
                return json(['code'=>3,'msg'=>'最多上传4个附件','data'=>'']);
            }

            //循环图片附件 更改格式
            if($img){
                $img =  explode('#',$img);
                foreach ($img as $k => $v){
                    $img[$k] = ['report_id'=>$id,'path'=>$v,'type'=>1];
                }
            }


            //循环视频附件 更改格式
            if($video){
                $video =  explode('#',$video);
                foreach ($video as $k => $v){
                    $video[$k] = ['report_id'=>$id,'path'=>$v,'type'=>2];
                }
            }

            //合并数组
            if($img && $video){
                $list = array_merge($img,$video);
            }else{
                if($img){
                    $list = $img;
                }else{
                    $list = $video;
                }
            }


            $res = db('report_attach')->insertAll($list);

        }


        if(!empty($img) || !empty($video)){
            if($id && $res){
                db()->commit();
                return json(['code'=>1,'msg'=>'举报成功','data'=>'']);
            }else{
                db()->rollback();
                return json(['code'=>4,'msg'=>'举报失败','data'=>'']);
            }
        }else{
            if($id){
                db()->commit();
                return json(['code'=>1,'msg'=>'举报成功','data'=>'']);
            }else{
                db()->rollback();
                return json(['code'=>4,'msg'=>'举报失败','data'=>'']);
            }


        }



    }




}