<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-21 18:37:10
         compiled from ".\view\test.html" */ ?>
<?php /*%%SmartyHeaderCode:2134557636cc8c56f78-69369438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e2c10d4bc1d9e5a791b8c031ff08eae844a21b9' => 
    array (
      0 => '.\\view\\test.html',
      1 => 1466501216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2134557636cc8c56f78-69369438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57636cc8d542c1_17954130',
  'variables' => 
  array (
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57636cc8d542c1_17954130')) {function content_57636cc8d542c1_17954130($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wampserver\\wamp\\www\\Smartys\\smarty\\plugins\\modifier.date_format.php';
?>
<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable('<b>使用cat变量调节器来实现字符串的拼接', null, 0);?>
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value);?>



<?php echo '<script'; ?>
>
    function aaa(){
        alert('谈一谈！'); //这里不会报错
    }
    window.setTimeout(function(){aaa();},3000);
<?php echo '</script'; ?>
>

  












<?php }} ?>
