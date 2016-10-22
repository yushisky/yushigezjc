<?php
		//==========引用函数库============
		include('pagination.php');
		require '../config/common.conf.php';
		//链表查询案列的所有数据--------------
		$sql='select * from wd_news';
		$cases_data=get_all($sql);
		//p($cases_data);die;
		//=======================删除功能===========
		if(!empty($_GET['del'])){
			$new_id = $_GET['new_id']+0;
			$sql = "delete from wd_news where new_id =" .$new_id;
			//print_r($sql);die;
			$res = mysql_query($sql);
			if(mysql_affected_rows()>0){
				echo "<script>alert('删除成功！');location.href='news_list.php';</script>";				
			}else{
				echo "<script>alert('删除失败！');location.href='news_list.php';</script>";
			}
		}
	//================页码插件========================================
	$sql_count = "select count(*) as c from wd_news";
	$count = get_one($sql_count);
	$total = $count['c'];
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
	$sql = "select * from wd_news limit {$start},{$limit}";
	//$sql = "select * from student limit 0,{$limit}";
	$news_data = get_all($sql);
	//p($cases_data);die;
	//==========删除多个记录==================
	//删除多条记录
			if(!empty($_POST)){

			 //p($_POST);die;
			  $table = 'wd_news';//确定我们的表名
			  $data = $_POST['idarr'];//获取我们需要删除的id
			  foreach ($data as $val) {//循环遍历删除
			    $where = 'new_id ='.$val;//确定我们的删除条件
			    $res = del($table,$where);//调用删除函数			
			  }
			  //print_r($res);
			  if($res){
			    $str = '删除成功';
			    $url = 'news_list.php';
			    show_msg($str,$url);
			  }else{
			    $str = '删除失败';
			    show_msg($str);
			  }
			  // die;
			}

?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>CMS内容管理系统</title>
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
        <li class="active">新闻管理</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">新闻列表</div>
                  <a href="news_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加新闻</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center">
                          <a class="btn btn-gray btn-sm" id="selectAll">全选</a>
                        </th>
						<th>id编号</th>
                        <th>标题</th>
						<th>内容</th>
						<th>是否显示</th>
						<th>分类</th>
                        <th>添加时间</th>
                        <th width="200">操作</th>
                      </tr>
					  <?php foreach($news_data as $key=>$val){?>
                    <tr class="success">
                        <td class="text-center"><input type="checkbox" value="<?php echo $val['new_id'];?>" name="idarr[]" class="cbox"></td>
						<td><?php echo $val['new_id'];?></td>
                        <td><?php echo $val['new_title'];?></td>
						<td><?php echo cutstr($val['new_label'],0,8,'...');?></td>
						<td><?php echo $val['is_show']==1?'显示':'隐藏';?></td>
						<td><?php echo $val['new_class'];?></td>
                        <td><?php echo $val['addtime'];?></td>
                        <td>
		                      <div class="btn-group">
		                        <a href="news_edit.php?del=1&new_id=<?php echo $val['new_id'];?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
		                        <a onclick="return confirm('确定要删除吗？');" href="?del=1&new_id=<?php echo $val['new_id'];?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
		                      </div>
                        </td>
                      </tr>
                      <?php }?>
                  </table>
                  
                  <div class="pull-left">

                    <button type="submit" onclick="return confirm('确定要删除吗？'); "class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>



                  </div>
                  <?php
						//$conf=array();
					$conf=array('start','end');
                pagination($total,$current,$limit,$size,$conf,"digg");
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