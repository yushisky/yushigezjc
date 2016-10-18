<?php
		header("Content-type:text/html;charset=utf-8");
		session_start();
		unset($_SESSION['is_login']);
		unset($_SESSION['admin_id']);
		unset($_SESSION['password']);
		echo "<script>alert('退出成功！');location.href='login.php';</script>";
?>