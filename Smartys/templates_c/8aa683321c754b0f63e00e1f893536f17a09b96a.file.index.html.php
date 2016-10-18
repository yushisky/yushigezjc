<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-16 04:20:30
         compiled from ".\templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1671057620cee330734-67857479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aa683321c754b0f63e00e1f893536f17a09b96a' => 
    array (
      0 => '.\\templates\\index.html',
      1 => 1404400574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1671057620cee330734-67857479',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57620cee435706_44973501',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57620cee435706_44973501')) {function content_57620cee435706_44973501($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="js/lib/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/plugins/jquery.SuperSlide.2.1.1.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/menu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $('#tab').slide({
            titCell:'.tab-controll',
            targetCell:'.list-article',
            titOnClassName:'active'
        });

        $('#slide').slide({
            mainCell:'.product'
        });

        $('#accordion').slide({
            titCell:'.box .title',
            targetCell:'.box-content'
        });
    });
    <?php echo '</script'; ?>
>
    <title>文豆电子网-首页</title>
</head>
<body>
    <div class="header">
        <div class="header-left">
            <a href="index.html">
                <img src="images/header-logo.jpg" class="logo" />
            </a>
        </div>
        <div class="header-right">
            <ul class="menu">
                <li>
                    <a href="">注册</a>
                </li>
				<li> <a href="">登陆</a></li>
            </ul>
            <div class="clear"></div>
            <ul class="nav-main" id="nav">
                <li class="nav-li">
                    <a class="active" href="">关于我们</a>
                    <div class="nav-child">
                        <div class="nav-left"></div>
                        <div class="nav-center">
                            <ul>
                                <li>
                                    <a href="article_ceo.html">CEO 致词</a>
                                </li>
                                <li>
                                    <a href="">公司历史</a>
                                </li>
                                <li>
                                    <a href="">企业文化</a>
                                </li>
                                <li>
                                    <a href="">组织结构</a>
                                </li>
                                <li>
                                    <a href="">合作伙伴</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-right"></div>
                    </div>
                </li>
                <li class="nav-li">
                    <a href="">产品展示</a>
                    <div class="nav-child">
                        <div class="nav-left"></div>
                        <div class="nav-center">
                            <ul>
                                <li>
                                    <a href="article_ceo.html">CEO 致词</a>
                                </li>
                                <li>
                                    <a href="">公司历史</a>
                                </li>
                                <li>
                                    <a href="">企业文化</a>
                                </li>
                                <li>
                                    <a href="">组织结构</a>
                                </li>
                                <li>
                                    <a href="">合作伙伴</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-right"></div>
                    </div>
                </li>
                <li class="nav-li">
                    <a href="">新闻中心</a>
                    <div class="nav-child">
                        <div class="nav-left"></div>
                        <div class="nav-center">
                            <ul>
                                <li>
                                    <a href="article_ceo.html">CEO 致词</a>
                                </li>
                                <li>
                                    <a href="">公司历史</a>
                                </li>
                                <li>
                                    <a href="">企业文化</a>
                                </li>
                                <li>
                                    <a href="">组织结构</a>
                                </li>
                                <li>
                                    <a href="">合作伙伴</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-right"></div>
                    </div>
                </li>
                <li class="nav-li">
                    <a href="">人才招聘</a>
                    <div class="nav-child">
                        <div class="nav-left"></div>
                        <div class="nav-center">
                            <ul>
                                <li>
                                    <a href="article_ceo.html">CEO 致词</a>
                                </li>
                                <li>
                                    <a href="">公司历史</a>
                                </li>
                                <li>
                                    <a href="">企业文化</a>
                                </li>
                                <li>
                                    <a href="">组织结构</a>
                                </li>
                                <li>
                                    <a href="">合作伙伴</a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-right"></div>
                    </div>
                </li>
                <li class="nav-li last">
                    <a href="">客户留言</a>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>

    <div class="ad">
        <a href="">
            <img src="images/ad.png" />
        </a>
    </div>

    <div class="content">
        <div class="content-left" id="tab">
            <ul class="list-title">
                <li class="active tab-controll">通知</li>
                <li class="tab-controll">公司新闻</li>
                <li class="more">
                    <a href="">
                        <img src="images/more.png" />
                    </a>
                </li>
            </ul>

            <div class="clear"></div>

            <ul class="list-article">
                <li>
                    <a href="">
                        <span class="float-left">▪ 1web上半年人才录用向导</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="float-left">▪ 1设立技术研究所网站(大田)</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="float-left">▪ 1web俄罗斯市场扩大</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="float-left">▪ 1举办座谈会的合作企业网站</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
            </ul>
            <ul class="list-article">
                <li>
                    <a href="">
                        <span class="float-left">▪ web上半年人才录用向导</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="float-left">▪ 设立技术研究所网站(大田)</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="float-left">▪ web俄罗斯市场扩大</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="float-left">▪ 举办座谈会的合作企业网站</span>
                        <span class="float-right time">[2014-01-01]</span>
                    </a>
                </li>
            </ul>

            <div class="clear"></div>

            <ul class="link-short">
                <li class="first">
                    <a href="">
                        <img src="images/cloth.png" />
                        <p>
                            人才招聘
                            <br/>
                            <span>Job</span>
                        </p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/floder.png" />
                        <p>
                            投资程序
                            <br/>
                            <span>Process</span>
                        </p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="images/email.png" width="50" />
                        <p>
                            投资咨询
                            <br/>
                            <span>Q&A</span>
                        </p>
                    </a>
                </li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="content-center">
            <!-- 产品展示 开始 -->
            <div class="top" id="slide">
                <div class="product">
                    <div>
                        <img src="images/pro_01.png" alt="" class="photo" />
                        <ul class="info">
                            <li> <b>New
                                    <span>Product</span></b> 
                            </li>
                            <li>
                                <span>ASA SG 1111</span>
                            </li>
                            <li class="description">最好的产品,坚持ASA&nbsp; web开发的产品的特别系列</li>
                            <li>
                                <a href="">
                                    <img src="images/more.png" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div style="display:none">
                        <img src="images/pro_01.png" alt="" class="photo" />
                        <ul class="info">
                            <li> <b>New
                                    <span>Product</span></b> 
                            </li>
                            <li>
                                <span>ASA SG 2222</span>
                            </li>
                            <li class="description">最好的产品,坚持ASA&nbsp; web开发的产品的特别系列</li>
                            <li>
                                <a href="">
                                    <img src="images/more.png" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <img src="images/ico-left.png" alt="" class="btn-left prev" />
                <img src="images/ico-right.png" alt="" class="btn-right next" />
            </div>

            <!-- 热门文章 开始 -->
            <ul class="article">
                <li>
                    <img src="images/photo_01.png" alt="" class="photo" />
                    <p>
                        <span>e-目录</span>
                        <br/>
                        持续的企业延伸的《web
                        <br/>
                        <a href="">
                            <img src="images/more.png" alt="" />
                        </a>
                    </p>
                </li>
                <li class="last">
                    <img src="images/photo_01.png" alt="" class="photo" />
                    <p>
                        <span>e-目录</span>
                        <br/>
                        持续的企业延伸的《web
                        <br/>
                        <a href="">
                            <img src="images/more.png" alt="" />
                        </a>
                    </p>
                </li>
            </ul>

        </div>
        <div class="content-right" id="accordion">
            <div class="box">
                <div class="title">
                    <p class="float-left">
                        <span>01</span> <b>公司历史</b>
                    </p>
                    <img src="images/reduce.png" alt="" />
                </div>
                <div class="box-content">
                    <p>
                        <b>BUSINESS INFO</b>
                        <br />
                        持续的企业延伸的维伯,《介绍我
                        <br />
                        <a href="">
                            <img src="images/more.png" alt="" class="more" />
                        </a>
                    </p>
                    <img src="images/hotel.png" alt="" class="photo" />
                    <div class="clear"></div>
                </div>
            </div>
            <div class="box">
                <div class="title">
                    <span>02</span>
                    <b>企业文化</b>
                    <img src="images/add.png" alt="" />
                </div>
                <div class="box-content" style="display:none">
                    <p>
                        <b>BUSINESS INFO</b>
                        <br />
                        持续的企业延伸的维伯,《介绍我
                        <br />
                        <a href="">
                            <img src="images/more.png" alt="" class="more" />
                        </a>
                    </p>
                    <img src="images/hotel.png" alt="" class="photo" />
                </div>
            </div>
            <div class="box">
                <div class="title">
                    <span>03</span>
                    <b>合作伙伴</b>
                    <img src="images/add.png" alt="" />
                </div>
                <div class="box-content" style="display:none">
                    <p>
                        <b>BUSINESS INFO</b>
                        <br />
                        持续的企业延伸的维伯,《介绍我
                        <br />
                        <a href="" class="float-left">
                            <img src="images/more.png" alt="" class="more" />
                        </a>
                    </p>
                    <img src="images/hotel.png" alt="" class="photo" />
                    <div class="clear"></div>
                </div>
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
</html><?php }} ?>
