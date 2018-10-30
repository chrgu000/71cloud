<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/admin\view\news\index.html";i:1540871307;s:65:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\layout.html";i:1539913150;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\header.html";i:1540622524;s:72:"D:\PHPTutorial\WWW\71cloud\PHP\application\admin\view\public\footer.html";i:1540368457;}*/ ?>
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
﻿<title>新闻列表</title>
<link rel="stylesheet" href="/static/admin/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body class="pos-r">

<div>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 新闻管理 <span class="c-gray en">&gt;</span> 新闻列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">

		<div class="text-c">
			<form action="<?php echo Url('index'); ?>" method="get">
				<!--日期范围：
				<input type="text" onfocus="WdatePicker({ maxDate:'#F{.(\'endTime\') }' })" value="<?php echo \think\Request::instance()->get('logmin'); ?>" id="logmin" name="logmin" class="input-text Wdate" style="width:120px;">
				-
				<input type="text" onfocus="WdatePicker({ maxDate:'#F{.(\'datemin\')}' })" value="<?php echo \think\Request::instance()->get('logmax'); ?>" id="logmax" name="logmax" class="input-text Wdate" style="width:120px;">
				-->
				<input type="text" name="title" id="" placeholder=" 新闻标题" style="width:250px" value="<?php echo \think\Request::instance()->get('title'); ?>" class="input-text">
				<select name="cate" id="" class="input-text" style="width:300px;padding-top: 0px">
					<option value="">请选择分类</option>
					<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<option value="<?php echo $v['id']; ?>" <?php if(\think\Request::instance()->get('cate') == $v['id']): ?>selected<?php endif; ?> ><?php echo str_repeat( '----',$v['level']); ?><?php echo $v['name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>

				<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜新闻</button>
			</form>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
			<a class="btn btn-primary radius"   href="<?php echo Url('add'); ?>"><i class="Hui-iconfont">&#xe600;</i> 添加新闻</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="40"><input name="" type="checkbox" value=""></th>
						<th width="40">ID</th>
						<th>标题</th>
						<th width="150">缩略图</th>
						<th width="150">分类</th>
						<th width="150">推荐</th>
						<th width="150">发布时间</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<tr class="text-c va-m">
							<td><input name="" type="checkbox" value=""></td>
							<td><?php echo $vo['id']; ?></td>
							<td class="text-l"><?php echo $vo['title']; ?></td>
							<td><img width="100" height="60" class="product-thumb" src="<?php echo $vo['thumb']; ?>"></td>
							<td><?php echo $vo['cate_name']; ?></td>
							<?php if($vo['recommend'] == '0'): ?>
								<td class="td-status"><span class="btn btn-success  radius size-MINI" onclick="recommend(this,'<?php echo $vo['id']; ?>')">推荐</span></td>
								<?php else: ?>
								<td class="td-status"><span class="btn  btn-danger radius size-MINI" onclick="cancel_recommend(this,'<?php echo $vo['id']; ?>')">取消推荐</span></td>
							<?php endif; ?>
							<td><?php echo date( 'Y-m-d H:i:s',$vo['ctime']); ?></td>
							<td class="td-manage"><a style="text-decoration:none" class="ml-5"  href="<?php echo Url('News/edit',array('id'=>$vo['id'])); ?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
								<a style="text-decoration:none" class="ml-5" onclick="del(this,'<?php echo $vo['id']; ?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
	  {"orderable":false,"aTargets":[0,2,3,7]}// 制定列不参与排序
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


/*推荐*/
function recommend(obj,id){
	layer.confirm('确认推荐吗？',function(){
		$.ajax({
			'url' 		: "<?php echo Url('recommend'); ?>",
			'data' 		: {id:id},
			'dataType'	: 'json',
			'type' 		: 'post',
			success		: function (msg) {
			    if(msg.code == 1){
                    $(obj).parent('td').html('<span class="btn  btn-danger radius size-MINI" onclick="cancel_recommend(this,{id})" >取消推荐</span>');
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

/*取消推荐*/
function cancel_recommend(obj,id){
	layer.confirm('确认取消推荐吗？',function(){
		$.ajax({
			'url' 		: "<?php echo Url('cancel_recommend'); ?>",
		    'data'		: {id:id},
			'dataType'  : 'json',
			'type' 		: 'post',
			success		: function (msg) {
				if(msg.code == 1){
					$(obj).parents("td").html('<span class="btn  btn-success radius size-MINI" onclick="recommend(this,{id})">推荐</span>');
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