<?php
/* Smarty version 3.1.30, created on 2017-11-29 16:59:33
  from "D:\phpStudy\WWW\OAM\views\adminmer\accountc\applyBalance.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e76f5ea3426_18467357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4034c253321087704344448b81d1d329aafe2ba9' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\adminmer\\accountc\\applyBalance.html',
      1 => 1511145059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e76f5ea3426_18467357 (Smarty_Internal_Template $_smarty_tpl) {
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
