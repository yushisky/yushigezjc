<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-24 17:55:36
         compiled from "..\view\admin\wd_nav1_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7516576cf6b78c1f19-31209200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32a980212d0000777422acaf9bff201b699208db' => 
    array (
      0 => '..\\view\\admin\\wd_nav1_list.tpl',
      1 => 1466762044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7516576cf6b78c1f19-31209200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576cf6b7994448_26096184',
  'variables' => 
  array (
    'nav' => 0,
    'val' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576cf6b7994448_26096184')) {function content_576cf6b7994448_26096184($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>CMS内容管理系统</title>
    <?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <!-- Core Javascript - via CDN -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
> 
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
  <div class="pull-left"> <a class="navbar-brand" href="#">
    <div class="navbar-logo"><img src="images/logo.png" alt="logo"></div>
    </a> </div>
  <div class="pull-right header-btns">
    <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
    <a href="login.php" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
  </div>
</header>
<!-- End: Header -->
<!-- Start: Main -->
<div id="main"> 
    <!-- Start: Sidebar -->
  <aside id="sidebar" class="affix">
    <div id="sidebar-search">
    		
    </div>
    <div id="sidebar-menu">
        <?php echo $_smarty_tpl->getSubTemplate ('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </aside>
  <!-- End: Sidebar --> 
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">导航栏管理</li>
      </ol>
    </div>
    <div class="container">
	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">导航栏管理</div>
                  <a href="_nav_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加导航栏</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center">
                          <a class="btn btn-gray btn-sm" id="selectAll">全选</a>
                        </th>
                        <th>导航栏名称</th>
                        <th>导航栏路径</th>
                        <th>类型</th>
                        <th>是否显示</th>
                        <th>更新时间</th>
                        <th width="200">操作</th>
                      </tr>
                     <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                    	 <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['topid'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['is_show'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['addtime'];?>
</td>
                        <td>

		                      <div class="btn-group">
		                        <a href="wd_nav1_edit.php?update=1&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
		                        <a onclick="return confirm('确定要删除吗？');" href="?del=1&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="btn btn-default btn-gradient dropdown-toggle"> <span class="glyphicons glyphicon-trash"></span></a>
                             
		                      </div>
                        
                        </td>
                      </tr>
                    <?php } ?>
                  </table>
                  <div class="pull-left">
                    <button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                  </div>
                  
                   <?php echo $_smarty_tpl->tpl_vars['a']->value;?>

                </div>
                </form>
              </div>
          </div>
        </div>
    </div>
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --> 
</body>
</html><?php }} ?>
