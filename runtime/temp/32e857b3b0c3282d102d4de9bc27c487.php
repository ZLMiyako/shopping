<?php /*a:3:{s:73:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\site\index.html";i:1563939544;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1564016862;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\foot.html";i:1563950333;}*/ ?>
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
		<h1>请填写收货地址</h1>
	</div>
</header>	

<!-- 内容框 -->
<div class="zy_module-content">
	<div class="zy_flow_dizhi">
		<div class="box dizhi_ok">
			<form>
				<h2><input id="name" type="text" name="" value="<?php echo htmlentities($list['name']); ?>"></h2>
				<h2><input id="phone" type="text" name="" value="<?php echo htmlentities($list['phone']); ?>"></h2>
				<!-- <div class="pick-area pick-area1" name="贵州省/贵阳市/南明区"></div> -->
				<h2><input id="site" type="text" name="" value="<?php echo htmlentities($list['site']); ?>"></h2>
				<h2><input id="email" type="text" name="" value="<?php echo htmlentities($list['email']); ?>"></h2>
				<div class="dizhi_btn">
					<button type="button" onclick="site_update('<?php echo htmlentities($list['id']); ?>')">配送至这个地址</button>
					<button type="button" onclick="site_delete()">删除这个地址</button>
				</div>
			</form>
			<script type="text/javascript">
				function site_update(id){
					var name = $('#name').val();
					var phone = $('#phone').val();
					var site = $('#site').val();
					var email = $('#email').val();
					$.ajax({
						url: "<?php echo url('Site/update'); ?>",
						data: {id:id,name:name,phone:phone,site:site,email:email},
						type: 'POST',
						dataType: 'json',
						success: function(msg){
							if (msg.code == 1) {
								console.log(1);
								window.location.href="<?php echo url('Confirm/index'); ?>";
				            }
						},
					});
				}
				function site_delete(){
					
				}
			</script>
		</div>
		<div class="box dizhi_new">
			<form>
				<h2><input id="newname" type="text" name="" placeholder="收货人姓名"></h2>
				<h2><input id="newphone" type="text" name="" placeholder="手机号（必填）"></h2>
				<!-- <div class="pick-area pick-area1" name=""></div> -->
				<h2><input id="newsite" type="text" name="" placeholder="详细地址"></h2>
				<h2><input id="newemail" type="text" name="" placeholder="电子邮件地址"></h2>
				<button type="button" onclick="insert()">新增收货地址</button>
			</form>
			<script type="text/javascript">
				function insert(){
					var name = $('#newname').val();
					var phone = $('#newphone').val();
					var site = $('#newsite').val();
					var email = $('#newemail').val();
					if(name!=""&&phone!=""&&site!=""&&email!=""){
						$.ajax({
						url: "<?php echo url('Site/insert'); ?>",
						data: {name:name,phone:phone,site:site,email:email},
						type: 'POST',
						dataType: 'json',
						success: function(msg){
							if (msg.code == 1) {
								console.log(1);
								window.location.href="<?php echo url('Confirm/index'); ?>";
				            }
						},
					});
					}else{
						console.log("所填内容不能为空");
					}
				}
			</script>
		</div>
	</div>
	<!-- 地区选择 貌似js引用要放在后面-->
	<script type="text/javascript" src="/yidong/public/static/index/js/pick-pcc.min.1.0.2.js"></script>
	<script type="text/javascript">
	    $(".pick-area1").pickArea({
	    	"display":"block",
	    	"hoverColor":"#999",//背景颜色
	    	"fontWeight":"normal",
	        // "width":"420",//设置“省市县”文本边框的宽度
	        // "height":"48",//设置“省市县”文本边框的高度
	        "maxHeight":"300px",
	    })

	</script>
	
	
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