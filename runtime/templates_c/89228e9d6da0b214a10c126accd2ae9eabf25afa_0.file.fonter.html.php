<?php
/* Smarty version 3.1.30, created on 2017-12-02 17:39:54
  from "/home/wwwroot/default/OAM/views/public/home/fonter.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2274ea074783_77806795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89228e9d6da0b214a10c126accd2ae9eabf25afa' => 
    array (
      0 => '/home/wwwroot/default/OAM/views/public/home/fonter.html',
      1 => 1511835440,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2274ea074783_77806795 (Smarty_Internal_Template $_smarty_tpl) {
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
