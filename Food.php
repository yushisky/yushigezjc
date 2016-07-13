<?php
		include ('config/common.conf.php');	
		$sql = "SELECT * FROM `mh_food` where class=1";			
		$food_data = get_all($sql);
		$sql = "SELECT * FROM `mh_food` where class=2";			
		$food_data2 = get_all($sql);
		$sql = "SELECT * FROM `mh_food` where class=3";			
		$food_data3 = get_all($sql);
		$sql = "SELECT * FROM `mh_food` where class=4";			
		$food_data4 = get_all($sql);
		$sql = "SELECT * FROM `mh_food` where class=5";			
		$food_data5 = get_all($sql);
		$sql = "SELECT * FROM `mh_food` where class=6";			
		$food_datail = get_all($sql);
		// p($food_data);die;
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/Food.css">
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
						<img src="images/11_02.png" alt=""/>
					</div>
					<div class="small_box">
					<div class="lu_xian" align="center" style="position:relative">
						<img src="images/13_b1ex.jpg" alt="" />
						<p>漠河美食</p>
					</div>
					<div class="cai_dang">
						<ul class="caidang_box">
						<?php foreach ($food_data as $key => $val){?>
							<li ><p><img src="images/<?php echo $val['img_url']; ?>" alt="" /><br />&nbsp<?php echo $val['food_title']; ?></p></li>
							<?php } ?>
						</ul>
						<ul class="caidang_box1">
							<?php foreach ($food_data2 as $key => $val){?>
							<li ><p><img src="images/<?php echo $val['img_url']; ?>" alt="" /><br />&nbsp<?php echo $val['food_title']; ?></p></li>
							<?php } ?>
						</ul>
						<ul class="caidang_box2">
							<?php foreach ($food_data3 as $key => $val){?>
							<li ><p><img src="images/<?php echo $val['img_url']; ?>" alt="" /><br />&nbsp<?php echo $val['food_title']; ?></p></li>
							<?php } ?>
						</ul>
						<ul class="caidang_box3">
							<?php foreach ($food_data4 as $key => $val){?>
							<li ><p><img src="images/<?php echo $val['img_url']; ?>" alt="" /><br />&nbsp<?php echo $val['food_title']; ?></p></li>
							<?php } ?>
						</ul>
						<ul class="caidang_box4">
							<?php foreach ($food_data5 as $key => $val){?>
							<li ><p><img src="images/<?php echo $val['img_url'];?>" alt="" /><br />&nbsp<?php echo $val['food_title']; ?></p></li>
							<?php } ?>
						</ul>
					</div>				
					<div class="mohe_tec" align="center" style="position:relative">
						<img src="images/13_b1ex.jpg" alt=""/>
						<p>漠河土特产</p>
					</div>
					<div class="clear_float"></div>
					<div class="mohe_tectext">
							<ul class="mohe_tectexta">
							<?php foreach ($food_datail as $key => $val){?>
								<li ><p><img src="images/<?php echo $val['img_url']; ?>" alt="" /><br />&nbsp<?php echo $val['food_title'];?></p></li>
							<?php } ?>
							</ul>
					<div class="clear_float"></div>
				</div>	
			<!--中部内容结束-->
			<?php include('footer.php');?>
	</div>
	</div>
</body>
</html>