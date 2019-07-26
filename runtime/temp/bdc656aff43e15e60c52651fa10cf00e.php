<?php /*a:1:{s:69:"E:\php\PHPTutorial\WWW\yidong\application\admin\view\login\index.html";i:1562918160;}*/ ?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">

    <title>登录</title>
    <link rel="icon" href="/yidong/public/static/admin/login/images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/yidong/public/static/admin/login/images/favicon.ico" type="image/x-icon"/>
    <link href="/yidong/public/static/admin/login/css/default.css" rel="stylesheet" type="text/css" />
    <!--必要样式-->
    <link href="/yidong/public/static/admin/login/css/styles.css" rel="stylesheet" type="text/css" />
    <link href="/yidong/public/static/admin/login/css/demo.css" rel="stylesheet" type="text/css" />
    <link href="/yidong/public/static/admin/login/css/loaders.css" rel="stylesheet" type="text/css" />
    <script src="/yidong/public/static/admin/login/js/jquery-2.1.1.min.js"></script>
	<style type="text/css">
		.layui-layer-content{
			color:#050000;
		}
	</style>
</head>
<body>
<div class='login'>

    <!--<img class="MyLogo" src="/yidong/public/static/admin/login/images/logo01.png" alt="   LOGO">-->
    <div class='login_title'>
        <span>管理员登录</span>
    </div>
  <form class="form form-horizontal" id="aform" method="post">
    <div class='login_fields'>
        <div class='login_fields__user'>
            <div class='icon'>
                <img alt="" src='/yidong/public/static/admin/login/img/user_icon_copy.png'>
            </div>
            <input name="username" placeholder='用户名' maxlength="16" class="username" type='text' autocomplete="off" value="admin"/>
            <div class='validation'>
                <img alt="" src='/yidong/public/static/admin/login/img/tick.png'>
            </div>
        </div>
        <div class='login_fields__password'>
            <div class='icon'>
                <img alt="" src='/yidong/public/static/admin/login/img/lock_icon_copy.png'>
            </div>
            <input name="password" class="passwordNumder" placeholder='密码' maxlength="16" type='text' autocomplete="off">
            <div class='validation'>
                <img alt="" src='/yidong/public/static/admin/login/img/tick.png'>
            </div>
        </div>
        <div class='login_fields__password'>
            <div class='icon'>
                <img alt="" src='/yidong/public/static/admin/login/img/key.png'>
            </div>
            <input name="code" placeholder='验证码' maxlength="4"  type='text' autocomplete="off">
            <div class='validation' style="opacity: 1; right: -5px;top: -3px;width:145px;height: 40px;">
                <img src="<?php echo url('Login/verify'); ?>" onclick="yz()" id="yzm" alt="" style="width:145px;height: 40px;"/>
            </div>
        </div>
        <div class='login_fields__submit'>
            <input type='button' value='登录' id="loginBtn" data-login="<?php echo url('Login/check'); ?>" data-index="<?php echo url('Index/index'); ?>">
        </div>
    </div>
   </form>
    <div class='success'>
    </div>
    <div class='disclaimer'>
        <p>欢迎登陆接入平台</p>
    </div>
</div>
<div class='authent'>
    <div class="loader" style="height: 60px;width: 60px;margin-left: 28px;margin-top: 40px">
        <div class="loader-inner ball-clip-rotate-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <p>认证中...</p>
</div>
<div class="OverWindows"></div>
<link href="/yidong/public/static/admin/login/layui/css/layui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/yidong/public/static/admin/login/js/jquery-ui.min.js"></script>
<script type="text/javascript" src='/yidong/public/static/admin/login/js/stopExecutionOnTimeout.js?t=1'></script>
<script src="/yidong/public/static/admin/login/layui/layui.js" type="text/javascript"></script>
<script src="/yidong/public/static/admin/login/js/Particleground.js" type="text/javascript"></script>
<script src="/yidong/public/static/admin/login/js/Treatment.js" type="text/javascript"></script>
<script src="/yidong/public/static/admin/login/js/jquery.mockjax.js" type="text/javascript"></script>
<script src="/yidong/public/static/admin/login/js/login.js" type="text/javascript"></script>

</body>
<script type="text/javascript">
	function yz(){
		$("#yzm").attr("src","<?php echo url('Login/verify'); ?>");
	}
</script>

</html>
