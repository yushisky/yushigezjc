<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-18 11:19:21
         compiled from ".\view\product_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2589457849953ea17d3-46110753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a9247263583803d08196b43ad3a48ff7c3ac5d3' => 
    array (
      0 => '.\\view\\product_list.html',
      1 => 1470280918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2589457849953ea17d3-46110753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57849954004da8_51125292',
  'variables' => 
  array (
    'public' => 0,
    'val' => 0,
    'detaone' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57849954004da8_51125292')) {function content_57849954004da8_51125292($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/product_list.css" />
    <title>产品列表页</title>
</head>
<body>
   <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="ad">
        <img src="images/ad_02.png" alt="" />
    </div>
    <div class="content">
        <div class="content-left">
            <img src="images/rope.png" alt="" class="rope" />
            <p class="title-en">PRODUCT</p>
            <h1 class="title-zh">产品展示</h1>
            <ul class="child-menu">
                 <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['public']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <li>
                    <a href=""><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a>
                </li>
              <?php } ?>      
            </ul>
        </div>

        <div class="content-right">
            <!-- 内容右边标题 开始 -->
            <h1 class="title">
                <span class="float-left">产品介绍</span>
                <span class="small-title">梦想的世界</span>
                <span class="title-link">
                    <a href="">主页 ></a>
                    <a href="">产品展示 ></a>
                    <a href="">电脑 ></a>
                    <a href="">产品介绍</a>
                </span>
            </h1>

            <!-- 产品列表 开始  -->
            <ul class="product-list">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['detaone']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <li>
                    <a href="">
                        <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['detail_img'];?>
" alt="" class="product-photo" />
                        <p class="product-name" ><?php echo $_smarty_tpl->tpl_vars['val']->value['detail_title'];?>
</p>
                    </a>
                </li>
            <?php } ?>
               <!--  <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/pro.png" alt="" class="product-photo" />
                        <p class="product-name" >ASA SG1209</p>
                    </a>
                </li> -->
                <div class="clear"></div>
            </ul>
            <!-- 列表分页 开始 -->
            <ul class="page">
                <li class="prev"><a href="">&lt;&lt;</a></li>
                <li class="current">
                    <span>1</span>
                </li>
                <li>
                    <a href="">2</a>
                </li>
                <li>
                    <a href="">3</a>
                </li>
                <li>
                    <a href="">4</a>
                </li>
                <li class="next"><a href="">&gt;&gt;</a></li>
                <div class="clear"></div>
            </ul>
        </div>
    </div>

    <div class="clear"></div>

    <div class="footer">
		<div class="float-left">
		   <p class="footer_info">地址：广东省广州市海珠区新港西路231号3栋4层  联系人：乐 乐  移动电话：13588888888 固定电话：020-1234567 传 真：020-1234567</p>
			<p class="copyright">Copyright @ 2014 文豆网络科技有限公司 版权所有  粤ICP备0000000号</p>
		</div>
		<select class="select-link">
			<option value="">友情链接</option>
			<option value="">友情链接</option>
		</select>

    </div>
</body>
</html><?php }} ?>
