<?php if (!defined('THINK_PATH')) exit();?><link type="text/css" rel="stylesheet" href="/Public/home/style/style.css" />
<script type="text/javascript" src="/Public/home/js/jquery.pack.js"></script>
<script type="text/javascript" src="/Public/home/js/jQuery.blockUI.js"></script>
<script type="text/javascript" src="/Public/home/js/jquery.SuperSlide.js"></script>
</head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>金陵贸易有限公司</title>
<body>
<div class="header">
    <h1 class="logo" title="">
        <a href="index.html"><img src="/Public/home/images/logo.gif" alt="" /></a>
    </h1>
    <p class="top_r">
        <a href="#" class="btn_i">设为主页</a><a href="#" class="btn_f">收藏本站</a>
    </p>
</div>
<div class="nav">
    <div class="nav_left"></div>
    <ul id = "nav">
        <?php if(is_array($nav_data)): foreach($nav_data as $key=>$val): ?><li class="sel"><a href="http://www.jinling.com/index.php/Home/Index/<?php echo ($val["nav_link"]); ?>"><?php echo ($val["nav_name"]); ?></a></li><?php endforeach; endif; ?>
     </ul>
     <div class="time" id="showTime">&nbsp;</div>
    <div class="nav_right"></div>
</div>

<div class="banner">
	<div class="effect">
                <div id="slideBox" class="slideBox">
                    <div class="hd">
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <li><img src="/Public/home/images/banner.jpg" /></li>
                            <li><img src="/Public/home/images/lrgimg5.jpg" /></li>
                            <li><img src="/Public/home/images/lrgimg6.jpg" /></li>
                        </ul>
                    </div>
                </div>
        </div>
</div>
<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">行业知识<b class="cGrey fn">Knowledge</b></h2>
        </div>
        <ul class="list_r" style="padding-right:40px">
       <?php if(is_array($art_data)): foreach($art_data as $key=>$val): ?><li><a href="#"><?php echo ($val["article_title"]); ?></a><span class="time2"><?php echo (date('Y-m-d',$val["article_addtime"])); ?></span></li><?php endforeach; endif; ?>
           
        </ul>
        <div class="blank10"></div>
        <div class="pages">
        <?php echo ($Page); ?>
        </div>
    </div>
	           <div class="righter">
    	<div class="rightBox">
        	<a href="#" class="btn_s">我要留言</a>
        </div>
        <div class="blank10"></div>
    	<div class="rightBox">
        	<h3>最新公告<b class="cGrey fn">News</b></h3>
            <ul class="list_r">
             <?php if(is_array($art_data1)): foreach($art_data1 as $key=>$val): ?><li><a href="<?php echo U('home/index/detail',array('art_id'=>$val['id']));?>"><?php echo ($val["article_title"]); ?></a></li><?php endforeach; endif; ?>
            	<!-- <li><a href="#">祝贺公司网站正式上线</a></li> -->
                <!-- <li><a href="#">禁止保温材料现场调配 保证...</a></li>
                <li><a href="#">节能65%烧结页岩空心砖面世</a></li> -->
            </ul>
        </div>
        <div class="blank10"></div>
        <div class="rightBox">
        	<h3>友情链接<b class="cGrey fn">Links</b></h3>
            <ul class="list_r">
            <?php if(is_array($link_ionf)): foreach($link_ionf as $key=>$val): ?><li><a href="<?php echo U('home/index/detail',array('art_id'=>$val['id']));?>"><?php echo ($val["flink_name"]); ?></a></li><?php endforeach; endif; ?>
            	<!--<li><a href="#">卓越网上购物</a></li>
                 <li><a href="#">京东网上商城</a></li>
                <li><a href="#">携程旅行网</a></li> -->
            </ul>
        </div>
    </div>
    <div class="hackbox"></div>
    
    
</div>
            

<div class="footer">
<?php if(is_array($us_datail)): foreach($us_datail as $key=>$val): echo ($val["config_name"]); ?> : <?php echo ($val["config_value"]); endforeach; endif; ?>
   <!--  <p>Copyright @ 2009 金陵贸易有限公司 版权所有</p>
    <p><a href="#">粤ICP备08108790号</a></p>-->
    <div class="qqImg"><img src="/Public/home/images/qq.jpg" alt="" /> 
   </div>
</div>
<script type="text/javascript" src="/Public/home/js/js.js"></script>
<script type="text/javascript">
    jQuery(".slideBox").slide( { mainCell:".bd ul",autoPlay:true} );
</script>
</body>
</html>