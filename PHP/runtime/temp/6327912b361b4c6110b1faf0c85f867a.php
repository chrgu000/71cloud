<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/branchadmin\view\login\login.html";i:1541574067;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
    <script type="text/javascript" src="/static/admin/static/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/admin/static/admin/lib/respond.min.js"></script>
<![endif]-->
<link href="/static/admin/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/static/admin/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="/static/admin/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
    <script type="text/javascript" src="/static/admin/static/admin/lib/DD_belatedPNG_0.0.8a-min.js"></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
    <title>七一云党建后台登录</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form action="<?php echo \think\Request::instance()->url(); ?>" class="form" method="post">
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-xs-8">
          <input id="bradmin_username" name="bradmin_username" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-xs-8">
          <input id="bradmin_password" name="bradmin_password" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
      <div class="formControls col-xs-8 col-xs-offset-3">
         <input type="text" id='verify' class="input-text size-L" name="code" placeholder="这里输入验证码" style="width:150px;">
             <img class="pull-right" src="<?php echo captcha_src(); ?>" width="50%" onclick="this.src='<?php echo captcha_src(); ?>' + '?' + Math.random()">
      </div>
      <div class="row cl">
      </div>
      <div class="row cl">
        <div class="formControls col-xs-8 col-xs-offset-3">
          <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin v3.1</div>
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
</body>
</html>