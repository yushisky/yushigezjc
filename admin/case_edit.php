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
if(empty($_SESSION['is_login'])){
    session_start();
 // print_r($_SESSION['is_login']);die;
    show_msg('非法进入','login.php');die;
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
        <li class="active">编辑案例</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">编辑案例</div>
              <div class="panel-btns pull-right margin-left">
              <a href="case_list.html" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
            <div class="panel-body">
            	  <div class="col-md-7">
                          
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">所属分类</span>
                    <select name="iid" class="form-control">
                          <option value="1">企业网站</option>
                          <option value="2">电子商务</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">案例名称</span>
                    <input type="text" name="title" value="这是一篇案例名称" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">案例描述</span>
                        <input type="text" name="author" value="" class="form-control">
                    </div>
                </div>
                </div>
                <div class="form-group col-md-12">
                  <textarea style="width:100%;height:150px;"></textarea>
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