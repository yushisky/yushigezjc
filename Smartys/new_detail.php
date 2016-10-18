<?php
		include('smarty.conf.php');
		if($_GET['id']){
			$id=$_GET['id'];
		}else{
			$id =1;
		}
			$sql ='select * from wd_article1 where id ='.$id;
			// print_r($sql);die;
			// $deta_datail = $conn->get_all($sql);
			$art_inof = $conn->get_one($sql);
			// print_r($deta_datail);die;
			$smarty ->assign('art_inof',$art_inof);
			$smarty ->display('news_detail.html');

?>