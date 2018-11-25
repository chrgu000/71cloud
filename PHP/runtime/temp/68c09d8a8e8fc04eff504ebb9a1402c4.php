<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/branchadmin\view\examactivity\edit.html";i:1542244172;}*/ ?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<link rel="Bookmark" href="/favicon.ico">
	<link rel="Shortcut Icon" href="/favicon.ico" />
	<!--[if lt IE 9]>
	<script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
	<script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
	<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
	<link href="/static/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
	<script  src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
	<!--[if IE 6]>
	<script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>DD_belatedPNG.fix('*');</script>
	<![endif]-->

</head>


<body>
<div class="page-container">
	<form class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>活动名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $data['exam_activity_name']; ?>" placeholder="请输入活动名称" id="exam_activity_name" name="exam_activity_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>图片上传：</label>
			<div class="formControls col-xs-8 col-sm-9">

				<!--<input type="file" class="input-text" placeholder="" name="thumb" id="thumb">-->

				<div style="border: 1px solid #ddd;width: 200px;height: 150px;margin: 10px 0px;">
					<div  style="width: 190px;height: 140px;margin:5px 0 0 5px;background:url('/static/admin/static/h-ui.admin/images/noimage.jpg') no-repeat ;background-size:190px 140px;">
						<img src="<?php echo $data['img_src']; ?>" id="imgId"  video-time="" style="width: 190px;height: 140px;" alt="" />
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
			<div class="formControls col-xs-8 col-sm-9" style="margin-top: 3px;color: red">图片大小限制200K,超过该尺寸可能导致上传失败！</div>

		</div>

		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 提交</button>

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
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
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

/**
*有图片文件的ajax提交开始
*
*/
$("#form-article-add").submit(function(){
    //表单序列化
    //var data = $("form").serialize();
    //aja提交图片文件
    var formData = new FormData($('#form-article-add')[0]);
    $.ajax({
        type:"post",
        url: "<?php echo Url('Examactivity/edit',array('id'=>input('id'))); ?>",
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
                    window.location.href=('<?php echo Url("Examactivity/index"); ?>');
                } ,1000);
            }
        }

    })
    return false;
});
/**
 * 有图片文件的ajax提交结束
 */

//百度富文本
var ue = UE.getEditor('container');

</script>
</body>
</html>