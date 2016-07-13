<?php
		include ('config/common.conf.php');	
		$sql = "SELECT * FROM `mh_news` where class=3";
			$news_data=get_all($sql);
			// p($news_data);die;
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/strategy.css">
			<link href="css/lanrenzhijia.css" rel="stylesheet" />
	<title>漠河攻略</title>
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
					<p>漠河攻略</p>
				</div>
				<div class="mohegl">
						<ul>
							<li class="mohegla"><span><a href="">漠河旅游攻略</a></span></li>
							<li class="moheglb"><span><a href="">漠河旅游咨询</a></span></li>
						</ul>
				</div>
				<div class="clear_float"></div>
				<div class="mohe_zixin">
					<ul class="mhe_zx">
					<?php foreach ($news_data as $val) {?>
						<li ><span><a href="<?php echo $val['new_url'];?>"> <?php echo $val['new_title'];?></span></li>
					<?php }?>
					
						
						<!-- <li><span><a href="news.php">[漠河旅游资讯] 黑龙江漠河:最北检察专网建设顺利通过测评</a> </span></li>
						<li ><span><a href="news.php">[漠河旅游资讯] 中国最北滑雪场漠河北极村封板 滑雪周期近半年</a> </span></li>
						<li><span><a href="news.php">[漠河旅游资讯] 中国最北滑雪场今日封板 漠河迎夏季旅游黄金期</a> </span></li>
						<li ><span><a href="news.php">[漠河旅游资讯] 大兴安岭漠河迎雨雪回归冬季</a> </span></li>
						<li><span><a href="news.php">[漠河旅游资讯] “任性”漠河，四月飞雪</a> </span></li>
						<li ><span><a href="news.php">[漠河旅游资讯] 黑龙江漠河：鹅毛大雪飘洒四月天</a> </span></li>
						<li><span><a href="news.php">[漠河旅游资讯] 防“倒开江黑龙江漠河段进行江面冰层爆破</a> </span></li>
						<li><span><a href="news.php">[漠河旅游资讯] 黑龙江漠河段破冰结束 爆破激起百米“冰瀑”</a> </span></li>
						<li><span><a href="news.php">[漠河旅游资讯] 黑龙江漠河四月飘雪寒冷依旧</a> </span></li>
						<li><span><a href="news.php">[漠河旅游资讯] 漠河4月突降创纪录暴雪 边防官兵巡逻(组图)</a> </span></li>
						<li><span><a href="news.php">[漠河旅游资讯] 父亲为救战友牺牲 儿子接力驻守漠河十余年</a> </span></li>
						<li class="mhe_zxg"><span><a href="news.php">[漠河旅游资讯] 大别山彩虹瀑布汽车露营嘉年华再度强势来袭</a> </span></li>
						<li><span><a href="news.php">[漠河旅游资讯] 第二届中国鹤壁樱花文化节夜赏樱花璀璨巨献</a> </span></li>
						<li><span><a href="news.php">[漠河旅游资讯]国家旅游局通报清明节及近期查处的5起典型案件</a> </span></li> -->
					</ul>
					<ul class="tiao_z">
						<li class="tiao_a"><a href="">1</a></li>
						<li class="tiao_b"><a href="">2</a></li>
						<li class="tiao_c"><a href="">3</a></li>
						<li class="tiao_s"><a href="">4</a></li>
						<li class="tiao_e"><a href="">5</a></li>
						<li class="tiao_i"><a href="">下一页></a></li>						
						<li  class="tiao_k"><a href="">末页</a></li>			
					</ul>
				</div>		
			</div>		
			<!--中部内容结束-->
			<?php include('footer.php');?>
	</div>
</body>
</html>