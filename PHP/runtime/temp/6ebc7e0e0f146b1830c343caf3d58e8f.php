<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:86:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/branchadmin\view\index\index.html";i:1536135884;s:71:"D:\PHPTutorial\WWW\71cloud\PHP\application\branchadmin\view\layout.html";i:1541399919;s:78:"D:\PHPTutorial\WWW\71cloud\PHP\application\branchadmin\view\public\header.html";i:1541574067;s:78:"D:\PHPTutorial\WWW\71cloud\PHP\application\branchadmin\view\public\footer.html";i:1541399919;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>七一云党建</title>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/valid/css/style.css"/>
<script  src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script type="text/javascript" src="/static/admin/lib/jquery-1.11.3.min.js" ></script>

<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
    <title>七一云党建企业后台</title>
<meta name="keywords" content="七一云党建企业后台">
<meta name="description" content="七一云党建企业后台">
</head>
<body>
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="<?php echo url('index/index'); ?>">七一云党建企业后台</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml"></a>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav class="nav navbar-nav">
        </nav>
        <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
            <ul class="cl">
                <li>超级管理员</li>
                <li class="dropDown dropDown_hover">
                    <a href="#" class="dropDown_A"><?php echo \think\Request::instance()->session('branchadmin_info.bradmin_username'); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
                    <ul class="dropDown-menu menu radius box-shadow">
                       <!--  <li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li> -->
                        <li><a href="http://local.demo2.com/branchadmin/login/login.html">切换账户</a></li>
                        <li><a href="<?php echo url('branchadmin/login/logout'); ?>">退出</a></li>

                </ul>
            </li>
                <li id="Hui-msg"> <a href="<?php echo url('branchadmin/branch_message/receiveindex'); ?>" title="消息"><span class="badge badge-danger"><?php echo $unreadMessage; ?></span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
            </ul>
        </nav>
    </div>
</div>
</header>
<aside class="Hui-aside">
    <div class="menu_dropdown bk_2">
     <?php foreach($top_nav as $k=>$top_v): ?>
    <dl id="menu-member<?php echo $k; ?>">
            <dt><i class="Hui-iconfont ">&#xe60d;</i><?php echo $top_v['auth_name']; ?><i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <?php foreach($second_nav as $second_v): if(($second_v['pid'] == $top_v['id'])): ?>
                    <li><a data-href="<?php echo url($second_v['auth_c'] . '/' . $second_v['auth_a']); ?>" data-title="<?php echo $second_v['auth_name']; ?>" ><?php echo $second_v['auth_name']; ?></a></li>
                    <?php endif; endforeach; ?>
            </ul>
        </dd>
    </dl>
    <?php endforeach; ?>
</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
 ﻿<section class="Hui-article-box">
    <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
        <div class="Hui-tabNav-wp">
            <ul id="min_title_list" class="acrossTab cl">
                <li class="active">
                    <span title="我的桌面" data-href="<?php echo url('branchadmin/Index/welcome'); ?>">我的桌面</span>
                    <em></em></li>
        </ul>
    </div>
        <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
    <div id="iframe_box" class="Hui-article">
        <div class="show_iframe">
            <div style="display:none" class="loading"></div>
            <iframe scrolling="yes" frameborder="0" src="welcome.html"></iframe>
    </div>
</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
    <ul>
        <li id="closethis">关闭当前 </li>
        <li id="closeall">关闭全部 </li>
</ul>
</div>
<!--_footer 作为公共模版分离出去-->

<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
$(function(){
    $("#min_title_list li").contextMenu('Huiadminmenu', {
        bindings: {
            'closethis': function(t) {
                console.log(t);
                if(t.find("i")){
                    t.find("i").trigger("click");
                }
            },
            'closeall': function(t) {
                alert('Trigger was '+t.id+'\nAction was Email');
            },
        }
    });
});
/*个人信息*/
function myselfinfo(){
    layer.open({
        type: 1,
        area: ['300px','200px'],
        fix: false, //不固定
        maxmin: true,
        shade:0.4,
        title: '查看信息',
        content: '<div>管理员信息</div>'
    });
}

/*资讯-添加*/
function article_add(title,url){
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
    layer_show(title,url,w,h);
}


</script>
</body>
</html>