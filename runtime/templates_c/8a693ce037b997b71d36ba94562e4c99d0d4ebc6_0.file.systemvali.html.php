<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:55:39
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/systemc/systemvali.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2294bbe20b93_12341221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a693ce037b997b71d36ba94562e4c99d0d4ebc6' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/systemc/systemvali.html',
      1 => 1511829222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2294bbe20b93_12341221 (Smarty_Internal_Template $_smarty_tpl) {
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
" method="post" enctype="multipart/form-data">
    <span class="main-title">系统配置</span>
    <div id="main-tip"></div>
    <div class="form-add">

        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="20%"><span class="td-txt">站点名称</span></td>
                <td><input type="text" width="100%" id="systemName" name="systemName" placeholder="站点名称" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['systemName'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">站点网址</span></td>
                <td><input type="text" width="100%" id="systemUrl" name="systemUrl" placeholder="站点网址" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['systemUrl'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">站点备案号</span></td>
                <td><input type="text" width="100%" id="systemCopy" name="systemCopy" placeholder="站点备案号"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['systemCopy'];?>
"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">站点LOGO</span></td>
                <td>
                    <div class="form-td">
                        <input type="radio" name="isLogoIcon" value="1"><span class="td-txt">是</span>
                        <input type="radio" name="isLogoIcon"  checked value="0" ><span class="td-txt">否</span>
                    </div>
                </td>
            </tr>
            <tr style="visibility:hidden;" id="isIcon">
                <td align="right"><span class="td-txt">修改icon</span></td>
                <td><input class="btn btn-file" type="file" name="myFile[]"/></td>
            </tr>
        </table>
    </div>
    <input class="btn btn-primary" type="submit" value="保存"/>
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
