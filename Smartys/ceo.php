<?php
		include('smarty.conf.php');
		#ҳ�������ʽ assign �����ǽ����ǵ����ݴ��͵�ģ������
		// $smarty->assign('nav_data',$nav_data);
		#ȷ������Ҫ���ص��ļ�
		//$smarty->assign('key',3);
		//$smarty->display('test.html');
		//ҳ�������ʽ���빫������
		//$smarty->display('index.html');
		$sql = "SELECT * FROM `ad_ceo_cat`";
		$ceo = $conn->get_all($sql);
		$smarty->assign('ceo',$ceo);
		$smarty->display('ceo.html');

?>