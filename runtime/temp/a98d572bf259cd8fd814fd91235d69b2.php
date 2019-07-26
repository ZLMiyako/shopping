<?php /*a:3:{s:76:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\confirm\index.html";i:1563864279;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1564016862;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\foot.html";i:1563950333;}*/ ?>
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
								<dd><em>原味</em></dd>
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
				<button>提交订单</button>
			</div>
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
<!--模板继承脚-->
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

<!-- 底部 -->
	<div class="footer_box">
		<div class="footer">
			<h2>
				<?php if(app('session')->get('msql')): ?>
				<a href="<?php echo url('index/index'); ?>">首页</a>
				<a href="<?php echo url('index/esc'); ?>">退出</a>
				<?php else: ?>
				<a href="<?php echo url('login/login'); ?>">登录</a><!-- 
			 --><a href="<?php echo url('login/register'); ?>">注册</a><!--  
			 --><a href="<?php echo url('index/index'); ?>">首页</a>
			 	<?php endif; ?>
			</h2>
			<h3>
				<span><a href="/yidong/public/static/index/about.html">关于我们</a></span>
				<span><a href="/yidong/public/static/index/about.html">购物指南</a></span>
				<span><a href="/yidong/public/static/index/about.html">支付方式</a></span>
				<span><a href="/yidong/public/static/index/about.html">售后服务</a></span>
			</h3>
			<div class="txt">
				<p>Copyright © 2019  贵阳花溪盛千辉便利店</p>
				<p>联系地址：贵州省贵阳市花溪区</p>
				<p>全国服务热线:0851-8385-9148 &nbsp;&nbsp;&nbsp;技术支持：<a href="/yidong/public/static/index/https://www.wangid.com" target="blank" style="color: #999;">WangID驰通网络</a>
				</p>
			</div>
		</div>
	</div>

		<!-- 底部导航 -->
		<div class="foot_menu">
			<ul>
				<li>
					<a href="<?php echo url('index/index'); ?>">
						<i><img src="/yidong/public/static/index/images/menu_icon01.png"></i>
						<span>首 页</span>
					</a>
				</li>
				<li>
					<a href="<?php echo url('catalog/index'); ?>">
						<i><img src="/yidong/public/static/index/images/menu_icon02.png"></i>
						<span>分 类</span>
					</a>
				</li>
				<li class="gwc">
					<a href="<?php echo url('Shop/index'); ?>">
						<i><img src="/yidong/public/static/index/images/menu_icon03.png"></i>
						<span>购物车</span>
						<em><?php echo htmlentities($count['count']); ?></em>
					</a>
				</li>
				<li>
					<a href="<?php echo url('User/index'); ?>">
						<i><img src="/yidong/public/static/index/images/menu_icon04.png"></i>
						<span>我 的</span>
					</a>
				</li>
			</ul>
		</div>		
	</div>
</div>
	<!-- 搜索框 -->
<div class="search_bomb_box">
	<div class="search_top fix">
		<a><img src="/yidong/public/static/index/images/back_jt.png" ></a>
		<div>
			<form action="<?php echo url('content/asearch'); ?>" method="post"><!-- 
				<select>
					<option>商品</option>
					<option>店铺</option>
				</select>
			 --><input type="text" name="keyword" placeholder="零食"><!-- 
			 --><button type="submit" id="search"><img src="/yidong/public/static/index/images/icon_search.png"></button>
			</form>
		</div>
	</div>
	<div class="search_txt">
		<h2>热门搜索</h2>
		<ul>
			<?php if(is_array($search) || $search instanceof \think\Collection || $search instanceof \think\Paginator): $i = 0; $__LIST__ = $search;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$asech): $mod = ($i % 2 );++$i;?>
			<li><a href="<?php echo url('details/index',['id'=>$asech['id']]); ?>"><?php echo htmlentities($asech['name']); ?></a></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$(".search-box").mousedown(
			function(){
				$(".search_bomb_box").show()
				$(".module-layer").hide()			
				$(".module-content").hide()
			}
		)
		$(".search_bomb_box .search_top>a").mousedown(
			function(){
				$(".search_bomb_box").hide()
				$(".module-layer").show()		
				$(".module-content").show()
			}
		)
		
			
		
			
		
	})
</script>


</body>
</html>