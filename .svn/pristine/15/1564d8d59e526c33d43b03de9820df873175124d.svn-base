<?php

namespace app\branchadmin\model;

use think\Model;

class Permissions extends Model
{
    //
    protected $resultSetType = 'collection';


    public function chirds(){
        return $this->hasMany(self::class,'pid','id');
    }
}
