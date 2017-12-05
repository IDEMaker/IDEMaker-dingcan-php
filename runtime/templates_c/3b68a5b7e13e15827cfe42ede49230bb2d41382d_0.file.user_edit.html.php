<?php
/* Smarty version 3.1.30, created on 2017-12-03 19:37:29
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/userc/user_edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23e1f9bd72e2_31272259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b68a5b7e13e15827cfe42ede49230bb2d41382d' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/admin/userc/user_edit.html',
      1 => 1510883488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a23e1f9bd72e2_31272259 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>用户编辑</title>

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
<span class="main-title">用户编辑</span>
<div id="main-tip"></div>
<div class="form-add">
    <form id="form1" action="<?php echo $_smarty_tpl->tpl_vars['form']->value;?>
" method="post" enctype="multipart/form-data">
        <table class="table  table-bordered table-hover">
            <tr>
                <td align="right" width="20%"><span class="td-txt">用户账户</span></td>
                <td><input type="text" width="100%" id="" name="username"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
" disabled placeholder="不显示则为空"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">用户姓名</span></td>
                <td><input type="text" width="100%" id="" name="name"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" disabled placeholder="不显示则为空"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">用户邮箱</span></td>
                <td><input type="text" width="100%" id="" name="email"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" disabled placeholder="不显示则为空"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">用户余额</span></td>
                <td><input type="text" width="100%" id="" name="balance"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['balance'];?>
元" disabled/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">充值/扣款</span></td>
                <td>
                    <div class="form-td">
                    <input type="radio" name="isBlack"  value="1" ><span class="td-txt">是</span>
                    <input type="radio" name="isBlack"  value="0" checked ><span class="td-txt">否</span>
                    </div>
                </td>
            </tr>
            <tr style="visibility:hidden;" id="isBlack">
                <td></td>
                <td><input type="text" width="100%" id="" name="balance"  placeholder="请输入金额"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">用户积分</span></td>
                <td><input type="text" width="100%" id="" name="jifen"  value="<?php echo $_smarty_tpl->tpl_vars['data']->value['jifen'];?>
个" disabled/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">增加/扣除</span></td>
                <td>
                    <div class="form-td">
                        <input type="radio" name="isScore"  value="1" ><span class="td-txt">是</span>
                        <input type="radio" name="isScore"  value="0" checked ><span class="td-txt">否</span>
                    </div>
                </td>
            </tr>
            <tr style="visibility:hidden;" id="isScore">
                <td></td>
                <td><input type="text" width="100%" id="" name="jifen"  placeholder="请输入个数"/></td>
            </tr>
            <tr>
                <td align="right" width="20%"><span class="td-txt">用户密码</span></td>
                <td>
                    <div class="form-td">
                        <input type="radio" name="isPwd"  value="1" ><span class="td-txt">是</span>
                        <input type="radio" name="isPwd"  value="0" checked ><span class="td-txt">否</span>
                    </div>
                </td>
            </tr>
            <tr style="visibility:hidden;" id="isPwd">
                <td></td>
                <td><input type="text" width="100%" id="" name="password"  placeholder="请输入密码，注意密码需单独修改，反之则失败"/></td>
            </tr>
            <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" name="id">
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
        $("input[name='isBlack']").click(function(){
            var isBlack=$("input[name='isBlack']:checked").val();

            if(isBlack==1)
            {
                $("#isBlack").css("visibility","visible");
            }else if(isBlack==0)
            {
                $("#isBlack").css("visibility","hidden");
            }
        })
        $("input[name='balance']").change(function(){

            var moe=$(this).val();
            var num=Math.round(moe*100)/100;
            if(!num==0)
            {
                $(this).val(num);
            }

        })
        $("input[name='jifen']").change(function(){

            var moe=$(this).val();
            var num=parseInt(moe);
            if(!num==0)
            {
                $(this).val(num);
            }

        })
        $("input[name='isScore']").click(function(){
            var isScore=$("input[name='isScore']:checked").val();

            if(isScore==1)
            {
                $("#isScore").css("visibility","visible");
            }else if(isScore==0)
            {
                $("#isScore").css("visibility","hidden");
            }
        })
        $("input[name='isPwd']").click(function(){
            var isPwd=$("input[name='isPwd']:checked").val();

            if(isPwd==1)
            {
                $("#isPwd").css("visibility","visible");
            }else if(isPwd==0)
            {
                $("#isPwd").css("visibility","hidden");
            }
        })
    });
    function isValid(){

        $("#main-tip").hide();
        return true;
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
