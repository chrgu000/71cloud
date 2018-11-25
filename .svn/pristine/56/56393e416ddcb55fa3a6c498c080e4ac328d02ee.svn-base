<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/7
 * Time: 9:57
 *
 * 党建相册接口
 *
 *
 */
namespace app\home\controller;


class Photo extends Base{
    /**
     * 党建相册列表
     *
     *
     */
    public function getPhotoList(){

        $p = intval(input('get.p'));
        $pageSize = intval(input('get.pageSize'));

        $p = !empty($p) ? $p : 1;
        $pageSize = !empty($pageSize) ? $pageSize : 6;

        $data = model('home/Photo')->getPhotoList($p,$pageSize);

        //图片加域名
        foreach ($data as &$v){
            foreach ($v['path'] as &$value){
                $value = addDomain($value);
            }
        }

        return json(['code'=>1,'msg'=>'','data'=>$data]);

    }

    /**
     *
     * 详情页
     * @param       $id         int         相册id
     *
     */
    public function getPhotoDetail(){
        $id = intval(input('get.id'));
        if($id <= 0){
            return json(['code'=>0,'msg'=>'参数错误','data'=>'']);
            exit();
        }

        $data = model('home/Photo')->getPhotoDetail($id);

        foreach ($data['data']['path'] as &$v){
            $v = addDomain($v);
        }

        return json(['code'=>1,'msg'=>'','data'=>$data]);


    }



}