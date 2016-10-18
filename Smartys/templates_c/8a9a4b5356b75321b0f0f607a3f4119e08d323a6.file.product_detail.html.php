<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-22 17:03:42
         compiled from ".\view\product_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:13824576a467dd13f95-73289978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a9a4b5356b75321b0f0f607a3f4119e08d323a6' => 
    array (
      0 => '.\\view\\product_detail.html',
      1 => 1466586156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13824576a467dd13f95-73289978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_576a467dd67c07_40013588',
  'variables' => 
  array (
    'public' => 0,
    'val' => 0,
    'detail' => 0,
    'detail2' => 0,
    'detail3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576a467dd67c07_40013588')) {function content_576a467dd67c07_40013588($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/product.css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="js/lib/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/menu.js"><?php echo '</script'; ?>
>
    <title>产品详细页</title>
</head>

<body>
    <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="ad">
        <img src="images/ad_02.png" alt="" />
    </div>
    <div class="content">
        <div class="content-left">
            <img src="images/rope.png" alt="" class="rope" />
            <p class="title-en">PRODUCT</p>
            <h1 class="title-zh">产品展示</h1>
            <ul class="child-menu">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['public']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <li>
                    <a href=""><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a>
                </li>
            <?php } ?>      
            </ul>
        </div>
        <div class="content-right">
            <h1 class="title">
                <span class="float-left">产品介绍</span>
                <span class="small-title">梦想的世界</span>
                <span class="title-link">
                    <a href="">主页 &gt;</a>
                    <a href="">产品展示 &gt;</a>
                    <a href="">电脑 &gt;</a>
                    <a href="">产品介绍</a>
                </span>
            </h1>
            <img src="images/pro_03.png" width="401" height="278" alt="" class="product-img" />
            <table class="product-desc">
                <tr>
                    <th width="70">产品</th>
                    <td>ASA SG 1209</td>
                </tr>
                <tr>
                    <th>大小</th>
                    <td>103.8(L) x 50.8(W) x 12.0(H)</td>
                </tr>
                <tr>
                    <th>旋律</th>
                    <td>64和铉</td>
                </tr>
                <tr>
                    <th>饰品</th>
                    <td>标准电池，背带（清洁）， 专用的电池充电底座，立体声耳机麦克风，外接天线，</td>
                </tr>
                <tr>
                    <th colspan="2" id="img" class="product-small-img no-border">
                        <img src="a/pro_03.png" alt="" />
                        <img src="images/pro_04.png" alt="" />
                        <img src="images/pro_04.png" alt="" class="no-margin" />
                    </th>
                </tr>
            </table>
            <div class="clear"></div>
			<div class="picScroll-left gallery">
			<img class="prev btn-left" src="images/gallery-btn-left.png"  />
            <img class="next btn-right" src="images/gallery-btn-right.png" />
			<div class="bd">
            
				<ul class="picList">
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['detail']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
					<li>
						<div class="pic">
							<a href="#" target="_blank">
								<img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['detail_img'];?>
" />
							</a>
						</div>
						<div class="title_list"><a href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['val']->value['detail_title'];?>
</a></div>
					</li>
                  <?php } ?>
				</ul>
			</div>
		</div>
            <div class="tab">
                <h1 class="tab-title">
                    <span class="active">产品特征</span>
                    <span>产品规格</span>
                </h1>
                <div class="description desc1">
                    <ul>
                     <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['detail2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                        <li>
                            <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['detail_img'];?>
" alt="" class="float-left" />
                            <p class="p-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['detail_title'];?>
</p>
                            <p class="p-desc"><?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</p>
                        </li>
                     <?php } ?>
                       <!--  <li>
                            <img src="images/pro_10.png" alt="" class="float-left" />
                            <p class="p-title">01. MP3 Player</p>
                            <p class="p-desc">输入产品的简要说明在产品上，输入产品简要的简要说明包含产品的介绍去的简要说明。</p>
                        </li>
                        <li class="no-border">
                            <img src="images/pro_10.png" alt="" class="float-left" />
                            <p class="p-title">01. MP3 Player</p>
                            <p class="p-desc">输入产品的简要说明在产品上，输入产品简要的简要说明包含产品的介绍去的简要说明。</p>
                        </li> -->
                    </ul>
                </div>
				<div class="description desc2">
                    <ul>

                     <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['detail3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                        <li>
                            <img src="images/<?php echo $_smarty_tpl->tpl_vars['val']->value['detail_img'];?>
" alt="" class="float-left" />
                            <p class="p-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['detail_title'];?>
</p>
                            <p class="p-desc"><?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</p>
                        </li>
                     <?php } ?>
                        <!-- <li>
                            <img src="images/pro_10.png" alt="" class="float-left" />
                            <p class="p-title">01. MP3 规格</p>
                            <p class="p-desc">输入产品的简要说明在产品上，输入产品简要的简要说明包含产品的介绍去的简要说明。</p>
                        </li>
                        <li>
                            <img src="images/pro_10.png" alt="" class="float-left" />
                            <p class="p-title">01. MP3 Player</p>
                            <p class="p-desc">输入产品的简要说明在产品上，输入产品简要的简要说明包含产品的介绍去的简要说明。</p>
                        </li>
                        <li class="no-border">
                            <img src="images/pro_10.png" alt="" class="float-left" />
                            <p class="p-title">01. MP3 Player</p>
                            <p class="p-desc">输入产品的简要说明在产品上，输入产品简要的简要说明包含产品的介绍去的简要说明。</p>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>
    <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo '<script'; ?>
 type="text/javascript">
		//点击缩略图，出现大图
		$(document).ready(function(){
				
			$('#img').find('img').click(function(){
				
					$('.product-img').attr('src',$(this).attr('src'));
			
			});
			
		});
				
		//轮播列表	
		$(document).ready(function(){
				$(".picScroll-left").slide({
								mainCell:".bd ul",
								autoPage:true,
								effect:"leftLoop",
								autoPlay:true,vis:4
				});
		});
		
		$(document).ready(function(){
			$('.desc2').css('display','none');
			$('.tab-title').find('span').on('click',function(){
			
				$(this).addClass('active').siblings().removeClass('active');
				var i= $(this).index();
				
				
				if(i==0){
					$('.desc1').fadeIn(2000).next().hide();
				}else{
					$('.desc2').fadeIn(2000).prev().hide();
				}
			
			});
			
		
		});
		
	
	<?php echo '</script'; ?>
>
</body>
</html>	<?php }} ?>
