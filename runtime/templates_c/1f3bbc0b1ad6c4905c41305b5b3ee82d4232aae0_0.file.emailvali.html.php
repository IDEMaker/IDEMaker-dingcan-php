<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:06:32
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/systemc/emailvali.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a228938b685d0_24644306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f3bbc0b1ad6c4905c41305b5b3ee82d4232aae0' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/systemc/emailvali.html',
      1 => 1511776830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a228938b685d0_24644306 (Smarty_Internal_Template $_smarty_tpl) {
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
    <span class="main-title">邮箱配置</span>
    <div id="main-tip"></div>
    <div class="form-add">

        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="20%"><span class="td-txt">SMTP地址</span></td>
                <td><input type="text" width="100%" id="smtpHost" name="smtpHost" placeholder="应严格 SMTP地址 填写" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['smtpHost'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">SMTP端口</span></td>
                <td><input type="text" width="100%" id="smtpPort" name="smtpPort" placeholder="应严格 SMTP端口 填写" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['smtpPort'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">STMP账户</span></td>
                <td><input type="text" width="100%" id="smtpAccount" name="smtpAccount" placeholder="应严格 STMP账户 填写"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['smtpAccount'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">STMP账户密码</span></td>
                <td><input type="text" width="100%" id="smtpPassword" name="smtpPassword" placeholder="应严格 STMP账户密码 填写"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['smtpPassword'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">STMP发送者邮箱</span></td>
                <td><input type="text" width="100%" id="smtpSendEmail" name="smtpSendEmail" placeholder="应严格 发送者邮箱 填写"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['smtpSendEmail'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">STMP发送者名称</span></td>
                <td><input type="text" width="100%" id="smtpSendName" name="smtpSendName" placeholder="应严格 发送者名称 填写"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['smtpSendName'];?>
"/></td>
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
