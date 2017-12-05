<?php
/* Smarty version 3.1.30, created on 2017-11-29 19:23:54
  from "D:\phpStudy\WWW\OAM\views\admin\shopc\shopApply.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e98ca5f5040_75966866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92cbe72c77b06ff204af36cf4ee2b6b9bed5b59f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\admin\\shopc\\shopApply.html',
      1 => 1511922616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e98ca5f5040_75966866 (Smarty_Internal_Template $_smarty_tpl) {
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
>pageurl="?m=admin&c=Shopc&a=shopApply";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
>
</head>
<body>
<span class="main-title">入驻申请</span>
<div class="details_operation clearfix">

    <div class="fl">
    </div>

    <div class="fr">
        <div class="text">

                <span>
                                <input type="text" value="" placeholder="搜索关键字如:申请人" class="search form-control" name="search">
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
        <th width="10%">申请人</th>
        <th width="10%">联系电话</th>
        <th width="10%">申请状态</th>
        <th width="10%">申请时间</th>
        <th width="10%">操作</th>
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
        <td style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</td>
        <td style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['hotelPhone'];?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['val']->value['readStatus'] == 0) {?>
        <td>待阅读</td>
        <?php }?>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['time'];?>
</td>
        <td align="center"><a class="btn btn-link" onclick="editt(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)">审核</a><a class="btn btn-link"  onclick="look(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
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
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button id="btn-close" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 id="alert-title" class="modal-title">标题</h4>
            </div>
            <div class="modal-body">
                <p id="alert-body">内容</p>
            </div>
            <div class="modal-footer">
                <button id="btn-ok" type="button" class="btn btn-default" data-dismiss="modal">知道了</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
admin/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
admin/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
admin/jquery.jqprint-0.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function editt(id)
    {
        var postUrl="?m=admin&c=Shopc&a=shopApply";
        $.post(postUrl,
            {id:id},
            function(data,status,xhr) {
                if(status=="success"){
                    $res= $.parseJSON(data);
                     if($res.code==1)
                     {
                         showAlert("入驻申请","审核完毕,请刷新");
                     }else if($res.code==0){
                         showAlert("入驻申请","审核失败,请刷新");
                     }

                }else{
                    showAlert("服务器异常");
                }
            });
    }
    function look(id)
    {
        window.location.href='?m=admin&c=Shopc&a=shopApply_look&id='+id;
    }
<?php echo '</script'; ?>
><?php }
}
