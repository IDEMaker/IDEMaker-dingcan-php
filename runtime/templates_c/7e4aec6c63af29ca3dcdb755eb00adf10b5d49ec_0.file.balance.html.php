<?php
/* Smarty version 3.1.30, created on 2017-12-03 18:40:08
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/shopc/balance.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23d4885166d0_44829274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e4aec6c63af29ca3dcdb755eb00adf10b5d49ec' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/shopc/balance.html',
      1 => 1511423232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a23d4885166d0_44829274 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel=stylesheet href="<?php echo CSS;?>
admin/reset.css">
    <link rel=stylesheet href="<?php echo CSS;?>
admin/bootstrap-admin.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
admin/backstage.css">
</head>
<body>
<span class="main-title">我的余额</span>
<table  class="table  table-hover">
    <thead>
    <tr>
        <th width="10%">我的余额</th>
        <th width="10%">冻结余额</th>
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
    </tr>
    </tbody>
</table>
</body>
</html><?php }
}
