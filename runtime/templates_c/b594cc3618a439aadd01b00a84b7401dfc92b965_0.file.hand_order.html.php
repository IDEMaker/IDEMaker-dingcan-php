<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:19:49
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/adminmer/orderc/hand_order.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a228c55467b59_38284135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b594cc3618a439aadd01b00a84b7401dfc92b965' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/adminmer/orderc/hand_order.html',
      1 => 1511364692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a228c55467b59_38284135 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>-.-</title>
    <link rel="stylesheet" href="<?php echo CSS;?>
adminmer/reset.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
adminmer/bootstrap-admin.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
adminmer/backstage.css">
    <link rel=stylesheet   href="<?php echo CSS;?>
adminmer/order.css">
    <link rel=stylesheet   href="<?php echo CSS;?>
public/page.css">
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/jquery-1.8.3.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>pageurl="?m=adminmer&c=Orderc&a=hand_order";<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
public/page.js"><?php echo '</script'; ?>
>
</head>

<body>

<span class="main-title">开始接单</span>
<div class="details_operation clearfix">

    <div class="fl">
    </div>

    <div class="fr">
        <div class="text">

                <span>
                                <input type="text" value="" placeholder="搜索订单号" class="search form-control" name="search">
                                </span>
            <span>
                    <input type="button" value="搜索" id="search" class="btn btn-primary">
                </span>
        </div>
    </div>
</div>
<div class="content-right fl">
    <div class="details_operation clearfix">

        <div class="fl">
        </div>

        <div class="fr">
            <span id="tip"></span>
        </div>
    </div>
    <div class="order-content-wrap">


        <div id="show">
            <?php if ($_smarty_tpl->tpl_vars['rows']->value != 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
            <div class="order-content">
                <div class="order-meal">
                    <table>
                        <thead>
                        <tr>
                            <th colspan="3">
                                <a href='#'  class="shop-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['shopName'];?>
</a>
                                <p class="shop-info">
                                    <span class="phone-icon"></span>商家电话：<?php echo $_smarty_tpl->tpl_vars['val']->value['shopPhone'];?>

                                </p>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['val']->value['items'], 'obj');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['obj']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['count'];?>
</td>
                            <td class="text-right">￥<?php echo $_smarty_tpl->tpl_vars['obj']->value['price'];?>
</td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                        </tbody>
                    </table>
                    <div class="order-price">
                        总价：<span class="ft-red">￥<?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
</span>
                    </div>
                    <div class="order-delivery">
                        <div class="receive-info">
                            <span>订单编号：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
</span>
                            <span>送餐地址：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderAddress'];?>
</span>
                            <span>联系人：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderName'];?>
</span>
                            <span>电话：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderPhone'];?>
</span>
                            <span>送达时间：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderArrivedTime'];?>
</span>
                            <span>备注信息：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderRemark'];?>
</span>
                        </div>
                    </div>
                </div>
                <div class="order-info">
                    <div class="delivery-info">
                        <div class="delivery-card ">
                            <div class="card-header nick-selected">
                                <div class="round">
                                </div>
                                <div class="line-through ">
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="status-msg">
                                    订单提交成功
                                </div>
                                <div class="prompt"> 订单号：<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>

                                </div>
                                <div class="time">
                                    <?php echo getDate01($_smarty_tpl->tpl_vars['val']->value['orderTime']);?>

                                    <!--//计算15分钟是否支付-->
                                    <?php if ($_smarty_tpl->tpl_vars['val']->value['paymethod'] != 2 && $_smarty_tpl->tpl_vars['val']->value['pay'] == 0 && $_smarty_tpl->tpl_vars['val']->value['received'] == 0) {?>
                                    <?php $_smarty_tpl->_assignInScope('nowTime', time());
?>
                                    <?php $_smarty_tpl->_assignInScope('dis', $_smarty_tpl->tpl_vars['nowTime']->value-$_smarty_tpl->tpl_vars['val']->value['orderTime']);
?>
                                    <?php if ($_smarty_tpl->tpl_vars['dis']->value > 15*60) {?>
                                    <?php echo autocancel($_smarty_tpl->tpl_vars['val']->value['username'],$_smarty_tpl->tpl_vars['val']->value['orderId']);?>

                                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['received'] = 4;
$_smarty_tpl->_assignInScope('val', $_tmp_array);
?>
                                    <?php }?>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div class="delivery-card ">
                            <div class="card-header nick-selected">
                                <div class="round">
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['val']->value['received'] != 0) {?>
                                <div class=line-through></div>
                                <?php }?>
                            </div>
                            <div class="card-body ">
                                <div class="status-msg">

                                    <?php if ($_smarty_tpl->tpl_vars['val']->value['paymethod'] == 2) {?>
                                    已提交订单
                                    <?php } else { ?>

                                    <?php if ($_smarty_tpl->tpl_vars['val']->value['pay'] == 0) {?>
                                    等待支付
                                    <?php } else { ?>
                                    已支付
                                    <?php }?>

                                    <?php }?>


                                </div>
                                <div class="prompt">
                                    <?php if ($_smarty_tpl->tpl_vars['val']->value['paymethod'] == 2) {?>
                                    等待商家接单(餐到付款)
                                    <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['val']->value['pay'] == 0) {?>
                                    请在提交订单后15分钟内完成支付
                                    <?php } else { ?>
                                    已支付，订单进行中
                                    <?php }?>
                                    <?php }?>

                                </div>
                                <div class="time">
                                    <?php if ($_smarty_tpl->tpl_vars['val']->value['pay'] == 1) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['val']->value['payTime']) {?>
                                    <?php echo getDate01($_smarty_tpl->tpl_vars['val']->value['payTime']);?>

                                    <?php }?>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <div
                                <?php if ($_smarty_tpl->tpl_vars['val']->value['received'] == 0) {?>
                                class='delivery-card n'
                                <?php } else { ?>
                                class='delivery-card'
                                <?php }?>
                        >
                        <div class="card-header nick-selected">
                            <div class="round">
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="status-msg">
                                <?php if ($_smarty_tpl->tpl_vars['val']->value['received'] == 1) {?>
                                商家已接单
                                <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 2) {?>
                                商家拒绝接单
                                <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 3) {?>
                                订单完成
                                <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 4) {?>
                                订单取消
                                <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 5) {?>
                                订单取消
                                <?php }?>
                            </div>
                            <div class="prompt">
                                <?php if ($_smarty_tpl->tpl_vars['val']->value['received'] == 1) {?>
                                请您耐心等待
                                <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 2) {?>
                                商家忙碌，无法接单
                                <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 3) {?>
                                订单完成，欢迎下次再来
                                <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 4) {?>
                                未支付，订单自动取消
                                <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 5) {?>
                                用户取消订单
                                <?php }?>

                            </div>
                            <div class="time">
                                <?php if ($_smarty_tpl->tpl_vars['val']->value['received'] != 0) {?>
                                <?php if ($_smarty_tpl->tpl_vars['val']->value['receivedTime']) {?>
                                <?php echo getDate01($_smarty_tpl->tpl_vars['val']->value['receivedTime']);?>

                                <?php }?>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="order-operator " >
                        <div class="operator-btns">
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['pay'] == 1 && $_smarty_tpl->tpl_vars['val']->value['received'] == 1 || $_smarty_tpl->tpl_vars['val']->value['paymethod'] == 2 && $_smarty_tpl->tpl_vars['val']->value['received'] == 1) {?>
                            <a class=pay-btn onclick=handOrder(<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
)>订单完成</a><a class=pay-btn onclick=handCancelOrder(<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
)>订单未完成</a>
                        <?php }?>
                        </div>
                    </div>
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        <p align="center">
            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

        </p>
        <p align="center">
            共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条数据
        </p>
        <?php }?>
    </div>

</div>

</div>
</div>
<!--提示框-->
<div class="modal fade" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button id="btn-close" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 id="alert-title" class="modal-title">标题</h4>
            </div>
            <div class="modal-body">
                <p id="alert-body">内容</p>
            </div>
            <div class="modal-footer">
                <button id="btn-ok" type="button" class="btn btn-default" data-dismiss="modal">知道了</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
adminmer/jquery-1.8.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
adminmer/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
adminmer/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
adminmer/jquery.jqprint-0.3.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function () {

        var hasNewOrder="";
        if(hasNewOrder!=1){
            startRequest();
        }

        //轮询器
        setInterval("startRequest()",60000);
    });

//    function startRequest(){
//        var requestUrl='checkOrder.php?shopId=<?php echo '<?php ';?>echo $shopId;<?php echo '?>';?>';
//
//        $.ajax({ url:requestUrl,
//            type:'post',
//            async:true,
//            timeout:3000,
//            success:function(data){
//                if(data=="success"){
//                    window.location="moniterOrder.php?orderFlag=1";
//                }
//            },
//            error:function(data){
//            }
//        });
//    }

    function handOrder(id){

        var postUrl="?m=adminmer&c=Orderc&a=hand_order";
        $.post(postUrl,
            {type:"handfls", id:id},
            function(data,status,xhr) {
                if(status=="success"){
                    $res= $.parseJSON(data);
                    if($res.code=="0"){
                          showAlert("提示","订单处理完成","?m=adminmer&c=Orderc&a=hand_order");
                    } else{
                        showAlert("提示",$res.msg,"?m=adminmer&c=Orderc&a=hand_order");
                    }
                }else{
                    showAlert("提示","服务器异常");
                }
            });
    }

    function handCancelOrder(id){

        var postUrl="?m=adminmer&c=Orderc&a=hand_order";
        $.post(postUrl,
            {type:"handcancel", id:id},
            function(data,status,xhr) {
                if(status=="success"){
                    $res= $.parseJSON(data);
                    if($res.code=="0"){
                        showAlert("提示","未完成订单处理完成","?m=adminmer&c=Orderc&a=hand_order");
                    } else{
                        showAlert("提示",$res.msg,"?m=adminmer&c=Orderc&a=hand_order");
                    }
                }else{
                    showAlert("提示","服务器异常");
                }
            });
    }





<?php echo '</script'; ?>
>
</body>
</html><?php }
}
