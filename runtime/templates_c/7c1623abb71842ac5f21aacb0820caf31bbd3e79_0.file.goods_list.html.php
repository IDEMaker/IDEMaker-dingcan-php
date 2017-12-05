<?php
/* Smarty version 3.1.30, created on 2017-11-29 15:50:46
  from "D:\phpStudy\WWW\OAM\views\admin\goodsc\goods_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e66d6b51808_17000237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c1623abb71842ac5f21aacb0820caf31bbd3e79' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\admin\\goodsc\\goods_list.html',
      1 => 1511410317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e66d6b51808_17000237 (Smarty_Internal_Template $_smarty_tpl) {
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
>pageurl="?m=admin&c=Goodsc&a=goods_list";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
>
</head>

<body>

<span class="main-title">商品列表</span>
<div class="details">
    <div class="details_operation clearfix">
        <div class="bui_select">
            <input class="btn btn-primary" type="button" value="添加商品" class="add" onclick="addPro()">
        </div>
        <div class="fr">

        </div>
        <div class="details_operation clearfix">

            <div class="fl">
            </div>

            <div class="fr">
                <div class="text">

                <span>
                                <input type="text" value="" placeholder="搜索如:商品编号/店铺ID/价格" class="search form-control" name="search">
                                </span>
                    <span>
                    <input type="button" value="搜索" id="search" class="btn btn-primary">
                </span>
                </div>
            </div>
        </div>
    </div>
    <!--表格-->
    <div id="show">
    <table  class="table  table-hover">
        <thead>
        <tr>
            <th width="15%">商品编号</th>
            <th width="15%">商品名称</th>
            <th width="10%">商品分类</th>
            <th width="10%">店铺ID</th>
            <th width="10%">价格</th>
            <th width="10%">库存</th>
            <th width="15%">发布时间</th>
            <th width="15%">商品图像</th>
            <th width="10%">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($_smarty_tpl->tpl_vars['data']->value != '') {?>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
        <tr align="center">
            <!--这里的id和for里面的c1 需要循环出来-->
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['pSn'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['pName'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['cateName'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['shopId'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['priceB'];?>
（元）</td>
            <?php if ($_smarty_tpl->tpl_vars['val']->value['pNum'] == 0) {?>
            <td>无限制</td>
            <?php } else { ?>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['pNum'];?>
（件）</td>
            <?php }?>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['pubTime'];?>
</td>
            <td><img src="<?php echo APP_UPLOAD;?>
upload/goods_image_thumb_50/<?php echo $_smarty_tpl->tpl_vars['val']->value['icon'];?>
"/></td>
            <td>
                <a class="btn btn-link" onclick="editPro(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['pSn'];?>
)">修改</a><a class="btn btn-link"  onclick="delPro(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)">删除</a>
            </td>
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
    function showDetail(id,t){
        $("#showDetail"+id).dialog({
            height:"auto",
            width: "auto",
            position: '{my: "center", at: "center",  collision:"fit"}',
            modal:false,//是否模式对话框
            draggable:true,//是否允许拖拽
            resizable:true,//是否允许拖动
            title:"商品名称："+t,//对话框标题
            show:"slide",
            hide:"explode"
        });
    }
    function addPro(){
        window.location='?m=admin&c=Goodsc&a=index';
    }
    function editPro(id,pSn){
        window.location='?m=admin&c=Goodsc&a=goods_edit&id='+id+'&pSn='+pSn;
    }
    function delPro(id){
        if(window.confirm("您确认要删除嘛？添加一次不易，且删且珍惜!")){
            window.location="?m=admin&c=Goodsc&a=goods_delete&id="+id;
        }
    }
    function search(){
        if(event.keyCode==13){
            var val=document.getElementById("search").value;
            window.location="listPro.php?keywords="+val;
        }
    }
    function change(val){
        window.location="listPro.php?shopId="+val;
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
