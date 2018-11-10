<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:96:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/branchadmin\view\branch_message\create.html";i:1539929730;}*/ ?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="/plugins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/plugins/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<title>添加产品分类</title>
</head>
<body>
<div class="page-container">
	<form action="<?php echo url('save'); ?>" method="post" class="form form-horizontal" id="form-user-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">收件人信息：</label>
			<div class="formControls col-xs-4 col-sm-4"> <span class="checkbox-box">
			 <?php foreach($children_branchs_info as $top_nav): foreach($top_nav['admin_info'] as $v): ?>
				  <?php echo $v['bradmin_username']; ?> <input type="checkbox" name="receive_id[]" value="<?php echo $v['id']; ?>"> &nbsp;&nbsp;&nbsp;
				所属党支部：<span><?php echo $top_nav['branchs_name']; ?></span>
				<br/>
				<?php endforeach; endforeach; ?>
				</span> </div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">
				<span class="c-red">*</span>
				消息主题：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<input type="text" class="input-text" value="" placeholder="" id="title" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">正文内容：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<textarea name="content"  id="editor" type="text/plain" style="width:900px;height:500px;"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-9 col-offset-2">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	$(function(){
		UE.getEditor('editor')
	})
</script>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
</body>
</html>

