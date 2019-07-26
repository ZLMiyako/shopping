<?php /*a:2:{s:76:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\confirm\index.html";i:1564131305;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1564016862;}*/ ?>
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
<header class="zy_search_top_box">
	<div class="zy_title_top fix">
		<div class="one" href="javascript:" onclick="history.back();"><img src="/yidong/public/static/index/images/back_jt.png"></div>
		<h1>确认订单</h1>
	</div>
</header>	
<script>
	$('.one').click(function(){
		$.ajax({
			url: "<?php echo url('Confirm/dele'); ?>",
			data: {id:1},
			type: 'POST',
			dataType: 'json',
			success: function(msg){
				console.log(1);
			},
		});
	})
</script>
<!-- 内容框 -->
<div class="zy_module-content">
	<div class="zy_flow_confirm">
		<form>
			<div class="sh_dizhi">
				<a onclick="site('<?php echo htmlentities($site['id']); ?>')">
					<i><img src="/yidong/public/static/index/images/web/icon_position.png"></i>
					<dl>
						<dt>收货人：<span><?php echo htmlentities($site['name']); ?></span></dt>
						<dd>收货地址：<span><?php echo htmlentities($site['site']); ?></span></dd>
					</dl>
					<b><img src="/yidong/public/static/index/images/web/back_jt_w.png"></b>
				</a>
				<script type="text/javascript">
					function site(id){
						$.ajax({
						url: "<?php echo url('Site/index'); ?>",
						data: {id},
						type: 'POST',
						dataType: 'json',
						success: function(msg){
							if (msg.code == 1) {
								window.location.href="<?php echo url('Site/index',['id'=>$site['id']]); ?>";
				            }
						},
						});
					}
				</script>
			</div>
			<div class="box dingdxq">
				<div class="zy_title_con_01">
					<h2><span>订单详情<i></i></span></h2>
				</div>
				<div class="con">
					<h2>盛千辉便利店</h2>
					<?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?>
					<h3>
						<a href="goods.html">
							<i><img src="/yidong/public/uploads/<?php echo htmlentities($goods['img']); ?>"></i>
							<dl>
								<dt><?php echo htmlentities($goods['title']); ?></dt>
							</dl>
						</a>
						<p>
							<span>￥<?php echo htmlentities($goods['price']); ?></span>
							<em>X<?php echo htmlentities($goods['num']); ?></em>
						</p>
					</h3>
					<?php endforeach; endif; else: echo "" ;endif; ?> 
					<ul>
						<li class="cur">
							<a>千辉便利店配送</a>
							<p>千辉便利店会在2个小时内送到您的手中...</p>
						</li> 
					</ul>

					<script type="text/javascript">
						$(function(){
							$(".dingdxq ul li").click(
								function(){
									$(this).addClass("cur")
									$(this).siblings().removeClass("cur")
								}
							)

							$(".dingdxq .con>div p").mousedown(
								function(){
									$(".dingdxq .con>div h4").slideToggle()
									if ($(this).find("em").hasClass("xz")) {
										$(this).find("em").removeClass("xz")
										$(this).find("em").addClass("xz01")
									}else{
										$(this).find("em").addClass("xz")
										$(this).find("em").removeClass("xz01")
									}
								}
							)
						})
					</script>
				</div>
			</div>
			<div class="box other">
				<div class="zy_title_con_01">
					<h2><span>其他选项<i></i></span></h2>
				</div>
				<ul>
					<li class="fapiao">
						<div class="xiala">
							<p>开发票和缺货处理<em><img src="/yidong/public/static/index/images/web/jt_down_r.png"></em></p>
							<h4> 
								<a>
									<span>缺货处理</span>
									<label><input type="radio" name="quehuo" checked="checked">等待所有商品备齐后再发</label>
									<label><input type="radio" name="quehuo">取消订单</label>
									<label><input type="radio" name="quehuo">与店主协商</label>
								</a>
							</h4>
						</div>
					</li>
					<li class="time">
						<div class="xiala">
							<p>送货时间<em><img src="/yidong/public/static/index/images/web/jt_down_r.png"></em></p>
							<h4>
								<label><input type="radio" name="time" checked="checked"><a>送货时间不限</a></label>
								<label><input type="radio" name="time"><a>只双休日/节假日送货（工作日不用送）</a></label>
								<label><input type="radio" name="time"><a>只工作日（双休日/节假日不用送）</a></label>
							</h4>
						</div>
					</li>
					<li>
						<div class="xiala">
							<p>订单附言<em><img src="/yidong/public/static/index/images/web/jt_down_r.png"></em></p>
							<h4>
								<textarea placeholder="请输入留言"></textarea>
							</h4>
						</div>
					</li>
				</ul>
				<script type="text/javascript">
					$(function(){
							$(".zy_flow_confirm .other li>div p").mousedown(
								function(){
									$(this).siblings().slideToggle()
									if ($(this).find("em").hasClass("xz")) {
										$(this).find("em").removeClass("xz")
										$(this).find("em").addClass("xz01")
									}else{
										$(this).find("em").addClass("xz")
										$(this).find("em").removeClass("xz01")
									}
								}
							)
						})
				</script>
			</div>
			<div class="box pay_type">
				<div class="zy_title_con_01 xiala">
					<h2><span>支付方式<i></i></span><a>（必选）<b>请选择支付方式</b></a> </h2>
				</div>
				<div class="con">
					<label><input type="radio" name="pay"><img src="/yidong/public/static/index/images/web/icon_wechat.png">微信支付</label> 
				</div>
			</div>
			
			<div class="box txt">
				<p>该订单完成后，您将获得<a>250</a>积分以及价值<a>￥40.00</a>的红包</p> 
			</div>
			<div class="box total">
				<h2>
					<p>合计：<span>￥<?php echo htmlentities($totle); ?></span></p>
					<p>应付金额：<b>￥<?php echo htmlentities($totle); ?></b></p>
				</h2>
				<button type="button" onclick="order()">提交订单</button>
			</div>
			<script>
				function order(){
					$.ajax({
						url: "<?php echo url('Order/index'); ?>",
						data: {aaa:2},
						type: 'POST',
						dataType: 'json',
						success: function(msg){
							if(msg.code==1){
								window.location.href="<?php echo url('Order/index'); ?>";
							}
						},
					});
				}
			</script>
		</form>	

	</div>
	
	
	<!-- 底部 -->

	<!-- 返回顶部 -->
	<div class="go_top">
		<a class="btn_top"></a>
	</div>
	<script type="text/javascript">
        $(function(){
			window.onscroll=function(){
			var autoheight=document.body.scrollTop||document.documentElement.scrollTop;
			if(autoheight>100){
				$(".go_top").fadeIn()
				}else{
					$(".go_top").fadeOut()
				}
			}
			$(".btn_top").mousedown(
				function(){
					$("html, body").animate({"scroll-top":0},"fast");
				}
			)
		})
    </script>

	<!-- 底部导航 -->

</div>


</body>
</html>