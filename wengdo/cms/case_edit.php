<?php
    include('../config/common.conf.php');
          $sql = 'select * from wd_case_cat';
		$cat_data = get_all($sql);

if(!empty($_GET['update'])){
  $case_id = $_GET['case_id'];
  $sql = 'select * from wd_cases where case_id = '.$case_id;
 //p($sql);die;
  $case_info = get_one($sql);
 //p($case_info);die;
  }else{
  show_msg('非法进入','case_list.php');die;
  }
if(isset($_POST['active'])&&!empty($_POST['active'])){
  // p($_POST);die;
    $case_id = $_POST['case_id'];
    $data['case_title'] = $_POST['title'];
    $data['case_content'] = $_POST['content'];
    $data['case_url'] = $_POST['web'];
    $data['is_show'] = $_POST['is_show'];
    $data['case_class'] = $_POST['cat_id'];
    $data['addtime'] = time();
    //p($data);die;
    if($_FILES){
    //接收file标签传过来的信息
    //判断，如果是多文件上传那么我们就需要遍历$_FILES这个数字，将数组里面的文件一一上传
       $name = $_FILES;//确定我们file标签里面的名字name值
          //p($name);die;
        $type = array('png','jpg','gif');//确定上传的类型，获取我们想要的文件类型
        $size = 5*1024*1024;//确定文件大小
        $path = BOOT_PATH.'/images';//确定存放文件的路径
      // p($name);die;
        foreach($name as $key =>$val){
            //跳过没有上传的文件
            if(empty($val['name'])){
              continue;
            }
            //将我们的文件上传
            $res = uploads($key,$type,$size,$path);
            if(!isset($res[1])){
              show_msg($res[0]);die;
            }
            $old_url = $path.'/'.$_POST['old_'.$key];
            //p($old_url);die;
            unlink($old_url);//上传成功就会旧历史
            // print_r()
            // 将我们的上传文件的文件名存到data里面去
            $data[$key]=$res[1];
        }
    }
//p($data);die;
    $table = 'wd_cases';
    $where = 'case_id = '.$case_id;
    $res = update($table,$data,$where);
    if($res){
      show_msg('修改成功','case_list.php');
    }else{
      show_msg('修改失败');
    }
   // print_r($data);die;
}   

?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>CMS内容管理系统</title>
  <meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Core CSS  -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/glyphicons.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <link rel="stylesheet" type="text/css" href="css/pages.css">
  <link rel="stylesheet" type="text/css" href="css/plugins.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">


  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
    <a href="login.php" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
  </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main"> 
    <!-- Start: Sidebar -->
  <aside id="sidebar" class="affix">
    <div id="sidebar-search">
        
    </div>
    <div id="sidebar-menu">
      <ul class="nav sidebar-nav">
        <li>
          <a href="index.php"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>
        <li>
          <a href="news_list.php"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">资讯管理</span></a>
        </li>
        <li>
          <a href="case_list.php"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">案例管理</span></a>
        </li>
        <li>
          <a href="category_list.php"><span class="glyphicons glyphicon-credit-card"></span><span class="sidebar-title">分类</span></a>
        </li>
        <li>
          <a href="website.php"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">网站信息</span></a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- End: Sidebar -->    
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">编辑案例</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">编辑案例</div>
              <div class="panel-btns pull-right margin-left">
              <a href="case_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
            <div class="panel-body">
            	  <div class="col-md-7">
                          
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">所属分类</span>
                    <select name="cat_id" class="form-control">
                          <?php foreach($cat_data as $val){?>
                          <option value="<?php echo $val['cat_id'];?>" 
						  <?php echo $val['cat_id']==$case_info['case_class']?'selected':'';?>>
						  <?php echo $val['case_cat_title'];?>
						  </option>
                          <!-- <option value="2">电子商务</option> -->
                          <?php }?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">标题</span>
                    <input type="text" name="title" value="<?php echo $case_info['case_title'];?>" class="form-control">
                  </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">图片</span>
                    <input type="file" name="case_img" id="aaa" value="<?php echo $case_info['case_img'];?>" class="form-control" >
                    <img width="100px" height="100" src="<?php echo WEB_PATH.'/images/'.$case_info['case_img'];?>">
                </div>
                <input type="hidden" name="old_case_img" value="<?php echo $case_info['case_img'];?>">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">内容</span>
                    <input type="text" name="content" value="<?php echo $case_info['case_content'];?>" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">网址</span>
                    <input type="text" name="web" value="<?php echo $case_info['case_url'];?>" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">是否显示</span>
                    <select name="is_show" class="form-control">
                          <option value="1" <?php echo 1==$case_info['is_show']?'selected':'';?>>显示</option>
                          <option value="2" <?php echo 2==$case_info['is_show']?'selected':'';?>>隐藏</option>
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <textarea style="width:100%;height:150px;"></textarea>
                </div>
                <input type="hidden" name="case_id" value="<?php echo $case_info['case_id'];?>">
                <div class="col-md-7">
	                <div class="form-group">
	                  <input type="submit" value="提交" name="active"  class="submit btn btn-blue">
	                </div>
                </div>
            </div>
          </div>
          </form>
        </div>
    </div>
  </section>
  <!-- End: Content --> 
</div>
</body>

</html>