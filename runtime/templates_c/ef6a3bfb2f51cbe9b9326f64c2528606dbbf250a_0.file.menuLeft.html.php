<?php
/* Smarty version 3.1.30, created on 2017-12-02 18:43:31
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/public/home/menuLeft.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2283d3eb1747_93153325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef6a3bfb2f51cbe9b9326f64c2528606dbbf250a' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/public/home/menuLeft.html',
      1 => 1510914066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2283d3eb1747_93153325 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content-left fl">
    <div class="menu-left">
        <dl>
            <dt>个人中心</dt>
            <dd class="menu-item">
                            <span class="left-icon">
                                <img src="<?php echo IMAGE;?>
home/icon_order.png" width="18px" height="18px">
                            </span>
                <a href="?m=home&c=Accountc&a=order">我的订单</a>
            </dd>
            <dd class="menu-item">
                            <span class="left-icon">
                                <img src="<?php echo IMAGE;?>
home/icon_address.png" width="18px" height="18px">
                            </span>
                <a href="?m=home&c=Userc&a=address">送餐地址</a>
            </dd>
            <dd class="menu-item">
                            <span class="left-icon">
                                <img src="<?php echo IMAGE;?>
home/icon_score.png" width="18px" height="18px">
                            </span>
                <a href="?m=home&c=Userc&a=score">我的积分</a>
            </dd>
            <dd class="menu-item">
                            <span class="left-icon">
                                <img src="<?php echo IMAGE;?>
home/icon_balance.png" width="18px" height="18px">
                            </span>
                <a href="?m=home&c=Userc&a=balance">我的余额</a>
            </dd>
            <dd class="menu-item ">
                            <span class="left-icon">
                                <img src="<?php echo IMAGE;?>
home/icon_settings.png" width="18px" height="18px">
                            </span>
                <a href="?m=home&c=Userc&a=setting">账户设置</a>
            </dd>
        </dl>
    </div>
</div><?php }
}
