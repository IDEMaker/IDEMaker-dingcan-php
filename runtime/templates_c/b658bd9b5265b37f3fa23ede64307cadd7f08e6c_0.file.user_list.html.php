<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:05:31
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/userc/user_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2288fbde5a13_88051368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b658bd9b5265b37f3fa23ede64307cadd7f08e6c' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/userc/user_list.html',
      1 => 1511941368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2288fbde5a13_88051368 (Smarty_Internal_Template $_smarty_tpl) {
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
>pageurl="?m=admin&c=Userc&a=user_list";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
>
</head>
<body>

<span class="main-title">用户列表</span>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
        </div>
    </div>
    <!--表格-->
    <?php ob_start();
echo APP_PPDP;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."/admin/search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
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
    </div>
</div>
</body>
<?php echo '<script'; ?>
 type="text/javascript">

    function addUser(){
        window.location="addUser.php";
    }
    function limitUser(id){

    }
    function editUser(id){
        window.location="?m=admin&c=Userc&a=user_edit&id="+id;
    }
    function delUser(username){
        if(window.confirm("确认删除？")){
            window.location="?m=admin&c=Userc&a=user_delete&username="+username;
        }
    }

<?php echo '</script'; ?>
>
</html><?php }
}
