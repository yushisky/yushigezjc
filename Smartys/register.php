<?php
			include('smarty.conf.php');
			  if($_POST){
			    // p($_POST);die;
			    $username = $_POST['username'];
			    $pass = MD5($_POST['pass']);
			    $repass = MD5($_POST['repass']);
			    $content = $_POST['content'];
			     $email = $_POST['email'];
			     $sex = $_POST['sex'];
			    if($pass != $repass){
			      show_msg('密码不一致');die;
			    }
			    $data = array(
			      'username'=>$username,
			      'password' =>$pass,
			      'email' =>$email,
			      'content'=>$content,
			      'sex'=>$sex,
			    );
			    $table = 'wd_user1';
			    $res =$conn->add($table,$data);
			    if($res){
			      show_msg('注册成功');die;
			    }else{
			      show_msg('注册失败');die;
			    }
			  }
			$smarty->display('register.html');
?>