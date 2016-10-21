<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-24 17:42:40
         compiled from "nav.php" */ ?>
<?php /*%%SmartyHeaderCode:31211576cf71a212759-84487396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4532bdf1f28ccffe01c96c90d87d59e3001f5db' => 
    array (
      0 => 'nav.php',
      1 => 1466761357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31211576cf71a212759-84487396',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576cf71a21cc33_50532198',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576cf71a21cc33_50532198')) {function content_576cf71a21cc33_50532198($_smarty_tpl) {?><?php echo '<?php'; ?>

	include('smarty.conf.php');
	  //==========引用函数库============
   // include('pagination.php');
    //链表查询案列的所有数据--------------
    $sql = "SELECT * FROM `wd_nav1`";
    $nav_data=$conn->get_all($sql);
    // p($banner_data);die;
    
  $smarty->assign('nav',$nav_data);
$smarty->display('wd_nav1_list.tpl');
<?php echo '?>'; ?>

<?php }} ?>
