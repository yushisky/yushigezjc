<?php
		include('smarty.conf.php');
		include('pagination.php');
		#ҳ�������ʽ assign �����ǽ����ǵ����ݴ��͵�ģ������
		// $smarty->assign('nav_data',$nav_data);
		#ȷ������Ҫ���ص��ļ�
		//$smarty->assign('key',3);
		//$smarty->display('test.html');
		//ҳ�������ʽ���빫������
		//$smarty->display('index.html');

//============================================================
	$sql_count = "select count(*) as c from wd_news_list";
	$count = $conn-> get_one($sql_count);
	$total = $count['c'];
	// p($total);die;
	//������Ҫ�涨����ÿҳ��Ҫ����������
	$limit = 8;
	//��ǰҳ�룬��һҳ���ǵڶ�ҳ
	//�ж����ǵ�ǰ��ҳ��
	if(!empty($_GET['page'])){
		$current = $_GET['page']+0;
	}else{
		$current = 1;
	}
	//����Ҫ��ʾ��ҳ����
	$size = 3;//����ܹ���10ҳ��ֻ��ʾ5ҳ
	
	//====//ȷ�����ǵ���ҳ����,���ϣ����£�
	//�ڶ���ҳ����뷽ʽ============
	
	//ȷ�����ǵ���ҳ����,���ϣ����£�
	// ȷ��Ҫ�ӵڼ�����¼��ʼ��ȡ
		 $conf=array();//�������
		 $data = array();
		 $a = pagination($total,$current,$limit,$size,$conf,"digg");
		$start = ($current-1)*$limit;
		$sql = "select * from wd_news_list limit {$start},{$limit}";
		//$sql = "select * from student limit 0,{$limit}";
		$new_datail = $conn-> get_all($sql);
		$smarty->assign('new_datail',$new_datail);
	 // $show =$Page->show();
  //           // echo $show;
  //           // echo $count.'����¼';die;
  //        $this->assign('Page',$show);
	//===========================================
		
		$smarty->display('news_list.html');

?>