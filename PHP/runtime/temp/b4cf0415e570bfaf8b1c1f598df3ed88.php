<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\photo\add.html";i:1540369062;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1540622524;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1540368457;}*/ ?>
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
<link rel="stylesheet" href="/static/admin/static/h-ui.admin/css/weui.css">
<link href="/static/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
	<style>
		.weui-cells_form ,.weui-uploader__input-box{
			display: inline-block;
		}
		.weui-uploader__input-box{
			float: none;
		}
	</style>
	<style>
		input{
			apperance:none;
			cursor: pointer;
		}
		.weui-uploader__file{
			display: inline-block;
			float: none;
			position: relative;
		}
		.weui-uploader__bd{
			overflow: visible;
		}
		.weui-uploader__file{
			position: relative;
		}
		.deletIcon{
			position:absolute;
			width: 20px;
			height: 20px;
			background: #f43530;
			right: 0;
			top: -10px;
			border-radius: 20px;
			z-index: 5;
		}
		.deletIcon::before {
			content: '';
			width: 10px;
			height: 4px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background: #fff;
		}
		.weui-uploader__input {
			position: absolute;
			z-index: 1;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			opacity: 0;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		}
		.weui-uploader__input-box:before, .weui-uploader__input-box:after {
			content: " ";
			position: absolute;
			top: 50%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			background-color: #D9D9D9;
		}
		.weui-uploader__input-box:after {
			width: 39.5px;
			height: 2px;
		}
		.weui-uploader__input-box:before {
			width: 2px;
			height: 39.5px;
		}

	</style>
</head>
<body>
<div class="page-container">
	<form class="form form-horizontal"  id="form-article-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>相册名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入相册名称" id="name" name="name">
			</div>
		</div>

		<div class="weui-gallery" id="gallery">
			<span class="weui-gallery__img" id="galleryImg"></span>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片：</label>
			<div class="formControls col-xs-8 col-sm-9 pic">
				<div class=" weui-cells_form ">
					<div class="weui-uploader">
						<div class="weui-uploader__bd">
							<ul class="weui-uploader__files" id="uploaderFiles">
							</ul>
						</div>
					</div>
				</div>

				<div class="weui-uploader__input-box">
					<span id="uploaderInputBtn" class="weui-uploader__input"  ></span>
				</div>

			</div>

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">上传说明：</label>
			<div class="formControls col-xs-8 col-sm-9" style="margin-top: 3px;color: red">图片大小限制200K，超过该尺寸可能导致上传失败！</div>

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>详细介绍：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="container" name="content" type="text/plain" style="width:100%;height:400px;"></script>
			</div>
		</div>


		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 提交</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

<!--请在下方写此页面业务相关的脚本-->

<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">

$(function () {


//动态添加input
    $('#uploaderInputBtn').on('click',function(){

        var newFileInput = "<input id='uploaderInput' class='weui-uploader__input' type='file' name='path[]' accept='*'  />";
        var tmpl = '<li class="weui-uploader__file"  style="background-image:url(#url#);"><span class="deletIcon"></span></li>',
            $uploaderFiles = $("#uploaderFiles");
        $(this).parent().append($(newFileInput));
        $("#uploaderInput").bind("change", function(e){
            //onFileUploaded(e);预览等操作
            var files =e.target.files
            var src, url = window.URL || window.webkitURL || window.mozURL ;
            for (var i = 0, len = files.length; i < len; ++i) {
                var file = files[i];
                if (url) {
                    src = url.createObjectURL(file);
                } else {
                    src = e.target.result;
                }

                $uploaderFiles.append($(tmpl.replace('#url#', src)));

            }
            $(this).removeAttr("id");
            $(this).css('zIndex','-1')
        });
        $("#uploaderInput").click();

    });


    //动态删除
    $('#uploaderFiles').on('click','.deletIcon',function(){

        var obj = $(this).parents('.weui-uploader__file')
        var index = obj.index();
        $('.weui-uploader__input-box').find('input').eq(index).remove();
        obj.remove()


    })


    //新增 删除相册
	$('.addPic').click(function () {
	    var obj = $(this).parent().parent();
	    var a = obj.clone();
	    a.children().last().html('<a href="javascript:;" class="btn btn-primary radius removePic"><i class="Hui-iconfont" >&#xe6a1;</i></a>');
        a.appendTo($('.pic'));

		$('.removePic').on('click',function () {
			$(this).parent().parent().remove();
		});

    });

})
	//表单提交
    /*$("#form-article-add").validate({
        rules:{
            name:{
                required:true,
            },


        },
        onkeyup:false,
        focusCleanup:true,
        success:"valid",
        submitHandler:function(form){

            var index = parent.layer.getFrameIndex(window.name);
            $(form).ajaxSubmit({
                type: 'post',
                url: "<?php echo Url('add'); ?>" ,
                success: function(data){
                    if(data.code == 0){
                        layer.msg(data.msg,{icon:2,time:1000});
                    }
                    if(data.code == 1){
                        layer.msg(data.msg,{icon:1,time:1000});
                        setTimeout(function () {
                            window.parent.location.reload();
                            parent.layer.close(index);
                        } ,2000);


                    }

                },
                error: function(XmlHttpRequest, textStatus, errorThrown){
                    console.log(textStatus);
                    layer.msg('error!',{icon:1,time:1000});
                }
            });


        }
    });*/

/*有图片文件的ajax提交*/
$("#form-article-add").submit(function(){
    //表单序列化
    //var data = $("form").serialize();
    //aja提交图片文件
    var formData = new FormData($('#form-article-add')[0]);
    $.ajax({
        type:"post",
        url: "<?php echo Url('Photo/add'); ?>",
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
                    window.location.href=('<?php echo Url("Photo/index"); ?>');
                } ,1000);
            }
        }

    })
    return false;
});




/**
 * 百度富文本
 */
var ue = UE.getEditor('container');


</script>
</body>
</html>
<!--_footer 作为公共模版分离出去-->
<!--<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>-->
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->