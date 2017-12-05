<?php
/* Smarty version 3.1.30, created on 2017-11-29 19:28:39
  from "D:\phpStudy\WWW\OAM\views\adminmer\goodsc\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e99e789c806_92393694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b651e4f0703690927f8d98d6613fdbd0f779fe62' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\adminmer\\goodsc\\index.html',
      1 => 1510559710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e99e789c806_92393694 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>-.-</title>

    <link rel=stylesheet href="<?php echo CSS;?>
admin/reset.css">
    <link rel=stylesheet href="<?php echo CSS;?>
admin/bootstrap-admin.css">
    <link rel=stylesheet href="<?php echo CSS;?>
admin/global.css"    />
    <link rel=stylesheet href="<?php echo CSS;?>
admin/backstage.css"   />
    <link rel=stylesheet href="<?php echo CSS;?>
admin/fileinput.min.css">

</head>
<body>
<span class="main-title">添加商品</span>
<span id="main-tip">用户名为空</span>
<div class="form-add">
    <form action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" id="form1" method="post" enctype="multipart/form-data">
        <table  class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="15%"><span class="td-txt">商品名称</span></td>
                <td ><input   width="100px" type="text" name="pName"  placeholder="请输入商品名称"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">商品分类</span></td>
                <td>
                    <select id="cate" name="pCateId" class="">
                        <option value="请选择" selected='selected'>请选择</option>
                        <?php if ($_smarty_tpl->tpl_vars['cate']->value != 0) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cate']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['cName'];?>
-<?php echo $_smarty_tpl->tpl_vars['val']->value['adminName'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <?php }?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">是否热销</span></td>
                <td>
                    <div class="form-td">
                        <input type="radio" name="isHot" value="1" ><span class="td-txt">是</span>
                        <input type="radio" name="isHot"  checked value="0" ><span class="td-txt">否</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">商品价格</span></td>
                <td><input class="" type="text" name="priceB"  placeholder="单位（元）"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">商品库存</span></td>

                <td >
                    <input   width="100px" type="text" name="pNum"  placeholder="库存 1-999（件） 0不限制"/>
                </td>

            </tr>
            <tr>
                <td align="right"><span class="td-txt">商品图像</span></td>
                <td>
                    <input class="btn btn-file" type="file" name="myFile[]"/>
                </td>
            </tr>
        </table>
        <input class="btn btn-primary"  type="submit"  value="发布商品"/>
    </form>
</div>

<?php echo '<script'; ?>
 src="<?php echo JS;?>
admin/jquery-1.8.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
admin/fileinput.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
admin/city.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
admin/edit.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $("#form1").submit(function () {
            if(isValid()){
                return true;
            }else{
                return false;
            }
        });
    });



    function isValid(){
        if($("input[name='pName']").val().length<=0){
            $("#main-tip").html('商品名称不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        if($("#province option:selected").val()=="请选择")
        {
            $("#main-tip").html('城市不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        if($("#cate option:selected").val()=="请选择")
        {
            $("#main-tip").html('分类不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        if($("input[name='priceB']").val().length<=0){
            $("#main-tip").html('价格不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        if($("input[name='pNum']").val().length<=0){
            $("#main-tip").html('库存不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        if($("input[name='myFile[]']").val().length<=0){
            $("#main-tip").html('图片不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        $("#main-tip").hide();
        return true;
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
