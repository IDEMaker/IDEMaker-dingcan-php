<?php
/* Smarty version 3.1.30, created on 2017-11-29 15:50:34
  from "D:\phpStudy\WWW\OAM\views\admin\cachec\cacheclear.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e66ca320fc4_28683715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '216285fc2d5efe87d518a3ff178cf4822593c23a' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\admin\\cachec\\cacheclear.html',
      1 => 1511841454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e66ca320fc4_28683715 (Smarty_Internal_Template $_smarty_tpl) {
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
<form id="form1" action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post">
    <span class="main-title">缓存清除请选择清除对象</span>
    <div class="form-add">

        <table class="table  table-bordered table-hover">
            <div id="main-tip"></div>
            <table style="text-align: center">
                <tr>
                    <td style="padding: 10px;">编译文件</td>
                    <td>缓存文件</td>
                </tr>
                <tr>
                    <td style="padding: 10px;"><input type="radio" value="1" name="isClear" checked></td>

                    <td><input type="radio" value="0" name="isClear"></td>
                </tr>
        </table>
    </div>
    <input class="btn btn-primary" type="submit" value="清除"/>
</form>
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
        $("input[name='isLogoIcon']").click(function(){
            var isLogoIcon=$("input[name='isLogoIcon']:checked").val();

            if(isLogoIcon==1)
            {
                $("#isIcon").css("visibility","visible");
            }else if(isLogoIcon==0)
            {
                $("#isIcon").css("visibility","hidden");
            }
        })
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
