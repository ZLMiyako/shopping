<?php /*a:2:{s:78:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\logistics\index.html";i:1564478257;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1564016862;}*/ ?>
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
<body>
<header class="zy_search_top_box vip_top_box">
	<div class="zy_title_top fix">
		<div class="one" href="javascript:" onclick="history.back();"><img src="/yidong/public/static/index/images/back_jt.png"></div>
		<h1>物流详情</h1>
	    <div class="r">
	    	<span><img src="/yidong/public/static/index/images/web/zy_icon_menu.png"></span>
	    	<dl>
	    		<dt></dt>
	    		<dd><i><img src="/yidong/public/static/index/images/menu_icon01.png"></i><a href="index.html">首页</a></dd>
	    		<dd><i><img src="/yidong/public/static/index/images/menu_icon02.png"></i><a href="catalog.html">分类</a></dd>
	    		<dd><i><img src="/yidong/public/static/index/images/menu_icon03.png"></i><a href="flow.html">购物车</a></dd>
	    		<dd><i><img src="/yidong/public/static/index/images/menu_icon04.png"></i><a href="user.html">会员中心</a></dd>
	    	</dl>
	    </div>
	    <script type="text/javascript">
			$(function(){
				// $(".zy_title_top .r dl").hide()
				$(".zy_title_top .r span").mousedown(
					function(event){
						$(".zy_title_top .r dl").fadeToggle()
						event.stopPropagation();//阻止冒泡
					}
				)
				$("html,body").mousedown(
					function(){
						$(".zy_title_top .r dl").fadeOut()
					}
				)
			})
		</script>
	</div>
</header>
<div class="top_zhanwei_box"></div>	
<script type="text/javascript">
	$(function(){
		var top_h=$(".vip_top_box").height()
		$(".top_zhanwei_box").css("height",top_h)
	})
</script>
<!-- 内容框 -->
<div class="zy_module-content">	
	<div class="user_order_detail user_order_kuaidi">
		
		<div class="goods mb6 bgwh">
			<div class="zy_title_con_01">
				<h2><span>订单商品<i></i></span></h2>
			</div>
			<div class="vip_order_goods p_2">
                <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?>
				<h3>
					<a href="">
						<i><img src="/yidong/public/uploads/<?php echo htmlentities($goods['img']); ?>"></i>
						<dl>
							<dt><?php echo htmlentities($goods['title']); ?></dt>
						</dl>
					</a>
					<p>
						<span>￥<?php echo htmlentities($goods['price']); ?>.00</span>
						<em>X<?php echo htmlentities($goods['num']); ?></em>
					</p>
                </h3>
                <?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="wuliu">
			<dl>
				<!-- <dd>同城快递</dd> -->
				<dd>运单号码：<?php echo htmlentities($logistics); ?></dd>
				<dd>物流状态：已签收</dd>
			</dl>
			<h2><span>物流信息</span></h2>
			<ul>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
                    <li class="cur">
                        <span><i></i></span>
                        <p><?php echo htmlentities($list['status']); ?></p>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>

</body>
</html>