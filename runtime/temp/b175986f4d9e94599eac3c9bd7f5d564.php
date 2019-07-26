<?php /*a:2:{s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\login\login.html";i:1562315949;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1564016862;}*/ ?>
<!--模板继承头部-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta content="商城" http-equiv="keywords">
<meta name="description" content="商城,购物">
<meta name="format-detection" content="telephone=no"><!-- 禁止IPHONE识别手机号码 -->
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
<title>贵阳花溪盛千辉便利店</title>
<!-- css -->
<link rel="stylesheet" type="text/css" href="/yidong/public/static/index/css/index.css">
<link rel="stylesheet" type="text/css" href="/yidong/public/static/index/css/swiper.min.css">

<!-- public_css -->
<link rel="stylesheet" type="text/css" href="/yidong/public/static/index/css/public/public_lib.css">

<!-- zy_public_css -->
<link rel="stylesheet" type="text/css" href="/yidong/public/static/index/css/zy_public.css">
<!-- vip css -->
<link rel="stylesheet" type="text/css" href="/yidong/public/static/index/css/zy_vip.css">
<!-- 分类、品牌、店铺css -->
<link rel="stylesheet" type="text/css" href="/yidong/public/static/index/css/zy_main.css">
<link rel="stylesheet" type="text/css" href="/yidong/public/static/index/css/news_login_apply.css">
<link rel="stylesheet" type="text/css" href="/yidong/public/static/index/layui/css/layui.css" />
<!-- layui引入 -->
<link rel="stylesheet" type="text/css" href="/yidong/public/static/index/layui/css/layui.css" />
<!-- js -->
<script type="text/javascript" src="/yidong/public/static/index/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/yidong/public/static/index/js/swiper.min.js"></script>
<script type="text/javascript" src="/yidong/public/static/index/layui/layui.js"></script>
<!-- js——public -->
<script type="text/javascript" src="/yidong/public/static/index/js/public.js"></script>


</head>

<!--模板继承身体-->

<body>
<div class="zy_login_box">
	<header class="zy_search_top_box">
		<div class="zy_title_top fix">
			<div class="one" href="/yidong/public/static/index/javascript:" onclick="history.back();"><img src="/yidong/public/static/index/images/back_jt.png"></div>
			<h1>会员登录</h1>
			<a href="<?php echo url('Login/register'); ?>">免费注册</a>
		</div>
	</header>	

	<!-- 内容框 -->
	<div class="zy_module-content">
		<div class="login_box">
			<div class="logo"><img src="/yidong/public/static/index/images/web/logo.png"></div>
			<form id="loginform">
				<div>
					<label><a><img src="/yidong/public/static/index/images/web/zy_icon_user.png"></a><input type="text" name="mobile" placeholder="手机号/用户名/邮箱"></label>
				</div>
				<div>
					<label><a><img src="/yidong/public/static/index/images/web/zy_icon_mm.png"></a><input type="password" name="password" placeholder="请输入密码"></label>
				</div>
				<button class="zy_login_btn" type="button" id="loginBtn" data-login="<?php echo url('Login/logincheck'); ?>" data-index="<?php echo url('Index/index'); ?>">登 录</button>
				<h2>
					<label><input type="checkbox" name="">自动登录</label>
					<a  onclick="eaitpassword('修改密码','<?php echo url("Login/eaitpassword"); ?>')">忘记密码？点此找回</a>
				</h2>
			</form>
		</div>		
	</div>
	<!--底部导航-->
	<div class="footer_box">
		<div class="footer">
			<h2>
				<a href="<?php echo url('index/index'); ?>">首页</a>
				<a href="<?php echo url('login/register'); ?>">注册</a><!--  
			 -->
			</h2>
		</div>
	</div>
</div>

</body>
</html>

<!--模板继承脚-->
<script type="text/javascript" src="/yidong/public/static/index/js/login.js"></script>