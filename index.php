﻿<!doctype html>
<html lang="en">
<head>
<meta charset="gb2312">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="A simple jQuery page preview plugin.">
<meta name="keywords" content="HTML, CSS, JS, JavaScript, jQuery plugin, page preview, front-end, frontend, web development">
<meta name="author" content="Fengyuan Chen">
<title>index</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/previewer.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<script language="javascript">
		window.setInterval('showTime()',1000)
		function showTime(){
			var enabled = 0; 
			today = new Date();
			var date; 
			date =(today.getFullYear()) + "年" + (today.getMonth() + 1 )
			+ "月" + today.getDate() + "日" + '&nbsp&nbsp&nbsp&nbsp&nbsp'+
			today.getHours()+":"+today.getMinutes()+":"+today.getSeconds();
			document.getElementById("time").innerHTML=date;
		}
</script>
</head>
<body>
<!-- header -->
<header class="navbar navbar-static-top docs-header" id="top">
<div class="container">
  <div class="navbar-header">
	<button class="navbar-toggle" data-target="#navbar-collapse-1" data-toggle="collapse" type="button">
	  <span class="sr-only">Toggle navigation</span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="javascript:void(0);">Previewer</a>
  </div>
  <nav class="collapse navbar-collapse" id="navbar-collapse-1" role="navigation">
	<ul class="nav navbar-nav navbar-right">
	  <li><a href="mo_he" target="_top">漠河</a></li>
	  <li><a href="wengdo" target="_top">文豆网络</a></li>
	  <li><a href="Smartys/index.php" target="_top">Smartys文豆</a></li>
	  <li><a href="jinling" target="_top">TP金陵</a></li>
	  <li><a href="nbesqcn" target="_top">纳邦e社区</a></li>
	  <li><a href="http://www.xwyfxx.com/temp/index.php" target="_top">团队项目 Templates</a></li>
	  <li><a href="mass.html" target="_top">关于我们</a></li>
	</ul>
  </nav>
</div>
</header>
<!-- Jumbotron -->
<div class="jumbotron docs-jumbotron">
<div class="container">
  <h1><div id="time" class="f-r"></div><small class="version">666666</small></h1>
  <p class="lead"></p>
</div>
</div>

<!-- Content -->
<div class="container mb-50">
<h2 class="page-header">index</h2>
<div class="row">
  <div class="col-sm-6 col-md-4 col-lg-3">
	<div class="thumbnail">
	  <img src="img/starry.jpg" alt="Starry">
	  <div class="caption">
		<h3>index</h3>
		<p>Preview on extra small screen width as phone.</p>
		<p><a href="?previewer" class="btn btn-primary" target="_top" role="button"><a href="MAP.html">Launch</a></a></p>
	  </div>
	</div>
  </div>
  <div class="col-sm-6 col-md-4 col-lg-3">
	<div class="thumbnail">
	  <img src="img/starry-2.jpg" alt="Starry 2">
	  <div class="caption">
		<h3>index</h3>
		<p>Preview on small screen width as tablet.</p>
		<p><a href="?previewer=tablet" class="btn btn-primary" target="_top" role="button"><a href="MAP.html">Launch</a></a></p>
	  </div>
	</div>
  </div>
  <div class="col-sm-6 col-md-4 col-lg-3">
	<div class="thumbnail">
	  <img src="img/starry-3.jpg" alt="Starry 3">
	  <div class="caption">
		<h3>index</h3>
		<p>Preview on middle screen width as laptop.</p>
		<p><a href="?previewer=laptop" class="btn btn-primary" target="_top" role="button"><a href="MAP.html">Launch</a></a></p>
	  </div>
	</div>
  </div>
  <div class="col-sm-6 col-md-4 col-lg-3">
	<div class="thumbnail">
	  <img src="img/starry-4.jpg" alt="Starry 4">
	  <div class="caption">
		<h3>index</h3>
		<p>Preview on large screen width as desktop.</p>
		<p><a href="?previewer=desktop" class="btn btn-primary" target="_top" role="button"><a href="MAP.html">Launch</a></a></p>
	  </div>
	</div>
  </div>
</div>
</div>
<!-- Scripts -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/previewer.js"></script>
</body>
</html>
