<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-11 17:19:43
         compiled from ".\view\register.html" */ ?>
<?php /*%%SmartyHeaderCode:13255578364af0e5158-80479167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7509f0aeec7bf2b5f84367d2df28e3acdabea56a' => 
    array (
      0 => '.\\view\\register.html',
      1 => 1466677591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13255578364af0e5158-80479167',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578364af1289f9_75128552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578364af1289f9_75128552')) {function content_578364af1289f9_75128552($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/registor.css" />
    <title>注册页</title>
</head>

<body>
   <?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="ad">
        <img src="images/ad_02.png" alt="" />
    </div>

    <div class="content">
        <div class="content-left">
            <img src="images/rope.png" alt="" class="rope" />
            <p class="title-en">MYINFO</p>
            <h1 class="title-zh">我的账户</h1>
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
                <span class="float-left">注册</span>
                <span class="small-title"></span>
                <span class="title-link">
                    <a href="">主页 &gt;</a>
                    <a href="">注册</a>
                </span>
            </h1>
            <div class="login">
                <img src="images/earth.jpg" alt="" class="float-right" />
			    <div class="clear"></div>
				<h3>Member Register</h3>
				<hr color="#1647a1" size="5" />
				<table width="100%" border="0">
                <form action="" method="post">
                <span id='tip' style='color:red;dispiay:none'></span>
					<tr>
						<td class="t-r">用户名</td>
						<td><input class="w200" type="text" name="username" id="name" value=""/></td>
                        
					</tr>
					<tr>
						<td class="t-r">密 码</td>
						<td><input class="w200" type="password" name="pass" id="" value=""/></td>
					</tr>
					<tr>
						<td class="t-r">确认密码</td>
						<td><input class="w200" type="password" name="repass" id="" value=""/></td>
					</tr>
					<tr>
						<td class="t-r">电子邮箱</td>
						<td><input type="text" class="w200" name="email" id="" value=""/></td>
					</tr>
					<tr>
						<td class="t-r">性别</td>
						<td>
								<label><input type="radio" name="sex" value="1" value=""/>&nbsp;男</label>&nbsp;&nbsp;
								<label><input type="radio" name="sex" value="2" value=""/>&nbsp;女</label>
						</td>
					</tr>
					<tr>
						<td class="t-r">个人介绍</td>
						<td><textarea name="content" cols="50" rows="7"></textarea></td>
					</tr>
					<tr class="h70">
						<td>&nbsp;</td>
						<td>
                        <input type="image" name="dosubmit" value="" src="images/register.jpg" alt=""/>
                         <input type="image" name="dosubmit" value="" src="images/reset.jpg" alt=""/>
						</td>
					</tr>

                   </form>
				</table>
               
            </div>

        </div>
		<div class="clear"></div>
		
    </div>

    <div class="clear"></div>
    <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
        <?php echo '<script'; ?>
>
             // 查询重复的数据
                $('#name').blur(function(){// #name设置一个id值
                        // alert(11);
                        var name = $(this).val();//获取内容
                        // 通过js的ajax的get的方式发送请求
                        //可以通过 post //get
                        $.get('server.php',{'name':name},function(res){//链表数据库server.php唯一性判断
                                console.log(res);
                        // 他的id隐藏域设置<span id='tip' style='color:red;dispiay:none'></span>
                        if(res.error==1){//结果处理
                            $('#tip').html(res.data+'账号已存在').css({'display':'block','color':'red'});
                        }else{
                             $('#tip').html(res.data+'账号可以使用').css({'color':'green','display':'block'});
                            // $('#tip').css('display','none');
                        }
                        // if(res.data==$name){
                        //     show_msg('账号已存在注册失败');die;
                        // }
                     },'json');
                });
        <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
