<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>首页</title>
		<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.min.css">
	<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.reset.css">
	<link rel="stylesheet" type="text/css" href="/Public/Test/css/index.css">
	<script type="text/javascript" src="/Public/Test/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="/Public/Test/js/H-ui/js/H-ui.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		
		var lb = $("#limit-buy"),
			lb_cur = 1,
			lbp_w = lb.find(".products").width();
			lb_timer = null;
		t = 1;
		function showLimitBuyProducts(){
			if(lb_cur < 1){
				lb_cur = 4;
			} else if(lb_cur > 4){
				lb_cur = 1;
			}
			$("#J-lbcp").html(lb_cur);
			var products = $("#limit-buy .products").hide().eq(lb_cur-1).show(),
				ta = products.find("textarea");
				
			if(ta.length){
				products.html(ta.val());
			}
		}
		lb_timer = setInterval(function(){
			lb_cur++;
			showLimitBuyProducts();
		}, 6000);
		
		$("#J-lbn .prev, #J-lb .btn-prev").click(function(){
			lb_cur--;
			showLimitBuyProducts();
		});
		$("#J-lbn .next, #J-lb .btn-next").click(function(){
			lb_cur++;
			showLimitBuyProducts();
		});
		$("#J-lb").hover(function(){
				clearInterval(lb_timer);
				lb_timer = null;
				$("#J-lb .btn-prev, #J-lb .btn-next").show();
			}, function(){
				lb_timer = setInterval(function(){
					lb_cur++;
					showLimitBuyProducts();
				}, 6000);
				$("#J-lb .btn-prev, #J-lb .btn-next").hide();
		});
		
	});
</script>
 <!-- nav_center -->
<script type="text/javascript">
$(document).ready(function(){
	
	var lb = $("#limit-bus"),
		lb_cur = 1,
		lbp_w = lb.find(".productss").width();
		lb_timer = null;
	t = 1;
	function showLimitBuyProducts(){
		if(lb_cur < 1){
			lb_cur = 5;
		} else if(lb_cur > 5){
			lb_cur = 1;
		}
		$("#Jd-iop").html(lb_cur);
		var productss = $("#limit-bus .productss").hide().eq(lb_cur-1).show(),
			ta = productss.find("textarea");
		if(ta.length){
			productss.html(ta.val());
		}
	}
	lb_timer = setInterval(function(){
		lb_cur++;
		showLimitBuyProducts();
	}, 3000);
	
	$("#J-lbns .prev, #J-lbs .btn-prevvs").click(function(){
		lb_cur--;
		showLimitBuyProducts();
	});
	$("#J-lbns .nextvs, #J-lbs .btn-nextvs").click(function(){
		lb_cur++;
		showLimitBuyProducts();
	});
	$("#J-lbs").hover(function(){
			clearInterval(lb_timer);
			lb_timer = null;
			$("#J-lbs .btn-prevvs, #J-lbs .btn-nextvs").show();
		}, function(){
			lb_timer = setInterval(function(){
				lb_cur++;
				showLimitBuyProducts();
			}, 3000);
			$("#J-lbs .btn-prevvs, #J-lbs .btn-nextvs").hide();
	});
});
</script> 
</head>
<body>
<!-- +++++++++++ -->
<div class="container-fluid header_box">
<div class="container header_box rew">
	<ul class="header_top1 col-md-4">
		<li><a href="<?php echo U('Login/index');?>">登录</a><i><img src="/Public/Test/images/index_03.png" alt=""></i></li>
		<li><a href="<?php echo U('Register/index');?>">注册</a><i><img src="/Public/Test/images/index_03.png" alt=""></i></li>
		<li><img class="f-l cl-pic mr-5" src="/Public/Test/images/shoucang.png" alt=""><a onclick="addFavorite(window.location,document.title)" href="#">收藏网页</a><i><img src="/Public/Test/images/index_03.png" alt=""></i></li>
		<nav class="nav-collapse" role="navigation" id="Hui-navbar">
			<li class="dropDown dropDown_hover" ><a href="#" class="colo-l dropDown_A " ><img class="f-l cl-pic mr-5" src="/Public/Test/images/phone.png" alt="">手机版</a>
				<ul class="dropDown-menu pic6 ">
					<ol><img src="/Public/Test/images/login1_r3_c5.jpg" alt=""></ol>
					<ol><span>扫码关注纳邦官方微博</span></ol>
				</ul>
			</li>
		</nav>
	</ul>
	<ul class="header_top2 f-r ">
		<nav class="nav-collapse" role="navigation" id="Hui-navbar" >
			<ol class="dropDown dropDown_hover "><i class="Hui_ico f-r pr"></i><a href="javascript:void(0) " class="dropDown_A">我的社区 <i class="Hui_img f-r"></i></a>
			<nav class="bg-box" ></nav>
				<ul class="dropDown-menu pic1 ">
					<li><a href="#">我的社区</a></li>
					<li><a href="#">我的社区</a></li>
					<li><a href="#">我的社区</a></li>
				</ul>
			</ol>
			<ol class="dropDown dropDown_hover"><i class="Hui_ico f-r pr"></i><a href="#" class="dropDown_A">最近浏览<i class="Hui_img f-r "></i></a>
				<ul class="dropDown-menu pic2 ">
					<nav class="pic_ho f-l">
						<img src="/Public/Test/images/rightfood_10.png" alt="">
					 	<li><a href="#">佛山市乐从凯来登酒店</a><br><span>20%积分</span></li>
					 </nav>
					 <nav class="pic_ho f-l">
						<img src="/Public/Test/images/rightfood_10.png" alt="">
						 <li><a href="#">佛山市乐从凯来登酒店</a><br><span>20%积分</span></li>
					 </nav>
					 <p><a href="#">清除最近浏览记录</a></p>
				</ul>
			</ol>
			<ol class="dropDown dropDown_hover "><i class="Hui_ico f-r pr"></i><a href="#" class="dropDown_A">联系客服 <i class="Hui_img f-r "></i></a>
				<ul class=" dropDown-menu pic3  ">
					<li><a href="#">联系客服</a></li>
					<li><a href="#">联系客服</a></li>
					<li><a href="#">联系客服</a></li>
				</ul>
			</ol>
			<ol class="dropDown dropDown_hover"><i class="Hui_ico f-r pr"></i><a href="" class="dropDown_A">商家中心<i class="Hui_img f-r "></i></a>
				<ul class="dropDown-menu pic4 ">
					<li><a href="#">最近浏览</a></li>
					<li><a href="#">联系客服</a></li>
					<li><a href="#">最近浏览</a></li>
				</ul>
			</ol>
			<ol class="dropDown dropDown_hover"><a href="#" class="dropDown_A">微信关注 <i class="Hui_img f-r "></i></a>
				<ul class=" dropDown-menu pic5 ">
					<li><img src="/Public/Test/images/login1_r3_c5.jpg" alt=""></li>
					<li><span>扫码关注纳邦官方微博</span></li>
				</ul>
			</ol>
		</nav>
	</ul>	
</div>
</div>
<div class="content_box container">
<div class="logo_center rew">
	<p class="f-l"><img src="/Public/Test/images/logo.png" alt="logo"></p>
	<ul class="logo f-l col-xs-2 col-md-2 col-lg-2">
		<li><img src="/Public/Test/images/index_033.png" alt=""> &nbsp;佛山市</li>
	</ul>
<div class="f-l get_nav1 col-xs-7 col-md-7 col-lg-7">
	<form method="get" id="searchform" action="">
	    <fieldset class="search">
	         <input type="text" class="box" name="s" id="s" class="inputText" placeholder="&nbsp;&nbsp;请输入商品,店铺名称" x-webkit-speech>
	          <button class="btn" title="SEARCH" ></button>
	    </fieldset>
	</form>
	<ul class="get_nav f-l">
		<li><a href="##">蛋糕</a></li>
		<li><a href="##">寿司</a></li>
		<li><a href="##">牛番天</a></li>
		<li><a href="##">烤鱼</a></li>
		<li><a href="##">必胜客</a></li>
		<li><a href="##">自助餐</a></li>
		<li><a href="##">怡丰城</a></li>
		<li><a href="##">歌葩</a></li>
		<li><a href="##">杯子红</a></li>
	</ul>
</div>
</div>
</div>
<div class="clear_float"></div>
<div class="nav_topone container-fluid">
	<ul class="nav_top container rew">
		<p onMouseMove="lanShow(1)"  onMouseOut="lanImg()">
		<a href="##"><img src="/Public/Test/images/index123_03.png" alt="title">&nbsp;&nbsp;&nbsp;
		<a href="##">全部分类</a>
		</a>
		</p>
		<li><a href="">首页</a></li>
		<li><a href="##">今日新单</a></li>
		<li><a href="##">社区活动</a></li>
		<li><a href="##">商家优惠</a></li>
	</ul>
</div>
<div class="clear_float"></div>
<div class="container rew">
<div class="col-xs-2 col-md-2 col-lg-2 ">
<div class="lanren" id="catid1" onmouseover="lanShow(1)" onMouseOut="lanImg()">
<div id="category-2015" onMouseOver="this.className='on'" onmouseleave="this.className='item'">
	<div id="allsort"  id="category-2015">
	<?php if(is_array($pihotl_ionf)): foreach($pihotl_ionf as $key=>$val): ?><div class="item" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
			<span><h3><a href="<?php echo U('business_list',array('id'=>$val['id']));?>"><img style="width:30px;height:30px;" src="<?php echo ($val["icon"]); ?>" alt=""><?php echo ($val["name"]); ?></a></h3></span>
			<div class="i-mc">
				<p href="#"><?php echo ($val["name"]); ?></p>
				<?php if(is_array($hotl_ionf)): foreach($hotl_ionf as $key=>$val): ?><a href="<?php echo U('business_view',array('id'=>$val['id']));?>"><?php echo ($val["name"]); ?></a><?php endforeach; endif; ?>
			</div>
		</div><?php endforeach; endif; ?>
	<!-- 	<div class="item pic_ite" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
			<span><h3><a href="#"><img src="/Public/Test/images/f2.png" alt="">酒店</a></h3></span>
			<div class="i-mc">
				<p href="">酒店</p>
				<?php if(is_array($hotl_ionf)): foreach($hotl_ionf as $key=>$val): ?><a href="<?php echo U('business_view',array('id'=>$val['id']));?>"><?php echo ($val["name"]); ?></a><?php endforeach; endif; ?>
			</div>
		</div>
		<div class="item" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
			<span><h3><a href="#"><img src="/Public/Test/images/f3.png" alt="">休闲娱乐</a></h3></span>
			<div class="i-mc">
				<p href="">休闲娱乐</p>
				<?php if(is_array($likehapp_ionf)): foreach($likehapp_ionf as $key=>$val): ?><a href="<?php echo U('business_view',array('id'=>$val['id']));?>"><?php echo ($val["name"]); ?></a><?php endforeach; endif; ?>
			</div>
		</div>
		<div class="item" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
			<span><h3><a href="#"><img src="/Public/Test/images/f4.png" alt="">旅游</a></h3></span>
			<div class="i-mc">
				<p>旅游</p>
				<a href="">旅游</a>
				<?php if(is_array($tour_ionf)): foreach($tour_ionf as $key=>$val): ?><a href="<?php echo U('business_view',array('id'=>$val['id']));?>"><?php echo ($val["name"]); ?></a><?php endforeach; endif; ?>
				</div>
		</div>
		<div class="item" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
			<span><h3><a href="#"><img src="/Public/Test/images/f5.png" alt="">购物</a></h3></span>
			<div class="i-mc">
				<p href="">购物</p>
				<?php if(is_array($gots_ionf)): foreach($gots_ionf as $key=>$val): ?><a href="<?php echo U('business_view',array('id'=>$val['id']));?>"><?php echo ($val["name"]); ?></a><?php endforeach; endif; ?>
			</div>
		</div> -->
	</div>
</div>
</div>
</div>
<div class="col-xs-8 col-md-8 col-lg-8">
<div class="nav_center">
	<div class="limit-box1" id="J-lbs">
		<a href="javascript:void(0);" class="btn-prevvs"></a>
		<div class="limit-bus-bd" id="limit-bus">
			<div class="productss">
				<ul class="nav_centerone">
					<li><img src="/Public/Test/images/indexnav_03.png" alt=""></li>
					<ol>四季京味烤鸭店<nav>提供免费w11111ifi</nav></ol>
					<ol><span>积分10%</span></ol>
				</ul>
				<ul class="nav_centertwo">
					<li><img src="/Public/Test/images/indexsnav_03.png" alt=""></li>
					<ol>四季京味烤鸭店<nav>提供免费wi111fi</nav></ol>
					<ol><span>积分10%</span></ol>
				</ul>
			</div>
			<div class="productss">
				<ul class="nav_centerone">
					<li><img src="/Public/Test/images/indexnav_03.png" alt=""></li>
					<ol>四季京味烤鸭店<nav>提供免费wi2222222fi</nav></ol>
					<ol><span>积分10%</span></ol>
				</ul>
				<ul class="nav_centertwo">
					<li><img src="/Public/Test/images/indexsnav_03.png" alt=""></li>
					<ol>四季京味烤鸭店<nav>提供免费wi222222fi</nav></ol>
					<ol><span>积分10%</span></ol>
				</ul>
			</div>
			<div class="productss">
				<ul class="nav_centerone">
					<li><img src="/Public/Test/images/indexnav_03.png" alt=""></li>
					<ol>四季京味烤鸭店<nav>提供免费w33333ifi</nav></ol>
					<ol><span>积分10%</span></ol>
				</ul>
				<ul class="nav_centertwo">
					<li><img src="/Public/Test/images/indexsnav_03.png" alt=""></li>
					<ol>四季京味烤鸭店<nav>提供免费w3333ifi</nav></ol>
					<ol><span>积分10%</span></ol>
				</ul>
			</div>
			<div class="productss">
				<ul class="nav_centerone">
					<li><img src="/Public/Test/images/indexnav_03.png" alt=""></li>
					<ol>四季京味烤鸭店<nav>提供免费wif4444i</nav></ol>
					<ol><span>积分10%</span></ol>
				</ul>
				<ul class="nav_centertwo">
					<li><img src="/Public/Test/images/indexsnav_03.png" alt=""></li>
					<ol>四季京味烤鸭店<nav>提供免费wif444i</nav></ol>
					<ol><span>积分10%</span></ol>
				</ul>
			</div>
			<div class="productss">
				<ul class="nav_centerone">
					<li><img src="/Public/Test/images/indexnav_03.png" alt=""></li>
					<ol>四季京味烤鸭店<nav>提供免费wif5555i</nav></ol>
					<ol><span>积分10%</span></ol>
				</ul>
				<ul class="nav_centertwo">
					<li><img src="/Public/Test/images/indexsnav_03.png" alt=""></li>
					<ol>四季京味烤鸭店<nav>提供免费wif555i</nav></ol>
					<ol><span>积分10%</span></ol>
				</ul>
			</div>
		</div>
	<a href="javascript:void(0);" class="btn-nextvs"><div class="pos-no"><span id="Jd-iop">1</span>/5</div></a>
</div>
	<div class="clear_float"></div>
	<div id="tab_demo" class="HuiTab">
		<ul class="title_conter tabBar f-l ">
			<li><a href="javascript:void(0);" >热门商家</a></li>
			<li><a href="javascript:void(0);" >全部区域</a></li>
			<li><a href="javascript:void(0);" >热门商圈</a></li>
		</ul>
		<ul class="title_content col-xs-12 col-md-12 col-lg-12">
			<ul style="display:block;" class="tabCon">
				<li>越秀区</li>
				<li>天河区</li>
				<li>番禺区</li>
				<li>海珠区</li>
				<li>白云区</li>
				<li>荔湾去</li>
				<li>黄埔区</li>
				<li>增城区</li>
				<li>花都区</li>
				<li>从化市</li>
				<li><select  name="" id="">
				<option value="#">更多</option>
				<option value="#">更多</option>
				<option value="#">更多</option>
				<option value="#">更多</option>
				</select></li>
			</ul>
			<ul  style="display:none;" class="tabCon">
				<li>22222</li>
				<li>22222</li>
				<li>22222</li>
				<li>22222</li>
				<li>22222</li>
				<li>22222</li>
				<li><select  name="" id="">
				<option value="#">更多</option>
				<option value="#">更多</option>
				<option value="#">更多</option>
				</select></li>
			</ul>
			<ul style="display:none;" class="tabCon">
				<li>666</li>
				<li>6666</li>
				<li>6666</li>
				<li>6666</li>
				<li>6666</li>
				<li>6666</li>
				<li>
					<select  name="" id="">
					<option value="#">更多</option>
					<option value="#">更多</option>
					<option value="#">更多</option>
					</select>
				</li>
			</ul>
			
		</ul>
	</div>
	</div>
</div>
<div class="nav_right">
		<ul class="nav_right1 col-xs-2 col-md-2 col-lg-2">
			<li class="nav_right1"><img class="img_phone1" src="/Public/Test/images/juan1.jpg" alt=""></li>
		</ul>
		 <ul class="nav_right2 col-xs-2 col-md-2 col-lg-2">
			<li class="nav_right2" ><img class="img_phone1" src="/Public/Test/images/juan2.jpg" alt=""></li>
		</ul>
		<ul class="nav_right3 col-xs-2 col-md-2 col-lg-2">
			<li class="nav_right3"><a href="javascript:void(0)" ><img class="img_phone3" src="/Public/Test/images/juan3.png" alt="">
				<ol class="phone_nxt f-r text-c" onmouseover="nxShow(1)" onMouseOut="nxIng()">
					手机客户端<br>
					<span class="text-c mt-10">扫码下载</span></a>
				</ol>
				<div class="bg-box-01" id="Ing1" >
				      <i class="ewi-box"></i>
					<img  src="/Public/Test/images/login1_r3_c5.jpg" alt="">
			  	</div>
			</li> 
		</ul>
</div>
<div class="clear_float"></div>
<!-- 店面开始 -->
	<ul class="food_box">
		<li class="food_title mb-5"><img src="/Public/Test/images/hot.png" alt=""><span>每天发现新鲜好店</span></li>
	</ul>
	<div class="rew">
	<div class="limit-box" id="J-lb">
	<a href="javascript:void(0);" class="btn-prev"></a>
	<div class="limit-buy-bd" id="limit-buy">
		<div class="products">
			<ul  class="hot_content f-l mr-10">
				<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
				<li><a href="#">【沙面】The Frypan</a><br><span>积分10%</span>	</li>
			</ul>
			<ul  class="hot_content f-l mr-10">
				<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
				<li><a href="#">【沙面】The Frypan</a><br><span>积分10%</span>	</li>
			</ul>
			<ul  class="hot_content f-l mr-10">
				<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
				<li><a href="#">【沙面】The Frypan</a><br><span>积分10%</span>	</li>
			</ul>
			<ul  class="hot_content f-l mr-10">
				<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
				<li><a href="#">【沙面】The Frypan</a><br><span>积分10%</span>	</li>
			</ul>
			<ul  class="hot_content f-l mr-10">
				<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
				<li><a href="#">【沙面】The Frypan</a><br><span>积分10%</span>	</li>
			</ul>
		</div>
		<div class="products">
			<ul  class="hot_content f-l mr-10">
				<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
				<li><a href="#">【沙面】The Fry1111pan</a><br><span>积分10%</span>	</li>
			</ul>
			<ul  class="hot_content f-l mr-10">
				<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
				<li><a href="#">【沙面】The Fryp11111an</a><br><span>积分10%</span>	</li>
			</ul>
			<ul  class="hot_content f-l mr-10">
				<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
				<li><a href="#">【沙面】The Fryp11111an</a><br><span>积分10%</span>	</li>
			</ul>
			<ul  class="hot_content f-l mr-10">
				<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
				<li><a href="#">【沙面】The Fryp111an</a><br><span>积分10%</span>	</li>
			</ul>
			<ul  class="hot_content f-l mr-10">
				<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
				<li><a href="#">【沙面】The Fryp1111an</a><br><span>积分10%</span>	</li>
			</ul>
		</div>
		<div class="products">
				<ul  class="hot_content f-l mr-10">
					<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
					<li><a href="#">【沙面】The Fry2222pan</a><br><span>积分10%</span>	</li>
				</ul>
				<ul  class="hot_content f-l mr-10">
					<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
					<li><a href="#">【沙面】The Fryp2222an</a><br><span>积分10%</span>	</li>
				</ul>
				<ul  class="hot_content f-l mr-10">
					<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
					<li><a href="#">【沙面】The Fry2222pan</a><br><span>积分10%</span>	</li>
				</ul>
				<ul  class="hot_content f-l mr-10">
					<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
					<li><a href="#">【沙面】The Fry2222pan</a><br><span>积分10%</span>	</li>
				</ul>
				<ul  class="hot_content f-l mr-10">
					<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
					<li><a href="#">【沙面】The Fry2222pan</a><br><span>积分10%</span>	</li>
				</ul>
			</div>
			<div class="products">
				<ul  class="hot_content f-l mr-10">
					<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
					<li><a href="#">【沙面】The Fry3333pan</a><br><span>积分10%</span>	</li>
				</ul>
				<ul  class="hot_content f-l mr-10">
					<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
					<li><a href="#">【沙面】The Fry3333pan</a><br><span>积分10%</span>	</li>
				</ul>
				<ul  class="hot_content f-l mr-10">
					<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
					<li><a href="#">【沙面】The Fry3333pan</a><br><span>积分10%</span>	</li>
				</ul>
				<ul  class="hot_content f-l mr-10">
					<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
					<li><a href="#">【沙面】The Fry3333pan</a><br><span>积分10%</span>	</li>
				</ul>
				<ul  class="hot_content f-l mr-10">
					<li><a href="#"><img  src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
					<li><a href="#">【沙面】The Fry3333pan</a><br><span>积分10%</span>	</li>
				</ul>
			</div>
		</div>
		<a href="javascript:void(0);" class="btn-next"><div class="pos-no"><span id="J-lbcp">1</span>/4</div></a>
	</div>
<!-- 店面结束 -->
<div class="clear_float"></div>
<!-- 美食开始 -->
	<ul class="food_box">
		<li class="food_title"><img src="/Public/Test/images/list1.png" alt=""><span>美食</span></li>
		<li class="food_titleright mt-40 mt-40"><a href="##">查看更多推荐</a><img src="/Public/Test/images/more.png" alt=""></li>
	</ul>
<div class="clear_float"></div>
<div class="rew">
	<div class="por_food f-l ">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
</div>
<div class="clear_float"></div>
<div class="more"><p><a href="">点击查看更多美食</a>&nbsp;&gt;</p></div>
<div class="clear_float"></div>
<!-- 美食结束 -->
<!--酒店开始  -->
<ul class="food_box">
		<li class="food_title"><img src="/Public/Test/images/list2.png" alt=""><span>酒店</span></li>
		<li class="food_titleright mt-40"><a href="##">查看更多推荐</a><img src="/Public/Test/images/more.png" alt=""></li>
	</ul>
<div class="clear_float"></div>
<div class="rew">
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
</div>
<div class="clear_float"></div>
<div class="more"><p><a href="">点击查看更多酒店</a>&nbsp;&gt;</p></div>
<div class="clear_float"></div>
<!--酒店结束-->
<!--休闲娱乐开始  -->
<ul class="food_box">
		<li class="food_title"><img src="/Public/Test/images/list3.png" alt=""><span>休闲娱乐</span></li>
		<li class="food_titleright mt-40"><a href="##">查看更多推荐</a><img src="/Public/Test/images/more.png" alt=""></li>
	</ul>
<div class="clear_float"></div>	
<div class=" rew">
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
</div>
<div class="clear_float"></div>
<div class="more"><p><a href="">点击查看更多休闲娱乐</a>&nbsp;&gt;</p></div>
<div class="clear_float"></div>
<!-- 休闲娱乐结束 -->
<!--旅游开始  -->
<ul class="food_box">
		<li class="food_title"><img src="/Public/Test/images/list4.png" alt=""><span>旅游</span></li>
		<li class="food_titleright mt-40"><a href="##">查看更多推荐</a><img src="/Public/Test/images/more.png" alt=""></li>
	</ul>
<div class="clear_float"></div>	
<div class=" rew">
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
</div>
<div class="clear_float"></div>
<div class="more"><p><a href="">点击查看更多旅游景点</a>&nbsp;&gt;</p></div>
<div class="clear_float"></div>
<!-- 旅游结束 -->
<!--购物开始  -->
<ul class="food_box">
		<li class="food_title"><img src="/Public/Test/images/list5.png" alt=""><span>购物</span></li>
		<li class="food_titleright mt-40"><a href="##">查看更多推荐</a><img src="/Public/Test/images/more.png" alt=""></li>
	</ul>
<div class="clear_float"></div>	
<div class=" rew">
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
	<div class="por_food f-l">
		<ul>
			<li class="por_box"><a href="#"><img src="/Public/Test/images/proimg.jpg" alt="美食"></a></li>
			<li class="pro_title"><a href="#">【云中牧歌】渔歌岁月 <br><span>积分10%</span></a></li>
			<li class="pro_img"><img src="/Public/Test/images/ping1.png" alt=""></li>
		</ul>
	</div>
</div>
<div class="clear_float"></div>
<div class="more"><p><a href="">点击查看更多购物</a>&nbsp;&gt;</p></div>
<div class="clear_float"></div>
<!-- 购物结束 -->
</div>
</div>
<!-- -->
	<div class="pos_box"  id="pos2">
		<ul class="pos_box_one">
			<li><a href="##">近期浏览</a></li>
			<li><a href="##"><img src="/Public/Test/images/righr1.png" alt=""><span>20</span></a></li>
		</ul>
		<ul class="pos_nav_two">
			<div class="rowpicshow">
		        <ul>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		        </ul>
	      	</div>
	      	<div class="rowpicshow">
		        <ul>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		        </ul>
	      	</div>
	      	<div class="rowpicshow">
		        <ul>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		          <li><img  title="" src="/Public/Test/images/indexnav_03.png"></li>
		        </ul>
	      	</div>
	      	<div class="pmg_pi text-c mt-10 mb-10"> 
      	 		<a href="javascript:void(0)" class="prev">&lt;</a>
      			<a href="javascript:void(0)" class="next">&gt;</a>
	      	</div>
			</ul>
			<div class="clear_float"></div>
			<ul class="pos_nav_three">
				<li><a href="##">问卷调查</a></li>
				<li><a href="##"><img src="/Public/Test/images/righr2.png" alt=""></a></li>
			</ul>
			<ul class="pos_nav_three">
				<li><a href="##">帮助中心</a></li>
				<li><a href="##"><img src="/Public/Test/images/righr3.png" alt=""></a></li>
			</ul>
			<ul class="pos_nav_three">
				<li><a href="javascript:scroll(0,0)">返回顶部</a></li>
				<li><a href="javascript:scroll(0,0)"><img src="/Public/Test/images/righr4.png" alt=""></a></li>
			</ul>
	</div>
<!-- 尾部 -->
<div class="clear_float"></div>
<div class="footer_box" id="footer">
<div class="footer container rew" >
	<div class="footer_nav f-l ml-10 mt-40 col-xs-1 col-md-1 col-lg-1">
		<ul>
			<p class="footer_title"><a href="<?php echo U('Index/message');?>">公司信息</a></p>
			<li><a href="<?php echo U('Index/message');?>">关于纳邦</a></li>
			<li><a href="<?php echo U('Index/message');?>">加入我们</a></li>
			<li><a href="<?php echo U('Index/message');?>">法律声明</a></li>
			<li><a href="<?php echo U('Index/message');?>">用户协议</a></li>
		</ul>
	</div>
	<div class="footer_nav f-l ml-50 mt-40 col-xs-2 col-md-2 col-lg-2">
		<ul>
			<p class="footer_title"><a href="<?php echo U('Index/shop_index');?>">商家服务</a></p>
			<li><a href="<?php echo U('Index/shop_index');?>">商家合作</a></li>
			<li><a href="<?php echo U('Index/shop_index');?>">市场合作</a></li>
			<li><a href="<?php echo U('Index/shop_index');?>">商家联盟</a></li>
			<li><a href="<?php echo U('Index/shop_index');?>">廉正邮箱</a></li>
		</ul>
	</div>
	<div class="footer_nav f-l  mt-40 col-xs-2 col-md-2 col-lg-2 mb-20">
		<ul>
			<p class="footer_title"><a href="<?php echo U('Index/business_help');?>">用户帮助</a></p>
			<li><a href="<?php echo U('Index/business_help');?>">申请退款</a></li>
			<li><a href="<?php echo U('Index/business_help');?>">查看加油电子券</a></li>
			<li><a href="<?php echo U('Index/business_help');?>">常见问题</a></li>
			<li><a href="<?php echo U('Index/business_help');?>">开发API</a></li>
			<li><a href="<?php echo U('Index/business_help');?>">反诈骗公告</a></li>
		</ul>
	</div>
	<div class="footer_conter col-xs-4 col-md-4 col-lg-4 mt-40 lh-35">
		<p>手机扫描</p>
		<ul class="scan mt-5 col-xs-4 col-md-4 col-lg-4">
			<li ><a href="javascript:void(0);" onclick="phone1()"><img src="/Public/Test/images/scan1.png" alt=""></a></li>
			<li>IOS版下载</li>
		</ul>
		<ul class="scan  mt-5 col-xs-4 col-md-4 col-lg-4 ">
			<li ><a href="javascript:void(0);" onclick="phone2()"><img src="/Public/Test/images/scan2.png" alt=""></a></li>
			<li>安卓版下载</li>
		</ul>
		<ul class="scan  mt-5 col-xs-4 col-md-4 col-lg-4">
			<li><a href="javascript:void(0);"  onclick="phone3()"><img src="/Public/Test/images/scan3.png" alt=""></a></li>
			<li>官方微信</li>
		</ul>
	</div>
	<div>
		<ul class="touch_phone col-xs-2 col-md-2 col-lg-2  lh-25 text-c mt-40">
			<li>客服电话</li>
			<li>0757-283383838</li>
			<li><span>周一到周六9:30-17:30</span></li>
		</ul>	
	</div>
</div>
<div class="firm_urlbox container-fluid f-l">
	<div class="firm_urlmin rew">
		<ul class="container lh-25 text-c">
			<li>粤ICP证070359 粤ICP备07343359  营业执照信息</li>
		</ul>
		<ul class="firm_url">
			<li>Copyright  &copy; 2016 nbesq.com 版权所有 | 消费者维权热线：0757-28338383</li>
		</ul>
	</div>
</div>
</div>
<script type="text/javascript">
	// -----
		function phone1() {
        layer.open({
        	title: [
		    '<img class="pho-pic" src="/Public/Test/images/scan1.png" alt="">',
		    'background-color:#79dccd; color:#fff;']
            ,type: false,
            skin: 'layui-layer-rim', //加上边框
            area: ['200px', '200px'], //宽高
            content: '<img class="open-pic" src="/Public/Test/images/user_r2_c11_02.png" alt="">'
       	 });
    	}
    	function phone2() {
        layer.open({
        	title: [
		    '<img class="pho-pic" src="/Public/Test/images/scan2.png" alt="">',
		    'background-color:#79dccd; color:#fff;']
            ,type: false,
            skin: 'layui-layer-rim', //加上边框
            area: ['200px', '200px'], //宽高
            content: '<img class="open-pic" src="/Public/Test/images/user_r2_c11_02.png" alt="">'
       	 });
    	}
    	function phone3() {
        layer.open({
        	title: [
		    '<img class="pho-pic" src="/Public/Test/images/scan3.png" alt="">',
		    'background-color:#79dccd; color:#fff;']
            ,type: false,
            skin: 'layui-layer-rim', //加上边框
            area: ['200px', '200px'], //宽高
            content: '<img class="open-pic" src="/Public/Test/images/user_r2_c11_02.png" alt="">'
       	 });
    	}
</script>

</body>
<script type="text/javascript" src="/Public/Test/js/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/Test/js/minll.js"></script>
<script type="text/javascript" src="/Public/Test/js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript">
//---只能在当前--------
    $(function(){
    	$(".rowpicshow").jCarouselLite({
    		auto: 5000, /*自动播放间隔时间*/
    		speed: 500, /*速度*/
    		btnNext:".next",/*向前滚动*/
    		btnPrev:".prev",/*向后滚动*/
    		visible:1 /*显示数量*/
    	});
    });
    function lanShow(){
		return false;
		document.getElementById('allsort').style.display="block";
	}	
	function lanImg(){
		return false;
		
	}
	document.getElementById('allsort').style.marginTop="-10px";
	
	$(function(){
    $.Huitab("#tab_demo .tabBar li","#tab_demo .tabCon","indcurrent","click","0");
    });
    // --手机客户端扫码下载--------
     function nxShow(num){
		// alert("the show");
		for(var i=1; i<2; i++){
		var obj=document.getElementById("Ing"+i);
		obj.style.display="none";
		}
		var obj1=document.getElementById("Ing"+num);
		obj1.style.display="block";
		}
		function nxIng(){
		document.getElementById("Ing1").style.display='none';
		}
		
    	//----只能放在当前页面------
		    window.onscroll=function(){ 
		    var t=document.documentElement.scrollTop||document.body.scrollTop;  
		    var pos2=document.getElementById("pos2"); 
		    if(t>=880){ 
		        pos2.className = "pos1";
		    }else{
		        pos2.className = "pos2";
		    } 
		}
</script>
</html>