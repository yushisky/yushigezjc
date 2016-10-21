<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>待评价</title>
	<!--H-ui.Membermin.css只用于Member-->
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
	<script type="text/javascript">
		$(function(){
			$(".hf").click(function(){	
				var focus = $(this).parents(".app_content").find("#appic");
				if(focus.css("display")=="none"){
				   focus.show();
				}
		    });
		});
		// ------------+++++++++++++++
		$(function(){
        /*
        * 鼠标点击，该元素包括该元素之前的元素获得样式,并给隐藏域input赋值
        * 鼠标移入，样式随鼠标移动
        * 鼠标移出，样式移除但被鼠标点击的该元素和之前的元素样式不变
        * 每次触发事件，移除所有样式，并重新获得样式
        * */
        var stars = $('.stars');
        var Len = stars.length;
        //遍历每个评分的容器
        for(p=0;p<Len;p++){
            //每次触发事件，清除该项父容器下所有子元素的样式所有样式
            function clearAll(obj){
                obj.parent().children('p').removeClass('on');
            }
            stars.eq(p).find('p').click(function(){
                var num = $(this).index();
                clearAll($(this));
                //当前包括前面的元素都加上样式
                $(this).addClass('on').prevAll('p').addClass('on');
                //给隐藏域input赋值
                $(this).siblings('input').val(num);
            });
            stars.eq(p).find('p').mouseover(function(){
                var num = $(this).index();
                clearAll($(this));
                //当前包括前面的元素都加上样式
                $(this).addClass('on').prevAll('p').addClass('on');
            });
            stars.eq(p).find('p').mouseout(function(){
                clearAll($(this));
                //触发点击事件后input有值
                var score = $(this).siblings('input').val();
                for(p=0;p<score;p++){
                    $(this).parent().find('p').eq(p).addClass('on');
                }
            });
        }
    })
	//======== =======
	$(function(){
    $('.conter_contentone li a').click(function(){
        $('.conter_contentone li a').removeClass('activppsta');
        $(this).addClass('activppsta');
        // $('.activppla li').removeClass('activppla');
    });
    })
	</script>
	<div class="nav_conter f-l  mt-15">
		<div class="nav-1">
			<b><span>我的账户</span></b>
			<ul class="nav-0">
				<li ><a href="<?php echo U('Member/index');?>">&bull;&nbsp;账户设置</a></li>
				<li ><a href="<?php echo U('ticket');?>">&bull;&nbsp;消费券</a></li>
				<li ><a href="<?php echo U('balance');?>">&bull;&nbsp;我的余额</a></li>
				<li ><a href="<?php echo U('conter');?>">&bull;&nbsp;安全中心</a></li>
				<li ><a href="<?php echo U('recharge');?>">&bull;&nbsp;充值中心</a></li>
			</ul>
			<b><span>我的评价</span></b>
			<ul class="nav-0">
				<li class="app_title2 bgnav-box"><a href="<?php echo U('stayapp');?>">&bull;&nbsp;待评价</a><span>6</span></li>
				<li><a href="<?php echo U('appraise');?>">&bull;&nbsp;已评价</a></li>
			</ul>
		</div>
	</div>
		<div class="app_content f-r col-xs-10 mt-30">
				<p><img src="/Public/Test/images/app211_r1_c1.jpg" alt=""></p>
				<ul class="conter_content">
					<li>摩登玫瑰</li>
					<br>
					<li ><span>我的总体评价：</span></li>
				</ul>
				<ul class="conter_contentone">
					<li class="hf"><a href='javascript:void(0);' >差</a></li>
					<li class="hf"><a href='javascript:void(0);'  >一般</a></li>
					<li class="hf"> <a href='javascript:void(0);'  >满意</a></li>
					<li class="hf"><a href='javascript:void(0);'  >很满意</a></li>
					<li class="hf"><a href='javascript:void(0);'  >强烈推荐</a></li>
				</ul>
				<div class="clear_float"></div>
			<div style="display:none;" id="appic">
				<form action="" method="get">
					<ul class="app_5">
						<li>口味：</li>
						<li ><div class="stars ml-10 ">
						    <span></span>
							<p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <input type="text" style="display:none;" />
							</div>
						</li>
					</ul>
					<div class="clear_float"></div>
					<ul class="app_5">
						<li>服务：</li>
						<li ><div class="stars ml-10 ">
						    <span></span>
							<p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <input type="text" style="display:none;" />
							</div>
						</li>
					</ul>
					<div class="clear_float"></div>
					<ul class="app_5">
						<li>环境：</li>
						<li ><div class="stars ml-10 ">
						    <span></span>
							<p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <input type="text" style="display:none;" />
							</div>
						</li>
					</ul>
					<div class="clear_float"></div>
					<ul class="flie_img">
						<li >
				  			<span class="btn-upload ml-10 ">
				 		 <a href="javascript:void(0);" class="btn btndos radius">嗮图</a>
				 		 <input type="file" multiple name="file_0" class="input-file">
							</span>
							<nav class="flie_pic">最多上传5张图片</nav>	
						</li>
					</ul>
					<p class="bon_mot">* 请上传原创，真实，合法的图片，如果发现用户上传的图有侵权的内容，纳邦有权删除</p>
					<div class="clear_float"></div>

					<p class="mt-30 f-l ml-50 mb-50"><input class="btn buos radius" type="button" value="发表评论"></p>
					</form>
			</div>
		</div>
				<div class="app_content f-r col-xs-10 mt-30">
				<p><img src="/Public/Test/images/app211_r1_c1.jpg" alt=""></p>
				<ul class="conter_content">
					<li>摩登玫瑰</li>
					<br>
					<li ><span>我的总体评价：</span></li>
				</ul>
				<ul class="conter_contentone">
					<li class="hf"><a href='javascript:void(0);' >差</a></li>
					<li class="hf"><a href='javascript:void(0);'  >一般</a></li>
					<li class="hf"> <a href='javascript:void(0);'  >满意</a></li>
					<li class="hf"><a href='javascript:void(0);'  >很满意</a></li>
					<li class="hf"><a href='javascript:void(0);'  >强烈推荐</a></li>
				</ul>
				<div class="clear_float"></div>
			<div style="display:none;" id="appic">
				<form action="" method="get">
					<ul class="app_5">
						<li>口味：</li>
						<li ><div class="stars ml-10 ">
						    <span></span>
							<p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <input type="text" style="display:none;" />
							</div>
						</li>
					</ul>
					<div class="clear_float"></div>
					<ul class="app_5">
						<li>服务：</li>
						<li ><div class="stars ml-10 ">
						    <span></span>
							<p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <input type="text" style="display:none;" />
							</div>
						</li>
					</ul>
					<div class="clear_float"></div>
					<ul class="app_5">
						<li>环境：</li>
						<li ><div class="stars ml-10 ">
						    <span></span>
							<p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <input type="text" style="display:none;" />
							</div>
						</li>
					</ul>
					<div class="clear_float"></div>
					<ul class="flie_img">
						<li >
				  			<span class="btn-upload ml-10 ">
				 		 <a href="javascript:void(0);" class="btn btndos radius">嗮图</a>
				 		 <input type="file" multiple name="file_0" class="input-file">
							</span>
							<nav class="flie_pic">最多上传5张图片</nav>	
						</li>
					</ul>
					<p class="bon_mot">* 请上传原创，真实，合法的图片，如果发现用户上传的图有侵权的内容，纳邦有权删除</p>
					<div class="clear_float"></div>

					<p class="mt-30 f-l ml-50 mb-50"><input class="btn buos radius" type="button" value="发表评论"></p>
					</form>
			</div>
		</div>
				<div class="app_content f-r col-xs-10 mt-30">
				<p><img src="/Public/Test/images/app211_r1_c1.jpg" alt=""></p>
				<ul class="conter_content">
					<li>摩登玫瑰</li>
					<br>
					<li ><span>我的总体评价：</span></li>
				</ul>
				<ul class="conter_contentone">
					<li class="hf"><a href='javascript:void(0);' >差</a></li>
					<li class="hf"><a href='javascript:void(0);'  >一般</a></li>
					<li class="hf"> <a href='javascript:void(0);'  >满意</a></li>
					<li class="hf"><a href='javascript:void(0);'  >很满意</a></li>
					<li class="hf"><a href='javascript:void(0);'  >强烈推荐</a></li>
				</ul>
				<div class="clear_float"></div>
			<div style="display:none;" id="appic">
				<form action="" method="get">
					<ul class="app_5">
						<li>口味：</li>
						<li ><div class="stars ml-10 ">
						    <span></span>
							<p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <input type="text" style="display:none;" />
							</div>
						</li>
					</ul>
					<div class="clear_float"></div>
					<ul class="app_5">
						<li>服务：</li>
						<li ><div class="stars ml-10 ">
						    <span></span>
							<p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <input type="text" style="display:none;" />
							</div>
						</li>
					</ul>
					<div class="clear_float"></div>
					<ul class="app_5">
						<li>环境：</li>
						<li ><div class="stars ml-10 ">
						    <span></span>
							<p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <p>★</p>
						    <input type="text" style="display:none;" />
							</div>
						</li>
					</ul>
					<div class="clear_float"></div>
					<ul class="flie_img">
						<li >
				  			<span class="btn-upload ml-10 ">
				 		 <a href="javascript:void(0);" class="btn btndos radius">嗮图</a>
				 		 <input type="file" multiple name="file_0" class="input-file">
							</span>
							<nav class="flie_pic">最多上传5张图片</nav>	
						</li>
					</ul>
					<p class="bon_mot">* 请上传原创，真实，合法的图片，如果发现用户上传的图有侵权的内容，纳邦有权删除</p>
					<div class="clear_float"></div>

					<p class="mt-30 f-l ml-50 mb-50"><input class="btn buos radius" type="button" value="发表评论"></p>
					</form>
			</div>
		</div>

		</div>
		<div class="clear_float"></div>
		<div class="pages ">
		        <div><a class="first" href="">首页</a> <a class="prev" href="">上一页</a> <a class="num" href="">2</a><a class="num" href="">4</span><a class="num" href="">5</a><a class="num" href="">6</a> <a class="next" href="">下一页</a> <a class="end" href="">尾页</a></div>
		</div>
	</div>
	</div>
</div>
</body>
</html>