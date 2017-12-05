<?php
/* Smarty version 3.1.30, created on 2017-11-29 16:38:34
  from "D:\phpStudy\WWW\OAM\views\home\userc\balrecharge.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e720a316c39_40019639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '647d01469bcd6b0f9b30a28a2ec1d58dc4e8c3c9' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\home\\userc\\balrecharge.html',
      1 => 1511835135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e720a316c39_40019639 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
    <link rel=stylesheet href="<?php echo CSS;?>
home/reset.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/common.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/base.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/header.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/footer_1.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/reveal.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/login.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/shopcart.css">
    <link rel=stylesheet href="<?php echo CSS;?>
home/order.css">


    <title><?php ob_start();
echo APP_PPDP;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."/home/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
-订饭组-余额充值</title>
    <style>
        .pay-btn {
            display:inline-block;
            margin:10px 10px 10px ;
            width:100px;
            height:30px;
            padding:0;
            border:0;
            text-align:center;
            zoom:1;
            *display:inline;
            -webkit-transition:background-color .2s ease-in 0s;
            -moz-transition:background-color .2s ease-in 0s;
            -o-transition:background-color .2s ease-in 0s;
            transition:background-color .2s ease-in 0s;
            -moz-border-radius:2px;
            border-radius:2px;
            font-size:1em;
            color:#fff;
            background-color:#ff2d4b;
            cursor:pointer;
            line-height:30px;
        }
        .order-info .order-operator button:hover, .order-info .order-operator .pay-btn:hover {
            background-color:#e52843
        }
    </style>
</head>
<body>
<!--header部分-->
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
</div> <link rel=stylesheet href="<?php echo CSS;?>
home/weixinPay.css">
<div class="content-wrap">
    <div class="content">
        <div class="w-title">
        <span class="w-title-left">充值余额:</span>
        <span class="w-title-right"><input id="balance" style="width:200px;height:30px;line-height: 30px;" type="text" placeholder="请输入充值金额最小0.01元"></span>
        </div>
    </div>
    <div class="order-operator " >
        <div class="operator-btns">
            <a class='pay-btn' onclick="pay('','','')">确认充值</a>
            <a class='pay-btn' onclick="history.go(-1)">返回不充值</a>
        </div>
    </div>
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
home/myInfo.js"><?php echo '</script'; ?>
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
home/cart.lib.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/cart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/shopInfo.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function pay(username,orderId,orderTime)
    {
         var price=$("#balance").val();

          window.location.href=encodeURI("?m=home&c=Orderc&a=alipay&username="+username+"&orderId="+orderId+"&price="+price+"&orderTime="+orderTime);
    }
<?php echo '</script'; ?>
><?php }
}
