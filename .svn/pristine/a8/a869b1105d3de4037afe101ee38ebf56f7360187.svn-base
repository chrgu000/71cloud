<?php

namespace app\branchadmin\model;

use think\Model;
use traits\model\SoftDelete;

class Dangyuan extends Model
{
    // tp5.0.2之前版本软删除字段属于静态属性，需要使用static定义
    use SoftDelete;
    protected static $deleteTime = 'delete_time';
	protected $updateTime = false;
    public function getMemberIsAttr($value)
    {
    	$data = ['未审核','通过','未通过'];
    	return $data[$value];
    }
}
