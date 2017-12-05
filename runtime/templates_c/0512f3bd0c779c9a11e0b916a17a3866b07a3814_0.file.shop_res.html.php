<?php
/* Smarty version 3.1.30, created on 2017-12-03 21:16:34
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/shopc/shop_res.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23f932214a17_97714354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0512f3bd0c779c9a11e0b916a17a3866b07a3814' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/shopc/shop_res.html',
      1 => 1510043782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a23f932214a17_97714354 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="show">
    <table class="table table-hover" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th align="center" width="15%">店铺名称</th>
            <th align="center" width="15%">店铺ID</th>
            <th align="center" width="15%">店铺账户</th>
            <th align="center" width="15%">店铺状态</th>
            <th align="center" width="15%">店铺审核</th>
            <th align="center" >店铺icon</th>
            <th align="center" width="40">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($_smarty_tpl->tpl_vars['data']->value != '') {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
        <tr>
            <!--这里的id和for里面的c1 需要循环出来-->

            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['shopName'];?>
</td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['shopId'];?>
</td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['adminName'];?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['val']->value['shopState'] == '1') {?>
            <td align="center">运营</td>
            <?php } else { ?>
            <td align="center">休息</td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['val']->value['isAudit'] == '1') {?>
            <td align="center">已审核</td>
            <?php } else { ?>
            <td align="center">未审核</td>
            <?php }?>
            <td align="center">
                <img src="<?php echo APP_UPLOAD;
echo $_smarty_tpl->tpl_vars['val']->value['shopIconOgl'];?>
" width=50 height=50/>
            </td>
            <td align="center"><a class="btn btn-link" onclick="editShop(<?php echo $_smarty_tpl->tpl_vars['val']->value['shopId'];?>
)">修改</a><a class="btn btn-link"  onclick="delShop(<?php echo $_smarty_tpl->tpl_vars['val']->value['shopId'];?>
)">删除</a></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </tbody>
    </table>
    <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

    <p align="center">共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条数据</p>
    <?php }?>
</div><?php }
}
