<?php
/* Smarty version 3.1.30, created on 2017-11-29 16:59:25
  from "D:\phpStudy\WWW\OAM\views\adminmer\catec\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e76ed72c198_85768609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ef3781fee207fedcaaf8a9636ee06c27a5d85c0' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\adminmer\\catec\\index.html',
      1 => 1510111528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e76ed72c198_85768609 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Insert title here</title>

    <link rel=stylesheet href="<?php echo CSS;?>
adminmer/reset.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
adminmer/bootstrap-admin.css">
    <link href="<?php echo CSS;?>
adminmer/global.css"  rel="stylesheet"  type="text/css"/>
    <link href="<?php echo CSS;?>
adminmer/backstage.css"  rel="stylesheet"  type="text/css"/>
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
                <td align="right"><span class="td-txt">权重</span></td>
                <td><input type="text" name="weight" placeholder="权重数字，越大越靠前"/></td>
            </tr>

        </table>
        <input class="btn btn-primary" type="submit" value="添加分类"/>
    </form>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS;?>
adminmer/jquery-1.8.3.js"><?php echo '</script'; ?>
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
        if($("input[name='cname']").val().length<=0){
            $("#main-tip").html('分类不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        if($("input[name='weight']").val().length<=0){
            $("#main-tip").html('权重不能为空');
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
