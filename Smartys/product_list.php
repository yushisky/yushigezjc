<?php
		include('smarty.conf.php');
		#查询数据库
		$sql = 'SELECT * FROM wd_public_cat where class=1';
		// p($sql);die;
		$public_datail = $conn-> get_all($sql);
		 // p($deta_datail);die;
		$smarty->assign('public',$public_datail);
		#查询数据库
		$sql = 'SELECT * FROM wd_detail1  where class = 3 ';
		// 	// p($sql);die;
		$detaone = $conn-> get_all($sql);
		 // p($detaone);die;
		$smarty->assign('detaone',$detaone);



		$smarty->display('product_list.html');
 ?>