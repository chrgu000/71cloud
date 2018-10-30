<?php

namespace app\branchadmin\model;

use think\Model;

class BranchMessage extends Model
{
	protected $updateTime = false;
    //定义获取器
    public function getStatusAttr($status)
    {
    	$data = ['未读','已读'];
    	return $data[$status];
    }
}
