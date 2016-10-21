<?php 
  //==============================================
    include('pagination.php');
    include('../config/common.conf.php');
    //===========================================================
//提交添加内容信息
//==与$_post数据连接
if($_POST){
    // p($_POST);die;
    $title = $_POST['title'];
    $label = $_POST['label'];
    $date = $_POST['date'];
    $mintitle = $_POST['mintitle'];
    $class = $_POST['class'];
    $is_show = $_POST['is_show'];
//获取数据库名给予赋值=========
    $data = array(
      'new_title'=>$title,
      'new_label'=>$label,
      'new_date'=>$date,
      'new_mintitle'=> $mintitle,
      'new_class'=> $class,
       'is_show'=> $is_show,
    );
    if($_FILES){
      // p($_FILES);die;        
        foreach ($_FILES as $key => $val) {
         $name = $key;//确定我们的file标签里面的名字name值
        $type =array('png','jpg','gif');
        $size =5*1024*1024;
        $path = BOOT_PATH.'../images';//确定存放文件的路径
        //将我们的文件上传
        // p($path);
        $res =uploads($name,$type,$size,$path);
      // p($res);die;
        if(!isset($res[1])){
          show_msg($res[0]);die;
        }
          // p($res);die;
          $data[$key]=$res[1];
      }
     // p($data);die;
    $table = 'wd_news';//获取数据库名
    // p($table);die;
    $res = add($table,$data);
    // p($res);die;
    if($res){
      show_msg('添加成功','index_news.php');die;
    }else{
      show_msg('添加失败');die;
    }
  }
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

  <!-- form CSS -->
  <!-- <link rel="stylesheet" type="text/css" href="css/form.css"> -->
  <link rel="stylesheet" type="text/css" href="css/form.min.css">

  <!-- Boxed-Layout CSS -->
  <link rel="stylesheet" type="text/css" href="css/boxed.css">

  <!-- Demonstration CSS -->
  <link rel="stylesheet" type="text/css" href="css/demo.css">

  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script src="http://cdn.gbtags.com/twitter-bootstrap/3.2.0/js/bootstrap.js"></script>
  <script src="http://cdn.gbtags.com/summernote/0.5.2/summernote.min.js"></script>
  <link href="css/summernote.css" rel="stylesheet">
  <script src="js/summernote.min.js"></script>
  <style type="text/css">
    @import url('http://cdn.gbtags.com/twitter-bootstrap/3.2.0/css/bootstrap.css');
    @import url('http://cdn.gbtags.com/font-awesome/4.1.0/css/font-awesome.min.css');
    @import url('http://cdn.gbtags.com/summernote/0.5.2/summernote.css');
  </style>
  <style>
    .input-group {
      margin-top: 15px;
    }
    .check {
      padding: 5px 10px 5px 10px;
      background: #eee;
      border:solid 1px #ccc;
      margin-right: 10px;
    }
  </style>
  
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
      <?php include 'nav.php';?>
    </div>
  </aside>
  <!-- End: Sidebar -->    
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">添加新闻</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">添加新闻</div>
              <div class="panel-btns pull-right margin-left">
              <a href="wd_banner_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
             <div class="panel-body">
              <div class="col-md-7">      <!-- case_img 不用变量直接插入-->
                <div class="input-group">
                    <span class="input-group-addon">图片链接</span>
                    <input type="file" name="new_img" value="" class="form-control" >
                </div>
                </div>
                <div class="col-md-7">
                 <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">标题</span>
                        <input type="text" name="title" value="" class="form-control">
                    </div>
                </div>
                 </div>
                 <div class="col-md-7">
                 <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">小标题</span>
                        <input type="text" name="mintitle" value="" class="form-control">
                    </div>
                </div>
                 </div>
                 <div class="col-md-7">
                 <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">内容</span>
                        <input type="text" name="label" value="" class="form-control">
                    </div>
                </div>
                 </div>
                 <div class="col-md-7">
                 <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">类型</span>
                        <input type="text" name="class" value="" class="form-control">
                    </div>
                </div>
                 </div>
            	  <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">是否显示</span>
                    <select name="is_show" class="form-control">
                          <option value="1">显示</option>
                          <option value="2">隐藏</option>
                    </select>
                  </div>
                </div>
                 </div>
                  <div class="col-md-7">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">更新的时间</span>
                        <input type="text" name="date" value="" class="form-control">
                    </div>
                </div>
                </div>
                <div class="col-md-7">  
                </div>
                <div class="col-md-7">
	                <div class="form-group">
	                  <input type="submit" value="提交" class="submit btn btn-blue">
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
<script src="js/date-time/bootstrap-datepicker.min.js"></script>
<script src="js/common.unpre.js"></script>

 <!--<div class="input-group">
                  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-addon" id="basic-addon2">@example.com</span>
                </div>
                 
  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                <div class="form-group"></div>
                </div>
                <div style="clear:both;"></div>
                <div class="form-group"></div>
                  <div id="summernote">Hello Summernote</div>
                </div>
<script>
    $('#summernote').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });
  </script> -->