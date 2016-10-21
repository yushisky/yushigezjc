<?php
	include('config/common.conf.php');
	 session_start();
		if($_POST){
		$code = strtolower($_POST['code']);
		if($code!=$_SESSION['code']){
				show_msg('验证码错误');die;
			}
		}
	 if($_POST){
    $username = $_POST['username'];
    $pass = md5($_POST['pass']);
    $repass = md5($_POST['repass']);
    if($pass != $repass){
      show_msg('密码不一致');die;
    }
    $data = array(
      'reg_name'=>$username,
      'password' =>md5($pass),
    );
    $table = 'wd_reg';
    $res= add($table,$data);
    if($res){
      show_msg('注册成功','user_login.php');
    }else{
      show_msg('注册失败');die;
    }
  }
if(!empty($_SESSION['is_login'])){
    show_msg('非法进入','user_login.php');die;
}
?>
<html>
	<head>
		<title>文豆</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/user_reg.css">
		<style>

		</style>
	</head>
<body>
	<div class="big_boss">
		<!--头部开始-->
		<?php include('headers.php');?>
		
	<div class="clear_float"></div>
	<!--头部结束-->
	<!--nav开始-->
	<div class="nav"><img src="images/cases_04.png" /> </div>
	<div class="s_ye"><a href=""><< 返回首页</a></div>
	<!--nav结束-->
	<!--中部内容开始-->
	<div class="small_box">
		<div class="zhu_ce">
			<ul class="boxx">
			 <form action="" method="post" >
				<li class="yong_hu"><a href=""><p>用户注册</p></a></li>
				<div class="clear_float"></div>
				<li class="z_han">账号<input type="text" name = 'username' style="line-height:31px; width:240px" value=""/></li>	
				<div class="clear_float"></div>
				<li class="mi_ma">设置密码<input type="password" name = 'pass' style="line-height:31px; width:240px" value=""/></li>	
				<div class="clear_float"></div>
				<div class="clear_float"></div>
				<li class="mi_ma">设置密码<input type="password" name = 'repass' style="line-height:31px; width:240px" value=""/></li>	
				<div class="clear_float"></div>
				<li class="yan_z">
				验证码<input type="text" name='code' style="line-height:31px; width:80px"  value=""/></li>
				<span><img  src="img.php" id="code" alt="" /></span><a href="javascript:void();"><b id="cc">开不清楚？ 换一张</b></a> 
				<div class="clear_float"></div>
				<div class="zhu_c"><a ><span></span><input type="submit" name="dosubmit" value="注 册"/></a></div>
			</ul>
		</form>
				 <script type="text/javascript">
                      var code = document.getElementById('code');
                      var cc = document.getElementById('cc');
                      code.onclick = function(){
                        this.src = 'img.php?num=' + Math.random();
                      }
                      cc.onclick = function(){
                        code.src = 'img.php?num=' + Math.random();
                      }
                   </script>
				<div class="deng_ru">
						<p >已有账号？</p>
						<div class="li_ji"><p><a class="li_jia" href="user_login.php">立即登录</a></p></div>
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
