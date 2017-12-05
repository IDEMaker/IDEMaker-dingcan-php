<?php
/* Smarty version 3.1.30, created on 2017-12-02 17:39:28
  from "/home/wwwroot/default/OAM/views/admin/adminc/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2274d0dabed7_25852006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b0321e234cd335fee0dd6a3ebb853e6d497c9f7' => 
    array (
      0 => '/home/wwwroot/default/OAM/views/admin/adminc/index.html',
      1 => 1511925210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2274d0dabed7_25852006 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>
    <link rel=stylesheet href="<?php echo CSS;?>
admin/reset.css">
    <link rel=stylesheet href="<?php echo CSS;?>
admin/bootstrap-admin.css">
    <link rel=stylesheet href="<?php echo CSS;?>
admin/global.css"    />
    <link rel=stylesheet href="<?php echo CSS;?>
admin/backstage.css"   />
</head>
<body>
<span class="main-title">添加管理员</span>
<span id="main-tip"></span>
<div class="form-add">
    <form action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post">
        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="15%"><span class="td-txt">管理员名称</span></td>
                <td><input type="text" name="username" placeholder="请输入管理员名称"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">管理员密码</span></td>
                <td><input type="password" name="password" placeholder="请输入管理密码" /></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">管理员邮箱</span></td>
                <td><input type="text" name="email" placeholder="请输入管理员邮箱"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">管理员电话</span></td>
                <td><input type="text" name="shopPhone" placeholder="请输入电话"/></td>
            </tr>
        </table>
        <input class="btn btn-primary" type="submit"  value="添加管理员"/>
    </form>
</div>
</body>
</html><?php }
}
