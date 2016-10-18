<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-24 16:19:43
         compiled from "..\view\admin\index.php" */ ?>
<?php /*%%SmartyHeaderCode:18564576ced1fb439c7-07508437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68662e16cfd23f9111d917a7a1d9ce45b8916ac8' => 
    array (
      0 => '..\\view\\admin\\index.php',
      1 => 1466750912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18564576ced1fb439c7-07508437',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576ced1fb7c382_75561502',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576ced1fb7c382_75561502')) {function content_576ced1fb7c382_75561502($_smarty_tpl) {?><?php echo '<?php'; ?>

  // include '../config/common.conf.php';
  // if(!empty($_SESSION['is_login']=$res['id'])){
  //   // session_start();
  //   show_msg('非法进入','login.php');die;
  // }
<?php echo '?>'; ?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>后台首页</title>
  <?php echo '<?php'; ?>
 include('header.php');<?php echo '?>'; ?>

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
      <ul class="nav sidebar-nav">
        <li>
          <a href="index.php"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>
        <li>
          <a href="mh_banner_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">轮播图</span></a>
        </li>
        <li>
          <a href="wd_nav1_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">导航栏管理</span></a>
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
    </div>
  </aside>
  <!-- End: Sidebar -->    
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      </ol>
    </div>
    <div class="container">
		<div class="col-md-11">
			<div id="docs-content">
				<h2 class="page-header margin-top-none">个人信息</h2>
				<table class="table">
					<tr>
					<td colspan="2">您好，Admin</td>
					</tr>
					<tr>
					<td width="100">最后登录时间:</td>
					<td>2015-01-02 13：20</td>
					</tr>
					<tr>
					<td>最后登录IP:</td>
					<td>127.0.0.1</td>
					</tr>
				</table>

				<h2 class="page-header margin-top-none">系统信息</h2>
				<table class="table">
				  <tr>
				    <td width="100">操作系统：</td>
				    <td>Linux</td>
				  </tr>
				  <tr>
				    <td>PHP 版本:</td>
				    <td>5.2.9</td>
				  </tr>
				  <tr>
				    <td>MySQL 版本:</td>
				    <td>5.1.33</td>
				  </tr>
				</table>
			</div>
		</div>
    </div> 
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --></body>
</html><?php }} ?>
