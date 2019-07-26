<?php /*a:3:{s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\index\index.html";i:1563523343;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1564016862;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\foot.html";i:1563950333;}*/ ?>
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

<!--模板继承身体-->

<body>	

<!--头部-->
<header class="module-layer">
    <div class="module-layer-content">
    	<div class="module-layer-bg"></div>
    	<div class="search-box-cover"></div>
        <p class="layer-logo"><img src="/yidong/public/static/index/images/logo.png"></p>
        <h1 class="layer-head-name">
        	<div class="pr search-box">
        		<img class="shop-search" src="/yidong/public/static/index/images/icon_search.png"/>
        		<input id="shop-input" type="text" placeholder="零食" value="" />
        	</div>
        </h1>
        <?php if(app('session')->get('msql')): ?>
        <p class="layer-user"><a href="#"><?php echo htmlentities(app('session')->get('msql.mobile')); ?></a></p>
        <?php else: ?>
        <p class="layer-login"><a href="<?php echo url('Login/login'); ?>">登录</a></p>
        <?php endif; ?>
    </div>
</header>
<script type="text/javascript" charset="utf-8">
	$(function() {    
		var $body = $('body');  
	   	var setCoverOpacity = function() {  
	        $body.find('.search-box-cover').css({  
	            opacity: ((($body.scrollTop() / 150) > 0.9) ? 0.9 : ($body.scrollTop() / 150))  
	        })  
	    }  
	//初始化设置背景透明度  
	    setCoverOpacity();  
	//监听滚动条事件，改变透明度  
	    $(window).scroll(function() {  
	        setCoverOpacity();  
	    });  
	});
</script>

<div class="module-content">
	<!--banner图-->
    <div class="swiper-container banner">
		<ul class="swiper-wrapper">
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
			<li class="swiper-slide">
				<img src="/yidong/public/uploads/<?php echo htmlentities((isset($list['img']) && ($list['img'] !== '')?$list['img']:'images/banner01.jpg')); ?>" style="height: 233px;">
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<div class="swiper-pagination sp01"></div>
		<script>
		    var swiper = new Swiper('.banner', {
		        pagination: '.sp01',
		        paginationClickable: true,
		        autoplay:"3000",
		        loop:"ture",
		        speed:500,
		        autoplayDisableOnInteraction : false,
		    });
	    </script>
    </div>

    <!-- 图标导航icon -->
    <div class="swiper-container nav_iconbox">
	   	<div class="swiper-wrapper">
	   		<!-- 每个ul有8个li，不能多于8个 -->
	   		<?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
			<ul class="swiper-slide"> 
				<?php if(is_array($nav['cate']) || $nav['cate'] instanceof \think\Collection || $nav['cate'] instanceof \think\Paginator): $i = 0; $__LIST__ = $nav['cate'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anav): $mod = ($i % 2 );++$i;?>
		    	<li>
		    		<a href="<?php echo url($anav['url'],['id'=>$anav['id']]); ?>">
		    			<img src="/yidong/public/uploads/<?php echo htmlentities($anav['img']); ?>">
		    			<span><?php echo htmlentities($anav['nav']); ?></span>
		    		</a>
		    	</li>
		 		<?php endforeach; endif; else: echo "" ;endif; ?>
		    </ul>
		    <?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="swiper-pagination icon01"></div>
		<script>
		    var swiper = new Swiper('.nav_iconbox', {
		        pagination: '.icon01',
		        paginationClickable: true,
		        speed:500,
		        autoplayDisableOnInteraction : false,
		    });
	    </script>
    </div>

    <!-- 商城公告和商家入驻口 -->
    <div class="news_sj_dxs_box bgwh mb6">
    	<div class="scrollnews">
    		<span><a href="<?php echo url('news/index'); ?>"><img src="/yidong/public/static/index/images/news_tit.png"></a></span>
    		<ul>
    			<?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anews): $mod = ($i % 2 );++$i;?>
    			<li><a href="<?php echo url('news/newscontent',['id'=>$anews['id']]); ?>"><?php echo htmlentities($anews['title']); ?></a></li>
    			<?php endforeach; endif; else: echo "" ;endif; ?>
    		</ul>
    		<script type="text/javascript">
                $(document).ready(function(){
                    //滚动文字
                    function runtxt(){
                        $(".scrollnews ul").animate({marginTop:"-.4rem"},300,
                            function(){
                                $(".scrollnews ul li:last").after($(".scrollnews ul li:first"))
                                $(".scrollnews ul").css("margin-top",0)
                            }
                        )
                    }   
                    $(".scrollnews ul li a").mouseenter(
                        function(){
                            clearInterval(timer)
                        }
                    )
                    $(".scrollnews ul li a").mouseleave(
                        function(){
                            timer=setInterval(runtxt,4000)
                        }
                    )
                    timer=setInterval(runtxt,4000)
                })
            </script>
    	</div>
    	<div class="sj_dxs_box">
    		<h2>
    			<a href="/yidong/public/static/index/apply_index.html">
    				<img src="/yidong/public/static/index/images/bg_sj.jpg">
    			</a>
    		</h2>
    	</div>
    </div>

    <!-- 热销品类 -->
    <div class="yh_select bgwh mb6">
		<div class="index_title rel">
			<h1>
				<a>热销品类</a>
			</h1>
			<i></i>
		</div>
		<div class="yh_goodsbox fix">
			<div class="l">
				<div class="swiper-container yh_wrapper">
					<ul class="swiper-wrapper">
						<?php if(is_array($sell) || $sell instanceof \think\Collection || $sell instanceof \think\Paginator): $i = 0; $__LIST__ = $sell;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$asell): $mod = ($i % 2 );++$i;?>
						<li class="swiper-slide">
							<a href="<?php echo url('details/index',['id'=>$asell['id']]); ?>">
								<img src="/yidong/public/uploads/<?php echo htmlentities($asell['img']); ?>">
								<p><?php echo htmlentities($asell['title']); ?></p>
	            				<span><!-- <em>￥699.00</em> --><i>￥<?php echo htmlentities($asell['price']); ?></i></span>
							</a>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<div class="swiper-pagination sp02"></div>
					<script>
					    var swiper = new Swiper('.yh_wrapper', {
					        pagination: '.sp02',
					        paginationClickable: true,
					        autoplay:"3000",
					        loop:"ture",
					        speed:500,
					        autoplayDisableOnInteraction : false,
					    });
				    </script>
			    </div>
		    </div>

		    <div class="two r">
		    	<h2>
		    		<a href="/yidong/public/static/index/search_gzttc.html"><img src="/yidong/public/static/index/images/index_ad_pic(2).jpg"></a>
		    	</h2>
		    	<h3>
		    		<a href="/yidong/public/static/index/search_gzttc.html"><img src="/yidong/public/static/index/images/index_ad_pic(3).jpg"></a>
		    	</h3>
		    	<h4>
		    		<a href="/yidong/public/static/index/search_gzttc.html"><img src="/yidong/public/static/index/images/index_ad_pic(6).jpg"></a>
		    	</h4>
		    </div>
		</div>
	</div>

	<!-- 广告条 -->
    <div class="ad_picbox">
		<ul class="swiper-wrapper">
			<?php if(is_array($rate1) || $rate1 instanceof \think\Collection || $rate1 instanceof \think\Paginator): $i = 0; $__LIST__ = $rate1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arate): $mod = ($i % 2 );++$i;?>
			<li class="swiper-slide">
				<a href="/yidong/public/static/index/#"><img style="height:82px"src="/yidong/public/uploads/<?php echo htmlentities($arate['img']); ?>"></a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<script>
		    var swiper = new Swiper('.ad_picbox', {
		        autoplay:"4000",
		        effect:"fade",
		        loop:"ture",
		        speed:700,
		        autoplayDisableOnInteraction : false,
		    });
	    </script>
    </div>

    <!-- 新品推荐 -->
    <div class="new_goods bgwh mb6">
    	<div class="index_title rel">
			<h1>
				<a>新品推荐</a>
			</h1>
			<i></i>
		</div>
		<div class="nine_goods_pic">
			<ul>
				<?php if(is_array($newproduct) || $newproduct instanceof \think\Collection || $newproduct instanceof \think\Paginator): $i = 0; $__LIST__ = $newproduct;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$anewproduct): $mod = ($i % 2 );++$i;?>
				<li>
					<a href="<?php echo url('details/index',['id'=>$anewproduct['id']]); ?>">
						<img src="/yidong/public/uploads/<?php echo htmlentities($anewproduct['img']); ?>">
	            		<p><?php echo htmlentities($anewproduct['title']); ?></p>
	            		<span>￥<?php echo htmlentities($anewproduct['price']); ?></span>
					</a>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="btn_link">
				<a href="<?php echo url('content/index',['id'=>1]); ?>">更多新品></a>
			</div>
		</div>
		<!-- 设置图片宽高相等，保持布局统一性 -->
        <script type="text/javascript">
        	$(function(){
        		var w=$(".nine_goods_pic ul li img").width()
        		$(".nine_goods_pic ul li img").css("height",w)
        		
        	})
        </script>
    </div>


	<!-- 积分专区 -->
    <!--<div class="hot_goods good_stores bgwh mb6">
		<div class="index_title rel">
			<h1>
				<a>积分专区</a>
			</h1>
			<i></i>
		</div> 
    </div>-->
	 <!-- 积分专区 -->
    <!--<div class="hot_goods pj_goods_box bgwh mb6"> 
		<div class="hot_goods_pic pj_goods">
	        <ul class="swiper-wrapper">
	            <li class="swiper-slide">
	            	<a href="/yidong/public/static/index/goods.html">
	            		<img src="/yidong/public/static/index/images/pic07.jpg">
	            		<p>黑人牙膏超白茶家庭套装14支美白去黄去1517104正品</p>
	            		<span>4200.00分</span>
	            	</a>
	            </li>
	            <li class="swiper-slide">
	            	<a href="/yidong/public/static/index/goods.html">
	            		<img src="/yidong/public/static/index/images/pic04.jpg">
	            		<p>千业吐司面包1Kg半切片三明治早餐蛋糕炼奶乳</p>
	            		<span>4200.00分</span>
	            	</a>
	            </li>
	            <li class="swiper-slide">
	            	<a href="/yidong/public/static/index/goods.html">
	            		<img src="/yidong/public/static/index/images/pic01.jpg">
	            		<p>耐克NIKE体育用品男帽女帽 2018新款网球</p>
	            		<span>4200.00分</span>
	            	</a>
	            </li>
	            <li class="swiper-slide">
	            	<a href="/yidong/public/static/index/goods.html">
	            		<img src="/yidong/public/static/index/images/pic07.jpg">
	            		<p>黑人牙膏超白茶家庭套装14支美白去黄去1517104正品</p>
	            		<span>4200.00分</span>
	            	</a>
	            </li>
	            <li class="swiper-slide">
	            	<a href="/yidong/public/static/index/goods.html">
	            		<img src="/yidong/public/static/index/images/pic04.jpg">
	            		<p>耐克NIKE体育用品男帽女帽 2018新款网球</p>
	            		<span>4200.00分</span>
	            	</a>
	            </li>
	            <li class="swiper-slide">
	            	<a href="/yidong/public/static/index/goods.html">
	            		<img src="/yidong/public/static/index/images/pic05.jpg">
	            		<p>innisfree/悦诗风吟绿茶精萃保湿洁面乳</p>
	            		<span>4200.00分</span>
	            	</a>
	            </li>
	            <li class="swiper-slide">
	            	<a href="/yidong/public/static/index/goods.html">
	            		<img src="/yidong/public/static/index/images/pic07.jpg">
	            		<p>黑人牙膏超白茶家庭套装14支美白去黄去1517104正品</p>
	            		<span>4200.00分</span>
	            	</a>
	            </li>
	        </ul>-->
	        <!-- 设置图片宽高相等，保持布局统一性 -->
	        <!--<script type="text/javascript">
	        	$(function(){
	        		var w=$(".pj_goods ul li img").width()
	        		$(".pj_goods ul li img").css("height",w)
	        		
	        	})
	        </script>
	    </div>-->
	    <!-- Initialize Swiper -->
	    <!--<script>
	    var swiper = new Swiper('.pj_goods', {
	        slidesPerView: 3.5,
	        paginationClickable: true,
	        spaceBetween: 10,
	        autoplay:2500,
	        autoplayDisableOnInteraction : false,
	    });
	    </script>
    </div>-->


	<!-- 广告条 -->
    <div class="ad_picbox">
		<ul class="swiper-wrapper">
			<?php if(is_array($rate2) || $rate2 instanceof \think\Collection || $rate2 instanceof \think\Paginator): $i = 0; $__LIST__ = $rate2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arate): $mod = ($i % 2 );++$i;?>
			<li class="swiper-slide">
				<a href="/yidong/public/static/index/#"><img style="height:82px"src="/yidong/public/uploads/<?php echo htmlentities($arate['img']); ?>"></a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<script>
		    var swiper = new Swiper('.ad_picbox', {
		        autoplay:"4000",
		        effect:"fade",
		        loop:"ture",
		        speed:700,
		        autoplayDisableOnInteraction : false,
		    });
	    </script>
    </div>
	<!--------------------------------------->
   			 <!-- 1 - 3 导航 -->
    <!--------------------------------------->
    <div class="sy_goods_box">
	    <div class="swiper-container goods_box01 bgwh mb6">
			<!-- 栏目 栏目 -->
			<div class="sy_my_pagetion my_page01"></div>
			
			<div class="swiper-wrapper">
				<?php if(is_array($more1) || $more1 instanceof \think\Collection || $more1 instanceof \think\Paginator): $i = 0; $__LIST__ = $more1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$amore): $mod = ($i % 2 );++$i;?>
				<div class="swiper-slide nine_goods_pic">
					<ul>
						<?php if(is_array($amore['m']) || $amore['m'] instanceof \think\Collection || $amore['m'] instanceof \think\Paginator): $i = 0; $__LIST__ = $amore['m'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?>
						<li>
							<a href="<?php echo url('details/index',['id'=>$pro['id']]); ?>">
								<img src="/yidong/public/uploads/<?php echo htmlentities($pro['img']); ?>">
			            		<p><?php echo htmlentities($pro['title']); ?></p>
			            		<span>￥<?php echo htmlentities($pro['price']); ?> <em style="color: #999; font-size: 10px; float: right;">购买量：<?php echo htmlentities($pro['pv']); ?></em></span>
							</a>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<div class="btn_link">
						<a href="<?php echo url('content/index',['id'=>$amore['id']]); ?>">查看更多></a>
					</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			
		</div>
		<script>
		    var swiper = new Swiper('.goods_box01', {
		    	autoHeight: true, //enable auto height
		    	pagination: '.my_page01',
				paginationClickable: true,
				paginationBulletRender: function (swiper,index, className) {
				switch (index) {
				  case 0: name='饮料专区';break;
				  case 1: name='休闲零食';break;
				  case 2: name='新鲜水果';break;
				  default: name='';
				}
				      return '<a class="' + className + '">' + name + '</a>';
				  }
		    });
	    </script>
    </div>
    
   <!--------------------------------------->
   			 <!-- 4 - 6 导航 -->
    <!--------------------------------------->
	<div class="sy_goods_box">
	    <div class="swiper-container goods_box02 bgwh mb6">
			<!-- 栏目 栏目 -->
			<div class="sy_my_pagetion my_page02"></div>
			<div class="swiper-wrapper">
				
				<?php if(is_array($more2) || $more2 instanceof \think\Collection || $more2 instanceof \think\Paginator): $i = 0; $__LIST__ = $more2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$amore): $mod = ($i % 2 );++$i;?>
				<div class="swiper-slide nine_goods_pic">
					<ul>
						<?php if(is_array($amore['m']) || $amore['m'] instanceof \think\Collection || $amore['m'] instanceof \think\Paginator): $i = 0; $__LIST__ = $amore['m'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?>
						<li>
							<a href="<?php echo url('details/index',['id'=>$pro['id']]); ?>">
								<img src="/yidong/public/uploads/<?php echo htmlentities($pro['img']); ?>">
			            		<p><?php echo htmlentities($pro['title']); ?></p>
			            		<span>￥<?php echo htmlentities($pro['price']); ?> <em style="color: #999; font-size: 10px; float: right;">购买量：<?php echo htmlentities($pro['pv']); ?></em></span>
							</a>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<div class="btn_link">
						<a href="<?php echo url('content/index',['id'=>$amore['id']]); ?>">查看更多></a>
					</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<script>
		    var swiper = new Swiper('.goods_box02', {
		    	autoHeight: true, //enable auto height
		    	pagination: '.my_page02',
				paginationClickable: true,
				paginationBulletRender: function (swiper,index, className) {
				switch (index) {
				  case 0: name='散称零食';break;
				  case 1: name='方便面';break;
				  case 2: name='酒水专区';break;
				  default: name='';
				}
				      return '<a class="' + className + '">' + name + '</a>';
				  }
		    });
	    </script>
	</div>

	<!--------------------------------------->
   			 <!-- 7 - 9 导航 -->
    <!--------------------------------------->
	<div class="sy_goods_box">
	    <div class="swiper-container goods_box03 bgwh mb6">
			<!-- 栏目 栏目 -->
			<div class="sy_my_pagetion my_page03"></div>
			<div class="swiper-wrapper">

				<?php if(is_array($more3) || $more3 instanceof \think\Collection || $more3 instanceof \think\Paginator): $i = 0; $__LIST__ = $more3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$amore): $mod = ($i % 2 );++$i;?>
				<div class="swiper-slide nine_goods_pic">
					<ul>
						<?php if(is_array($amore['m']) || $amore['m'] instanceof \think\Collection || $amore['m'] instanceof \think\Paginator): $i = 0; $__LIST__ = $amore['m'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?>
						<li>
							<a href="<?php echo url('details/index',['id'=>$pro['id']]); ?>">
								<img src="/yidong/public/uploads/<?php echo htmlentities($pro['img']); ?>">
			            		<p><?php echo htmlentities($pro['title']); ?></p>
			            		<span>￥<?php echo htmlentities($pro['price']); ?> <em style="color: #999; font-size: 10px; float: right;">购买量：<?php echo htmlentities($pro['pv']); ?></em></span>
							</a>
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<div class="btn_link">
						<a href="<?php echo url('content/index',['id'=>$amore['id']]); ?>">查看更多></a>
					</div>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				

			</div>
		</div>
		<script>
		    var swiper = new Swiper('.goods_box03', {
		    	autoHeight: true, //enable auto height
		    	pagination: '.my_page03',
				paginationClickable: true,
				paginationBulletRender: function (swiper,index, className) {
				switch (index) {
				  case 0: name='冲调食品';break;
				  case 1: name='茗茶';break;
				  case 2: name='休闲零食';break;
				  default: name='';
				}
				      return '<a class="' + className + '">' + name + '</a>';
				  }
		    });
	    </script>
	</div>

	
	<!-- 猜你喜欢 -->
	<div class="maybe_u_like">
		<div class="index_title rel">
			<h1>
				<a>精选推荐</a>
			</h1>
			<i></i>
		</div>
		<ul>
			<?php if(is_array($boutique) || $boutique instanceof \think\Collection || $boutique instanceof \think\Paginator): $i = 0; $__LIST__ = $boutique;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aboutique): $mod = ($i % 2 );++$i;?>
			<li>
				<a href="<?php echo url('details/index',['id'=>$aboutique['id']]); ?>">
            		<i><img src="/yidong/public/uploads/<?php echo htmlentities($aboutique['img']); ?>"></i>
            		<p><?php echo htmlentities($aboutique['title']); ?></p>
            		<span>￥<?php echo htmlentities($aboutique['price']); ?></span>
            	</a>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>

		<!-- 设置图片宽高相等，保持布局统一性 -->
		<script type="text/javascript">
			$(function(){
	        		var w=$(".maybe_u_like ul li i").width()
	        		$(".maybe_u_like ul li i").css("height",w)
	        		
	        	})
		</script>
		<div class="zy_more">
			<h2>加载更多···</h2>
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
