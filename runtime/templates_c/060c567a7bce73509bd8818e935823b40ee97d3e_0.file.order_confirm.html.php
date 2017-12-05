<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:07:33
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/home/orderc/order_confirm.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2289758b13e0_81537351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '060c567a7bce73509bd8818e935823b40ee97d3e' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/home/orderc/order_confirm.html',
      1 => 1511835024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2289758b13e0_81537351 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="“订饭组（dingfanzu.com）”是北京地区知名的在线外卖订餐O2O平台，是写字楼白领专属订餐网站。已覆盖北京数百个写字楼，数十万用户，聚集了数千家餐饮商户。订外卖，找订饭组。" />
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/jquery-1.8.3.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/jquery.reveal.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/jquery.cookie.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/common.js"><?php echo '</script'; ?>
>
    <link rel="icon" href="<?php echo IMAGE;?>
home/favicon.ico" type="image/x-icon" />
    <!--[if lte IE 10]>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/requestAnimationFrame.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
> jifen='<?php echo $_smarty_tpl->tpl_vars['jifen']->value;?>
'<?php echo '</script'; ?>
>
    <link rel=stylesheet href="<?php echo CSS;?>
home/reset.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/common.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/base.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/header.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/shopcart.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/footer_1.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/reveal.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/login.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/order_confirm.css">
    <title><?php ob_start();
echo APP_PPDP;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."/home/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
-订饭组-订单提交</title>
</head>
<body>

<!--header部分-->
<div class="header shadow">
    <div class="search-result">
    </div>
    <div class="header-left fl">
        <div class="icon fl"></div>
        <a class="weixin-dingfan fw" href="#">微信订饭</a>
        <a class="logo" href="?m=home&c=Indexc&a=index"></a>
        <div class="search">
            <img class="search-icon" src="<?php echo IMAGE;?>
home/icon_search.png" width="22" height="22">
            <input id="search-input" class="search-input" type="text" placeholder="请输入楼名" onkeypress="onKeySearch()">
            <span id="search-del" class="search-del">&times;</span>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header-right fr">
        <div class="login fl">

                    <span class="header-operater">
                    <a href="?m=home&c=Indexc&a=index">外卖</a>
                    <a href="?m=home&c=Accountc&a=order">我的订单</a>
                    <a href="?m=home&c=Accountc&a=about&p=lianxiwomen">联系我们</a>
                    </span>
            <a id="header-login" class="navBtn f-radius f-select n" data-reveal-id="myModal" data-animation="fade">
                登录
            </a>
        </div>
        <div id="cart" class="cart fr">
            <img class="cart-icon" src="<?php echo IMAGE;?>
home/icon_cart_22_22.png">
        </div>
        <div id="user" class="user fr n">
            <img class="user-icon" src="<?php echo IMAGE;?>
home/icon_my.png">
        </div>
    </div>

    <ul id="subnav" class="subnav subnav-shadow n">
        <li><a href="?m=home&c=Userc&a=setting" target="">账号设置</a></li>
        <li><a href="?m=home&c=Accountc&a=order" target="">我的订单</a></li>
        <li><a href="?m=home&c=Userc&a=balance" target="">我的余额</a></li>
        <li><a href="?m=home&c=Userc&a=score" target="">我的积分</a></li>
        <li><a href="?m=home&c=Userc&a=address" target="">我的地址</a></li>
        <li><a id="sub-logout" href="" target="">退出</a></li>
    </ul>
</div>

<div class="order-top-info">
    <span>首页&nbsp;&gt;&nbsp;<a class="info-place" onclick="JavaScript:history.go(-1);"></a>&nbsp;&gt;&nbsp;确认订单</span>
</div>

<div class="order-confirm-content">
    <div class="checkout-info">
        <div class="checkout-title">
            <h2>订单信息</h2>
            <a onclick="JavaScript:history.go(-1);">&lt; 返回购物车修改
            </a>
        </div>
        <div class="checkout-tablehead">
            <div class="cell itemname">商品</div><div class="cell itemquantity">份数</div><div class="cell itemtotal">小计（元）</div>
        </div>
        <ul class="checkout-body">

        </ul>
        <div class="checkout-bottom">
                <span>实付：<a style="color:#f74342;">￥</a><a class="checkout-bottom-price">...</a>
                </span>
        </div>
    </div>

    <div class="checkout-content">
        <div class="checkout-select">
            <h2>收货地址</h2>
            <a class="checkout-noaddress " data-reveal-id="addressModal" data-animation="fade">+ 添加地址</a>
            <div class="n checkout-address">
                <span class="address-npa"></span>
                <a class="address-modify"  data-reveal-id="addressModal" data-animation="fade">修改</a>
            </div>
        </div>
        <div class="checkout-select">
            <h2>付款方式</h2>
            <ul class="checkout-ul">
                <li class="checkout-pay first disabled" >
                    <p class="weixin-pay">微信支付</p>
                </li>
                <li class="checkout-pay second disabled" >
                    <p  class="alipay-pay"></p>
                </li>
                <li class="checkout-pay disabled" >
                    <p  class="no-pay">餐到付款</p>
                </li>
                <li class="checkout-pay disabled" style="margin-top: 10px;">
                    <p  class="money-pay">余额支付</p>
                </li>
            </ul>
        </div>
        <br>
        <br>
        <br>
        <div class="checkout-select">
            <h2>我的优惠</h2>
            <p class="checkout-jifen">
                <span class="jifen-label">我的积分：</span>
                <span class="jifen-value">积分抵现：￥</span>
            </p>
            <div class="checkout-daijinjuan">
                <ul class="daijinjuan-ul">
                    <li class="daijinjuan-item" >
                        <p>￥<span>3</span></p>
                    </li>
                </ul>
                <span class="daijinjuan-value">代金券：￥0</span>
            </div>
        </div>
        <div class="checkout-select">
            <h2>送达时间</h2>
            <select class="select-arrived-time">
            </select>
        </div>
        <div class="checkout-select">
            <h2>留言</h2>
            <input class="liuyan-txt" placeholder="少放辣椒。少放盐。">
        </div>
        <div class="checkout-select">
            <a class="commit-btn"  target="_blank">确认下单</a>
        </div>
    </div>
    <div class="clear"></div>
</div>
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
<div style="padding-top: 50px;">
    <?php ob_start();
echo APP_PPDP;
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2."/home/fonter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</div>

<div id="addressModal" class="reveal-modal">
    <div id="addressform" class="addressform">
        <span class="address-title">送餐地址</span>
        <div class="addressformfield">
            <label class="address-name">姓名:</label>
            <input id="address-name" placeholder="请输入姓名" maxlength="12">
            <label id="error-name" class="error"></label>
        </div>
        <div class="addressformfield">
            <label class="address-pn">手机号:</label>
            <input id="address-pn" placeholder="请输入11位手机号" maxlength="11">
            <label id="error-pn" class="error"></label>
        </div>
        <div class="addressformfield">
            <label class="address-detail">地址:</label>
            <div class="detail-2">
                <span id="place" ></span>
                <input id="address-detail" placeholder="详细地址(如A座12层)">
            </div>
            <label id="error-detail" class="error"></label>
        </div>
        <div class="addressform-buttons">
            <a class="save-btn" href="#">保存</a>
        </div>
    </div>
    <a class="close-reveal-modal"><img src="<?php echo IMAGE;?>
home/icon_close.png" height="24" width="24"></a>
</div>

<!--提示框-->
<div id="alertModel" class="alertModel" >
    <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
    <span id="alert-msg"></span>
    <a id="btn-ok" class="btn">知道了</a>
    <a id="btn-close" class="close-reveal-modal"><img src="<?php echo IMAGE;?>
home/icon_close.png" height="24" width="24"></a>
</div>


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
home/myInfo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/shopInfo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/order.js?v=1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/login.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/header.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/footer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/cart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/shopInfo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
            $(function(){

                //点击保存
                $("#save-address").click(function(event) {
                    saveMyAddress();
                });
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



                            //初始化
                            var shopName=shop_GetValue("shopName");
                            var place=my_GetValue("place");
                            var addressDetail=my_GetValue("addressDetail");


                            var name=my_GetValue("name");
                            var pn=my_GetValue("pn");
                            var block=my_GetValue("block");
                            var floor=my_GetValue("floor");

                            if(place){
                                $("#myFanzu").html(place);
                                $("#place").val(place);
                            }

                            $("#name").val(name);
                            $("#pn").val(pn);
                            $("#address-detail").val(addressDetail);


                        });




                        //保存地址
                        function saveMyAddress(){
                            var address="";
                            var name=$('#name').val().trim();
                            var pn=$('#pn').val().trim();
                            var place=$('#place').val();
                            var addressDetail=$('#address-detail').val().trim();

                            $('#error-name,#error-pn,#error-detail').text("");
                            //验证合法性
                            if(name==""){
                                $('#error-name').text("请输入姓名");
                                return;
                            }
                            if(pn==""){
                                $('#error-pn').text("请输入手机号");
                                return;
                            }
                            if(addressDetail==""){
                                $('#error-detail').text("请输入详细地址");
                                return;
                            }
                            uploadMyAddress(pn,name,place,addressDetail);
                        }

                        function uploadMyAddress(pn,name,place,addressDetail){
                            $username=my_GetValue("userId");
                            if(!$username){
                                showAlert("用户未登录");
                                return;
                            }
                            var postUrl="?m=home&c=Userc&a=address";
                            $.post(postUrl,
                                {
                                    username:$username,
                                    pn:pn,
                                    name:name,
                                    place:place,
                                    addressDetail:addressDetail},
                                function(data,status,xhr) {
                                    if(status=="success"){
                                        $res= $.parseJSON(data);
                                        if($res.code=="0"){
                                            my_SaveValue("pn",pn);
                                            my_SaveValue("name",name);
                                            my_SaveValue("place",place);
                                            my_SaveValue("addressDetail",addressDetail);
                                            showAlert("保存成功");

                                        }else if($res.code=="1"){
                                            showAlert("保存失败");
                                        }
                                    }else{
                                        showAlert("服务器异常,请重试");
                                    }
                                });
                        }

        $(".footer-content").show();
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
