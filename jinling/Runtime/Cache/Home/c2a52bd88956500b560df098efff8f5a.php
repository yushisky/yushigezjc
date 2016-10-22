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