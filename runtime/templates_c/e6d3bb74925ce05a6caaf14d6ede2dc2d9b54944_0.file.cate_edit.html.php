<?php
/* Smarty version 3.1.30, created on 2017-12-05 07:34:18
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/catec/cate_edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a25db7ada73e6_75204154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d3bb74925ce05a6caaf14d6ede2dc2d9b54944' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/catec/cate_edit.html',
      1 => 1510238938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a25db7ada73e6_75204154 (Smarty_Internal_Template $_smarty_tpl) {
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
<span class="main-title">分类修改</span>
<div id="main-tip"></div>
<div class="form-add">
    <form id="form1" action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post">
        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="20%"><span class="td-txt">分类名称</span></td>
                <td><input type="text" width="100%" id="cname" name="cName" placeholder="请输入分类名称" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cName'];?>
"/></td>
            </tr>
            <tr>
                <td align="right"><span class="td-txt">所属商户</span></td>
                <td>
                    <div class="form-td">
                        <input type="radio" name="isUserP" value="1"><span class="td-txt">是</span>
                        <input type="radio" name="isUserP"  checked value="0" ><span class="td-txt">否</span>
                    </div>
                </td>
            </tr>
            <tr style="visibility:hidden;" id="isUser">
                <td align="right" width="20%"><span class="td-txt">修改商户</span></td>
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
                <td><input type="text" name="weight" placeholder="权重数字，越大越靠前" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['weight'];?>
"/></td>
            </tr>
        </table>
        <input class="btn btn-primary" type="submit" value="提交"/>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
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
        $("input[name='isUserP']").click(function(){
            var isUserP=$("input[name='isUserP']:checked").val();

            if(isUserP==1)
            {
                $("#isUser").css("visibility","visible");
            }else if(isUserP==0)
            {
                $("#isUser").css("visibility","hidden");
            }
        })
    });
    function isValid(){
        if($("input[name='cName']").val().length<=0){
            $("#main-tip").html('分类不能为空');
            $("#main-tip").css('display', 'inline-block');
            return false;
        }
        var isUserP=$("input[name='isUserP']:checked").val();
        if(isUserP==1)
        {
            if($("select option:selected").val()=="请选择商户")
            {
                $("#main-tip").html('商户不能为空');
                $("#main-tip").css('display', 'inline-block');
                return false;
            }
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
