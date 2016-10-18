<?php
  include('../config/common.conf.php');
    if(!empty($_GET['update'])){
      $new_id = $_GET['new_id'];
      $sql = 'select * from mh_newstext where new_id = '.$new_id;
     //p($sql);die;
      $new_info = get_one($sql);
      // echo WEB_PATH.'/images/'.$banner_info['banner_img_url'];die;
     //p($case_info);die;
      }else{
      show_msg('非法进入','newstext_list.php');die;
      }
    if(isset($_POST['active'])&&!empty($_POST['active'])){
      // p($_POST);die;
      // new_title
        $new_id = $_POST['new_id'];
        $data['new_title'] = $_POST['title'];
        $data['new_author'] = $_POST['author'];
        $data['class'] = $_POST['class'];
        $data['is_show'] = $_POST['is_show'];
        $data['addtime'] = time();
        // p($data);die;
        if($_FILES){
        //接收file标签传过来的信息
        //判断，如果是多文件上传那么我们就需要遍历$_FILES这个数字，将数组里面的文件一一上传
       $name = $_FILES;//确定我们file标签里面的名字name值
          // p($name);die;
        $type = array('png','jpg','gif');//确定上传的类型，获取我们想要的文件类型
        $size = 5*1024*1024;//确定文件大小
        $path = BOOT_PATH.'/images';//确定存放文件的路径
       // p($path);die;
        foreach($name as $key =>$val){
            //跳过没有上传的文件
            if(empty($val['name'])){
              continue;
            }
            //将我们的文件上传
            $res = uploads($key,$type,$size,$path);
           // P($res);die;
            if(!isset($res[1])){
              show_msg($res[0]);die;
            }
             $old ='old_'. $key;
             // p($old);die;
            $old_url = $path.'/'.$_POST[$old];
            // unlink($old_url);//上传成功就会旧历史
            //将我们的上传文件的文件名存到data里面去
            $data[$key]=$res[1];
            // // $old_url = $path.'/'.$_POST['old_'.$key];
            // // p($old_url);die;
        }
    }
    // p($res);die;
    $table = 'mh_newstext';
    $where = 'new_id = '.$new_id;
     // p($data);die;
    $res = update($table,$data,$where);
    // p($res);die;
    if($res){
      show_msg('修改成功','newstext_list.php');
    }else{
      show_msg('修改失败');
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
<?php include('header.php');?>
  <!-- Core Javascript - via CDN --> 
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
        <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">编辑案例</div>
              <div class="panel-btns pull-right margin-left">
              <a href="newstext_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
            <div class="panel-body">
            	  <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">所属分类</span>
                    <select name="class" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">标题</span>
                    <input type="text" name="title" value="<?php echo $new_info['new_title']?>" class="form-control">
                  </div>
                </div>
                 <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">作者</span>
                    <input type="text" name="author" value="<?php echo $new_info['new_author']?>" class="form-control">
                  </div>
                </div>
                
                 <div class="input-group">
                    <span class="input-group-addon">图片</span>
                    <input type="file" name="new_img" id="aaa" value="<?php echo $new_info['new_img'];?>" class="form-control" >
                    <img width="100px" height="100" src="<?php echo WEB_PATH.'/images/'.$new_info['new_img'];?>">
                    <input type="hidden" name="old_new_img" value="<?php echo $new_info['new_img']?>">
                </div>
                <div class="form-group"></div>
                <div style="clear:both;"></div>
                 <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">是否显示</span>
                    <select name="is_show" class="form-control">
                          <option value="1"<?php echo 1==$new_info['is_show']?'selected':'';?>>显示</option>
                          <option value="2"<?php echo 2==$new_info['is_show']?'selected':'';?>>隐藏</option>
                    </select>
                  </div>
                  </div>
                  <div class="input-group"> 
                  <span class="input-group-addon">更新时间</span>
                    <input class="form-control date-picker" id="class_code_cc_time_input" type="text" data-date-format="yyyymmdd" name="time" value="<?php echo $new_info['addtime'];?>">
                </div>
                  
                </div>
                </div>
                <div class="form-group col-md-12">
                </div>
                <input type="hidden" name="active" value="1">
                <input type="hidden" name="new_id" value="<?php echo $new_info['new_id'];?>">
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
<script>
    $('#summernote').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });
  </script>