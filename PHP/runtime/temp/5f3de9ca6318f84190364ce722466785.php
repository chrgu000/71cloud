<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:108:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/branchadmin\view\content\ContentClassChapter\index.html";i:1541574067;}*/ ?>
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
<title>视频列表</title>
<!--<link rel="stylesheet" href="/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<body class="pos-r">

<div>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 视频管理 <span class="c-gray en">&gt;</span> 视频列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">

		<div class="text-c">
			<form action="<?php echo Url('index'); ?>" method="get">
				<!--日期范围：
				<input type="text" onfocus="WdatePicker({ maxDate:'#F{(\'endTime\') }' })" value="<?php echo \think\Request::instance()->get('logmin'); ?>" id="logmin" name="logmin" class="input-text Wdate" style="width:120px;">
				-
				<input type="text" onfocus="WdatePicker({ maxDate:'#F{(\'datemin\')}' })" value="<?php echo \think\Request::instance()->get('logmax'); ?>" id="logmax" name="logmax" class="input-text Wdate" style="width:120px;">-->

				<input type="text" name="name" id="" placeholder=" 视频名称" style="width:250px" value="<?php echo \think\Request::instance()->get('name'); ?>" class="input-text">
				<select name="class_id" id="" class="input-text" style="width:300px;padding-top: 0px">
					<option value="">请选择课程</option>
					<?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $v['id']; ?>" <?php if(\think\Request::instance()->get('class_id') == $v['id']): ?>selected<?php endif; ?> ><?php echo $v['name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
				</select>

				<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜视频</button>
			</form>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
			<!--<a class="btn btn-primary radius" onclick="add('添加视频','<?php echo Url('add'); ?>')"  href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加视频</a>-->
        </span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="40"><input name="" type="checkbox" value=""></th>
						<th width="40">ID</th>
						<th>名称</th>
						<th width="150">缩略图</th>
						<th width="200">所属课程</th>
						<th width="200">视频地址</th>
						<th width="100">时长</th>
						<th width="100">章节</th>
						<th width="150">发布时间</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<tr class="text-c va-m">
							<?php if(in_array($vo['id'],$admin)): ?>
					            <td><input type="checkbox" class="admin" value="<?php echo $vo['id']; ?>" checked="checked" name=""></td>
                            <?php else: ?>
					            <td><input type="checkbox" class="admin" value="<?php echo $vo['id']; ?>" name=""></td>
                             <?php endif; ?>
							<td><?php echo $vo['id']; ?></td>
							<td><?php echo $vo['name']; ?></td>
							<td><img height="60" width="100" class="product-thumb" src="<?php echo $vo['thumb']; ?>"></td>
							<td><?php echo $vo['class_name']; ?></td>
							<td><a href="<?php echo $vo['path']; ?>" target="_blank">点击查看</a></td>
							<td>
								<?php echo floor($vo["vtime"]/60);  ?>
                                分<?php if($vo["vtime"]%60 != 0){ ?><?php echo ($vo["vtime"]%60);  ?>秒<?php  }?>
							</td>
							<td><?php echo $vo['episode']; ?></td>
							<td><?php echo date( 'Y-m-d H:i:s',$vo['ctime']); ?></td>
                            <!--<td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="edit('视频编辑','<?php echo Url('edit'); ?>','<?php echo $vo['id']; ?>')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>-->
                            <!--<a style="text-decoration:none" class="ml-5" onclick="del(this,'<?php echo $vo['id']; ?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>-->
                            <td></td>
						</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
     
				</tbody>
			</table>
             <input class="btn radius btn-warning sub_btn" type="button" value="确认修改所选">
		</div>

	</div>
</div>


<!--请在下方写此页面业务相关的脚本-->
<!--<script type="text/javascript" src="/static/admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>-->
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">


$('.table-sort').dataTable({
    "aaSorting": [[1, "desc"]],//默认第几个排序
    "bStateSave": true,//状态保存
    "aoColumnDefs": [
        {"orderable": false, "aTargets": [0, 2, 3, 5, 9]}// 制定列不参与排序
    ]
});

/*添加*/
function add(title, url) {
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}

/*编辑*/
function edit(title, url, id) {
    var index = layer.open({
        type: 2,
        title: title,
        content: url + '?id=' + id
    });
    layer.full(index);
}


/*上架*/
function up(obj, id) {
    layer.confirm('确认上架吗？', function () {
        $.ajax({
            'url': "<?php echo Url('up'); ?>",
            'data': {id: id},
            'dataType': 'json',
            'type': 'post',
            success: function (msg) {
                if (msg.code == 1) {
                    $(obj).parent('td').html('<span class="btn  btn-danger radius size-MINI" onclick="down(this,{id})" >下架</span>');
                    layer.msg(msg.msg, {icon: 1, time: 1000});
                } else {
                    layer.msg(msg.msg, {icon: 2, time: 1000});
                }
            }

        })

    });
}

/*下架*/
function down(obj, id) {
    layer.confirm('确认下架吗？', function () {
        $.ajax({
            'url': "<?php echo Url('down'); ?>",
            'data': {id: id},
            'dataType': 'json',
            'type': 'post',
            success: function (msg) {
                if (msg.code == 1) {
                    $(obj).parents("td").html('<span class="btn  btn-success radius size-MINI" onclick="up(this,{id})">上架</span>');
                    layer.msg(msg.msg, {icon: 1, time: 1000});
                } else {
                    layer.msg(msg.msg, {icon: 2, time: 1000});
                }
            }

        })

    });
}

/*删除*/
function del(obj, id) {
    layer.confirm('确认删除吗？', function () {
        $.ajax({
            'url': "<?php echo Url('del'); ?>",
            'data': {id: id},
            'dataType': 'json',
            'type': 'post',
            success: function (msg) {
                if (msg.code == 1) {
                    $(obj).parent().parent().remove();
                    layer.msg(msg.msg, {icon: 1, time: 1000});
                } else {
                    layer.msg(msg.msg, {icon: 2, time: 1000});
                }
            }

        })

    });
}


/**
 * 企业选择自己公众号对应的资源
 */

$(".sub_btn").click(function () {
    var company_arr = []
    var admin_arr = []
    for (var i = 0; i < $('.company').length; i++) {
        if ($('.company').eq(i).is(':checked')) {
            company_arr.push($('.company').eq(i).val())
        }
    }
    for (var i = 0; i < $('.admin').length; i++) {
        if ($('.admin').eq(i).is(':checked')) {
            admin_arr.push($('.admin').eq(i).val())
        }
    }
    $.ajax({
        'url': "<?php echo Url('wechatcontent/resources'); ?>",
        'data': {admin: admin_arr, company: company_arr, type: "classchapter"},//classchapter 课程视频字段
        'type': "post",
        success: function (msg) {
            if (msg.code == 1) {
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