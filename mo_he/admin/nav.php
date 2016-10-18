<?php
      
      session_start();
      if(!isset($_SESSION['is_login'])){
       // print_r($_SESSION['is_login']);die;
        echo "<script>alert('非法进入#');location.href='login.php';</script>";

        }
?>
<ul class="nav sidebar-nav">
        <li>
          <a href="index.php"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>
        <li>
          <a href="mh_banner_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">轮播图</span></a>
        </li>
        <li>
          <a href="mh_nav_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">导航栏管理</span></a>
        </li>
         <li>
          <a href="mh_index_nav_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">路线总汇管理</span></a>
        </li>
        <li>
          <a href="news_list.php"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">新闻管理</span></a>
        </li>
         <li>
          <a href="newstext_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">新闻详细界面</span></a>
        </li>
         <li>
          <a href="mh_serve_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">服务界面</span></a>
        </li>
        <li>
          <a href="mh_spot_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">旅游景点界面</span></a>
        </li>
        <li>
          <a href="mh_food_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">特色服务界面</span></a>
        </li>
         <li>
          <a href="mh_time_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">漠河交通界面</span></a>
        </li>
        <li>
          <a href="case_list.php"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">案例管理</span></a>
        </li>
        <li>
          <a href="category_list.php"><span class="glyphicons glyphicon-credit-card"></span><span class="sidebar-title">分类</span></a>
        </li>
        <li>
          <a href="admin_add.php"><span class="glyphicons glyphicon-credit-card"></span><span class="sidebar-title">账户管理</span></a>
        </li>
        <li>
          <a href="website.php"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">网站信息</span></a>
        </li>
</ul>