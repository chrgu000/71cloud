<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\classCourse\edit.html";i:1540862516;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1540622524;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1540368457;}*/ ?>
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
<link href="/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
<body>
<div class="page-container">
	<form class="form form-horizontal"  id="form-article-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>课程名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $data['name']; ?>" placeholder="请输入课程名称" id="name" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>课程分类：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box">
				<select name="cate" id="cate" class="select">
					<option value="">请选择分类</option>
					<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['pid'] == '0'): ?>
							<option value="<?php echo $v['id']; ?>"  disabled><?php echo str_repeat( '----',$v['level']); ?><?php echo $v['name']; ?></option>
							<?php else: ?>
							<option value="<?php echo $v['id']; ?>"   <?php if($data['cate_id'] == $v['id']): ?>selected<?php endif; ?> ><?php echo str_repeat( '----',$v['level']); ?><?php echo $v['name']; ?></option>
						<?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span>
			</div>
		</div>

		<!--<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>缩略图：</label>
			<div class="formControls col-xs-8 col-sm-9">
			<div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
				<div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
					<?php if(empty($data['thumb']) || (($data['thumb'] instanceof \think\Collection || $data['thumb'] instanceof \think\Paginator ) && $data['thumb']->isEmpty())): ?>
						<img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="/static/admin/static/h-ui.admin/images/noimage.png" alt="" />
						<?php else: ?>
						<img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="/<?php echo $data['thumb']; ?>" alt="" />
					<?php endif; ?>


				</div>
				<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
				<div>
					<span class="btn btn-primary btn-file radius">
						<span class="fileinput-new ">选择文件</span>
						<span class="fileinput-exists">换一张</span>
						<input type="file" name="thumb" id="picID" accept="image/gif,image/jpeg,image/x-png">
					</span>
					<a href="javascript:;" class="btn btn-warning fileinput-exists radius" data-dismiss="fileinput">移除</a>
				</div>
			</div></div>
		</div>-->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>缩略图上传：</label>
			<div class="formControls col-xs-8 col-sm-9">

				<div style="border: 1px solid #ddd;width: 200px;height: 150px;margin: 10px 0px;">
					<div  style="width: 190px;height: 140px;margin:5px 0 0 5px;background:url('/static/admin/static/h-ui.admin/images/noimage.jpg') no-repeat ;background-size:190px 140px;">
						<img src="<?php echo $data['thumb']; ?>" id="imgId" style="width: 190px;height: 140px;" alt="" />
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
			<label class="form-label col-xs-4 col-sm-2">上传说明：</label>
			<div class="formControls col-xs-8 col-sm-9" style="margin-top: 3px;color: red">缩略图大小限制100K，超过该尺寸可能导致上传失败！</div>

		</div>


		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>课程介绍：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="editor"  type="text/plain" style="width:100%;height:400px;"><?php echo $data['introduce']; ?></script>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 提交</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>

		<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
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

/*$(function () {



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
            cate:{
                required:true,
            }

        },
        onkeyup:false,
        focusCleanup:true,
        success:"valid",
        submitHandler:function(form){

            var index = parent.layer.getFrameIndex(window.name);
            $(form).ajaxSubmit({
                type: 'post',
                url: "<?php echo Url('edit'); ?>" ,
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

            //parent.$('.btn-refresh').click();

        }
    });



})*/

/**
 *预览缩略图开始
 **/
	var imgFilesId = document.getElementById('img');//获取缩略图id
	var imgId = document.getElementById('imgId');//获取缩略图id


	var selectImgFile = function () {
		var src = getFileURL(this.files[0]);//把当前的 files[0] 传进去
		if(src){
			imgId.src = src;
		}else{
			imgId.src = '/<?php echo $data['thumb']; ?>';
		}

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
 *预览缩略图结束
 **/

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
			url: "<?php echo Url('ClassCourse/edit'); ?>",
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

                        window.parent.location.reload();
                        parent.layer.close(index);
					} ,1000);
				}
			}

		})
		return false;
	});
/**
 * 有图片文件的ajax提交结束
 */


$(function(){
	var ue = UE.getEditor('editor');
});
</script>
</body>
</html>
<!--_footer 作为公共模版分离出去-->
<!--<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>-->
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->