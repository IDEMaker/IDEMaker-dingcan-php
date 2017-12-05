<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:05:44
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/shopc/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a228908011d94_38902665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51bbd3d9bb9eda2868a29a20982e80f4c0f6d99' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/shopc/index.html',
      1 => 1510557002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a228908011d94_38902665 (Smarty_Internal_Template $_smarty_tpl) {
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
<span class="main-title">入驻店铺</span>
<div id="main-tip"></div>
<div class="form-add">
    <form id="form1" action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post" enctype="multipart/form-data">
        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="20%"><span class="td-txt">店铺名称</span></td>
                <td><input type="text" width="100%" id="shopName" name="shopName" placeholder="请输入名称"/></td>
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
                <td><input type="text" name="shopTip" placeholder="店铺公告"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺状态</span></td>
                <td>
                    <div class="form-td">
                        <input type="radio" name="shopState" checked value="1" ><span class="td-txt">营业</span>
                        <input type="radio" name="shopState"  value="0" ><span class="td-txt">休息</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺审核</span></td>
                <td>
                    <div class="form-td">
                        <input type="radio" name="isAudit" checked value="1" ><span class="td-txt">审核</span>
                        <input type="radio" name="isAudit"  value="0" ><span class="td-txt">未审核</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺联系</span></td>
                <td><input type="text" name="shopPhone" placeholder="店铺联系电话"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺楼宇</span></td>
                <td><input type="text" name="shopBlock" placeholder="店铺楼宇"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺楼层</span></td>
                <td><input type="text" name="shopFloor" placeholder="店铺楼层"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">店铺icon</span></td>
                <td><input class="btn btn-file" type="file" name="myFile[]"/></td>
            </tr>

        </table>
        <input class="btn btn-primary" type="submit" value="提交"/>
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
        if($("#province option:selected").val()=="请选择")
        {
            $("#main-tip").html('城市不能为空');
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
