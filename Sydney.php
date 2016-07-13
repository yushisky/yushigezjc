<?php
		include ('config/common.conf.php');	
		$sql = "SELECT * FROM `mh_food` where class='车型展示1'";
		$sy_data = get_all($sql);
		$sql = "SELECT * FROM `mh_food` where class='车型展示2'";
		$sy_data1 = get_all($sql);
		$sql = "SELECT * FROM `mh_food` where class='车型展示3'";
		$sy_data2 = get_all($sql);
		$sql = "SELECT * FROM `mh_food` where class='车型展示4'";
		$sy_data3 = get_all($sql);
		// p($sy_data);die;

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/Sydney.css">
		<link href="css/lanrenzhijia.css" rel="stylesheet" />
	<title>旅游包车</title>
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
						<div class="lu_xian" align="center" style="position:relative">
							<img src="images/13_b1ex.jpg" alt="" />
							<p>服务准则</p>
						</div>	
						<div class="clear_float"></div>
						<div class="bao_ce">
							<p>对于包车师傅的整个行程中我们提出以下要求：</p>
							<ul class="bao_cea">
								<li> 1、交通工具第一要素驾驶证、行驶证</li>
								<li>2、包车车辆的维护状态，线路多为野外，对车辆的健康状态的维护</li>
								<li>3、司机师傅文明用语，文明驾车，及对整个旅游线路的熟悉程度，景点的介绍等等</li>
								<li>4、禁止酒后驾车，禁止超速行驶，旅游线路弯路较多，其中包含砂石路，安全行驶第一</li>
								<li>5、在旅行线路中除游客主动要求购买土特产等纪念品等，禁止购物引导</li>
								<li>6、行车过程中游客提出的野外停车拍照，司机须停车不得以时间为由拒绝停车</li>
								<li>7、司机师傅必备基本摄影拍照技术</li>
							</ul>
							<ul class="bao_ceb">
								<li>如您对司机师傅的服务不满意请您拨打电话13352571537投诉，我们将对此次服务的司机师傅视情节扣除风险抵押金或取消合作资格<br />的惩罚。</li>								
							</ul>	
								<div class="ce_zhan" align="center" style="position:relative">
									<img src="images/13_b1ex.jpg" alt="" />
								<p>车型展示</p>
								</div>	
						</div>
						<div class="ce_zhang">
							<ul>
							<?php foreach ($sy_data as $key => $val){?>
								<li class="ce_zhangA"><img src="images/<?php echo $val['img_url'];?>" alt="" /><br /><?php echo $val['food_title']; ?></li>
							<?php }?>
							</ul>
							<ul class="ce_zhang">
							<?php foreach ($sy_data1 as $key => $val){?>
								<li class="ce_zhangS"><img src="images/<?php echo $val['img_url'];?>" alt="" /><br /><?php echo $val['food_title']; ?></li>
							<?php }?>
							</ul>
							<ul class="ce_zhang">
							<?php foreach ($sy_data2 as $key => $val){?>
								<li class="ce_zhangI"><img src="images/<?php echo $val['img_url'];?>" alt="" /><br /><?php echo $val['food_title']; ?></li>
							<?php }?>
							</ul>
							<ul class="ce_zhang">
							<?php foreach ($sy_data3 as $key => $val){?>
								<li class="ce_zhangA"><img src="images/<?php echo $val['img_url'];?>" alt="" /><br /><?php echo $val['food_title']; ?></li>
							<?php }?>
							</ul>
						</div>	
						

					</div>											
			<!--中部内容结束-->
			<?php include('footer.php');?>
	</div>
</body>
</html>