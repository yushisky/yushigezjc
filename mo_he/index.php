<?php
		include ('config/common.conf.php');	
	$sql = "SELECT * FROM `mh_index_nav` where class=1";
		$nav_datail = get_all($sql);
		// p($nav_data);die;
	$sql = "SELECT * FROM `mh_index_nav` where class=2";
		$nav_data2 = get_all($sql);
	$sql = "SELECT * FROM `mh_news` where class=1";
		$news_data = get_all($sql);
	$sql = "SELECT * FROM `mh_spot` where class=1";
		$spot_data=get_all($sql);
		$sql = "SELECT * FROM `mh_spot` where class=3";
		$spot_datail=get_all($sql);
		$sql = "SELECT * FROM `mh_spot` where class=4";
		$spot_data4=get_all($sql);
		$sql = "SELECT * FROM `mh_spot` where class=5";
		$spot_data5=get_all($sql);
		$sql = "SELECT * FROM `mh_spot` where class=6";
		$spot_data6=get_all($sql);
		$sql = "SELECT * FROM `mh_spot` where class=7";
		$spot_data7=get_all($sql);
		$sql = "SELECT * FROM `mh_time_table` where class=1";
		$table_data=get_all($sql);
		// p($table_data);die;
		$sql = "SELECT * FROM `mh_time_table` where class=2";
		$table_datail=get_all($sql);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link href="css/lanrenzhijia.css" rel="stylesheet" />
		<link href="css/lanrenzhijia.css" rel="stylesheet" />
		<link href="css/6css71.css" type="text/css" rel="stylesheet" />
	</head>
<body>
	<div class="big_box">
			<?php include('header.php');?>
			<div class="header_top">
				<img src="images/11_02.png" alt="" />
			</div>
			<div class="clear_float"></div>

			<div class="lu_xian" align="center" style="position:relative">
					<img src="images/13_b1ex.jpg" alt="" />
					<p>路线总汇</p>
			</div>
			<div class="clear_float"></div>

			<div class="lutu_jinse">
				<?php foreach ($nav_datail as $val){?>
				<ul>
				
					<li><a href="<?php echo $val['nav_url'];?>"><img src="images/<?php echo $val['nav_img'];?>" alt="路线总汇图片路径" /></a></li>
				</ul>
				<?php };?>
				<?php foreach ($nav_datail as $val){?>
				<ul class="mo_hea">
					<li><span><?php echo $val['nav_title'];?></span> </li>
					<li><a href="<?php echo $val['nav_url'];?>"><?php echo $val['nav'];?></a></li>
					<li><span><?php echo $val['nav_title2'];?></span> </li>
				</ul>
				<?php };?>


				<die class="clear_float"></die>
				<?php foreach ($nav_data2 as $val){?>
				<ul>
					<li  class="mo_hep"><a href="<?php echo $val['nav_url'];?>"><img src="images/<?php echo $val['nav_img'];?>" alt="" /></a></li>
				</ul>
				<?php };?>
				<?php foreach ($nav_data2 as $val){?>
				<ul class="xia_jis">
					<li><span><?php echo $val['nav_title'];?></span></li>
					<li><a href="<?php echo $val['nav_url'];?>"><?php echo $val['nav'];?></a></li>
					<li><span><?php echo $val['nav_title2'];?></span></li>
				</ul>
				<?php };?>
			</div>
			<div class="clear_float"></div>
			<div class="ce_zhang" align="center"style="position:relative">
				<img src="images/13_b1ex.jpg" alt="" />
				<p>车型展示</p>
			</div>
			<div class="ce_zhan">
					<?PHP include('show.php');?>
			</div>
			<div class="clear_float"></div>
			<div class="nav">
					<ul class="go_l">
						<li><span>漠河攻略</span></li>
						<li class="ping_bu"></li>
					</ul>
					<ul class="mohe_tqi">
						<li><span>漠河天气</span></li>
						<li class="tqi_img"></li>
						
					</ul>
			</div>
			<div class="nav_left">
					
					<ul class="nav_lefta">
					<?php foreach ($news_data as $val){?>
						<li><a href=""><?php echo $val['new_title'];?></a></li>
					<?php };?>	
					<ul class="tiao_z">

						<li class="tiao_a"><a href="">1</a></li>
						<li class="tiao_b"><a href="">2</a></li>
						<li class="tiao_c"><a href="">3</a></li>
						<li class="tiao_s"><a href="">4</a></li>
						<li class="tiao_e"><a href="">5</a></li>
						<li class="tiao_i"><a href="">下一页</a></li>
						<li class="tiao_p">到第<input type="text"name="" size="1">页</li>
						<li  class="tiao_k"><a href="">跳转</a></li>
						<li class="tiao_y">共467页</li>
					</ul>
					</ul>
			
					<div class="nav_right">
						<ul  class="nav_righta">
						<li><?php include('time.html');?></li>
						</ul>
						<div class="clear_float"></div>
						<ul class="mohe_box">	
							<li class="mohe_boa">漠河</li>
						</ul>
						<ul class="mohe_nav">
							<li><a href=""><img src="images/554403.png" alt="" />今天（周二）<br />-3~16‘c <br />晴</a></li>
							<li><a href=""><img src="images/554403.png" alt="" />（今天周三）<br />-3~16‘c <br />晴</a></li>
							<li><a href=""><img src="images/554403.png" alt="" />（今天周四）<br />-3~16‘c <br />晴</a></li>
							<li><a href=""><img src="images/1452_03.png" alt="" />今天（周五）<br />-3~16‘c <br />多云</a></li>
							<li><a href=""><img src="images/554403.png" alt="" />今天（周六）<br />-3~16‘c <br />晴</a></li>	
							<li><img src="" alt="" />
							</li>							
						</ul>
						<ul class="jiao_to">
							<li><span>漠河交通</span></li>
							<li class="jiaoto_img">
							</li>
						</ul>
							<div class="clear_float"></div>
						<ul class="huo_ce">
							<li>漠河火车时刻表</li>
							<?php foreach ($table_data as $key => $val){?>
							<li><?php echo $val['table_label'];?></li>
							<?php }?>
						</ul>
						<ul class="huang_ban">
							<li>漠河航班时刻表</li>
							<?php foreach ($table_datail as $key => $val){?>
							<li><?php echo $val['table_label'];?></li>
							<?php }?>
						</ul>
					</div>
			</div>
			
			<div class="mo_he" align="center"style="position:relative">
					<img src="images/13_b1ex.jpg" alt="" />
					<p>漠河风光</p>
			</div>
			
			<div class="mohe_fengjing">
					<?PHP include('scenery.php');?>
			</div>
			<div class="mohe_tese"align="center"style="position:relative">
					<img src="images/13_b1ex.jpg" alt="" />
					<p>漠河特产</p>
			</div>
			<div class="mohe_tec">
				<ul>
						<li  class=""><img src="images/okxt.jpg" alt="" /></li>
						<li  class="mohe_ted"><img  src="images/fd10.jpg" alt="" /></li>
						<li  class="mohe_ted"><img src="images/nbav_meitu_1_66v6.jpg" alt="" /></li>
						<li  class="mohe_ted"><img src="images/6oz2_meitu_1_gd7a.jpg" alt="" /></li>
						<li  class="mohe_ted"><img src="images/7whm.jpg" alt="" /></li>
						<li  class="mohe_ted"><img src="images/sif7.jpg" alt="" /></li>
				</ul>
					<ul class="mohe_tel">
						<li class="mohe_tek" >漠河野生蓝莓</li>
						<li class="mohe_teu">漠河野生红豆</li>
						<li class="mohe_tex">漠河野生托莫</li>
						<li class="mohe_tes">漠河野生羊奶子</li>
						<li class="mohe_tew">漠河野生毛尖磨</li>
						<li class="mohe_tep">漠河野生木耳</li>
					</ul>
			</div>
			
			<div class="footer"align="center"style="position:relative">
					<img src="images/13_b1ex.jpg" alt="" />
					<p>旅游景点</p>
			</div>
			<div class="footer_a">
					<ul class="font_a">
					<?php foreach ($spot_data as $val) {?>
						<li><img src="images/<?php echo $val['spot_img'];?>" alt="" /><a href=""><?php echo $val['spot_title'];?></a></li>
						<?php }?>
					</ul>

					<ul  class="font_z">
						<?php foreach ($spot_datail as $val) {?>
						<li><img src="images/<?php echo $val['spot_img'];?>" alt="" /><a href=""><?php echo $val['spot_title'];?></a></li>
						<?php }?>
					</ul>
					<ul  class="font_e">
						<?php foreach ($spot_data4 as $val) {?>
						<li><img src="images/<?php echo $val['spot_img'];?>" alt="" /><a href=""><?php echo $val['spot_title'];?></a></li>
						<?php }?>
					</ul>
					<ul  class="font_s">
						<?php foreach ($spot_data5 as $val) {?>
						<li><img src="images/<?php echo $val['spot_img'];?>" alt="" /><a href=""><?php echo $val['spot_title'];?></a></li>
						<?php }?>
					</ul>
					<ul  class="font_v">
						<?php foreach ($spot_data6 as $val) {?>
						<li><img src="images/<?php echo $val['spot_img'];?>" alt="" /><a href=""><?php echo $val['spot_title'];?></a></li>
						<?php }?>
					</ul>

					<ul class="font_l">
						<?php foreach ($spot_data7 as $val) {?>
						<li><img src="images/<?php echo $val['spot_img'];?>" alt="" /><a href=""><?php echo $val['spot_title'];?></a></li>
						<?php }?>
					</ul>
					<ul class="t_zhuang">
						<li class="at_zhuang"><a href="">1</a></li>
						<li class="st_zhuang"><a href="">2</a></li>
						<li class="ct_zhuang"><a href="">下一页</a></li>
						<li class="gt_zhuang">到第<input type="text"name="" size="1">页</li>
						<li  class="jt_zhuang"><a href="">跳转</a></li>
						<li class="qt_zhuang">共2页</li>
					</ul>
			</div>
				<?php include('footer.php');?>
	</div>
</body>
</html>