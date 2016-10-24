<?php
		include('smarty.conf.php');
		#页面输出方式 assign 方法是将我们的数据传送到模板里面
		// $smarty->assign('nav_data',$nav_data);
		#确定我们要加载的文件
		//$smarty->assign('key',3);
		//$smarty->display('test.html');
		//页面输出方式分离公共部分
		//$smarty->display('index.html');
		$sql = "SELECT * FROM `ad_ceo_cat`";
		$ceo = $conn->get_all($sql);
		$smarty->assign('ceo',$ceo);
		$smarty->display('contact_us.html');
?>