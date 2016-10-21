<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>安全中心</title>
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
<div class="min_box-02 container">
	<div class="nav_conter f-l  mt-15 ml-30  mb-50">
		<div class="nav-1">
			<b><span>我的账户</span></b>
			<ul class="nav-0">
				<li ><a href="<?php echo U('Business/index');?>">&bull;&nbsp;账户设置</a></li>
				<li  ><a href="<?php echo U('keep');?>">&bull;&nbsp;交易记录</a></li>
				<li class="bgnav-box"><a href="<?php echo U('secure');?>">&bull;&nbsp;安全中心</a><span class="f-r mr-10">&gt;</span></li>
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
		<ul class="">
			<li><a href="<?php echo U('Business/index');?>">基本信息</a></li>
			<p class="right_title"><span>安全中心</span></p>
		</ul>
	</div>
	<ul class="nav_msg-1 mt-20">
		<li>登录密码 &nbsp;&nbsp; <span style="color:#d80100;">等级中</span> &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a8a8a8;">提升密码安全强度有利于保护账号安全</span><span><a href="javascript:void(0);" onclick="func1()">修改</a></span></li>
		<li>手&nbsp; &nbsp;机&nbsp;号 &nbsp; &nbsp;<span style="color:#eb1100;">已绑定</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a8a8a8;">135****49240</span> <span><a href="edit_conter.html">换绑</a></span></li>
		<li>邮 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  箱 &nbsp;&nbsp;&nbsp;<span style="color:#d80100;">未设置</span> &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a8a8a8;">绑定邮箱，帮助您找回密码</span><span><a href="javascript:void(0);"  onclick="func2()">立即绑定</a></span></li>
		<!-- <li>安全问题 &nbsp;&nbsp;&nbsp;<span style="color:#d80100;">未设置</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#a8a8a8;">保护账号安全，验证您身份的工具之一</span><span><a href="">立即绑定</a></span></li> -->
	</ul>
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
		function func1() {
        layer.open({
        	title: [
		    '修改登录密码',
		    'background-color:#eb1100; color:#fff;']
            ,type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['600px', '340px'], //宽高
            content: ' <div class="col-md-12"><form action="" method=""><ul class="inp-box  lh-50 col-md-12"><li class="ml-15">当前登录密码 <input type="text" value=""><img src="/Public/Test/images/user_r4_c9.png" alt="images"><span>请填写信息</span></li><li class="ml-30">新登录密码 <input type="text" value=""><img src="/Public/Test/images/user_r4_c9.png" alt="images"><span>请填写信息</span></li><li>确认新登录密码<input type="text" value=""><img src="/Public/Test/images/user_r4_c9.png" alt="images"><span>请填写信息</span></li></ul><ol class="col-md-12 text-c mt-40 "><input type="submit" class="btn btn-primary" value="确定修改"  ></ol></form></div>'
       	 });
    	}
    	function func2() {
        layer.open({
        	title: [
		    '绑定邮箱',
		    'background-color:#eb1100; color:#fff;']
            ,type: 1,
            skin: 'layui-layer-rim', //加上边框
            area: ['600px', '300px'], //宽高
            content: ' <div class="col-md-12"><form action="" method=""><ul class="inp-box-1  lh-60 col-md-12"><li class=" ml-30">邮箱&nbsp;<input type="text" value=""><img src="/Public/Test/images/user_r4_c9.png" alt="images"><span>请填写信息</span></li><li>登录密码&nbsp;<input type="text" value=""><img src="/Public/Test/images/user_r4_c9.png" alt="images"><span>请填写信息</span></li></ul><ol class="col-md-6 text-c mt-40 "><input type="submit" class="btn btn-primary" value="确定修改"  ></ol></form></div>'
       	 });
    	}
</script>
</html>