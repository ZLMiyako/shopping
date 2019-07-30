<?php /*a:2:{s:80:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\particulars\index.html";i:1564472889;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1564016862;}*/ ?>
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
		<h1>订单详情</h1>
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
	<div class="user_order_detail">
		<div class="top_info mb6">
			<div class="status">
				<i><img src="/yidong/public/static/index/images/vip_img/vip_icon_order.png"></i>
				<dl>
					<dd>未付款&nbsp;&nbsp;&nbsp;卖家未发货</dd>
					<dd>订单号：<a><?php echo htmlentities($order_number['order_number']); ?></a></dd>
					<dd>配送费用：<a>￥0.00元</a></dd>
				</dl>
			</div>
			<div class="pay_type">
				<h2>
					<p>所选支付方式：微信支付</p>
					<p>应付款金额：<span>￥<?php echo htmlentities($totle['totle']); ?>.00元</span></p>
				</h2>
				<a href="#">去微信支付</a>
			</div>
			<div class="shou_huo">
				<h2><span>收货人姓名：<?php echo htmlentities($user['name']); ?></span><a><?php echo htmlentities($user['phone']); ?></a></h2>
				<p>详细地址：<?php echo htmlentities($user['site']); ?></p>
			</div>
			<div class="wuliu">
				<h2><span>物流信息未确认</span></h2>
				<ul>
					<li class="cur">
						<span><i></i></span>
						<p>等待发货</p>
					</li>
					<li>
						<span><i></i></span>
						<p>卖家未发货</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="goods  mb6 bgwh p_02">
			<div class="vip_order_goods">
                <h2><a href="supplier.html">颜文明体育用品</a></h2>
                <?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?>
				<h3>
					<a href="goods.html">
						<i><img src="/yidong/public/uploads/<?php echo htmlentities($goods['img']); ?>"></i>
						<dl>
							<dt><?php echo htmlentities($goods['title']); ?></dt>
							<dd><em></em></dd>
						</dl>
					</a>
					<p>
						<span>￥<?php echo htmlentities($goods['price']); ?>.00</span>
						<em>X<?php echo htmlentities($goods['num']); ?></em>
					</p>
                </h3>
                <?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="all">
				<p>商品总价：￥<?php echo htmlentities($totle['totle']); ?>.00</p>
				<p>应付金额：<a>￥<?php echo htmlentities($totle['totle']); ?>.00</a></p>
			</div>
		</div>
		<div class="foot_info bgwh p_2">
			<dl>
				<dd>配送方式：千辉配送</dd>
				<dd>支付方式：微信支付</dd>
				<dd>订单附言：麻烦尽快发货，饿！</dd>
				<dd>缺货处理：等待所有商品备齐后再发</dd>
			</dl>
		</div>
		<div class="foot_ckwl">
			<a href="<?php echo url('Logistics/index',['id'=>$order_number['id']]); ?>">查看物流信息</a>
		</div>
	</div>
</div>

</body>
</html>