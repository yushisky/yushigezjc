<?php
	
	include('./include/mysql.class.php');

	$mysql = new Mysql('localhost','root','','wengdos');

	//唯一性判断
	if(isset($_GET['name'])&&!empty($_GET['name'])){
		$name =$_GET['name'];
		$sql='select * from wd_user1 where username="'.$name.'"';
			$res = $mysql->get_one($sql);
			if($res){
				$resule = array('error'=>1,'data'=>$name);

			}else{
				$resule = array('error'=>0,'data'=>$name);
			}
			echo json_encode($resule);
	}
 ?>
