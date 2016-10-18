<?php
include('config/common.conf.php');
include('session.php');
  /* 
        //重定向
        //echo '<script>alert("非法进入");location.href="news.php";</script>';
    }*/
    $sql = "select * from wd_news where new_class='news_01'";
        //p($sql);die;
        $wd_news_detail = get_all($sql);
        //p( $wd_news_detail);die;
         $sql = "select * from wd_news where new_class='news_02'";
        //p($sql);die;
        $wd_news_deta = get_all($sql);
?>

<html>
	<head>
		<title>文豆</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/news_01.css">
		<style>

		</style>
	</head>
<body>
	<div class="big_boss">
		<!--头部开始-->
	<?php include('headers.php');?>
	<!--头部结束-->
	<!--nav开始-->
	<div class="nav"><img src="images/cases_04.png" /> </div>
	<div class="s_ye">	
		<p><a href="index.php">首页 </a>&gt
		<a href="news.php">资讯中心 </a></p>
	</div>
	<!--nav结束-->
	<!--中部内容开始-->
	<div class="small_box">
		<div class="qu_shi">
		<?php foreach ($wd_news_detail as $val){?>
			
		
		<p><?php echo $val['new_title'];?></p>
		<span>发布日期：<?php echo $val['new_date'];?></span>	
		</div>
		<div class="nav_d">
			<ul class="nav">
			
				<li>&nbsp &nbsp &nbsp<?php echo $val['new_label'];?></li>
				<?php };?>
			</ul>
			<?php foreach ($wd_news_deta as $val){?>
			<ul>
				<li  class="nav_a"><?php echo $val['new_title'];?></li>
			</ul>
			
			<ul class="nav_s">
				<li>&nbsp &nbsp &nbsp <?php echo $val['new_label'];?></li>
			</ul>					
		</div>
		<div class="clear_float"></div>
		<div class="img_s">			
			<img src="images/<?php echo $val['new_img'];?>" alt="" />				
		</div>	
		<?php };?>
		<div class="clear_float"></div>
	</div>	
    <!--中部内容结束-->
	<!--尾部开始-->
	<div class="footer_k">
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
		<li class="fen_xiang">
			分享到：
		</li>
		<li><a href=""><img src="images/index_50.png">
		</a></li>
		
		<li><a href=""><img src="images/index_52.png">
		</a></li>
		
		<li><a href=""><img src="images/index_54.png">
		</a></li>
		</ul>
	</div>
	<!--尾部结束-->
</div>
 </body>
</html>
