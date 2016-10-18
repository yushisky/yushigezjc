<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-23 17:53:24
         compiled from ".\view\server.php" */ ?>
<?php /*%%SmartyHeaderCode:1329576bac455bff50-40507030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83e9f325b4566ad9075be2305ade7bd0d531e1ee' => 
    array (
      0 => '.\\view\\server.php',
      1 => 1466675595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1329576bac455bff50-40507030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576bac455feee9_03536724',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576bac455feee9_03536724')) {function content_576bac455feee9_03536724($_smarty_tpl) {?><?php echo '<?php'; ?>

	
	include('../include/mysql.class.php');

	$mysql = new Mysql('localhost','root','','wengdos');

	//唯一性判断
	if(isset($_GET['name'])&&!empty($_GET['name'])){
		$name =$_GET['name'];
		$sql='select * from wd_user1 where name="'.$name.'"';
			$res = $mysql->get_one($sql);
			if($res){
				$resule = array('error'=>1,'data'=>$name);

			}else{
				$resule = array('error'=>0,'data'=>$name);
			}
			echo json_encode($resule);
	}
 <?php echo '?>'; ?>

<?php }} ?>
