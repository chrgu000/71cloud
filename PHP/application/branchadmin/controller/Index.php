<?php
namespace app\branchadmin\controller;

class Index extends Base
{
    //后台首页
    public function index()
    {

        return view();
    }

    public function welcome()
    {
        //临时关闭模板布局
         $this->view->engine->layout(false);
        return view();
    }
}
