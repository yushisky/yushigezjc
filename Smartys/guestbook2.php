<?php
		include('smarty.conf.php');
		#页面输出方式 assign 方法是将我们的数据传送到模板里面
		// $smarty->assign('nav_data',$nav_data);
		#确定我们要加载的文件
		//$smarty->assign('key',3);
		//$smarty->display('test.html');
		//页面输出方式分离公共部分
		$sql = "SELECT * FROM `wd_message1`";
		$mag = $conn->get_all($sql);
		// print_r($mag);die;
		$smarty->assign('mag',$mag);
		$smarty->display('guestbook2.html');
		if(!isset($name)){
        show_msg('非法进入','login.php');die;
      }

?>