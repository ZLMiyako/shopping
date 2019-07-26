<?php /*a:3:{s:76:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\details\index.html";i:1564108201;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\head.html";i:1564016862;s:74:"D:\phpstudy\PHPTutorial\WWW\yidong\application\index\view\public\foot.html";i:1563950333;}*/ ?>
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
<header class="zy_search_top_box zy_goods_top_box">
	<div class="zy_title_top fix">
		<div class="one" href="javascript:" onclick="window.location.href = document.referrer;"><img src="/yidong/public/static/index/images/back_jt.png"></div>
		<h1 style="opacity: 0;">商品详情</h1>
		<!-- slider-pagination -->
		<div class="r">
	    	<span><img src="/yidong/public/static/index/images/web/zy_icon_menu.png"></span>
	    	<dl>
	    		<dt></dt>
	    		<dd><i><img src="/yidong/public/static/index/images/menu_icon01.png"></i><a href="<?php echo url('index/index'); ?>">首页</a></dd>
	    		<dd><i><img src="/yidong/public/static/index/images/menu_icon02.png"></i><a href="catalog.html">分类</a></dd>
	    		<dd><i><img src="/yidong/public/static/index/images/menu_icon03.png"></i><a href="<?php echo url('Shop/index'); ?>">购物车</a></dd>
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
		var top_h=$(".zy_goods_top_box").height()
		$(".top_zhanwei_box").css("height",top_h);
	})
</script>

<!-- 内容框 -->
<?php if(($list==null)): ?>
	<div style="width: 403px;height: 100px; text-align: center; line-height: 120px; "><a href="<?php echo url('content/index'); ?>" style="color: #c53d43;">此商品没有详情,点击返回商品页</a></div>
<?php else: ?>
<div class="zy_module-content">
	<form>
		<div class="swiper-container goods_big_box">
			<!-- top nav -->
			<div class="my-pagination"></div>
			<div class="swiper-wrapper">
				<div class="swiper-slide zy_goods_spbox">
					<!--wrapper图-->
				    <div class="swiper-container xq_goods_pic _picbox_w_h">
						<ul class="swiper-wrapper">
							<?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aimg): $mod = ($i % 2 );++$i;?>
							<li class="swiper-slide">
								<img src="/yidong/public/uploads/<?php echo htmlentities($aimg); ?>">
							</li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
						<div class="swiper-pagination sp01"></div>
						<script>
						    var swiper = new Swiper('.xq_goods_pic', {
						        pagination: '.sp01',
						        paginationClickable: true,
						        autoplay:false,
						        speed:500,
						        autoplayDisableOnInteraction : false,
						    });
					    </script>
				    </div>
					<!---------------价钱---------------->
				    <div class="xq_goods_title mb6">
				    	<h2><?php echo htmlentities($list['title1']); ?></h2>
				    	<p><a style="color: red;"><?php echo htmlentities($list['price']); ?></a><span>市场价：￥<?php echo htmlentities($list['price1']); ?></span></p>
				    	<h3 class="dis_flex"><a><?php echo htmlentities($list['appraise']); ?>人评价</a><a><?php echo htmlentities($list['buy']); ?>人已付款</a><a>分享<img src="/yidong/public/static/index/images/web/icon_share.png"></a></h3>
				    </div>
				    
				    <!---------------口味---------------->
				    <div class="goods_more_change goods_more_box">
				    	<h2>请选择糕点口味<em>···</em></h2>
				    </div>
				    <!---------------数量---------------->
				    <div class="goods_more_change num">
				    	<h2>数量<span><i>-</i><input type="text" name="" value="1"><i>+</i></span><em>库存：<?php echo htmlentities($list['inventory']); ?></em></h2>
				    </div>
				    
				    <!---------------送货上门---------------->
				    <div class="goods_more_change ziti">
				    	<h2><a href="#">送货上门<em><img src="/yidong/public/static/index/images/web/jt_down_r.png"></em></a></h2>
				    </div>
				    <!---------------商品详情--------------->
				    <div class="goods_xq_miaosu bgwh">
				    	<div class="zy_title_con_01">
							<h2><span>商品详情</span></h2>
						</div>
						<div>
							<?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aimg): $mod = ($i % 2 );++$i;?>
							<img src="/yidong/public/uploads/<?php echo htmlentities($aimg); ?>">
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
				    </div>
				
				</div>
				
				<!----------------------------------->
				<!--------------详情结束-------------->
				<!----------------------------------->
				
				
				<!----------------------------------->
				<!--------------信息开始-------------->
				<!----------------------------------->
				<div class="swiper-slide zy_goods_xqbox">
					<div class="xq_info mb6 bgwh">
						<div class="zy_title_con_01">
							<h2><span>商品信息<i></i></span></h2>
						</div>
						<ul>
							<li>
								<span>产品标准号：</span><a><?php echo htmlentities($list['product']); ?></a>
							</li>
							<li>
								<span>厂名：</span><a><?php echo htmlentities($list['name']); ?></a>
							</li>
							<li>
								<span>厂址：</span><a><?php echo htmlentities($list['addres']); ?></a>
							</li>
							<li>
								<span>联系方式：</span><a> <?php echo htmlentities($list['phone']); ?></a>
							</li>
							<li>
								<span>配料表：</span><a><?php echo htmlentities($list['burden']); ?></a>
							</li>
							<li>
								<span>储藏方法：</span><a><?php echo htmlentities($list['storage']); ?></a>
							</li>
							<li>
								<span>保质期：</span><a><?php echo htmlentities($list['expiration']); ?></a>
							</li>
							<!--<li>
								<span>食品添加剂：</span><a>山梨糖醇液，甘油，丙二醇，改性大豆磷脂</a>
							</li>
							<li>
								<span>脂肪酸酯品牌:</span><a>Danco/丹夫系列: 1.5kg原味</a>
							</li>-->
							<li>
								<span>口味:</span><a><?php echo htmlentities($list['taste']); ?></a>
							</li>
						</ul>

					</div>
				</div>
				<!----------------------------------->
				<!--------------信息结束-------------->
				<!----------------------------------->	
					
					
				<!----------------------------------->
				<!---------------评论开始------------->
				<!----------------------------------->
				<div class="swiper-slide zy_goods_pjbox">
					
					<!--判断是否登录-->
					<?php if((app('session')->get('msql') != null)): ?>
					<!---------评论星星---------->
					<div id="star"> <span>请评价</span>
					  	<ul id="on">
						    <li><a href="javascript:;">1</a></li>
						    <li><a href="javascript:;">2</a></li>
						    <li><a href="javascript:;">3</a></li>
						    <li><a href="javascript:;">4</a></li>
						    <li><a href="javascript:;">5</a></li>
					  	</ul>
					  	<span></span>
					 	 <p></p>
					 	<script type="text/javascript"> 
							window.onload = function (){
							var oStar = document.getElementById("star");
							var aLi = oStar.getElementsByTagName("li");
							var oUl = oStar.getElementsByTagName("ul")[0];
							var oSpan = oStar.getElementsByTagName("span")[1];
							var oP = oStar.getElementsByTagName("p")[0];
							var i = iScore = iStar = 0;
							var aMsg = [
										"很不满意|差得太离谱，与卖家描述的严重不符，非常不满",
										"不满意|部分有破损，与卖家描述的不符，不满意",
										"一般|质量一般，没有卖家描述的那么好",
										"满意|质量不错,还是挺满意的",
										"非常满意|质量非常好，与卖家描述的完全一致，非常满意"
										]
							
							for (i = 1; i <= aLi.length; i++){
								aLi[i - 1].index = i;
								
								//鼠标移过显示分数
								aLi[i - 1].onmouseover = function (){
									fnPoint(this.index);
									//浮动层显示
									oP.style.display = "block";
									//计算浮动层位置
									oP.style.left = oUl.offsetLeft + this.index * this.offsetWidth - 104 + "px";
									//匹配浮动层文字内容
									oP.innerHTML = "<em><b>" + this.index + "</b> 分 " + aMsg[this.index - 1].match(/(.+)\|/)[1] + "</em>" + aMsg[this.index - 1].match(/\|(.+)/)[1]
								};
								
								//鼠标离开后恢复上次评分
								aLi[i - 1].onmouseout = function (){
									fnPoint();
									//关闭浮动层
									oP.style.display = "none"
								};
								
								//点击后进行评分处理
								aLi[i - 1].onclick = function (){
									iStar = this.index;
									oP.style.display = "none";
									oSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")"
								}
							}
							
							//评分处理
							function fnPoint(iArg){
								//分数赋值
								iScore = iArg || iStar;
								for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "on" : "";	
							}
							
						};
						</script> 
					</div>
					
						
					<!---------评论form提交---------->
					<form  method="post" >
						<input type="hidden" name="cid" value="<?php echo htmlentities($list['did']); ?>" id="cid"/>
						<input type="hidden" name="user" value="<?php echo htmlentities(app('session')->get('msql.id')); ?>" id="user"/>
						<div class="layui-form-item">
							<div style="width: 90%;margin:40px auto;">
						    	<textarea id="com" type="text" value="555" name="commment" lay-verify="title" autocomplete="off" placeholder="请输入评价" class="layui-input" style="height: 80px;"></textarea>
						    </div>
						</div>
						<div style="width: 20%;margin:0px auto;">
						     <button class="layui-btn layui-btn-sm" type="button" lay-filter="demo1" id="btn">立即提交</button>
						</div>
					</form>
					<p id="comm_ok" style="color: #e60033; position: absolute; top:130px; left: 145px;"></p>
					
						
					<!---------------评论分页------------->
					<div class="item">
						<?php if(is_array($comm) || $comm instanceof \think\Collection || $comm instanceof \think\Paginator): $i = 0; $__LIST__ = $comm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$acomm): $mod = ($i % 2 );++$i;?>
						<div style="margin: 20px 20px 0 20px; padding:5px; background-color: #f8fbf8; border-radius: 5px; color: 12px;" class="apage">
							<?php if(is_array($acomm['c']) || $acomm['c'] instanceof \think\Collection || $acomm['c'] instanceof \think\Paginator): $i = 0; $__LIST__ = $acomm['c'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mobile): $mod = ($i % 2 );++$i;?>
							<span style="color: #666;">
								<?php
								echo substr_replace($mobile['mobile'],'****',3,4);
								?>
							</span>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							<span style="margin-left: 60px;color:#999 ;">时间：<?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($acomm['time'])? strtotime($acomm['time']) : $acomm['time'])); ?></span>
							<div style="margin:10px 0 10px 0; color: #000;"><span style="color: #999; line-height: 25px;">内容</span>：<?php echo htmlentities($acomm['comm']); ?></div>
							<div style="margin-bottom: 10px; color: #999;">评价星：<?php echo htmlentities($acomm['star']); ?></div>
							
							<hr />	
						</div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
							
					<!-------------评论分页摁扭----------->
					<div class="page_btn clear" style="margin: 50px auto; width: 100%;">
			            <div class="page_box" style="margin: 0 auto;width: 150px;">
			                <a class="prev">上一页</a><span class="num"><span class="current_page">1</span><span style="padding:0 3px;">/</span><span class="total"></span></span><a class="next">下一页</a>
			            </div>
			        </div>
			  					
			  		<!---------------评论分页js------------->
					<script type="text/javascript">
						    $(document).ready(function(){
					            $(".apage:gt(3)").hide();//初始化，前面4条数据显示，其他的数据隐藏。
					            var total_q=$(".apage").length+1;//总数据
					            var current_page=4;//每页显示的数据
					            var current_num=1;//当前页数
					            var total_page= Math.round(total_q/current_page);//总页数  
					            var next=$(".next");//下一页
					            var prev=$(".prev");//上一页
					            $(".total").text(total_page);//显示总页数
					            $(".current_page").text(current_num);//当前的页数
					             
					            //下一页
					            $(".next").click(function(){
					                if(current_num==total_page){
					                    return false;//如果大于总页数就禁用下一页
					                    }else{
					                        $(".current_page").text(++current_num);//点击下一页的时候当前页数的值就加1
					                        $.each($('.apage'),function(index,item){
					                        	
					                            var start = current_page* (current_num-1);//起始范围
					                            var end = current_page * current_num;//结束范围
				
					                            if(index >= start && index < end){
					                            	$(this).show();
					                            }else {
					                                $(this).hide(); 
					                            }
					                           
					                            
					                        });
					                    }
					            });
					            //上一页方法
					            $(".prev").click(function(){
					                    if(current_num==1){
					                        return false;
					                    }else{
					                        $(".current_page").text(--current_num);
					                        $.each($('.apage'),function(index,item){
					                            var start = current_page* (current_num-1);//起始范围
					                            var end = current_page * current_num;//结束范围
					                            if(index >= start && index < end){
					                                $(this).show();
					                            }else {
					                                $(this).hide();
					                            }
					                        });     
					                    }
					                     
					                })
					    })
	
					</script>
					<!---------------评论提交js-------------> 
					<script type="text/javascript">
					$("#btn").click(function(){
						var star = $('#on .on').length;
						var cid = $("#cid").val();
						var comm = $("#com").val() ;
						var user_id = $("#user").val() ;
						$.ajax({
							type:"post",
							url:"<?php echo url('details/comment'); ?>",
							async:true,
							data:{star,cid,comm,user_id},
							success:function(data){
								if(data.code ==1){
									$('#comm_ok').text(data.msg)
									location.replace(location) ;
								}else{
									$('#comm_ok').text(data.msg)
								}
								
							}
						});
					})		
					</script>
				
					<?php else: ?>
					<!---------------未登录跳转到登录页------------->
					<div style="width: 100%;height: 150px; margin: 20px auto; text-align: center; line-height: 150px; background-color: #dcd6d9;">
						<p ><a href="<?php echo url('login/login'); ?>" style="color: #494a41;">您没有登录，请点击登录！</a></p>
					</div>
					<?php endif; ?>
					
				</div>
				
				<!----------------------------------->
				<!---------------评论结束------------->
				<!----------------------------------->
		
			</div>
						
			<!---------------TAB选项卡js------------->
			<script>
			    var swiper = new Swiper('.goods_big_box', {
			    	autoHeight: true, //enable auto height
			    	pagination: '.my-pagination',
					paginationClickable: true,
					paginationBulletRender: function (swiper,index, className) {
					switch (index) {
					  case 0: name='商品';break;
					  case 1: name='详情';break;
					  case 2: name='评价';break;
					  default: name='';
					}
					      return '<a class="' + className + '">' + name + '</a>';
					  }
			    });
		    </script>

			<!--------------变体框弹出------------->
			<div class="tankuang_box">
				<!-- 商品属性新加尺码选择 -->
				<div class="goods_shux_box chimabox">
					<div class="black_bg"></div>
					<div class="shux">
						<div class="goods_pic fix">
							<?php if(is_array($aclass) || $aclass instanceof \think\Collection || $aclass instanceof \think\Paginator): $i = 0; $__LIST__ = $aclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aclass): $mod = ($i % 2 );++$i;?>
							<i class="aclass" style="display: none;"><img src="/yidong/public/uploads/<?php echo htmlentities($aclass['img']); ?>"></i>
							<?php endforeach; endif; else: echo "" ;endif; ?>
							<a><span>￥<?php echo htmlentities($list['price']); ?></span><span>市场价：￥<?php echo htmlentities($list['price1']); ?></span></a>
							<em><img src="/yidong/public/static/index/images/web/xx_da.png"></em>
						</div>
						<div class="goods_shux_list">
							<div>
								<h2>选择口味</h2>
								<dl>
									<?php if(is_array($class) || $class instanceof \think\Collection || $class instanceof \think\Paginator): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$class): $mod = ($i % 2 );++$i;?>
									<dd class="class"><?php echo htmlentities($class['name']); ?></dd>
								
									<?php endforeach; endif; else: echo "" ;endif; ?>
									
								</dl>
							</div>
							<!-- <div>
								<h2>尺码</h2>
								<dl>
									<dd class="cur">36</dd>
									<dd>37</dd>
									<dd>38</dd>
									<dd>39</dd>
									<dd>40</dd>
									<dd>41</dd>
									<dd>42</dd>
								</dl>
							</div> -->
						</div>
						<div class="goods_shux_btn">
							<a href="#" id="gwc">加入购物车</a>
							<a href="#" id="ljgm" onclick="gwc()">立即购买</a>
						</div>
						<!-- 加入购物车与立即购买 js-->
						<script type="text/javascript">
							function gwc(){
								var a = $('.cur').text();
								console.log(a);
								$.ajax({
							        type:"POST",
							        url:"<?php echo url('Confirm/add',['id'=>$list['did']]); ?>",
							        data:{'data':a},
							        success:function(data){
							      		//console.log(data);
							        	location.href="<?php echo url('Confirm/index'); ?>";
							        },
							    })
							}
							$('#gwc').click(function(){
								var a = $('.cur').text();
								console.log(a);
								$.ajax({
							      type:"POST",
							      url:"<?php echo url('Shop/index',['id'=>$list['did']]); ?>",
							      data:{'data':a},
							      success:function(data){
							      	//console.log(data);
							        //location.href="<?php echo url('Shop/index'); ?>";
							        alert('已加入购物车');
							        window.location.reload();
							      },
							    })
							})
						</script>
					</div>
				</div>
				<!-- 变体图片 js-->
				<script type="text/javascript">
					$.each($('.class'), function(i,v) {
						$(this).click(function(){
							$('.aclass').hide();
							$('.aclass').eq([i]).show();
						})
					});
				</script>
			</div>
		   
		   <!-- 属性框出现 js-->
		   
		   <script type="text/javascript">
		    	$(function(){
		    		var n=0;
					$(".goods_more_box h2").mousedown(
						function(){
							n=$(this).index()
							$('.tankuang_box > div.goods_shux_box').eq(n).fadeIn(300)
							$('.tankuang_box > div.goods_shux_box').eq(n).children(".shux").stop().animate({bottom:0},300)
						}
					);
					$(".goods_shux_box .black_bg").mousedown(
						function(){
							$(".goods_shux_box .shux").stop().animate({bottom:-999},500)
							$(".goods_shux_box").fadeOut()
						}
					);
					$(".goods_shux_box .goods_pic em ").mousedown(
						function(){
							$(".goods_shux_box .shux").stop().animate({bottom:-999},500)
							$(".goods_shux_box").fadeOut()
						}
					);
					// 尺码颜色选择
					$(".chimabox .goods_shux_list dl dd").mousedown(function(){
						$(this).addClass("cur")
						$(this).siblings().removeClass("cur")
					});
				})
			</script>
		
		    <!-- 弹框预览图片 -->
			
			<div class="swiper-container xq_goods_pic_Bomb">
		        <div class="swiper-wrapper _picbox_w_h1">
		        	<?php if(is_array($img) || $img instanceof \think\Collection || $img instanceof \think\Paginator): $i = 0; $__LIST__ = $img;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aimg): $mod = ($i % 2 );++$i;?>
		            <div class="swiper-slide"><img src="/yidong/public/uploads/<?php echo htmlentities($aimg); ?>"></div>
		            <?php endforeach; endif; else: echo "" ;endif; ?>
		        </div>
		        <!-- Add Pagination -->
		        <div class="swiper-pagination bomb_page"></div>
		    </div>

		    <!-- Initialize Swiper -->
		    <!-- 弹框预览图片js -->
		    <script>
			    var swiper = new Swiper('.xq_goods_pic_Bomb', {
			        pagination: '.bomb_page',
			        paginationType: 'fraction'
			    });

			    $(function(){
			    	$(".xq_goods_pic_Bomb").hide()
			    	$(".xq_goods_pic").mousedown(
			    		function(){
			    			$(".xq_goods_pic_Bomb").show().css('height','100%')
			    		}
			    	)

			    	$(".xq_goods_pic_Bomb").mousedown(
			    		function(){
			    			$(this).hide()
			    		}
			    	)
			    })
		    </script>

</div>
<?php endif; ?>


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
