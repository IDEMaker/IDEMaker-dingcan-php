<?php
/* Smarty version 3.1.30, created on 2017-11-29 16:45:35
  from "D:\phpStudy\WWW\OAM\views\admin\shopc\balance.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e73af907e89_49915073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09f1b2580375bc6f35840b39cc51cc486f335314' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\admin\\shopc\\balance.html',
      1 => 1511423230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e73af907e89_49915073 (Smarty_Internal_Template $_smarty_tpl) {
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
