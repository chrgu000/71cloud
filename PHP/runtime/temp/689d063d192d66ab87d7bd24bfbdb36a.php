<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\company\update.html";i:1541054524;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1541574066;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1541387770;}*/ ?>
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
	 <form action=""  class="form form-horizontal" id="form-admin-add" >

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>公司名称：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" readonly="readonly"  id="<?php echo $company_id['id']; ?>" value="<?php echo $company_id['company_name']; ?>" placeholder="" >
		</div>
		<input type="hidden" class="company" value="<?php echo $company_id['id']; ?>" name="id">
	</div>

	 <div class="row cl" id="company">
		 <label class="form-label col-xs-4 col-sm-3">菜单权限：</label>
		 <div class="formControls col-xs-8 col-sm-9">
			 <dl class="permission-list">
				 <dd>
					 <dl class="cl permission-list2">
						 <input type="checkbox" class="input_all" /><b>全选</b><br/>
						 <p>
							 <dd>
								 <?php if(is_array($dingji) || $dingji instanceof \think\Collection || $dingji instanceof \think\Paginator): if( count($dingji)==0 ) : echo "" ;else: foreach($dingji as $key=>$v): ?>

						 <p>
							 <label class="">

								 <?php if(in_array(($v['id']), is_array($auth_id['auth_id'])?$auth_id['auth_id']:explode(',',$auth_id['auth_id']))): ?>
								 	<input type="checkbox" class="action" checked="checked" value="<?php echo $v['id']; ?>" name="auth_id[]" id="user-Character-1-0-0">
								 <?php else: ?>
								 	<input type="checkbox" class="action" value="<?php echo $v['id']; ?>" name="auth_id[]" id="user-Character-1-0-0">
								 <?php endif; ?>
								 <?php echo $v['auth_name']; ?>
							 </label>
						 </p>

						 		<?php endforeach; endif; else: echo "" ;endif; ?>
						 </dd>
						 </p>
					 </dl>

				 </dd>
			 </dl>

		 </div>
	 </div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
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
/*$(function(){
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
});*/

//点击全选事件
$(".input_all").click(function(){

    //第一步 获取当前选择的状态 （勾选/不勾选）
    //is() 遍历方法 匹配所有元素 返回值 true false
    var status = $(this).is(":checked");
    if(status){
        $(".module,.action").prop("checked","checked");
        //$(".action").attr("checked","checked");
    }else{
        $(".module,.action").prop("checked","");
        //$(".action").attr("checked","");
    }
})


/*//点击模块事件
$(".pagemodule").click(function(){


    var status = $(this).is(":checked");
    if(status){
        $(this).siblings(".action").prop("checked",true);
    }else{
        $(this).siblings(".action").prop("checked",false);
    }
    changeAll();
})*/

//全选状态随之改变
function changeAll(){
    var length = $(".module,.action").length;//获取所有的模块和操作的总个数
    var change_lenth = $(".module:checked,.action:checked").length; //模块和操作被勾选的总数
    if(length == change_lenth){
        $(".input_all").prop("checked",true);
    }else{
        $(".input_all").prop("checked",false);
    }
}

//点击操作事件
$(".action").click(function() {
    var status = $(this).is(":checked");
    if (status) {
        $(this).siblings(".module").prop("checked", true);
    } else {
        var length = $(this).siblings(".action:checked").length;//获取当前操作（区域）中所有被勾选操作的总数
        if (length == 0) {
            $(this).siblings(".module").prop("checked", "");
        }

    }
    changeAll();

})

	//select下拉框点击事件
	/*$("#input-select").click(function () {
		var test = $("#input-select").val();

		if(test==0){
			document.getElementById("company").style.display="";//显示
		}else{
			document.getElementById("company").style.display="none";//隐藏
		}
	})*/
	/**
	 * ajax提交
	 *
	 * */

	$("#form-admin-add").submit(function(){
		//表单序列化
		var data = $("form").serialize();

		//js获取多选框的id值装换成数组
		/*var inputList =$('#form-admin-add').find('input.action[type="checkbox"]');
		var data=[]
		for(var i in inputList){
		    if(($(inputList[i])).is(":checked")){
		        data.push($(inputList[i]).val())
			}
		}*/

		$.ajax({
			type:"post",
			url: "<?php echo Url('Company/cedit'); ?>",
			data:data,
			dataType:'json',
			success:function(data){
				if(data.code==0){
					layer.msg(data.msg, {icon: 6,time:1000});
				}
				if(data.code == 1){
					layer.msg(data.msg,{icon:1,time:1000});
					setTimeout(function () {
						window.location.href=('<?php echo Url("Company/adminlist"); ?>');
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