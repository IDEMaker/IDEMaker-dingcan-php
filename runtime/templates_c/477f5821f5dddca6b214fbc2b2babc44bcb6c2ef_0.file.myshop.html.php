<?php
/* Smarty version 3.1.30, created on 2017-11-29 18:44:45
  from "D:\phpStudy\WWW\OAM\views\admin\shopc\myshop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e8f9dbca804_71638024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '477f5821f5dddca6b214fbc2b2babc44bcb6c2ef' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\admin\\shopc\\myshop.html',
      1 => 1511422711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e8f9dbca804_71638024 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>入驻店铺</title>

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
<span class="main-title">店铺详情</span>
<div id="main-tip"></div>
<div class="form-add">
    <form id="form1" action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post" enctype="multipart/form-data">
        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="20%"><span class="td-txt">店铺名称</span></td>
                <td><input type="text" width="100%" id="shopName" name="shopName" placeholder="请输入名称" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['shopName'];?>
"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">当前城市</span></td>
                <td><input type="text" disabled value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
   不改则和当前城市填写一致"></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">所属城市</span></td>
                <td>
                    <select name="province" id="province">
                        <option value="请选择">请选择</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">所属地区</span></td>
                <td>
                    <select name="city">
                        <option value="">请选择</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺公告</span></td>
                <td><input type="text" name="shopTip" placeholder="店铺公告" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['shopTip'];?>
"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺状态</span></td>
                <td>
                    <div class="form-td">
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['shopState'] == 1) {?>
                        <input type="radio" name="shopState" checked value="1" ><span class="td-txt">营业</span>
                        <?php } else { ?>
                        <input type="radio" name="shopState"  value="1" ><span class="td-txt">营业</span>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['shopState'] == 0) {?>
                        <input type="radio" name="shopState"  checked value="0" ><span class="td-txt">休息</span>
                        <?php } else { ?>
                        <input type="radio" name="shopState"  value="0" ><span class="td-txt">休息</span>
                        <?php }?>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺联系</span></td>
                <td><input type="text" name="shopPhone" placeholder="店铺联系电话" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['shopPhone'];?>
"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺楼宇</span></td>
                <td><input type="text" name="shopBlock" placeholder="店铺楼宇" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['shopBlock'];?>
"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺楼层</span></td>
                <td><input type="text" name="shopFloor" placeholder="店铺楼层" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['shopFloor'];?>
"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺密码</span></td>
                <td>
                    <div class="form-td">
                        <input type="radio" name="isShopPass" value="1"><span class="td-txt">是</span>
                        <input type="radio" name="isShopPass"  checked value="0" ><span class="td-txt">否</span>
                    </div>
                </td>
            </tr>
            <tr style="visibility:hidden;" id="isPass">
                <td align="right"><span class="td-txt">修改密码</span></td>
                <td><input type="text" name="password" placeholder="修改店铺密码" value=""/></td>
            </tr>
            <tr>
            <td align="right"><span class="td-txt">店铺icon</span></td>
            <td>
                <div class="form-td">
                    <input type="radio" name="isShopIcon" value="1"><span class="td-txt">是</span>
                    <input type="radio" name="isShopIcon"  checked value="0" ><span class="td-txt">否</span>
                </div>
            </td>
        </tr>
            <tr style="visibility:hidden;" id="isIcon">

                <td align="right"><span class="td-txt">修改icon</span></td>
                <td>
                    <img style="margin:12px;"src="<?php echo APP_UPLOAD;
echo $_smarty_tpl->tpl_vars['data']->value['shopIconOgl'];?>
" width=50 height=50/>
                    <input class="btn btn-file" type="file" name="myFile[]"/>
                </td>
            </tr>
        </table>
        <input type="hidden" name="shopId" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['shopId'];?>
">
        <input class="btn btn-primary" type="submit" value="保存"/>
    </form>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS;?>
admin/jquery-1.8.3.js"><?php echo '</script'; ?>
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
    $(document).ready(function(){

        $("#form1").submit(function () {
            if(isValid()){
                return true;
            }else{
                return false;
            }
        });
        $("input[name='isShopIcon']").click(function(){
            var isShopIcon=$("input[name='isShopIcon']:checked").val();

            if(isShopIcon==1)
            {
               $("#isIcon").css("visibility","visible");
            }else if(isShopIcon==0)
            {
                $("#isIcon").css("visibility","hidden");
            }
        })
        $("input[name='isShopPass']").click(function(){
            var isShopPass=$("input[name='isShopPass']:checked").val();

            if(isShopPass==1)
            {
                $("#isPass").css("visibility","visible");
            }else if(isShopPass==0)
            {
                $("#isPass").css("visibility","hidden");
            }
        })

    });
    function isValid(){
        if($("input[name='shopName']").val().length<=0){
            $("#main-tip").html('名称不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        if($("input[name='shopTip']").val().length<=0){
            $("#main-tip").html('公告不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        var isShopPass=$("input[name='isShopPass']:checked").val();

        if(isShopPass==1&&$("input[name='password']").val()=="")
        {

                $("#main-tip").html('密码不能为空');
                $("#main-tip").css('display', 'inline-block');
                return false;
        }

        var isShopIcon=$("input[name='isShopIcon']:checked").val();

        if(isShopIcon==1)
        {
            if($("input[name='myFile[]']").val().length<=0){
                $("#main-tip").html('图片不能为空');
                $("#main-tip").css('display', 'inline-block');
                return false;
            }
        }
        if($("#province option:selected").val()=="请选择")
        {
            $("#main-tip").html('城市不能为空');
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
