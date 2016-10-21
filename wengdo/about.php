<?php
include('session.php');
//===========函数只能引入一次
include('config/common.conf.php');
//========wd_about查询=============
$sql = 'select * from wd_about_cat';
$wd_about = get_all($sql);
// print_r($nav_info);die;
$sql = 'select * from wd_about where about_class =1';
$about_data = get_all($sql);
$sql = 'select * from wd_about where about_class =2';
$about_datail = get_all($sql);
$sql = 'select * from wd_about where about_class =3';
$about_datatest = get_all($sql);

?>
<html>
	<head>
		<title>文豆</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./css/public.css"/>
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/about.css">
		<style>

		</style>
	</head>
<body>
	<div class="big_boss">
		<!--头部开始-->
		<?php include('header.php');?>
	<div class="clear_float"></div>
	<!--头部结束-->
	<!--nav开始-->
	
	<div class="nav_a">
			<?php foreach($wd_about as $val){?>
            <ul>			
                <li><a href="#"><?php echo $val['about_cat_name'];?></a></li>			     
            </ul>
			 <?php }?>
	</div>
	<div class="nav"><img src="images/about_03.png" /> </div>
	<!--nav结束-->
	<div class="clear_float"></div>
	<!--中部内容开始-->
	<div class="small_box">
		<?php foreach ($about_data as  $val){?>
			
		
		<div class="le_jie">
				<p><a href=""><?php echo $val['title'];?></a> <span> / ABOUT US</span></p>
		</div>
		<div class="wen_do">
			<p>  &nbsp &nbsp<?php echo $val['content'];?></p>
		</div>
		<?php };?>	
		<?php foreach ($about_datail as  $val){?>
		<div class="wen_do">
			<p>  &nbsp &nbsp<?php echo $val['content'];?></p>
		</div>	
		<?php };?>
		<?php foreach ($about_datatest as  $val){?>
				
		<div  class="wen_do">
			<p><?php echo $val['content'];?></p>
		</div>	
		
		<?php };?>
	</div>	
    <!--中部内容结束-->
	<!--尾部开始-->
	<?php include('footer.php');?>
	<!--<div class="footer_k">
		<ul>
			<li><a href> 了解文豆 |</a></li>
			<li><a href> 案例展示 |</a></li>
			<li><a href> 服务介绍 | </a></li>
			<li><a href> 咨询中心 |</a></li>
			<li><a href> 联系我们 |</a></li>
			<li><a href> 合作伙伴</a></li>
		</ul>
	</div>
	<div class="clear_float"></div>
	<div class="text"><p>文豆集团 Copyright 2009-2015 All Rights Reserved wengdo	<br />
						法律顾问：广东晟晨律师事务所－张勇律师</p>     </div>
	<div class="text1"><p>粤ICP备12022584号－3</p>
	
	</div>
	<div class="text2">
		<ul>
		<li  class="fen_xiang">
			分享到：
		</li>
		<li><a href=""><img src="images/index_50.png">
		</a></li>
		
		<li><a href=""><img src="images/index_52.png">
		</a></li>
		
		<li><a href=""><img src="images/index_54.png">
		</a></li>
		</ul>
	</div>-->
	<!--尾部结束-->
</div>
 </body>
</html>
