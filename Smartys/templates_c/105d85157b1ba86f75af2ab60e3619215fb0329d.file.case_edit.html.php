<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-18 18:41:32
         compiled from "..\view\admin\case_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:17274578caa0b2ec1a0-93928459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '105d85157b1ba86f75af2ab60e3619215fb0329d' => 
    array (
      0 => '..\\view\\admin\\case_edit.html',
      1 => 1468838487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17274578caa0b2ec1a0-93928459',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578caa0b36dac8_19408723',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578caa0b36dac8_19408723')) {function content_578caa0b36dac8_19408723($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>CMS内容管理系统</title>
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
        <li class="active">编辑案例</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="" method="post" class="cmxform" enctype="multipart/form-data">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">编辑案例</div>
              <div class="panel-btns pull-right margin-left">
              <a href="case_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>
            <div class="panel-body">
            	  <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">所属分类</span>
                    <select name="cat_id" class="form-control" >
                          <option value="1<?php echo 1==$_smarty_tpl->tpl_vars['info']->value['cat_id'];?>
">企业网站</option>
                          <option value="2<?php echo 2==$_smarty_tpl->tpl_vars['info']->value['cat_id'];?>
">电子商务</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">标题</span>
                    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">作者</span>
                        <input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['author'];?>
" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">内容</span>
                        <input type="text" name="content" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">是否显示</span>
                    <select name="is_show" class="form-control" >

                          <option value="<?php echo 1==$_smarty_tpl->tpl_vars['info']->value['is_show'];?>
">显示</option>
                          <option value="2<?php echo 2==$_smarty_tpl->tpl_vars['info']->value['is_show'];?>
">隐藏</option>
                    </select>
                  </div>
                </div>
                  <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">点击人数</span>
                        <input type="text" name="click" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['click'];?>
" class="form-control">
                    </div>
                </div>
                 <div class="input-group"> 
                  <span class="input-group-addon">更新时间</span>
                    <input class="form-control date-picker" id="class_code_cc_time_input" type="text" data-date-format="yyyymmdd" name="time" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['addtime'];?>
">
                </div>
                </div>
                <div class="form-group col-md-12">
                  
                </div>
                <div class="col-md-7">
                 <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
	                <div class="form-group">
	                  <input type="submit" value="提交" name="active" class="submit btn btn-blue">
	                </div>
                </div>
            </div>
          </div>
          </form>
        </div>
    </div>
  </section>
  <!-- End: Content --> 
</div>
</body>
<?php echo '<script'; ?>
 src="js/date-time/bootstrap-datepicker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/common.unpre.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#summernote').summernote({
      height: 300,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true                  // set focus to editable area after initializing summernote
    });
  <?php echo '</script'; ?>
>

</html><?php }} ?>
