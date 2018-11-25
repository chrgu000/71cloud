<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\PHPTutorial\WWW\71cloud\PHP\public/../application/branchadmin\view\weixin\menu.html";i:1541574067;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />

    <script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js"></script>

</head>
<body>
<article class="page-container">
    <?php if(empty($list)): ?>
        <form action="<?php echo url('save_menu'); ?>" class="form form-horizontal" id="form-admin-add" method="post">
     <?php else: ?>
        <form action="<?php echo url('update_menu'); ?>" class="form form-horizontal" id="form-admin-add" method="post">
    <?php endif; ?>
            
            <div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">菜单层级：</label>
		<div class="formControls col-xs-8 col-sm-9">
            <span class="select-box" style="width:150px;">
            <select id="top_nav" class="lv_one" name="lv_fri" size="1" onselect="showMsg()">
                <option>选择菜单层级</option>
                    <option value="1">1级 </option>
                    <option value="2">2级 </option>
            </select>
            
            <select id="sencond_nav" class="lv_sec" name="lv_sec" size="1" hidden>
                <option value="0">选择上级菜单名称</option>
                    <?php foreach($res as $v): ?>
                        <option value="<?php echo $v['id']; ?>"><?php echo $v['menu_name']; ?> </option>
                    <?php endforeach; ?>
            </select>
			</span> <span id="menu_prompt"> </span></div>
	</div>
  
		<div class="row cl menu_input">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>微信菜单栏：</label>
		<div class="formControls col-xs-8 col-sm-9">
    <?php if(empty($list)): ?>
       <input type="text" class="input-text menu_input" value="" placeholder="" id="appid" name="menu_name">
     <?php else: ?>
        <input type="text" class="input-text" value="<?php echo $list['menu_name']; ?>" placeholder="" id="appid" name="menu_name">
            <input type="hidden" class="menu_input" name="id" value="<?php echo $list['id']; ?>">
            <input type="hidden" class="menu_input" name="company_id" value="<?php echo $list['company_id']; ?>">
    <?php endif; ?>
    
		</div>
	</div>
	<div class="row cl ">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>菜单栏描述：</label>
		<div class="formControls col-xs-8 col-sm-9">
         <?php if(empty($list)): ?>
             <input type="text" class="input-text menu_input" value="" placeholder="" id="appsecret" name="menu_description">
        <?php else: ?>
			<input type="text" class="input-text menu_input" value="<?php echo $list['menu_description']; ?>" placeholder="" id="appsecret" name="menu_description">
          <?php endif; ?>
		</div>
	</div>
            
            
            <div class="row cl menu_input">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>菜单链接地址：</label>
		<div class="formControls col-xs-8 col-sm-9">
         <?php if(empty($list)): ?>
             <input type="text" class="input-text menu_input" value="" placeholder="" id="menu_url" name="menu_url">
        <?php else: ?>
			<input type="text" class="input-text menu_input" value="<?php echo $list['menu_url']; ?>" placeholder="" id="menu_url" name="menu_url">
          <?php endif; ?>
		</div>
	</div>

	

<!--		 <div class="row cl">
			 <label class="form-label col-xs-4 col-sm-3">角色名称：</label>
			 <div class="formControls col-xs-8 col-sm-9"> <span class="select-box" style="width:150px;">
            <select class="select" name="role_id" size="1">
                <option value="0">角色名称</option>
                    
                    <option value=""></option>
                    
            </select>
			</span> </div>
		 </div>-->

	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			 <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;提&nbsp;&nbsp;&nbsp;&nbsp;交&nbsp;">
		</div>
	</div>
	</form>
</article>
<!--js-->
<script type="text/javascript" src="/static/admin/lib/jquery-1.11.3.min.js" ></script>
<script>
    
    
    $('.lv_one').change(function(){
        var test = $(this).val();
        if(test == 1){
            $('.lv_sec').hide();
            $.ajax({
                type:"POST",
                url:"<?php echo url('select_menu'); ?>",
                dataType:"json",
                data:{"lv_one":test},
                success:function (data) {
                    console.log(data)
                    if (data>=3){
                        $(".menu_input").attr("readonly", "readonly");
                        $("#menu_prompt").html("<p style='color: red'>公众号菜单栏的一级菜单最多3个,已添加<span style='color: #0bb20c'>"+data+"</span>个</p>")
                    }else{
                        $("#menu_prompt").html("<p style='color: green'>公众号菜单栏的一级菜单最多3个,已添加<span style='color: red'>"+data+"</span>个</p>")
                    }
                }
            })
        }else if(test == 2){
            $('.lv_sec').show();
        }
        
    })
    $('.lv_sec').change(function () {
        var test = $(this).val();
        // console.log(test);
        $.ajax({
            type:"POST",
            url:"<?php echo url('select_menu'); ?>",
            dataType:"json",
            data:{"lv_sec":test},
            success:function (data) {
                console.log(data)
                if (data>=5){
                    $(".menu_input").attr("readonly", "readonly");
                    $("#menu_prompt").html("<p style='color: red'>公众号菜单栏的二级菜单最多5个,已添加<span style='color: #0bb20c'>"+data+"</span>个</p>")
                }else{
                    $("#menu_prompt").html("<p style='color: green'>公众号菜单栏的二级菜单最多5个,已添加<span style='color: red'>"+data+"</span>个</p>")
                }
            }
        })
    })
    
    
 
    
    
    
</script>

<!--/请在上方写此页面业务相关的脚本-->





</body>
</html>
