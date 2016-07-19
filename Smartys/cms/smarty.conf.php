<?php
/**
 * Example Application
 *
 * @package Example-application
 */
 #头部声明
header("Content-type:text/html;charset=utf-8");
#
require '../smarty/Smarty.class.php';
#
date_default_timezone_set('PRC');
//声明编码
header("Content-type:text/html;charset=utf-8");
//错误报告
error_reporting(E_ALL);
// error_reporting(0);//将所有的错误都隐藏起来
define('BOOT_PATH',dirname(dirname(__FILE__)));
define('WEB_PATH','http://www.smartys.com');
// print_r(BOOT_PATH);die;
// include(BOOT_PATH.'/include/common.fun.php');
// 
$smarty = new Smarty;
//print_r($smarty);die;
//$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
##指定模板文件的存放路径[前端没有php代码的那块]
$smarty->setTemplateDir('../view/admin');
$smarty->cache_lifetime= 5;
#
$smarty->setCompileDir('../templates_c');
#指定配置文件的存放路径
$smarty->setConfigDir('../configs');
#指定到缓存文件的存放路径{}
$smarty->setCacheDir('../cache');
#配置模板里面的左边定界符
$smarty->left_delimiter ='<{';
#配置模板里面的右边定界符
$smarty->right_delimiter ='}>';
#assign 方法是将我们的数据传送到模板里面
// $smarty->assign('key','a');
//function __autoload($name){
	//	require './include/'.$name.'.class.php';
//}
//导航数据
include('../include/mysql.class.php');
#公共函数
include('../include/common.fun.php');
//链接数据库
$url = 'localhost';
$user = 'by1600015';
$password = 'pass123456';
$database = "by1600015";
$conn = new Mysql($url,$user,$password,$database);
//导航栏数据

?>
