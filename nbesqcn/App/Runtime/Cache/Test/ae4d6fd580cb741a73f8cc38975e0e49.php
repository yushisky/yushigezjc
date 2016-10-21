<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="X-UA-Compatible" content="IE=8">
	<title>产品展示</title>
	<style>
		.lanren{display:none;}
	</style>
		<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.min.css">
	<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.reset.css">
	<link rel="stylesheet" type="text/css" href="/Public/Test/css/index.css">
	<script type="text/javascript" src="/Public/Test/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="/Public/Test/js/H-ui/js/H-ui.js"></script>
	<script type="text/javascript" language="javascript" src="/Public/Test/js/minll.js"> </script>
	<script type="text/javascript" src="/Public/Test/js/por.min.js"></script>
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
	<div class="clear_float"></div>
	<div class="big_box">
		<div class="form_deta f-l">
			<ul id="mainSelect" class="divMain" >
				<li><span><a href="">全部</a></span></li>
				<p>&gt;</p>
			</ul>
		</div>
	<div class="clear_float"></div>
	<div class="classright_box  mt-20" id="for2">
		<div class="classleft_box col-xs-2 col-md-2 col-lg-2">
			<ul class="classone">
				<li>分类<span><a href="##">全部</a></span></li>
			</ul>
		</div>
			<div>	
				<ul class="class_one col-xs-10 col-md-10 col-lg-10">
					<li><a href="##" id="aa" class="divSmall" rel="type">优惠券</a></li>
					<li><a href="##" id="bb" class="divSmall" rel="type">甜点饮品</a></li>
					<li><a href="##" id="cc" class="divSmall" rel="type">火锅火锅</a></li>
					<li><a href="##" id="1a" class="divSmall" rel="type">自助餐</a></li>
					<li><a href="##" id="a1a" class="divSmall" rel="type">小吃快餐</a></li>
					<li><a href="##" id="a11a" class="divSmall" rel="type">日韩料理</a></li>
					<li><a href="##"id="a2a" class="divSmall" rel="type">西餐</a></li>
					<li><a href="##" id="aa3" class="divSmall" rel="type">聚餐宴请</a></li>
					<li><a href="##"id="aa1" class="divSmall" rel="type">烧烤烤肉</a></li>
					<li><a href="##" id="aea" class="divSmall" rel="type">东北菜</a></li>
					<li><a href="##" id="aaa" class="divSmall" rel="type">川湘菜</a></li>
					<li><a href="##" id="aac" class="divSmall" rel="type">江浙菜</a></li>
					<li><a href="##" id="aad" class="divSmall" rel="type">香锅烤鱼</a></li>
					<li><a href="##" id="aav" class="divSmall" rel="type">粤港菜</a></li>
					<li><a href="##" id="aax" class="divSmall" rel="type">中式烧烤</a></li>
					<li><a href="##" id="aab" class="divSmall" rel="type">西北菜</a></li>
					<li><a href="##" id="aaz" class="divSmall" rel="type">咖啡酒吧茶</a></li>
					<li><a href="##" id="aaxv" class="divSmall" rel="type">云贵菜</a></li>
					<li><a href="##" id="aavx" class="divSmall" rel="type">东南亚菜</a></li>
					<li><a href="##" id="aa2" class="divSmall" rel="type">海鲜</a></li>
					<li><a href="##" id="aas" class="divSmall" rel="type">素食 </a></li>
					<li><a href="##" id="cc1" class="divSmall" rel="type">台湾/客家菜</a></li>
					<li><a href="##" id="dd" class="divSmall" rel="type">创意菜</a></li>
					<li><a href="##" id="ff" class="divSmall" rel="type">汤/粥/炖菜</a></li>
					<li><a href="##" id="ee" class="divSmall" rel="type">蒙餐</a></li>
					<li><a href="##" id="rr" class="divSmall" rel="type">新疆菜</a></li>
					<li><a href="##" id="ww" class="divSmall" rel="type">其他美食</a></li>
					<li><a href="##" id="qq" class="divSmall" rel="type">京菜鲁菜</a></li>
				</ul>
			</div>
			<!--  -->
			<div class="clear_float"></div>
			<div class="classleft_box col-xs-2 col-md-2 col-lg-2">
				<ul class="classtwo">
					<li>分类<span><a href="##">全部</a></span></li>
				</ul>
			</div>
		<div class="class_too col-xs-10 col-md-10 col-lg-10">	
			<nav class="sq_class f-l container-fluid lh-30">
				<a href="##">商圈</a><a href="##">地标</a>
			</nav>
			<ul class="class_two">
				<li><a href="##" >全部</a></li>
				<li><a href="##" id="havea" class="divSmalltw" rel="sprice">祖庙</a></li>
				<li><a href="##" id="haveb" class="divSmalltw" rel="sprice">东方广场</a></li>
				<li><a href="##" id="havec" class="divSmalltw" rel="sprice">百花广场</a></li>
				<li><a href="##" id="haveas" class="divSmalltw" rel="sprice">花槎</a></li>
				<li><a href="##" id="havess" class="divSmalltw" rel="sprice">创意产业园</a></li>
				<li><a href="##" id="havedd" class="divSmalltw" rel="sprice">季华五路</a></li>
				<li><a href="##" id="haveqq" class="divSmalltw" rel="sprice">汾江路沿线</a></li>
				<li><a href="##" id="havfe" class="divSmalltw" rel="sprice">石湾</a></li>
				<li><a href="##" id="havet" class="divSmalltw" rel="sprice">岭南大道</a></li>
				<li><a href="##" id="htave" class="divSmalltw" rel="sprice">同济广场</a></li>
				<li><a href="##" id="heave" class="divSmalltw" rel="sprice">岭南新天地</a></li>
				<li><a href="##" id="hvvave" class="divSmalltw" rel="sprice">季华园</a></li>
				<li><a href="##" id="haaave" class="divSmalltw" rel="sprice">魁奇路沿线</a></li>
				<li><a href="##" id="hqqave" class="divSmalltw" rel="sprice">普君新城</a></li>
				<li><a href="##" id="hyave" class="divSmalltw" rel="sprice">季华六路沿线</a></li>
				<li><a href="##" id="hiave" class="divSmalltw" rel="sprice">兆阳广场</a></li>
				<li><a href="##" id="havue" class="divSmalltw" rel="sprice">华远东路</a></li>
				<li><a href="##" id="havne" class="divSmalltw" rel="sprice">九鼎国际</a></li>
				<li><a href="##" id="haveee" class="divSmalltw" rel="sprice">印象城</a></li>
				<li><a href="##" id="havecx" class="divSmalltw" rel="sprice">东建世纪广场</a></li>
				<li><a href="##" id="hav1e" class="divSmalltw" rel="sprice">文华路沿线 </a></li>
				<li><a href="##" id="hwqave" class="divSmalltw" rel="sprice">丽日玫瑰</a></li>
				<li><a href="##" id="hwaave" class="divSmalltw" rel="sprice">文华路</a></li>
				<li><a href="##" id="hawcve" class="divSmalltw" rel="sprice">福绿路</a></li>
				<li><a href="##" id="havwce" class="divSmalltw" rel="sprice">文华里</a></li>
				<li><a href="##" id="wchave" class="divSmalltw" rel="sprice">湖境路</a></li>
				<li><a href="##" id="fwhave" class="divSmalltw" rel="sprice">玫瑰园</a></li>
				<li><a href="##" id="wdsahave" class="divSmalltw" rel="sprice">魁奇路地铁站</a></li>
				<li><a href="##" id="havewqe" class="divSmalltw" rel="sprice">天湖丽都</a></li>
				<li><a href="##" id="hwccave" class="divSmalltw" rel="sprice">季华七路</a></li>
				<li><a href="##" id="qwer" class="divSmalltw" rel="sprice">体育路</a></li>
				<li><a href="##" id="weqr" class="divSmalltw" rel="sprice">绿景三路</a></li>
				<li><a href="##" id="qewrq" class="divSmalltw" rel="sprice">南桂西路</a></li>
				<li><a href="##" id="haverv" class="divSmalltw" rel="sprice">怡翠玫瑰园</a></li>
				<li><a href="##" id="havoer" class="divSmalltw" rel="sprice">市政府</a></li>
				<li><a href="##" id="haveew" class="divSmalltw" rel="sprice">普澜一路</a></li>
				<li><a href="##" id="havexxa" class="divSmalltw" rel="sprice">朝安</a></li>
				<li><a href="##" id="imaco" class="divSmalltw" rel="sprice">新明一路</a></li>
			</ul>
		</div>
		<div class="clear_float"></div>
		<div>	
			<div class="classleft_box col-xs-2 col-md-2 col-lg-2">
				<ul class="classthree">
					<li><a href="##">人均</a><span><a href="##">全部</a></span></li>
				</ul>
			</div>
			<ul class="class_three col-xs-10 col-md-10 col-lg-10">
				<li><a href="##" id="smart" class="divSmallthr" rel="decoration">50以下</a></li>
				<li><a href="##" id="sbmart" class="divSmallthr" rel="decoration">50-100元</a></li>
				<li><a href="##" id="ssmart" class="divSmallthr" rel="decoration">100-200元</a></li>
				<li><a href="##" id="smwart" class="divSmallthr" rel="decoration">200-300元</a></li>
				<li><a href="##" id="sqmart" class="divSmallthr" rel="decoration">300元以上</a></li>
			</ul>
		</div>
		<div class="clear_float"></div>
		<div>	
			<div class="classleft_box col-xs-2 col-md-2 col-lg-2">
				<ul class="classthree">
					<li><a href="##">人数</a><span><a href="##">全部</a></span></li>
				</ul>
			</div>
			<ul class="class_three col-xs-10 col-md-10 col-lg-10">
				<li><a href="##" id="smqqart" class="divSmallfir" rel="docoration">单人餐</a></li>
				<li><a href="##" id="smaaart" class="divSmallfir" rel="docoration">双人餐</a></li>
				<li><a href="##" id="smccart" class="divSmallfir" rel="docoration">3-4人餐</a></li>
				<li><a href="##" id="smxxart" class="divSmallfir" rel="docoration">5-10人餐</a></li>
				<li><a href="##" id="smzzart" class="divSmallfir" rel="docoration">其他</a></li>
			</ul>
		</div>
	</div> 
<div class="clear_float"></div>
<div class="select_box f-l container-fluid">
<ul class="select_leftbox">
	<li class="select_title"><a href="##">默认</a></li>
	<li><a href="##">积分<img src="/Public/Test/images/xuan2.png" alt=""></a></li>
	<li><a href="##">好评<img src="/Public/Test/images/xuan1.png" alt=""></a></li>
	<li><a href="##">发布时间<img src="/Public/Test/images/xuan1.png" alt=""></a></li>
	<li><a href="##">人数<img src="/Public/Test/images/more.png" alt=""></a></li>
	<li><a href="##">人均消费<img src="/Public/Test/images/more.png" alt=""></a></li>
	<a href="##"><input type="checkbox">&nbsp;优惠券</a>
	<a href="##"><input type="checkbox">&nbsp;免预约</a>
	<a href="##"><input type="checkbox">&nbsp;可订座</a>
</ul>
</div>
<div class="clear_float"></div>
<div class="con_content f-l ">
	<div class="content_boxbot f-l col-3-1 mt-20">
		<ul class="content_boxone">
			<li><a href="##"><img src="/Public/Test/images/proimg2.jpg" alt=""></a></li>
			<li><a href="##"><span>尚轩野生菌</span></a></li>
		</ul>
		<ul class="content_box1 f-l  f-l">
			<li>可获得15%积分<span><img src="/Public/Test/images/ping1.png" alt=""></span></li>
		</ul>
		<ul class="content_box2 lh-50 container-fluid mt-10">
			<li class="cont_left"><a href="#" class="f-l"><img src="/Public/Test/images/pb1.png" alt="">人均25元</a>
			<nav  class="cont_right f-r mr-10"><a href="#"><img src="/Public/Test/images/pb2.png" alt="">美食</a><span class="ml-5">东方广场</span></nav>
			</li>
		</ul>
	</div>
	<div class="content_boxbot f-l col-3-1 mt-20">
		<ul class="content_boxone">
			<li><a href="##"><img src="/Public/Test/images/proimg2.jpg" alt=""></a></li>
			<li><a href="##"><span>尚轩野生菌</span></a></li>
		</ul>
		<ul class="content_box1 f-l  f-l">
			<li>可获得15%积分<span><img src="/Public/Test/images/ping1.png" alt=""></span></li>
		</ul>
		<ul class="content_box2 lh-50 container-fluid mt-10">
			<li class="cont_left"><a href="#" class="f-l"><img src="/Public/Test/images/pb1.png" alt="">人均25元</a>
			<nav  class="cont_right f-r mr-10"><a href="#"><img src="/Public/Test/images/pb2.png" alt="">美食</a><span class="ml-5">东方广场</span></nav>
			</li>
		</ul>
	</div>
	<div class="content_boxbot f-l col-3-1 mt-20">
		<ul class="content_boxone">
			<li><a href="##"><img src="/Public/Test/images/proimg2.jpg" alt=""></a></li>
			<li><a href="##"><span>尚轩野生菌</span></a></li>
		</ul>
		<ul class="content_box1 f-l  f-l">
			<li>可获得15%积分<span><img src="/Public/Test/images/ping1.png" alt=""></span></li>
		</ul>
		<ul class="content_box2 lh-50 container-fluid mt-10">
			<li class="cont_left"><a href="#" class="f-l"><img src="/Public/Test/images/pb1.png" alt="">人均25元</a>
			<nav  class="cont_right f-r mr-10"><a href="#"><img src="/Public/Test/images/pb2.png" alt="">美食</a><span class="ml-5">东方广场</span></nav>
			</li>
		</ul>
	</div>
	<div class="content_boxbot f-l col-3-1 mt-20">
		<ul class="content_boxone">
			<li><a href="##"><img src="/Public/Test/images/proimg2.jpg" alt=""></a></li>
			<li><a href="##"><span>尚轩野生菌</span></a></li>
		</ul>
		<ul class="content_box1 f-l  f-l">
			<li>可获得15%积分<span><img src="/Public/Test/images/ping1.png" alt=""></span></li>
		</ul>
		<ul class="content_box2 lh-50 container-fluid mt-10">
			<li class="cont_left"><a href="#" class="f-l"><img src="/Public/Test/images/pb1.png" alt="">人均25元</a>
			<nav  class="cont_right f-r mr-10"><a href="#"><img src="/Public/Test/images/pb2.png" alt="">美食</a><span class="ml-5">东方广场</span></nav>
			</li>
		</ul>
	</div>
	<div class="content_boxbot f-l col-3-1 mt-20">
		<ul class="content_boxone">
			<li><a href="##"><img src="/Public/Test/images/proimg2.jpg" alt=""></a></li>
			<li><a href="##"><span>尚轩野生菌</span></a></li>
		</ul>
		<ul class="content_box1 f-l  f-l">
			<li>可获得15%积分<span><img src="/Public/Test/images/ping1.png" alt=""></span></li>
		</ul>
		<ul class="content_box2 lh-50 container-fluid mt-10">
			<li class="cont_left"><a href="#" class="f-l"><img src="/Public/Test/images/pb1.png" alt="">人均25元</a>
			<nav  class="cont_right f-r mr-10"><a href="#"><img src="/Public/Test/images/pb2.png" alt="">美食</a><span class="ml-5">东方广场</span></nav>
			</li>
		</ul>
	</div>
	<div class="content_boxbot f-l col-3-1 mt-20">
		<ul class="content_boxone">
			<li><a href="##"><img src="/Public/Test/images/proimg2.jpg" alt=""></a></li>
			<li><a href="##"><span>尚轩野生菌</span></a></li>
		</ul>
		<ul class="content_box1 f-l  f-l">
			<li>可获得15%积分<span><img src="/Public/Test/images/ping1.png" alt=""></span></li>
		</ul>
		<ul class="content_box2 lh-50 container-fluid mt-10">
			<li class="cont_left"><a href="#" class="f-l"><img src="/Public/Test/images/pb1.png" alt="">人均25元</a>
			<nav  class="cont_right f-r mr-10"><a href="#"><img src="/Public/Test/images/pb2.png" alt="">美食</a><span class="ml-5">东方广场</span></nav>
			</li>
		</ul>
	</div>
	<div class="content_boxbot f-l col-3-1 mt-20">
		<ul class="content_boxone">
			<li><a href="##"><img src="/Public/Test/images/proimg2.jpg" alt=""></a></li>
			<li><a href="##"><span>尚轩野生菌</span></a></li>
		</ul>
		<ul class="content_box1 f-l  f-l">
			<li>可获得15%积分<span><img src="/Public/Test/images/ping1.png" alt=""></span></li>
		</ul>
		<ul class="content_box2 lh-50 container-fluid mt-10">
			<li class="cont_left"><a href="#" class="f-l"><img src="/Public/Test/images/pb1.png" alt="">人均25元</a>
			<nav  class="cont_right f-r mr-10"><a href="#"><img src="/Public/Test/images/pb2.png" alt="">美食</a><span class="ml-5">东方广场</span></nav>
			</li>
		</ul>
	</div>
	<div class="content_boxbot f-l col-3-1 mt-20">
		<ul class="content_boxone">
			<li><a href="##"><img src="/Public/Test/images/proimg2.jpg" alt=""></a></li>
			<li><a href="##"><span>尚轩野生菌</span></a></li>
		</ul>
		<ul class="content_box1 f-l  f-l">
			<li>可获得15%积分<span><img src="/Public/Test/images/ping1.png" alt=""></span></li>
		</ul>
		<ul class="content_box2 lh-50 container-fluid mt-10">
			<li class="cont_left"><a href="#" class="f-l"><img src="/Public/Test/images/pb1.png" alt="">人均25元</a>
			<nav  class="cont_right f-r mr-10"><a href="#"><img src="/Public/Test/images/pb2.png" alt="">美食</a><span class="ml-5">东方广场</span></nav>
			</li>
		</ul>
	</div>
	<div class="content_boxbot f-l col-3-1 mt-20">
		<ul class="content_boxone">
			<li><a href="##"><img src="/Public/Test/images/proimg2.jpg" alt=""></a></li>
			<li><a href="##"><span>尚轩野生菌</span></a></li>
		</ul>
		<ul class="content_box1 f-l  f-l">
			<li>可获得15%积分<span><img src="/Public/Test/images/ping1.png" alt=""></span></li>
		</ul>
		<ul class="content_box2 lh-50 container-fluid mt-10">
			<li class="cont_left"><a href="#" class="f-l"><img src="/Public/Test/images/pb1.png" alt="">人均25元</a>
			<nav  class="cont_right f-r mr-10"><a href="#"><img src="/Public/Test/images/pb2.png" alt="">美食</a><span class="ml-5">东方广场</span></nav>
			</li>
		</ul>
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
		<div class="clear_float"></div>
		<div class="page">
			 <span class="currents">1</span>
			 <a class="num" href="##">2</a>
			 <a class="num" href="##">3</a> 
			 <a class="next" href="##">下一页</a>
		</div> 
	</div>
</div>
<div class="clear_float"></div>
<!-- footer_content -->
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
<script type="text/javascript" src="/Public/Test/js/H-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/Public/Test/js/shop_get.js"></script>
<script type="text/javascript">
		$(document).ready(function () {
		$(".divSmall").click(function () {
			var isAlreadyHave = false;
			var thisID = $(this).attr("id");
			var classType = $(this).attr("rel")
		$(".divSmall2").each(function () {
		if ($(this).attr("rel") == thisID) {
			isAlreadyHave = true;
		}
		if ($(this).attr("ttype") == classType) {
			goBegin($(this).attr("rel"));
			$(this).remove();
			}
			});
		if (!isAlreadyHave) {
			writeDiv($(this).html(), $(this).attr("id"), $(this).attr("rel"));
			}
			});
		$(".image").live('click', function () {
			goBegin($(this).parent().attr("rel"));
			$(this).parent().remove();
			});
			});
		//输出一个div
		function writeDiv(name, id, classONE) {
		var divShow = "<div class='divSmall2' rel='" + id + "' ttype='"+ classONE+"'>" +" 美食 :&nbsp;&nbsp;" + name + "<img src='/Public/Test/images/deling_03.png' class='image' /></div>";
		$("#mainSelect").html($("#mainSelect").html() + divShow);
		}
		function goBegin(ID) {

		}
		// ===========
		$(document).ready(function () {
		$(".divSmalltw").click(function () {
			var isAlreadyHave = false;
			var thisID = $(this).attr("id");
			var classType = $(this).attr("rel")
		$(".divSmalltw2").each(function () {
		if ($(this).attr("rel") == thisID) {
			isAlreadyHave = true;

		}
		if ($(this).attr("ttype") == classType) {
			goBegin($(this).attr("rel"));
			$(this).remove();
		}
		});
		if (!isAlreadyHave) {
			writeDivtws($(this).html(), $(this).attr("id"), $(this).attr("rel"));
		}
		});
		$(".image").live('click', function () {
			goBegin($(this).parent().attr("rel"));
			$(this).parent().remove();
		});
		});
		//输出一个div
		function writeDivtws(name, id, classONE) {
		var divShow = "<div class='divSmalltw2' rel='" + id + "' ttype='"+ classONE+"'>" +" 区域 :&nbsp;&nbsp;" + name + "<img src='/Public/Test/images/deling_03.png' class='image' /></div>";
		$("#mainSelect").html($("#mainSelect").html() + divShow);
		}
		function goBegin(ID) {
		}
		// ====
		$(document).ready(function () {
		$(".divSmallthr").click(function () {
			var isAlreadyHave = false;
			var thisID = $(this).attr("id");
			var classType = $(this).attr("rel")
			$(".divSmallthr2").each(function () {
		if ($(this).attr("rel") == thisID) {
		isAlreadyHave = true;

		}
		if ($(this).attr("ttype") == classType) {
			goBegin($(this).attr("rel"));
			$(this).remove();
		}
		});
		if (!isAlreadyHave) {
			writeDivss($(this).html(), $(this).attr("id"), $(this).attr("rel"));
			}
		});
		$(".image").live('click', function () {
			goBegin($(this).parent().attr("rel"));
			$(this).parent().remove();
		});
		});
		//输出一个div
		function writeDivss(name, id, classONE) {
			var divShow = "<div class='divSmallthr2' rel='" + id + "' ttype='"+ classONE+"'>" +" 人均 :&nbsp;&nbsp;" + name + "<img src='/Public/Test/images/deling_03.png' class='image' /></div>";
			$("#mainSelect").html($("#mainSelect").html() + divShow);
			}
		function goBegin(ID) {
			}
			// ====
			$(document).ready(function () {
			$(".divSmallfir").click(function () {
			var isAlreadyHave = false;
			var thisID = $(this).attr("id");
			var classType = $(this).attr("rel")
			$(".divSmallfir2").each(function () {
			if ($(this).attr("rel") == thisID) {
			isAlreadyHave = true;

			}
			if ($(this).attr("ttype") == classType) {
			goBegin($(this).attr("rel"));
			$(this).remove();
			}
			});
			if (!isAlreadyHave) {
			writeDivfis($(this).html(), $(this).attr("id"), $(this).attr("rel"));
			}
			});
			$(".image").live('click', function () {
			goBegin($(this).parent().attr("rel"));
			$(this).parent().remove();
			});
			});
		//输出一个div
		function writeDivfis(name, id, classONE) {
		var divShow = "<div class='divSmallfir2' rel='" + id + "' ttype='"+ classONE+"'>" +" 人数 :&nbsp;&nbsp;" + name + "<img src='/Public/Test/images/deling_03.png' class='image' /></div>";
		$("#mainSelect").html($("#mainSelect").html() + divShow);
		}
		function goBegin(ID) {

		}
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
</script>
</html>