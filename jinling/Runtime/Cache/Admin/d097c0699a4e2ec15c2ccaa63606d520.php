<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/glyphicons.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/theme.css">
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/pages.css">
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/responsive.css">


  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="/Public/admin/js/jquery.min.js"></script> 
</head>
 <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script src="http://cdn.gbtags.com/twitter-bootstrap/3.2.0/js/bootstrap.js"></script>
  <script src="http://cdn.gbtags.com/summernote/0.5.2/summernote.min.js"></script>
  <link href="/Public/admin/css/summernote.css" rel="stylesheet">
  <script src="/Public/admin/js/summernote.min.js"></script>
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
<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="/Public/admin/images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span> <?php echo session('username');?></a>
    <a href="<?php echo U('admin/index/session');?>" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
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
      <ul class="nav sidebar-nav">
        <li>
          <a href="index.html"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>
         <li>
          <a href="<?php echo U('admin/index/artcat');?>"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">文章分类</span></a>
        </li>
        <li>
          <a href="<?php echo U('admin/index/article_list');?>"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">行业知识</span></a>
        </li>
        <li>
          <a href="news_list.html"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">资讯管理</span></a>
        </li>
        <li>
        
          <a href="case_list.html"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">案例管理</span></a>
        </li>
        <li>
          <a href="category_list.html"><span class="glyphicons glyphicon-credit-card"></span><span class="sidebar-title">分类</span></a>
        </li>
        <li>
          <a href="website.html"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">网站信息</span></a>
        </li>
      </ul>
    </div>
  </aside>
<script src="/Public/admin/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="/Public/admin/js/common.unpre.js"></script>
<script>
    $('#summernote').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });
  </script>


 <!-- End: Sidebar -->    
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">添加案例</li>
      </ol>
    </div>
    <div class="container">
   <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="" method="post" class="cmxform">
          <div class="panel">
            <div class="panel-heading">
              <div class="panel-title">添加案例</div>
              <div class="panel-btns pull-right margin-left">
              <a href="<?php echo U('artcat');?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">文章分类名称</span>
                    <select name="name" class="form-control">
                          <option value="公司简介">公司简介</option>
                          <option value="联系我们">联系我们</option>
                          <option value="行业新闻">行业新闻</option>
                          <option value="最新公告">最新公告</option>
                          <option value="公司资讯">公司资讯</option>
                    </select>
                  </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">文章分类英文名称</span>
                    <input type="text" name="enname" value="" class="form-control" >
                </div>
               <div class="input-group"> 
                  <span class="input-group-addon">更新时间</span>
                    <input class="form-control date-picker" id="class_code_cc_time_input" type="text" data-date-format="yyyymmdd" name="time" value="">
                </div>
                <div class="form-group"></div>
                </div>
                <div style="clear:both;"></div>
                <div class="form-group"></div>
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
<script src="/Public/admin/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="/Public/admin/js/common.unpre.js"></script>
<script>
    $('#summernote').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });
  </script>