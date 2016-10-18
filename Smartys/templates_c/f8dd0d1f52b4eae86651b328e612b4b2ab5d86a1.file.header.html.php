<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-18 18:12:14
         compiled from "..\view\admin\header.html" */ ?>
<?php /*%%SmartyHeaderCode:9668578afab751eb85-69368679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8dd0d1f52b4eae86651b328e612b4b2ab5d86a1' => 
    array (
      0 => '..\\view\\admin\\header.html',
      1 => 1468836728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9668578afab751eb85-69368679',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578afab7523744_16687102',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578afab7523744_16687102')) {function content_578afab7523744_16687102($_smarty_tpl) {?>  <!-- Core CSS  -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/glyphicons.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <link rel="stylesheet" type="text/css" href="css/pages.css">
  <link rel="stylesheet" type="text/css" href="css/plugins.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
 <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  
  <!-- Core Javascript - via CDN --> 
  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
> 
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
  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
> 
  <?php echo '<script'; ?>
 src="http://cdn.gbtags.com/twitter-bootstrap/3.2.0/js/bootstrap.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://cdn.gbtags.com/summernote/0.5.2/summernote.min.js"><?php echo '</script'; ?>
>
  <link href="css/summernote.css" rel="stylesheet">
  <?php echo '<script'; ?>
 src="js/summernote.min.js"><?php echo '</script'; ?>
>
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
  <?php echo '<script'; ?>
 src="js/date-time/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/common.unpre.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#summernote').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });
  <?php echo '</script'; ?>
>
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
    <a href="session.php" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
  </div>
</header>
<div id="main"> 
    <!-- Start: Sidebar -->
  <aside id="sidebar" class="affix">
    <div id="sidebar-search">
        
    </div>
    <div id="sidebar-menu">
      <ul class="nav sidebar-nav">
        <li>
          <a href="index.php"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>
         <li>
          <a href="case_list.php"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">案列文章</span></a>
        </li>
        <li>
          <a href="news_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">资讯管理</span></a>
        </li>
        <li>
          <a href="case_list.php"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">案例管理</span></a>
        </li>
        <li>
          <a href="category_list.php"><span class="glyphicons glyphicon-credit-card"></span><span class="sidebar-title">分类</span></a>
        </li>
        <li>
          <a href="website.php"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">网站信息</span></a>
        </li>
      </ul>
    </div>
  </aside>
  <?php }} ?>
