<?php
	include('smarty.conf.php');
		if(isset($_POST)&&!empty($_POST)){
        $name = $_POST['username'];
       // $pass =$_POST['password'];
         $pass = MD5($_POST['password']);
         $sql = "select * from wd_user1 where username ='{$name}'and password ='{$pass}'";
        	// print_r($sql);die;
          $res = $conn->get_one($sql);
         // echo $res;die;
          if($res){
            // $_SESSION['is_login']=$res['reg_id'];
            show_msg('登陆成功！','user_info.php');die;
          }else{
            show_msg('登陆失败！');
          }
    }

$smarty->display('login.html');
?>
