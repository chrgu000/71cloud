<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/branchadmin\view\exampaper\create.html";i:1540439357;}*/ ?>

<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
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
<!--[if IE 6]>
<script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>新建网站角色 - 管理员管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	 <form action="<?php echo url('save'); ?>"  class="form form-horizontal" id="form-admin-add" enctype="multipart/form-data" method="post">
		<div class="row cl">
			<label class="form-label col-xs-5 col-sm-5">请选择关卡(试卷)所属活动：</label>
			<select name="exam_activity_id" id="">
				<?php foreach($data as $v): ?>
					<option value="<?php echo $v['id']; ?>"><?php echo $v['exam_activity_name']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		 <div class="row cl">
			 <label class="form-label col-xs-5 col-sm-5">请选择题目数量：</label>
			 <select name="question_num" id="">
				 <option value="10">10道题</option>
				 <option value="10">20道题</option>
				 <option value="10">30道题</option>
				 <option value="10">40道题</option>
				 <option value="10">50道题</option>
				 <option value="10">60道题</option>
			 </select>
		 </div>
		 <div class="row c2">
			 <label class="form-label col-xs-5 col-sm-5">请输入试卷题目：</label>
			 <input type="text" name="exampaper_name" value="">
		 </div>
		 <div class="row c3">
			 <label class="form-label col-xs-5 col-sm-5">考试时长（单位：小时）：</label>
			 <input type="text" name="long_time" value="">
		 </div>
		 <div class="row c4">
			 <label class="form-label col-xs-5 col-sm-5">请输入试卷满分值：</label>
			 <input type="text" name="score" value="">
		 </div>
		 <div class="row c4">
			 <label class="form-label col-xs-5 col-sm-5">请输入试卷及格分数：</label>
			 <input type="text" name="pass_score" value="">
		 </div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-5 col-sm-offset-5">
			 <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;提&nbsp;&nbsp;&nbsp;&nbsp;交&nbsp;">
		</div>
	</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

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

	// 给select单选框绑定onchange事件
	// $('#branchs_name').change(function(){
	// 	var branchs_id = $(this).val();
	// 	$('#cate_two').html('<option value="" selected="selected">请选择行政职称名称</option>');
	// 	$.ajax({
	// 		url:'<?php echo url("getjobinfo"); ?>',
	// 		type:'post',
	// 		data:{'id':branchs_id},
	// 		dataType:'json',
	// 		success:function(res){
	// 			if (res.msg == 'error') {
	// 				alert('此支部未添加行政职称，请尽快添加');
	// 				return ;
	// 			}
	// 			var data = res.data;
	// 			var str = '<option value="" selected="selected">请选择行政职称名称</option>';
	// 			$.each(data,function(k,v){
	// 				str += '<option value="' + v.id +  '">'+ v.job_name +'</option>'
	// 			})
	// 			$('#cate_two').html(str);
	// 		}
	// 	})
	// })



});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>