<?php
    include('../config/common.conf.php');
 //p($sql);die;
if(!empty($_GET['new_id'])){
  $new_id = $_GET['new_id'];
  $sql = 'select * from wd_news where new_id = '.$new_id;
 // p($sql);die;
  $new_info = get_one($sql);
 // p($new_info);die;
  }else{
  show_msg('非法进入','index_news.php');die;
  }
if(isset($_POST['active'])&&!empty($_POST['active'])){
  // p($_POST);die;
    $new_id = $_POST['new_id'];
    $data['new_title'] = $_POST['title'];
    $data['new_label'] = $_POST['label'];
    $data['new_date'] = $_POST['date'];
     $data['new_mintitle'] = $_POST['mintitle'];
    $data['new_class'] = $_POST['class'];
    $data['is_show'] = $_POST['is_show'];
    // $data['addtime'] = time();
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
    $table = 'wd_news';
    $where = 'new_id = '.$new_id;
     // p($data);die;
    $res = update($table,$data,$where);
    // p($res);die;
    if($res){
      show_msg('修改成功','index_news.php');
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
      <?php include('nav.php');?> </ul>
    </div>
  </aside>
  <!-- End: Sidebar -->    
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">新闻修改</li>
      </ol>
    </div>
    <div class="container">

   <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform" enctype="multipart/form-data">
          <div class="panel">
            <div class="panel-heading">
              <div class="panel-title">新闻修改</div>
              <div class="panel-btns pull-right margin-left">
              <a href="index_news.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="col-md-7">
                     <!-- case_img 不用变量直接插入-->
                 <div class="input-group"></div>
                <div class="input-group">
                    <span class="input-group-addon">图片</span>
                    <input type="file" name="new_img" id="aaa" value="<?php echo $new_info['new_img'];?>" class="form-control" >
                    <img width="100px" height="100" src="<?php echo WEB_PATH.'/images/'.$new_info['new_img'];?>">
                    <input type="hidden" name="old_banner_img_url" value="<?php echo $new_info['new_img']?>">
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">标题</span>
                    <input type="text" name="title" value="<?php echo $new_info['new_title'];?>" class="form-control">
                  </div>
                </div>
                 <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">小标题</span>
                    <input type="text" name="mintitle" value="<?php echo $new_info['new_mintitle'];?>" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">内容</span>
                    <input type="text" name="label" value="<?php echo $new_info['new_label'];?>" class="form-control">
                  </div>
                </div>
                 <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">图片类型</span>
                     <input type="text" name="class" value="<?php echo $new_info['new_class'];?>" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">是否显示</span>
                    <select name="is_show" class="form-control">
                          <option value="1" <?php echo 1==$new_info['is_show']?'selected':'';?>>显示</option>
                          <option value="2" <?php echo 2==$new_info['is_show']?'selected':'';?>>隐藏</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">发布时间</span>
                        <input type="date" name="date" value="<?php echo $new_info['new_date'];?>" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="active" value="1">
                <input type="hidden" name="new_id" value="<?php echo $new_info['new_id'];?>">
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