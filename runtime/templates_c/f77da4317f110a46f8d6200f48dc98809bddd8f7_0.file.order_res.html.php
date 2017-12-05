<?php
/* Smarty version 3.1.30, created on 2017-11-29 16:49:54
  from "D:\phpStudy\WWW\OAM\views\home\orderc\order_res.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e74b2138b52_35061293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f77da4317f110a46f8d6200f48dc98809bddd8f7' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\home\\orderc\\order_res.html',
      1 => 1511258713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e74b2138b52_35061293 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="show">
    <?php if ($_smarty_tpl->tpl_vars['rows']->value != 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
    <div class="order-content">
        <div class="order-meal">
            <table>
                <thead>
                <tr>
                    <th colspan="3">
                        <a href='/shop/<?php echo $_smarty_tpl->tpl_vars['val']->value['shopId'];?>
'  class="shop-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['shopName'];?>
</a>
                        <p class="shop-info">
                            <span class="phone-icon"></span>商家电话：<?php echo $_smarty_tpl->tpl_vars['val']->value['shopPhone'];?>

                        </p>
                    </th>
                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['val']->value['items'], 'obj');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['obj']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['count'];?>
</td>
                    <td class="text-right">￥<?php echo $_smarty_tpl->tpl_vars['obj']->value['price'];?>
</td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                </tbody>
            </table>
            <div class="order-price">
                总价：<span class="ft-red">￥<?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
</span>
            </div>
            <div class="order-delivery">
                <div class="receive-info">
                    <span>订单编号：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
</span>
                    <span>送餐地址：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderAddress'];?>
</span>
                    <span>联系人：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderName'];?>
</span>
                    <span>电话：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderPhone'];?>
</span>
                    <span>送达时间：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderArrivedTime'];?>
</span>
                    <span>备注信息：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderRemark'];?>
</span>
                </div>
            </div>
        </div>
        <div class="order-info">
            <div class="delivery-info">
                <div class="delivery-card ">
                    <div class="card-header nick-selected">
                        <div class="round">
                        </div>
                        <div class="line-through ">
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="status-msg">
                            订单提交成功
                        </div>
                        <div class="prompt"> 订单号：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>

                        </div>
                        <div class="time">
                            <?php echo getDate01($_smarty_tpl->tpl_vars['val']->value['orderTime']);?>

                            <!--//计算15分钟是否支付-->
                            <?php if ($_smarty_tpl->tpl_vars['val']->value['paymethod'] != 2 && $_smarty_tpl->tpl_vars['val']->value['pay'] == 0 && $_smarty_tpl->tpl_vars['val']->value['received'] == 0) {?>
                            <?php $_smarty_tpl->_assignInScope('nowTime', time());
?>
                            <?php $_smarty_tpl->_assignInScope('dis', $_smarty_tpl->tpl_vars['nowTime']->value-$_smarty_tpl->tpl_vars['val']->value['orderTime']);
?>
                            <?php if ($_smarty_tpl->tpl_vars['dis']->value > 15*60) {?>
                            <?php echo autocancel($_smarty_tpl->tpl_vars['val']->value['username'],$_smarty_tpl->tpl_vars['val']->value['orderId']);?>

                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['received'] = 4;
$_smarty_tpl->_assignInScope('val', $_tmp_array);
?>
                            <?php }?>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="delivery-card ">
                    <div class="card-header nick-selected">
                        <div class="round">
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['received'] != 0) {?>
                        <div class=line-through></div>
                        <?php }?>
                    </div>
                    <div class="card-body ">
                        <div class="status-msg">

                            <?php if ($_smarty_tpl->tpl_vars['val']->value['paymethod'] == 2) {?>
                            已提交订单
                            <?php } else { ?>

                            <?php if ($_smarty_tpl->tpl_vars['val']->value['pay'] == 0) {?>
                            等待支付
                            <?php } else { ?>
                            已支付
                            <?php }?>

                            <?php }?>


                        </div>
                        <div class="prompt">
                            <?php if ($_smarty_tpl->tpl_vars['val']->value['paymethod'] == 2) {?>
                            等待商家接单
                            <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['val']->value['pay'] == 0) {?>
                            请在提交订单后15分钟内完成支付
                            <?php } else { ?>
                            已支付，订单进行中
                            <?php }?>
                            <?php }?>

                        </div>
                        <div class="time">
                            <?php if ($_smarty_tpl->tpl_vars['val']->value['pay'] == 1) {?>
                            <?php if ($_smarty_tpl->tpl_vars['val']->value['payTime']) {?>
                            <?php echo getDate01($_smarty_tpl->tpl_vars['val']->value['payTime']);?>

                            <?php }?>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['received'] == 0) {?>
                        class='delivery-card n'
                        <?php } else { ?>
                        class='delivery-card'
                        <?php }?>
                >
                <div class="card-header nick-selected">
                    <div class="round">
                    </div>
                </div>
                <div class="card-body ">
                    <div class="status-msg">
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['received'] == 1) {?>
                        商家已接单
                        <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 2) {?>
                        商家拒绝接单
                        <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 3) {?>
                        订单完成
                        <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 4) {?>
                        订单取消
                        <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 5) {?>
                        订单取消
                        <?php }?>
                    </div>
                    <div class="prompt">
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['received'] == 1) {?>
                        请您耐心等待
                        <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 2) {?>
                        商家忙碌，无法接单
                        <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 3) {?>
                        订单完成，欢迎下次再来
                        <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 4) {?>
                        未支付，订单自动取消
                        <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 5) {?>
                        用户取消订单
                        <?php }?>

                    </div>
                    <div class="time">
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['received'] != 0) {?>
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['receivedTime']) {?>
                        <?php echo getDate01($_smarty_tpl->tpl_vars['val']->value['receivedTime']);?>

                        <?php }?>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="order-operator " >
                <div class="operator-btns">
                    <?php if ($_smarty_tpl->tpl_vars['val']->value['paymethod'] != 2 && $_smarty_tpl->tpl_vars['val']->value['pay'] == 0 && $_smarty_tpl->tpl_vars['val']->value['received'] == 0) {?>
                    <a class=pay-btn onclick="orderPay(<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['orderTime'];?>
)">支付</a> <a class=pay-btn onclick="orderCancel(<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
)">取消</a>
                    <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['paymethod'] == 2 && $_smarty_tpl->tpl_vars['val']->value['received'] == 0) {?>
                    <a class=pay-btn onclick="orderCancel(<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
)">取消</a>
                    <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 1) {?>
                    <a class=pay-btn onclick="urgeOrder(<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
)">催单</a>
                    <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 3) {?>
                    <a class=pay-btn>评价</a><a href='/shop/"<?php echo $_smarty_tpl->tpl_vars['val']->value['shopId'];?>
"' class=pay-btn>再买一次</a>
                    <?php }?>

                </div>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



<div class="page" style="background-color: #9AA4FF"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
<p align="center">
    共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条数据
</p>
</div>
<?php }
}
}
