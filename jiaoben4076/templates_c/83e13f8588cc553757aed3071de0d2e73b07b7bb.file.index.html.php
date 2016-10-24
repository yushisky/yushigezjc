<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-17 11:31:06
         compiled from "..\view\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:30935578afab74dba78-28965972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83e13f8588cc553757aed3071de0d2e73b07b7bb' => 
    array (
      0 => '..\\view\\admin\\index.html',
      1 => 1468726207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30935578afab74dba78-28965972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578afab7510e41_02473552',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578afab7510e41_02473552')) {function content_578afab7510e41_02473552($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>后台首页</title>
  <meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- End: Header -->

<!-- Start: Main -->

  <!-- End: Sidebar -->    
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      </ol>
    </div>
    <div class="container">


		<div class="col-md-11">
			<div id="docs-content">
				<h2 class="page-header margin-top-none">个人信息</h2>
				<table class="table">
					<tr>
					<td colspan="2">您好，Admin</td>
					</tr>
					<tr>
					<td width="100">最后登录时间:</td>
					<td>2015-01-02 13：20</td>
					</tr>
					<tr>
					<td>最后登录IP:</td>
					<td>127.0.0.1</td>
					</tr>
				</table>

				<h2 class="page-header margin-top-none">系统信息</h2>
				<table class="table">
				  <tr>
				    <td width="100">操作系统：</td>
				    <td>Linux</td>
				  </tr>
				  <tr>
				    <td>PHP 版本:</td>
				    <td>5.2.9</td>
				  </tr>
				  <tr>
				    <td>MySQL 版本:</td>
				    <td>5.1.33</td>
				  </tr>
				</table>
			</div>
		</div>
    </div> 
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --></body>

</html><?php }} ?>
