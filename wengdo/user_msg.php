<?php
	include('config/common.conf.php');
	$sql="select * from wd_nav";
	$nav_data= get_all($sql);
	session_start();
	if(isset($_SESSION['is_login'])){
 	$user_id = $_SESSION['is_login'];
 	$sql='select * from wd_user as wc left join wd_message as wcc on wc.user_id = wcc.user_class where user_id = '.$user_id;
 	// p($sql);die;
		$user_info=get_all($sql);
	  }else{
	  	show_msg('非法进入','user_center.php');die;
	  }
	  $sql="select * from wd_user";
	$user_datail= get_one($sql);
		

 ?>
<html>
	<head>
		<title>客户留言</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/user_msg.css">
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
					<li class="z_xin"><a href="user_login.php">用户中心 </a></li>
					<li>|&nbsp <a href="user_msg.php"><?php echo $user_datail['user_name'];?></a></li>
					<li>
						<select name="" id="" >
						<option value="#" >旗下</option>
						<option value="#">1</option>
						<option value="#">2</option>
						<option value="#">3</option>
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
		<div class="so_ye"><p>
			<a href="">首页</a><a>></a>	
			<a href="user_setting.php">用户中心</a><a>></a>
			<a href="user_msg.php">客户留言</a></p>
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
			<div class="user_s">
					<p><a href="user_center.php">基本信息</a></p>
			</div>			
			<div class="user_c">	
				<p><a href="user_setting.php">账号设置</a></p>
			</div>			
			<div class="user_b">
					<p><a href="user_msg.php">客户留言<span>></span></a></p>
			</div>
			</div>
			
			<div class="xin_xi">
					
					<span class="she_zhi"><a href="">客户留言</a></span>
			</div>
			<?php foreach ($user_info as $key => $val){?>
			<ul class="nei_r">
				<li class="r_qi"><?php echo $val['msg_addtime'];?>	     username:<?php echo $user_datail['user_name'];?></li>
				<li class="wo"><?php echo $val['msg_content'];?></li>
				<li class="you_x">邮箱<?php echo $val['email'];?>	电话：<?php echo $val['phone'];?></li>
			</ul>
			<?php }?>
		</div>
	</div>
    <!--中部内容结束-->
	<!--尾部开始-->
	<div class="footer_k">
		<ul>
			<?php foreach($nav_data as $key => $val){?>
                        <li ><a href="<?php echo $val['nav_url']?>"><?php echo $val['nav_name']?></a><?php echo $key+1 == count($nav_data)?'':'<i>丨</i>';?></li>
            <?php }?>
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