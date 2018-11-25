<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/branchadmin\view\examcate\index.html";i:1542589537;}*/ ?>
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
	<link rel="stylesheet" href="/static/admin/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
	<script  src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
	<!--[if IE 6]>
	<script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>DD_belatedPNG.fix('*');</script>
	<![endif]-->
	<title>题目列表</title>
</head>


<body class="pos-r">

<div>
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 关卡管理 <span class="c-gray en">&gt;</span> 关卡名称 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">

		<div class="text-c">
			<form action="<?php echo Url('index'); ?>" method="get">

				<input type="text" name="exampaper_name" id="" placeholder=" 关卡名称" style="width:250px" value="<?php echo \think\Request::instance()->get('exampaper_name'); ?>" class="input-text">

				<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜分类名称</button>
			</form>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l">
			<a class="btn btn-primary radius"   href="<?php echo Url('add'); ?>"><i class="Hui-iconfont">&#xe600;</i> 添加关卡</a></span> <span class="r">共有数据：<strong><?php echo $count; ?></strong> 条</span> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="40"><input class="" name="" type="checkbox" value=""></th>
						<th width="40">ID</th>
						<th width="40">素材来源</th>
						<th width="150">分类名称</th>
						<th width="100">题目id</th>
						<th width="100">题目数量</th>
						<th width="100">及格分数</th>
						<th width="100">满分</th>
						<th width="50">答题时长</th>
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$v): ?>
						<tr class="text-c va-m">
							<td><input name="" class="company" type="checkbox" value="<?php echo $v['id']; ?>"></td>
							<td class="status"><?php echo $v['id']; ?></td>
							<?php if($v['is_admin'] == '1'): ?>
							<td width="40">客户添加</td>
							<?php else: ?>
							<td width="40">系统后台推荐</td>
							<?php endif; ?>
							<td class="text-l"><?php echo $v['exampaper_name']; ?></td>
							<td><?php echo $v['questions_ids']; ?></td>
							<td><?php echo $v['exam_questions_num']; ?></td>
							<td><?php echo $v['pass_score']; ?></td>
							<td><?php echo $v['score']; ?></td>
							<td><?php echo $v['long_time']; ?></td>
							<?php if($v['is_admin'] == '1'): ?>
							<td class="td-manage">
								<a style="text-decoration:none" class="ml-5"  href="<?php echo Url('Examcate/edit',array('id'=>$v['id'])); ?>" title="编辑">
									<i class="Hui-iconfont">&#xe6df;</i>
								</a>
								<a style="text-decoration:none" class="ml-5" onclick="del(this,'<?php echo $v['id']; ?>')" href="javascript:;" title="删除">
									<i class="Hui-iconfont">&#xe6e2;</i>
								</a>
							</td>
							<?php else: ?>
							<td class="td-manage">

							</td>
							<?php endif; ?>
						</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
			</table>
			<div class="row cl">
				<label class="form-label col-xs-4 col-sm-2">选择所属活动：</label>
				<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" style="width:150px;">
					<select class="select" id="activity" name="exam_activity_id" size="1">
						<option value="">请选择活动</option>
						<?php if(is_array($activity) || $activity instanceof \think\Collection || $activity instanceof \think\Paginator): if( count($activity)==0 ) : echo "" ;else: foreach($activity as $key=>$v): ?>
							<option class="activity_id" value="<?php echo $v['id']; ?>"><?php echo $v['exam_activity_name']; ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span>
				</div>
			</div>
			<input class="btn radius btn-warning sub_btn" type="button" value="确认修改所选">
		</div>

	</div>
</div>



<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript">


$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  {"orderable":false,"aTargets":[0,2,3,8]}// 制定列不参与排序
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

/**
 * 客户选择自己公众号对应的资源
 */
//button按钮点击事件
$(".sub_btn").click(function () {
	//定义一个空数组
    var company_arr=[]
	//循环获取选中的id
    for(var i=0; i<$('.company').length; i++){
        if($('.company').eq(i).is(':checked')){
            company_arr.push($('.company').eq(i).val())
        }
    }

    //获取活动id
	var activity=$("#activity").val();
    $.ajax({
        'url':"<?php echo Url('Examcate/index'); ?>",
        'data':{company:company_arr,activity:activity},//选中的id
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