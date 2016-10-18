<?php
include('config/common.conf.php');
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻详细界面</title>
    <link rel="stylesheet" type="text/css" href="./css/public.css"/>
    <link rel="stylesheet" type="text/css" href="./css/service_detail.css"/>
</head>
<body>
<!--案例展示列表页 Start-->
    <div id="container">
    <!--header Start-->
      <?php include('header.php');?>
    <!--header End-->
    <!--轮播图 Start-->
        <div class="banner">
            <img src="./images/contact_03.png" alt="轮播图"/>
        </div>
    <!--轮播图 End-->
    <!--页面主体 Start-->
        <div class="main">
           <div class="current">
               <p>
                   <a href="./index.php">首页</a> &gt;
                   <a href="./service.php">资讯中心</a> &gt; 
                   <a href="./service_detail.php">移动端应用开发解决方案</a>
               </p>
           </div>
           <div class="service_detail">
                <h2>移动端应用开发解决方案</h2>
                <div class="box_15"></div>
                
                <div class="box_40"></div>
                <p>文豆集团为各个行业打造的综合信息门户方案，针对不同行业，强化内部的信息划分，体现行业的特色，树立行业 信息权威形象。同时，文豆网络也提供政府信息门户方案，整合各种信息和资源</p>
                <div class="box_40"></div>
           </div>
        </div>
        <div class="box_300"></div>
    <!--页面主体 End-->
    <!--footet Start-->
        <?php include('footer.php');?>
    <!--footet End-->
    </div>
<!--文豆首页 End-->
</body>
</html>
<script src="./js/select_nav.js"></script>