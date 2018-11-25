<?php

namespace app\branchadmin\model;

use think\Model;

class Branchs extends Model
{
    public $table = 'c_branchs';
    protected $createTime = false;
    protected $updateTime = false;
    protected $resultSetType = 'collection';
}
