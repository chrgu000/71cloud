<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:95:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\company\company-admin-edit.html";i:1542785271;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1541574066;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1541387770;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/static/admin/lib/valid/css/style.css"/>
<script type="text/javascript" src="/static/admin/lib/valid/js/Validform_v5.3.2_min.js"></script>
<body>
<article class="page-container">
	<form class="demoform form form-horizontal" id="form-admin-add" method="post" enctype="multipart/form-data">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>公司名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $res['company_name']; ?>" placeholder="" id="company_name" name="company_name">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>logo上传：</label>
			<div class="formControls col-xs-8 col-sm-9">

				<!--<input type="file" class="input-text" placeholder="" name="thumb" id="thumb">-->

				<div style="border: 1px solid #ddd;width: 200px;height: 150px;margin: 10px 0px;">
					<div  style="width: 190px;height: 140px;margin:5px 0 0 5px;background:url('/static/admin/static/h-ui.admin/images/noimage.jpg') no-repeat ;background-size:190px 140px;">
						<img src="<?php echo $res['logo']; ?>" id="imgId"  video-time="" style="width: 190px;height: 140px;" alt="" />
					</div>

				</div>
				<div class="uploader-thum-container">
					<div class="fileList" class="uploader-list"></div>
					<span class="btn-upload form-group">
					<a href="javascript:;" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>

					<input type="file"  name="logo" id="img" class="input-file" >
				</span>
				</div>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">上传说明：</label>
			<div class="formControls col-xs-8 col-sm-9" style="margin-top: 3px;color: red">logo尺寸大小限制200*150以内,超过该尺寸可能导致上传失败！</div>

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" datatype="e" sucmsg="" value="<?php echo $res['company_email']; ?>" errormsg="请输入正确邮箱格式" class="input-text" placeholder="@" name="company_email" id="company_email">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>公司地址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" datatype="*" value="<?php echo $res['address']; ?>" sucmsg="" errormsg="" placeholder="" name="address" id="address">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>公司手机号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text"  datatype="m" sucmsg="" value="<?php echo $res['phone']; ?>" errormsg="请输入正确手机号格式" placeholder="" name="phone" id="phone">
			</div>
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
<script type="text/javascript">

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




//Validform表单验证ajax提交
$(".demoform").Validform({
    tiptype:3,
    showAllError:false,
    callback:function(form){  //callback验证成功之后，并且点击submit按钮之后的效果

        var formData = new FormData($('#form-admin-add')[0]);
        $.ajax({
            type:"post",
            url: "<?php echo Url('Company/adminedit',array('id'=>input('id'))); ?>",
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
                        window.location.href=("<?php echo Url('Company/adminlist'); ?>");
                    } ,1000);
                }
            }

        })
        return false;
    }
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