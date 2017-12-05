<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:19:45
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/adminmer/accountc/withbalance.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a228c5194da75_85725351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33a3d037113707d655323fa7309b0fe231f57be9' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/adminmer/accountc/withbalance.html',
      1 => 1511176986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a228c5194da75_85725351 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo CSS;?>
public/page.css">
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>pageurl="?m=adminmer&c=Accountc&a=mywithBalance";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
>
</head>
<body>
<span class="main-title">我的提现记录</span>
<div class="details_operation clearfix">

    <div class="fl">
    </div>

    <div class="fr">
        <div class="text">

                <span>
                                <input type="text" value="" placeholder="搜索关键字如:2017年" class="search form-control" name="search">
                                </span>
            <span>
                    <input type="button" value="搜索" id="search" class="btn btn-primary">
                </span>
        </div>
    </div>
</div>

<div id="show">
<table  class="table  table-hover" cellspacing="0" cellpadding="0">
    <thead>
    <tr>
        <th width="10%">提现账户</th>
        <th width="10%">提现金额</th>
        <th width="10%">提现后余额</th>
        <th width="10%">提现状态</th>
        <th width="10%">提现时间</th>
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
        <td style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['withAccount'];?>
</td>
        <td> <b><font color="red" style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['balance'];?>
</font></b></td>
        <td><b><font color="red" style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['withBalance'];?>
</font></b></td>
        <?php if ($_smarty_tpl->tpl_vars['val']->value['status'] == 1) {?>
        <td>已审核</td>
        <?php } else { ?>
        <td>待审核</td>
        <?php }?>

        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['createTime'];?>
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
        当前页面总提现额为<b><font color="red"><?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</font></b>元
    </p>
    <?php }?>
</div>
</body>
</html><?php }
}
