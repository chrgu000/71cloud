<?php
namespace app\admin\controller;
use think\Controller;


class Index extends Base{

    public function index(){

        return $this->fetch('index/index');
    }

    public function welcome(){
        return $this->fetch('index/welcome');

    }

}
