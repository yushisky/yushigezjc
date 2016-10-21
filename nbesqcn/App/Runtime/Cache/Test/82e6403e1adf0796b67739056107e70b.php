<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="X-UA-Compatible" content="IE=8"/>
	<title>产品展示</title>
	<style>
		.lanren{display:none;}
	</style>
		<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.min.css">
	<link type="text/css" rel="stylesheet" href="/Public/Test/js/H-ui/css/H-ui.reset.css">
	<link rel="stylesheet" type="text/css" href="/Public/Test/css/index.css">
	<script type="text/javascript" src="/Public/Test/js/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="/Public/Test/js/H-ui/js/H-ui.js"></script>
	<script type="text/javascript" src="/Public/Test/js/shop_get.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Test/js/shaixuan/css/list.css"/>
	<link rel="stylesheet" type="text/css" href="/Public/Test/js/shaixuan/css/manhuaDate.1.0.css"/>
	<!--日期控件，JS库版本不能过高否则tab会失效-->
	<script type="text/javascript" src="/Public/Test/js/shaixuan/js/datejs.js"></script>
	<script type="text/javascript">
		$(function (){
			$("input.mh_date").datejs({					       
				Event : "click",//可选				       
				Left : 0,//弹出时间停靠的左边位置
				Top : -16,//弹出时间停靠的顶部边位置
				fuhao : "-",//日期连接符默认为-
				isTime : false,//是否开启时间值默认为false
				beginY : 2016,//年份的开始默认为1949
				endY :2079//年份的结束默认为2049
			});
		});
		</script>
	<script type="text/javascript">
       		$(document).ready(function(e) {
                $("#selectList").find(".more").toggle(function(){
					$(this).addClass("more_bg");
					$(".more-none").show()
            },function(){
				$(this).removeClass("more_bg");
				$(".more-none").hide()
				});
			});
	</script>
	<script type="text/javascript">
	    	$(document).ready(function(){
				var taboy_box=$(".lefttable-list");
				taboy_box.children("tbody").find("tr:gt(2)").hide(); 
				$(".leftbox-morea").toggle(function(){
					$(this).parent().prev().find("tr").show();
					$(this).addClass("more-i")
				},function(){
					$(this).removeClass("more-i");
					$(this).parent().prev().children("tbody").find("tr:gt(2)").hide(); 
				}
				);
			});
	</script>
</head>
<body >
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
<div class="screen-term mt-30">
<div class="selectNumberScreen">
<div id="selectList" class="screenBox screenBackground">
  <div class="list-screen">
    <div class="screen-top" style="position:relative;"><span>目的地<input id="txtadress" type="text"/></span><span>入住时间<input type="text" class="mh_date" readonly="true" /></span><span>退房时间<input type="text" class="mh_date" readonly="true" /></span><span>酒店名称<input type="text" class="ju-name" /></span>
    <input type="submit" class="btn btn-pro" value="搜索"></span></div>
    <div style="padding:10px 30px 10px 0px;">
    <div class="screen-address" >
      <div class="list-tab">
        <div id="demo1" class="clearfix">
          <div class="jiud-name" >酒店位置</div>
          <div class="ui-tab-container" id="tab_demo">
            <ul class="clearfix hotlfix ui-tab-list ">
              <li class="ui-tab-active">景点</li>
              <li>交通枢纽</li>
              <li>地铁周边</li>
              <li>行政区</li>
            </ul>
              <div class="ui-tab-content clearfix tabCon">
                	<ul class="clearfix ui-tab-list2">
                      <li class="ui-tab-active">景点</li>
                      <li>交通枢纽</li>
                    </ul>
                    <div class="ui-tab-bd">
      			<div class="ui-tab-content2 clearfix tabCon2"><p>
                  <dl class="listIndex" attr="terminal_brand_s">
                    <dt style="display:none;">酒店位置</dt>
                    <dd data-more=true>
                      <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="">客栈</a></label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >精品酒店</a> </label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="">情侣酒店</a> </label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >园林庭院</a></label>
                       </dd> 
                  </dl>
                </div>
                 </div>
                    <div class="ui-tab-content2 clearfix tabCon2" style="display:none;">
                    <dl class="listIndex" attr="terminal_brand_s">
                    <dt style="display:none;">酒店位置</dt>
                    <dd data-more=true>
                      <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >客栈</a></label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="">精品酒店</a> </label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >情侣酒店</a> </label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >园林庭院</a></label>
                       </dd> 
                  </dl>
                    </div>
                </div>
              <div class="ui-tab-content clearfix tabCon" >
                <dl class="listIndex" attr="terminal_brand_s">
                    <dt style="display:none;">酒店位置</dt>
                    <dd data-more=true>
                      <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >客栈</a></label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="">精品酒店</a> </label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >情侣酒店</a> </label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >园林庭院</a></label>
                       </dd> 
                  </dl>
              </div>
              <div class="ui-tab-content clearfix tabCon" >
               <dl class="listIndex" attr="terminal_brand_s">
                    <dt style="display:none;">酒店位置</dt>
                    <dd data-more=true>
                      <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >客栈</a></label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >精品酒店</a> </label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >情侣酒店</a> </label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >园林庭院</a></label>
                       </dd> 
                  </dl>
              </div>
              <div class="ui-tab-content clearfix tabCon" >
               <dl class="listIndex" attr="terminal_brand_s">
                    <dt style="display:none;">酒店位置</dt>
                    <dd data-more=true>
                      <label><a href="javascript:;" values2="" values1="" >不限</a></label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" />
                        <a href="javascript:;" values2="" values1="" attrval="小米">客栈</a></label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >精品酒店</a> </label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >情侣酒店</a> </label>
                      <label>
                        <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                        <a href="javascript:;" values2="" values1="" >园林庭院</a></label>
                       </dd> 
                  </dl>
              </div>
            </div>
         </div>
        </div>
      </div>
    </div>
      <dl class="listIndex" attr="价格范围">
        <dt >酒店价格</dt>
        <dd>
          <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
          <label>
            <input name="radio2" type="radio" value="" />
            <a href="javascript:;" values2="99" values1="1" >100元以下</a></label>
          <label>
            <input name="radio2" type="radio" value="" />
            <a href="javascript:;" values2="300" values1="100" >100-300元 </a></label>
          <label>
            <input name="radio2" type="radio" value="" />
            <a href="javascript:;" values2="600" values1="300" >300-600元</a></label>
          <label>
            <input name="radio2" type="radio" value="" />
            <a href="javascript:;" values2="1500" values1="600" >600-1500元</a></label>
         
          <div class="custom"><span>自定义</span>&nbsp;
            <input name="" type="text" id="custext1"/>
            &nbsp;-&nbsp;
            <input name="" type="text" id="custext2" />
            <input name="" type="button" id="cusbtn" value="确定"  onClick="testContent('custext1')" />
          </div>
        </dd>
          </dl>
          <dl class="listIndex" attr="terminal_brand_s">
            <dt >主题风格</dt>
            <dd data-more=true>
              <label><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
              <label>
                <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                <a href="javascript:;" values2="" values1="" >客栈</a></label>
              <label>
                <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                <a href="javascript:;" values2="" values1="" >精品酒店</a> </label>
              <label>
                <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                <a href="javascript:;" values2="" values1="" >情侣酒店</a> </label>
              <label>
                <input name="checkbox2" type="checkbox" value="" autocomplete="off"/>
                <a href="javascript:;" values2="" values1="" >园林庭院</a></label>
                <span class="more"><em class="open"></em>更多</span>
               </dd> 
          </dl>
          <dl class="listIndex more-none" attr="terminal_brand_s"  style="display:none;border:none">
            <dt style='visibility:hidden'>主题风格</dt>
            <dd >
              <label style='visibility:hidden'><a href="javascript:;" values2="" values1="" attrval="不限">不限</a></label>
              <form action="" method="get"> 
                  <label><input name="checkbox2" type="checkbox" value="" /><a href="javascript:;" values2="" values1="" >精品酒店2</a></label>
                  <label><input name="checkbox2" type="checkbox" value="" /><a href="javascript:;" values2="" values1="" >精品酒店3</a> </label> 
                  <label><input name="checkbox2" type="checkbox" value="" /><a href="javascript:;" values2="" values1="" >精品酒店4</a> </label>  
            </form> 
          </dl>
        </div>
      </div>   
    </div>
    <div class="hasBeenSelected clearfix"><span id="time-num"><font>208</font>家酒店</span>
          <div style="float:right;" class="eliminateCriteria">清空所有条件</div>
          <dl>
            <dt>符合条件：</dt>
            <dd style="DISPLAY: none" class=clearDd>
              <div class=clearList></div>
          </dl>
        </div>
  	</div>
		<div class="clear_float"></div>
		<div class="select_box mt-20 container-fluid" >
			<ul class="select_leftbox container-fluid" id="selhot">
				<li class="select_title"><a href="##">默认</a></li>
				<li><a href="##">积分<img src="/Public/Test/images/xuan2.png" alt=""></a></li>
				<li><a href="##">好评<img src="/Public/Test/images/xuan1.png" alt=""></a></li>
				<li><a href="##">发布时间<img src="/Public/Test/images/xuan1.png" alt=""></a></li>
				<li><a href="##">人数<img src="/Public/Test/images/more.png" alt=""></a></li>
				<li><a href="##">人均消费<img src="/Public/Test/images/more.png" alt=""></a></li>
				<a href="##"><input type="checkbox">&nbsp;优惠券</a>
			</ul>
		</div>
		<div class="clear_float"></div>
		 <div class="client_content" id="div3" >
			<div class="f-r"  style="width:310px;height:310px;border:#ccc solid 1px;font-size:16px;font-weight:700" id="map"></div> 
		</div>
		
		<div class="con_content02 f-l">
			<div class="content_boxbot-03">
				<img class="ho_img" src="/Public/Test/images/calss2_03.png" alt="">
				<ul class="hotl_content">
					<li class="hoti_ti"><span>1</span>顺福旅馆</li>
					<li class="hoti_ti2">顺德区容桂镇富华路167号（105国道旁）</li>
					<li><img src="/Public/Test/images/ping1.png" alt=""><span class="ho_col">(13)</span></li>
				</ul>
				<ul class="hotl_right">
					<li><b>15%积分</b></li>
				</ul>
				<ul class="hotl_img">
					<li><img src="/Public/Test/images/pb10.png" alt=""></li>
					<li><img src="/Public/Test/images/pb11.png" alt=""></li>
					<li><img src="/Public/Test/images/pb12.png" alt=""></li>
					<li><img src="/Public/Test/images/pb13.png" alt=""></li>
				</ul>
			</div>
		</div>
		<div class="con_content02 f-l ">
			<div class="content_boxbot-03">
				<img class="ho_img" src="/Public/Test/images/calss2_03.png" alt="">
				<ul class="hotl_content">
					<li class="hoti_ti"><span>1</span>顺福旅馆</li>
					<li class="hoti_ti2">顺德区容桂镇富华路167号（105国道旁）</li>
					<li><img src="/Public/Test/images/ping1.png" alt=""><span class="ho_col">(13)</span></li>
				</ul>
				<ul class="hotl_right">
					<li><b>15%积分</b></li>
				</ul>
				<ul class="hotl_img">
					<li><img src="/Public/Test/images/pb10.png" alt=""></li>
					<li><img src="/Public/Test/images/pb11.png" alt=""></li>
					<li><img src="/Public/Test/images/pb12.png" alt=""></li>
					<li><img src="/Public/Test/images/pb13.png" alt=""></li>
				</ul>
			</div>
		</div>	
		<div class="con_content02 f-l">
			<div class="content_boxbot-03">
				<img class="ho_img" src="/Public/Test/images/calss2_03.png" alt="">
				<ul class="hotl_content">
					<li class="hoti_ti"><span>1</span>顺福旅馆</li>
					<li class="hoti_ti2">顺德区容桂镇富华路167号（105国道旁）</li>
					<li><img src="/Public/Test/images/ping1.png" alt=""><span class="ho_col">(13)</span></li>
				</ul>
				<ul class="hotl_right">
					<li><b>15%积分</b></li>
				</ul>
				<ul class="hotl_img">
					<li><img src="/Public/Test/images/pb10.png" alt=""></li>
					<li><img src="/Public/Test/images/pb11.png" alt=""></li>
					<li><img src="/Public/Test/images/pb12.png" alt=""></li>
					<li><img src="/Public/Test/images/pb13.png" alt=""></li>
				</ul>
			</div>
		</div>	
		<div class="con_content02 f-l">
			<div class="content_boxbot-03">
				<img class="ho_img" src="/Public/Test/images/calss2_03.png" alt="">
				<ul class="hotl_content">
					<li class="hoti_ti"><span>1</span>顺福旅馆</li>
					<li class="hoti_ti2">顺德区容桂镇富华路167号（105国道旁）</li>
					<li><img src="/Public/Test/images/ping1.png" alt=""><span class="ho_col">(13)</span></li>
				</ul>
				<ul class="hotl_right">
					<li><b>15%积分</b></li>
				</ul>
				<ul class="hotl_img">
					<li><img src="/Public/Test/images/pb10.png" alt=""></li>
					<li><img src="/Public/Test/images/pb11.png" alt=""></li>
					<li><img src="/Public/Test/images/pb12.png" alt=""></li>
					<li><img src="/Public/Test/images/pb13.png" alt=""></li>
				</ul>
			</div>
		</div>	
		<div class="con_content02 f-l">
			<div class="content_boxbot-03">
				<img class="ho_img" src="/Public/Test/images/calss2_03.png" alt="">
				<ul class="hotl_content">
					<li class="hoti_ti"><span>1</span>顺福旅馆</li>
					<li class="hoti_ti2">顺德区容桂镇富华路167号（105国道旁）</li>
					<li><img src="/Public/Test/images/ping1.png" alt=""><span class="ho_col">(13)</span></li>
				</ul>
				<ul class="hotl_right">
					<li><b>15%积分</b></li>
				</ul>
				<ul class="hotl_img">
					<li><img src="/Public/Test/images/pb10.png" alt=""></li>
					<li><img src="/Public/Test/images/pb11.png" alt=""></li>
					<li><img src="/Public/Test/images/pb12.png" alt=""></li>
					<li><img src="/Public/Test/images/pb13.png" alt=""></li>
				</ul>
			</div>
		</div>	
		<div class="con_content02 f-l">
			<div class="content_boxbot-03">
				<img class="ho_img" src="/Public/Test/images/calss2_03.png" alt="">
				<ul class="hotl_content">
					<li class="hoti_ti"><span>1</span>顺福旅馆</li>
					<li class="hoti_ti2">顺德区容桂镇富华路167号（105国道旁）</li>
					<li><img src="/Public/Test/images/ping1.png" alt=""><span class="ho_col">(13)</span></li>
				</ul>
				<ul class="hotl_right">
					<li><b>15%积分</b></li>
				</ul>
				<ul class="hotl_img">
					<li><img src="/Public/Test/images/pb10.png" alt=""></li>
					<li><img src="/Public/Test/images/pb11.png" alt=""></li>
					<li><img src="/Public/Test/images/pb12.png" alt=""></li>
					<li><img src="/Public/Test/images/pb13.png" alt=""></li>
				</ul>
			</div>
		</div>	
		<div class="con_content02 f-l">
			<div class="content_boxbot-03">
				<img class="ho_img" src="/Public/Test/images/calss2_03.png" alt="">
				<ul class="hotl_content">
					<li class="hoti_ti"><span>1</span>顺福旅馆</li>
					<li class="hoti_ti2">顺德区容桂镇富华路167号（105国道旁）</li>
					<li><img src="/Public/Test/images/ping1.png" alt=""><span class="ho_col">(13)</span></li>
				</ul>
				<ul class="hotl_right">
					<li><b>15%积分</b></li>
				</ul>
				<ul class="hotl_img">
					<li><img src="/Public/Test/images/pb10.png" alt=""></li>
					<li><img src="/Public/Test/images/pb11.png" alt=""></li>
					<li><img src="/Public/Test/images/pb12.png" alt=""></li>
					<li><img src="/Public/Test/images/pb13.png" alt=""></li>
				</ul>
			</div>
		</div>	
		<div class="con_content02 f-l">
			<div class="content_boxbot-03">
				<img class="ho_img" src="/Public/Test/images/calss2_03.png" alt="">
				<ul class="hotl_content">
					<li class="hoti_ti"><span>1</span>顺福旅馆</li>
					<li class="hoti_ti2">顺德区容桂镇富华路167号（105国道旁）</li>
					<li><img src="/Public/Test/images/ping1.png" alt=""><span class="ho_col">(13)</span></li>
				</ul>
				<ul class="hotl_right">
					<li><b>15%积分</b></li>
				</ul>
				<ul class="hotl_img">
					<li><img src="/Public/Test/images/pb10.png" alt=""></li>
					<li><img src="/Public/Test/images/pb11.png" alt=""></li>
					<li><img src="/Public/Test/images/pb12.png" alt=""></li>
					<li><img src="/Public/Test/images/pb13.png" alt=""></li>
				</ul>
			</div>
		</div>	
	<!-- 地图 -->
	
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

<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.2&ak=8YLug7T5QfNHtHC8uBlZQyUfsNSUBxC2"></script>
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
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap//Public/Test/images/icon.png/",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 100,
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
</script>
<script type="text/javascript" src="/Public/Test/js/layer/2.1/layer.js"></script>
<script type="text/javascript" src="/Public/Test/js/shaixuan/js/shaixuan.js"></script> 
<script type="text/javascript" src="/Public/Test/js/H-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/Test/js/shaixuan/js/shaixuan.js"></script> 
<script type="text/javascript">
	// ===============
	$(function(){
	    $.Huitab("#tab_demo .hotlfix li","#tab_demo .tabCon","hotlcurrent","click","0");
	    });
	$(function(){
	    $.Huitab("#tab_demo .ui-tab-list2 li","#tab_demo .tabCon2","hotlcurrent","click","0");
	    });

	function testContent(obj){
	if(document.getElementById(obj).value.length==0){
		alert('不能为空!');
		
		}
	}
	$(function(){
	    $('#selhot  li a').click(function(){
	        $('#selhot  li a').removeClass('activ-home');
	        $(this).addClass('activ-home');
	        // $('.cplb_nrsub li').removeClass('activesr');
	    });
	    })
    	//----只能放在当前页面
		    window.onscroll=function(){ 
		    var t=document.documentElement.scrollTop||document.body.scrollTop; 
		    var map2=document.getElementById("div3"); 
		    if(t>=700){ 
		        map2.className = "div3_1";
		    }else{
		        map2.className = "mt-20 f-r";
		    } 
		}
	
</script>
</body>
</html>