<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/glyphicons.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/theme.css">
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/pages.css">
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="/Public/admin/css/responsive.css">


  <!-- Your Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  
  <!-- Core Javascript - via CDN --> 
  <script type="text/javascript" src="/Public/admin/js/jquery.min.js"></script> 
</head>
 <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script src="http://cdn.gbtags.com/twitter-bootstrap/3.2.0/js/bootstrap.js"></script>
  <script src="http://cdn.gbtags.com/summernote/0.5.2/summernote.min.js"></script>
  <link href="/Public/admin/css/summernote.css" rel="stylesheet">
  <script src="/Public/admin/js/summernote.min.js"></script>
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
<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="/Public/admin/images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span> <?php echo session('username');?></a>
    <a href="<?php echo U('admin/index/session');?>" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
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
          <a href="index.html"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
        </li>
         <li>
          <a href="<?php echo U('admin/index/artcat');?>"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">文章分类</span></a>
        </li>
        <li>
          <a href="<?php echo U('admin/index/article_list');?>"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">行业知识</span></a>
        </li>
        <li>
          <a href="<?php echo U('admin/index/message_list');?>"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">客户留言</span></a>
        </li>
        <li>
          <a href="news_list.html"><span class="glyphicons glyphicon-file"></span><span class="sidebar-title">资讯管理</span></a>
        </li>
        <li>
        
          <a href="case_list.html"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">案例管理</span></a>
        </li>
        <li>
          <a href="category_list.html"><span class="glyphicons glyphicon-credit-card"></span><span class="sidebar-title">分类</span></a>
        </li>
        <li>
          <a href="website.html"><span class="glyphicons glyphicon-paperclip"></span><span class="sidebar-title">网站信息</span></a>
        </li>
      </ul>
    </div>
  </aside>
<script src="/Public/admin/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="/Public/admin/js/common.unpre.js"></script>
<script>
    $('#summernote').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });
  </script>


 <!-- End: Sidebar -->   
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">文章分类管理</li>
      </ol>
    </div>
    <div class="container">
	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">文章分类</div>
                  <a href="<?php echo U('article_add');?>" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加分类</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center" width="100">
                          <a class="btn btn-gray btn-sm" id="selectAll">全选</a></th>
                        <th>文章标题</th>
                        <th>文章内容</th>
                         <th>更新时间</th>
                        <th width="200">操作</th>
                      </tr>
                       <?php if(is_array($Artc_data)): foreach($Artc_data as $key=>$val): ?><tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                          <td><?php echo ($val["article_title"]); ?></td>
                          <td><?php echo ($val["article_content"]); ?></td>
                          <td><?php echo (date("y-m-d",$val["article_addtime "])); ?></td>
                        <td>
		                      <div class="btn-group">
		                        <a href="<?php echo U('article_edit');?>?update=1&id=<?php echo ($val["id"]); ?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
		                        <a onclick="return confirm('确定要删除吗？');" href="?del=1&id=<?php echo ($val["id"]); ?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
		                      </div>
                        </td>
                      </tr><?php endforeach; endif; ?>
                  </table>
                  
                  <div class="pull-left">
                  	<button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                  </div>
                  <div class="pull-right">

                    <ul class="pagination" id="paginator-example">
                      <?php echo ($Page); ?>
                      
                    </ul>
                  </div>
                  
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