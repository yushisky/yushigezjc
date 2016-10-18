<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-18 17:59:49
         compiled from "..\view\admin\case_list.html" */ ?>
<?php /*%%SmartyHeaderCode:27870578afc26f0a6b6-80868333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12576f56a9866c0f74671f9eaed6388e6b748535' => 
    array (
      0 => '..\\view\\admin\\case_list.html',
      1 => 1468835823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27870578afc26f0a6b6-80868333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578afc27008f77_25333892',
  'variables' => 
  array (
    'cases_data' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578afc27008f77_25333892')) {function content_578afc27008f77_25333892($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>案例列表</title>
  <meta name="keywords" content="Admin">
  <meta name="description" content="Admin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- End: Header -->
  <!-- End: Sidebar -->  
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">案例管理</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-12">
			<div class="panel">
                <div class="panel-heading">
                  <div class="panel-title">案例列表</div>
                  <a href="case_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加案例</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                        <th class="text-center">
                          <a class="btn btn-gray btn-sm" id="selectAll">全选</a></th>
                        <th>所属分类</th>
                        <th>标题</th>
                        <th>作者</th>
                        <th>内容</th>
                        <th>点击人数</th>
                        <th>是否显示</th>
                        <th>更新时间</th>
                        <th width="200">操作</th>
                      </tr>
                      <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cases_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                      <tr class="success">
                        <td class="text-center"><input type="checkbox" value="1" name="idarr[]" class="cbox"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['cat_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['author'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['click'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['is_show'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['addtime'];?>
</td>
                        <td>
                          <div class="btn-group">
                            <a href="case_edit.php?update=1&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                            <a onclick="return confirm('确定要删除吗？');" href="?del=1&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                          </div>
                        </td>
                      </tr>
                      <?php } ?>
                  </table>
                  <div class="pull-left">
                  	<button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                  </div>
                  <div class="pull-right">
                    <ul class="pagination" id="paginator-example">

                     <!--  <li><a href="#">&lt;</a></li>
                      <li><a href="#">&lt;&lt;</a></li>
                      <li><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">&gt;</a></li>
                      <li><a href="#">&gt;&gt;</a></li> -->
                    </ul>
                  </div>
                  
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
