<?php
    //==========引用函数库============
   include('../pagination.php');
    include('../config/common.conf.php');
    //链表查询案列的所有数据--------------
    $sql = "SELECT * FROM `mh_serve`";
    $serve_data=get_all($sql);
    // p($banner_data);die;
    //========删除功能===========
    if(!empty($_GET['del'])){
      $serve_id = $_GET['serve_id']+0;
      $sql = "delete from mh_serve where serve_id = ".$serve_id;
      //print_r($sql);die;
      $res = mysql_query($sql);
      if(mysql_affected_rows()>0){
        echo "<script>alert('删除成功！');location.href='news_list.php';</script>";       
      }else{
        echo "<script>alert('删除失败！');location.href='news_list.php';</script>";
      }
    }
  //================页码插件========================================
  $sql_count = "select count(*) as c from mh_serve ";//as wc left join wd_case_cat as wcc on wc.case_class = wcc.case_cat_id
  $count = get_one($sql_count);
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
  $sql = "select * from mh_serve  limit {$start},{$limit}";//as wc left join wd_case_cat as wcc on wc.case_class = wcc.case_cat_id
  //$sql = "select * from student limit 0,{$limit}";
  $serve_data = get_all($sql);
  //p($cases_data);die;
  //阻止非法进入者
 //    if(empty($_SESSION['is_login'])){
 //    session_start();
 // // print_r($_SESSION['is_login']);die;
 //    show_msg('非法进入','login.php');die;
 //  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>CMS内容管理系统</title>
    <?php include('header.php');?>
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="js/jquery.min.js"></script> 
</head>

<body>
<!-- Start: Header -->

<!-- End: Header -->

<!-- Start: Main -->
<div id="main"> 
    <!-- Start: Sidebar -->
  <aside id="sidebar" class="affix">
    <div id="sidebar-search">
    		
    </div>
    <div id="sidebar-menu">
        <?php include('nav.php');?>
    </div>
  </aside>
  <!-- End: Sidebar -->   
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">新闻详细管理</li>
      </ol>
    </div>
    <div class="container">
	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">新闻详细管理</div>
                  <a href="mh_serve_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加管理</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center">
                          <a class="btn btn-gray btn-sm" id="selectAll">全选</a>
                        </th>
                        <th>标题</th>
                        <th>内容</th>
                        <th>图片路径</th>
                        <th>类型</th>
                        <th>是否显示</th>
                        <th>更新时间</th>
                        <th width="200">操作</th>
                      </tr>
                      <?php foreach ($serve_data as $key => $val){?>
                    	<tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td><?php echo cutstr($val['serve_title'],0,12,'...');?></td>
                        <td><?php echo cutstr($val['serve_label'],0,12,'...');?></td>
                        <td><?php echo $val['img_url'];?></td>
                        <td><?php echo $val['class'];?></td>
                        <td><?php echo $val['is_show'];?></td>
                        <td><?php echo $val['addtime'];?></td>
                        <td>
		                      <div class="btn-group">
		                        <a href="mh_serve_edit.php?update=1&serve_id=<?php echo $val['serve_id'];?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
		                        <a onclick="return confirm('确定要删除吗？');" href="?del=1&serve_id=<?php echo $val['serve_id'];?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
		                      </div>
                        </td>
                      </tr>
                      <?php }?>
                  </table>
                  <div class="pull-left">
                    <button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                  </div>
                   <?php
                          //$conf=array();
                      echo pagination($total,$current,$limit,$size,$conf,'digg');
                      ?>
                </div>
                </form>
              </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --> 
</body>
</html>