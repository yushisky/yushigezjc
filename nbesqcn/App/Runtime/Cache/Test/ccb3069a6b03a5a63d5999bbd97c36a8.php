<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>消费券</title>
	<!--H-ui.Membermin.css只用于Member-->
	<link rel="stylesheet" type="text/css" href="/Public/Test/js/H-ui/css/H-ui.Membermin.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/Test/js/H-ui/css/H-ui.reset.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/Test/css/Member_index.css">
	<script type="text/javascript" language="javascript" src="/Public/Test/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="/Public/Test/js/H-ui/js/H-ui.js"></script>
</head>
<body>
<div class="container-fluid header_box">
<div class="container header_box">
	<ul class="header_top1 col-md-4">
		<li><a href="##" onclick="addFavorite(window.location,document.title)"><img class="f-l cl-pic mr-5" src="/Public/Test/images/sureness_conter_03.jpg" alt="">收藏社区</a><i><img src="/Public/Test/images/index_03.png" alt=""></i></li>
			<li><a href="javascript:void(0);">最佳损友</a>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);">退出</a><i><img src="/Public/Test/images/index_03.png" alt=""></i></li>
		<nav class="nav-collapse" role="navigation" id="Hui-navbar">
			<li class="dropDown dropDown_hover" ><a href="#" class="colo-l dropDown_A " ><img class="f-l cl-pic mr-5" src="/Public/Test/images/phone.png" alt="">手机版</a>
				<ul class="dropDown-menu pic6 ">
					<ol><img src="/Public/Test/images/user_r2_c11_02.png" alt=""></ol>
					<ol><span>扫码关注纳邦官方微博</span></ol>
				</ul>
			</li>
		</nav>
	</ul>
	<ul class="header_top2 f-r ">
	<nav class="nav-collapse" role="navigation" id="Hui-navbar" >
		<ol class="dropDown dropDown_hover "><a href="javascript:void(0) " class="dropDown_A">我的社区 <i class="Hui_img f-r"></i></a>
		<nav class="bg-box" ></nav>
			<ul class="dropDown-menu pic1 ">
				<li><a href="#">我的社区</a></li>
				<li><a href="#">我的社区</a></li>
				<li><a href="#">我的社区</a></li>
			</ul>
		</ol>
		<ol class="dropDown dropDown_hover"><i class="Hui_ico f-l pr"></i><a href="#" class="dropDown_A">最近浏览 <i class="Hui_img f-r "></i></a>
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
		<ol class="dropDown dropDown_hover "><i class="Hui_ico f-l pr"></i><a href="#" class="dropDown_A">联系客服 <i class="Hui_img f-r "></i></a>
			<ul class=" dropDown-menu pic3  ">
				<li><a href="#">联系客服</a></li>
				<li><a href="#">联系客服</a></li>
				<li><a href="#">联系客服</a></li>
			</ul>
		</ol>
		<ol class="dropDown dropDown_hover"><i class="Hui_ico f-l pr"></i><a href="javascript:void(0);" class="dropDown_A">我是商家<i class="Hui_img f-r "></i></a>
			<ul class=" dropDown-menu pic5 ">
				<li>22222222</li>
				<li>22222222</li>
				<li>22222222</li>
				<li>22222222</li>
			</ul>
		</ol>
	</nav>
	</ul>	
</div>
</div>
<div class="conter_box container mt-20 mb-20">
	<div class="logo container">
		<ul class="logo_left f-l">
			<li><img src="/Public/Test/images/logo_conter.png" alt="logo"></li>
			<li class="logo_lefttitle f-l">佛山<br><span>切换城市</span></li>
		</ul>
		<ul class="logo_conter">
			<li>
				<form method="get" id="searchform" action="">
			    <fieldset class="search">
			         <input type="text" class="box" name="s" id="s" class="inputText" placeholder="&nbsp;输入商品，商铺名称" x-webkit-speech>
			          <button class="btn" title="SEARCH">搜索</button>
			    </fieldset>
				</form>
			</li>
		</ul>
	</div>
	<div class="lanren">
		<div id="nav-2015">
			<div id="category-2015" onMouseOver="this.className='on'" onmouseleave="this.className=''">
					<div class="ld">
						<h2>全部商品分类<b></b></h2>
					</div>
				<div id="allsort" id="category-2015">
			<div class="item" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
				<span><h3><a href="javascript:void(0);"><img src="/Public/Test/images/f1.png" alt="">美食</a></h3></span>
				<div class="i-mc">
					<p href="javascript:void(0);">美食</p>
					<a href="javascript:void(0);">美食</a>
					<a href="javascript:void(0);">美食</a>
					<a href="javascript:void(0);">美食</a>
					<a href="javascript:void(0);">美食</a>
				</div>
			</div>
			<div class="item pic_ite" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
				<span><h3><a href="javascript:void(0);"><img src="/Public/Test/images/f2.png" alt="">酒店</a></h3></span>
				<div class="i-mc">
					<p href="">酒店</p>
					<a href="">酒店</a>
					<a href="">酒店</a>
					<a href="">酒店</a>
				</div>
			</div>
			<div class="item" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
				<span><h3><a href="javascript:void(0);"><img src="/Public/Test/images/f3.png" alt="">休闲娱乐</a></h3></span>
				<div class="i-mc">
					<p href="">休闲娱乐</p>
					<a href="">休闲娱乐</a>
					<a href="">休闲娱乐</a>
					<a href="">休闲娱乐</a>
					<a href="">休闲娱乐</a>
					<a href="">休闲娱乐</a>
					<a href="">休闲娱乐</a>
				</div>
			</div>
			<div class="item" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
				<span><h3><a href="javascript:void(0);"><img src="/Public/Test/images/f4.png" alt="">旅游</a></h3></span>
				<div class="i-mc">
					<p>旅游</p>
					<a href="">旅游</a>
					<a href="">旅游</a>
					<a href="">旅游</a>
					<a href="">旅游</a>
					<a href="">旅游</a>
				</div>
			</div>
			<div class="item" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
				<span><h3><a href="javascript:void(0);"><img src="/Public/Test/images/f5.png" alt="">购物</a></h3></span>
				<div class="i-mc">
					<p href="">购物</p>
					<a href="">购物</a>
					<a href="">购物</a>
					<a href="">购物</a>
					<a href="">购物</a>
					<a href="">购物</a>
					<a href="">购物</a>
					<a href="">购物</a>
				</div>
			</div>
			</div>
			</div>
				<div id="navitems-2015">
					<ul>
						<li><a href="javascript:void(0);">首页</a></li>
						<li><a href="javascript:void(0);">美食</a></li>
						<li><a href="javascript:void(0);">酒店</a></li>
						<li><a href="javascript:void(0);">休闲娱乐</a></li>
						<li><a href="javascript:void(0);">旅游</a></li>
						<li><a href="javascript:void(0);">购物</a></li>
					</ul>
				</div>
		</div>
	</div>	
<div class="nav_conter f-l mt-15">
		<div class="nav-1">
			<b><span>我的账户</span></b>
			<ul class="nav-0">
				<li ><a href="<?php echo U('Member/index');?>">&bull;&nbsp;账户设置</a></li>
				<li  class="bgnav-box"><a href="<?php echo U('ticket');?>">&bull;&nbsp;消费券</a><span class="f-r mr-10">&gt;</span></li>
				<li ><a href="<?php echo U('balance');?>">&bull;&nbsp;我的余额</a></li>
				<li ><a href="<?php echo U('conter');?>">&bull;&nbsp;安全中心</a></li>
				<li ><a href="<?php echo U('recharge');?>">&bull;&nbsp;充值中心</a></li>
			</ul>
			<b><span>我的评价</span></b>
			<ul class="nav-0">
				<li class="app_title2"><a href="<?php echo U('stayapp');?>">&bull;&nbsp;待评价</a><span>6</span></li>
				<li><a href="<?php echo U('appraise');?>">&bull;&nbsp;已评价</a></li>
			</ul>
	</div>
	</div>
	<div id="tab_demo">
	<ul class="mag_top_title-01 f-l mt-30 ml-40">
		<li><a href="javascript:void(0);">待用</a></li>
		<li><a href="javascript:void(0);">已用</a></li>
		<li><a href="javascript:void(0);">过期</a></li>
	</ul>
	</div>
	<div id="tab_demo">
<!-- 待用 -->
<div class="cont_txt tabCon mb-50 col-xs-8 ml-50" >
	<div class="nav_one">
		<ul class="cont_txt1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ul class="cont_txt2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_one">
		<ul class="cont_txt1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ul class="cont_txt2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_one">
		<ul class="cont_txt1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ul class="cont_txt2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_one">
		<ul class="cont_txt1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ul class="cont_txt2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_one">
		<ul class="cont_txt1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ul class="cont_txt2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_one">
		<ul class="cont_txt1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ul class="cont_txt2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_one">
		<ul class="cont_txt1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ul class="cont_txt2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_one">
		<ul class="cont_txt1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ul class="cont_txt2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_one">
		<ul class="cont_txt1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ul class="cont_txt2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_one">
		<ul class="cont_txt1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ul class="cont_txt2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
</div>
<!-- 已用 -->
<div class="cont_b2 tabCon mb-50"  style="display:none;">
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r2_c2.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r2_c2.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r2_c2.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r2_c2.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r2_c2.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r2_c2.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r2_c2.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r2_c2.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r2_c2.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r2_c2.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
</div>
<!--  过期-->
<div class="cont_b2 tabCon" style="display:none;" >
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r4_c3.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r4_c3.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r4_c3.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r4_c3.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r4_c3.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	<div class="nav_two">
		<ul class="cont_t1">
			<li>港饮广食</li>
			<li><span>2016.8.26-2016.9.01</span></li>
		</ul>
		<ol><img class="ti_img" src="/Public/Test/images/Member_ticket1_r4_c3.png" alt=""></ol>
		<ul class="cont_t2">
			<li>50元</li>
			<li><span>消费券</span></li>
			<li><span>满一百可用</span></li>
		</ul>
	</div>
	</div>
	</div>
	</div>
</div>
</body>
<script type="text/javascript" language="javascript"> 
$(function(){
    $.Huitab("#tab_demo .mag_top_title-01 li","#tab_demo .tabCon","mebcurrent","click","0");
    });
</script>
</html>