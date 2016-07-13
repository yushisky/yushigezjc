<?php
//设置时区
date_default_timezone_set('PRC');
//声明编码
header("Content-type:text/html;charset=utf-8");
//错误报告
error_reporting(E_ALL);
// error_reporting(0);//将所有的错误都隐藏起来
define('BOOT_PATH',dirname(dirname(__FILE__)));
//print_r(BOOT_PATH);die;
define('WEB_PATH','http://www.mymohe.com');
include(BOOT_PATH.'/include/common.fun.php');
//print_r(BOOT_PATH.'/include/common.fun.php');die;
 //==========E:\wampserver\wamp\www\wengdo../include/common.fun.php========================H ``N=============
// 引入公共函数库
// 引入公共函数库
//include('../include/common.fun.php');
$url = 'http://phpsql.wdcase.com';
$user = 'by1600015';
$password = 'pass123456';
$database = "mo_he";
$conn = conn($url,$user,$password,$database);
//引入公共数据
// require('common.data.php');
?>