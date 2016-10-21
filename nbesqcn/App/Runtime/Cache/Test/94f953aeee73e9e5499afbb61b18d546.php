<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>商家申请信息</title>
		<link rel="stylesheet" type="text/css" href="/Public/Test/js/H-ui/css/H-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/Test/js/H-ui/css/H-ui.reset.css"/>
	<link type="text/css" rel="stylesheet" href="/Public/Test/css/shop_index.css">
	<link type="text/css" rel="stylesheet" href="/Public/Test/js/icheck/icheck.css">
	<script type="text/javascript" src="/Public/Test/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="/Public/Test/js/H-ui/js/H-ui.js"></script>
	<script type="text/javascript" src="/Public/Test/js/shops-us.js"></script>
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=8YLug7T5QfNHtHC8uBlZQyUfsNSUBxC2"></script>
	<script type="text/javascript" src="/Public/Test/js/layer/layer.js"></script>
	<script type="text/javascript" src="/Public/Test/js/icheck/jquery.icheck.min.js"></script>
	<script type="text/javascript">
	//var navigation = responsiveNav("Hui-navbar", {customToggle: ".nav-toggle"});
	$(function(){
		$('.skin-minimal input').iCheck({
			checkboxClass: 'icheckbox-blue',
			radioClass: 'iradio-red',
			increaseArea: '20%'
		});
	});
</script>
</head>
<body>
	<div class="container-fluid bg-box">
		<div class="header container">
		<div class="col-md-12">
			<div class="lo-go f-l"><img src="/Public/Test/images/logo.png" alt=""><span>商家合作</span></div>
			<ul class="head-title f-r ">
				<li> <a href="#">商家首页</a></li>
				<li><a href="#">营销案例</a></li>
				<li><a href="#">商家APP</a></li>
				<li><a href="#">登录</a><img src="/Public/Test/images/index_03.png" alt=""><a href="#">注册</a></li>
			</ul>
		</div>
		</div>
		<nav class="bg-pic pos-r ">
			<img class="f-l" src="/Public/Test/images/cban3.jpg" alt="">
			<nav class="container">
				<p class="f-l pos-a ml-20">百万商户的选择<br><span>携手纳邦e社区 , 轻松赚钱</span></p>
			</nav>
		</nav>
		<div class="clear_float"></div>
		<div class="conter-1 container">
				<div class="cont-title text-c col-md-12"><span>合作流程</span></div>
				<div class="zhu-to f-l container-fluid mt-40">
					<ul class="col-md-3 text-c">
						<li><img src="/Public/Test/images/zhuce1.png" alt=""></li>
						<li>第一步 : 商家提交相关信息</li>
					</ul>
					<ul class="col-md-3 text-c">
						<li><img src="/Public/Test/images/zhuce2.png" alt=""></li>
						<li>第二步 : 纳邦资质审核（3个工作日）</li>
					</ul>
					<ul class="col-md-3 text-c">
						<li><img src="/Public/Test/images/zhuce3.png" alt=""></li>
						<li>第三步 : 纳邦和商家电话沟通</li>
					</ul>
					<ul class="col-md-3 text-c">
						<li><img src="/Public/Test/images/zhuce4.png" alt=""></li>
						<li>第四步 : 纳邦上门洽谈</li>
					</ul>
				</div>
		</div>
		<div class="container-fluid ment-go f-l mt-50 Huifold" id="Addsho">
			<div  class="container ment-goo1 " >
				<nav class="title-ment1 text-c">常见问题</nav>
				<ul class="f-l container-fluid shop_in">
					<li><span>01</span></li>
					<li class="so-on"><a href="javascript:void(0);">与纳邦e社区合作需要收费吗 ?</a><i class="f-r "><img src="/Public/Test/images/more.png" alt=""></i></li>
				<ol class="shop_on f-l container-fluid " style="display:no ne;">
					<li><span>A</span></li>
					<li>不同合作项目以及地区标准会有差异，具体合作费用及结算问题在资质审核后，当地业务员会与您洽谈</li>
				</ol>
				</ul>
				<ul class="f-l container-fluid shop_in">
					<li><span>02</span></li>
					<li class="so-on"><a href="javascript:void(0);">提交商家信息后多长时间会给予回复 ?</a><i class="f-r "><img src="/Public/Test/images/more.png" alt=""></i></li>
				<ol class="shop_on f-l container-fluid " style="display:none;">
					<li><span>B</span></li>
					<li>不同合作项目以及地区标准会有差异，具体合作费用及结算问题在资质审核后，当地业务员会与您洽谈</li>
				</ol>
				</ul>	
				<ul class="f-l container-fluid shop_in">
					<li><span>03</span></li>
					<li class="so-on"><a href="javascript:void(0);">请问哪些城市可以参加商家合作 ?</a><i class="f-r "><img src="/Public/Test/images/more.png" alt=""></i></li>
				<ol class="shop_on f-l container-fluid " style="display:none;">
					<li><span>C</span></li>
					<li>不同合作项目以及地区标准会有差异，具体合作费用及结算问题在资质审核后，当地业务员会与您洽谈</li>
				</ol>
				</ul>
				<ul class="f-l container-fluid shop_in">
					<li><span>04</span></li>
					<li class="so-on"><a href="javascript:void(0);">与纳邦合作的项目主要有哪些品类 ?</a><i class="f-r "><img src="/Public/Test/images/more.png" alt=""></i></li>
				<ol class="shop_on f-l container-fluid " style="display:none;">
					<li><span>D</span></li>
					<li>不同合作项目以及地区标准会有差异，具体合作费用及结算问题在资质审核后，当地业务员会与您洽谈</li>
				</ol>
				</ul>
			</div>
		</div>
		<div class=" container">
			<div class="container-fluid">
					<nav class="title-mag2 text-c">填写信息</nav>
			<form action="" method="">
			<div class="col-md-12 mag1-cont ">
				<nav class="f-l mag-title">您的信息</nav>
				<ol class="col-md-9 col-md-offset-1">
					<li><input type="text" value="" placeholder="您的姓名"></li>
					<li><input type="text" value="" placeholder="您的手机号"></li>
					<li><input type="text" value="" placeholder="邮箱"></li>
					<li><input type="text" value="" placeholder="其他联系方式"></li>
				</ol>
			</div>
			<div class="col-md-12 mag1-cont-1  mt-50">
				<nav class="f-l mag-title">经营类型</nav>
				<ol class="col-md-9 col-md-offset-1 nav-col">
					<li><input type="text" class="mag1-cinp" value="" placeholder="商家类型"><nav class="f-l ml-15">请搜索，选择二级类型<br>*审核通过后，会安排专门负责此类型的业务员与您接洽</nav></li>
					<ul><li class="inp-on f-l" >是否有营业执照<span class="formControls skin-minimal">
					<font class="radio-box">
						<input type="radio" id="sex-1" name="sex" datatype="*" nullmsg="请选择性别！">
						<label for="sex-1">是</label>
					</font>
					<font class="radio-box">
						<input type="radio" id="sex-2" name="sex">
						<label for="sex-2">否</label>
					</font>
					</span><span class="btn-upload">
				  	<a href="javascript:void(0);" class="btn btn-pary radius f-l">添加营业执照照片</a>
				  	<input type="file" multiple name="file_0" class="input-file">
					</span></li><nav class="f-l ml-15">*请使用照片原图，证件文字清晰 <br><a href="javascript:void(0);">点击查看示例</a></nav></ul>
					<li><textarea name="" class="f-l" id="" placeholder="商家介绍：" ></textarea><nav class="f-l col-md-5">*请简单介绍店铺信息和您想合作的大概内容，没有格式要求，简单清楚即可，便于工作人员能快速审核。具体的合作事项还是需要业务员与您当面沟通。<br><a href="javascript:void(0);">点击参考示例</a></nav></li>
				</ol>
			</div>
			<div class="col-md-12 mag1-cont-1  mt-50">
				<nav class="f-l mag-title">门店信息</nav>
				<ol class="col-md-9 col-md-offset-1 nav-col">
					<li><input type="text" class="mag1-cinp" value="" placeholder="门店名称"><nav class="f-l ml-15">*请填写门店名称，如果有多分店的，<br>也可以写上分店的名称</nav></li>
					<ul><li class="inp-on f-l" >
					<font class="f-l">城市</font>
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
					 <font class="f-l">区域</font>
					<dl class="selects f-l">
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
					  <font class="f-l ml-5">商圈</font>
					   <dl class="select">
						<dt>商圈</dt>
						<dd>
							<ol>
								<li><a href="javascript:void(0)">商圈</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
								<li><a href="javascript:void(0)">佛山市</a></li>
							</ol>
						</dd>
					</dl>
					   </li><nav class="f-l ml-15"> *目前佛山为已开站城市，其他城市暂时不开放<br>请佛山市继续提交信息</nav></ul>
					<div class="clear_float"></div>
					<li ><input type="text" class="mag1-cinp2" value="" placeholder="详细地址">
						<a class="btn-proc btn f-l" href="javascript:void(0);" onclick="addmap1()">在地图上标注地址</a>
					<nav class="f-l ml-15">*为了向消费者展示正确的接待信息，请务必在地图上 <br>标注 确认</nav></li>
					<div class="clear_float"></div>
					<li >
						<nav class="map mb-20">
							<div class="f-l"  style="width:300px;height:300px;border:#ccc solid 1px;font-size:12px" id="map"></div>
						</nav>
					</li>
					<div class="clear_float"></div>
					<li><input type="text" class="mag1-cinp" value="" placeholder="门店电话"><nav class="f-l ml-15">*请填写门店电话后、或前台电话，如果没有，请填写一个<br>消费者能联系的电话 </nav></li>
					<li><input type="text" class="mag1-cinp" value="" placeholder="日销售额"><nav class="f-l ml-15">*请估算一个平均值，以便于后期方案设计及了解您的经营状况<br>（单位：元/日）</nav></li>
					<div class="col-md-10 mt-50 mb-30">
						<nav class="sub-inof-1 text-c"><input type="submit" value="提交资料">
					</div>
				</ol>
			</div>
			</form>
			</div>
		</div>
		<div class="clear_float"></div>
		<!-- footer bg -->
		<div class="footer text-c mt-50">
			<div class="container">
				<ul class="col-md-12 text-c mt-30 mb-10 col-md-offset-2 " >
					<li>纳邦首页</li>
					<ol><img src="/Public/Test/images/index_03.png" alt=""></ol>
					<li>关于纳邦</li>
					<ol><img src="/Public/Test/images/index_03.png" alt=""></ol>
					<li>纳邦新闻</li>
					<ol><img src="/Public/Test/images/index_03.png" alt=""></ol>
					<li>合作流程</li>
					<ol><img src="/Public/Test/images/index_03.png" alt=""></ol>
					<li>商家后台</li>
					<ol><img src="/Public/Test/images/index_03.png" alt=""></ol>
					<li>常见问题</li>
					<ol><img src="/Public/Test/images/index_03.png" alt=""></ol>
					<li>客服电话：<span>0757-28338383</span>（每天9:00到17:30）</li>
				</ul>
				<nav class="copy text-c mb-50">Copyright  &copy; 2016 nbesq.com 版权所有 京ICP证030273号 京公网安备1101080201606号</nav>
			</div>
		</div>
	</div>
</body>
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
        {content:"666666666666666",title:"纳邦人力资源有限公司",imageOffset: {width:0,height:3},position:{lat:22.961963,lng:113.112373}}
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
// --------------
	function addmap1() {
	        layer.open({
	        	title: [
			    '地图编辑，点击气泡按钮标注/坐标',
			    'background-color:#767c8a; color:#fff;']
	            ,type: false,
	            skin:'layui-layer-rim', //加上边框
	            area:['1000px', '620px'], //宽高
	            btn:['确定','取消'],
	            scrollbar:false,
	            content: '<div class="col-md-12 mt-10 mappi">请输入地址：<input id="text_" type="text" value="" style="margin-right:100px;"/><input class="btnss btn" type="button" value="查询" onclick="searchByStationName();"/><div id="container" class="f-l" style="position: absolute; margin-top:30px; width: 680px; height: 440px; top: 50; border: 1px solid gray;overflow:hidden;"></div><div class="mappic-box f-r"><ul><li>北滘镇</li><li>北滘广场</li><li>北滘公园</li></ul></div></div>'
	       	 });
	    	}
	 // ===============
    	$(function(){
			$.Huifold("#Addsho .shop_in li","#Addsho .shop_in .shop_on","fast",1,"click");
		});
  </script>
</html>