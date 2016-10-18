<?php
		include('smarty.conf.php');
	//===============#查询数据库============================
		$sql = 'SELECT * FROM wd_detail1 limit4';
		// 	// p($sql);die;
		$deta_datail = $conn-> get_all($sql);
		 // p($deta_datail);die;
		$smarty->assign('detail',$deta_datail);
		#查询数据库
		$sql = 'SELECT * FROM wd_detail1 where class=2';
		// 	// p($sql);die;
		$deta_datail2 = $conn-> get_all($sql);
		 // p($deta_datail);die;
		$smarty->assign('detail2',$deta_datail2);
		#查询数据库
		$sql = 'SELECT * FROM wd_public_cat where class=1';
		// 	// p($sql);die;
		$public_datail = $conn-> get_all($sql);
		 // p($deta_datail);die;
		$smarty->assign('public',$public_datail);
		#查询数据库
		$sql = 'SELECT * FROM wd_detail1 where class=4';
		// 	// p($sql);die;
		$deta_datail3 = $conn-> get_all($sql);
		 // p($deta_datail);die;
		$smarty->assign('detail3',$deta_datail3);

		$smarty->display('product_detail.html');

?>