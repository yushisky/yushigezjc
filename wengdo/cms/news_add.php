<?php
  //====添加数据字段=================
    require('config/common.conf.php');
    if($_POST){
      //print_r($_POST);//die;
        $title = $_POST['title'];
        $label = $_POST['label'];        
        $date = strtotime($_POST['date']);      
        $is_show = $_POST['is_show'];
        $mintitle =$_POST['mintitle'];
        $content = $_POST['content'];
        $addtime = time();//获取当前的时间戳   
         $order = 1;
         $img= "aa";                    
        $sql="insert into wd_news(new_title,new_label,new_content,new_date,new_order,is_show,addtime,new_mintitle)
	values('{$title}','{$label}','{$content}','{$date}','{$order}','{$is_show}','{$addtime}','{$mintitle}')";
        //print_r($sql);die;
        $res = mysql_query($sql);
		//print_r($res);die;
        if(mysql_insert_id()>0&&!empty($res)){
        echo"<script>alert('添加新闻成功');</script>";
        }else{
          echo"<script>alert('添加新闻失败');</script>";
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
 
<!-- End: Header -->
<?php include('header.php');?>
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
        <li class="active">添加资讯</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">添加资讯</div>
              <div class="panel-btns pull-right margin-left">
              <a href="news_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
            <div class="panel-body">
            	  <div class="col-md-7">
                  <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">标题</span>
                    <input type="text" name="title" value="" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">简介</span>
                    <input type="text" name="label" value="" class="form-control">
                  </div>
                </div>
				<div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">内容</span>
                    <input type="text" name="content" value="" class="form-control">
                  </div>
                </div>		
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">日期</span>
                    <input type="date" name="date" value="" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">排序</span>
                    <input type="text" name="order" value="" class="form-control">
                  </div>
                </div>
				
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">是否显示</span>
                    <input type="text" name="is_show" value="" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">小标题</span>
                        <input type="text" name="mintitle" value="" class="form-control">
                    </div>
                </div>
                </div>
                <div class="form-group col-md-12">
                  <textarea style="width:100%;height:150px;" id="editor" name=""></textarea>
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
<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor',{toolbars:[
          ['snapscreen','fullscreen','source','undo','redo'],
          ['bold','italic','underline','formboder','strikethroudh','suoerscript','subscript','removeformat'
            ,'formatmatch','autotypeset'
          ]


      ]});
</script>

</html>