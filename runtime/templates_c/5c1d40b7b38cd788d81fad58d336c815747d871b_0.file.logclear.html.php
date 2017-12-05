<?php
/* Smarty version 3.1.30, created on 2017-12-03 18:40:13
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/logc/logclear.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23d48de8ff17_93681690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c1d40b7b38cd788d81fad58d336c815747d871b' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/logc/logclear.html',
      1 => 1511845244,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a23d48de8ff17_93681690 (Smarty_Internal_Template $_smarty_tpl) {
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
    <span class="main-title">日志清除请选择清除日期</span>
    <div class="form-add">

        <table class="table  table-bordered table-hover">
            <div id="main-tip"></div>
            <table style="text-align: center">
                <div class="bui_select">
                <select class="select form-control" name="isDel">
                    <option value="全部">全部</option>
                    <option value="最近一年">最近一年</option>
                    <option value="最近一月">最近一月</option>
                    <option value="最近一周">最近一周</option>
                </select>
                    <br>
                    <input class="btn btn-primary" type="submit" value="清除"/>
                </div>
            </table>
    </div>
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
