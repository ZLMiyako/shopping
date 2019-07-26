<?php /*a:3:{s:72:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\user\addr.html";i:1564022851;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1564016862;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\foot.html";i:1563950333;}*/ ?>
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
		<h1>地址管理</h1>
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
	<div class="vip_user_addr">
		<ul>
			<li class="default">
				<a href="user_addr_dizhi.html">
					<div>
						<h2>剁手党的春天</h2>
						<p>贵州大学男生6号宿舍806号</p>
					</div>
					<em></em>
				</a>
			</li>
			<li>
				<a href="user_addr_dizhi.html">
					<div>
						<h2>剁手党的春天</h2>
						<p>贵州大学男生6号宿舍806号</p>
					</div>
					<em></em>
				</a>
			</li>
		</ul>
		<h3><a href="user_addr_new.html">添加新地址</a></h3>
	</div>
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