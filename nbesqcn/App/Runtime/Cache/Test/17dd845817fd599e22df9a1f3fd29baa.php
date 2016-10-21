<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="X-UA-Compatible" content="IE=8">
	<title>漏洞提交</title>
	<style>
		.lanren{display:none;}
	</style>
		<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.min.css">
	<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.reset.css">
	<link rel="stylesheet" type="text/css" href="/Public/Test/css/index.css">
	<script type="text/javascript" src="/Public/Test/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="/Public/Test/js/H-ui/js/H-ui.js"></script>
	<script type="text/javascript" src="/Public/Test/js/shop_get.js"></script>
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
			<ol class="dropDown dropDown_hover"><i class="Hui_ico f-r pr"></i><a href="#" class="dropDown_A">商家中心<i class="Hui_img f-r "></i></a>
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
		<div class="item" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
			<span><h3><a href="#"><img src="/Public/Test/images/f1.png" alt="">美食</a></h3></span>
			<div class="i-mc">
				<p href="#">美食</p>
				<?php if(is_array($pihotl_ionf)): foreach($pihotl_ionf as $key=>$val): ?><a href="<?php echo U('business_view',array('id'=>$val['id']));?>"><?php echo ($val["name"]); ?></a><?php endforeach; endif; ?>
				
			</div>
		</div>
		<div class="item pic_ite" onMouseOver="this.className='item on'" onmouseleave="this.className='item'">
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
		</div>
	</div>
</div>
</div>
</div>
	<div class="clear_float"></div>
	<div class="nav_topone-03">
		<ul class="nav_top-03">
			<li>漏洞提交</li>
		</ul>
	</div>
<div class="big_box container-fluid">
	<div class="left_box container-fluid f-l mt-20">
		<ul class="left_top">
			<li><a href="help_consult.html">意见反馈</a></li>
			<li><a href="help_bug.html">漏洞提交</a></li>
		</ul>
		<ul  class="left_bott">
			<li><img src="/Public/Test/images/mei1.jpg"></li>
			<li>如有疑问，请拨打本公司的客户服务电话</li>
			<li>0757-28338383</li>
		</ul>
		<ul  class="left_bott">
			<li><img src="/Public/Test/images/help2_03.png"></li>
			<li>我们为您准备了一些疑问的解决方案，或</li>
			<li>许你可以在帮助中心找到想要的答案</li>
		</ul>
	</div>
	<div class="right_cont f-l mt-20 ml-20">
			<ul class="title_right">
				<li>意见反馈</li>
			</ul>
			<ul  class="right_content">
			</ul>
			<ul class="loo_cont">
				<li>美团对自身产品和业务的安全问题非常重视，也一直致力于保障用户安全。</li>
			<li>如果您发现了我们的一个安全漏洞，您可以发送邮件到漏洞接收专用邮箱：*********。</li>
			<li>鉴于漏洞信息的敏感性，建议通过网络提交时采用PGP加密的方式传输。
			当您以邮件方式提交漏洞时，如未收到漏洞提交成功的回执邮件，请您重新提交或与我们联系。</li>
			<li>漏洞未修复前，我们希望您不要公开和传播。</li>
			<li>我们承诺：对每一份报告，都会有专门的安全人员进行评估、跟进并及时反馈最新的处理结果。</li>
			<li>我们会适当对您的付出提出公开感谢，并根据漏洞危害程度给予适当的物质奖励。</li>
			<li>我们的PGP公钥为：</li>
			<li>-----BEGIN PGP PUBLIC KEY BLOCK-----</li>
			<li>Version: GnuPG/MacGPG2 v2.0.22 (Darwin)</li>
			<li>Comment: GPGTools - https://gpgtools.org</li>

			<li>mQENBFMgK2MBCAC0cdrx+cYXPYcjzsdTkzOelziZgNYoh1xae768m4kHYZbCn+YF</li>
			<li>RlLgm1veznk7TtPy3P54SHgbPVti/22EESM5nZhcpjX3BsSIIKUBIJa7YIHBJPS/</li>
			<li>OCMHJrkuAjqewK+oiFFMXs4/jzH6rloo0OfltOBoDqemy9iK+4nTvIk54EcSXJxl</li>
			<li>g0GD0yZWflgG/oo3OCL55dWQndzR2gxH1XQDNwBaU1TnGLqzPElFVKdwhPE6xsJ5</li>
			<li>aZHYL0RCg/P4YptMoSqpx2XoaSZqvkL9Z4oLCel5mEQ60BsR2Vlq3wyCnY0hdNBn</li>
			<li>sGI2bTLsa1L5jW8Anei5iPEkFMITbjXcZJuDABEBAAG0L+e+juWbouS/oeaBr+Wu</li>
			<li>ieWFqOWboumYnyA8c2VjdXJpdHlAbWVpdHVhbi5jb20+iQE3BBMBCgAhBQJTICtj</li>
			<li>AhsDBQsJCAcDBRUKCQgLBRYCAwEAAh4BAheAAAoJEMkEmzMvE9tpDlgH/jjfAf9z</li>
			<li>+tqKQcoo8KfxLdQZHMvzVrio+ABt5fKcFJ5M8g7eDped/Q9SndVQkWyycSYb/uIQ</li>
			<li>hA75mjnJGJwa6TRG5KkTnJ6WiUJS/Ug2E0VTD2BiTzKMSt0OdZYhdUJ2ksJwkciD</li>
			<li>vqJIu2dJevDiBsfBKdT+EtvTCXNimU4n1QiRjGUMxm6D/Ybx9BHjyF1F2Zh76oMS</li>
			<li>HBY9o37HZr1Zef8BuSztwgZARM4Qm2fa42ayjLZ75XoOBtqXo1bsij4m5RvL8tPD</li>
			<li>AVKDgWAcA5M63GvbfDtXtRq7M6LKVOmUOjCVzGhzKNcYb7k7Ioy0zm3Hxsj0U+eX</li>
			<li>CXd8YZ68A809xdu5AQ0EUyArYwEIAJxLi5qrb65zczS2lxEh3nitG8lXRaOlgNVm</li>
			<li>cibd9H/dUy79U14+brBQ78BlN9XFbhuEvzt1DjAm1MAHXRtO/Yq7P9G972C5eMPW</li>
			<li>Cig8G/9SSCU6IV2CrckxLWHBXDoa3lxRugO7uQBMxTMiy7C+wQBoHudwhYkzzhrv</li>
			<li>TymR6zml7xTD4c/HmVZLw1vIFE63gVYoH/YugCoa20xaXAkWc0oPNV0PbFF6e0Yp</li>
			<li>4feplMC79DdzZ3a/WbnR5+veRU7lb04K8XNsRj5JmEcbiDtL2HQ1Efzmf5vjPpAM</li>
			<li>84SsNPoEKoPjgQD3xuDlA+rP2jUR+eUUScJq9P9Qjjxd9X2N0tMAEQEAAYkBHwQY</li>
			<li>AQoACQUCUyArYwIbDAAKCRDJBJszLxPbaeRNB/9ZdM65QBjw6vCLtfLKmYMkiWUa</li>
			<li>6x4yU58tus9YJSmbcpaPWlQ25ceCRK1xViuOcsQ4XCfidY/LvZaqNs0wzKFj162N</li>
			<li>IrbIK8fWPbEW5Fyr18NGyni66LtgQyoIoFfb0YGBUvfP2PP6Xe6118mjJB9j6U5t</li>
			<li>qaTiqCYs7hNpDprFK9a7xuisvw+LSHBu/zIegrc/nm3xVqBVmClJuoBuUxtTbk46</li>
			<li>rm29ocNkWbKhDpqdjCh11yoz6KxYvv4J7ppMluKy1yj1ZEbY6Cn8sB7Jo9/JBe67</li>
			<li>gLozOaQrUMx09E8Vtptu+lDZdgU3+VYsxBiJiExpYAvwQQKIr7Dg+zxuxX5V
			=7CF3</li>
			<li>-----END PGP PUBLIC KEY BLOCK-----</li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
	</div>
	<!-- 尾部 -->
<div class="clear_float"></div>
<div class="footer_box" id="footer">
<div class="footer container rew" >
	<div class="footer_nav f-l ml-10 mt-40 col-xs-1 col-md-1 col-lg-1">
		<ul>
			<p class="footer_title"><a href="##">公司信息</a></p>
			<li><a href="##">关于纳邦</a></li>
			<li><a href="##">加入我们</a></li>
			<li><a href="##">法律声明</a></li>
			<li><a href="##">用户协议</a></li>
		</ul>
	</div>
	<div class="footer_nav f-l ml-50 mt-40 col-xs-2 col-md-2 col-lg-2">
		<ul>
			<p class="footer_title"><a href="##">商家服务</a></p>
			<li><a href="##">商家合作</a></li>
			<li><a href="##">市场合作</a></li>
			<li><a href="##">商家联盟</a></li>
			<li><a href="##">廉正邮箱</a></li>
		</ul>
	</div>
	<div class="footer_nav f-l  mt-40 col-xs-2 col-md-2 col-lg-2 mb-20">
		<ul>
			<p class="footer_title"><a href="##">用户帮助</a></p>
			<li><a href="##">申请退款</a></li>
			<li><a href="##">查看加油电子券</a></li>
			<li><a href="##">常见问题</a></li>
			<li><a href="##">开发API</a></li>
			<li><a href="##">反诈骗公告</a></li>
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
</html>