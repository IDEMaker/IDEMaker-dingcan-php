<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:06:53
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/home/shopc/shop/1001.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a22894da53073_70523328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd6a378aa9ac7cd6cc14ad512f6635c9aff5ef04' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/home/shopc/shop/1001.html',
      1 => 1512032910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a22894da53073_70523328 (Smarty_Internal_Template $_smarty_tpl) {
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
home/jquery.fly.min.js"><?php echo '</script'; ?>
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

        <link rel=stylesheet href="<?php echo CSS;?>
home/reset.css">
        <link rel=stylesheet href="<?php echo CSS;?>
home/common.css">
        <link rel=stylesheet href="<?php echo CSS;?>
home/base.css">
        <link rel=stylesheet href="<?php echo CSS;?>
home/shop.css">
        <link rel=stylesheet href="<?php echo CSS;?>
home/header.css">
        <link rel=stylesheet href="<?php echo CSS;?>
home/shopcart.css">
        <link rel=stylesheet href="<?php echo CSS;?>
home/leftmenu.css">
        <link rel=stylesheet href="<?php echo CSS;?>
home/reveal.css">
        <link rel=stylesheet href="<?php echo CSS;?>
home/login.css">
        <title><?php ob_start();
echo APP_PPDP;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."/home/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
-订饭组-商家店铺</title>
    </head>
    <body>

        <!--菜品展示-->
       <div class="content-middle n">
             <div id='m1' class='menu-wrap '><div class='menu-item' item-id='1511954945831'><div class='item-wrap'><img src='<?php echo APP_UPLOAD;?>
upload/goods_image_thumb_220/2017-11-29/224e9af5dc0ffd13f8f73e04a274cdb1454.jpg' height='130' width='130'> <div class='item-detail'><span class='name '>店铺测试商品支付</span><span class='price'  item-price='0.01'>￥0.01</span> <img class='buy' src='<?php echo IMAGE;?>
home/icon_buy.png' > <ul class='stars'><li data-value='1' class='active'></li><li data-value='2' class='active'></li><li data-value='3' class='active'></li><li data-value='4' class='active'></li><li data-value='5' class=''></li></ul></div></div></div><div class='menu-item' item-id='1512032903781'><div class='item-wrap'><img src='<?php echo APP_UPLOAD;?>
upload/goods_image_thumb_220/2017-11-30/e64c30a305397e6a3e9e703db542cffe540.jpg' height='130' width='130'> <div class='item-detail'><span class='name '>测试</span><span class='price'  item-price='20'>￥20</span> <img class='buy' src='<?php echo IMAGE;?>
home/icon_buy.png' > <ul class='stars'><li data-value='1' class='active'></li><li data-value='2' class='active'></li><li data-value='3' class='active'></li><li data-value='4' class='active'></li><li data-value='5' class=''></li></ul></div></div></div></div>
<div id='m2' class='menu-wrap n'></div>

       </div>
        <!--header部分-->
        <div class="header shadow">
            <div class="header-left fl">
                <div class="icon fl"></div>
                <a class="weixin-dingfan fw" href="#">微信订饭</a>
                <a class="logo" href="?m=home&c=Indexc&a=index"></a>
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
        </div>
        <!--内容部分-->
        <div class="shop-content"> 

            <div class="gonggao-wrap">
             <div class="gonggao">     
                <b> PACKIDE官方，开源订餐系统项目,联系电话17600361387</b>
               </div>
           </div>


            <div class="leftmenu">
                    <dl>
                        <dt>
                        <img class='shop-icon' src='<?php echo APP_UPLOAD;?>
upload/shop_image/2017-11-29/17fcfc67557d5949d66cf6a926b85ce9803.jpg' ><span class='shop-name' shopId='1001' shopName='开源项目店铺测试' shopPhone='13599999999'>开源项目店铺测试</span><span class='switch-address'><a class='switch-address' href='?m=home&c=Indexc&a=index'>[切换地址]</a></span>
 
                        </dt>
                        <dd id='i1' class='active leftmenu-item'><a href='#'>盖饭</a></dd>
<dd id='i2' class=' leftmenu-item'><a href='#'>测试</a></dd>

                    </dl> 
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
        <ul id="subnav" class="subnav subnav-shadow n">
            <li><a href="?m=home&c=Userc&a=setting" target="">账号设置</a></li>
            <li><a href="?m=home&c=Accountc&a=order" target="">我的订单</a></li>
            <li><a href="?m=home&c=Userc&a=balance" target="">我的余额</a></li>
            <li><a href="?m=home&c=Userc&a=score" target="">我的积分</a></li>
            <li><a href="?m=home&c=Userc&a=address" target="">我的地址</a></li>
            <li><a id="sub-logout" href="" target="">退出</a></li>
        </ul>
    </div>

    <div id="myModal" class="reveal-modal"> 
        <div id="loginform" class="loginform n">
            <div>
                <div class="loginformfield">
                    <span class="form-icon"><img src="<?php echo IMAGE;?>
home/logo-50-50.jpg"></span>
                </div>
                <div class="loginformfield">
                    <span class="form-title">
                    <h2>使用手机号登录订饭组</h2>
                    </span>
                </div>
                <div class="loginformfield">
                    <label class="field-name">手机号:</label>
                    <input id="phone-1" placeholder="请输入您的手机号">
                    <div class="loginformfield-hint form-error">
                        <span id="login-phone-error"></span>
                    </div>
                </div>
                <div class="loginformfield">
                    <label class="field-name">密码:</label>
                    <span class="fp"><a href="#" id="forget-password" class="forget-password">忘记密码？</a></span>
                    <input id="login-pwd" type="password" placeholder="密码">
                    <div class="loginformfield-hint form-error">
                        <span id="login-pwd-error"></span>
                    </div>
                </div> 
            </div>
            <div class="loginform-buttons">
                <a id="checkin" class="save-btn" href="#">登录</a>
                <span >还没有账号？<a id="register">创建一个</a></span>
            </div> 
        </div>
        <div id="registerform" class="registerform n">
            <div>
                <div class="loginformfield">
                    <span class="form-icon"><img src="<?php echo IMAGE;?>
home/logo-50-50.jpg"></span>
                </div>
                <div class="loginformfield">
                    <span class="form-title">
                    <h2>创建新账号</h2>
                    </span>
                </div>
                <div class="loginformfield">
                    <label class="field-name">手机号:</label>
                    <input id="phone-2" placeholder="请输入您的手机号">
                    <div class="loginformfield-hint form-error">
                        <span id="register-phone-error"></span>
                    </div>
                </div>
                <div class="loginformfield field-confirm-code">
                    <label class="field-name">验证码:</label> 
                    <input   id="register-confirm-code" placeholder="请输入验证码">
                    <button id="register-code" class="phone-code-btn">获取验证码</button>
                    <input type="hidden" id="register-hid-code">
                    <div class="loginformfield-code-hint form-error">
                        <span id="register-code-error"></span>
                    </div>
                </div> 
                <div class="loginformfield">
                    <label class="field-name">请输入密码:</label> 
                    <input id="register-pwd" type="password" placeholder="请输入6位以上字母或数字密码">
                    <div class="loginformfield-hint form-error">
                        <span id="register-pwd-error"></span>
                    </div>
                </div> 
            </div>
            <div class="loginform-buttons">
                <a id="create" class="save-btn" href="#">创建</a>
                <span >已经有账号？<a id="login">登录</a></span>
            </div> 
        </div>
        <div id="chpwdform" class="chpwdform n">
            <div>
                <div class="loginformfield">
                    <span class="form-icon"><img src="<?php echo IMAGE;?>
home/logo-50-50.jpg"></span>
                </div>
                <div class="loginformfield">
                    <span class="form-title">
                    <h2>修改密码</h2>
                    </span>
                </div>
                <div class="loginformfield">
                    <label class="field-name">手机号:</label>
                    <input id="phone-3" placeholder="请输入您的手机号">
                    <div class="loginformfield-hint form-error">
                        <span id="chpwd-phone-error"></span>
                    </div>
                </div>
                <div class="loginformfield field-confirm-code">
                    <label class="field-name">验证码:</label> 
                    <input  id="chpwd-confirm-code"  placeholder="请输入验证码">
                    <button id="chpwd-code" class="phone-code-btn">获取验证码</button>
                    <input type="hidden" id="chpwd-hid-code">
                    <div class="loginformfield-code-hint form-error">
                        <span id="chpwd-code-error"></span>
                    </div>
                </div> 
                <div class="loginformfield">
                    <label class="field-name">新密码:</label> 
                    <input id="chpwd-pwd" type="password" placeholder="请输入6位以上字母或数字密码">
                    <div class="loginformfield-hint form-error">
                        <span id="chpwd-pwd-error"></span>
                    </div>
                </div> 
            </div>
            <div class="loginform-buttons">
                <a id="chpwd" class="save-btn" href="#">确定</a>
                <span >没有忘记密码？<a id="back-login">返回</a></span>
            </div> 
        </div>


        <a class="close-reveal-modal"><img src="<?php echo IMAGE;?>
home/icon_close.png" height="24" width="24"></a>
    </div>

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
home/shopInfo.js"><?php echo '</script'; ?>
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
home/header.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/shop.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
            $(function(){ 
                //存商家信息到cookie
                var shopId=$('.shop-name').attr('shopId');
                var shopName=$('.shop-name').attr('shopName');
                var shopPhone=$('.shop-name').attr('shopPhone'); 
                $.cookie('shopId',shopId,{expires:365,path:'/'});//写cookie
                //初始化购物车
                initCart();
                $('.shop-cart').show(); 

                //左侧导航
                var zh=$(window).height();
                var leftHeight=zh-55;
                $(".leftmenu").height(leftHeight);
                //公告宽度
                processGonggao();

                //菜品div宽度
                processMenuItems();

                //购物车
                processShopItem();


                $('.gonggao').show();
                $('.content-middle').show();
               

                //监听窗口尺寸
                $(window).resize(function(){
                    //设置左侧的高
                    var zh=$(window).height(); 
                    var leftHeight=zh-55;
                    $(".leftmenu").height(leftHeight);
                    //公告宽度
                    processGonggao();

                    //菜品div宽度
                    processMenuItems();

                    //购物车
                    processShopItem();
                    
                });
     
                

                //左侧点击
                $('.leftmenu-item a').click(function(){
                    //变样式
                    $(this).parents('.leftmenu').find('.leftmenu-item').removeClass('active');
                    $(this).parent().addClass('active');
                    //变菜品
                    var i=$(this).parents('dd').attr('id');
                    $('.menu-wrap').hide();
                    var m="#"+i.replace('i','m'); 
                    $(m).fadeIn(600);
                });

                
                //菜品相关
                function processMenuItems(){
                    var zw=$(window).width(); 
                    var shopCartWidth=$('.shop-cart').width();
                    var leftMenuWidth=$('.leftmenu').width();
                    var mw=zw-shopCartWidth-leftMenuWidth;  
                    $(".content-middle").width(mw);
                    $(".content-middle").css('left', leftMenuWidth);
                    $(".menu-wrap").width(mw);

                    var percent='48%';
                    var marginLeft=0;  

                    if(mw>=700){
                        percent='48%';
                        marginLeft=mw-mw*0.48*2; 
                        if(zw<1240){
                            $(".stars").css('bottom', 40);
                            $(".price").css('left', 140);
                            $(".buy").css('left', 180);
                            $(".price").css('right', '');
                            $(".buy").css('right', '');
                        }else{
                            //样式归位
                            $(".stars").css('bottom', 5);
                            $(".price").css('left', '');
                            $(".buy").css('left', '');
                            $(".price").css('right', 50);
                            $(".buy").css('right', 10);
                        }
                    }
                    else if(mw<700){
                        percent='96%';
                        marginLeft=mw-mw*0.96;
                        
                        if(zw<593){
                            $(".stars").css('bottom', 40);
                            $(".price").css('left', 140);
                            $(".buy").css('left', 180);
                            $(".price").css('right', '');
                            $(".buy").css('right', '');
                        }else{
                            //样式归位
                            $(".stars").css('bottom', 5);
                            $(".price").css('left', '');
                            $(".buy").css('left', '');
                            $(".price").css('right', 50);
                            $(".buy").css('right', 10);
                        }
                    }

                    $(".menu-item").css('width', percent);
                    $(".item-wrap").css('margin-left', marginLeft);

                     
                }

                //公告宽度
                function processGonggao(){ 
                    var zw=$(window).width();
                    var shopCartWidth=$('.shop-cart').width();
                    var leftMenuWidth=$('.leftmenu').width();
                    var gw=zw-shopCartWidth-leftMenuWidth-40; 
                    var gw_wrap=gw+50;
                    $(".gonggao").width(gw); 
                    $(".gonggao").css('left', leftMenuWidth+10);
                    $(".gonggao-wrap").width(gw_wrap); 
                    $(".gonggao-wrap").css('left',leftMenuWidth );
                }

 
            });

        
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
