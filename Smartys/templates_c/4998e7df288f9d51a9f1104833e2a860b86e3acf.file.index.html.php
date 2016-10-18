<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-12 14:59:27
         compiled from ".\view\index.html" */ ?>
<?php /*%%SmartyHeaderCode:198957835c598fc468-91375092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4998e7df288f9d51a9f1104833e2a860b86e3acf' => 
    array (
      0 => '.\\view\\index.html',
      1 => 1468229674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198957835c598fc468-91375092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57835c59a25da8_98321006',
  'variables' => 
  array (
    'cat_data' => 0,
    'val' => 0,
    'crt_data' => 0,
    'crt_datail' => 0,
    'doc_datail' => 0,
    'doc' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57835c59a25da8_98321006')) {function content_57835c59a25da8_98321006($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\Smartys\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <?php echo '<script'; ?>
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
    <title>文豆电子网-首页</title>
</head>
<body>
    <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="ad">
        <a href="">
            <img src="images/ad.png" />
        </a>
    </div>
    <div class="content">
        <div class="content-left" id="tab">
            <ul class="list-title">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <li class="active tab-controll"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</li>
            <?php } ?>  
                <li class="more">
                    <a href="">
                        <img src="images/more.png" />
                    </a>
                </li>
            </ul>
            <div class="clear"></div>

            <ul class="list-article">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['crt_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <li>
                    <a href="new_detail.php?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
                        <span class="float-left">▪ <?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</span>
                        <span class="float-right time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['addtime'],"%Y-%m-%d");?>
</span>
                    </a>
                </li>
            <?php } ?>
              <!--   <li>
                    <a href="">
                        <span class="float-left">▪ 1设立技术研究所网站(大田)</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="float-left">▪ 1web俄罗斯市场扩大</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="float-left">▪ 1举办座谈会的合作企业网站</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li> -->
            </ul>
            <ul class="list-article">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['crt_datail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <li>
                    <a href="">
                        <span class="float-left">▪ <?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</span>
                        <span class="float-right time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['addtime'],"%Y-%m-%d");?>
</span>
                    </a>
                </li>
            <?php } ?>
                <!-- <li>
                    <a href="">
                        <span class="float-left"> web上半年人才录用向导</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="float-left">▪ 设立技术研究所网站(大田)</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="float-left">▪ web俄罗斯市场扩大</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="float-left">▪ 举办座谈会的合作企业网站</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li> -->
            </ul>

            <div class="clear"></div>
           
            <ul class="link-short">
             <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['doc_datail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>

                <li class="first">
                    <a href="">
                        <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['src'];?>
" />
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>

                            <br/>
                            <span><?php echo $_smarty_tpl->tpl_vars['val']->value['en_title'];?>
</span>
                        </p>
                    </a>
                </li>
             <?php } ?>
                <!-- <li>
                    <a href="">
                        <img src="images/floder.png" />
                        <p>
                            投资程序
                            <br/>
                            <span>Process</span>
                        </p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/email.png" width="50" />
                        <p>
                            投资咨询
                            <br/>
                            <span>Q&A</span>
                        </p>
                    </a>
                </li> -->
                <div class="clear"></div>
            </ul>
        </div>
        <div class="content-center">
            <!-- 产品展示 开始 -->
            <div class="top" id="slide">
                <div class="product">
                    <div>
                        <img src="images/pro_01.png" alt="" class="photo" />
                        <ul class="info">
                            <li> <b>New
                                    <span>Product</span></b> 
                            </li>
                            <li>
                                <span>ASA SG 1111</span>
                            </li>
                            <li class="description">最好的产品,坚持ASA&nbsp; web开发的产品的特别系列</li>
                            <li>
                                <a href="">
                                    <img src="images/more.png" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div style="display:none">
                        <img src="images/pro_01.png" alt="" class="photo" />
                        <ul class="info">
                            <li> <b>New
                                    <span>Product</span></b> 
                            </li>
                            <li>
                                <span>ASA SG 2222</span>
                            </li>
                            <li class="description">最好的产品,坚持ASA&nbsp; web开发的产品的特别系列</li>
                            <li>
                                <a href="">
                                    <img src="images/more.png" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <img src="images/ico-left.png" alt="" class="btn-left prev" />
                <img src="images/ico-right.png" alt="" class="btn-right next" />
            </div>

            <!-- 热门文章 开始 -->
            <ul class="article">
                <li>
                    <img src="images/photo_01.png" alt="" class="photo" />
                    <p>
                        <span>e-目录</span>
                        <br/>
                        持续的企业延伸的《web
                        <br/>
                        <a href="">
                            <img src="images/more.png" alt="" />
                        </a>
                    </p>
                </li>
                <li class="last">
                    <img src="images/photo_01.png" alt="" class="photo" />
                    <p>
                        <span>e-目录</span>
                        <br/>
                        持续的企业延伸的《web
                        <br/>
                        <a href="">
                            <img src="images/more.png" alt="" />
                        </a>
                    </p>
                </li>
            </ul>

        </div>
        <div class="content-right" id="accordion">
        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['doc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
            <div class="box">
                <div class="title">
                    <p class="float-left">
                        <span>01</span> <b>公司历史</b>
                    </p>
                    <img src="images/reduce.png" alt="" />
                </div>
                <div class="box-content">
                    <p>
                        <b><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</b>
                        <br />
                        <?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>

                        <br />
                        <a href="">
                            <img src="images/more.png" alt="" class="more" />
                        </a>
                    </p>
                    <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['src'];?>
" alt="" class="photo" />
                    <div class="clear"></div>
                </div>
            </div>
         <?php } ?>
            <!-- <div class="box">
                <div class="title">
                    <span>02</span>
                    <b>企业文化</b>
                    <img src="images/add.png" alt="" />
                </div>
                <div class="box-content" style="display:none">
                    <p>
                        <b>BUSINESS INFO</b>
                        <br />
                        持续的企业延伸的维伯,《介绍我
                        <br />
                        <a href="">
                            <img src="images/more.png" alt="" class="more" />
                        </a>
                    </p>
                    <img src="images/hotel.png" alt="" class="photo" />
                </div>
            </div> -->
            <!-- <div class="box">
                <div class="title">
                    <span>03</span>
                    <b>合作伙伴</b>
                    <img src="images/add.png" alt="" />
                </div>
                <div class="box-content" style="display:none">
                    <p>
                        <b>BUSINESS INFO</b>
                        <br />
                        持续的企业延伸的维伯,《介绍我
                        <br />
                        <a href="" class="float-left">
                            <img src="images/more.png" alt="" class="more" />
                        </a>
                    </p>
                    <img src="images/hotel.png" alt="" class="photo" />
                    <div class="clear"></div>
                </div>
            </div>
 -->
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="footer">
    <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
</body>
</html><?php }} ?>
