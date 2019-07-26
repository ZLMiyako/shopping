<?php /*a:3:{s:75:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\adminproduct\edit.html";i:1562913485;s:70:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\public\_meta.html";i:1563324026;s:72:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\public\_footer.html";i:1562634778;}*/ ?>
<!--_meat 作为公共模版分离出去-->	

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
<title>编辑图片</title>
</head>
<body>
<div class="page-container">	
	<form class="layui-form" action="" method="post">
		<div class="layui-form-item">
		    <label class="layui-form-label">图片名称</label>
		    <div class="layui-input-block">
		    	<input type="text" name="name" value="<?php echo htmlentities($update['name']); ?>"  autocomplete="off" placeholder="请输入图片名称" class="layui-input">
		    </div>
	  	</div>
	  	<div class="layui-form-item">
		    <label class="layui-form-label">商品介绍</label>
		    <div class="layui-input-block">
		    	<input type="text" value="<?php echo htmlentities($update['title']); ?>"  name="title" autocomplete="off" placeholder="请输入商品介绍" class="layui-input">
		    </div>
	  	</div>
	  	<div class="layui-form-item">
		    <label class="layui-form-label">商品价格</label>
		    <div class="layui-input-block">
		    	<input type="text" value="<?php echo htmlentities($update['price']); ?>"   name="price" autocomplete="off" placeholder="请输入商品价格" class="layui-input">
		    </div>
	  	</div>
	  	<div class="layui-form-item">
		    <label class="layui-form-label">商品状态</label>
		    <div class="layui-input-block">
		    	<input type="text" value="<?php echo htmlentities($update['status']); ?>"   name="status" autocomplete="off" placeholder="请输入图片名称" class="layui-input">
		    </div>
	  	</div>

	  	<input type="hidden" name="id"  value="<?php echo htmlentities($update['id']); ?>" />
 		<input type="hidden" name="img" id="uplode"  value="<?php echo htmlentities($update['img']); ?>" />
  		<div class="layui-upload">
			<button type="button" class="layui-btn" id="test2" data-img="<?php echo url('Adminproduct/upload'); ?>">更换图片</button>
			<div class="layui-upload-list">
			    <img class="layui-upload-img" id="demo1" src="/yidong/public/uploads/<?php echo htmlentities($update['img']); ?>">
			    <p id="demoText"></p>
			</div>
		</div>
		 <div class="layui-form-item">
		    <div class="layui-input-block">
		      	<button class="layui-btn" lay-submit lay-filter="demo1" data-insert="<?php echo url('Adminproduct/update'); ?>" id="addBtn">立即提交</button>
		    </div>
		  </div>
	
	</form>	
	
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
