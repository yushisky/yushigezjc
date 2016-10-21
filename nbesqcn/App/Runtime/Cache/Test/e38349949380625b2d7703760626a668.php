<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="X-UA-Compatible" content="IE=8">
	<title>公司信息</title>
	<style>
		.lanren{display:none;}
	</style>
		<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.min.css">
	<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.reset.css">
	<link rel="stylesheet" type="text/css" href="/Public/Test/css/index.css">
	<script type="text/javascript" src="/Public/Test/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="/Public/Test/js/H-ui/js/H-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Test/css/message.css">
	<script type="text/javascript" src="/Public/Test/js/msg-jqmin.js"></script>
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
	<div class="nav_topt">
		<ul class="nav_tt text-c lh-80 ">
			<li>公司信息</li>
		</ul>
	</div>
<div class="big_box container-fluid mt-20" id="tab_box">
<ul class="nav_cont container-fluid f-l">
		<li><a href="javascript:void(0);">关于纳邦</a></li>
		<!-- <li><a href="##">我们承诺</a></li> -->
		<li><a href="javascript:void(0);">加入我们</a></li>
	<!-- 	<li><a href="##">法律声明</a></li> -->
		<li><a href="javascript:void(0);">用户协议</a></li>
	</ul>
<div class="" style="display:block;"  id="bgbox">
	<ul class="nav_title1  container-fluid f-l">
		<li><span></span>关于纳邦</li>
	</ul>
	<ul class="conter_cont col-xs-12 col-xs-12 col-xs-12 mt-20">
		<li>用心服务，回馈大众是纳邦e社区的发展理念，我们为消费者铺垫好一条连接着企业和保险公司的阳光大道。</li>
		<li>成为纳邦会员后，无论您是为您的爱车投保，还是喝茶吃饭、旅游教育、酒店娱乐、汽车美容等即可享有最高50%的双重会员补贴。纳邦社区为广大居民提供一站式便民服务，结合社区实体门店和独特的O2O营运模式，联合多家银行与保险公司及众多商家以民众刚需的汽车保险为切入点，通过会员制形式将民众的各种类型保险消费转化为积分再进行二次消费，实实在在回馈社会</li>
		<li>纳邦除了以巨大的会员福利回馈社会的同时，结合当前社会市场人才缺口和自身人力资源公司服务的优势，纳邦职业培训学校联同佛山市各级人力资源和社会保障局等部门以及数千家优秀企业共同展开了一系列专业技能人才的培训，包括：人力资源管理师培训、电子商务培训、营销培训等等，并为每一位完成学业的学员推荐就业岗位，提升学员自身价值和能力，为企业和人才带来新的动力。 </li>
	</ul>
	<ul class="nav_title1  container-fluid f-l mt-20">
		<li><span></span>联系我们</li>
	</ul>
	<div class="conter_content ml-10">
		<ul class="conter_content1 pb-20 f-l mt-20">
			<li><img src="/Public/Test/images/in1.png" alt=""></li>
			<ul class="conter_contenttwo">
				<li class="conter_content3"><span>联系电话</span></li>
				<li>&nbsp;</li>
				<li>您可以致电客服电话</li>
				<li class="conter_cont3"><span>0757-28338383</span></li>
			</ul>
		</ul>
		<ul class="conter_content1 pb-20 f-l mt-20">
			<li><img src="/Public/Test/images/in2.png" alt=""></li>
			<ul class="conter_contenttwo">
				<li class="conter_content3"><span>电子邮箱</span></li>
				<li>&nbsp;</li>
				<li>如果您是媒体，渠道，想洽谈资</li>
				<li>源置换，市场合作，投放广告</li>
				<li class="conter_cont3">请联系:<span>0757-283383838</span></li>
			</ul>
		</ul>
		<ul class="conter_content1 pb-20 f-l mt-20">
			<li><img src="/Public/Test/images/in3.png" alt=""></li>
			<ul class="conter_contenttwo">
				<li class="conter_content3"><span>微信公众号</span></li>
				<li>&nbsp;</li>
				<li>可以扫描二维码或微信公众号</li>
				<li class="conter_cont3">号:<span>nbesq1</span></li>
			</ul>
		</ul>
		<ul class="conter_content1 pb-20 f-l mt-20">
			<li><img src="/Public/Test/images/in4.png" alt=""></li>
			<ul class="conter_contenttwo">
				<li class="conter_content3"><span>联系地址</span></li>
				<li>&nbsp;</li>
				<li>您可以联系以下地址：</li>
				<li class="conter_cont3"><span>佛山市顺德区乐从镇荷岳路2-28</span></li>
                <li class="conter_cont3"><span>号永峰楼2楼</span></li>
			</ul>
		</ul>
		<ul class="conter_content1 pb-20 f-l mt-20">
			<li><img src="/Public/Test/images/in5.png" alt=""></li>
			<ul class="conter_contenttwo">
				<li class="conter_content3"><span>提交漏洞</span></li>
				<li>&nbsp;</li>
				<li >如果您发现了我们的一个安全漏</li>
                <li class="conter_cont3">洞，<span>请点击</span></li>
			</ul>
		</ul>
		<ul class="conter_content1 pb-20 f-l mt-20">
			<li><img src="/Public/Test/images/in6.png" alt=""></li>
			<ul class="conter_contenttwo">
				<li class="conter_content3"><span>用户帮助</span></li>
				<li>&nbsp;</li>
				<li>如果您付款或消费遇到什么问题，请</li>
				<li class="conter_cont3"><span>在线提交</span></li>
			</ul>
		</ul>
	</div>
</div>
<div class="clear_float"></div>
<div class="none_one" id="bgbox" >
	<p>
		<form method="get" id="" action="">
		    <fieldset class="searchs">
		         <input type="text"  class="boxs" name="s" id="s" class="inputText" placeholder="&nbsp;&nbsp;&nbsp;职位搜索" x-webkit-speech>
		           <button class="btns" ></button>
		    </fieldset>
		</form>
	</p>
<div class="db_title f-l container-fluid">
	<ul class="db_title1 f-l">
		<li><img src="/Public/Test/images/ti2_03.png" alt=""></li>
		<li>工作地点</li>
	</ul>
	<div class="wap">
	<ul class="db_titlecon f-l container-fluid ">
		<li>不限</li>
		<li>佛山顺德乐从</li>
		<li>佛山顺德大良</li>
		<li>佛山顺德狮山</li>
		<li><a href="javascript:void(0);" class="hf">展开</a></li>
	</ul>
	<div id="focus" style="display:none" class="citybox f-l col-xs-12 col-md-12 col-lg-12">
		<ul>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
			<li>佛山顺德乐从</li>
		</ul>
	</div>
	</div>
		<ul class="db_title2 mt-30 f-l">
			<li><img src="/Public/Test/images/ti2_06.png" alt=""></li>
			<li>工作地点</li>
		</ul>
		<div class="wap">
			<ul class="db_titlecon f-l container-fluid ">
				<li>不限</li>
				<li>研发</li>
				<li>商业分析</li>
				<li>管理支持</li>
				<li><a href="javascript:void(0);" class="hf">展开</a></li>
			</ul>
			<div id="focus" style="display:none" class="citybox f-l col-xs-12 col-md-12 col-lg-12">
				<ul>
					<li>研发</li>
					<li>商业分析</li>
					<li>研发</li>
					<li>商业分析</li>
					<li>研发商业分析</li>
					<li>研发</li>
					<li>商业分析</li>
					<li>研发</li>
					<li>商业分析</li>
					<li>研发商业分析</li>
					<li>研发</li>
					<li>商业分析</li>
					<li>研发</li>
					<li>商业分析</li>
					<li>研发商业分析</li>
					<li>研发</li>
					<li>商业分析</li>
					<li>研发</li>
					<li>商业分析</li>
					<li>研发商业分析</li>
					<li>研发</li>
					<li>商业分析</li>
					<li>研发</li>
					<li>商业分析</li>
					<li>研发商业分析</li>
				</ul>
			</div>
			</div>
		<ul class="db_title3 container-fluid mt-20 f-l">
			<li class="db_ti1 col-xs-2 col-md-2 col-lg-2">职位名称</li>
			<li class="db_ti2 col-xs-3 col-md-3 col-lg-3">职位类别</li>
			<li class="db_ti3 col-xs-2 col-md-2 col-lg-2">招聘人数</li>
			<li class="db_ti4 col-xs-3 col-md-3 col-lg-3">工作地点</li>
			<li class="db_ti5 col-xs-2 col-md-2 col-lg-2">发布时间</li>
		</ul>
		<ul class="db_cont container-fluid mt-10 f-l">
			<li class="db_ti1 col-xs-2 col-md-2 col-lg-2">培训专员</li>
			<li class="db_ti2 col-xs-3 col-md-3 col-lg-3">职能类</li>
			<li class="db_ti4 col-xs-2 col-md-2 col-lg-2">2</li>
			<li class="db_ti3 col-xs-3 col-md-3 col-lg-3">佛山顺德乐从</li>
			<li class="db_ti5 col-xs-2 col-md-2 col-lg-2">2016-11-11 <span><img src="/Public/Test/images/sty_03.png" alt=""></span></li>
		</ul>
		<ul class="db_cont container-fluid mt-10 f-l">
			<li class="db_ti1 col-xs-2 col-md-2 col-lg-2">培训专员</li>
			<li class="db_ti2 col-xs-3 col-md-3 col-lg-3">职能类</li>
			<li class="db_ti4 col-xs-2 col-md-2 col-lg-2">2</li>
			<li class="db_ti3 col-xs-3 col-md-3 col-lg-3">佛山顺德乐从</li>
			<li class="db_ti5 col-xs-2 col-md-2 col-lg-2">2016-11-11 <span><img src="/Public/Test/images/sty_03.png" alt=""></span></li>
		</ul>
		<ul class="db_cont container-fluid mt-10 f-l">
			<li class="db_ti1 col-xs-2 col-md-2 col-lg-2">培训专员</li>
			<li class="db_ti2 col-xs-3 col-md-3 col-lg-3">职能类</li>
			<li class="db_ti4 col-xs-2 col-md-2 col-lg-2">2</li>
			<li class="db_ti3 col-xs-3 col-md-3 col-lg-3">佛山顺德乐从</li>
			<li class="db_ti5 col-xs-2 col-md-2 col-lg-2">2016-11-11 <span><img src="/Public/Test/images/sty_03.png" alt=""></span></li>
		</ul>
		
		<div class="container-fluid mt-10 f-l">
			<ul class="psot_cont container-fluid f-l mt-20">
				<li class="psot_cont1 col-xs-1 col-md-1 col-lg-1">发布时间：</li>
				<li class="psot_cont2 col-xs-3 col-md-3 col-lg-3">2016-11-11</li>
				<li class="psot_cont1 col-xs-1 col-md-1 col-lg-1">工作地点:</li>
				<li class="psot_cont2 col-xs-3 col-md-3 col-lg-3">佛山顺德乐从镇</li>
				<li class="psot_cont1 col-xs-1 col-md-1 col-lg-1">工作年限：</li>
				<li class="psot_cont2 col-xs-3 col-md-3 col-lg-3">五年以上</li>
			</ul>
			<ul class="psot_contbot container-fluid f-l">
				<li class="psot_cont1 col-xs-1 col-md-1 col-lg-1">所属部门：</li>
				<li class="psot_cont2 col-xs-3 col-md-3 col-lg-3">招商部</li>
				<li class="psot_cont1 col-xs-1 col-md-1 col-lg-1">学历:</li>
				<li class="psot_cont2 col-xs-3 col-md-3 col-lg-3">本科</li>
				<li class="psot_cont1 col-xs-1 col-md-1 col-lg-1">招聘人数：</li>
				<li class="psot_cont2 col-xs-3 col-md-3 col-lg-3">2</li>
			</ul>
		</div>
		<div class="clear_float"></div>
		<div class="">
			<ul class="post_sty container-fluid f-l ml-10 mt-20">
				<li><span>岗位描述：</span></li>
				<li>基础架构事业群负责规划、设计、运营全球数据中心与网络，为公司电商交易、金融支付、云计算、大数据平台以及健康娱乐、物联网等应用提供24/7的全面保障，整个基础架构覆盖全球主要国家，是每年双十一全球购物节的主要技术保障方。技术基础架构部基础软件团队负责集团所有关键基础软件系统的研发。存储系统团队作为基础软件团队的重要组成部分，负责为集团设计和实现高性能，高可靠，可扩展的存储系统，为业务数据存储提供有力的支持。</li>
				<li>作为存储系统团队的一员，参与系统设计和开发，为打造全新的下一代高性能存储系统。</li>
				<li>1. 高性能存储系统架构设计。</li>
				<li>2. 高性能存储系统实现。</li>
				<li>3. 性能优化。</li>
			</ul>
			<ul class="post_style container-fluid f-l ml-10 mt-20">
				<li><span>岗位要求：</span></li>
				<li>1. 5年以上系统软件，如操作系统，存储系统，数据库系统，分布式系统等大规模系统软件开发经验。</li>
				<li>2. 精通Linux内核编程，精通c／c++语言，精通至少一门脚本语言，如shell，python等。</li>
				<li>3. 对存储系统，文件系统等有深入理解。对存储领域的新技术，如Flash/SSD, NoSQL，Ceph等有独到的见解</li>
				<li>4. 敏锐的洞察力和超强的分析与解决复杂问题的能力。</li>
				<li>5. 良好的沟通能力和团队合作精神，有一定的组织协调能力。</li>
				<li>6. 有在充满变化的环境下克服一切困难达成目的的能力和决心。</li>
			</ul>
		</div>
		<div class="inp_sty  f-l mt-20">
			<ul>	
				<li class="inp_sty1"><a href="">申请岗位</a></li>
				<li class="inp_sty2"><a href="">收藏岗位</a></li>
			</ul>
		</div>
		<div class="clear_float"></div>
</div>
</div>
<div class="clear_float"></div>
	<div class="gb_box container-fluid" id="bgbox" style="display:none;">
		<ul class="echo_top col-xs-12 col-md-12 col-lg-12">
			<li>欢迎使用纳邦e社区优惠平台提供的多用户在线服务，为了保障用户的权益，请在同意使用纳邦e社区虚拟平台之前，详细认真阅读以下用户使用协议(以下简称“本《协议》”)中所有内容，并特别注意本《协议》中以粗体标示的特别约定。本《协议》系由用户与纳邦e社区互联网平台、手机平台或其他平台(以下统称为“纳邦e社区平台”)提供的网络服务所订立的协议。</li>
		</ul>
		<div class="">
			<ul class="s_yibox container-fluid f-l ">
				<li class="s_yicont"></li>
				<li>1.释义</li>
			</ul>
			<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
				<li>1.1. 《协议》系由用户(用户指愿意使用纳邦e社区提供的网络服务的个人及实体)与纳邦就纳邦e社区所提供的网络服务(包括双方相关权利义务规范)所订立的协议。请于成为纳邦e社区平台用户之前，详细阅读本服务条款的所有内容，当您点选同意按钮并进入纳邦e社区平台中则视为用户已经详细阅读了本《协议》的内容及纳邦e社区发布的其他全部服务条款和操作规则的内容，对本协议及前述服务条款和规则均已知晓、理解并接受本《协议》的所有规范并愿受其约束。</li>
				<li>1.2. 纳邦e社区根据本《协议》提供团购服务及基于该等团购服务提供网上论坛等服务。本《协议》 条款适用于纳邦e社区基于纳邦e社区平台提供的各种服务，但当某一特定服务另有单独的服务条款、指引或规则时，用户应遵守本《协议》条款及纳邦e社区随时公布的与该服务相关的服务条款、指引或规则等。前述所有的指引和规则，均构成本《协议》的一部分。</li>
				<li>1.3. 纳邦e社区提供的团购服务系指纳邦通过互联网、移动通信网或其他媒体将具有相同购买意向的零散消费者集合起来，消费者自主向餐饮单位、商场或其他商品/服务经营单位进行团体购买的信息服务。</li>
			</ul>
		</div>
		<div class="">
			<ul class="s_yibox container-fluid f-l">
				<li class="s_yicont"></li>
				<li>2. 知识产权声明</li>
			</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>2.1. 纳邦e社区平台由纳邦独立开发或获得授权许可。纳邦e社区所提供的网络服务的相关著作权、专利权、商标权、商业秘密及其它任何权利，均属纳邦所有或授权纳邦e社区使用该等知识产权的第三方所有。承载这些权利的载体包括但不限于文字表述及其组合、图 标、图饰、图表、色彩、界面设计、版面框架、有关数据、印刷材料及电子文档，受著作权法及其他知识产权法律法规的保护。非经纳邦e社区的同意，任何人或用户均不得擅自下载、复制、传输、修改、编辑，否则用户应承担由此产生的一切法律责任。</li>
			<li>2.2. 用户接受本协议即视为用户主动将其在纳邦e社区发表的任何形式的信息的著作权(包括但不限于：复制权、发行权、出租权、展览权、表演权、放映权、广播权、信息网络传播权、摄制权、改编权、翻译权、汇编权以及应当由著作权人享有的其他可转让权 利)无偿独家转让给纳邦所有，纳邦有权利就任何主体侵权单独提起诉讼并获得全部赔偿。本协议属于《中华人民共和国著作权法》规定的书面协议，其效力及于用户在纳邦e社区发布的任何受著作权法保护的作品内容，无论该内容形成于本协议签订前还是本协议签订后。</li>
			<li>2.3. 用户在使用纳邦e社区服务过程中不得非法使用或处分纳邦或他人的知识产权权利。用户不得将已发表于纳邦e社区的信息以任何形式发布或授权其它网站(及媒体)使用。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>3. 用户的基本义务</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>3.1. 用户需自行配备注册和使用网络所需的各项计算机及网络设备，并自行负担上网所需的各项费用。</li>
			<li>3.2. 纳邦e社区向用户提供的网络服务本身属于商业行为，目前用户可以免费注册及使用，但纳邦e社区保留将来要求用户支付相应费用的权利(自纳邦e社区公告之日起)。</li>
			<li>3.3. 用户同意于注册时提供其本人真实准确的身份识别资料和完整、详尽、真实的其他个人资料。用户确认其本人已年满18周岁。对冒用、盗用他人身份资料注册的用户，应权利人请求，纳邦e社区有权随时中断或终止向该被冒用、盗用个人资料的账号用户提供本协议项下的网络服务(包括收费网络服务)而无需对用户或任何第三方承担任何责任。对于除个人身份识别资料之外的其他个人资料，若用户日后有变更者，应及时于线上进行更新。若用户所提供的其他个人资料与事实不符或所提供的资料已变更而未更新或有任何误导之嫌，而导致纳邦e社区无法为用户提供或继续提供服务，因此而产生的全部责任均由用户承担而与纳邦e社区无关。</li>
			<li>3.4. 用户有义务妥善保管、使用在注册纳邦e社区服务时获得的账号及密码，并为此账号及密码登入系统后所开始的一连串行为或活动负责。</li>
			<li>3.5. 为维护自身权益，用户不应将账号及密码泄漏或告知第三人，不应将账号及密码出借或转让给第三人使用，如因用户自身过错或过失而导致账号或密码泄漏而给用户自身造成损失，用户应自行承担责任。</li>
			<li>3.6. 若用户发现账号或密码遭他人非法使用或有异常使用的情形，应立即通知纳邦e社区，并提交该账号为本人所有的有关证明，以便申请该账号的暂停使用，用户违反3.5规定、黑客攻击、计算机病毒、政府管制等纳邦e社区过错造成的用户损失，纳邦e社区不承担赔偿责任。但在用户根据法律规定申请立案的情况下，纳邦e社区有义务协助查询。</li>
			<li>3.7. 用户同意了本协议的条款之后，纳邦e社区将授权用户以一个合法账号而获得纳邦e社区提供的网络服务的权利。用户不得对包括但不仅限于纳邦e社区的网站及提供的软件进行修改、反向工程、复制或发布。</li>
			<li>3.8. 用户不可以使用纳邦e社区任何知识产权，来创造或提供相同或类似的网络服务，如仿真服务器等。用户不可以对纳邦e社区服务器采取任何的黑客攻击行为，或是尝试着使纳邦e社区服务器过度负荷。用户在拥有合法的账号下，可以在纳邦e社区的服务器上传使用网络服务所必须的资料，但前述资料不得含有如下内容：</li>
			<li>3.8.1. 煽动、抗拒、破坏宪法和法律、行政法规的;</li>
			<li>3.8.2. 煽动颠覆国家政权，推翻社会主义制度的;</li>
			<li>3.8.3. 煽动分裂国家、破坏国家统一的;</li>
			<li>3.8.4. 煽动民族仇恨、民族歧视，破坏民族团结的;</li>
			<li>3.8.5. 捏造或者歪曲事实，散布谣言，扰乱社会秩序的;</li>
			<li>3.8.6.宣扬封建迷信、淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪的;</li>
			<li>3.8.7. 公然侮辱他人或者捏造事实诽谤他人的，或者进行其他恶意攻击的;</li>
			<li>3.8.8. 损害国家机关信誉的;</li>
			<li>3.8.9. 其他违反宪法和法律法规的;</li>
			<li>3.8.10. 包含病毒、木马、定时炸弹等可能对纳邦e社区系统造成伤害或影响其稳定性的内容。</li>
			<li>3.8.11. 用户不得利用纳邦e社区平台发表、传送、传播、储存侵害他人知识产权、商业秘密权等合法权利的内容。</li>
			<li>3.9. 用户在此保证其上传于纳邦e社区的各项内容均不侵犯任何第三方的任何合法权益(包括但不限于知识产权、名誉权等)，并且用于在此授权纳邦e社区及其各关联公司使用及执行任何有关用户上传的内容的知识产权，包括但不限于有权将该等内容再许可给任何第三方使用。</li>
			<li>　3.10. 用户应当遵守法律法规、规章、规范性文件及政策要求的规定，不得在纳邦e社区或利用纳邦e社区服务从事非法或其他损害纳邦e社区或第三方权益的活动，如发送或接收任何违法、违规、违反公序良俗、侵犯他人权益的信息，发送或接收传销材料或存在其他危害的信息或言论，未经纳邦e社区授权使用或伪造纳邦e社区电子邮件题头信息等。</li>
			<li>3.11. 用户应当遵守法律法规应当谨慎合理使用和妥善保管纳邦e社区账号及密码，对其纳邦e社区账号和密码下进行的行为和发生的事件负责。当用户发现纳邦e社区账号被未经其授权的第三方使用或存在其他账号安全问题时应立即有效通知纳邦e社区，要求纳邦e社区暂停该账号的服务，并向公安机关报案。纳邦e社区有权在合理时间内对用户的该等请求采取行动，但对采取行动前用户已经遭受的损失不承担任何责任。用户在未经纳邦e社区同意的情况下不得将纳邦e社区账号以赠与、借用、租用、转让或其他方式处分给他人。</li>
			<li>3.12. 用户通过纳邦e社区与商家进行团购交易时，应当遵守本协议约定及纳邦e社区发布的其他关于团购交易的服务条款和操作规则的全部规定。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>4. 个人资料的保护及其限制</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>4.1. 对于用户所登录留存的个人资料，除下列情形外，纳邦e社区同意在未得到用户同意前，不公开对外披露：</li>
			<li>4.1.1. 为提供用户所要求的产品和服务，而必须和第三方分享的个人信息;</li>
			<li>4.1.2. 根据法律的有关规定，或行政、司法机构的要求，向第三方或者行政、司法机构披露;</li>
			<li>4.1.3. 用户出现违反中国有关法律、法规或者纳邦e社区服务协议或相关规则的情况，需要向第三方披露;</li>
			<li>4.1.3.1. 用户是适格的知识产权投诉人并已提起投诉，应被投诉人要求，向被投诉人披露，以便双方处理可能的权利纠纷;</li>
			<li>4.1.3.2. 纳邦e社区根据法律、法规或者网站政策认为合适的其他披露。</li>
			<li>4.1.4. 在紧急情况下为保护其他用户或第三人的人身安全的情形下的披露。</li>
			<li>4.2. 对于用户的个人资料，用户同意纳邦e社区及其关系公司或合作对象，可以在合理范围内搜集、处理、保存、传递及使用，以向用户提供其它信息及服务或做成会计资料，或进行网络行为的调查或研究，或其它任何合法使用。</li>
			<li>4.3. 用户理解，应国家有权机构的要求，纳邦e社区会在法律允许限度内向前述有权机构提交用户的个人资料或通讯内容，用以配合调查或解决问题。除此之外，当用户要求纳邦e社区给予任何技术上的协助时，用户授权纳邦e社区远程检视与更改用户计算机的内容，但在该情况下纳邦e社区将在检视与更改前向用户明确告知。为了更新程序的需要(例如客户端之更新)，用户授权纳邦e社区：</li>
			<li>4.3.1. 从用户的计算机上传档案;</li>
			<li>4.3.2. 下载档案到用户的计算机。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>5. 用户使用纳邦e社区网络服务的限制</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>5.1. 纳邦e社区严禁用户利用使用纳邦e社区所提供的网络服务进行与使用该等服务无关的行为，包括但不限于妨害他人名誉或隐私权;或以自己名义、匿名或冒用他人或纳邦e社区名义散播诽谤、不实、威胁、不雅、猥亵、不法、攻击性或侵害他人权利的消息或文字，传播色情或其它违反社会公德的言论;传输或散布计算机病毒;从事广告或贩卖商品;从事不法交易或张贴虚假不实或引人犯罪的信息;或任何违反中华人民共和国法律法规的行为。亦不得利用使用该等服务的机会，与其它用户或他人进行非法的交涉或对话。</li>
			<li>5.2. 用户对纳邦e社区服务管理人员所进行的询问应据实澄清，否则纳邦e社区有权随时终止用户使用纳邦e社区所提供的网络服务;纳邦e社区发现不法或可疑的行为者，有权随时通报司法或相关机关处理，并有权同时向该机关呈报用户的基本资料及行为供该等机关调查。用户就因此所产生的不便或困扰，不得向纳邦e社区请求任何损害或补偿。</li>
			<li>5.3. 纳邦e社区不建议使用任何第三方程序进行登录的行为，由此引起的一切问题及后果，由用户自行承担，纳邦e社区不承担任何责任，并保留终止向用户提供服务的权利。</li>
			<li>5.4. 下列行为将视为用户违反本《协议》之行为：</li>
			<li>5.4.1. 如果用户违反了本《协议》的任何约定;</li>
			<li>5.4.2. 纳邦e社区发现用户所填的个人资料是不真实的。</li>
			<li>5.5. 对于用户的违约行为，纳邦e社区将根据本协议及其他网站上所公布的纳邦e社区的管理制度予以处理，同时纳邦e社区保留追究用户其他责任的权利。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>6. 团购服务规则</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>用户在使用纳邦e社区购服务时，应当仔细阅读团购页面中所包含的包括但不限于团购信息中的内容、为再次提示用户注意而标明的本单团购商品/服务的有效期、退款条件等，选择及确认购买数量、价格、应付总额、用户接收团购电子信息或接收货物的收货地址和送货时间等内容。并应当理解并遵守以下团购服务规则：</li>
			<li>6.1. 团购产品、价格与数量</li>
			<li>用户选择团购产品，视为认可团购要约的价格、限购数量，并接受纳邦券及网页上的说明所提示的使用限制、本条款及其它相关规则。</li>
			<li>6.2. 提交及确认团购订单</li>
			<li>6.2.1. 用户再次阅读并确认团购信息的全部内容后方可点击确认并付款，用户完成付款即视为用户已知晓、同意并接受团购页面的全部团购信息，并向商家发出团购要约。团购订单中所包含的全部内容即为用户认可的要约内容，具体包括但不限于团购商品/服务的名称、种类、数量、质量、价格、有效期、预约时间、商家地 址、营业时间、配送方式、退换货方式、退款条件、售后服务等。</li>
			<li>6.2.2. 用户付款成功前，纳邦e社区有权接受商家的委托对用户的要约内容作出变更，如用户接受变更后的内容则用户可确认及付款，如用户不接受变更后内容则有权取消要约。用户付款成功后，如确因情况变化导致商家需对用户要约内容作出变更的，纳邦e社区有权接受商家委托单方对要约内容作出变更，如用户接受变更则按变更后的内容进行消费，如用户不接受变更则用户有权取消并要求纳邦e社区代商家全额退款。</li>
			<li>6.2.3. 用户支付团购价款成功后，纳邦e社区向用户的注册手机号发送电子凭证即“纳邦券”(可能包含二维码，下同)，如商家接受要约，则商家提供验证码(可能包含二维码，下同)给用户，用户收到纳邦券和商家验证码后，团购合同生效，用户可按照团购合同的约定凭纳邦券和验证码向商家主张获得团购商品/服务。</li>
			<li>6.3. 纳邦e社区电子消费券的取得与使用</li>
			<li>6.3.1. 纳邦e社区“纳邦券”及商家发送的验证码必须在标明的有效期内使用，除非经过纳邦e社区和商家同意，超过有效期的不可作为消费凭证，但消费者可以根据本《协议》所述的“三包政策”获得相应退款。</li>
			<li>6.3.2. 用户应当妥善保管纳邦券、商家验证码，纳邦券、商家验证码不记名、不挂失，如因用户个人保管不善等原因导致的遗失、密码泄露、冒领等，均由用户本人负责。因用户保管不善导致纳邦券被他人使用的，用户无权要求纳邦e社区重新发送纳邦券。</li>
			<li>6.3.3.用户进行消费时，应向商家出示纳邦券和商家提供的验证码，商家对纳邦券和商家验证码验证成功后按照团购合同内容的向用户提供团购商品/服务。</li>
			<li>6.3.4. 纳邦券仅作为持有纳邦券的用户消费凭证，不可兑换现金。</li>
			<li>6.3.5. 纳邦e社区团购活动不可与商家其他优惠同时享用，除非商家允许或特别说明。</li>
			<li>6.3.6.用户非经纳邦e社区而从任何其它渠道获得纳邦e社区凭证而发生的任何问题，包括但不限于不能获得商品/服务等，基于法律的原因纳邦e社区将无法保障您的合法权益。</li>
			<li>6.3.7. 用户在团购合同成立后自行交易、转让合同权利义务的，因此发生的任何问题纳邦e社区不承担任何责任。</li>
			<li>6.3.8. 纳邦e社区明确说明必须事先预约的，用户应提前向商家预约，用户理解，预约是否成功受预约人数、预约时间和商家接待能力等多种因素综合限制，预约不代表一定能够成功。</li>
			<li>6.3.9. 用户持纳邦券、商家验证码进行消费后，如无特别说明，用户有权要求商家就此次消费开具足额正式发票，足额指用户购买纳邦团购活动的金额，而非团购产品的原价格。除非事先声明，纳邦e社区无义务向用户开具发票。</li>
			<li>6.3.10. 除非纳邦e社区另有说明，每张纳邦券及商家验证码应当一次性全部兑换。</li>
			<li>6.3.11. 纳邦e社区有权自行设计返利活动条款，就用户参与返利活动拥有独立判断和决定权，包括但不限于是否允许用户参与返利活动，用户是否满足获得返利条件、用户获得返利如何使用等。</li>
			<li>6.3.12. 纳邦券于发生以下情形之一时即失效：</li>
			<li>6.3.12.1. 纳邦券已获得团购商品/服务;</li>
			<li>6.3.12.2. 团购合同内容中约定的有效期届满。</li>
			<li>6.3.13. 如您收到的团购商品/服务已经存在缺损，或您对商品/服务感到不满意，您可以致电纳邦e社区客户服务热线，要求纳邦e社区协助。</li>
			<li>6.4. 退款规则</li>
			<li>用户支付团购价款成功后，需要进行退款的，按照如下规则进行：</li>
			<li>6.4.1. 发生以下情形之一的，用户有权要求纳邦e社区代商家进行退款：</li>
			<li>6.4.1.1. 当一次团购活动中团购人数未达到最低团购人数要求时，纳邦e社区有权取消本次团购活动，并根据本协议约定向已支付相应团购价款的用户进行退款。</li>
			<li>6.4.1.2. 用户付款成功后，因纳邦e社区系统原因、不可抗力或商家原因，导致商家无法向用户提供团购商品/服务，经纳邦e社区核实后属实的。</li>
			<li>6.4.1.3. 用户付款成功后，因确属情况变化导致商家需要变更团购内容，用户不接受变更后内容的。</li>
			<li>6.4.2. 用户已实际消费团购商品/服务的，无权要求商家退款或要求纳邦e社区代商家进行退款，但团购商品/服务与团购合同约定内容严重不符、存在其他严重质量问题或违反《网络交易管理办法》、《中华人民共和国食品安全法》、《中华人民共和国消费者权益保护法》的除外。</li>
			<li>6.4.3.用户未在有效期内进行消费的，是否及如何退款应根据团购合同的约定确定。根据团购合同的约定用户有权要求退款的，按照团购合同的约定纳邦e社区代商家进行退款。</li>
			<li>6.4.4. 用户成功取得商家的验证码后，未进行实际消费且符合纳邦e社区关于“未消费随时退款”约定的，用户可以向纳邦e社区申请退款。经拉纳邦e社区审核，用户的退款申请符合“未消费随时退款”约定的，纳邦e社区将在国家法律法规规定的期间内退款至用户的纳邦e社区账户内。</li>
			<li>6.4.5. 如用户申请将款项退回至用户的支付账户的，即用户申请提现的，则纳邦e社区将相关款项按照用户的支付路径原路退回至用户的支付账户。但如下商品或服务不予退货：</li>
			<li>6.4.5.1. 已消费且无充分证据证明商家提供的商品/服务存在瑕疵或与页面团购信息承诺不符的其他情形的纳邦券。</li>
			<li>6.4.5.2. 实物类产品在用户按照纳邦e社区规则提交退货申请，并退回货物前(需物流运送的产品)。</li>
			<li>6.4.5.3. 因非正常使用及保管而损坏的团购商品/服务。</li>
			<li>6.4.5.4. 在纳邦e社区中明确标明“不支持未消费随时退款”的商品/服务。</li>
			<li>6.4.6. 其他情形下的退款按照团购合同内容约定的退款条件及退款方式进行。</li>
			<li>6.4.7. 在退款进行过程中，用户应当遵守纳邦e社区关于退款的服务条款和操作规则的规定。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>7. 服务的停止和更改</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>7.1. 发生下列情形之一时，纳邦e社区有权停止或中断向用户提供的网络服务：</li>
			<li>7.1.1.对于纳邦e社区的网络设备进行必要的保养及施工;</li>
			<li>7.1.2.发生突发性的网络设备故障时;</li>
			<li>7.1.3.由于纳邦e社区所用的网络通信设备由于不明原因停止，无法提供服务时;></li>
			<li>7.1.4.由于不可抗力因素致使纳邦e社区无法提供线上网络服务;</li>
			<li>7.1.5.由于相关政府机构的要求。</li>
			<li>7.2. 在本协议约定的情形下，就停止、更改或终止向用户所提供的网络服务而可能产生的不便或损害，纳邦e社区对用户本人或任何第三人均不负任何损害赔偿责任。</li>
			<li>7.3. 用户应了解并同意，纳邦e社区所提供的网络服务可能因公司本身、其它合作厂商或相关电信业者网络系统软硬件设备的故障、失灵、或因合作方及相关电信工作人员人为操作的疏失而全部或一部分中断、暂时无法使用、迟延，或因他人侵入纳邦e社区系统篡改或伪造变造资料等，造成服务的停止或中断者或用户档案缺失，用户不得要求纳邦e社区提供任何的补偿或赔偿。</li>
			<li>7.4. 不论在何种情况下，纳邦e社区对由于信息网络设备维护、信息网络连接故障、电脑、通讯或其他系统的故障、电力故障、罢工、劳动争议、暴乱、起义、骚乱、生产力或生产资料不足、火灾、洪水、风暴、爆炸、战争、政府行为、司法行政机关的命令、其他不可抗力或第三方的不作为而造成的不能服务或延迟服务不承担责任。</li>
			<li>7.5. 纳邦e社区根据本协议取消或停止用户的资格或对其加以限制，用户不得要求补偿或赔偿。</li>
			<li>7.6. 纳邦e社区保留将来按照国家法律法规的规定新增、修改或删除其所提供的网络服务的全部或部分的权利，用户不得因此要求任何补偿或赔偿。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>8. 风险承担</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>8.1. 用户同意使用纳邦e社区所提供的网络服务是出于用户个人意愿，并愿自负任何风险，包括但不限于其因使用纳邦e社区网络服务或自行由纳邦e社区官方网站下载软件或资料图片而导致用户或其所使用的计算机软、硬件的损害，或发生任何资料的流失等。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>9. 责任的免除</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>9.1. 纳邦e社区就其基于纳邦e社区平台根据本《协议》向用户所提供的网络服务，除本《协议》明确规定或中国法律法规另有规定外，不负任何明示或默示的担保责任，而其所提供的网络服务的稳定、安全、无误及不中断性亦有可能因第七条所述情形而受到影响。用户应自行承担使用网络服务所产生的所有风险及因此可能导致的损害，包括但不限于其因执行线上活动或自行由纳邦e社区官方网站下载软件、资料图片而导致用户或其所使用的计算机系统非因纳邦e社区主观原因造成的损害，或发生任何资料的流失等。</li>
			<li>9.2. 纳邦e社区对其网络服务不保证不出现任何程序BUG，并对由此可能产生的问题不承担任何赔偿责任。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>10. 用户与商家发生争议的解决规则</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>如用户与商家因团购合同的履行发生任何争议，包括但不限于对团购商品或服务的数量、质量、价格、有效期、预约时间、商家地址、配送方式、退换货方式、退款条件、售后服务等问题发生争议的，用户应与商家按照团购合同内容确定用户与商家各自的权利义务，承担各自的责任，解决争议。纳邦e社区将积极协助用户与商家解决争议。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>11. 赔偿责任限制</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>11.1. 作为一家生活服务平台，纳邦e社区坚持为用户和商家提供安全、便捷、高效的第三方平台服务。用户在购买团购商品/服务并经商家确认后，视为与商家达成团购合同。</li>
			<li>11.2. 除了本《协议》中 “三包政策”所述的责任义务及本《协议》规定的其它限制和除 外情况之外，在中国法律法规所允许的限度内，对于用户使用纳邦e社区网络服务或无法使用网络服务而引起的，或与之有关的任何直接、间接、衍生的、特殊的、附带的、后果性的或惩罚性的损害或所失利益，或任何其它性质的损害，纳邦e社区及其董事、管理人员、雇员、代理、形象代言人或其它代表都不承担任何责任。若依法无 法完全排除损害赔偿责任时，纳邦e社区的赔偿责任(不论是合同或者侵权(包括过失)项下的，还是其它的责任)以用户就使用网络服务向纳邦e社区支付的价款为限。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>12. 链接</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>12.1. 纳邦e社区在其官方网站的所有网页上所提供的所有链接，可能链接到其它个人、公司或组织的网站，提供该等网站的目的，是便利用户自行搜寻或取得信息，纳邦e社区对于被链接的个人、公司或组织的网站所提供的产品、服务或信息，不担保其真实性、完整性、实时性或可信度，这些个人、公司或组织与纳邦e社区间亦不存在任何雇用、委任、代理、合伙或其它类似的关系。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>13. 纳邦e社区的终止权</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>13.1. 用户应切实遵守本《协议》及有关法律的规定。若纳邦e社区经相关数据分析认定用户违反《协议》，用户同意纳邦e社区可以随时终止用户的账号及密码使用权。</li>
			<li>13.2. 为避免争议，本协议涉及到的有关技术方面的问题，用户同意以纳邦e社区系统所记载的数据作为判断标准，纳邦e社区保证该数据的真实性且该数据未经政府有关部门要求，不向包括用户在内的任何人披露，以保护纳邦e社区的商业安全。该检测数据是唯一的、排他的结果。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>14. 损害赔偿</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>14.1. 用户若违反《协议》或相关法令，导致纳邦e社区或其关联公司、受雇人、受托人、代理人及其它相关履行辅助人因此而受到损害或支出费用(包括但不限于由法律诉讼、行政程序等所支出的诉讼费用、律师费用、实际遭受损失的费用等)，用户应负担损害赔偿责任。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>15. 服务条款的修改</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>15.1. 由于用户及市场状况的不断变化，纳邦e社区将相应修改本《协议》，修改本《协议》时，纳邦e社区会按照国家法律法规进行修改。若用户继续使用纳邦e社区的网络服务，即视为用户业已接受纳邦e社区所修订的内容。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>16. 个别条款的效力</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>16.1. 本《协议》所定的任何条款的一部分或全部无效者，不影响其它条款的效力。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>17. 适用法律</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>17.1. 本《协议》的解释，效力及纠纷的解决，适用于中华人民共和国法律。若用户和纳邦e社区之间发生任何纠纷或争议，首先应友好协商解决，协商不成的，用户在此完全同意将因签订本协议而产生的一切纠纷或争议提交本协议签订地人民法院管辖。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>18. 青少年用户特别提示</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>18.1. 青少年用户必须遵守全国青少年网络文明公约：要善于网上学习，不浏览不良信息;要诚实友好交流，不侮辱欺诈他人;要增强自护意识，不随意约会网友;要维护网络安全，不破坏网络秩序;要有益身心健康，不沉溺虚拟时空。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>19. 用户身份的取消</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>19.1. 何注册账户有如下任意一种或多种行为而导致该账号被取消，纳邦e社区不承担任何责任：</li>
			<li>19.1.1.违反本《协议》的行为;</li>
			<li>19.1.2.滥用所享受的权利;</li>
			<li>19.1.3.提供虚假注册信息;</li>
			<li>19.1.4.通过不正当手段使用纳邦e社区网络服务;</li>
			<li>19.1.5.有损害其他用户的行为;</li>
			<li>19.1.6.违反中国的法律、法规;</li>
			<li>19.1.7.违背社会风俗和社会道德的行为;</li>
			<li>19.1.8.其他违反本协议约定的行为。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>20. 纳邦e社区平台服务</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>20.1. 您可以通过我们的网址 (http://www.nbesq.com) 联络我们并了解相关的使用规则。遇有任何问题我们将尽快为您处理。如果您对这些条款有任何疑问，可以询问我们的客服部门。为了您的利益，在需要时，请你认真填写正确您的Email地址和身份识别资料及其他密码保护资料，以便我们更好地为您服务。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>21. 三包政策</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>21.1. 纳邦e社区郑重承诺：纳邦e社区将遵守国家三包政策和拉手平台所示的其他适用的条款与条件。</li>
		</ul>
	</div>
	<div class="">
		<ul class="s_yibox container-fluid f-l">
			<li class="s_yicont"></li>
			<li>22. 特别声明</li>
		</ul>
		<ul class="bg_box col-xs-12 col-md-12 col-lg-12">
			<li>22.1. 用户未通过纳邦e社区与商家之间进行的交易不属于纳邦e社区团购交易，纳邦e社区对不属于纳邦e社区团购交易的交易事项不承担任何责任，用户不得因其与商家之间因此类交易发生的任何争议投诉纳邦e社区或要求纳邦e社区承担任何责任。不属于纳邦e社区团购交易的情况具体包括但不限于：用户未在纳邦e社区与商家达成合同;用户虽在纳邦e社区与商家达成合同，但未通过纳邦e社区即对该合同实行了变更或终止，或在该合同履行完毕后，未通过纳邦e社区又与商家达成了其他合同。</li>
			<li>22.2. 会员在纳邦e社区合作商家消费达到一定额度后可在纳邦兑换平台兑换相应额度内的礼品，兑换后的相应额度即予扣除。</li>
			<li>22.3   会员充值会获得相应的纳邦币，纳邦币可用于平台旗下合作商家消费。</li>
			<li>22.4. 纳邦e社区上发布的图片仅供参考。</li>
		</ul>
	</div>
	</div>
	</div>
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
			<p class="footer_title"><a href="##">商家服务</a></p>
			<li><a href="##">商家合作</a></li>
			<li><a href="##">市场合作</a></li>
			<li><a href="##">商家联盟</a></li>
			<li><a href="##">廉正邮箱</a></li>
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
	<script type="text/javascript" src="/Public/Test/js/shop_get.js"></script> 
	<script type="text/javascript" >
		$(function(){
	    $.Huitab("#tab_box .nav_cont li","#tab_box #bgbox","currentss","click","0");
	    });
</script>
</html>