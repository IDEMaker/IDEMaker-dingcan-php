<?php
/* Smarty version 3.1.30, created on 2017-11-29 16:32:40
  from "D:\phpStudy\WWW\OAM\views\admin\goodsc\goods_res.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e70a8dbad59_57932824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bda3d0e734181a8d45e3b7f07c86418c6dbfbe1b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\admin\\goodsc\\goods_res.html',
      1 => 1510291624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e70a8dbad59_57932824 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
</div><?php }
}
