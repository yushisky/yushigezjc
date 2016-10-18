<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>项目导航栏</title>
<link rel="stylesheet" href="css/H-ui.css">
<link rel="stylesheet" href="css/H-ui.reset.css">
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
<style>
	.wrapper{background:#666666;}
	.wrapper a{color:#666666;font-size:18px;font-weight:700;margin-right:30px;}
</style>
</head>
<body>
<div class="container-fluid f-l">
	<!-- 代码部分begin -->
<div class="wrapper container"> 
	<div class="head mt-30">
	<div class="topNav f-l">
		<div class="topNavList">
			<a href="mo_he/">漠河</a>
			<a href="wengdo/">文豆网络</a>
			<a href="Smartys/index.php">Smartys文豆</a>
			<a href="jinling/">TP金陵</a>
			<a href="nbesqcn/">纳邦e社区</a>
			<a href="http://www.xwyfxx.com/temp/index.php">团队项目 Templates</a>
			<a href="##">关于我们</a>
			<!--<a href="#">联系我们</a>-->
			<div class="topNavSub">
				<div class="activeLeft"></div>
				<div class="activeRight"></div>
			</div>
		</div>
	</div>
	<div id="time" class="f-r"></div> 
</div>
</div>
</div>

</body>

</html>
