<?php
/* Smarty version 3.1.30, created on 2017-11-30 17:07:29
  from "D:\phpStudy\WWW\OAM\views\admin\catec\cate_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1fca517472c9_17986248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82bb4a0560a7f823d5c104290a309190cb5e1a6f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\admin\\catec\\cate_list.html',
      1 => 1510098837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1fca517472c9_17986248 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>

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
>pageurl="?m=admin&c=Catec&a=cate_list";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input type="button" value="添加分类" class="btn btn-primary"  onclick="addCate()">
        </div>

    </div>
    <?php ob_start();
echo APP_PPDP;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."/admin/search.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <!--表格-->
    <div id="show">
    <table class="table table-hover" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th align="center"  width="20%">分类</th>
            <th align="center"  width="20%">所属商户</th>
            <th align="center" width="30%">权重</th>
            <th align="center" >操作</th>
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

            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['cName'];?>
</td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['adminName'];?>
</td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['weight'];?>
</td>
            <td align="center"><a class="btn btn-link" onclick="editCate(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)">修改</a><a class="btn btn-link"  onclick="delCate(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
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
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function editCate(id){
        window.location="?m=admin&c=Catec&a=cate_edit&cId="+id;
    }
    function delCate(id){
        if(window.confirm("您确定要删除吗？删除之后不能恢复哦！！！")){
            window.location="?m=admin&c=Catec&a=cate_delete&cId="+id;
        }
    }
    function addCate(){
        window.location="?m=admin&c=Catec&a=index";
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
