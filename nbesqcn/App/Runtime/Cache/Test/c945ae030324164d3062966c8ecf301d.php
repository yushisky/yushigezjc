<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>账户设置</title>
	<link rel="stylesheet" type="text/css" href="/Public/Test/js/H-ui/css/H-ui.Membermin.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/Test/js/H-ui/css/H-ui.reset.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/Test/css/Business_index.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/Test/js/icheck/icheck.css" />
	<!-- 扫码关注纳邦官方 -->
	<script type="text/javascript" src=	"/Public/Test/js/jquery-1.7.min.js" ></script>
	<script type="text/javascript" src="/Public/Test/js/main.js"></script> 
	<script type="text/javascript"  src="/Public/Test/js/Validform_v5.3.2.js"></script>
	<script type="text/javascript"  src="/Public/Test/js/jquery.md5.js"></script>
	<script type="text/javascript"  src="/Public/Test/js/layer/layer.js"></script>
	<script type="text/javascript" src="/Public/Test/js/H-ui/js/H-ui.js"></script> 
	<script class="resources library" src="/Public/Test/js/area.js" type="text/javascript"></script>
</head>
<body>
	<div class="big_box container-fluid">
		<div class="header container-fluid">
		<div class="header_box container">
			<div class="logo  col-xs-3 col-md-3 col-lg-3">
			<a href="#"><img  src="/Public/Test/images/long_r1_c1.png" alt="logo"><span>商家中心</span></a>
			</div>
			<ul class="logo_right f-r">
					<li><a href="<?php echo U('Index/index');?>">首页</a>&nbsp;&nbsp;|</li>
					<li><a href="<?php echo U('Business/index');?>">登录</a>&nbsp;&nbsp;|</li>
					<li><a href="<?php echo U('Register/index');?>">注册</a></li>
				<ul class="app_ereima f-l nav-main">
					<li id="li-1"><img  src="/Public/Test/images/setting3.png" alt="">&nbsp;下载手机客户端&nbsp;<span>&diams;</span>
				<ul id="box-1">
					<ol ><img src="/Public/Test/images/login1_r3_c5.jpg" alt=""></ol>
					<nav>扫码关注纳邦官方</nav>
				</ul>
				</li>
				</ul>
			</ul>
		 </div>
	</div>
	<div class="clear_float"></div>
	<div class="container" id="tab_demo">
	<div class="nav_conter f-l  mt-15 ml-30 mb-50">
		<div class="nav-1">
			<b><span>我的账户</span></b>
			<ul class="nav-0">
				<li  class="bgnav-box"><a href="<?php echo U('Business/index');?>">&bull;&nbsp;账户设置</a><span class="f-r mr-10">&gt;</span></li>
				<li ><a href="<?php echo U('keep');?>">&bull;&nbsp;交易记录</a></li>
				<li ><a href="<?php echo U('secure');?>">&bull;&nbsp;安全中心</a></li>
			</ul>
			<b><span>客户评价</span></b>
			<ul class="nav-0">
				<li ><a href="<?php echo U('appraise');?>">&bull;&nbsp;全部</a></li>
				<li ><a href="<?php echo U('appraise1');?>">&bull;&nbsp;好评</a></li>
				<li><a href="<?php echo U('appraise2');?>">&bull;&nbsp;差评</a></li>
			</ul>
		</div>
	</div>		
	<div class="nav_right col-xs-8 col-md-8 col-lg-8 mt-30 ml-50">
		<ul class="tabBas">
			<li><a href="#">基本信息</a></li>
			<li><a href="#">详细介绍</a></li>
			<li><a href="#">优惠信息</a></li>
		</ul>
	</div>
	<nav class="nav_msg  col-xs-9 col-md-9 col-lg-9  mt-20 ">
		<div class="tabCon">
		<ul class="nav_msg-21 col-xs-5 col-md-5 col-lg-5 col-md-offset-2 ">
			<li><span>账&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;户：</span> <input type="text" name="" value=""></li>
			<li><span>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</span><input type="text" name="" value=""></li>
			<li><span>联&nbsp;&nbsp;系&nbsp;&nbsp;人：</span><input type="text" name="" value=""></li>
			<li><span>手&nbsp;&nbsp;机&nbsp;&nbsp;号：</span><input type="text" name="" value=""></li>
			<li><span>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</span><input type="text" name="" value=""></li>
			
			<li><span>电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话：</span><input type="text" name="" value=""></li>
			<li><span>商家类型：</span><input type="text" name="" value=""></li>
			<li><span>公司/店铺：</span><input type="text" name="" value=""></li>
		</ul>
		<div class="clear_float"></div>
		<ul class="msg_title  col-xs-9 col-md-9 col-lg-9 mt-20 col-md-offset-2">
			<li>所在的位置：
				<div class="city_box">
				<select id="s_province" name="s_province"></select>&nbsp;&nbsp;
			    <select id="s_city" name="s_city" ></select>&nbsp;&nbsp;
			    <select id="s_county" name="s_county"></select>
			    <script type="text/javascript">_init_area();</script>
			    </div>
			    <div id="show"></div>
			 </li>
			<li class="mt-20">详细：</span><input class="msg_title1" type="text" name="" value=""></li>
		</ul>
		<nav class="text-c mb-50 mt-20 col-xs-9"><input type="submit" class="btn btn-primary radius" value="确定提交" onclick="javascript'';"></nav>
	</div>
	<div class="fre_center tabCon" >
		<ul class="fre_cetitle col-md-11 col-md-offset-1">
			<p><span></span><b>肥牛自助火锅</b></p>
			<li>肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅肥牛自助火锅</li>
		</ul>
		<ul class="fre_cpic col-md-11 col-md-offset-1 mb-50">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
		<div class="priv_center tabCon"  >
			<ul class="priv_center1">
				<li>有效期：<input type="text" value="" ><img class="priv_img1" src="/Public/Test/images/date.png" alt=""><input type="text" value=""><img class="priv_img" src="/Public/Test/images/date.png" alt=""></li>
			</ul>
			<p><span>使用规则：</span><textarea name="content" cols="" rows="" style="width:335px;height:160px;border-radius:6px;"></textarea></p>
			<nav class="text-c mb-50 mt-20 col-xs-9"><input type="submit" class="btn btn-primary radius" value="确定提交" onclick="javascript'';"></nav>
		</div>
	</nav>
	</div>
</div>
</div>
	<div class="footer_box f-l  container-fluid">
	<div class="footer container">
		<ul class="footer1">
			<li>关于社区</li>
			<li>社区承诺</li>
			<li>加入我们</li>
			<li>商家入驻</li>
			<li>服务中心</li>
			<li>手机端社区</li>
		</ul>
		<div class="clear_float"></div>
		<div class="footer2">Copyright &copy;2016纳邦e社区（Neb INTERNET）.ALL Rights Reserved.粤ICP备16033201号</div>
	</div>
</div>
</body>
<script type="text/javascript">
var Gid  = document.getElementById ;
var showArea = function(){
	Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + 	
	Gid('s_city').value + " - 县/区" + 
	Gid('s_county').value + "</h3>"
							}
// Gid('s_county').setAttribute('onchange','showArea()');
$(function(){
    $.Huitab("#tab_demo .tabBas li","#tab_demo .tabCon","currenter","click","0");
    });
</script>
</html>