<?php
//设置时区
date_default_timezone_set('PRC');
//声明编码
header("Content-type:text/html;charset=utf-8");
//错误报告
error_reporting(E_ALL);
// error_reporting(0);//将所有的错误都隐藏起来
define('BOOT_PATH',dirname(dirname(__FILE__)));
// p();die;
define('WEB_PATH','http://by1600015.pro.wdcase.com/Smartys');
// print_r(BOOT_PATH);die;
// include(BOOT_PATH.'/include/common.fun.php');
// 引入公共函数库
include(BOOT_PATH.'/include/common.fun.php');
$url = 'localhost';
$user = 'by1600015';
$password = 'pass123456';
$database = "by1600015";
$conn = conn($url,$user,$password,$database);
//引入公共数据
// require('common.data.php');
//引入分页函数
require(BOOT_PATH.'/include/pagination.php');

?>