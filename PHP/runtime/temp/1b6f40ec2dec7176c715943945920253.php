<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:86:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\classCourse\index.html";i:1540870637;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1540622524;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1540368457;}*/ ?>
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
﻿<title>课程列表</title>
<link rel="stylesheet" href="/static/admin/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body class="pos-r">

<div>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 课程管理 <span class="c-gray en">&gt;</span> 课程列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">

		<div class="text-c">
			<form action="<?php echo Url('index'); ?>" method="get">
				<!--日期范围：
				<input type="text" onfocus="WdatePicker({ maxDate:'#F{(\'endTime\') }' })" value="<?php echo \think\Request::instance()->get('logmin'); ?>" id="logmin" name="logmin" class="input-text Wdate" style="width:120px;">
				-
				<input type="text" onfocus="WdatePicker({ maxDate:'#F{(\'datemin\')}' })" value="<?php echo \think\Request::instance()->get('logmax'); ?>" id="logmax" name="logmax" class="input-text Wdate" style="width:120px;">-->

				<input type="text" name="name" id="" placeholder=" 课程标题" style="width:250px" value="<?php echo \think\Request::instance()->get('name'); ?>" class="input-text">
				<select name="cate" id="" class="input-text" style="width:300px;padding-top: 0px">
					<option value="">请选择分类</option>
					<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $v['id']; ?>" <?php if(\think\Request::instance()->get('cate') == $v['id']): ?>selected<?php endif; ?> ><?php echo str_repeat( '----',$v['level']); ?><?php echo $v['name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>

				<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜课程</button>
			</form>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
			<a class="btn btn-primary radius" onclick="add('添加课程','<?php echo Url('add'); ?>')"  href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加课程</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="40"><input name="" type="checkbox" value=""></th>
						<th width="40">ID</th>
						<th>名称</th>
						<th width="150">缩略图</th>
						<th width="150">分类</th>
						<th width="100">课时</th>
						<th width="100">访问量</th>
						<th width="100">加入学习计划人数</th>
						<th width="100">上/下架</th>
						<th width="150">发布时间</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<tr class="text-c va-m">
							<td><input name="" type="checkbox" value=""></td>
							<td><?php echo $vo['id']; ?></td>
							<td><?php echo $vo['name']; ?></td>
							<td><img width="100" height="60" class="product-thumb" src="<?php echo $vo['thumb']; ?>"></td>
							<td><?php echo $vo['cate_name']; ?></td>
							<td><?php echo $vo['period']; ?></td>
							<td><?php echo $vo['visit']; ?></td>
							<td><?php echo $vo['study_person']; ?></td>
							<?php if($vo['status'] == '2'): ?>
								<td class="td-status"><span class="btn btn-success  radius size-MINI "  onclick="up(this,'<?php echo $vo['id']; ?>')">上架</span></td>
								<?php else: ?>
								<td class="td-status"><span class="btn  btn-danger radius size-MINI " onclick="down(this,'<?php echo $vo['id']; ?>')">下架</span></td>
							<?php endif; ?>
							<td><?php echo date( 'Y-m-d H:i:s',$vo['ctime']); ?></td>
							<td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="edit('课程编辑','<?php echo Url('edit'); ?>','<?php echo $vo['id']; ?>')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a></td>
						</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>

				</tbody>
			</table>

		</div>

	</div>
</div>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">


$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  {"orderable":false,"aTargets":[0,2,3,7,10]}// 制定列不参与排序
	]
});
/*添加*/
function add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
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


/*上架*/
function up(obj,id){
	layer.confirm('确认上架吗？',function(){
	    var ids = $()
		$.ajax({
			'url' 		: "<?php echo Url('up'); ?>",
			'data' 		: {id:id},
			'dataType'	: 'json',
			'type' 		: 'post',
			success		: function (msg) {
                console.log(id);
                if(msg.code == 1){
                    $(obj).parent('td').html('<span class="btn  btn-danger radius size-MINI " onclick="down(this,{id})" >下架</span>');
                    layer.msg(msg.msg,{icon: 1,time:1000});

                        window.location.reload();


				}else{
                    layer.msg(msg.msg,{icon: 2,time:1000});

                        window.location.reload();


				}
            }

		})

	});
}

/*下架*/
function down(obj,id){
	layer.confirm('确认下架吗？',function(){
		$.ajax({
			'url' 		: "<?php echo Url('down'); ?>",
		    'data'		: {id:id},
			'dataType'  : 'json',
			'type' 		: 'post',
			success		: function (msg) {
                console.log(id);
				if(msg.code == 1){
					$(obj).parents("td").html('<span class="btn  btn-success radius size-MINI " onclick="up(this,{id})">上架</span>');
					layer.msg(msg.msg,{icon: 1,time:1000});

                        window.location.reload();


				}else{
                    layer.msg(msg.msg,{icon: 2,time:1000});

                        window.location.reload();


				}
			}

		})

	});
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




</script>
</body>
</html>
<!--_footer 作为公共模版分离出去-->
<!--<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>-->
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->