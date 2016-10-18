<?php
    //==========引用函数库============
    include('pagination.php');
    include('session.php');
    include('config/common.conf.php');
    //查询列表
    $sql = "select * from wd_news where new_class='服务介绍'";
    // print_r($sql);die;
    $wd_service = get_all($sql);
    // print_r($wd_service);die;
    //================页码插件========================================
      $sql_count = "select count(*) as c from wd_news where new_class='服务介绍'";
      $count = get_one($sql_count);
      $total = $count['c'];
      // print_r($total);die;
        //我们需要规定我们每页需要多少条数据
      $limit = 5;
      //当前页码，第一页还是第二页
      //判断我们当前的页面
      if(!empty($_GET['page'])){
        $current = $_GET['page']+0;
      }else{
        $current = 1;
      }
      //我们要显示的页码数
      $size = 10;//如果总共有10页，只显示5页
        $conf=array('start','end');
          
        // 确定要从第几条记录开始获取
      $start = ($current-1)*$limit;
      $sql = "select * from wd_news where new_class='服务介绍' limit {$start},{$limit}";
      //$sql = "select * from student limit 0,{$limit}";
      $wd_service = get_all($sql);
      // p($wd_service);die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻列表界面</title>
    <link rel="stylesheet" type="text/css" href="./css/public.css"/>
    <link rel="stylesheet" type="text/css" href="./css/service.css"/>
    <link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<!-- 0601  -->
	<link rel="stylesheet" href="pagination/page.css" />
</head>
<body>
<!--案例展示列表页 Start-->
    <div id="container">
    <!--header Start-->
       <?php include('header.php');?>
        <div class="header_box"></div>
        <div class="clear"></div>
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
                   <a href="./service.php">服务介绍</a>
               </p>
           </div>
           <div class="service_list">
		     <?php foreach($wd_service as $val){?>
              <div class="service_introduce">
                  <h2><?php echo $val['new_title']?><span><a href="service_detail.php"><?php echo $val['new_mintitle']?>&gt;</a></span></h2>
                  <p><?php echo $val['new_label']?></p>
              </div>
         <?php };?>
              <div class="area_box"></div>
             
              <div class="area_box"></div>
           </div>
           <div class="area_box"></div>
           <div class="pager">
		   <?php
						//$conf=array();
				echo pagination($total,$current,$limit,$size,$conf,'digg');
				?> 
            </div>
            <div class="box_150"></div>
        </div>

    <!--页面主体 End-->
    <!--footet Start-->
      <?php include('footer.php');?>
    <!--footet End-->
    </div>
<!--文豆首页 End-->
</body>
</html>
<script src="./js/select_nav.js"></script>