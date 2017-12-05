<?php
/* Smarty version 3.1.30, created on 2017-12-03 20:33:56
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/userc/user_res.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23ef34aa4de5_84386738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2064f15f7ac9d89e5ee5e6ce3976318361c2d5a' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/userc/user_res.html',
      1 => 1511941398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a23ef34aa4de5_84386738 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="show">
    <table class="table  table-hover">
        <thead>
        <tr>
            <th width="20%">用户名称</th>
            <th width="20%">手机</th>
            <th width="30%">注册时间</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($_smarty_tpl->tpl_vars['data']->value != 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
        <tr align="center">
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['phone'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['regtime'];?>
</td>
            <td align="center"><a class="btn btn-link" onclick="editUser(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)">编辑</a><a class="btn btn-link"  onclick="delUser(<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
)">删除</a></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
    <p align="center">
        <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

    </p>
    <p align="center">
        共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条数据
    </p>
    <?php }?>
</div><?php }
}
