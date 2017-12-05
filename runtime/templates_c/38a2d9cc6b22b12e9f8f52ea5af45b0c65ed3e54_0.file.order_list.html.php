<?php
/* Smarty version 3.1.30, created on 2017-12-02 18:44:45
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/home/orderc/order_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a22841ddda537_06331459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38a2d9cc6b22b12e9f8f52ea5af45b0c65ed3e54' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/home/orderc/order_list.html',
      1 => 1511830386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a22841ddda537_06331459 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo APP_PPDP;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."/home/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<!--主体-->
<div class="content">
    <!--左侧导航-->
    <?php ob_start();
echo APP_PPDP;
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2."/home/menuLeft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <!--右侧内容-->

    <div class="content-right fl">
        <div class="summary fl">
            <h3 class="summary-header">全部订单</h3>
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
                                <a href='/shop/<?php echo $_smarty_tpl->tpl_vars['val']->value['shopId'];?>
'  class="shop-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['shopName'];?>
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
                                                  等待商家接单
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
                        <?php if ($_smarty_tpl->tpl_vars['val']->value['paymethod'] != 2 && $_smarty_tpl->tpl_vars['val']->value['pay'] == 0 && $_smarty_tpl->tpl_vars['val']->value['received'] == 0) {?>
                        <a class=pay-btn onclick="orderPay(<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['orderTime'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['paymethod'];?>
)">支付</a> <a class=pay-btn onclick="orderCancel(<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
)">取消</a>
                          <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['paymethod'] == 2 && $_smarty_tpl->tpl_vars['val']->value['received'] == 0) {?>
                        <a class=pay-btn onclick="orderCancel(<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
)">取消</a>
                          <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 1) {?>
                        <a class=pay-btn onclick="urgeOrder(<?php echo $_smarty_tpl->tpl_vars['val']->value['orderId'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
)">催单</a>
                          <?php } elseif ($_smarty_tpl->tpl_vars['val']->value['received'] == 3) {?>
                        <a class="pay-btn exp">评价</a><a href='?m=home&c=Shopc&a=index&shopId=<?php echo $_smarty_tpl->tpl_vars['val']->value['shopId'];?>
' class=pay-btn>再买一次</a>
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



        <div class="page" style="background-color: #9AA4FF"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
         <p align="center">
             共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条数据
         </p>
    </div>
        <?php }?>
</div>

</div>

<div class="clear"></div>
</div>
<?php ob_start();
echo APP_PPDP;
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable3."/home/fonter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div class="shop-cart shadow n">
    <div class="shop-head">
        购物车<a class="shop-clear">[清空]</a>
    </div>
    <div class="shop-body">
        <div class="isnull">
            <span></span>
            <b>购物车空空如也</b>
        </div>
    </div>
    <div class="shop-bottom">
        <div class="bottom-price fl">总计：￥<label>32</label>
        </div>
        <div class="bottom-icon"></div>
        <div class="bottom-pay fr">
            <a id="cart-pay">结算</a>
        </div>
    </div>
</div>
<!--提示框-->
<div id="alertModel" class="alertModel" >
    <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
    <span id="alert-msg"></span>
    <button id="btn-ok" class="btn">知道了</button>
    <a id="btn-close" class="close-reveal-modal"><img src="<?php echo IMAGE;?>
home/icon_close.png" height="24" width="24"></a>
</div>

<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/md5.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/cart.lib.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/cart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/header.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/account.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/footer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        //初始化购物车
        initCart();

        //footer
        processFooter();

        //地址悬浮
        $(".place-cc a,.place-nav").hover(function() {
            $('.place-nav').show();
        }, function() {
            $('.place-nav').hide();
        });

        //购物车相关
        var shopCartWidth=$(".shop-cart").width();
        //默认隐藏购物车
        $(".shop-cart,.shop-bottom").css("right",-shopCartWidth);
        var mRight=-shopCartWidth;

        $("#cart").click(function(){

            $('.shop-cart').show();
            //适配购物车
            processShopItem();

            shopCartWidth=$(".shop-cart").width();
            if(mRight=='0px'){
                mRight=-shopCartWidth;
                $(".shop-cart,.shop-bottom").animate({right:mRight},200);
                }
            else{
                    mRight='0px';
                    $(".shop-cart,.shop-bottom").animate({right:mRight},200);
                    }
                });




                //中间高
                var zw=$(window).width();
                var middleWidth=$('.place-wrap').width();
                var middleHeight=$('.place-wrap').height();
                var marginLeft=(zw-middleWidth)/2;
                $(".place-wrap-1").css("marginLeft",marginLeft);
                $(".place-wrap-1").show();

                //地址选择悬浮
                $(".place-nav").css("left",marginLeft+32);//再加32
                //地址点击
                $('.city').click(function(event) {
                    var ip=$(this).attr("ip");
                    location.href="?m=home&c=Indexc&a=index&ip="+ip;
                });

                //弹出动画
                $(".place-wrap").animate({"opacity":"0.9"},200);




                    $(window).resize(function(){
                        //中间高
                        var zw=$(window).width();
                        var middleWidth=$('.place-wrap').width();
                        var middleHeight=$('.place-wrap').height();
                        var marginLeft=(zw-middleWidth)/2;
                        $(".place-wrap-1").css("marginLeft",marginLeft);
                        //地址选择悬浮
                        $(".place-nav").css("left",marginLeft+32);

                        //适配购物车
                        processShopItem();

                        $('.shop-cart').hide();
                        var shopCartWidth=$(".shop-cart").width();
                        //默认隐藏购物车
                        $(".shop-cart,.shop-bottom").css("right",-shopCartWidth);
                        mRight=-shopCartWidth;

                        processFooter();
                    });


                    //tab点击事件
                    $('.place-tab a').live("click",function(){
                        //变样式
                        obj=$(this);
                        var cl=obj.parents('.place-tab').find('a');
                        cl.removeClass('alive');
                        $(this).addClass('alive');
                        var pid=obj.attr('id');
                        var cityId=obj.attr('cityId');
                        var status=obj.attr('status');

                        if(status==1)
                        {
                            $.ajax({
                                type:"get",
                                url:"?m=home&c=Shopc&a=current_business&cityId="+cityId,
                                dataType:"json",
                                success:function(reg){
                                    if(reg==0)
                                    {
                                        showAlert("暂没有店铺");
                                    }else{
                                        var str="";
                                        for(var j=0;j<reg.length;j++)
                                        {
                                            str+='<div class="name-item"><a href="?m=home&c=Shopc&a=index&shopId='+reg[j]['shopId']+'">'+reg[j]['shopName']+'</a></div>';
                                        }
                                        var n="#"+pid.replace('t','n');
                                        $(n).html(str);
                                    }
                                }
                            })
                        }
                        obj.attr('status',0);
                        $('.place-names').hide();
                        var n="#"+pid.replace('t','n');
                        $(n).show();
                    });

        function processFooter(){
            var zh=$(document.body).height();
            $(".footer-content").css('top', zh-60);
            $(".footer-content").show();
        };


    });
                //取消订单
                function orderCancel(orderId,username){
                    var postUrl="?m=home&c=Orderc&a=order_Cancel";

                    $.post(postUrl,
                        {
                            orderId:orderId,
                            username:username
                        },
                        function(data,status,xhr) {
                            if(status=="success"){
                                $res= $.parseJSON(data);
                                if($res.code=="0"){
                                    showAlert("取消成功","?m=home&c=Orderc&a=order_list");
                                }else if($res.code=="1"){
                                    showAlert($res.msg,"?m=home&c=Orderc&a=order_list");
                                }
                            }else{
                                showAlert("服务器异常","?m=home&c=Orderc&a=order_list");
                            }
                        });
                }
                //支付订单。
                function orderPay(username,orderId,price,orderTime,paymethod){
                    var timestamp = Date.parse(new Date());
                    var nowTime=timestamp/1000;
                    var dis=nowTime-orderTime;
                    if(dis>15*60){
                        showAlert("超过15分钟未支付，订单已取消","?m=home&c=Orderc&a=order_list");
                    }else{
                        if(paymethod==3)
                        {
                            window.location.href=encodeURI("?m=home&c=Orderc&a=money_pay&username="+username+"&orderId="+orderId+"&price="+price+"&orderTime="+orderTime);
                        }
                        if(paymethod==1)
                        {
                            window.location.href=encodeURI("?m=home&c=Orderc&a=alipay&username="+username+"&orderId="+orderId+"&price="+price+"&orderTime="+orderTime);
                        }

                    }
                }

                //催单
                function urgeOrder(orderId,username){
                    var postUrl="?m=home&c=Orderc&a=urge_Order";
                    $.post(postUrl,
                        {
                            orderId:orderId,
                            username:username
                        },
                        function(data,status,xhr) {
                            if(status=="success"){
                                $res= $.parseJSON(data);
                                if($res.code=="0"){
                                    showAlert("已通知商家");
                                }else if($res.code=="1"){
                                    showAlert($res.msg);
                                }
                            }else{
                                showAlert("服务器异常");
                            }
                        });
                }
                $(".exp").click(function(){
                     showAlert("暂未开放");
                })

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
