<?php
	session_start();
	if(empty($_SESSION['is_login'])){
         echo "<script>alert('非法进入');location.href='login.php';</script>";
      }
?>