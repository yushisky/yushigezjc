<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>商家登录</title>
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
	<div class="container">
	<div class="min_box ml-50 col-md-11 mt-50 mb-50">
		<div class="conter_left col-xs-7">
			<p class="centre_title"><span class="centre_border"></span>&nbsp; <b>商家中心</b>
			</p>
			<form id="login_form" action="<?php echo U('Test/Login/login');?>">
			<ul class="conter_nav-1 f-l pos-r">
				<li>手&nbsp;&nbsp;&nbsp;&nbsp;机 <input class="pass"  type="text" id="username" name="username" value=""></li>
				<li>密&nbsp;&nbsp;&nbsp;&nbsp;码 <input class="pass" type="password" id="password" name="password" value=""></li>
				<!-- <li>验证码 &nbsp;<input class="pass" id="code" name="code" type="text" style="width:80px"  ><span>1100</span><font>看不清楚？换一张</font>	
				</li> -->
			</ul>
				<nav class="login_left">
					<div class="formControls skin-minimal col-md-11">
						<div class="check-box  f-l pos-r">
							<input type="checkbox" class="ml-10"><label for="checkbox-5" >记住账户</label>
						</div>
					</div>
				</nav>
			<ul class="conter_bot">
				<li class="login_reg col-xs-12">
					<input class="btn ml-10 mr-20" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;" onclick="javascript:;">
				 <a href="<?php echo U('Register/index');?>">忘记密码&nbsp;|&nbsp;</a><a href="<?php echo U('Register/index');?>">注册</a></li>
				<li class="login_qq"><img class="login_qq1" src="/Public/Test/images/qq_r5_c1.png" alt="">&nbsp;<span>用QQ账号登录</span>
				</li>
				<li><img class="login_qq2" src="/Public/Test/images/login_r6_c7.png" alt=""><span>用微信账号登录</span></li>
			</ul>
			</form>
		</div>
		<div class="conter_right">
			<p>更方便 更快捷的体验</p>
			<p><img src="/Public/Test/images/login1_r3_c5.jpg" alt=""></p>
			<p>手机客户端</p>
		</div>
	</div>
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
<script type="text/javascript" src="/Public/Test/js/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript">
//var navigation = responsiveNav("Hui-navbar", {customToggle: ".nav-toggle"});
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
});
</script>
<script>
$(function() {
	//表单验证
	var demo=$("#login_form").Validform({
		tiptype:3,
		label:".label",
		showAllError:true,
		ajaxPost:true
	});
	demo.addRule([
	{
		ele:"#username",
		datatype:"*"
	},
	{
		ele:"#password",
		datatype:"*"
	}
	]);	
	//对提交的表单对象转化为json格式
	$.fn.serializeObject = function()
	{
	  var o = {};
	  var a = this.serializeArray();
	  $.each(a, function() {
	    if (o[this.name] !== undefined) {
	      if (!o[this.name].push) {
	        o[this.name] = [o[this.name]];
	      }
	      o[this.name].push(this.value || '');
	    } else {
	      o[this.name] = this.value || '';
	    }
	  });
	  return o;
	};	
	$('#submit').click(function(){
		$("#submit").attr("disabled", true);
		var data = $('#login_form').serializeObject();
		data.password = $.md5(data.password);//对密码进行md5处理
		demo.config({
	        ajaxpost:{
	        	data:data,
	        	success:function(data,obj){	 
	        		if(data.status=='1'){	        			
	        			location.href="<?php echo U('Test/Member/index');?>";	        			        			
			    	}		    	
			    	else{
			    		layer.alert(data.msg);
			    		$("#submit").attr("disabled", false);
			    	}
	        	}
	        }
	    });
	});
});
</script>
</html>