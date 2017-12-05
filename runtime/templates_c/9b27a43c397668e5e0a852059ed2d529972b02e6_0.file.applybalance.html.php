<?php
/* Smarty version 3.1.30, created on 2017-12-03 18:46:52
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/adminmer/accountc/applybalance.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23d61cbac182_51814809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b27a43c397668e5e0a852059ed2d529972b02e6' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/adminmer/accountc/applybalance.html',
      1 => 1511145060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a23d61cbac182_51814809 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel=stylesheet href="<?php echo CSS;?>
adminmer/reset.css">
    <link rel=stylesheet href="<?php echo CSS;?>
adminmer/bootstrap-admin.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
adminmer/backstage.css">
</head>
<body>
<span class="main-title">余额提现</span>
<div class="form-add">
    <form id="form1" action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post">
        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right"><span class="td-txt">当前余额</span></td>
                <td> <b><font color="red" style="font-size: 20px;"><input type="text"  disabled value="<?php echo $_smarty_tpl->tpl_vars['data']->value['balance'];?>
"/></font></b></td>
            </tr>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">提现余额</span></td>
                <td><input type="text" width="100%" id="balance" name="balance" placeholder="请输入提现金额"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">支付宝账户</span></td>
                <td><input type="text" width="100%" id="withAccount" name="withAccount" placeholder="请输入提现账户"/></td>
            </tr>
        </table>
        <input class="btn btn-primary" type="submit" value="提现"/>
    </form>
</div>
</body>
</html><?php }
}
