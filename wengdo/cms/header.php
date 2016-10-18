<?php
    session_start();
    if(!isset($_SESSION['is_login'])){
     // print_r($_SESSION['is_login']);die;
        show_msg('非法进入','login.php');die;
      }

?>

<meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Core CSS  -->
  <!-- Core CSS  -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/glyphicons.min.css">
	<!-- 0601  -->
	<link rel="stylesheet" href="pagination/page.css" />
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <link rel="stylesheet" type="text/css" href="css/pages.css">
  <link rel="stylesheet" type="text/css" href="css/plugins.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">

  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script type="text/javascript" charset="utf-8" src="include/utf8-php/ueditor.config.js"></script>
   <script type="text/javascript" src="include/utf8-php/ueditor.all.min.js"></script>
   <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="include/utf8-php/lang/zh-cn/zh-cn.js"></script>
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span></a>
    <a href="session.php" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out" id="text"></span> 退出</a>
  </div>
</header>
