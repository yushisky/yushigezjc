<?php
  include('config/common.conf.php');
    if(isset($_POST)&&!empty($_POST)){
        $name = $_POST['username'];
       // $pass =$_POST['password'];
         $pass = MD5($_POST['password']);
         $sql = "select * from wd_reg where reg_name ='{$name}'and password ='{$pass}'";
          // p($sql);
          $res = get_one($sql);
          //v($res);die;
           session_start();
          if($res!=0){
            $_SESSION['is_login']= $res['reg_id'];
            // print_r($_SESSION);die;
            show_msg('登录成功！',"user_center.php");die;
          }else{
              include('session.php');
            show_msg('登录失败！');
          }
         
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录界面</title>
    <link rel="stylesheet" type="text/css" href="./css/public.css"/>
    <link rel="stylesheet" type="text/css" href="./css/user_login.css"/>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
<!--案例展示列表页 Start-->
    <div id="container">
    <!--header Start-->
        <?php include('header.php');?>
        <div class="header_box"></div>
        <div class="clear"></div>
    <!--header End-->
    <!--轮播图 Start-->
        <div class="banner">
            <img src="./images/cases_04.png" alt="轮播图"/>
        </div>
    <!--轮播图 End-->
    <!--页面主体 Start-->
        <div class="main">
           <div class="current">
               <p>
                   <a href="./index.php">&lt;&lt;返回首页</a> 
               </p>
           </div>
           <div class="user_login">
               <div class="login_form">
                   <form action="" method="post" content="text/php; charset=UTF-8">
                       <h2><span>用户登录</span></h2>
                       <div class="box_40"></div>
                       <p><span>账号</span><input type="text" name="username" placeholder="用户名"/></p>
                       <div class="box_20"></div>
                       <p><span>密码</span><input type="password" name="password" placeholder="密码"/></p>
                       <div class="box_20"></div>
                       <input type="hidden" value="login" name="active" />
                       <p class="login_btn"><span></span><input type="submit" name="dosubmit" value="登 录"/></p>
                   </form>
                   <div class="box_100"></div>
               </div>
               <div class="reg_quick">
                   <p>还没有账号？</p>
                   <p class="promptly"><a href="./user_reg.php">快速注册</a></p>
               </div>
           </div>
        </div>
        <div class="box_300"></div>
    <!--页面主体 End-->
    <!--footet Start-->
       <?php include('footer.php');?>
    <!--footet End-->
    </div>
<!--文豆首页 End-->
</body>
</html>
<script src="./js/select_nav.js"></script>