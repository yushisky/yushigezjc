<?php
		include('smarty.conf.php');
		include('pagination.php');
		#页面输出方式 assign 方法是将我们的数据传送到模板里面
		// $smarty->assign('nav_data',$nav_data);
		#确定我们要加载的文件
		//$smarty->assign('key',3);
		//$smarty->display('test.html');
		//页面输出方式分离公共部分
		//$smarty->display('index.html');

//============================================================
	$sql_count = "select count(*) as c from wd_news_list";
	$count = $conn-> get_one($sql_count);
	$total = $count['c'];
	// p($total);die;
	//我们需要规定我们每页需要多少条数据
	$limit = 8;
	//当前页码，第一页还是第二页
	//判断我们当前的页面
	if(!empty($_GET['page'])){
		$current = $_GET['page']+0;
	}else{
		$current = 1;
	}
	//我们要显示的页码数
	$size = 3;//如果总共有10页，只显示5页
	
	//====//确定我们的总页码数,向上？向下？
	//第二种页码插入方式============
	
	//确定我们的总页码数,向上？向下？
	// 确定要从第几条记录开始获取
		 $conf=array();//框框输入
		 $data = array();
		 $a = pagination($total,$current,$limit,$size,$conf,"digg");
		$start = ($current-1)*$limit;
		$sql = "select * from wd_news_list limit {$start},{$limit}";
		//$sql = "select * from student limit 0,{$limit}";
		$new_datail = $conn-> get_all($sql);
		$smarty->assign('new_datail',$new_datail);
	 // $show =$Page->show();
  //           // echo $show;
  //           // echo $count.'条记录';die;
  //        $this->assign('Page',$show);
	//===========================================
		
		$smarty->display('news_list.html');

?>