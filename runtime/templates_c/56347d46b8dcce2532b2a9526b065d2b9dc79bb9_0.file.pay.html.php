<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:10:12
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/home/orderc/pay.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a228a141bf133_28079204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56347d46b8dcce2532b2a9526b065d2b9dc79bb9' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/home/orderc/pay.html',
      1 => 1511835068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a228a141bf133_28079204 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/common.js"><?php echo '</script'; ?>
>
    <link rel=stylesheet href="<?php echo CSS;?>
home/reveal.css">
    <title><?php ob_start();
echo APP_PPDP;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."/home/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
-订饭组-支付页</title>
</head>
<body>
<!--提示框-->
<div id="alertModel" class="alertModel" >
    <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
    <span id="alert-msg"></span>
    <a id="btn-ok" class="btn">知道了</a>
    <a id="btn-close" class="close-reveal-modal"><img src="<?php echo IMAGE;?>
home/icon_close.png" height="24" width="24"></a>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/md5.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/cart.lib.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/myInfo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/shopInfo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/order.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        commitOrder();

    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
