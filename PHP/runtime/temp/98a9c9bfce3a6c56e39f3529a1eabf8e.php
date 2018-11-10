<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\pagemodule\add.html";i:1541056904;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1541574066;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1541387770;}*/ ?>
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
    <script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.config.js" ></script>
    <script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.all.js" ></script>
    <script type="text/javascript" src="/static/admin/lib/valid/js/Validform_v5.3.2_min.js"></script>

    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
</head>
﻿<body>
<article class="page-container">
	 <form action=""  class="form form-horizontal" id="form-admin-add" method="post">

		<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>模块名称：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="" id="module_name" name="module_name">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>控制器：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="" id="auth_c" name="auth_c">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>操作方法：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="" id="auth_a" name="auth_a">
		</div>
	</div>
	 <div class="row cl">
		 <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>缩略图上传：</label>
		 <div class="formControls col-xs-8 col-sm-9">

			 <!--<input type="file" class="input-text" placeholder="" name="thumb" id="thumb">-->

			 <div style="border: 1px solid #ddd;width: 200px;height: 150px;margin: 10px 0px;">
				 <div  style="width: 190px;height: 140px;margin:5px 0 0 5px;background:url('/static/admin/static/h-ui.admin/images/noimage.jpg') no-repeat ;background-size:190px 140px;">
					 <img src="" id="imgId"  video-time="" style="width: 190px;height: 140px;" alt="" />
				 </div>

			 </div>
			 <div class="uploader-thum-container">
				 <div class="fileList" class="uploader-list"></div>
				 <span class="btn-upload form-group">
					<a href="javascript:;" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>

					<input type="file"  name="thumb" id="img" class="input-file" >
				</span>
			 </div>

		 </div>
	 </div>

	 <div class="row cl">
		 <label class="form-label col-xs-4 col-sm-2">上传说明：</label>
		 <div class="formControls col-xs-8 col-sm-9" style="margin-top: 3px;color: red">缩略图大小限制100K，超过该尺寸可能导致上传失败！</div>

	 </div>

	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
			 <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;提&nbsp;&nbsp;&nbsp;&nbsp;交&nbsp;">
		</div>
	</div>
	</form>
</article>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
$(function(){
	$(".permission-list dt input:checkbox").click(function(){
		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
	});
	$(".permission-list2 dd input:checkbox").click(function(){
		var l =$(this).parent().parent().find("input:checked").length;
		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
		if($(this).prop("checked")){
			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
		}
		else{
			if(l==0){
				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
			}
			if(l2==0){
				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
			}
		}
	});

	$("#form-admin-role-add").validate({
		rules:{
			roleName:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.layer.close(index);
		}
	});
});






	//预览缩略图
	var imgFilesId = document.getElementById('img');//获取缩略图id
	var imgId = document.getElementById('imgId');//获取缩略图id

	var selectImgFile = function () {
		imgId.src = getFileURL(this.files[0]);//把当前的 files[0] 传进去

	}

	imgFilesId.addEventListener('change', selectImgFile);

	function getFileURL(file) {
		var getUrl = null;
		if(!file){
			return '';
		}

		if (window.createObjectURL != undefined) { // basic
			getUrl = window.createObjectURL(file);
		} else if (window.URL != undefined) { // mozilla(firefox)
			getUrl = window.URL.createObjectURL(file);
		} else if (window.webkitURL != undefined) { // webkit or chrome
			getUrl = window.webkitURL.createObjectURL(file);
		}
		return getUrl;
	}


/*有图片文件的ajax提交*/
$("#form-admin-add").submit(function(){
    //表单序列化
    //var data = $("form").serialize();
    //aja提交图片文件
    var formData = new FormData($('#form-admin-add')[0]);
    $.ajax({
        type:"post",
        url: "<?php echo Url('Pagemodule/add'); ?>",
        data:formData,
        dataType:'json',
        processData:false,
        contentType:false,
        cache: false,
        async:true,
        success:function(data){

            if(data.code==0){
                layer.msg(data.msg, {icon: 6,time:1000});
            }
            if(data.code == 1){
                layer.msg(data.msg,{icon:1,time:1000});
                setTimeout(function () {
                    window.location.href=('<?php echo Url("Pagemodule/index"); ?>');
                } ,1000);
            }
        }

    })
    return false;
});




</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script><!--/_footer 作为公共模版分离出去-->