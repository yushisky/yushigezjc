<!--数据库公共样式-->
<?php
// include('config/common.conf.php');
 $sql="select * from wd_nav";
	$nav_data= get_all($sql);
?>
<!--头部连接数据库公共样式-->
	<div class="header_left">
			<img src="images/contact.png"/>
		</div>
		<div class="header_right">
			<div class="deng_lu">
				<ul>
					<li><a href="user_login.php">登陆  </a>|</li>
					<li><a href="user_reg.php">注册  </a></li>
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
			
			<div class="an_li">
				<ul>
				 <?php foreach($nav_data as $key => $val){?>
                        <li ><a href="<?php echo $val['nav_url']?>"><?php echo $val['nav_name']?></a><?php echo $key+1 == count($nav_data)?'':'<i>丨</i>';?></li>
                 <?php }?>
				</ul>
			</div>		
		</div>
		