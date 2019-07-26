<?php /*a:3:{s:76:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\Adminproduct\index.html";i:1563351438;s:70:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\public\_meta.html";i:1563324026;s:72:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\public\_footer.html";i:1562634778;}*/ ?>
﻿<!--_meat 作为公共模版分离出去-->	

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
<script type="text/javascript" src="/yidong/public/static/adminlib/html5shiv.js"></script>
<script type="text/javascript" src="/yidong/public/static/adminlib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/yidong/public/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/yidong/public/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/yidong/public/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/yidong/public/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/yidong/public/static/admin/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/yidong/public/static/admin/layui/css/layui.css" />
<!--文本编辑器-->
<!--w文本编辑器-->
<script type="text/javascript" src="/yidong/public/static/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" charset="utf-8" src="/yidong/public/static/admin/utf8/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/yidong/public/static/admin/utf8/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
 <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/yidong/public/static/admin/utf8/lang/zh-cn/zh-cn.js"></script>

<!--_meat 作为公共模版分离出去-->	
<title>商品列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 商品管理 <span class="c-gray en">&gt;</span> 商品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="<?php echo url('adminproduct/index',['id'=>0]); ?>;" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form action="<?php echo url('Adminproduct/search'); ?>" method="post">
		<div class="text-c"> 日期范围：
			<input type="text" onfocus="WdatePicker({ maxDate:'#F{ $dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({ minDate:'#F{ $dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })" id="logmax" class="input-text Wdate" style="width:120px;">
			<input type="text" name="keyword" value="<?php echo isset($keyword['keyword']) ? htmlentities($keyword['keyword']) : ''; ?>" placeholder=" 新闻名称" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜商品</button>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> 
				<span class="l"><a href="<?php echo url('Adminproduct/deleALL'); ?>" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> 
					<a class="btn btn-primary radius" onclick="picadd('添加商品','<?php echo url("Adminproduct/picadd"); ?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加商品</a>
					
				</span>
				<span class="r">共有数据：<strong><?php echo htmlentities($count); ?></strong> 条</span> 
		</div>
	</form>
	
	<form action="<?php echo url('Adminproduct/aindex'); ?>" method="post"  id="seleform">
		<div style="width:1280px">
	    	<div style="margin: 20px auto; width: 200px;">
	    		<span>商品分类:</span>
		    	<select name="pid" onchange="sele();" style="width: 120px;height: 30px; border: 1px solid #999; border-radius: 3px;" >
		    		<option value=""><?php echo isset($aanav['nav']) ? htmlentities($aanav['nav']) : '全部食品'; ?></option>
		    		<?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
		    		<option value="<?php echo htmlentities($nav['id']); ?>"><?php echo htmlentities($nav['nav']); ?></option>
		    		<?php endforeach; endif; else: echo "" ;endif; ?>
		    		<option value="">全部食品</option>
		    	</select>
	    	</div>
	  	</div>
	</form>	
	
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="50">分类ID</th>
					<th width="100">商品名称</th>
					<th width="110">商品图标</th>
					<th width="200">商品介绍</th>
					<th width="60">商品价格</th>
					<th width="80">商品变体</th>
					<th width="60">商品详情</th>
					<th width="60">商品信息</th>
					<th width="50">商品状态</th>
					<th width="100">更新时间</th>
					<th width="100">操作</th>
				</tr>
			</thead>
		
			<?php if(is_array($alist) || $alist instanceof \think\Collection || $alist instanceof \think\Paginator): $i = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td><?php echo htmlentities($list['id']); ?></td>
					<td><?php echo htmlentities($list['pid']); ?></td>
					<td><?php echo htmlentities($list['name']); ?></td>
					<td><a href="javascript:;" ><img width="80" class="picture-thumb" src="/yidong/public/uploads/<?php echo htmlentities($list['img']); ?>"></a></td>
					<td><?php echo htmlentities($list['title']); ?></td>
					<td><?php echo htmlentities($list['price']); ?></td>
					<td ><a onclick="details('商品详情','<?php echo url("Adminclass/index"); ?>',<?php echo htmlentities($list['id']); ?>)" style="display: block;width: 50px;height: 20px;background-color: #00a497; margin: 0 auto;border-radius: 5px; color: #fff;">变体</a></td>
					<td ><a onclick="details('商品详情','<?php echo url("Admindetails/index"); ?>',<?php echo htmlentities($list['id']); ?>)" style="display: block;width: 50px;height: 20px;background-color: #2683A5; margin: 0 auto;border-radius: 5px; color: #fff;">详情</a></td>
					<td ><a onclick="details('商品详情','<?php echo url("Adminmessage/index"); ?>',<?php echo htmlentities($list['id']); ?>)" style="display: block;width: 50px;height: 20px;background-color: #726d40; margin: 0 auto;border-radius: 5px; color: #fff;">信息</a></td>
					<td><?php echo htmlentities($list['status']); ?></td>
					<td><?php echo htmlentities($list['time']); ?></td>
					<td class="td-manage"><a style="text-decoration:none" onClick="picture_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="edit('图库编辑','<?php echo url("Adminproduct/edit"); ?>',<?php echo htmlentities($list['id']); ?>)" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="dele('图库编辑','<?php echo url("Adminproduct/dele"); ?>',<?php echo htmlentities($list['id']); ?>)" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<!--分页；-->
		<div style="text-align: center;">
			<?php echo $page; ?>;
		</div>
	</div>
</div>

<!--_footer 作为公共模版分离出去-->


<script type="text/javascript" src="/yidong/public/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/yidong/public/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/yidong/public/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->

<script type="text/javascript" src="/yidong/public/static/admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>

<!--layui-->
<script type="text/javascript" src="/yidong/public/static/admin/layui/layui.js"></script>
<!--图片添加。编辑-->
<script type="text/javascript" src="/yidong/public/static/admin/js.js"></script>


<!--_footer 作为公共模版分离出去-->
</body>
</html>