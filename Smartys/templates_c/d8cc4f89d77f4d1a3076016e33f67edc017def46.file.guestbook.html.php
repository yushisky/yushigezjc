<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-23 14:37:11
         compiled from ".\view\guestbook.html" */ ?>
<?php /*%%SmartyHeaderCode:19663576a5d6ec38bc2-70614319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8cc4f89d77f4d1a3076016e33f67edc017def46' => 
    array (
      0 => '.\\view\\guestbook.html',
      1 => 1466663515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19663576a5d6ec38bc2-70614319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576a5d6ec80984_87500981',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576a5d6ec80984_87500981')) {function content_576a5d6ec80984_87500981($_smarty_tpl) {?>`<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/guestbook.css" />
    <title>文豆电子网-我的留言</title>
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
                <span class="float-left">我的留言</span>
                <span class="small-title">梦想的世界</span>
                <span class="title-link">
                    <a href="">主页 ></a>
                    <a href="">我的留言</a>
                </span>
            </h1>

            <!-- 文章内容 开始 -->
            <div class="article">
                <img src="images/banner.png" alt="" />
                <form action="" method="post">
                    <table>
                        <tbody>
                            <tr>
                                <td class="prop">
                                    <label>用户名</label>
                                </td>
                                <td>
                                    <input type="text" class="inpt_name" name="username" style="width:200px"></td>
                            </tr>
                            <tr>
                                <td class="prop">
                                    <label class="prop">
                                        <label>电子邮件</label>
                                    </label>
                                </td>
                                <td colspan="3">
                                    <input type="text" name="email"></td>
                            </tr>
                            <tr>
                                <td class="prop">
                                    <label>
                                        <label>主题</label>
                                    </label>
                                </td>
                                <td colspan="3">
                                    <input type="text" name="title"></td>
                            </tr>
                            <tr>
                                <td class="prop">
                                    <label>描述</label>
                                </td>
                                <td colspan="3">
                                    <textarea name="content"></textarea>
                                </td>
                            </tr>
                            <tr class="button">
                                <td colspan="4">
                                    <input type="submit" value="提交" class="inpt_submit">
                                    <input type="reset" value="重置" class="inpt_resset"></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <div class="clear"></div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
