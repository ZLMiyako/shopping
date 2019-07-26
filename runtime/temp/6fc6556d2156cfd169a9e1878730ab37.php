<?php /*a:1:{s:76:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\catalog\index.html";i:1562922791;}*/ ?>
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
<link rel="stylesheet" type="text/css" href="/yidong/public/static/index/css/catalog.css">

<!-- js -->
<script type="text/javascript" src="/yidong/public/static/index/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/yidong/public/static/index/js/swiper.min.js"></script>
<script type="text/javascript" src="/yidong/public/static/index/js/jquery.lazyload.min.js"></script><!-- 懒加载js -->

</head>
<body>
<header class="zy_search_top_box">
	<div class="zy_search_top fix">
		<div class="one" href="/yidong/public/static/index/javascript:" onclick="history.back();"><img src="/yidong/public/static/index/images/back_jt.png"></div>
		<div class="box">
			<span><img src="/yidong/public/static/index/images/icon_search.png"/></span>
		    <input type="text" placeholder="零食点心" value="" />
	    </div>
	    <div class="r">
	    	<span>分类</span>
	    	<dl>
	    		<dt></dt>
	    		<dd><a href="/yidong/public/static/index/catalog.html">分类</a></dd> 
	    	</dl>
	    </div>
	    <script type="text/javascript">
			$(function(){
				$(".zy_search_top .r span").mousedown(
					function(event){
						$(".zy_search_top .r dl").fadeToggle()
						event.stopPropagation();//阻止冒泡
					}
				)
				$("html,body").mousedown(
					function(){
						$(".zy_search_top .r dl").fadeOut()
					}
				)
			})
		</script>
	</div>
</header>	

<!-- 内容框 -->
<div class="zy_module-content">
	<!-- 左边分类栏目 ps：l_left .l_right最好不要用div包裹起不然会有些小问题 -->
	<div class="l_left" id="con_left">
	    <!--标题-->
	    <ul class="job_sub" id="scroller1">
	        <li class="off" data-cataid="1"><a href="/yidong/public/static/index/javascript:void(0)">零食点心</a></li>
			<li data-cataid="2" class=""><a href="/yidong/public/static/index/javascript:void(0)">酒水</a></li>
			<li data-cataid="3" class=""><a href="/yidong/public/static/index/javascript:void(0)">新鲜水果</a></li>
			<li data-cataid="4" class=""><a href="/yidong/public/static/index/javascript:void(0)">生活用品</a></li>
			<li data-cataid="5" class=""><a href="/yidong/public/static/index/javascript:void(0)">体育用品</a></li>
			<li data-cataid="6" class=""><a href="/yidong/public/static/index/javascript:void(0)">文具</a></li>
			<li data-cataid="7" class=""><a href="/yidong/public/static/index/javascript:void(0)">积分专区</a></li>
		</ul>
	</div>
	<!-- 设置 .l-left .l_right 的top值-->
	<script type="text/javascript">
		$(function(){
			var h=$(".zy_search_top_box").height();
			$("#con_left,#con_right").css("top",h);
		})
	</script>
	<!-- content 右边产品图-->
	<div class="l_right" id="con_right">
	    <div class="rightBox" id="scroller" >
			<!-- 二级  -->
			<div class="fr_ite fr_ite_1" data-cataid="1">
				<!-- 二级数据显示 -->
				<div class="sub_ites">
					<span>零食点心</span>
				</div>
				<!-- 三级显示 -->						
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	        </div>

	        <div class="fr_ite fr_ite_2" data-cataid="2">
				<!-- 二级数据显示 -->
				<div class="sub_ites">
					<span>酒水</span>
				</div>
				<!-- 三级显示 -->						
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>啤酒</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>白酒</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>红酒</span>
	                    </a>
	                </li>
	            </ul>
	        </div>

	        <div class="fr_ite fr_ite_3" data-cataid="3">
				<!-- 二级数据显示 -->
				<div class="sub_ites">
					<span>新鲜水果</span>
				</div>
				<!-- 三级显示 -->						
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	        </div>

	        <div class="fr_ite fr_ite_10" data-cataid="10">
				<!-- 二级数据显示 -->
				<div class="sub_ites">
					<span>标题</span>
				</div>
				<!-- 三级显示 -->						
	            <ul>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                       <img class="img_lazy" data-original="/yidong/public/static/index/images/pic02.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典篮球鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic01.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典跑步鞋</span>
	                    </a>
	                </li>
	                <li>
	                	<a href="/yidong/public/static/index/category.html">
	                        <img class="img_lazy" data-original="/yidong/public/static/index/images/pic08.jpg" src="/yidong/public/static/index/images/loaderror.jpg"><br>
	                        <span>经典休闲鞋</span>
	                    </a>
	                </li>
	            </ul>
	        </div>
	        <!-- 二级end -->
			

	    </div>
	    <!-- rightBox -->
	</div>
	<!-- content end -->
		
		
	<!-- 底部导航 -->
	<div class="foot_menu">
		<ul>
			<li>
				<a href="/yidong/public/static/index/index.html">
					<i><img src="/yidong/public/static/index/images/menu_icon01.png"></i>
					<span>首 页</span>
				</a>
			</li>
			<li class="cur">
				<a href="/yidong/public/static/index/catalog.html">
					<i><img src="/yidong/public/static/index/images/menu_icon02_r.png"></i>
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

<!-- 搜索框 -->
<div class="search_bomb_box zy_search_bomb_box">
	<div class="search_top fix">
		<a><img src="/yidong/public/static/index/images/back_jt.png"></a>
		<form>
			<div>
				<span><img src="/yidong/public/static/index/images/icon_search.png"></span>
				<input type="text" name="" placeholder="精品零食">
			</div>
			<button type="submit">搜索</button>
		</form>
	</div>
	<div class="search_txt">
		<h2>热门搜索</h2>
		<ul>
			<li><a href="/yidong/public/static/index/category.html">雪花啤酒</a></li>
			<li><a href="/yidong/public/static/index/category.html">考试装用笔</a></li>
			<li><a href="/yidong/public/static/index/category.html">洗发水</a></li>
			<li><a href="/yidong/public/static/index/category.html">面包</a></li>
			<li><a href="/yidong/public/static/index/category.html">葡萄干</a></li>
			<li><a href="/yidong/public/static/index/category.html">饮料</a></li>
			<li><a href="/yidong/public/static/index/category.html">茶叶</a></li> 
		</ul>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$(".zy_search_top .box").mousedown(
			function(){
				$(".search_bomb_box").show()
				$(".zy_search_top_box").hide()			
				$(".zy_module-content").hide()
			}
		)
		$(".search_bomb_box .search_top>a").mousedown(
			function(){
				$(".search_bomb_box").hide()
				$(".zy_search_top_box").show()		
				$(".zy_module-content").show()
			}
		)
	})
</script>

<!-- 分类滑动 js 为了不影响其他js的正常，这几个放在最低下-->
<script type="text/javascript" src="/yidong/public/static/index/js/iscroll.js"></script>
<script type="text/javascript">
	var myScroll,myScrollri;
	var $ulLeft;var cataId = 0;
	
	function pullUpAction () {
		setTimeout(function () {
			myScrollri.refresh();
		}, 500);
	}
	
	function init_left_li(){
		var total_hei = $ulLeft.height();//总高度
		var li_height = $ulLeft.find("li").height();//单个li高度
		var li_num = $ulLeft.find("li").length;//个数
		console.log($ulLeft.find(".off").offset().top);
	}
	/**
	 * 初始化iScroll控件
	 */
	function loaded() {
		$ulLeft = $("#con_left");
		myScroll = new IScroll("#con_left",{
			mouseWheel: true,
			click: true,
			preventDefault: false,
			preventDefaultException: { tagName: /^(INPUT|TEXTAREA|BUTTON|SELECT|A)$/ }
		})
		myScrollri = new IScroll("#con_right",{
			mouseWheel: true, click: true
		})
		myScrollri.on("scrollStart",function(){
			pullUpAction();
		});
		myScrollri.on("scroll",function(){
			pullUpAction();
		});
		myScrollri.on("scrollEnd",function(){
			$('.fr_ite_'+cataId).find("img").lazyload({
			   threshold: 200
			}).on('load', function() {
				 pullUpAction();
		    });
		});
		$('.job_sub li').eq(0).click();
	}
	//初始化绑定iScroll控件 
	document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
	document.addEventListener('DOMContentLoaded', loaded, false);
	
   /* 切换内容*/
   $(function(){
  	$('.job_sub li').click(function(){
        $(this).addClass('off').siblings().removeClass('off');
        var str = "#con_left li:nth-child("+($(this).index()+1)+")";
        setTimeout(function () {
        	myScroll.scrollToElement(document.querySelector(str));
        }, 300);
        cataId = $(this).attr("data-cataId");
        $('.fr_ite_'+$(this).attr("data-cataId")).removeClass('disp').siblings().addClass('disp');
        /* $('.fr_ite_'+$(this).attr("data-cataId")).find("img").lazyload({effect: "fadeIn"}); */
        pullUpAction();
        myScrollri.scrollTo(0,0,100, IScroll.utils.ease.elastic);
        /* myScrollri = new IScroll("#con_right",{
			mouseWheel: true, click: true
		}) */
    });
  	$(".fr_ite ul").each(function(){
    	if($(this).find("li").length == 1){
    		$(this).addClass("left_num1");
    	}else if($(this).find("li").length == 2){
    		$(this).addClass("left_num2");
    	}
    })
    $(".img_lazy").lazyload({effect: "fadeIn"});
   });
</script>

</body>
</html>