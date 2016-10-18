<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-18 11:19:33
         compiled from ".\view\guestbook2.html" */ ?>
<?php /*%%SmartyHeaderCode:4405783666be64253-28275216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7f0fd0a7103277324739c20d7a513ca6ab3d591' => 
    array (
      0 => '.\\view\\guestbook2.html',
      1 => 1470280915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4405783666be64253-28275216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5783666be931f8_62948544',
  'variables' => 
  array (
    'mag' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5783666be931f8_62948544')) {function content_5783666be931f8_62948544($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/guestbook2.css" />
    <title>文豆电子网-客户留言</title>
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
            <h1 class="title-zh">客户留言</h1>
            <ul class="child-menu">
                  <li>
                    <a href="">我的详细信息</a>
                </li>
				<li><a href="">修改详细信息</a></li>
				<li><a href="">我的留言</a></li>
                <li class="no-border">
                    <a href="">客户留言</a>
                </li>
            </ul>
        </div>

        <div class="content-right">
            <!-- 内容右边标题 开始 -->
            <h1 class="title">
                <span class="float-left">客户留言</span>
                <span class="small-title">梦想的世界</span>
                <span class="title-link">
                    <a href="">主页></a>
                    <a href="">客户留言</a>
                </span>
            </h1>
            <div class="message">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mag']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
				<p class="name"><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
 <?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
</p>
				<p><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</p>
				<p class="detials"><img src="images/detials.jpg" alt="" /> <span>2014-11-11</span></p>
				<br />
				<hr />
            <?php } ?>
				<!-- <p class="name">游客 23214@qq.com</p>
				<p>呵呵，嘻嘻，哈哈！呵呵，嘻嘻，哈哈！呵呵，嘻嘻，哈哈！呵呵，嘻嘻，哈哈！</p>
				<p class="detials"><img src="images/detials.jpg" alt="" /> <span>2014-11-11</span></p>
				<br />
				<hr />
				<p class="name">游客 23214@qq.com</p>
				<p>呵呵，嘻嘻，哈哈！呵呵，嘻嘻，哈哈！呵呵，嘻嘻，哈哈！呵呵，嘻嘻，哈哈！</p>
				<p class="detials"><img src="images/detials.jpg" alt="" /> <span>2014-11-11</span></p>
				<br />
				<hr /> -->
			
				<div class="page">
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
                </div>
				<br />
				<hr color="blue" size="3" />
				<hr color="white" />
				<hr color="white" />
				<hr color="white" />
				<table>
					<tr height="40">
						<td align="center">电子邮件</td>
						<td><input type="text" name="email" /></td>
					</tr>
					<tr>
						<td align="center">描述</td>
						<td><textarea name="content" id="" cols="30" rows="10"></textarea></td>
					</tr>
				</table>
            </div>
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
