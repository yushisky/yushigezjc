<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>个人资料</title>
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
	<link rel="stylesheet" type="text/css" href="/Public/Test/js/icheck/icheck.css" />
	<div class="nav_conter f-l  mt-15">
		<div class="nav-1">
			<b><span>我的账户</span></b>
			<ul class="nav-0">
				<li  class="bgnav-box"><a href="<?php echo U('Member/index');?>">&bull;&nbsp;账户设置</a><span class="f-r mr-10">&gt;</span></li>
				<li ><a href="<?php echo U('ticket');?>">&bull;&nbsp;消费券</a></li>
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
		<ul class="mag_top_title f-l ml-50 mt-30">
			<li><a href="<?php echo U('Member/index');?>">基本信息</a></li>
			<li><a href="<?php echo U('conter');?>">安全中心</a></li>
			<li class="top_title radius f-l"><span>个人资料</span></li>
		<!-- 	<li><a href="#">邮件订阅</a></li> -->
		</ul>
		<div class="mag_content f-l mt-20 f-r  col-xs-9 col-md-9 col-lg-9 mr-30">
			<ul class="file_img">
				<p><img src="/Public/Test/images/pro_r1_c1.jpg" alt=""></p>
				<p><span class="btn-upload">
				  <a href="javascript:void(0);" class="btn btn-primary radius">上传头像</a>
				  <input type="file" multiple name="file_0" class="input-file">
				</span></p>
				<p>支持JPG JPEG GIF PNG BMP 且不小于5M</p>
				<li></li>
			</ul>
			<ul class="formControls skin-minimal sex_class col-xs-8 col-md-8 col-lg-8">
				<li>性别：</li>
				<li class="radio-box">
					<input type="radio" id="sex-1" name="sex" datatype="*" nullmsg="请选择性别！">
					<label for="sex-1">男</label>
				</li>
				<li class="radio-box">
					<input type="radio" id="sex-2" name="sex">
					<label for="sex-2">女</label>
				</li>
				<li class="radio-box">
					<input type="radio" id="sex-3" name="sex">
					<label for="sex-3">保密</label>
				</li>
			</ul>
			<ul class="sex_class col-xs-8 col-md-8 col-lg-8">
				<li>生日：</li>
				<li>
					<form name="reg_testdate">
						<select name="YYYY" onChange="YYYYDD(this.value)">
							<option value="">请选择 年</option>
						</select>
						<select name="MM" onChange="MMDD(this.value)">
							<option value="">选择 月</option>
						</select>
						<select name="DD">
							<option value="">选择 日</option>
						</select>
					</form></li>
			</ul>
			<ul class="formControls skin-minimal like_class col-xs-8 col-md-8 col-lg-8" >
				<li>身份：</li>
				<li class="check-box">
					<input type="checkbox" class="ml-10" ><label for="checkbox-5" >学生</label>
				</li>
				<li class="check-box">
					<input type="checkbox" class="ml-10"><label for="checkbox-5" >在职</label>
				</li>
				<li class="check-box">
					<input type="checkbox" class="ml-10"><label for="checkbox-5" >自由职业</label>
				</li>
				<li class="check-box">
					<input type="checkbox" class="ml-10"><label for="checkbox-5" >其他</label>
				</li>
			</ul>
			<ul class="formControls skin-minimal like_class col-xs-8 col-md-8 col-lg-8">
				<li>兴趣：</li>
				<li class="check-box">
					<input type="checkbox" class="ml-10"><label for="checkbox-5" >美食</label>
				</li>
				<li class="check-box">
					<input type="checkbox" class="ml-10"><label for="checkbox-5" >电影</label>
				</li>
				<li class="check-box">
					<input type="checkbox" class="ml-10"><label for="checkbox-5" >酒店</label>
				</li>
				<li class="check-box">
					<input type="checkbox" class="ml-10"><label for="checkbox-5" >丽人</label>
				</li>
				<li class="check-box">
					<input type="checkbox" class="ml-10"><label for="checkbox-5" >休闲娱乐</label>
				</li>
				<p>选择您的兴趣使您获得个性化得推荐</p>
			</ul>
				<p class="mt-30 f-l ml-30 mb-50"><input class="btn buos radius" type="button" value="保存"></p>
		</div>
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
// ===================
function YYYYMMDDstart(){   
	MonHead = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];   
	
	//先给年下拉框赋内容   
	var y  = new Date().getFullYear();  
	for (var i = (y-30); i < (y+30); i++) //以今年为准，前30年，后30年   
		   document.reg_testdate.YYYY.options.add(new Option(" "+ i +" 年", i));   
	
	//赋月份的下拉框   
	for (var i = 1; i < 13; i++)   
		   document.reg_testdate.MM.options.add(new Option(" " + i + " 月", i));   
	
	document.reg_testdate.YYYY.value = y;   
	document.reg_testdate.MM.value = new Date().getMonth() + 1;   
	var n = MonHead[new Date().getMonth()];   
	if (new Date().getMonth() ==1 && IsPinYear(YYYYvalue)) n++;   
		writeDay(n); //赋日期下拉框Author:meizz   
	document.reg_testdate.DD.value = new Date().getDate();   
}   
if(document.attachEvent)   
	window.attachEvent("onload", YYYYMMDDstart);   
else   
window.addEventListener('load', YYYYMMDDstart, false);   
function YYYYDD(str) //年发生变化时日期发生变化(主要是判断闰平年)   
{   
	var MMvalue = document.reg_testdate.MM.options[document.reg_testdate.MM.selectedIndex].value;   
	if (MMvalue == ""){ var e = document.reg_testdate.DD; optionsClear(e); return;}   
	var n = MonHead[MMvalue - 1];   
	if (MMvalue ==2 && IsPinYear(str)) n++;   
	writeDay(n)   
}   
function MMDD(str)   //月发生变化时日期联动   
{   
	var YYYYvalue = document.reg_testdate.YYYY.options[document.reg_testdate.YYYY.selectedIndex].value;   
	if (YYYYvalue == ""){ var e = document.reg_testdate.DD; optionsClear(e); return;}   
	var n = MonHead[str - 1];   
	if (str ==2 && IsPinYear(YYYYvalue)) n++;   
	writeDay(n)   
}   
function writeDay(n)   //据条件写日期的下拉框   
{   
	var e = document.reg_testdate.DD; optionsClear(e);   
	for (var i=1; i<(n+1); i++)   
	e.options.add(new Option(" "+ i + " 日", i));   
}   
function IsPinYear(year)//判断是否闰平年   
{
	return(0 == year%4 && (year%100 !=0 || year%400 == 0));
}   
function optionsClear(e)   
{   
	e.options.length = 1;   
}   

	
</script>
</html>