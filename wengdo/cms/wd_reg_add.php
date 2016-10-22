<?php 
      include('../config/common.conf.php');
        if($_POST){
          // p($_POST);die;
          $username =$_POST['username'];
          $pass = $_POST['password'];
          $repass =$_POST['repassword'];
          if($pass!=$repass){
              show_msg('密码不一致');die;
          }
          $data =array(
            'reg_name'=>$username,
            'password'=> md5(md5($pass)),
            );
          $table = 'wd_reg';
          $res = add($table,$data);
          if($res){
            show_msg('注册成功','wd_reg.php');die;
          }else{
            show_msg('注册失败');die;
          }
        }
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>CMS内容管理系统</title>
  <meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Core CSS  -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/glyphicons.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <link rel="stylesheet" type="text/css" href="css/pages.css">
  <link rel="stylesheet" type="text/css" href="css/plugins.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">

  <!-- form CSS -->
  <!-- <link rel="stylesheet" type="text/css" href="css/form.css"> -->
  <link rel="stylesheet" type="text/css" href="css/form.min.css">

  <!-- Boxed-Layout CSS -->
  <link rel="stylesheet" type="text/css" href="css/boxed.css">

  <!-- Demonstration CSS -->
  <link rel="stylesheet" type="text/css" href="css/demo.css">

  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script src="http://cdn.gbtags.com/twitter-bootstrap/3.2.0/js/bootstrap.js"></script>
  <script src="http://cdn.gbtags.com/summernote/0.5.2/summernote.min.js"></script>
  <link href="css/summernote.css" rel="stylesheet">
  <script src="js/summernote.min.js"></script>
  <style type="text/css">
    @import url('http://cdn.gbtags.com/twitter-bootstrap/3.2.0/css/bootstrap.css');
    @import url('http://cdn.gbtags.com/font-awesome/4.1.0/css/font-awesome.min.css');
    @import url('http://cdn.gbtags.com/summernote/0.5.2/summernote.css');
  </style>
  <style>
    .input-group {
      margin-top: 15px;
    }
    .check {
      padding: 5px 10px 5px 10px;
      background: #eee;
      border:solid 1px #ccc;
      margin-right: 10px;
    }
  </style>
  
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
      <?php include 'nav.php';?>
    </div>
  </aside>
  <!-- End: Sidebar -->    
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">注册</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">注册</div>
              <div class="panel-btns pull-right margin-left">
              <a href="wd_reg.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
            <div class="panel-body">
            	  <div class="col-md-7">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">账号</span>
                        <input type="text" name="username" value="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">新密码</span>
                        <input type="password" name="password" value="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">新密码</span>
                        <input type="password" name="repassword" value="" class="form-control">
                    </div>
                </div>
                <input type="hidden" value="admin_add" name="action-mark" />
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
<script src="js/date-time/bootstrap-datepicker.min.js"></script>
<script src="js/common.unpre.js"></script>

 <!--<div class="input-group">
                  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-addon" id="basic-addon2">@example.com</span>
                </div>
                 
  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                <div class="form-group"></div>
                </div>
                <div style="clear:both;"></div>
                <div class="form-group"></div>
                  <div id="summernote">Hello Summernote</div>
                </div>
<script>
    $('#summernote').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });
  </script> -->