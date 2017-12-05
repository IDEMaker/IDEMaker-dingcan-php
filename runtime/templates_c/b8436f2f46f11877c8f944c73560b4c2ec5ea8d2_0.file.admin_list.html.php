<?php
/* Smarty version 3.1.30, created on 2017-12-03 18:41:19
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/adminc/admin_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23d4cf4633f3_73391701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8436f2f46f11877c8f944c73560b4c2ec5ea8d2' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/adminc/admin_list.html',
      1 => 1511927626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a23d4cf4633f3_73391701 (Smarty_Internal_Template $_smarty_tpl) {
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
>pageurl="?m=admin&c=Adminc&a=admin_list";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
>
</head>

<body>
<span class="main-title">管理员列表</span>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input class="btn btn-primary"  type="button" value="添加管理员" class="add"  onclick="addAdmin()">
        </div>

    </div>
    <!--表格-->
    <div id="show">
    <table  class="table  table-hover">
        <thead>
        <tr>
            <th width="25%">管理员名称</th>
            <th width="30%">管理员邮箱</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
        <tr align="center">

            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
</td>
            <td align="center"><a class="btn btn-link" onclick="editAdmin(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)">修改</a><a class="btn btn-link" onclick="delAdmin(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
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
    </div>
</div>
</body>
<?php echo '<script'; ?>
 type="text/javascript">

    function addAdmin(){
        window.location="?m=admin&c=Adminc&a=index";
    }
    function editAdmin(id){
        window.location="?m=admin&c=Adminc&a=admin_edit&id="+id;
    }
    function delAdmin(id){
        if(window.confirm("您确定要删除吗？删除之后不可以恢复哦！！！")){
            window.location="?m=admin&c=Adminc&a=admin_delete&id="+id;
        }
    }
<?php echo '</script'; ?>
>
</html><?php }
}
