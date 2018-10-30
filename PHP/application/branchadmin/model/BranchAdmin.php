<?php

namespace app\branchadmin\model;

use think\Model;

class BranchAdmin extends Model
{
    public $table = 'c_branch_admin';
    protected $updateTime = false;

    protected $resultSetType = 'collection';


    public function branch()
    {
        return $this->hasOne('Branchs','id','branchs_id');
    }
}
