<?php
/* Smarty version 3.1.30, created on 2017-11-29 15:50:53
  from "D:\phpStudy\WWW\OAM\views\admin\catec\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e66dd0cd599_74446231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '031f01048ef0e7b60406fe76e4b12aba91250bd4' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\admin\\catec\\index.html',
      1 => 1510123761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e66dd0cd599_74446231 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>

    <link rel=stylesheet href="<?php echo CSS;?>
admin/reset.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
admin/bootstrap-admin.css">
    <link href="<?php echo CSS;?>
admin/global.css"  rel="stylesheet"  type="text/css"/>
    <link href="<?php echo CSS;?>
admin/backstage.css"  rel="stylesheet"  type="text/css"/>
</head>
<body>
<span class="main-title">添加分类</span>
<div id="main-tip"></div>
<div class="form-add">
    <form id="form1" action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post">
        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="20%"><span class="td-txt">分类名称</span></td>
                <td><input type="text" width="100%" id="cname" name="cName" placeholder="请输入分类名称"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">所属商户</span></td>
                <td>
                    <select name="adminName">
                        <option value="请选择商户">请选择商户</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['username'] == $_smarty_tpl->tpl_vars['data']->value['adminName']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</option>
                        <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</option>
                        <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">权重</span></td>
                <td><input type="text" name="weight" placeholder="权重数字，越大越靠前"/></td>
            </tr>

        </table>
        <input class="btn btn-primary" type="submit" value="添加分类"/>
    </form>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS;?>
admin/jquery-1.8.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $("#form1").submit(function () {
            if(isValid()){
                return true;
            }else{
                return false;
            }
        });
    });
    function isValid(){
        if($("input[name='cName']").val().length<=0){
            $("#main-tip").html('分类不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        if($("input[name='weight']").val().length<=0){
            $("#main-tip").html('权重不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        if($("select option:selected").val()=="请选择商户")
        {
            $("#main-tip").html('商户不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        if(isNaN($("input[name='weight']").val())){
            $("#main-tip").html('权重必须为数字');
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
