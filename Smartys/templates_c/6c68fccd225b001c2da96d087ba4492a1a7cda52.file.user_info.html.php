<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-23 18:31:40
         compiled from ".\view\user_info.html" */ ?>
<?php /*%%SmartyHeaderCode:16384576bb9f654f904-06835301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c68fccd225b001c2da96d087ba4492a1a7cda52' => 
    array (
      0 => '.\\view\\user_info.html',
      1 => 1466677860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16384576bb9f654f904-06835301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576bb9f6592b74_55972981',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576bb9f6592b74_55972981')) {function content_576bb9f6592b74_55972981($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/user_info.css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="js/lib/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
    <title>文豆电子网-我的详细信息</title>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/menu.js"><?php echo '</script'; ?>
>
</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="ad">
        <img src="images/ad_02.png" alt="" />
    </div>

    <div class="content">
        <div class="content-left">
            <img src="images/rope.png" alt="" class="rope" />
            <p class="title-en">User Center</p>
            <h1 class="title-zh">我的用户</h1>
            <ul class="child-menu">
                <li>
                    <a href="">我的详细信息</a>
                </li>
                <li>
                    <a href="">修改详细信息</a>
                </li>
				<li>
                    <a href="">我的留言</a>
                </li>
				<li><a href="">客户留言</a></li>
            </ul>
        </div>

        <div class="content-right">
            <!-- 内容右边标题 开始 -->
            <h1 class="title">
                <span class="float-left">我的详细信息</span>
                <span class="small-title">梦想的世界</span>
                <span class="title-link">
                    <a href="">主页 ></a>
                    <a href="">我的用户</a>
                    </span>
                </h1>

                <!-- 文章内容 开始 -->
                <div class="article">
                    <form method="post" action="">
                        <table class="info">
                            <tbody>
                                <tr>
                                    <td class="head" rowspan="7">
                                        <img src="./images/head_img_03.jpg">
                                        <label>我的头像</label>
                                    </td>
                                    <td class="prop">
                                        <label>昵称</label>
                                    </td>
                                    <td>
                                        <input type="text" name="username"></td>
                                </tr>
                                <tr>
                                    <td class="prop">
                                        <label>性别</label>
                                    </td>
                                    <td>
                                        <div class="inpt_select sex">
                                            <select name="sex" class="sex">
                                                <option value="0">女</option>
                                                <option selected="" value="1">男</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="prop">
                                        <label>职业</label>
                                    </td>
                                    <td>
                                        <input type="text" name="jobs"></td>
                                </tr>
                                <tr>
                                    <td class="prop">
                                        <label>公司名称</label>
                                    </td>
                                    <td>
                                        <input type="text" name="company_name"></td>
                                </tr>
                                <tr>
                                    <td class="prop">
                                        <label>详细地址</label>
                                    </td>
                                    <td>
                                        <input type="text" name="address"></td>
                                </tr>
                                <tr>
                                    <td class="prop">
                                        <label>电子邮箱</label>
                                    </td>
                                    <td>
                                        <input type="text" name="email"></td>
                                </tr>
                                <tr>
                                    <td class="prop">
                                        <label>现居地</label>
                                    </td>
                                    <td class="address">
                                        <input type="text" name="address" id="" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="prop head">
                                        <label>个人签名</label>
                                    </td>
                                    <td colspan="3">
                                        <textarea name="sign"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="2">
                                        <input type="image" src="./images/info_07.jpg" class="inpt_submit"></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <img class="ill f_right" src="./images/illustration.jpg">
                </div>
            </div>
        </div>

        <div class="clear"></div>
 <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
</body>
    </html><?php }} ?>
