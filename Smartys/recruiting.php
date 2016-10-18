<?php
	include('smarty.conf.php');	
			#查询数据库
		$sql = 'SELECT * FROM wd_rec where class=1';
		// 	// p($sql);die;
		$rec_data = $conn-> get_all($sql);
		 // p($deta_datail);die;
		$smarty->assign('data',$rec_data);
		#查询数据库
		$sql = 'SELECT * FROM wd_rec where class=2';
		// 	// p($sql);die;
		$rec_datail = $conn-> get_all($sql);
		 // p($deta_datail);die;
		$smarty->assign('datail',$rec_datail);
		$sql = 'SELECT * FROM wd_rec where class=2';
		// 	// p($sql);die;
		// p($rec_datail);die;
		$rec_datail2 = $conn-> get_all($sql);
		$smarty->assign('datail2',$rec_datail2);
	$smarty->display('recruiting.html')
	
  ?>