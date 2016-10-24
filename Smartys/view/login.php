<?php
	include('smarty.conf.php');
		if(isset($_POST)&&!empty($_POST)){
        $name = $_POST['username'];
       // $pass =$_POST['password'];
         $pass = MD5($_POST['password']);
         $sql = "select * from wd_user1 where username ='{$name}'and password ='{$pass}'";
          // p($sql);
          $res =$conn->get_one($sql);
          // $res = get_one($sql);
          //v($res);die;
          if($res){
            // $_SESSION['is_login']=$res['reg_id'];
            show_msg('登录成功！','index1.php');die;
          }else{
            show_msg('登录失败！');
          }
    }


	$smarty->display('login.html');
  ?>
