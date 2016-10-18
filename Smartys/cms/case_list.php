<?php
	include('smarty.conf.php');
	//========删除功能===========
		if(!empty($_GET['del'])){
			$id = $_GET['id']+0;
			$sql = "delete from wd_article1 where 	id = ".$id;
			// print_r($sql);die;
			$res = mysql_query($sql);
			if(mysql_affected_rows()>0){
				echo "<script>alert('删除成功！');location.href='case_list.php';</script>";				
			}else{
				echo "<script>alert('删除失败！');location.href='case_list.php';</script>";
			}
		}
	//================页码插件========================================
	$sql_count = "select count(*) as c from wd_article1";
	$count = $conn->get_one($sql_count);
	$total = $count['c'];
  	//print_r($total);die;
	//我们需要规定我们每页需要多少条数据
	$limit = 10;
	//当前页码，第一页还是第二页
	//判断我们当前的页面
	if(!empty($_GET['page'])){
		$current = $_GET['page']+0;
	}else{
		$current = 1;
	}
	//我们要显示的页码数
	$size = 5;//如果总共有10页，只显示5页
	$conf=array('start','end');

	// 确定要从第几条记录开始获取
	$start = ($current-1)*$limit;
	$sql = "select * from wd_article1 limit {$start},{$limit}";
	// $a= $conn->pagination($total,$current,$limit,$size,$conf,'digg');
	// print_r($sql);die;
	//$sql = "select * from student limit 0,{$limit}";
	$cases_data = $conn->get_all($sql);
	// print_r($cases_data);die;
	include('cookies.php');
	$smarty->assign('cases_data',$cases_data);
	$smarty->display('case_list.html');
?>