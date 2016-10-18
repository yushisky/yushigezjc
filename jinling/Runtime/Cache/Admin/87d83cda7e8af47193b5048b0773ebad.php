<?php if (!defined('THINK_PATH')) exit(); header("Content-type:text/html;charset=utf-8"); ?>
<meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Core CSS  -->
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/glyphicons.min.css">
  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/theme.css">
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/responsive.css">
  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/custom.css">
  
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="/Public/admin/js/jquery.min.js"></script> 
</head>
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="/Public/admin/images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span>admin</a>
    <a href="<?php echo U('admin/index/session');?>" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
  </div>
</header>
<body>