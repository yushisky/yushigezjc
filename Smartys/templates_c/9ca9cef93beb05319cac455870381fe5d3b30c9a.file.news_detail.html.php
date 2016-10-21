<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-12 17:22:32
         compiled from ".\view\news_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:33595784b6d8c01866-38035652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ca9cef93beb05319cac455870381fe5d3b30c9a' => 
    array (
      0 => '.\\view\\news_detail.html',
      1 => 1468312103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33595784b6d8c01866-38035652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'art_inof' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5784b6d8c66d71_69419485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5784b6d8c66d71_69419485')) {function content_5784b6d8c66d71_69419485($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\Smartys\\smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/news_detail.css" />
    <title>新闻中心详细页-文豆电子网</title>
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
                    <a href="news_center.list.php?cid=1">公司新闻</a>
                </li>
                <li>
                    <a href="news_center.list.php?cid=2">最新公告</a>
                </li>
                <li class="last">
                    <a href="news_center.list.php?cid=4">行业咨询</a>
                </li>
            </ul>
        </div>

        <div class="content-right">
            <!-- 内容右边标题 开始 -->
            <h1 class="title">
                <span class="float-left">新闻中心</span>
                <span class="small-title">梦想的世界</span>
                <span class="title-link">
                    <a href="">主页 ></a>
                    <a href="">新闻中心 ></a>
                    <a href="">公司新闻</a>
                </span>
            </h1>

            <!-- 文章内容 开始 -->
            <div class="article">
                <img src="images/banner.png" alt="" />
                <table class="news_head">
                    <thead>
                        <tr>
                            <td class="prop">
                                <p>主题</p>
                            </td>
                            <td class="last atitle" colspan="3">
                                <p><?php echo $_smarty_tpl->tpl_vars['art_inof']->value['title'];?>
</p>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="prop first">
                                <p>作者</p>
                            </td>
                            <td class="author_name">
                                <?php echo $_smarty_tpl->tpl_vars['art_inof']->value['title'];?>

                            </td>
                            <td class="prop">
                                <p>日期</p>
                            </td>
                            <td>
                                <p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['art_inof']->value['addtime'],"%Y-%m-%d");?>
</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="news_content">
					<?php echo $_smarty_tpl->tpl_vars['art_inof']->value['content'];?>

                </div>
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
</html>
<?php }} ?>
