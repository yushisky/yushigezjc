<?php
    //==========引用函数库============
   include('../pagination.php');
    include('../config/common.conf.php');
    //链表查询案列的所有数据--------------
    $sql = "SELECT * FROM `mh_nav`";
    $nav_data=get_all($sql);
    // p($banner_data);die;
    //========删除功能===========
    if(!empty($_GET['del'])){
      $nav_id = $_GET['nav_id']+0;
      $sql = "delete from mh_nav where nav_id = ".$nav_id;
      //print_r($sql);die;
      $res = mysql_query($sql);
      if(mysql_affected_rows()>0){
        echo "<script>alert('删除成功！');location.href='mh_nav_list.php';</script>";       
      }else{
        echo "<script>alert('删除失败！');location.href='mh_nav_list.php';</script>";
      }
    }
  //================页码插件========================================
  $sql_count = "select count(*) as c from mh_nav ";//as wc left join wd_case_cat as wcc on wc.case_class = wcc.case_cat_id
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
    $conf=array('start','end');//显示上下页
    // 确定要从第几条记录开始获取
  $start = ($current-1)*$limit;
  $sql = "select * from mh_nav limit {$start},{$limit}";//as wc left join wd_case_cat as wcc on wc.case_class = wcc.case_cat_id
  //$sql = "select * from student limit 0,{$limit}";
  $nav_data = get_all($sql);
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
        <li class="active">导航栏管理</li>
      </ol>
    </div>
    <div class="container">
	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">导航栏管理</div>
                  <a href="mh_nav_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加导航栏</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center">
                          <a class="btn btn-gray btn-sm" id="selectAll">全选</a>
                        </th>
                        <th>导航栏名称</th>
                        <th>导航栏路径</th>
                        <th>是否显示</th>
                        <th>更新时间</th>
                        <th width="200">操作</th>
                      </tr>
                     <?php foreach($nav_data as $key=> $val){?>
                    	 <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td><?php echo $val['nav_name']; ?></td>
                        <td><?php echo $val['nav_url']; ?></td>
                        <td><?php echo $val['is_show']; ?></td>
                        <td><?php echo $val['addtime']; ?></td>
                        <td>
		                      <div class="btn-group">
		                        <a href="mh_nav_edit.php?update=1&nav_id=<?php echo $val['nav_id'];?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
		                        <a onclick="return confirm('确定要删除吗？');" href="?del=1&nav_id=<?php echo $val['nav_id'];?>" class="btn btn-default btn-gradient dropdown-toggle"> <span class="glyphicons glyphicon-trash"></span></a>
                             
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