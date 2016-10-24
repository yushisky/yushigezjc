<?php
		//==========引用函数库============
    include('pagination.php');
    require '../config/common.conf.php';
    //链表查询案列的所有数据--------------
    $sql='select * from wd_reg';
    $reg_data=get_all($sql);
    //print_r($service_data);die;
    
   //========删除功能===========
    if(!empty($_GET['del'])){
     $reg_id = $_GET['reg_id']+0;
      $sql = "delete from wd_reg where reg_id = ".$reg_id; 
      // print_r($sql);die;
      $res = mysql_query($sql);
      if(mysql_affected_rows()>0){
        echo "<script>alert('删除成功！');location.href='wd_reg.php';</script>";        
      }else{
        echo "<script>alert('删除失败！');location.href='wd_reg.php';</script>";
      }
    }
 //================页码插件========================================
  $sql_count = "select count(*) as c from wd_reg ";
  $count = get_one($sql_count);
  $total = $count['c'];
    //我们需要规定我们每页需要多少条数据
  $limit = 9;
  //当前页码，第一页还是第二页
  //判断我们当前的页面
  if(!empty($_GET['page'])){
    $current = $_GET['page']+0;
  }else{
    $current = 1;
  }
  //我们要显示的页码数
  $size = 3;//如果总共有10页，只显示5页
    $conf=array('start','end');
    // 确定要从第几条记录开始获取
  $start = ($current-1)*$limit;
  $sql = "select * from wd_reg limit {$start},{$limit}";
  //$sql = "select * from student limit 0,{$limit}";
  $reg_data = get_all($sql);
  //p($cases_data);die

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>案例列表</title>
  <?php include('header.php');?>
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
        <li class="active">账户管理</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">账户管理</div>
                  <a href="wd_reg_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加账户</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center">
                          <a class="btn btn-gray btn-sm" id="selectAll">全选</a></th>
                        <th>编号</th>
                        <th>账户名</th>	
                        <th>密码</th>					            
                        <th>是否显示</th>
                        <th>最后登录时间</th>
                        <th width="200">操作</th>
                      </tr>s
					        <?php foreach($reg_data as $val){?>
                    	<tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td><?php echo $val['reg_id'];?></td>
                        <td><?php echo $val['reg_name'];?></td>   
                        <td><?php echo $val['password'];?></td>
                        <td><?php echo $val['is_show'];?></td>
                        <td><?php echo $val['addtime'];?></td>
                        <td>
		                      <div class="btn-group">				
		                        <a href="" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
		                        <a onclick="return confirm('确定要删除吗？');" href="?del=1&reg_id=<?php echo $val['reg_id'];?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
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
                  <!--<div class="pull-right">
                    <ul class="pagination" id="paginator-example">
                      <li><a href="#">&lt;</a></li>
                      <li><a href="#">&lt;&lt;</a></li>
                      <li><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&gt;</a></li>
                      <li><a href="#">&gt;&gt;</a></li>
                    </ul>
                  </div> -->
                  
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