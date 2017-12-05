<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:19:42
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/adminmer/accountc/balance.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a228c4e00b086_69551509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4ebe53ee8a79b8dd2a01c1145be7597e503635' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/adminmer/accountc/balance.html',
      1 => 1511163616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a228c4e00b086_69551509 (Smarty_Internal_Template $_smarty_tpl) {
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
<span class="main-title">我的余额</span>
<table  class="table  table-hover">
    <thead>
    <tr>
        <th width="10%">我的余额</th>
        <th width="10%">冻结余额</th>
        <th width="50%">申请提现</th>
    </tr>
    </thead>
    <tbody>
    <tr align="center">
        <td>
            <b><font color="red" style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['data']->value['balance'];?>
</font></b>
        </td>
        <td>
            <b><font color="red" style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['data']->value['freezeBalance'];?>
</font></b>
        </td>
        <td>
            <a href="?m=adminmer&c=Accountc&a=applyBalance" style="font-size: 25px;">立即申请</a>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html><?php }
}
