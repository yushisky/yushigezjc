<?php
/**
 * Example Application
 *
 * @package Example-application
 */
 #头部声明
header("Content-type:text/html;charset=utf-8");
#
require './smarty/Smarty.class.php';
#
date_default_timezone_set('PRC');
//声明编码
header("Content-type:text/html;charset=utf-8");
//错误报告
error_reporting(E_ALL);
// error_reporting(0);//将所有的错误都隐藏起来
define('BOOT_PATH',dirname(__FILE__));
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
$smarty->setTemplateDir('./view');
$smarty->cache_lifetime= 5;
#
$smarty->setCompileDir('./templates_c');
#指定配置文件的存放路径
$smarty->setConfigDir('./configs');
#指定到缓存文件的存放路径{}
$smarty->setCacheDir('./cache');
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
include('./include/mysql.class.php');
#公共函数
include('./include/common.fun.php');
//链接数据库
$url = 'localhost';
$user = 'by1600015';
$password = 'pass123456';
$database = "by1600015";
$conn = new Mysql($url,$user,$password,$database);
//导航栏数据
$sql = 'select *from wd_nav1 where topid=0';
$nav_data = $conn->get_all($sql);
$sql = 'select *from wd_nav1 where topid>0';
$data = $conn->get_all($sql);
//==二级导航栏
foreach ($nav_data as $key => $val){
	foreach ($data as $kk => $value){
		if($val['id']==$value['topid']){
			$nav_data[$key]['two'][]=$value;
		}
	}
}
#页面输出方式 assign 方法是将我们的数据传送到模板里面
$smarty->assign('nav_data',$nav_data);
$smarty->assign('data',$data);
##查询数据
$sql ='select * from wd_art_cat1 where is_show =1';
$cat_data  = $conn-> get_all($sql);
$smarty->assign('cat_data',$cat_data);
##查询数据
$sql ='select * from wd_article1 where cat_id =1 and is_show =1 order by addtime desc limit 4';
$crt_data = $conn-> get_all($sql);
$smarty->assign('crt_data',$crt_data);
##查询数据
$sql ='select * from wd_article1 where cat_id =2 and is_show =1 order by addtime desc limit 4';
$crt_datail = $conn-> get_all($sql);
$smarty->assign('crt_datail',$crt_datail);

$sql ='select * from wd_doc1 where is_show= 1 and position=1';
// p($sql);die;
$doc_datail = $conn-> get_all($sql);
$smarty->assign('doc_datail',$doc_datail);

$sql ='select * from wd_doc1 where is_show = 1 and position = 3';
// p($sql);die; 
$doc_datail = $conn-> get_all($sql);
$smarty->assign('doc',$doc_datail);
   
    
// $smarty->assign('data',$data);
// print_r($nav_data);die;
// print_r($data);die;
//面向对象    没看到过程 ，只返回结果
//p($nav_data);die;
// $sql ='select * from wd_nav1 where topid=5';
// // p($sql);die;
// $nav_data1 = $conn-> get_all($sql);
// $smarty->assign('data1',$nav_data1);
#确定我们要加载的文件
//$smarty->assign('key',3);
//$smarty->display('test.html');
$smarty->display('index.html');
//$smarty->display('ceo.html');
?>
