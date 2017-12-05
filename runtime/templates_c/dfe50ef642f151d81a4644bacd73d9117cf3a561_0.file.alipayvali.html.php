<?php
/* Smarty version 3.1.30, created on 2017-12-02 18:41:21
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/systemc/alipayvali.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a228351e37122_16526554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfe50ef642f151d81a4644bacd73d9117cf3a561' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/systemc/alipayvali.html',
      1 => 1511750210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a228351e37122_16526554 (Smarty_Internal_Template $_smarty_tpl) {
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
<span class="main-title">奇云付支付宝配置</span>
<div id="main-tip"></div>
<div class="form-add">

        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="20%"><span class="td-txt">商户ID</span></td>
                <td><input type="text" width="100%" id="partner" name="partner" placeholder="应严格 商户ID 填写" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['partner'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">商户KEY</span></td>
                <td><input type="text" width="100%" id="key" name="key" placeholder="应严格 商户key 填写"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['key'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">异步通知</span></td>
                <td><input type="text" width="100%" id="notify_url" name="notify_url" placeholder="Yournotify_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['notify_url'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">同步通知</span></td>
                <td><input type="text" width="100%" id="return_url" name="return_url" placeholder="Yourreturn_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['return_url'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">站点名称</span></td>
                <td><input type="text" width="100%" id="sitename" name="sitename" placeholder="Yoursitename" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sitename'];?>
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
