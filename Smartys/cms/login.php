<?php

	include('smarty.conf.php');
		if(isset($_POST)&&!empty($_POST)){
        $name = $_POST['username'];
       // $pass =$_POST['password'];
         $pass = md5($_POST['password']);
          $id = 'admin_id';
         $sql = "select * from wd_admin1 where username ='{$name}'and password ='{$pass}'";
        	// print_r($sql);die;
          $res = $conn->get_one($sql);
         // echo $res;die;
         session_start();
          if($res!=0){
            $_SESSION['is_login']= $res['admin_id'];
            show_msg('登陆成功！','index.php');die;
          }else{
            show_msg('登陆失败！');
          }
    }

	// $this->load->library('session');
	$smarty->display('login.html');
?>
