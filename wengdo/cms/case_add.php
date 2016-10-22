<?php 
   //==============
    include('../config/common.conf.php');
      ////===0606==图片上传===========
      $sql = "select * from wd_case_cat";
      $cat_data = get_all($sql);
      //p($cat_data);die;
      ////==与$_post数据连接
      if($_POST){
       // p($_POST);die;
        $title = $_POST['title'];
        $content  = $_POST['content'];
        $wed = $_POST['wed'];
         $is_show  = $_POST['is_show'];
          $class  = $_POST['class'];
          $time = time();
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
     // $data
      //插入的数据/获取数据库表名给予赋值=========
      $data['case_title'] = $title;
      $data['case_content'] = $content;
      $data['case_url'] = $wed;
      $data['case_class'] = $class;
      $data['is_show'] = $is_show;
      $data['addtime'] = $time;
          //P($data);die;

        $table = 'wd_cases';
      $result = add($table,$data);
       // P($result);die;
      if($result){  
        show_msg('添加成功','case_list.php');
      }else{
        show_msg('添加失败');
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
        <li class="active">添加案例</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">添加案例</div>
              <div class="panel-btns pull-right margin-left">
              <a href="case_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
            <div class="panel-body">
            	  <div class="col-md-7">
                 <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">所属分类</span>
                    <select name="class" class="form-control">
                    <?php foreach ($cat_data as  $val) {?>
                          <option value="<?php echo $val['cat_id'];?>"><?php echo $val['case_cat_title'];?></option>
                         <?php }?>  
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">标题</span>
                        <input type="text" name="title" value="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">内容</span>
                        <input type="text" name="content" value="" class="form-control">
                    </div>
                </div>
                        <!-- case_img 不用变量直接插入-->
                <div class="input-group">
                    <span class="input-group-addon">图片路径</span>
                    <input type="file" name="case_img" value="" class="form-control" >
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">网址</span>
                        <input type="text" name="wed" value="" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">是否显示</span>
                    <select name="is_show" class="form-control">
                          <option value="1">显示</option>
                          <option value="2">隐藏</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">更新时间</span>
                        <input type="date" name="date" value="" class="form-control">
                    </div>
                </div>
                <div class="input-group">
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