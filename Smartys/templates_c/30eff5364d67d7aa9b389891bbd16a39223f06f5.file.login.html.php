<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-10-18 11:19:34
         compiled from ".\view\login.html" */ ?>
<?php /*%%SmartyHeaderCode:7437578364b1de04b4-37353935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30eff5364d67d7aa9b389891bbd16a39223f06f5' => 
    array (
      0 => '.\\view\\login.html',
      1 => 1470280918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7437578364b1de04b4-37353935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_578364b1e2a0e3_86405912',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578364b1e2a0e3_86405912')) {function content_578364b1e2a0e3_86405912($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <title>登录页</title>
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
                <span class="float-left">登陆</span>
                <span class="small-title"></span>
                <span class="title-link">
                    <a href="">主页 ></a>
                    <a href="">登陆</a>
                </span>
            </h1>
            <div class="login">
                <img src="images/earth.jpg" alt="" class="float-left" style="margin-bottom:55px;" />
                <div class="float-right">
                    <div class="head"></div>
                    <table class="login-input">
                    <form action="" method="post">
                        <span id='tip' style='color:red;dispiay:none'></span>
                        <tr>
                            <td width="64">用户名</td>
                            <td width="199">
                                <input type="text" class="input-text"name="username" id="name"/>
                            </td>
                            <td  rowspan="2">
                                <input type="image" name="dosubmit" src="images/btn-login.jpg" alt="" value="1" />
                            </td>
                        </tr>
                    </tr>
                    <tr>
                        <td>密　码</td>
                        <td>
                            <input type="password" class="input-text" name="password" />
                        </td>
                        </form>
                    </table>
                </div>
                <div class="clear"></div>
                <p class="note">请定期更改GABA政府试图密码，请不要暴露别人。</p>
                <p class="note">当您希望使用该服务来保护您的信息，请务必登出。</p>
            </div>

        </div>
    </div>

    <div class="clear"></div>
     <?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
     <?php echo '<script'; ?>
>
             // 查询重复的数据
                $('#name').blur(function(){
                        // alert(11);
                        var name = $(this).val();//获取内容
                        // 通过js的ajax的get的方式发送请求
                        // post //get
                        $.get('server.php',{'name':name},function(res){
                                console.log(res);
                       
                        if(res.error==1){//结果处理
                            $('#tip').html(res.data+'用户已存在').css({'display':'block','color':'red'});
                        }else{
                             $('#tip').html(res.data+'用户不存在不可登陆').css({'color':'green','display':'block'});
                            // $('#tip').css('display','none');
                        }
                     },'json');

                });
        <?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
