<?php
	include('config/common.conf.php');
	session_start();
	if(!empty($_SESSION['is_login'])){
 	$user_id = $_SESSION['is_login'];
	  $sql = 'select * from wd_user where user_id = '.$user_id;
	 // p($sql);die;
	  $user_info = get_one($sql);
	  }else{
	  show_msg('非法进入','user_center.php');die;
	  }
	if(isset($_POST['active'])&&!empty($_POST['active'])){
  // p($_POST);die;
    $user_id = $_POST['user_id'];
    $data['user_name'] = $_POST['name'];
    $data['user_mail'] = $_POST['email'];
    $data['user_qq'] = $_POST['qq'];
    $data['phone'] = $_POST['phone'];
    $data['birthday'] = $_POST['birthday'];
    $data['real_name'] = $_POST['real_name'];
    $data['sex'] = $_POST['sex'];
    $data['real_name'] = $_POST['real_name'];
   	$data['user_url'] = $_POST['user_url'];
    $table = 'wd_user';
    $where = 'user_id = '.$user_id;
     // p($data);die;
    $res = update($table,$data,$where);
    // p($res);die;
    if($res){
      show_msg('修改成功','user_center.php');
    }else{
      show_msg('修改失败');
    }
	}  
	//阻止非法进入者
	$sql="select * from wd_nav";
	$nav_data= get_all($sql);

?>
<html>
	<head>
		<title>用户中心</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/user_setting.css">
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
					<li>|&nbsp <a href="user_msg.php"><?php echo $user_info['user_name'];?> </a></li>
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
		<div class="so_ye"><p><a href="">首页</a><a>></a>	
			<a href="user_center.php">用户中心</a><a>></a>
			<a href="user_setting.php">账号设置</a></p>
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
					<p><a href="user_center.php">基本信息<span style="margin:50px;color:white;">></span></a></p>
			</div>
			<div class="user_b">	
				<p><a href="user_center.php">账号设置<span style="margin:50px;color:white;">></span></a></p>
			</div>
		</div>
		<div class="xin_xi">
				<p class="ji_b"><a href="user_center.php">基本信息</a></p>
				<span class="she_zhi"><a href="user_center.php"><p>账号设置</p></a></span>
		</div>
		<div class="name">
			
			<form action="" method="post" class="glyphicon glyphicon-home">
			<ul>
				<li class="xing_m">昵 &nbsp&nbsp&nbsp 称:<input type="text"  value="<?php echo $user_info['user_name'];?>" name = 'name' style="line-height:31px; width:240px"/></li>
				<li class="xing_m">真实姓名:<input type="text" name = 'real_name' value="<?php echo $user_info['real_name'];?>" style="line-height:31px; width:240px"/></li>
				<li class="xing_b"> 性别:
				<select name="sex" id="" style="height:26px;width:72px">
							<option value="value="<?php echo $user_info['sex'];?>"">男</option>
							<option value="value="<?php echo $user_info['sex'];?>"">女</option>	
				</select>
				</li>			
				<li class="shen_r">
						<p> 生日:<input type="text" name = 'birthday' value="<?php echo $user_info['birthday'];?>" style="line-height:31px; width:140px"/></p>	
				</li>			
				<li class="s_ji">手机:<input type="text" name = 'phone' style="line-height:31px; width:240px" value="<?php echo $user_info['phone'];?>"/></li>	
				<li class="">电子邮箱:<input type="text" name = 'email' style="line-height:31px; width:240px" value="<?php echo $user_info['user_mail'];?> "/></li>	
				<li class="q_q"> QQ:<input type="text" name = 'qq' style="line-height:31px; width:243px" value="<?php echo $user_info['user_qq'];?> "/></li>		
				<li class="di_zhi">详细地址:<input type="text" name = 'user_url' style="line-height:31px; width:240px" value="<?php echo $user_info['user_url'];?>" /></li>
			
			</ul>	
		</div>
		 <input type="hidden" name="user_id" value="<?php echo $user_info['user_id'];?>">
		<div class="zi_l" style="display: block;"><p><input type="submit" value="提交" name="active" style="background:#82AC57;font-size:20px; color:white;" /></p></div>	
		</form>		
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