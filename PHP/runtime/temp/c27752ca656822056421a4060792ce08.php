<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\message\add.html";i:1541143806;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1540622524;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1540368457;}*/ ?>
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
<title>添加管理员 - 管理员管理 - H-ui.admin v3.1</title>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.config.js" ></script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.all.js" ></script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/jquery-2.2.3.min.js" ></script>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">

<body>
<article class="page-container">
	<form class="form form-horizontal" method="post" id="form-admin-add">

	<!--<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">收件人：</label>
		<div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
			<select class="select" name="recipient_id" size="1">
				<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$v): ?>
					<option value="<?php echo $v['id']; ?>"><?php echo $v['bradmin_username']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
			</span> </div>
	</div>-->
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-2">收件人：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <dl class="permission-list">
                <dd>
                    <dl class="cl permission-list2">
                        <input type="checkbox" class="input_all" /><b>全选</b><br/>
                        <p>
                            <dd>
                                <p>
                                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$v): ?>
                                        <label class="per">
                                            <input type="checkbox" class="module" value="<?php echo $v['id']; ?>" name="receive_id[]" id="user-Character-0-0-0">
                                            <?php echo $v['company_name']; ?></br>
                                        </label>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </p>
                            </dd>
                        </p>
                    </dl>
                </dd>
            </dl>

        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>消息标题：</label>
        <div class="formControls col-xs-8 col-sm-9">
            <input type="text" class="input-text" placeholder="" name="title" id="title">
        </div>
    </div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">发送内容：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<!-- 加载编辑器的容器 -->
            <script id="container" name="content" style="width:100%;height:400px;" type="text/plain"></script>
		</div>

	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;发送&nbsp;&nbsp;">
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
/*$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
			adminName:{
				required:true,
				minlength:4,
				maxlength:16
			},
			password:{
				required:true,
			},
			password2:{
				required:true,
				equalTo: "#password"
			},
			sex:{
				required:true,
			},
			phone:{
				required:true,
				isPhone:true,
			},
			email:{
				required:true,
				email:true,
			},
			adminRole:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
				type: 'post',
				url: "xxxxxxx" ,
				success: function(data){
					layer.msg('添加成功!',{icon:1,time:1000});
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('error!',{icon:1,time:1000});
				}
			});
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});*/

/*ajax提交*/
$("#form-admin-add").submit(function(){
    var data = $("form").serialize();
    $.ajax({
        type:"post",
        url: "<?php echo Url('Message/add'); ?>",
        data:data,
        dataType:'json',
        success:function(data){
            if(data.code==0){
                layer.msg(data.msg, {icon: 6,time:1000});
            }
            if(data.code == 1){
                layer.msg(data.msg,{icon:1,time:1000});
                setTimeout(function () {
                    window.location.href=('<?php echo Url("Message/index"); ?>');
                } ,1000);
            }
        }

    })
    return false;
});
 /*ajax结束*/


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


//点击模块事件
$(".module").click(function(){


    var status = $(this).is(":checked");
    if(status){
        $(this).siblings(".action").prop("checked",true);
    }else{
        $(this).siblings(".action").prop("checked",false);
    }
    changeAll();
})

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
//百度富文本
var ue = UE.getEditor('container');
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