<?php /*a:2:{s:77:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\login\register.html";i:1562915399;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1563442377;}*/ ?>
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
			<h1>会员注册</h1>
			<a href="<?php echo url('login/login'); ?>" id="login" data-login="<?php echo url('login/login'); ?>">账户登录</a>
		</div>
	</header>	

	<!-- 内容框 -->
	<div class="zy_module-content">
		<div class="login_box zhuce_box">
			<div class="zhuce_style fix">
				<a>手机注册</a>
				<a>邮箱注册</a>
				<i></i>
			</div>
			<script type="text/javascript">
				$(function(){
					$(".zy_login_box .zhuce_con>div").hide().first().show()
					var n=0;
					var w=$(".zy_login_box .zhuce_style i").width()
					$(".zy_login_box .zhuce_style a").mousedown(
						function(){
							n=$(this).index()
							$(".zy_login_box .zhuce_con>div").hide().eq(n).fadeIn()
							$(".zy_login_box .zhuce_style i").animate({left:n*w},300)
							$(this).css("color","#10805a")
							$(this).siblings().css("color","#333")
						}
					)
				})
			</script>
			<div class="zhuce_con">
				<div class="zhuce_tel">
					<form id="mobileform">
						<div>
							<label><a><img src="/yidong/public/static/index/images/web/zy_icon_iphone.png"></a><input type="text" id="mobile" name="mobile" placeholder="请填写手机号" value=""></label>
						</div>
						<div>
							<label><a><img src="/yidong/public/static/index/images/web/zy_icon_mm.png"></a><input type="password" name="password" placeholder="请输入密码"></label>
						</div>
						<div>
							<label><a><img src="/yidong/public/static/index/images/web/zy_icon_mm.png"></a><input type="password" name="password_confirm" placeholder="请确认密码"></label>
						</div>
						<div class="yzm">
							<label><a><img src="/yidong/public/static/index/images/web/zy_icon_iphone.png"></a><input type="text" name="mobilecode" placeholder="手机验证码"></label><!-- 
						 --><input id="code" class="code" data-register="<?php echo url('Login/sms'); ?>" value="获取手机验证码">
						</div>
						<h2>
							<label><input type="checkbox" id="rcheckbox"  name="">我已看过并接受<a href="/yidong/public/static/index/#" id="aaa">《用户协议》</a></label>
						</h2>
						<button id="registerBtn" class="zy_login_btn" type="button" data-register="<?php echo url('Login/insert'); ?>" data-login="<?php echo url('login/login'); ?>">注 册</button>
					</form>
				</div>
				<div class="zhuce_msg">
					<form id="emailform" method="post" >
						<div>
							<label><a><img src="/yidong/public/static/index/images/web/zy_icon_msg.png"></a><input type="text" name="email" placeholder="请填写邮箱"></label>
						</div>
						<div>
							<label><a><img src="/yidong/public/static/index/images/web/zy_icon_mm.png"></a><input type="password" name="password" placeholder="请输入密码"></label>
						</div>
						<div>
							<label><a><img src="/yidong/public/static/index/images/web/zy_icon_mm.png"></a><input type="password" name="password_confirm" placeholder="请确认密码"></label>
						</div>
						<div class="yzm">
							<label><a><img src="/yidong/public/static/index/images/web/zy_icon_msg.png"></a><input type="text" name="" placeholder="邮箱验证码"></label>
							<input  class="code" data-register="<?php echo url('Login/sms'); ?>" value="获取手机验证码">
						</div>
						<h2>
							<label><input type="checkbox" name="" >我已看过并接受<a href="/yidong/public/static/index/#" id="http">《用户协议》</a></label>
						</h2>
						<button id="eregisterBtn" class="zy_login_btn" type="button" data-register="<?php echo url('Login/insert'); ?>">注 册</button>
					</form>
				</div>
			</div>			
		</div>
		
</body>
</html>

	
<!--模板继承脚-->

<!-- js——登录 -->
<script type="text/javascript" src="/yidong/public/static/index/js/login.js"></script>