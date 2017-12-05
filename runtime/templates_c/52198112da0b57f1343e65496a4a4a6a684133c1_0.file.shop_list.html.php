<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:05:46
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/shopc/shop_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a22890abdbf69_88432253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52198112da0b57f1343e65496a4a4a6a684133c1' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/shopc/shop_list.html',
      1 => 1510043760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a22890abdbf69_88432253 (Smarty_Internal_Template $_smarty_tpl) {
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
>pageurl="?m=admin&c=Shopc&a=shop_list";<?php echo '</script'; ?>
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
            <input type="button" value="添加店铺" class="btn btn-primary"  onclick="addShop()">
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
</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    function editShop(shopId){
        window.location="?m=admin&c=Shopc&a=shop_edit&shopId="+shopId;
    }
    function delShop(shopId){
        if(window.confirm("您确定要删除吗？删除之后不能恢复哦！！！")){
            window.location="?m=admin&c=Shopc&a=shop_delete&shopId="+shopId;
        }
    }
    function addShop(){
        window.location="?m=admin&c=Shopc&a=index";
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
