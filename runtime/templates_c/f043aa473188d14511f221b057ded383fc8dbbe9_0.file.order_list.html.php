<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:54:26
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/orderc/order_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2294725293f5_81167726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f043aa473188d14511f221b057ded383fc8dbbe9' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/orderc/order_list.html',
      1 => 1511418592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2294725293f5_81167726 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>-.-</title>
    <link rel="stylesheet" href="<?php echo CSS;?>
admin/reset.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
admin/bootstrap-admin.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
admin/backstage.css">
    <link rel=stylesheet   href="<?php echo CSS;?>
public/page.css">
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/jquery-1.8.3.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>pageurl="?m=admin&c=Orderc&a=order_list";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
>
</head>

<body>
<span class="main-title">订单列表</span>
<div class="details">
    <div class="details_operation clearfix">

        <div class="fl">
        </div>

        <div class="fr">
            <div class="text">

                <span>
                                <input type="text" value="" placeholder="搜索如:下单人/手机/订单号" class="search form-control" name="search">
                                </span>
                <span>
                    <input type="button" value="搜索" id="search" class="btn btn-primary">
                </span>
            </div>
        </div>
    </div>
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
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
