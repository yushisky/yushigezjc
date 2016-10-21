<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="X-UA-Compatible" content="IE=8">
	<title>商家详情</title>
	<style>
		.lanren{display:none;}
	</style>
		<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.min.css">
	<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.reset.css">
	<link rel="stylesheet" type="text/css" href="/Public/Test/css/index.css">
	<script type="text/javascript" src="/Public/Test/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="/Public/Test/js/H-ui/js/H-ui.js"></script>
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
			<span><h3><a href="#"><img style="width:30px;height:30px;" src="<?php echo ($val["icon"]); ?>" alt=""><?php echo ($val["name"]); ?></a></h3></span>
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
<div class="clear_float"></div>
<div class="food_nav f-l col-xs-12 col-md-12 col-lg-12">
	<ul class="food_navone  lh-50">
		<li><a href="##">佛山</a></li>
		<li>&gt;</li>
		<li><a href="##">美食</a></li>
		<li>&gt;</li>
		<li><a href="##">韩国料理</a></li>
		<li>&gt;</li>
		<li><span>妙香居韩国料理(鹏瑞利店)</span></li>
	</ul>
</div>
<div class="clear_float"></div>
<div class=" container">
	<div class="f-l mt-50">
		<div id="banner_tabs" class="flexslider">
			<ul class="slides">
				<li ><a ><img src="/Public/Test/images/proimg4.jpg" alt=""></a></li>
				<li ><a><img src="/Public/Test/images/proimg5.jpg" alt=""></a></li>
				<li><a><img src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
				<li ><a ><img src="/Public/Test/images/proimg4.jpg" alt=""></a></li>
				<li ><a><img src="/Public/Test/images/proimg5.jpg" alt=""></a></li>
			</ul>
			<ul class="flex-direction-nav">
				<li><a class="flex-prev" href="javascript:;"></a></li>
				<li><a class="flex-next" href="javascript:;"></a></li>
			</ul>
		</div>
		<ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
			<li ><a ><img src="/Public/Test/images/proimg4.jpg" alt=""></a></li>
			<li ><a><img src="/Public/Test/images/proimg5.jpg" alt=""></a></li>
			<li><a><img src="/Public/Test/images/hotimg.jpg" alt=""></a></li>
			<li ><a ><img src="/Public/Test/images/proimg4.jpg" alt=""></a></li>
			<li ><a><img src="/Public/Test/images/proimg5.jpg" alt=""></a></li>
		</ol>
	</div>
<div class="f-l mt-60 ban_right ml-30">
		<ul class="right_title f-r col-xs-12 col-md-12 col-lg-12" >
			<li><span>10%积分 &nbsp;</span>(在本店消费即可获赠消费总额10%的抵现积分)</li>
		</ul>
		<div class="clear_float"></div>
		<ul class="right_app f-l col-xs-12 col-md-12 col-lg-12">
			<li>人均75元</li>
			<li><img src="/Public/Test/images/ping1.png" alt="">&nbsp;&nbsp;<span>5.0分</span></li>
			<p>1740条评价</p>
		</ul>
		<div class="clear_float"></div>
		<div class="right_sale col-xs-12">
			<p><img src="/Public/Test/images/sale.jpg" alt=""></p>
			<ul class="col_l f-l ml-10">
				<li class="">领取消费券的必选项<span>有效期:截止2016-06-01</span></li>
				<ol  class="f-l">
					<dl class="select mt-10 ml-10 ">
						<dt>请选择</dt>
						<dd>
							<ol class="f-r">
								<li><a href="javascript:void(0)">50元消费券，本店消费满200可用</a></li>
								<li><a href="javascript:void(0)">100元消费券，本店消费满500可用</a></li>
								<li><a href="javascript:void(0)">200元消费券，本店消费满800可用</a></li>
								<li><a href="javascript:void(0)">300元消费券，本店消费满1000可用</a></li>
								<li><a href="javascript:void(0)">400元消费券，本店消费满1300可用</a></li>
								<li><a href="javascript:void(0)">500元消费券，本店消费满1500可用</a></li>
							</ol>
						</dd>
					</dl>
				</ol>
			</ul>
		</div>
		<div class="clear_float"></div>
		<ul class="go_set col-xs-2">
			<li><input class="btn btn-gbs radius" type="submit" value="立即领券"></li>
		</ul>
		<div class="banner_serve  f-r">
			<ul>
				<li><img src="/Public/Test/images/f7.png" alt=""><span>300</span></li>
				<li><img src="/Public/Test/images/f8.png" alt=""></li>
				<li id="li-1"><img src="/Public/Test/images/f9.png" alt=""></li>
				<li><img src="/Public/Test/images/f10.png" alt=""></li>
				<ul id="box-1" class="link_fir app_ereima">
					<li><img src="/Public/Test/images/sh1.png" alt="">微信</li>
					<li><img src="/Public/Test/images/sh2.png" alt="">新浪微博</li>
					<li><img src="/Public/Test/images/sh3.png" alt="">腾讯QQ</li>
					<li><img src="/Public/Test/images/sh4.png" alt="">QQ空间</li>
					<li><img src="/Public/Test/images/sh5.png" alt="">人人网</li>
				</ul>
			</ul>
		</div>
</div>
	<div class="clear_float"></div>
	<p class="serve_formbox col-xs-12"></p>
	<div class="serve_content f-l mt-20">
			<ul class="serve_form col-xs-12 mb-20">
				<p><img src="/Public/Test/images/f11.png" alt=""><span>最新通知</span></p>
				<li>亲爱的用户，本次消费券有效期延长至2016年07月08日，感谢您的支持，祝消费愉快~</li>
			</ul>
			<div class="empty-placeholder hidden"></div>
			<div id="subNav">
				<ul class="f-l">
					<li class="adv_active"><a href="#hall_show" class="adv_door adv_active">商家位置</a></li>
					<li><a href="#checkCar" class="adv_source">消费提示</a></li>
					<li><a href="#alpha_price" class="adv_price">产品展示</a></li>
					<li><a href="#service_show" class="adv_transfer">商家介绍</a></li>
					<li><a href="#pay_show" class="adv_payment">消费评价(1740)</a></li>
				</ul>
			</div>	
			<ul class="serve_titleone ">
				<li id="hall_show">商家位置</li>
			</ul>
		<div class="form_map f-l mt-20">
		<div class="f-l" style="width:400px;height:280px;border:#ccc solid 1px;font-size:16px;font-weight:700;" id="map"></div>
			<ul class="form_pro f-l">
					<li>筛选：</li>
					<li>
					<dl class="selectts f-l">
						<dt>佛山市</dt>
						<dd>
							<ol>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
							</ol>
						</dd>
					</dl>
					</li>
					<li>
					<dl class="selects">
						<dt>全城区</dt>
						<dd>
							<ol>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
							</ol>
						</dd>
					</dl>
					</li>
				</ul>
			<div class="f-l col-xs-5">
				<ul class="map_hot f-l">
					<li><a href="javascript:void(0)">妙香居韩国料理(嘉州广场店)</a></li>
					<li><a href="javascript:void(0)">妙香居韩国料理(大良购物广场店)</a></li>
					<li><a href="javascript:void(0)">妙香居韩国料理(嘉州广场店)</a></li>
					<li><a href="javascript:void(0)">妙香居韩国料理(大良购物广场店)</a></li>
				</ul>
				<ul class="form_url f-l ml-20 lh-35">
					<p>佛山市南海区桂城灯湖东路20号保利水城1楼1B181-185号近千灯湖</p>
					<li>075786209737&nbsp; <img src="/Public/Test/images/index_03.png" alt="">&nbsp;&nbsp;075781667378</li>
				</ul>
				<ul class="form_pb">
					<li><a href="javascript:void(0)" onclick="map1()"><img src="/Public/Test/images/pb3.png" alt="">&nbsp;查看地图</a></li>
					<li><a href="javascript:void(0)" onclick="map2()"><img src="/Public/Test/images/pb4.png" alt="">&nbsp;公交/驾车去这里</a></li>
				</ul>
			</div>
		</div>
		</div>
	<div class="client_content f-r">
		<div class="client_righttop">
			<img src="/Public/Test/images/rightfood_03.png" alt="客户端">
			<ul onmouseover="nxShow(1)" onMouseOut="nxIng()">
				<li>下载手机客户端</li>
				<li class="client_title">下载省钱神器</li>
			</ul>
			<div class="bg-box-02" id="Ing1" >
			      <i class="ewi-box"></i>
				<img  src="/Public/Test/images/login1_r3_c5.jpg" alt="">
		  	</div>
		</div>
		<div class="client_right">
			<ul class="client_right1">
				<li> <img src="/Public/Test/images/rightfood_07.png" alt=""> <span>猜你喜欢</span></li>
			</ul>
			<ul class="client_right2">
				<li><img src="/Public/Test/images/class1_03.png" alt=""></li>
				<li>杏记食品</li>
			</ul>
			<ul class="client_right3">
				<li>六折</li>
				<p><img src="/Public/Test/images/ping3.png" alt=""></p>
			</ul>
		</div>
	</div>
	
		<div class="por_conter f-l">
		<ul class="serve_titleone">
			<li id="checkCar">消费提示</li>
		</ul>
			<ul class="por_left  f-l">
				<li><span>消费券有效期</span></li>
				<li><span>使用时间</span></li>
				<li><span>预约提醒</span></li>
				<li><span>优惠券使用提醒</span></li>
				<li><span>包间</span></li>
				<li><span>堂食外带</span></li>
				<li><span>温馨提示</span></li>
				<li><span>商家服务</span></li>
			</ul>
			<ul class="por_right ">
				<li><span>2014.11.1至2016.07.01（周末，法定节假日通用）</span></li>
				<li><span>08:30-22:30</span></li>
				<li><span>无需预约消费高峰时可能等待</span></li>
				<li><span>不可叠加使用，不兑现，不找零</span></li>
				<li><span>店内有5个包间</span></li>
				<li><span>堂食均可外带，可以打包，打包费详情咨询商家</span></li>
				<li><span>优惠券用户不可同时享受商家其他优惠</span></li>
				<li><span>提供免费WiFi,停车位收费标准：免费停车</span></li>
			</ul>
		</div>
			
		<div class="pro_conter">
			<ul class="serve_titleone">
				<li id="alpha_price"> 产品展示</li>
			</ul>
			<div>
				<img src="/Public/Test/images/shops_03.png" alt="">
			</div>
		</div>
		<div class="pro_conter">
			<ul class="serve_titleone">
				<li id="service_show">商家介绍</li>
			</ul>
			<div>
				<ul>
					<li><img src="/Public/Test/images/present_03.png" alt=""></li>
					<li><img src="/Public/Test/images/present_07.png" alt=""></li>
					<li><img src="/Public/Test/images/present_11.png" alt=""></li>
					<li><img src="/Public/Test/images/present_13.png" alt=""></li>
				</ul>
			</div>
		</div>
		<div class="clear_float"></div>
	<div class="clear_float"></div>
	<div class="pro_conter1">
		<ul class="serve_titleone">
			<li id="pay_show">消费评价</li>
		</ul>
			<div class="f-l container-fluid">
				<ul class="pro_cont col-md-3">
					<li class="pro_one">4.5</li>
					<li><img src="/Public/Test/images/prov_03.png" alt=""></li>
					<li>已有<span>1740</span>条评论</li>
				</ul>
				<ul class="pro_content col-md-5">
					<li>好评<img src="/Public/Test/images/pings_03.png" alt="">&nbsp;<span>60%</span></li>
					<li>中评<img src="/Public/Test/images/pings_06.png" alt="">&nbsp;<span>30%</span></li>
					<li>差评<img src="/Public/Test/images/pings_09.png" alt="">&nbsp;<span>10%</span></li>
				</ul>
				<ul class="pro_bott col-xs-4 pt-10">
					<li>口味<img src="/Public/Test/images/ping1.png" alt=""><span>5.0分</span></li>
					<li>环境<img src="/Public/Test/images/ping1.png" alt=""><span>5.0分</span></li>
					<li>服务<img src="/Public/Test/images/ping1.png" alt=""><span>4.6分</span></li>
				</ul>
			</div>
			<div class="pings_pro col-xs-12 col-md-12">
				<ul>
					<p>大家认为</p>
					<li>味道不错<span>（66）</span></li>
					<li>环境不错<span>（66）</span></li>
					<li>服务态度好<span>（66）</span></li>
					<li>分量足<span>（66）</span></li>
					<li>价格实惠<span>（66）</span></li>
					<li>折扣大<span>（66）</span></li>
					<ol>
					<select  name="" id="">
					<option value="#">更多</option>
					<option value="#">更多</option>
					<option value="#">更多</option>
					<option value="#">更多</option>
					</select></ol>
				</ul>
			</div>
	<div class="pings_cont mt-40 f-l">
			<ul class="pings_conttwo">
				<li class="pings_title"><a href="##">全部<span>（1740）</span> </a></li>
				<li><a href="##">好评<span>（1290）</a></span></li>
				<li><a href="##">中评<span>（122）</a></span></li>
				<li><a href="##">差评<span>（36）</a></span></li>
			</ul>
			<ul class="pings_contone">
				<li><input name="" type="checkbox">有图</li>
				<li><input name="" type="checkbox">有内容</li>
				<li>
				<select  name="" id="">
				<option value="#">默认排序</option>
				<option value="#">时间排序</option>
				</select>
				</li>
			</ul>
		</div>
	<input type='hidden' id='current_page' />
	<input type='hidden' id='show_per_page' />
	<div id='content'>	
		<div class="pimg_nav f-l container-fluid mt-20">
				<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
				<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
					<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
					<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
				</ul>
				<div class="clear_float"></div>
				<ul class="ping_content ">
					<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
					<li class="ping_deta">2016-06-06 &nbsp;13:30</li>
				</ul>
		</div>
		<div class="pimg_nav f-l container-fluid mt-20">
			<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
				<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
					<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
					<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
				</ul>
				<div class="clear_float"></div>
				<ul class="ping_content ">
					<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
					<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
				</ul>
		</div>
		<div class="pimg_nav f-l container-fluid mt-20">
				<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
				<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
					<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
					<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
				</ul>
				<div class="clear_float"></div>
				<ul class="ping_content ">
					<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
					<li class="ping_conting wap">
					<div id="example1" data-chocolat-title="set title" class="pick">
						<a class="chocolat-image" href="/Public/Test/images/f1.png" title="xs-pic">
						<img class="pick_ing" src="/Public/Test/images/f1.png" alt="on">
						</a>
						<a class="chocolat-image" href="/Public/Test/images/present_13.png" title="xs-pic">
							<img class="pick_ing" src="/Public/Test/images/present_13.png" alt="on">
						</a>
						<a class="chocolat-image" href="/Public/Test/images/present_11.png" title="xs-pic">
							<img class="pick_ing" src="/Public/Test/images/present_11.png" alt="on">
						</a>
						<a class="chocolat-image" href="/Public/Test/images/present_07.png" title="xs-pic">
							<img class="pick_ing" src="/Public/Test/images/present_07.png" alt="on">
						</a>
						<a class="chocolat-image" href="/Public/Test/images/present_03.png" title="xs-pic">
							<img class="pick_ing" src="/Public/Test/images/present_03.png" alt="on">
						</a>
					</div>
					<div id="container1" class="mt-20" ></div>
					</li>
					<div class="clear_float"></div>
					<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
				</ul>
		</div>
		<div class="pimg_nav f-l container-fluid mt-20">
				<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
				<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
					<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
					<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
				</ul>
				<div class="clear_float"></div>
				<ul class="ping_content">
					<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
					<li class="ping_conting wap">
					<div id="example2" data-chocolat-title="set title" class="pick">
						<a class="chocolat-image" href="/Public/Test/images/f1.png" title="Rose">
						<img class="pick_ing" src="/Public/Test/images/f1.png" alt="on">
						</a>
						<a class="chocolat-image" href="/Public/Test/images/f2.png" title="Black">
							<img class="pick_ing" src="/Public/Test/images/f2.png" alt="on">
						</a>
						<a class="chocolat-image" href="/Public/Test/images/f3.png" title="Yellow">
							<img class="pick_ing" src="/Public/Test/images/f3.png" alt="on">
						</a>
						<a class="chocolat-image" href="/Public/Test/images/f4.png" title="Yellow">
							<img class="pick_ing" src="/Public/Test/images/f4.png" alt="on">
						</a>
						<a class="chocolat-image" href="/Public/Test/images/f5.png" title="Yellow">
							<img class="pick_ing" src="/Public/Test/images/f5.png" alt="on">
						</a>
					</div>
					<div id="container2"  ></div>
					</li>
					<div class="clear_float"></div>
					<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
				</ul>
		</div>
		<div class="pimg_nav f-l container-fluid mt-20">
			<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
			<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
				<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
				<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
			</ul>
			<div class="clear_float"></div>
			<ul class="ping_content">
				<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
				<li class="ping_conting wap">
				</li>
				<div class="clear_float"></div>
				<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
			</ul>
		</div>
		<div class="pimg_nav f-l container-fluid mt-20">
			<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
			<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
				<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
				<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
			</ul>
			<div class="clear_float"></div>
			<ul class="ping_content">
				<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
				<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
			</ul>
		</div>
		<div class="pimg_nav f-l container-fluid mt-20">
			<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
			<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
				<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
				<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
			</ul>
			<div class="clear_float"></div>
			<ul class="ping_content">
				<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
				<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
			</ul>
		 </div>
		 <div class="pimg_nav f-l container-fluid mt-20">
			<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
			<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
				<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
				<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
			</ul>
			<div class="clear_float"></div>
			<ul class="ping_content">
				<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
				<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
			</ul>
		 </div>
		 <div class="pimg_nav f-l container-fluid mt-20">
			<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
			<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
				<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
				<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
			</ul>
			<div class="clear_float"></div>
			<ul class="ping_content">
				<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
				<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
			</ul>
		 </div>
		 <div class="pimg_nav f-l container-fluid mt-20">
			<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
			<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
				<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
				<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
			</ul>
			<div class="clear_float"></div>
			<ul class="ping_content ">
				<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
				<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
			</ul>
		 </div>
		 <div class="pimg_nav f-l container-fluid mt-20">
			<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
			<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
				<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
				<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
			</ul>
			<div class="clear_float"></div>
			<ul class="ping_content ">
				<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
				<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
			</ul>
		 </div>
		 <div class="pimg_nav f-l container-fluid mt-20">
			<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
			<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
				<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
				<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
			</ul>
			<div class="clear_float"></div>
			<ul class="ping_content">
				<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
				<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
			</ul>
		 </div>
		 <div class="pimg_nav f-l container-fluid mt-20">
			<p><img src="/Public/Test/images/proimg_03.png" alt=""></p>
			<ul class="pimg_nav_cont col-xs-12 col-md-12  f-l">
				<li class="pimg_nav_left"> <span>随风***的云</span><img src="/Public/Test/images/v1.png" alt=""></li>
				<li class="pimg_nav_right"><img src="/Public/Test/images/ping1.png" alt=""></li>
			</ul>
			<div class="clear_float"></div>
			<ul class="ping_content">
				<li class="ping_deta1">还行吧，虽然经常去，不过价格有点贵</li>
				<li class="ping_deta">2016-06-06 &nbsp;13:30 </li>
			</ul>
		 </div>
	</div>
	</div>
</div>
</div>
</div>
	<div class="clear_float"></div>
	<div class="page">
			<div id='page_navigation'></div>
	</div>
<!-- footer_content -->
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
<script type="text/javascript" src="/Public/Test/js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="/Public/Test/js/shop_get.js"></script>
<script type="text/javascript" src="/Public/Test/js/minll.js"></script>
<script type="text/javascript" src="/Public/Test/js/jquery.chocolat.js"></script>
<script type="text/javascript" src="/Public/Test/js/set.js"></script> 
<script type="text/javascript" src="/Public/Test/js/slider.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.2&ak=8YLug7T5QfNHtHC8uBlZQyUfsNSUBxC2"></script>
<script type="text/javascript">
    $(function(){
    	$(".rowpicshow").jCarouselLite({
    		auto: 5000, /*自动播放间隔时间*/
    		speed: 500, /*速度*/
    		btnNext:".next",/*向前滚动*/
    		btnPrev:".prev",/*向后滚动*/
    		visible:1 /*显示数量*/
    	});
    });

$(function() {
	var bannerSlider = new Slider($('#banner_tabs'), {
		time: 10000000,
		delay:10,
		event: 'hover',
		auto: true,
		mode: 'fade',
		controller: $('#bannerCtrl'),
		activeControllerCls: 'actives'
	});
	$('#banner_tabs .flex-prev').click(function() {
		bannerSlider.prev()
	});
	$('#banner_tabs .flex-next').click(function() {
		bannerSlider.next()
	});
})
// <!-- 消费评价   -->
	$(function(){
		$('#example1').Chocolat({
			container      : '#container1',
			imageSize     : 'contain',
			loop           : true,
		});
		$('#example2').Chocolat({
			container      : '#container2',
			imageSize     : 'contain',
			loop           : true,
		});

		$('#example3').Chocolat({
			container      : '#container3',
			imageSize     : 'contain',
			loop           : true,
		})

		$('#example4').Chocolat({
			container      : '#container4',
			imageSize     : 'contain',
			loop           : true,
		})
		$('#example4').Chocolat({
			container      : '#container4',
			imageSize     : 'contain',
			loop           : true,
		})
		$('#example4').Chocolat({
			container      : '#container4',
			imageSize     : 'contain',
			loop           : true,
		})
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
		// -------
		$(function(){
	    $('#div2 li a').click(function(){
	        $('#div2 li a').removeClass('activesr');
	        $(this).addClass('activesr');
	        // $('.cplb_nrsub li').removeClass('activesr');
	    });
	    })
	    //==============
    	function map1() {
        layer.open({
        	title: [
		    '妙香居韩国料理(鹏瑞利店)',
		    'background-color:#79dccd; color:#fff;']
            ,type: false,
            skin: 'layui-layer-rim', //加上边框
            area: ['700px', '450px'], //宽高
            content: '<div class="f-l" style="width:700px;height:450px;border:#ccc solid 1px;font-size:12px" id="map"></div>'
       	 });
    	}
    	function map2() {
        layer.open({
        	title: [
		    '查询线路',
		    'background-color:#79dccd; color:#fff;']
            ,type: false,
            skin: 'layui-layer-rim', //加上边框
            area: ['500px', '300px'], //宽高
            content: '<div  class="map-pic f-l col-md-12 "><nav class="ml-30 lh-50">目的地&nbsp;<span>妙香居韩国料理</span></nav><ul class="lh-50"><li class="radio-box col-md-12">出行方式<input type="radio" class="mr-5" id="sex-1" name="sex" datatype="*" nullmsg="请选择性别！"><label for="sex-1">公交</label><input type="radio"  class="mr-5" id="sex-1" name="sex" datatype="*" nullmsg="请选择性别！"><label for="sex-1">驾车</label></li></ul><nav class="ml-30 lh-50">出发地<input type="text" value="" class="input-test"></nav><tenter class="text-c col-md-7"><input type="submit" value="查询" class="btn btn-secondary radius"></tenter></div>'
       	 });
    	}
</script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(113.112544,22.962337),18);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
        {content:"666666666666",title:"纳邦人力资源服务",imageOffset: {width:0,height:3},position:{lat:22.961963,lng:113.112373}}
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap//Public/Test/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:false});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
// ===================
		$(function(){
//优势页面点击子导航
	var subNav_active = $(".adv_active");
	var subNav_scroll = function(target){
		subNav_active.removeClass	("adv_active");
		target.parent().addClass("adv_active");
		subNav_active = target.parent();
	};
	$("#subNav a").click(function(){
		subNav_scroll($(this));
		var target = $(this).attr("href");
		var targetScroll = $(target).offset().top - 80;
		$("html,body").animate({scrollTop:targetScroll},300);
		return false;
	});
	//页面跳转时定位
	if(window.location.hash){
		var targetScroll = $(window.location.hash).offset();
		$("html,body").animate({scrollTop:targetScroll},300);
	}
	$(window).scroll(function(){
		var $this = $(this);
		var targetTop = $(this).scrollTop();
		var footerTop = $("#footer").offset().bottom + 80;
		var height = $(window).height();
		
		if (targetTop >= 980){
			$("#subNav").addClass("fixedSubNav");
			$(".empty-placeholder").removeClass("hidden");
		}else{
			$("#subNav").removeClass("fixedSubNav");
			$(".empty-placeholder").addClass("hidden");
		}
		if(targetTop < 980){
			subNav_scroll($(".adv_door"));
		}else if(targetTop > 1000 && targetTop < 1240){
				subNav_scroll($(".adv_source"));
		}else if(targetTop > 1340 && targetTop < 3840){
				subNav_scroll($(".adv_price"));
		}else if(targetTop > 3968 && targetTop < 5268){
				subNav_scroll($(".adv_transfer"));
		}else if(targetTop > 5868 && targetTop < 6668){
				subNav_scroll($(".adv_payment"));
		}else if(targetTop > 7708 && targetTop < 9800){
				subNav_scroll($(".adv_promise"));//=====
		}else if(targetTop > 6800 && targetTop < 6800){
				subNav_scroll($(".adv_ride"));
		}else if(targetTop > 6800){
			subNav_scroll($(".adv_finance"));
		}
		})
		}());
	</script>
</html>