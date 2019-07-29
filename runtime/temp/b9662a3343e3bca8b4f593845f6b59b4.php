<?php /*a:2:{s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\order\index.html";i:1564365186;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1564016862;}*/ ?>
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
		<h1>我的订单</h1>
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
<?php if(($list==null)): ?>
<!-- 购物车为空时 -->
	<div style="width: 403px;height: 100px; text-align: center; line-height: 120px; "><a href="<?php echo url('content/index'); ?>" style="color: #c53d43;">您还没有生成订单,点击可返回商品页</a></div>
<?php else: ?>
<!-- 内容框 -->
<div class="zy_module-content">	
	<div class="swiper-container vip_user_order">
		<!-- top nav -->
		<div class="order_nav dis_flex"></div>
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<ul>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$num): $mod = ($i % 2 );++$i;?>
					<li>
						<div class="vip_order_goods">
                            <h2><a href="user_order_detail.html">千辉超市<em></em></a></h2>
                            <?php if(is_array($num) || $num instanceof \think\Collection || $num instanceof \think\Paginator): $i = 0; $__LIST__ = $num;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?>
							<h3>
								<a href="user_order_detail.html">
									<i><img src="/yidong/public/uploads/<?php echo htmlentities($goods['img']); ?>"></i>
									<dl>
										<dt><?php echo htmlentities($goods['title']); ?></dt>
										<dd><em>原味</em><!-- <em>40</em> --></dd>
									</dl>
								</a>
								<p>
									<span>￥<?php echo htmlentities($goods['price']); ?>.00</span>
									<em>X<?php echo htmlentities($goods['num']); ?></em>
								</p>
                            </h3>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="total">
							<span>共<?php echo htmlentities($goods['nums']); ?>件商品实付：<a><?php echo htmlentities($goods['totle']); ?>.00元</a></span>
						</div>
						<div class="order_btn">
							<a href="user_back_order_tk.html">退款</a>
							<span>已确认</span>
						</div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
					<!-- <li>
						<div class="vip_order_goods">
							<h2><a href="user_order_detail.html">千辉超市<em></em></a></h2>
							<h3>
								<a href="user_order_detail.html">
									<i><img src="/yidong/public/static/index/images/pic02.jpg"></i>
									<dl>
										<dt>千业吐司面包1Kg半切片三明治早餐蛋糕炼奶乳糕炼奶乳</dt>
										<dd><em>原味</em></dd>
									</dl>
								</a>
								<p>
									<span>￥645.00</span>
									<em>X1</em>
								</p>
							</h3>
						</div>
						<div class="total">
							<span>共1件商品实付：<a>￥645.00元</a></span>
						</div>
						<div class="order_btn">
							<a href="user_comment_pinj.html">评价</a>
							<a href="user_comment_shaid.html">晒单</a>
							<span>已完成</span>
						</div>
					</li>
					<li>
						<div class="vip_order_goods">
							<h2><a href="user_order_detail.html">千辉超市<em></em></a></h2>
							<h3>
								<a href="user_order_detail.html">
									<i><img src="/yidong/public/static/index/images/pic05.jpg"></i>
									<dl>
										<dt>千业吐司面包1Kg半切片三明治早餐蛋糕炼奶乳糕炼奶乳</dt>
										<dd><em>原味</em></dd>
									</dl>
								</a>
								<p>
									<span>￥145.00</span>
									<em>X2</em>
								</p>
							</h3>
						</div>
						<div class="total">
							<span>共2件商品实付：<a>￥290.00元</a></span>
						</div>
						<div class="order_btn">
							<a onclick="javascript:alert('确定取消吗？')">取消订单</a>
						</div>
					</li> -->
				</ul>
				<div class="zy_fanye">
					<a href="#">上一页</a>
					<span>
						<em>1</em>/<i>2</i>
						<select>
							<option>第1页</option>
							<option>第2页</option>
						</select>
					</span>
					<a href="#">下一页</a>
				</div>
			</div> 
			<div class="swiper-slide">
				待付款
			</div>
			<div class="swiper-slide">
				待发货
			</div>
			<div class="swiper-slide">
				已成交
			</div>
		</div>
	</div>
	<script>
	    var swiper = new Swiper('.vip_user_order', {
	    	autoHeight: true, //enable auto height
	    	pagination: '.order_nav',
			paginationClickable: true,
			paginationBulletRender: function (swiper,index, className) {
			switch (index) {
			  case 0: name='全部';break; 
			  case 1: name='待付款';break;
			  case 2: name='待发货';break;
			  case 3: name='已成交';break;
			  default: name='';
			}
			      return '<a class="' + className + '">' + name + '</a>';
			  }
	    });
    </script>
</div>
<?php endif; ?>
</body>
</html>