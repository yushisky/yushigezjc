<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>项目导航栏</title>
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
<div class="big_box">
	<!-- 代码部分begin -->
<div class="wrapper"> 
	<div class="head">
	<div class="topNav">
		<div class="topNavList">
			<a href="mo_he/index.php">漠河</a>
			<a href="wengdo/index.php">文豆网络</a>
			<a href="Smartys/index.php">Smartys文豆</a>
			<a href="jinling/index.php/">TP金陵</a>
			<a href="nbesqcn/index.php">纳邦e社区</a>
			<a href="http://www.xwyfxx.com/temp/index.php">团队项目 Templates</a>
			<a href="##">关于我们</a>
			<!--<a href="#">联系我们</a>-->
			<div class="topNavSub">
				<div class="activeLeft"></div>
				<div class="activeRight"></div>
			</div>
		</div>
	</div>
	<div id="time"></div> 
</div>
</div>
</div>

</body>

</html>
