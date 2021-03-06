<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:101:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/branchadmin\view\content\ContentPhoto\index.html";i:1541574068;}*/ ?>
﻿<!DOCTYPE HTML>
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
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js"></script>
<script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 相册管理 <span class="c-gray en">&gt;</span> 相册列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form action="<?php echo Url('index'); ?>" method="get">
			<!--日期范围：
			<input type="text" onfocus="WdatePicker({ maxDate:'#F{(\'endTime\') }' })" value="<?php echo \think\Request::instance()->get('logmin'); ?>" id="logmin" name="logmin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({ maxDate:'#F{(\'datemin\')}' })" value="<?php echo \think\Request::instance()->get('logmax'); ?>" id="logmax" name="logmax" class="input-text Wdate" style="width:120px;">-->

			<input type="text" name="name" placeholder=" 相册名称" style="width:250px" value="<?php echo \think\Request::instance()->get('name'); ?>" class="input-text">

			<button name="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜相册</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a class="btn btn-primary radius" onclick="add('添加相册','<?php echo Url('add'); ?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加相册</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th>相册名称</th>
					<th width="200">发布时间</th>
					<th width="200">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($CompanyPhotoData) || $CompanyPhotoData instanceof \think\Collection || $CompanyPhotoData instanceof \think\Paginator): $i = 0; $__LIST__ = $CompanyPhotoData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
            
                    <?php if(in_array($vo['id'],$company)): ?>
                        <td><input type="checkbox" class="company" value="<?php echo $vo['id']; ?>" checked="checked" name=""></td>
                    <?php else: ?>
                        <td><input type="checkbox" class="company" value="<?php echo $vo['id']; ?>"  name=""></td>
                     <?php endif; ?>
					<td><?php echo $vo['id']; ?></td>
					<td class="text-l"><a class="maincolor" href="javascript:;" onClick="show('图库查看','<?php echo Url('show'); ?>','<?php echo $vo['id']; ?>','1')"><?php echo $vo['name']; ?></a></td>
					<td><?php echo date( 'Y-m-d H:i:s',$vo['ctime']); ?></td>
					<td class="td-manage">
						<a style="text-decoration:none" class="ml-5" onClick="edit('相册编辑','<?php echo Url('edit'); ?>','<?php echo $vo['id']; ?>')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
						<a style="text-decoration:none" class="ml-5" onClick="del(this,'<?php echo $vo['id']; ?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
					</td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					  <?php if(in_array($vo['id'],$admin)): ?>
                        <td><input type="checkbox" class="admin" value="<?php echo $vo['id']; ?>" checked="checked" name=""></td>
                    <?php else: ?>
                        <td><input type="checkbox" class="admin" value="<?php echo $vo['id']; ?>"  name=""></td>
                     <?php endif; ?>
					<td><?php echo $vo['id']; ?></td>
					<td class="text-l"><a class="maincolor" href="javascript:;" onClick="show('图库查看','<?php echo Url('show'); ?>','<?php echo $vo['id']; ?>')"><?php echo $vo['name']; ?></a></td>
					<td><?php echo date( 'Y-m-d H:i:s',$vo['ctime']); ?></td>
					<td></td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
        <input class="btn radius btn-warning sub_btn" type="button" value="确认修改所选">
	</div>
</div>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
    "aaSorting": [[ 1, "desc" ]],//默认第几个排序
    "bStateSave": true,//状态保存
    "aoColumnDefs": [
        //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
        {"orderable":false,"aTargets":[0,2,4]}// 制定列不参与排序
    ]
});

/*图片-添加*/
function add(title,url){
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}

/*图片-查看*/
function show(title,url,id,type = 0){
    var index = layer.open({
        type: 2,
        title: title,
        content: url+'?id='+id+'&type='+type
    });
    layer.full(index);
}

/*编辑*/
function edit(title,url,id){
    var index = layer.open({
        type: 2,
        title: title,
        content: url+'?id='+id
    });
    layer.full(index);
}


/*删除*/
function del(obj,id){
    layer.confirm('确认删除吗？',function(){
        $.ajax({
            'url' 		: "<?php echo Url('del'); ?>",
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


$(".sub_btn").click(function () {
    var company_arr=[]
    var admin_arr =[]
    for(var i=0; i<$('.company').length; i++){
        if($('.company').eq(i).is(':checked')){
            company_arr.push($('.company').eq(i).val())
        }
    }
    for(var i=0; i<$('.admin').length; i++){
        if($('.admin').eq(i).is(':checked')){
            admin_arr.push($('.admin').eq(i).val())
        }
    }
    $.ajax({
        'url':"<?php echo Url('wechatcontent/resources'); ?>",
        'data':{admin:admin_arr,company:company_arr,type:"photo"},//photo 相册内容字段
        'type':"post",
        success:function (msg) {
            if (msg.code == 1){
                layer.msg(msg.msg, {icon: 1, time: 1000});
            } else {
                layer.msg(msg.msg, {icon: 2, time: 1000});
            }
        }
    })

})

</script>
</body>
</html>