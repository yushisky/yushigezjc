<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>用户注册</title>
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
	<div class="min_box ml-50 col-xs-11 col-md-11 col-lg-11 mt-50 mb-50">
		<div class="conter_left-01 col-md-12">
			<nav class="centre_title "><span></span>&nbsp; <b>用户注册</b>
			</nav>
			<form action="<?php echo U('Test/Register/register');?>"  id="registerform">
				<ul class="conter_nav f-l ">
					<li>手&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;机&nbsp;<input class="pass" name="phone" id="phone"  type="text" value=""></li>
					<li >验&nbsp;&nbsp;证&nbsp;&nbsp;码&nbsp;<input class="yanz" id="code" name="code" type="text" value="">&nbsp;<span class="yanzma yanzma_curren">获取短信验证码</span></li>
					<li>登入密码&nbsp;<input class="pass" id="password" name="password" type="password" value=""></li>
					<li>确认密码&nbsp;<input class="pass" id="repassword" name="repassword" type="password" value=""></li>	
					<li class="conter_bot-1"><input type="image" id="submit"   src="/Public/Test/images/user_r11_c2.jpg"></li>
					 <li class="conter_bot-1"><p>《纳邦社区用户协议》</p></li>
				</ul>
			</form>
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
<script type="text/javascript">
$(function() {
	//表单验证
	var demo=$("#registerform").Validform({
		tiptype:3,
		label:".label",
		showAllError:true,
		ajaxPost:true
	});
	demo.addRule([
	{
		ele:"#phone",
		datatype:"m"
	},
	{
		ele:"#code",
		datatype:"/^\\d{6}/i",
		errormsg:"请填写正确的6位数字验证码",
	},
	{
		ele:"#password",
		datatype:"*6-20",
		errormsg:"6~14个字符，支持大小写字母和标点符号",
	},
	{
		ele:"#repassword",	
		recheck:"password",
		datatype:"*"
	}
	]);	
	//获取短信验证码
	var validCode=true;
	$(".yanzma").click (function  () {
		var time=60;
		var code=$(this);
		var check_phone = demo.check(false,"#phone");	
		var phone = $('#phone').val();
		if(!check_phone){
			alert('请填写正确的手机号码');
		}
		else if(validCode) {
			validCode=false;
			code.addClass("yanzma_curren");
			$.post("<?php echo U('Test/Register/sendVeri');?>",{phone:phone},function(){},'json');
			var t=setInterval(function  () {
				time--;
				code.html("("+time+"s)获取短信验证码");
				if (time==0) {
					clearInterval(t);
					code.html("获取短信验证码");
					validCode=true;
					code.removeClass("yanzma_curren");
				}
			},1000)
		}
	});
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
		var data = $('#registerform').serializeObject();
		data.password = $.md5(data.password);//对密码进行md5处理
		data.repassword = $.md5(data.repassword);//对确认密码进行md5处理
		demo.config({
	        ajaxpost:{
	        	data:data,
	        	success:function(data,obj){	 
	        		if(data.status=='1'){
	        			layer.alert('注册成功 !',function(){
	        				location.href="<?php echo U('Test/Member/index');?>";	
	        			});	        			
			    	}		    	
			    	else{
			    		layer.alert(data.msg);
			    		$("#submit").attr("disabled", false);
			    	}
	        	}
	        }
	    });
	});
})
</script>
</html>