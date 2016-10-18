<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-22 17:36:49
         compiled from ".\view\ceo.html" */ ?>
<?php /*%%SmartyHeaderCode:13917576215015b1060-10454154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64e67f4f31b22043e472b0bdbb6aa72f7d0f269b' => 
    array (
      0 => '.\\view\\ceo.html',
      1 => 1466588115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13917576215015b1060-10454154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576215016a1ad2_18390212',
  'variables' => 
  array (
    'ceo' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576215016a1ad2_18390212')) {function content_576215016a1ad2_18390212($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/product_list.css" />
    <title></title>
</head>
<body>
   <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="ad">
        <img src="images/ad_02.png" alt="" /></div>
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
                <span class="float-left">CEO致词</span>
                <span class="small-title">梦想的世界</span>
                <span class="title-link">
                    <a href="">主页 ></a>
                    <a href="">关于我们 ></a>
                    <a href="">CEO 致词</a>
                </span>
            </h1>

            <!-- 文章内容 开始 -->
            <div class="article">
                <img src="images/ceo.png" alt="" style="float:left" />
                <div style="float:left; padding-left:30px;color:#000;width:410px;">
                    <p style="font-size:16px;font-weight:bold">
                        <span style="color:#1647a1">客户</span>
                        <span style="color:#000">你好?</span>
                    </p>
                    <p style="font-size:14px; font-weight:bold;margin-top:24px;">
                        我们公司是一家领先的技术和诀窍的行业领导者
                        <br />
                        该公司的一名代表.
                    </p>
                    <p style="margin-top:40px;">
                        从过去几年的努力和错误,我们企业通过客人们一起成长。相关行业的竞争越来越激化的
情况下,首先想到顾客,xx技术为基础,推出xx服务商用化,并成功通信行业的视线。
                    </p>
                    <p style="margin-top:40px;">
                        我们的企业领先的技术和经验,目前业界首位具有代表性的公司。“从过去几年的努力和
错误,我们企业通过客人们一起成长。相关行业的竞争越来越激化的情况下,首先想到顾
客,xx技术为基础,推出xx服务商用化,并成功通信行业的视线。.
                    </p>

                    <p style="margin-top:40px;">今后我们企业进一步适当的21世纪成长为世界级企业顾客我报答大家的努力。</p>
                    <p style="float:right; margin-top:60px;">web(株)代表理事<span style="font-size:48px;">洪吉童</span></p>
                </div>
                <div class="clear"></div>
                <table width="679" height="224" style="border:1px solid #ccc; margin-top:40px; background:url(images/table_bg_01.png)  no-repeat 446px 38px;line-height:24px;padding:20px 0;">
                    <tr>
                        <td width="44" align="center"><img src="images/ico_01.png" alt="" /></td>
                        <td width="69">公司名</td>
                        <td style="color:#707070">浅田真央株式会社网站</td>
                    </tr>
                    <tr>
                        <td align="center"><img src="images/ico_01.png" alt="" /></td>
                        <td>住址</td>
                        <td style="color:#707070">首尔市加纳区洞123蔓延</td>
                    </tr>
                    <tr>
                        <td align="center"><img src="images/ico_01.png" alt="" /></td>
                        <td>电话号码</td>
                        <td style="color:#707070">01- 234-5678 (FAX : 01 234-5679)</td>
                    </tr>
                    <tr>
                        <td align="center"><img src="images/ico_01.png" alt="" /></td>
                        <td>董事长</td>
                        <td style="color:#707070">洪吉童代表</td>
                    </tr>
                    <tr>
                        <td align="center"><img src="images/ico_01.png" alt="" /></td>
                        <td>设立日</td>
                        <td style="color:#707070">1998年2月15日</td>
                    </tr>
                    <tr>
                        <td align="center"><img src="images/ico_01.png" alt="" /></td>
                        <td>资金</td>
                        <td style="color:#707070">2亿韩元</td>
                    </tr>
                    <tr>
                        <td align="center"><img src="images/ico_01.png" alt="" /></td>
                        <td>职员数</td>
                        <td style="color:#707070">150人</td>
                    </tr>
                    <tr>
                        <td align="center"><img src="images/ico_01.png" alt="" /></td>
                        <td>官方网站</td>
                        <td style="color:#707070">http://www.asaweb.com</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="clear"></div>
     <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
