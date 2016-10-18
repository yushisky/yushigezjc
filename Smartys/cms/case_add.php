<?php
			include('smarty.conf.php');
		#页面输出方式 assign 方法是将我们的数据传送到模板里面
		// $smarty->assign('nav_data',$nav_data);
		#确定我们要加载的文件
		//$smarty->assign('key',$table);
		//$smarty->display('test.html');
		//页面输出方式分离公共部分
		//$smarty->display('index.html');
		//===========================================================
		//提交添加内容信息
		// include('include/common.conf.php');
			//==与$_post数据连接
			if($_POST){
			    // p($_POST);die;
			    $id = $_POST['id'];
			    $title = $_POST['title'];
			    $author = $_POST['author'];
			    $content = $_POST['content'];
			    $click = $_POST['click'];
			    $is_show = $_POST['is_show'];
			    $time = $_POST['time'];
			//获取数据库名给予赋值=========
			    $data = array(
			      'cat_id'=>$id,
			      'title'=>$title,
			      'author'=>$author,
			      'content'=>$content,
			      'click'=>$click,
			      'is_show'=>$is_show,
			      'addtime'=>$time,
			    );
			     // print_r($data);die;
			    $table = 'wd_article1';//获取数据库名
			    $res = $conn-> add($table,$data);
			     // print_r($res);die;
			    if($res){
			      show_msg('提交成功','case_list.php');
			    }else{
			      show_msg('提交失败');die;
			    }
			  }
		//页面输出方式分离公共部分	  
		$smarty->display('case_add.html');
?>