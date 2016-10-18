<?php
  //====添加数据字段=================
    require('../config/common.conf.php');
    if($_POST){
      //print_r($_POST);//die;
        $id = $_POST['id'];
        $title = $_POST['title'];        
        $date = strtotime($_POST['date']);      
        $is_show = $_POST['fan_show'];
        $img =$_POST['img'];
        $nav = $_POST['nav'];
        $addtime = time();//获取当前的时间戳   
         $order = 1;
         $img= "aa"; 
                 
        $sql="insert into wd_index_fan(fan_id,fan_title,fan_nav,fan_img,fan_show,fan_date)
  values('{$id}','{$title}','{$nav}','{$img}','{$is_show}','{$date}')";

       // print_r($sql);die;
        $res = mysql_query($sql);
    //print_r($res);die;
        if(mysql_insert_id()>0&&!empty($res)){
        echo"<script>alert('添加咨询成功');location.href='category_add.php';</script>";
        }else{
          echo"<script>alert('添加咨询失败');location.href='category_add.php';</script>";die;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>添加分类</title>
  <meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Core CSS  -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/glyphicons.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <link rel="stylesheet" type="text/css" href="css/plugins.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">

  <!-- Boxed-Layout CSS -->
  <link rel="stylesheet" type="text/css" href="css/boxed.css">

  
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="js/jquery.min.js"></script> 

</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
    <a href="login.php" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
  </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main"> 
    <!-- Start: Sidebar -->
  <aside id="sidebar" class="affix">
    <div id="sidebar-search">
        
    </div>
    <div id="sidebar-menu">
      <?php include('nav.php');?>
    </div>
  </aside>
  <!-- End: Sidebar -->    
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">添加分类</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">添加分类</div>
              <div class="panel-btns pull-right margin-left">
              <a href="category_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
            <div class="panel-body">
            	  <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">分类编号</span>
                    <input type="text" name="id" value="" class="form-control">
                  </div>
                </div>
                </div>
                 <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">分类标题</span>
                    <input type="text" name="title" value="" class="form-control">
                  </div>
                </div>
                </div>
                 <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">分类内容</span>
                    <input type="text" name="nav" value="" class="form-control">
                  </div>
                </div>
                </div>
                <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">图库</span>
                    <input type="text" name="img" value="" class="form-control">
                  </div>
                </div>
                </div>
                <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">是否显示</span>
                    <input type="text" name="fan_show" value="" class="form-control">
                  </div>
                </div>
                  </div>
                <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">更新时间</span>
                    <input type="date" name="date" value="" class="form-control">
                  </div>
                </div>
                </div>
                <div class="col-md-7">
	                <div class="form-group">
	                  <input type="submit" value="提交" class="submit btn btn-blue">
	                </div>
                </div>
            </div>
          </div>
          </form>
        </div>
    </div>
  </section>
  <!-- End: Content --> 
</div>

</body>

</html>