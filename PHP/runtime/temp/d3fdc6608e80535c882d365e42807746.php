<<<<<<< HEAD
<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:89:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\company\company-list.html";i:1542350431;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1541574066;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1541387770;}*/ ?>
=======
<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:89:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\company\company-list.html";i:1541387769;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1541574066;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1541387770;}*/ ?>
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
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
﻿<title>管理员列表</title>
<body>
<nav class="breadcrumb"> <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form action="<?php echo Url('companylist'); ?>" method="get">
			<input type="text" class="input-text" value="<?php echo \think\Request::instance()->get('company_name'); ?>" style="width:250px" placeholder="输入管理员名称" id="" name="company_name">
			<button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<!--<a href="javascript:;" class="btn btn-danger radius">-->
				<!--<i class="Hui-iconfont">&#xe6e2;</i> 批量删除-->
			<!--</a>-->
			<a href="<?php echo Url('Company/companyadd'); ?>"  class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe600;</i> 添加公司
			</a>
		</span>
		<span class="r">共有数据：<?php echo $num; ?><strong></strong> 条</span>
	</div>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th scope="col" colspan="9">员工列表</th>
			</tr>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="40">ID</th>
				<th width="150">公司名称</th>
				<th width="90">邮箱</th>
				<th width="130">公司地址</th>
				<th width="100">公司电话</th>
				<th width="100">公司logo</th>
				<th width="100">创建时间</th>
				<th width="100">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($rows) || $rows instanceof \think\Collection || $rows instanceof \think\Paginator): if( count($rows)==0 ) : echo "" ;else: foreach($rows as $key=>$v): ?>
				<tr class="text-c">
					<td><input type="checkbox" value="1" name=""></td>
					<td class="status"><?php echo $v['id']; ?></td>
					<td><?php echo $v['company_name']; ?></td>
					<td><?php echo $v['company_email']; ?></td>
					<td><?php echo $v['address']; ?></td>
					<td><?php echo $v['phone']; ?></td>
					<td><img style="width: 100px;height: 50px;" src="<?php echo $v['logo']; ?>"></td>
					<td><?php echo date("Y-m-d,H:i:s",$v['ctime']); ?></td>

					<td>
						<a title="编辑" href="<?php echo Url('Company/companyedit',array('id'=>$v['id'])); ?>" class="ml-5" style="text-decoration:none">
							<i class="Hui-iconfont">&#xe6df;</i>
						</a>
<<<<<<< HEAD
						<!--<a title="删除" onclick="del(this,'<?php echo $v['id']; ?>')" class="ml-5" style="text-decoration:none">
							<i class="Hui-iconfont">&#xe6e2;</i>
						</a>-->
					</td>
				</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>

=======
						<a title="删除" onclick="del(this,'<?php echo $v['id']; ?>')" class="ml-5" style="text-decoration:none">
							<i class="Hui-iconfont">&#xe6e2;</i>
						</a>
					</td>
				</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<!--<tr class="text-c">
				<td><input type="checkbox" value="2" name=""></td>
				<td>2</td>
				<td>zhangsan</td>
				<td>13000000000</td>
				&lt;!&ndash;<td>admin@mail.com</td>&ndash;&gt;
				<td>栏目编辑</td>
				<td>2014-6-11 11:11:42</td>
				<td class="td-status"><span class="label radius">已停用</span></td>
				<td class="td-manage"><a style="text-decoration:none" onClick="admin_start(this,'10001')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe615;</i></a> <a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','company-add.html','2','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a title="删除" href="javascript:;" onclick="admin_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>-->
>>>>>>> 785d9aef838ee57f91184b4930cfeff4e8641118
		</tbody>
	</table>
</div>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*
	参数解释：
	title	标题
	url		请求的url
	id		需要操作的数据id
	w		弹出层宽度（缺省调默认值）
	h		弹出层高度（缺省调默认值）
*/
/*管理员-增加*/
function admin_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*管理员-删除*/
function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){

		$.ajax({
			type: 'POST',
			url: "<?php echo Url('admin/admindel'); ?>",
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}

/*管理员-编辑*/
function admin_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		$.ajax({
					type:"post",
					url:"<?php echo Url('admin/statu'); ?>",
					data:{id:id,status:0,},
					dataType:'json',
					success:function(msg){
						if(msg.error==1){
							alert("停用失败")
						}else{
								$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,'+id+')" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
								$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
								$(obj).remove();
								layer.msg('已停用!',{icon: 5,time:1000});
						}
					}
				})

	});
}

/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……


		$.ajax({
            type:"post",
            url:"<?php echo Url('admin/status'); ?>",
            data:{id:id,status:1,},
            dataType:'json',
            success:function(msg){
                if(msg.error==1){
                    alert("启用失败")
                }else{
                    $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,'+id+')" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
                    $(obj).remove();
                    layer.msg('已启用!', {icon: 6,time:1000});
                }
            }
		})
		
		
	});
}

/*删除*/
function del(obj,id){
    layer.confirm('确认删除吗？',function(){
        $.ajax({
            'url' 		: "<?php echo Url('companydel'); ?>",
            'data'		: {id:id},
            'dataType'  : 'json',
            'type' 		: 'post',
            success		: function (msg) {
                if(msg.code == 1){
                    $(obj).parent().parent().remove();
                    layer.msg(msg.msg,{icon: 1,time:1000});
                }else{
                    layer.msg(msg.msg,{icon: 2,time:1000});
                }
            }

        })

    });
}


</script>
</body>
</html>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script><!--/_footer 作为公共模版分离出去-->