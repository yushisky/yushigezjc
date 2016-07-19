<?php
	include('smarty.conf.php');
	if(!empty($_GET['update'])){
  		$id = $_GET['id'];
  		 $sql = 'select * from wd_article1 where id = '.$id;
			 // p($sql);die;
			  $info = $conn->get_one($sql);
			  // print_r($info);die;
			  // echo WEB_PATH.'/images/'.$banner_info['banner_img_url'];die;
			 // p($detail_info);die;
  }else{
  show_msg('非法进入','case_list.php');die;
  }
if(isset($_POST['active'])&&!empty($_POST['active'])){
	// print_r($_POST);die;
          $cat_id = $_POST['cat_id'];
          $title = $_POST['title'];
          $author = $_POST['author'];
          $content = $_POST['content'];
          $click = $_POST['click'];
          $is_show = $_POST['is_show'];
          $time = $_POST['time'];
          $data = array(
			      'cat_id'=>$cat_id,
			      'title' =>$title,
			      'author' =>$author,
			      'content'=>$content,
			      'click'=>$click,
			      'is_show' =>$is_show,
			      'addtime'=>$time,
			    );

    // p($data);die;
    $table = 'wd_article1';
    $where = 'id ='.$id;
     // p($where);die;
    $res = $conn->edit($table,$data,$where);
    // p($res);die;
    if($res){
      show_msg('修改成功','case_list.php');
    }else{
      show_msg('修改失败');
    }
	}
	$smarty->assign('info',$info);
	$smarty->display('case_edit.html');
?>