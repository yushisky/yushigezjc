<?php
		include('../config/common.conf.php');
		session_start();
		unset($_SESSION['is_login']);
		unset($_SESSION['admin_id']);
		echo "<script>alert('退出成功！');location.href='login.php';</script>";
?>