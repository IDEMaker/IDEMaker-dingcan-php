<?php
/* Smarty version 3.1.30, created on 2017-11-30 17:21:55
  from "D:\phpStudy\WWW\OAM\views\admin\comsuc\comSu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1fcdb3936844_12705462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d4872048b0cb289a28e1ccb4777c276cdbdc5ff' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\admin\\comsuc\\comSu.html',
      1 => 1511941577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1fcdb3936844_12705462 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo CSS;?>
public/page.css">
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>pageurl="?m=admin&c=Comsuc&a=comSu";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
>
</head>
<body>

<span class="main-title">用户投诉建议列表</span>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
        </div>
    </div>
    <!--表格-->
    <div id="show">
        <table class="table  table-hover">
            <thead>
            <tr>
                <th width="20%">用户名称</th>
                <th width="30%">请求时间</th>
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
                <td><?php echo $_smarty_tpl->tpl_vars['val']->value['time'];?>
</td>
                <td align="center"><a class="btn btn-link" onclick="edit(<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
)">查看</a></td>
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
    </div>
</div>
</body>
<?php echo '<script'; ?>
 type="text/javascript">

    function edit(username){
        window.location="?m=admin&c=Comsuc&a=comSu_look&username="+username;
    }


<?php echo '</script'; ?>
>
</html><?php }
}
