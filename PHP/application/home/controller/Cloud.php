<?php
/**
 * Created by PhpStorm.
 * User: lwen_phper@163.com
 * Date: 2018/8/8
 * Time: 11:30
 *
 * 云展馆 接口
 *
 */
namespace app\home\controller;

use think\Controller;
use think\Request;

class Cloud extends Base{
    /**
     *
     * 云展馆列表
     *
     */
    public function getCloud(){
        $data = db('Cloud')->field('title,thumb,content,path,visit')->select();

        foreach ($data as &$v){
            $v['thumb'] = addDomain($v['thumb']);
        }

        echo json_encode(['code'=>1,'msg'=>'','data'=>$data]);

    }




}