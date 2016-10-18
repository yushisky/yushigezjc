<?php
		include('smarty.conf.php');
		#页面输出方式 assign 方法是将我们的数据传送到模板里面
		// $smarty->assign('nav_data',$nav_data);
		#确定我们要加载的文件
		//$smarty->assign('key',3);
		//$smarty->display('test.html');
		//页面输出方式分离公共部分
		//$smarty->display('index.html');
		//===========================================================
		//提交添加内容信息
		// include('include/common.conf.php');
			//==与$_post数据连接
			if($_POST){
			    // p($_POST);die;
			    $name = $_POST['username'];
			    $email = $_POST['email'];
			    $title = $_POST['title'];
			    $content = $_POST['content'];
			//获取数据库名给予赋值=========
			    $data = array(
			      'username'=>$name,
			      'email'=>$email,
			      'title'=>$title,
			      'content'=>$content,
			    );
			     // print_r($data);die;
			    $table = 'wd_msg1';//获取数据库名
			    $res = $conn-> add($table,$data);
			     // print_r($res);die;
			    if($res){
			      show_msg('提交成功','guestbook.php');
			    }else{
			      show_msg('提交失败');die;
			    }
			  }
			
		//页面输出方式分离公共部分	  
		$smarty->display('guestbook.html');

?>