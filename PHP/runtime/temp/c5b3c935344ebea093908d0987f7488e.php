<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\classChapter\add.html";i:1541066763;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1540622524;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1540368457;}*/ ?>
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
<link href="/static/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />

<body>
<div class="page-container">
	<form class="form form-horizontal"  id="form-article-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>视频名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入视频名称" id="name" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>所属课程：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="class_id" id="class_id" class="select">
					<option value="">请选择课程</option>
					<?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $v['id']; ?>"  ><?php echo $v['name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>章节：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="本视频属于课程第几章节，请输入数字" id="episode" name="episode">
			</div>
		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>缩略图上传：</label>
			<div class="formControls col-xs-8 col-sm-9">

				<div style="border: 1px solid #ddd;width: 200px;height: 150px;margin: 10px 0px;">
					<div  style="width: 190px;height: 140px;margin:5px 0 0 5px;background:url('/static/admin/static/h-ui.admin/images/noimage.jpg') no-repeat ;background-size:190px 140px;">
						<img src="" id="imgId" video-time="" style="width: 190px;height: 140px;" alt="" />
					</div>

				</div>
				<div class="uploader-thum-container">
					<div class="fileList" class="uploader-list"></div>
					<span class="btn-upload form-group">
					    <a href="javascript:;" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
						<!--<input classCourse="input-text upload-url radius" type="text" name="" id="uploadfile-2" readonly>-->
						<input type="file" multiple name="thumb" id="img" class="input-file" >
					</span>
				</div>

			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>视频地址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入视频地址" id="path" name="path">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>视频时长：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="请输入视频时长，单位为秒" id="vtime" name="vtime">
			</div>
		</div>

		<!--<div classCourse="row cl">-->
			<!--<label classCourse="form-label col-xs-4 col-sm-2"><span classCourse="c-red">*</span>视频上传：</label>-->
			<!--<div classCourse="formControls col-xs-8 col-sm-9">-->

				<!--<div style="border: 1px solid #ddd;width: 400px;height: 300px;margin: 10px 0px;">-->
					<!--<div  style="width: 380px;height: 280px;margin:10px 0 0 10px;background:url('__PUBLIC_ADMIN__/static/h-ui.admin/images/noimage.jpg') no-repeat ;background-size:380px 280px;  ">-->
						<!--<video src="" id="videoId" controls="" style="width: 380px;height: 280px;"></video>-->
					<!--</div>-->

				<!--</div>-->
				<!--<div classCourse="uploader-thum-container">-->
					<!--<div classCourse="fileList" classCourse="uploader-list"></div>-->
					<!--<span classCourse="btn-upload form-group">-->
					    <!--<a href="javascript:;" classCourse="btn btn-primary radius"><i classCourse="Hui-iconfont">&#xe642;</i> 浏览文件</a>-->
						<!--&lt;!&ndash;<input classCourse="input-text upload-url radius" type="text" name="" id="uploadfile-1" readonly>&ndash;&gt;-->
						<!--<input type="file" multiple name="video" id="video" classCourse="input-file">-->
						<!--<input type="hidden" name="vtime" value="" id="vtime">-->
					<!--</span>-->
				<!--</div>-->

			<!--</div>-->
		<!--</div>-->


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">上传说明：</label>
			<div class="formControls col-xs-8 col-sm-9" style="margin-top: 3px;color: red">缩略图大小限制100K，超过该尺寸可能导致上传失败！</div>

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



    $('.skin-minimal input').iCheck({
        checkboxClass: 'icheckbox-blue',
        radioClass: 'iradio-blue',
        increaseArea: '20%'
    });

	//表单提交
    $("#form-article-add").validate({
        rules:{
            name:{
                required:true,
            },
            class_id:{
                required:true,
            },
            path:{
                required:true,
            },
            vtime:{
                required:true,
			},
            episode:{
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
                    console.log(errorThrown);
                    layer.msg('error!',{icon:1,time:1000});
                }
            });


        }
    });



//    //获取视频时长
//    var videoFilesId = document.getElementById('video');//获取视频id
//    var videoId = document.getElementById('videoId');

    //预览缩略图
    var imgFilesId = document.getElementById('img');//获取缩略图id
    var imgId = document.getElementById('imgId');//获取缩略图id


//    var selectFile = function(){
//		videoId.src = getFileURL(this.files[0]);//把当前的 files[0] 传进去
//
//        setTimeout(function(){
//			var time = videoId.duration;
//            time = Math.floor(time);
//			$('#vtime').val(time);
//		},1000)
//
//    }

    var selectImgFile = function () {
        imgId.src = getFileURL(this.files[0]);//把当前的 files[0] 传进去

    }

//    videoFilesId.addEventListener('change', selectFile);
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


})


</script>
</body>
</html>
<!--_footer 作为公共模版分离出去-->
<!--<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>-->
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->