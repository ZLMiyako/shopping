<?php /*a:3:{s:75:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\adminclass\picadd.html";i:1563327771;s:70:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\public\_meta.html";i:1563324026;s:72:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\public\_footer.html";i:1562634778;}*/ ?>
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
	<form class="layui-form" action="" method="post" id="classform">
		<input type="hidden" name="did"  value="<?php echo htmlentities($id); ?>" />
	  	
	  	<div class="layui-form-item">
		    <label class="layui-form-label" style="width: 120px;">点击选择口味：</label>
		    <div class="layui-btn layui-bg-gray selectBtn" type="button" >
		    	<span>麻辣</span>
		    	<input type="hidden"  value="" />
		    </div>
		    
		    <div class="layui-btn layui-bg-blue selectBtn" type="button" >
		    	<span>微辣</span>
		    	<input type="hidden"  value=""/>
		    </div>
		    
		    <div class="layui-btn layui-bg-orange selectBtn" type="button" >
		    	<span>不辣</span>
		    	<input type="hidden"  value=""/>
		    </div>
		    
		     <button class="layui-btn layui-bg-black" type="button" id="resetBtn">重置口味</button>
	  	</div>
	  	
	  	<div class="layui-form-item">
		    <label class="layui-form-label" style="width: 120px;">点击选择大小：</label>
		    <div class="layui-btn layui-bg-gray sizeBtn" type="button" >
		    	<span>大</span>
		    	<input type="hidden"  value=""/>
		    </div>
		    
		    <div class="layui-btn layui-bg-blue sizeBtn" type="button" >
		    	<span>中</span>
		    	<input type="hidden"  value=""/>
		    </div>
		    
		    <div class="layui-btn layui-bg-orange sizeBtn" type="button" >
		    	<span>小</span>
		    	<input type="hidden"   value=""/>
		    </div>
		    
		     <button class="layui-btn layui-bg-black" type="button" id="aresetBtn">重置口味</button>
	  	</div>
	  	
 		<input type="hidden" name="img" id="uplode"  value="" />
  		<div class="layui-upload">
			  <button type="button" class="layui-btn" id="test2" data-img="<?php echo url('Adminclass/upload'); ?>">图片上传</button> 
			  <blockquote class="layui-elem-quote layui-quote-nm" style="margin-top: 10px;">
			    预览图：
			   <div class="layui-upload-list" id="demo2"></div>
			   </blockquote>
			</div>
		 <div class="layui-form-item">
		    <div class="layui-input-block">
		      	<button class="layui-btn" lay-submit lay-filter="demo1" data-insert="<?php echo url('Adminclass/insert'); ?>" id="addBtn">立即提交</button>
		    </div>
		  </div>
	
	</form>	
		
</div>
	<script type="text/javascript">
		//选择口味
	var selectBtn = $(".selectBtn");
			$.each(selectBtn, function(i,v) {
				$(this).click(function(){
					selectBtn.hide();
					$(this).show();
					$(this).children(":last-child").val($(this).children(":first-child").text());
					$(this).children(":last-child").attr('name','name')
				})
			});
	//选择大小
	var sizeBtn = $(".sizeBtn");
			$.each(sizeBtn, function(i,v) {
				$(this).click(function(){
					sizeBtn.hide();	
					$(this).show();
					$(this).children(":last-child").val($(this).children(":first-child").text());
					$(this).children(":last-child").attr('name','size')
				})
			});
	//重置口味		
		$("#resetBtn").click(function(){
			$(".selectBtn").show();
		})
		$("#aresetBtn").click(function(){
			$(".sizeBtn").show();
		})	
	
	
	
	
	
	</script>
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
