<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\admin\admin-edit.html";i:1541140490;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1540622524;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1540368457;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>71云党建</title>
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
    <script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.config.js" ></script>
    <script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.all.js" ></script>
    <script type="text/javascript" src="/static/admin/lib/valid/js/Validform_v5.3.2_min.js"></script>

    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" action="" id="form-admin-add" method="post">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>后台管理员账号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input style="width: 200px; margin-bottom: 20px;" type="text" class="input-text" value="<?php echo $res['admin_username']; ?>" placeholder="" id="adminName" name="admin_username">
			</div>

		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>输入原密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input style="width: 200px; margin-bottom: 20px; float: left;" type="password" class="input-text" autocomplete="off" value="" placeholder="密码" id="password" name="admin_password">
				<span style="float: left;" class="user_err"></span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>输入新密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input style="width: 200px; margin-bottom: 20px;" type="password" class="input-text" autocomplete="off"  placeholder="输入新密码" id="password1" name="admin_password1">
			</div>

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>确认新密码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input style="width: 200px; margin-bottom: 20px;" type="password" class="input-text" autocomplete="off"  placeholder="确认新密码" id="password2" name="admin_password2">
			</div>
			<span class="pass_err"></span>
		</div>

	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery-1.11.3.min.js" ></script>
<script type="text/javascript">
    /*ajax提交*/
    $("#form-admin-add").submit(function(){

        /**
         *ajax开始
         */
            //表单序列化，
        var data = $("form").serialize();
        $.ajax({
            type:"post",
            url: "<?php echo Url('Admin/update',array('id'=>input('id'))); ?>",
            data:data,
            dataType:'json',
            success:function(data){
                if(data.code==0){
                    layer.msg(data.msg, {icon: 6,time:1000});// layer弹窗插件
                }
                if(data.code == 1){
                    layer.msg(data.msg,{icon:1,time:1000});
                    setTimeout(function () {
                        window.location.href=('<?php echo Url("Admin/adminindex"); ?>');
                    } ,1000);
                }
            }

        })
        return false;
    });
    /**
     * ajax结束
     *
     * */


</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
<!--_footer 作为公共模版分离出去-->
<!--<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>-->
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->