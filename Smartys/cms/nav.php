<?php
	include('smarty.conf.php');

	  //==========引用函数库============
   include('pagination.php');
    //链表查询案列的所有数据--------------
    $sql = "SELECT * FROM `wd_nav1`";
    $nav_data=$conn->get_all($sql);
    // p($banner_data);die;
    //========删除功能===========
    if(!empty($_GET['del'])){
      $id = $_GET['id']+0;
      $sql = "delete from wd_nav1 where id = ".$id;
      //print_r($sql);die;
      $res =$conn-> mysql_query($sql);
      if(mysql_affected_rows()>0){
        echo "<script>alert('删除成功！');location.href='nav.php';</script>";       
      }else{
        echo "<script>alert('删除失败！');location.href='nava.php';</script>";
      }
    }
  //================页码插件========================================
  $sql_count = "select count(*) as c from wd_nav1 ";
  $count =$conn-> get_one($sql_count);
  $total =$count['c'];
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
    $conf=array('start','end');//显示上下页
    $a= pagination($total,$current,$limit,$size,$conf,'digg');
    // p($a);die;
    $smarty->assign('a',$a);
    // 确定要从第几条记录开始获取
  $start = ($current-1)*$limit;
  $sql = "select * from wd_nav1 limit {$start},{$limit}";
  $nav_data =$conn-> get_all($sql);
  $smarty->assign('nav',$nav_data);
$smarty->display('wd_nav1_list.html');
?>
