<?php
  require('../config/common.conf.php');
     //接收传过来的数据
  if(!empty($_GET)){
    //print_r($_GET);die;
    $news_id = $_GET['nesws_id'];//通过id去查询要修改的信息
    $sql = 'select * from wd_nsews where news_id ='.$news_id;
    $change_data = get_one($sql);
     //p($change_data);die;
  }
  else{
    show_msg('非法进入');
  }
   if(empty($title)){
    show_msg('标题不能为空');die;
   }
   
   if(!empty($_POST)){

        $title = trim($_POST['title']);
        $label = $_POST['label'];      
       $data = strtotime($_POST['date']);      
        $is_show = $_POST['is_show'];
        $content = $_POST['content'];       
         $order = $_POST['order'];
         $new_id = $_POST['new_id'];
    //唯一性的判断,判断标题
    $sql = 'select * from wd_news where 
    new_title ="'.$_POST['title'].'"';
      //p($_POST);die; //and wd_news =' .news_id
    $res = get_one($sql);
    if($res){
      $str = '标题重复了';
      show_msg($str);die;
    }
         
           $sql = "update wd_news set new_title = '{$title}',new_label = '{$label}',addtime = '{$data}',is_show = '{$is_show}',new_img ='{$content}',new_order = '{$order}' where new_id = '{$new_id}'";
        //p($sql);die;
    $res = mysql_query($sql);
   //print_r($res);die;
    if(mysql_affected_rows()>0&&$res){
      $str="修改成功";
      $url = 'news_list.php';
      show_msg($str,$url);
    }else{
      $str = '修改失败';
      show_msg($str);
    }
    // p($_POST);die;
  }
 
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>编辑页面</title>
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
        <li class="active">编辑资讯</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform" class="glyphicon glyphicon-home">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">编辑资讯</div>
              <div class="panel-btns pull-right margin-left">
              <a href="news_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
            <div class="panel-body">
            	  <div class="col-md-7">
                  <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">标题</span>
                      <input type="text" name="title" value="<?php echo $change_data['new_title'];?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                      <div class="input-group"> <span class="input-group-addon">简介</span>
                          <input type="text" name="label" value="<?php echo $change_data['new_label'];?>" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">日期</span>
                      <input type="date" name="date" value="<?php echo date('Y-m-d',$change_data['new_date']);?>" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                      <div class="input-group"> <span class="input-group-addon">排序</span>
                          <input type="text" name="order" value="<?php echo $change_data['new_order'];?>" class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="input-group"> <span class="input-group-addon">是否显示</span>
                      <select name="is_show" class="form-control">
                          <option value="2"<?php echo $change_data['is_show']==1?'selected':''?>>隐藏</option>
                          <option value="1" <?php echo $change_data['is_show']==1?'selected':''?>>显示</option>
                          
                    </select>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="input-group"> <span class="input-group-addon">分类</span>
                          <input type="text" name="mintitle" value="<?php echo $change_data['new_class'];?>" class="form-control">
                      </div>
                  </div>
                  
                </div>
                <div class="form-group col-md-12">
                <span class="input-group-addon">新闻图片</span>
                  <textarea  id="content-text" style="width:100%;height:150px;" name="content"><?php echo $change_data['new_img'];?></textarea>
                </div>
                <input type="hidden" name="new_id" value="<?php echo $change_data['new_id'];?>">
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