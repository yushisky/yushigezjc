<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-23 18:34:42
         compiled from ".\view\contact_us.html" */ ?>
<?php /*%%SmartyHeaderCode:29941576a5c83f10dc4-01318394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da4e9dac17b7df8bb8319fef52f69843b6ba8a19' => 
    array (
      0 => '.\\view\\contact_us.html',
      1 => 1466678065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29941576a5c83f10dc4-01318394',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576a5c8403d615_77826507',
  'variables' => 
  array (
    'ceo' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576a5c8403d615_77826507')) {function content_576a5c8403d615_77826507($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/article_contact.css" />
    <title>联系我们</title>
</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="ad">
        <img src="images/ad_02.png" alt="" />
    </div>

    <div class="content">
        <div class="content-left">
            <img src="images/rope.png" alt="" class="rope" />
            <p class="title-en">COMPANY</p>
            <h1 class="title-zh">关于我们</h1>
            <ul class="child-menu">
             <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ceo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <li>
                    <a href=""><?php echo $_smarty_tpl->tpl_vars['val']->value['cat_title'];?>
</a>
                </li>
            <?php } ?>
                <!-- <li>
                    <a href="">CEO 致词</a>
                </li>
                <li>
                    <a href="">公司历史</a>
                </li>
                <li>
                    <a href="">企业文化</a>
                </li>
                <li>
                    <a href="">组织结构</a>
                </li>
                <li>
                    <a href="">合作伙伴</a>
                </li>
                <li class="last">
                    <a href="">联系我们</a>
                </li> -->
            </ul>
        </div>

        <div class="content-right">
            <!-- 内容右边标题 开始 -->
            <h1 class="title">
                <span class="float-left">联系我们</span>
                <span class="small-title">梦想的世界</span>
                <span class="title-link">
                    <a href="">主页 ></a>
                    <a href="">关于我们 ></a>
                    <a href="">联系我们</a>
                </span>
            </h1>

            <!-- 文章内容 开始 -->
            <div class="article">
                <img src="images/map.png" alt="" class="picture" />
                <h1 class="title">详细地址</h1>
            </div>
        </div>
    </div>

    <div class="clear"></div>
  <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>
</html><?php }} ?>
