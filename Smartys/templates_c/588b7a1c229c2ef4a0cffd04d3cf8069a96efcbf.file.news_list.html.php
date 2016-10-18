<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-24 17:21:31
         compiled from ".\view\news_list.html" */ ?>
<?php /*%%SmartyHeaderCode:11552576916456637f6-43482437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '588b7a1c229c2ef4a0cffd04d3cf8069a96efcbf' => 
    array (
      0 => '.\\view\\news_list.html',
      1 => 1466760089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11552576916456637f6-43482437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576916456a2ed6_88025584',
  'variables' => 
  array (
    'new' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576916456a2ed6_88025584')) {function content_576916456a2ed6_88025584($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/news_list.css" />
    <title>文豆电子网-新闻中心</title>
</head>

<body>
   <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="ad">
        <img src="images/ad_02.png" alt="" />
    </div>

    <div class="content">
        <div class="content-left">
            <img src="images/rope.png" alt="" class="rope" />
            <p class="title-en">News Center</p>
            <h1 class="title-zh">新闻中心</h1>
            <ul class="child-menu">
                <li>
                    <a href="">科技咨询</a>
                </li>
                <li class="last">
                    <a href="">行业新闻</a>
                </li>
            </ul>
        </div>

        <div class="content-right">
            <!-- 内容右边标题 开始 -->
            <h1 class="title">
                <span class="float-left">科技咨询</span>
                <span class="small-title">梦想的世界</span>
                <span class="title-link">
                    <a href="">主页 ></a>
                    <a href="">新闻 ></a>
                    <a href="">科技咨询</a>
                </span>
            </h1>

            <!-- 文章内容 开始 -->
            <div class="article">
                <img src="images/banner.png" alt="" />
                <table class="list">
                    <tr class="list-title">
                        <th width="50">编号</th>
                        <th width="330">标题</th>
                        <th width="110">作者</th>
                        <th width="119">日期</th>
                        <th class="title-last">点击数</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                    <tr class="list-body">
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['new_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['new_title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['aubter'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['addtime'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['click'];?>
</td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pager" style="margin:20px auto;width:500px;text-align:center;">
                   
                <!-- <div class="page">
                    <a href="" class="prevs">&lt;&lt;</a>
                    <a href="" class="prev">&lt;</a>
                    <a href="" class="current">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">4</a>
                    <a href="">5</a>
                    <a href="">6</a>
                    <a href="">7</a>
                    <a href="">8</a>
                    <a href="">9</a>
                    <a href="">10</a>
                    <a href="" class="next">&gt;</a>
                    <a href="" class="nexts">&gt;&gt;</a>
                </div> -->
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <div class="footer">
   		<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>
</html><?php }} ?>
