<?php
/* Smarty version 3.1.30, created on 2017-11-29 16:57:41
  from "D:\phpStudy\WWW\OAM\views\adminmer\loginc\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e7685744e10_07413004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd462253a1632714501dde04ce0a18e972f6157a7' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\adminmer\\loginc\\index.html',
      1 => 1510111751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e7685744e10_07413004 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>商家后台登陆</title>
    <link  rel="stylesheet" href="<?php echo CSS;?>
adminmer/reset.css">
    <link rel=stylesheet href="<?php echo CSS;?>
adminmer/bootstrap-admin.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
adminmer/backstage.css">
    <link  rel="stylesheet" href="<?php echo CSS;?>
adminmer/main.css?v=1">
    <!--[if IE 6]>
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/DD_belatedPNG_0.0.8a-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../js/ie6Fixpng.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 rel="stylesheet" src="<?php echo JS;?>
public/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>verifysurl="?m=adminmer&c=loginc&a=verifys";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 rel="stylesheet" src="<?php echo JS;?>
public/verifys.js"><?php echo '</script'; ?>
>
</head>

<body>

<div class="head">
    <div class="logo fl"><a href="#"></a></div>
    <span class="head_text">商家后台登录系统</span>

</div>

<div class="loginTip">
    测试账号：admin 密码：admin
</div>

<div class="loginBox">
    <div class="login_cont">
        <form action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post">
            <ul class="login">
                <li class="l_tit">管理员帐号</li>
                <li class="mb_10"><input type="text"  name="username" placeholder="请输入管理员帐号"class="form-control"></li>
                <li class="l_tit">密码</li>
                <li class="mb_10"><input type="password"  name="password" class="form-control" placeholder="请输入密码"></li>
                <li class="l_tit">验证码</li>
                <li class="mb_10"><input type="text"  name="verify" class="form-control password_icon"></li>
                <img src="?m=adminmer&c=loginc&a=verifys" class="verifys"/>
                <li class="autoLogin"><input type="checkbox" id="a1" class="checked" name="autoFlag" value="1"><span class="checked-txt">一个月内自动登录</span></li>
                <li><input type="submit" value="登录" class="btn btn-primary login-btn"></li>
            </ul>
        </form>
    </div>
</div>

<div class="footer">
    <p>版权所属:PackIDE官方 <a href="http://www.fmlynet.cn/">www.fmlynet.cn</a></p>
    <p>二次开发保留原版权:Copyright &copy; 2015 - 2017 dingfanzu.com&nbsp;&nbsp;&nbsp;</p>
</div>
</body>
</html>
<?php }
}
