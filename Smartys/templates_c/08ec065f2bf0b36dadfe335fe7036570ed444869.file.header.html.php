<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-18 11:19:08
         compiled from ".\view\header.html" */ ?>
<?php /*%%SmartyHeaderCode:130657835c59a46770-96974784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08ec065f2bf0b36dadfe335fe7036570ed444869' => 
    array (
      0 => '.\\view\\header.html',
      1 => 1470280918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130657835c59a46770-96974784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57835c59ab3198_41890842',
  'variables' => 
  array (
    'nav_data' => 0,
    'key' => 0,
    'val' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57835c59ab3198_41890842')) {function content_57835c59ab3198_41890842($_smarty_tpl) {?><?php echo '<script'; ?>
 type="text/javascript" src="js/lib/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/menu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $('#tab').slide({
            titCell:'.tab-controll',
            targetCell:'.list-article',
            titOnClassName:'active'
        });

        $('#slide').slide({
            mainCell:'.product'
        });

        $('#accordion').slide({
            titCell:'.box .title',
            targetCell:'.box-content'
        });
    });
    <?php echo '</script'; ?>
>
   <div class="header">
        <div class="header-left">
            <a href="index.html">
                <img src="images/header-logo.jpg" class="logo" />
            </a>
        </div>
        <div class="header-right">
            <ul class="menu">
                <li>
                    <a href="register.php">注册</a>
                </li>
				<li> <a href="login.php">登陆</a></li>
            </ul>
            <div class="clear"></div>
            <ul class="nav-main" id="nav">
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['nav_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                <li class="nav-li"<?php if (($_smarty_tpl->tpl_vars['key']->value+1)==count($_smarty_tpl->tpl_vars['nav_data']->value)) {?> style="border:none;" <?php }?>>
                    <a class="" href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a>
                    <?php if (isset($_smarty_tpl->tpl_vars['val']->value['two'])) {?>
                    <div class="nav-child">
                        <div class="nav-left"></div>
                        <div class="nav-center">
                            <ul>
                           <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['two']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>                     
                            <li>
                              <a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                                </li>
                            <?php } ?>
                        
                            </ul>
                        </div>
                        <div class="nav-right"></div>
                    </div>
                    <?php }?>
                 <?php } ?>
            <div class="clear"></div>
        </div>
    </div>
<?php }} ?>
