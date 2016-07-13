<?php 
        //==============================================
          // include('pagination.php');
          include('../config/common.conf.php');
          //===========================================================
      //提交添加内容信息
      //所以的赋值==与$_post数据连接
      if($_POST){
          // p($_POST);die;
          $title = $_POST['title'];
          $class = $_POST['class'];
          $is_show = $_POST['is_show'];
          $addtime = $_POST['time'];
      //获取数据库名给予赋值=========
          $data = array(
            'food_title'=>$title,
            'class'=>$class,
            'is_show'=>$is_show,
            'addtime'=>$addtime,
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
          $table = 'mh_food';//获取数据库名
          // p($table);die;
          $res = add($table,$data);
          // p($res);die;
          if($res){
            show_msg('添加成功','mh_food_list.php');die;
          }else{
            show_msg('添加失败');die;
          }
        }
      }
      // //阻止非法进入者
      //     if(empty($_SESSION['is_login'])){
      //     session_start();
      //  // print_r($_SESSION['is_login']);die;
      //     show_msg('非法进入','login.php');die;
      //   }
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
    <a href="login.html" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
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
      <?php include('nav.php');?>
    </div>
  </aside>
  <!-- End: Sidebar --> 
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">添加管理</li>
      </ol>
    </div>
    <div class="container">
	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">添加管理</div>
              <div class="panel-btns pull-right margin-left">
              <a href="mh_food_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
            <div class="panel-body">
            	  <div class="col-md-7">
            <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">所属分类类型</span>
                    <select name="class" class="form-control">
                          <option value="1">特色美食1组</option>
                          <option value="2">特色美食2组</option>
                          <option value="3">特色美食3组</option>
                          <option value="4">特色美食4组</option>
                          <option value="5">特色美食5组</option>
                          <option value="6">特色水果组</option>
                          <option value="车型展示1">车型展示1组</option>
                          <option value="车型展示2">车型展示2组</option>
                          <option value="车型展示3">车型展示3组</option>
                          <option value="车型展示4">车型展示4组</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">美食名称</span>
                    <input type="text" name="title" value="" class="form-control">
                  </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">图 &nbsp&nbsp&nbsp&nbsp   片</span>
                    <input type="file" name="img_url" value="" class="form-control" >
                </div>
                 <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">是否显示</span>
                    <select name="is_show" class="form-control">
                          <option value="1">显示</option>
                          <option value="2">隐藏</option>
                    </select>
                  </div>
                </div>
                <div class="input-group"> 
                  <span class="input-group-addon">时间</span>
                    <input class="form-control date-picker" id="class_code_cc_time_input" type="text" data-date-format="yyyymmdd" name="time" value="">
                </div>
                <div class="form-group"></div>
                <div style="clear:both;"></div>
                <div class="form-group"></div>
                <div class="col-md-7">
	                <div class="form-group">
	                  <input type="submit" value="提交" class="submit btn btn-blue">
	                </div>
                </div>
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
<script>
    $('#summernote').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });
  </script>