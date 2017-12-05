<?php
/* Smarty version 3.1.30, created on 2017-11-29 16:35:17
  from "D:\phpStudy\WWW\OAM\views\public\home\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e7145976ea5_83567809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766010c4f51dc903e1771b9e369948f7ef58ce66' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\public\\home\\header.html',
      1 => 1511835175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e7145976ea5_83567809 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/jquery-1.8.3.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/jquery.reveal.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/jquery.cookie.js"><?php echo '</script'; ?>
>
    <link rel="icon" href="<?php echo IMAGE;?>
home/favicon.ico" type="image/x-icon" />
    <!--[if lte IE 10]>
    <?php echo '<script'; ?>
 src="scripts/requestAnimationFrame.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <link rel=stylesheet href="<?php echo CSS;?>
home/reset.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/common.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/base.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/account.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/header.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/reveal.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/login.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/shopcart.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/menu02.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/order.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/footer_2.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/form.css">
    <?php echo '<script'; ?>
>pageurl="?m=home&c=Orderc&a=order_list";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
>
    <title><?php ob_start();
echo APP_PPDP;
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable4."/home/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
-订饭组-用户中心</title>
    <style>
        .page ul li{

            margin-left: 10px;
            list-style: none;
        }
        .page ul li a{
            width:17px;
            height:20px;
            font:12px/20px "宋体";
            border:1px solid #CCC;
            display:inline;
            text-align:center;
            padding: 5px;
            text-decoration:none;
            margin-left: 10px;
        }
        .page{
             padding: 5px;
        }
        .page ul li a:hover,.active{ background-color:#1f3a87;
            color:#FFF;}
        .ww{ width:64px;}
    </style>
</head>
<body>
<!--header部分-->
<div class="header shadow">
    <div class="search-result">
    </div>
    <div class="header-left fl">
        <div class="icon fl"></div>
        <a class="weixin-dingfan fw" href="#">微信订饭</a>
        <a class="logo" href="?m=home&c=Indexc&a=index"></a>
        <div class="search">
            <img class="search-icon" src="<?php echo IMAGE;?>
home/icon_search.png" width="22" height="22">
            <input id="search-input" class="search-input" type="text" placeholder="请输入楼名" onkeypress="onKeySearch()">
            <span id="search-del" class="search-del">&times;</span>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header-right fr">
        <div class="login fl">

                    <span class="header-operater">
                    <a href="?m=home&c=Indexc&a=index">外卖</a>
                    <a href="?m=home&c=Accountc&a=order">我的订单</a>
                    <a href="?m=home&c=Accountc&a=about&p=lianxiwomen">联系我们</a>
                    </span>
            <a id="header-login" class="navBtn f-radius f-select n" data-reveal-id="myModal" data-animation="fade">
                登录
            </a>
        </div>
        <div id="cart" class="cart fr">
            <img class="cart-icon" src="<?php echo IMAGE;?>
home/icon_cart_22_22.png">
        </div>
        <div id="user" class="user fr n">
            <img class="user-icon" src="<?php echo IMAGE;?>
home/icon_my.png">
        </div>
    </div>

    <ul id="subnav" class="subnav subnav-shadow n">
        <li><a href="?m=home&c=Userc&a=setting" target="">账号设置</a></li>
        <li><a href="?m=home&c=Accountc&a=order" target="">我的订单</a></li>
        <li><a href="?m=home&c=Userc&a=balance" target="">我的余额</a></li>
        <li><a href="?m=home&c=Userc&a=score" target="">我的积分</a></li>
        <li><a href="?m=home&c=Userc&a=address" target="">我的地址</a></li>
        <li><a id="sub-logout" href="" target="">退出</a></li>
    </ul>
</div><?php }
}
