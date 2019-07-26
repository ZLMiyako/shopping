<?php /*a:3:{s:71:"E:\php\PHPTutorial\WWW\yidong\application\index\view\content\index.html";i:1563160127;s:69:"E:\php\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1562739092;s:69:"E:\php\PHPTutorial\WWW\yidong\application\index\view\public\foot.html";i:1563093585;}*/ ?>
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
<header class="zy_search_top_box">
	<div class="zy_search_top fix">
		<div class="one"><a href="<?php echo url('index/index'); ?>"><img src="/yidong/public/static/index/images/back_jt.png"></a></div>
		<div class="box">
			<form action="<?php echo url('content/asearch'); ?>" method="post">
				<button style="background: none;"><img src="/yidong/public/static/index/images/icon_search.png"/ style="width: 60%; border: none;"></button>
				<input type="text" placeholder="零食点心" value="" name="keyword"/>
	   			
			</form>
		</div>
	    <div class="r shaix">
	    	<span>筛选</span>
	    </div>
	</div>
</header>
<script type="text/javascript">
	$(function(){
		$(".zy_search_top .shaix").mousedown(
			function(){
				$(".zy_shaixuanbox").show()
				$(".zy_search_top_box").hide()			
				$(".zy_module-content").hide()
			}
		)
		$(".zy_shaixuanbox .one").mousedown(
			function(){
				$(".zy_shaixuanbox").hide()
				$(".zy_search_top_box").show()		
				$(".zy_module-content").show()
			}
		)

		var h1=$(".zy_search_top_box").height();
		var h2=$(".zy_rank_box").innerHeight();

		$(window).scroll(function(){
			var s = $(document).scrollTop();
			if (s>h1) {
				$(".zy_rank_box").addClass('scroll_fix')
				$(".zy_gzttc_box").css("padding-top",h2)
			}else{
				$(".zy_rank_box").removeClass('scroll_fix')
				$(".zy_gzttc_box").css("padding-top",0)
			}
		});
	})
</script>
<!-- 筛选框 -->
<div class="zy_shaixuanbox">
	<div class="zy_title_top zy_shaix_box fix">
		<div class="one"><img src="/yidong/public/static/index/images/back_jt.png"></div>
		<h1>筛选</h1>
	</div>
	<div class="sx_con">
		<form>
			<div class="conbox">
				<h2>类别</h2>
				<select>
					<option>酸奶</option>
					<option>原味</option>
					<option>草莓</option>
				</select> 
			</div>
			<div class="conbox">
				<h2>品牌</h2>
				<select>
					<option>不限</option>
					<option>三鹿</option>
					<option>蒙牛</option>
				</select>
			</div> 
			<div class="conbox price">
				<h2>价格</h2>
				<label><input type="text" name="" value="100">~<input type="text" name="" value="400">元</label>
			</div> 
			<div class="btn">
				<button class="quex">取消</button>
				<button>完成</button>
			</div>
		</form>
	</div>
</div>

<!-- 内容框 -->
<div class="zy_module-content">
	<div class="zy_gzttc_box">
		<div class="zy_rank_box">
			<ul>
				<li class="cur"><a href="/yidong/public/static/index/#">综合</a></li>
				<li><a href="/yidong/public/static/index/#">销量</a></li>
				<li class="price"><a>价格</a><span><i class=""></i><i></i></span></li>
				<li class="type"><a href="<?php echo url('content/alist',['id'=>$id]); ?>"><img src="/yidong/public/static/index/images/web/icon_grid.png"></a><span><i></i></span></li>
			</ul>
			<script type="text/javascript">
				$(function(){
					$(".zy_rank_box .price").click(
						function(){
							if ($(".zy_rank_box .price span i:first").hasClass("on")) {
								$(".zy_rank_box .price span i:first").removeClass("on")
								$(".zy_rank_box .price span i:first").siblings().addClass("on")
							}else{
								$(".zy_rank_box .price span i:first").siblings().removeClass("on")
								$(".zy_rank_box .price span i:first").addClass("on")
							}
						}
					)
				})
			</script>
		</div>
		<div class="zy_goods_grid">
			<ul class="_picbox_w_h">
				<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$alist): $mod = ($i % 2 );++$i;?>
				<li>
					<a href="<?php echo url('details/index',['id'=>$alist['id']]); ?>"><i><img src="/yidong/public/uploads/<?php echo htmlentities($alist['img']); ?>"></i></a>
					<p><a href="<?php echo url('details/index'); ?>"><?php echo htmlentities($alist['title']); ?></a></p>
					<span><em>￥<?php echo htmlentities($alist['price']); ?></em><em style="color: #999;margin-left: 0.2rem; font-size: 12px;">点击量：<?php echo htmlentities($alist['pv']); ?></em><i onclick="javascript: alert('成功加入购物车')"></i></span>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="zy_more">
				<h2>上拉加载更多</h2>
			</div>
		</div>

	</div>
</div>


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
					<a href="/yidong/public/static/index/flow.html">
						<i><img src="/yidong/public/static/index/images/menu_icon03.png"></i>
						<span>购物车</span>
						<em>3</em>
					</a>
				</li>
				<li>
					<a href="/yidong/public/static/index/user.html">
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
