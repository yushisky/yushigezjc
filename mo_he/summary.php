<?php
		include ('config/common.conf.php');	
			$sql = "SELECT * FROM `mh_index_nav` where class=1";
		$nav_datail = get_all($sql);
		// p($nav_data);die;
	$sql = "SELECT * FROM `mh_index_nav` where class=2";
		$nav_data2 = get_all($sql);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/summary.css">
		<link href="css/lanrenzhijia.css" rel="stylesheet" />
		
	<title></title>
</head>
<body>
	<div class="big_box">
			<div class="header_box" >
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
			<?php include('footer.php');?>
	</div>
</body>
</html>