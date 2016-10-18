<?php
		include ('config/common.conf.php');	
			$sql = "SELECT * FROM `mh_newstext`";
				$news_data = get_all($sql);
				// print_r($news_data);die;

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/news.css">
		<link href="css/lanrenzhijia.css" rel="stylesheet" />
	<title></title>
</head>
<body>
	<div class="big_box">
	<!--头部-->
			<div class="header_box" >
				<?php include('header.php');?>
				<!--头部结束-->
					<!--中部内容-->
				<div class="header_top">
						<img src="images/11_02.png" alt="" />
				</div>	
			<div class="small_box">
				<div class="lu_xian" align="center" style=	"position:relative">
					<img src="images/13_b1ex.jpg" alt="" />
					<p>新闻资讯​</p>
				</div>
				<div class="mohegl">
						<ul>
							<li class="mohegla"><a href="">漠河旅游攻略</a></li>
							<li class="mohegla"><a href="">漠河旅游咨询</a></li>
						</ul>
				</div>
				<div class="clear_float"></div>
				<div class="mohe_zixin">
						<p>漠河边防官兵冒雪巡逻:帽顶积雪耳朵通红</p>
					<ul class="mhe_zx">
						<li>来源:</li>
						<li>作者: 指北针 </li>
						<li> 发布时间: 2016-04-23 </li>
						<li> 87 次浏览</li>
					</ul>
				</div>
					<p style="width:1000px;height:7px;background:white;margin-left:190px;float:left;margin-top:65px;"></p>
					
						
						<?php foreach ($news_data as $val) {?>
							
						<ul class="lyou_jind">
							<li><img src="images/<?php echo $val['new_img'];?>" alt="" /></li>
							<li><?php echo $val['new_title'];?></li>
						
						</ul>
						<?php }?>
						<!-- <ul class="lyou_jindian">
							<li><img src="images/Img445542732.jpg" alt="" /></li>
							<li>官兵冒雪对辖区重点部位、旅游景点等进行巡护。</li>
						</ul>
						<ul class="lyou_jindian">
							<li><img src="images/Img445542733.jpg" alt="" /></li>
							<li>官兵冒雪对辖区重点部位、旅游景点等进行巡护。</li>
						</ul> -->
					<p style="float:left;width:1063px;margin-top:20px;margin-left:140px;color:gray;
								display: block;
								font-family: Microsoft YaHei;
								font-size: 15px;
								">黑龙江4月22日消息 4月21日，驻守在祖国最北端漠河县北极村的公安边防官兵们冒雪对辖区重点部位、旅游景点等进行巡护，防止辖区群众和外来游客发生安全事故。 </p>
					<p style="float:left;margin-top:20px;margin-left:50px;color:gray;display: block;
								font-family: Microsoft YaHei;
								font-size: 15px;"><a style="color:gray;" href="">上一篇：
								日本国产隐形战机“心......</a></p>	
					<p style="float:right;margin-top:20px;margin-right:50px;display: block;
								font-family: Microsoft YaHei;
								font-size: 15px;"><a style="color:gray;" href="">下一篇：
								林允儿祝孙骁骁生快 ......</a></p>
			</div>		
			<!--中部内容结束-->
			<?php include('footer.php');?>
	</div>
</body>
</html>