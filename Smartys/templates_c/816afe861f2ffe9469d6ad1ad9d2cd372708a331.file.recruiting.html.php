<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-23 16:09:46
         compiled from ".\view\recruiting.html" */ ?>
<?php /*%%SmartyHeaderCode:3820576b93240679c7-85994940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '816afe861f2ffe9469d6ad1ad9d2cd372708a331' => 
    array (
      0 => '.\\view\\recruiting.html',
      1 => 1466669382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3820576b93240679c7-85994940',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576b93240aa425_91504352',
  'variables' => 
  array (
    'data' => 0,
    'val' => 0,
    'datail' => 0,
    'datail2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576b93240aa425_91504352')) {function content_576b93240aa425_91504352($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/recruiting.css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="js/lib/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/menu.js"><?php echo '</script'; ?>
>
    <title>招聘介绍</title>
</head>

<body>
   <?php echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="ad">
        <img src="images/ad_02.png" alt="" />
    </div>

    <div class="content">
        <div class="content-left">
            <img src="images/rope.png" alt="" class="rope" />
            <p class="title-en">RECRUIT</p>
            <h1 class="title-zh">人才招聘</h1>
            <ul class="child-menu">
                <li>
                    <a href="">招聘介绍</a>
                </li>
                <li>
                    <a href="">招聘公告</a>
                </li>
                <li>
                    <a href="">人力资源/福利制度</a>
                </li>
                <li>
                    <a href="">首选人才</a>
                </li>
                <li>
                    <a href="">应用</a>
                </li>
                <li>
                    <a href="">关于工作</a>
                </li>
                <li class="last">
                    <a href="">助理工作</a>
                </li>
            </ul>
        </div>

        <div class="content-right">
            <!-- 内容右边标题 开始 -->
            <h1 class="title">
                <span class="float-left">招聘介绍</span>
                <span class="small-title">梦想的世界</span>
                <span class="title-link">
                    <a href="">主页 ></a>
                    <a href="">人才招聘 ></a>
                    <a href="">招聘介绍</a>
                </span>
            </h1>

            <h5 class="item">目标职位</h5>
            <p class="p1">- web总是向各位举行。现在挑战!</p>
            <div class="boxs">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <div class="box one">
                    <h1><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</h1>
                    <p><?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</p>
                </div>
            <?php } ?>    
               <!--  <div class="box one">
                    <h1>采购</h1>
                    <p>有创意的想法和充满欲望的开创未来联合聘用人才。</p>
                </div>

                <div class="box one">
                    <h1>采购</h1>
                    <p>有创意的想法和充满欲望的开创未来联合聘用人才。</p>
                </div>
                <div class="box one">
                    <h1>采购</h1>
                    <p>有创意的想法和充满欲望的开创未来联合聘用人才。</p>
                </div> -->
            </div>
            <img src="images/recruit_pic_01.jpg" alt="" class="pic_01" />

            <div class="clear"></div>

            <h5 class="item">择优录取程序</h5>
            <p class="p1">- 所有的招聘程序如下：</p>
            <ul class="process">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <li>
                    <p class="step"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</p>
                    <p class="text"><?php echo $_smarty_tpl->tpl_vars['val']->value['nav'];?>
</p>
                </li>
            <?php } ?>
                <!-- <li>
                    <p class="step">STEP 02</p>
                    <p class="text">文件审查</p>
                </li>
                <li>
                    <p class="step">STEP 03</p>
                    <p class="text">能力倾向测试</p>
                </li>
                <li>
                    <p class="step">STEP 04</p>
                    <p class="text">访问</p>
                </li>
                <li class="onstep no-margin">
                    <p class="step">STEP 05</p>
                    <p class="text">最终合格</p>
                </li> -->
            </ul>

            <div class="clear"></div>

            <h5 class="item">在申请表注意事项</h5>
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datail2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
            <p class="p1">-<?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</p>
             <?php } ?>
            <!-- <p class="p1">- 文件审查个别只殿试联系。手机号码，电子邮箱，请写的确切地址。</p>
            <p class="p1">- 个人基本信息，教育，职业信息和简历和求职信写入文件可以附加。</p>
            <p class="p1">- 人与恩beopryeok doeni优惠基础之间的关系，国家伤残退伍军人，一定要提一下我们。</p>
            <p class="p1">- 没有取消资格服兵役海外旅游，必须有不容回避的事实。</p>
            <p class="p1">- 提交的证明文件就干脆不予退还，请参阅。</p> -->
            <div class="btn-01">下载申请表</div>
        </div>
    </div>

    <div class="clear"></div>
</body>
</html><?php }} ?>
