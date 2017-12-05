<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:55:50
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/systemc/phonevali.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2294c65cd243_15485945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b629e6fa8033630db135a53cd3985a7661823e1' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/systemc/phonevali.html',
      1 => 1510713606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2294c65cd243_15485945 (Smarty_Internal_Template $_smarty_tpl) {
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
<span class="main-title">阿里云短信服务配置</span>
<div id="main-tip"></div>
<div class="form-add">

        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="20%"><span class="td-txt">短信签名</span></td>
                <td><input type="text" width="100%" id="signName" name="signName" placeholder="应严格 签名名称 填写" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['signName'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">短信模板Code</span></td>
                <td><input type="text" width="100%" id="templateCode" name="templateCode" placeholder="应严格 按模板CODE 填写"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['templateCode'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">阿里AccessKeyId</span></td>
                <td><input type="text" width="100%" id="accessKeyId" name="accessKeyId" placeholder="YourAccessKeyId" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['accessKeyId'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">阿里AccessKeySecret</span></td>
                <td><input type="text" width="100%" id="accessKeySecret" name="accessKeySecret" placeholder="YourAccessKeySecret" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['accessKeySecret'];?>
"/></td>
            </tr>
        </table>
</div>
    <span class="main-title">NowApi短信服务配置</span>
    <div id="main-tip"></div>
    <div class="form-add">

        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="20%"><span class="td-txt">NowApi模板ID</span></td>
                <td><input type="text" width="100%" id="tempid" name="tempid" placeholder="应严格 模板ID 填写" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tempid'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">NowApiAppkey</span></td>
                <td><input type="text" width="100%" id="appkey" name="appkey" placeholder="YourAppkey"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['appkey'];?>
"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">NowApiSign</span></td>
                <td><input type="text" width="100%" id="sign" name="sign" placeholder="YourSign" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sign'];?>
"/></td>
            </tr>
        </table>

    </div>
    <span class="main-title">请选择使用短信服务商</span>
    <div id="main-tip"></div>
    <table style="text-align: center">
        <tr>
            <td style="padding: 10px;">阿里</td>
            <td>NowApi</td>
        </tr>
       <tr>
           <?php if ($_smarty_tpl->tpl_vars['data']->value['server'] == 1) {?>
           <td style="padding: 10px;"><input type="radio" value="1" name="server" checked></td>
           <?php } else { ?>
           <td style="padding: 10px;"><input type="radio" value="1" name="server"></td>
           <?php }?>
           <?php if ($_smarty_tpl->tpl_vars['data']->value['server'] == 2) {?>
           <td><input type="radio" value="2" name="server" checked></td>
           <?php } else { ?>
           <td><input type="radio" value="2" name="server"></td>
           <?php }?>
       </tr>
    </table>
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
