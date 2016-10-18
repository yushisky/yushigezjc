<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-21 18:34:46
         compiled from "news_list.php" */ ?>
<?php /*%%SmartyHeaderCode:2268657691846b23134-39574717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b62327d761bddb613926901980a5e1a4c1420b7' => 
    array (
      0 => 'news_list.php',
      1 => 1466505280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2268657691846b23134-39574717',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57691846b4d555_89817347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57691846b4d555_89817347')) {function content_57691846b4d555_89817347($_smarty_tpl) {?><?php echo '<?php'; ?>

		include('smarty.conf.php');
		#页面输出方式 assign 方法是将我们的数据传送到模板里面
		// $smarty->assign('nav_data',$nav_data);
		#确定我们要加载的文件
		//$smarty->assign('key',3);
		//$smarty->display('test.html');
		//页面输出方式分离公共部分
		//$smarty->display('index.html');
		// $sql ='select * from wd_doc1 where is_show=1 and position=3';
		// 	// p($sql);die;
		// 	$doc_datail = $conn-> get_all($sql);
		// 	$smarty->assign('doc',$doc_datail);
		$smarty->display('news_list.php');

<?php echo '?>'; ?>
<?php }} ?>
