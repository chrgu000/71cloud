<?php
/**
 * Created by PhpStorm.
 * Show.php
 * author: Mr_peng
 * Date: 2018/11/5
 * Time: 10:12
 * description:
 */

namespace app\admin\controller;

class Show
{

    public function show(){

        return "hello!";
    }

    public function about()
    {

        return view('index/about');
    }
}