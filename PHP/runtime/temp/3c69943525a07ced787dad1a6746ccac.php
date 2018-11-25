<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/branchadmin\view\examactivity\index.html";i:1542245388;}*/ ?>

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
    <title>活动列表</title>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 考试管理 <span class="c-gray en">&gt;</span> 活动列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="text-c">
        <input type="text" class="input-text" style="width:250px" placeholder="输入活动名称" id="" name="">
        <button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜活动</button>
    </div>
    <div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
			<a href="<?php echo url('add'); ?>"  class="btn btn-primary radius">
				<i class="Hui-iconfont">&#xe600;</i> 创建活动
			</a>
		</span>
        <span class="r">共有数据：<strong>1000</strong> 条</span>
    </div>
    <table class="table table-border table-bordered table-bg table-sort">
        <thead>
        <tr>
            <th scope="col" colspan="9">活动列表</th>
        </tr>
        <tr class="text-c">
            <th width="25"><input type="checkbox" name="" value=""></th>
            <th width="40">ID</th>
            <th width="100">活动名称</th>
            <th width="90">活动发布时间</th>
            <th width="90">活动图片</th>
            <th width="100">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data as $v): ?>
        <tr class="text-c">
            <td><input type="checkbox" value="1" name=""></td>
            <td width="20"><?php echo $v['id']; ?></td>
            <td><?php echo $v['exam_activity_name']; ?></td>
            <td><?php echo date("Y-m-d,H:i:s",$v['create_time']); ?></td>
            <td><img width="100" height="60" class="product-thumb" src="<?php echo $v['img_src']; ?>"></td>
            <td class="td-manage">
                <a style="text-decoration:none" class="ml-5"  href="<?php echo Url('Examactivity/edit',array('id'=>$v['id'])); ?>" title="编辑">
                    <i class="Hui-iconfont">&#xe6df;</i>
                </a>
                <a style="text-decoration:none" class="ml-5" onclick="del(this,'<?php echo $v['id']; ?>')" href="javascript:;" title="删除">
                    <i class="Hui-iconfont">&#xe6e2;</i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!--显示页码列表-->
<div>

</div>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript">
    /*
        参数解释：
        title	标题
        url		请求的url
        id		需要操作的数据id
        w		弹出层宽度（缺省调默认值）
        h		弹出层高度（缺省调默认值）
    */
    //分页搜索排序功能
    $('.table-sort').dataTable({
        "aaSorting": [[ 1, "desc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            {"orderable":false,"aTargets":[0,2,4,5]}// 制定列不参与排序
        ]
    });

    /*删除*/
    function del(obj,id){
        layer.confirm('删除会把该活动下的所有关卡都删除掉，确定删除吗?',function(){
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

    /*管理员-增加*/
    function admin_add(title,url,w,h){
        layer_show(title,url,w,h);
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



</script>
</body>
</html>