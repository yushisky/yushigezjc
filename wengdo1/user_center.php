<?php
	include('config/common.conf.php');
 		session_start();
	 if(!isset($_SESSION['is_login'])){
	    show_msg('非法进入','user_login.php');die;
	 } 
  	$user_id = $_SESSION['is_login'];
	$sql='select * from wd_user where user_id ='.$user_id;
	 // print_r($sql);die;
	  $user_data = get_one($sql);
	  // print_r($user_data);die;
     $sql="select * from wd_nav";
	$nav_data= get_all($sql);
				
?>
<html>
	<head>
		<title>用户中心</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/user_center.css">
		<style>

		</style>
	</head>
<body>
	<div class="big_boss">
		<!--头部开始-->

		<div class="header_left">
			<img src="images/cases_02.png"/>
		</div>
	
		<div class="header_right">
			<div class="deng_lu">
				<ul>
					<li class="z_xin"><a href="user_login.php">用户中心</a></li>
					<li>|&nbsp <a href="user_msg.php"><?php echo $user_data['user_name'];?></a></li>
					<li>
						<select name="" id="">
						<option value="#">旗下</option>
						<option value="#">web1</option>
						<option value="#">web2</option>
						<option value="#">web3</option>
						</select>
					<li>
				</ul>
			</div>
				<div class="clear_float"></div>
			<div class="an_li">
				<ul>
				<?php foreach($nav_data as $key => $val){?>
                        <li ><a href="<?php echo $val['nav_url']?>"><?php echo $val['nav_name']?></a><?php echo $key+1 == count($nav_data)?'':'<i>丨</i>';?></li>
                 <?php }?>
				</ul>
			</div>		
		</div>
	<div class="clear_float"></div>
	<!--头部结束-->
	<!--nav开始-->
	<div class="nav"><img src="images/cases_04.png" /> </div>
	<div class="nav_a">
		<div class="so_ye"><p><a href="imdex.php">首页</a><a>></a>	
			<a href="user_center.php">用户中心</a><a>></a>
			<a href="user_center.php">基本信息</a>
		</div>
	</div>
	<!--nav结束-->
	<div class="clear_float"></div>
	<!--中部内容开始-->
	<div class="small_box">
	<div class="b_dang">
		<div class="user">
			<div class="user_a">
					<p><img src="images/user_setting_03.png" alt="" /><span>username</span></p>
			</div>
			<div class="user_b">
					<p>基本信息<span>></span></p>
			</div>
			<div class="user_c">	
				<p><a href="user_setting.php">账号设置</a></p>
			</div>
		</div>
		
		<div class="xin_xi">
				<span class="she_zhi"><p>基本信息</p></span>
				<p class="ji_b"><a href="user_setting.php">账号设置</a></p>
		</div>
		<div class="z_han">
			<ul>
				<li>账号：<?php echo $user_data['user_name'];?></li>
				<li>邮箱：<?php echo $user_data['user_mail'];?></li>
				<li>ＱＱ：<?php echo $user_data['user_qq'];?></li>
			</ul>
		</div>
	</div>
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