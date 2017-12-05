<?php
/* Smarty version 3.1.30, created on 2017-11-29 15:55:28
  from "D:\phpStudy\WWW\OAM\views\public\home\fonter.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e67f0ba34a6_44048842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af7cc0b081fb38d4e5f6324fbf35b83321464870' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\public\\home\\fonter.html',
      1 => 1511835438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e67f0ba34a6_44048842 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footer-content">
    <div class="footer-content-entrance">
        <a class="footer-content-link" href="?m=home&c=Accountc&a=about&p=guanyuwomen">关于我们</a>
        <span class="footer-content-separator">|</span>
        <a class="footer-content-link footer-content-weixing">关注微信
            <img class="weixin-pic" src="<?php echo IMAGE;?>
home/mmqrcode1511835374057.png">
        </a>
        <span class="footer-content-separator">|</span>
        <a class="footer-content-link" href="?m=home&c=Accountc&a=about&p=tousujianyi">投诉建议</a>
        <span class="footer-content-separator">|</span>
        <a class="footer-content-link kaidian_address" href="?m=home&c=Accountc&a=about&p=shangjiaruzhu">商家入驻</a>

    </div>
    <div class="footer-content-copyright">©2017-2020 <?php echo getConfig('systemUrl');?>
&nbsp;<a target="_blank"><?php echo getConfig('systemCopy');?>
</a> </div>
</div><?php }
}
