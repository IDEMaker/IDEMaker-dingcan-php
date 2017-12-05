<?php
/* Smarty version 3.1.30, created on 2017-11-29 18:21:40
  from "D:\phpStudy\WWW\OAM\views\admin\orderc\order_list_res.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e8a34388263_66358849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee8063ee56dbca56a910ab6b23e0234456b6cb8b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\admin\\orderc\\order_list_res.html',
      1 => 1511408615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e8a34388263_66358849 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="show">

    <!--表格-->
    <table class="table  table-hover">
        <thead>
        <tr>
            <th width="10%">订单编号</th>
            <th width="20%">名称</th>
            <th width="5%">价格</th>
            <th width="5%">是否支付</th>
            <th width="5%">支付方式</th>
            <th width="5%">订单状态</th>
            <th width="10%">订单时间</th>
            <th width="10%">下单人/手机</th>
            <th width="10%">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($_smarty_tpl->tpl_vars['rows']->value != 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
        <tr align="center">
            <!--这里的id和for里面的c1 需要循环出来-->
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
</td>
            <td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['val']->value['items'], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<br>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
元</td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['val']->value['pay'] == 1) {?>
                是
                <?php } else { ?>
                否
                <?php }?>
            </td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['val']->value['paymethod'] == 0) {?>
                微信
                <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['paymethod'] == 1) {?>
                支付宝
                <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['paymethod'] == 2) {?>
                货到付款
                <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['paymethod'] == 3) {?>
                余额
                <?php }?>
            </td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['val']->value['received'] == 1 || $_smarty_tpl->tpl_vars['val']->value['received'] == 3) {?>
                已接
                <?php } else { ?>
                未接
                <?php }?>
            </td>
            <td>
                <?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['val']->value['orderTime']);?>

            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['val']->value['orderName'];?>
/<?php echo $_smarty_tpl->tpl_vars['val']->value['orderPhone'];?>

            </td>
            <td align="center">
                <a class="btn btn-link"  onclick="printOrder(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)">打印</a>
            </td>
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
    <p align="center">
        当前页面支付成功总余额为<b><font color="red"><?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</font></b>元
    </p>
    <?php }?>
</div><?php }
}
