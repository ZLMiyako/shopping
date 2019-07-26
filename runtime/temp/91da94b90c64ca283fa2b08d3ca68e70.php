<?php /*a:3:{s:77:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\adminmessage\picadd.html";i:1563088195;s:70:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\public\_meta.html";i:1563324026;s:72:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\public\_footer.html";i:1562634778;}*/ ?>
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
<title>新增图片</title>
</head>
<body>
<div class="page-container">	
	<form class="layui-form" action="" method="post">
		<input type="hidden" name="mid"  value="<?php echo htmlentities($id); ?>" />
	  	
	  	<div class="layui-form-item">
		    <label class="layui-form-label">产品号</label>
		    <div class="layui-input-block">
		    	<input type="text" name="product"   autocomplete="off" placeholder="请输入产品号" class="layui-input">
		    </div>
	  	</div>
	  	
	  	<div class="layui-form-item">
		    <label class="layui-form-label">厂家名字</label>
		    <div class="layui-input-block">
		    	<input type="text" name="name"   autocomplete="off" placeholder="请输入厂家名字" class="layui-input">
		    </div>
	  	</div>
	  	
	  	<div class="layui-form-item">
		    <label class="layui-form-label">厂家名地址</label>
		    <div class="layui-input-block">
		    	<input type="text" name="addres"   autocomplete="off" placeholder="请输入厂家地址" class="layui-input">
		    </div>
	  	</div>
	  	
	  	<div class="layui-form-item">
		    <label class="layui-form-label">厂家联系方式</label>
		    <div class="layui-input-block">
		    	<input type="text" name="phone"   autocomplete="off" placeholder="请输厂家联系方式" class="layui-input">
		    </div>
	  	</div>
	  	
	  	<div class="layui-form-item">
		    <label class="layui-form-label">配料表</label>
		    <div class="layui-input-block">
		    	<input type="text" name="burden"   autocomplete="off" placeholder="请输配料表" class="layui-input">
		    </div>
	  	</div>
	  	
	  	<div class="layui-form-item">
		    <label class="layui-form-label">储存方法</label>
		    <div class="layui-input-block">
		    	<input type="text" name="storage"   autocomplete="off" placeholder="储存方法" class="layui-input">
		    </div>
	  	</div>
	  	
	  	<div class="layui-form-item">
		    <label class="layui-form-label">保质期</label>
		    <div class="layui-input-block">
		    	<input type="text" name="expiration"   autocomplete="off" placeholder="保质期" class="layui-input">
		    </div>
	  	</div>
	  
	  	<div class="layui-form-item">
		    <label class="layui-form-label">口味</label>
		    <div class="layui-input-block">
		    	<input type="text" name="taste"   autocomplete="off" placeholder="口味" class="layui-input">
		    </div>
	  	</div>
 		
		 <div class="layui-form-item">
		    <div class="layui-input-block">
		      	<button class="layui-btn" lay-submit lay-filter="demo1" data-insert="<?php echo url('Adminmessage/insert'); ?>" id="addBtn">立即提交</button>
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
