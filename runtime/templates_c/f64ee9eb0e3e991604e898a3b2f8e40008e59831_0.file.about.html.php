<?php
/* Smarty version 3.1.30, created on 2017-12-03 19:36:42
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/home/aboutc/about.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a23e1ca1d4953_85599586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f64ee9eb0e3e991604e898a3b2f8e40008e59831' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/home/aboutc/about.html',
      1 => 1511853930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a23e1ca1d4953_85599586 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="“订饭组（dingfanzu.com）”是北京地区知名的在线外卖订餐O2O平台，是写字楼白领专属订餐网站。已覆盖北京数百个写字楼，数十万用户，聚集了数千家餐饮商户。订外卖，找订饭组~" />
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
home/baidu_js_push.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/common.js"><?php echo '</script'; ?>
>
    <link rel="icon" href="<?php echo IMAGE;?>
home/favicon.ico" type="image/x-icon" />
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
home/about.css">
    <title><?php ob_start();
echo APP_PPDP;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."/home/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
-关于-订饭组-写字楼外卖_订餐组_订餐官网</title>
    <?php echo '<script'; ?>
>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?9bb651f2bb5622d49b0299560d6559cd";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    <?php echo '</script'; ?>
>
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
<!--内容部分-->
<div class="about-content">
    <div class="about-header">
        <div class="header-text-bg">
        </div>
    </div>
    <div class="about-nav">
        <div class="nav">
            <ul>
                <li><a forward="guanyuwomen" class="static">关于我们</a></li>
                <li><a forward="lianxiwomen" class="static">联系我们</a></li>
                <li><a forward="tousujianyi" class="static">投诉建议</a></li>
                <li><a forward="jiaruwomen" class="static">加入我们</a></li>
                <li><a forward="shangjiaruzhu" class="static">商家入驻</a></li>
            </ul>
        </div>
    </div>

    <div class="about-body">
        <!--关于我们-->
        <div id="guanyuwomen" class="body-wrap n">
            <div class="body-header">
                <span>IDEMaker-二次开发开源系统-订饭组</span>
            </div>
            <div class="body-content">
                        <span>
                        <p class="introduction">
                        “订饭组”是中国专业的餐饮O2O平台 
                        </p> 
                        <h3>发展历程</h3>
                        <div class="history">
                        2015年04月 “订饭组”网站正式上线<br>
                        2016年09月 推出餐厅运营一体化解决方案<br>
                        2016年10月 日均订单突破500单<br>
                        2017年02月 项目宣布失败（资金不足）<br>
                        2017年03月 项目开源<br>
                        2017年10月 项目由IDEmaker开源更新
                        <br>
                        开发者：<a href="http://www.fmlynet.cn" style="color:#0000ff;">IDEmaker</a>
                        </div>
                        </span>
            </div>
        </div>
        <!--联系我们-->
        <div id="lianxiwomen" class="body-wrap n">
            <div class="body-header">
                <span>联系我们</span>
            </div>
            <div class="body-content">
                        <span class="bft"> 
                        <p>客服微信：QQ80252797</p>
                        <p>网站主页：https://www.fmlynet.cn</p>
                        </span>

            </div>
        </div>
        <!--投诉建议-->
        <div id="tousujianyi" class="body-wrap n">
            <div class="body-header">
                <span>投诉建议</span>
            </div>
            <div class="body-content">
                <span class="bft">任何问题和建议，可以告诉我们哦~</span>
                <span>
                        <textarea id="tousu-txt" maxLength="150"/></textarea>
                        </span>
                <span class="paddingTB-20">
                            <a id="tousu-commit" class="btn-commit">提交</a>
                        </span>
            </div>
        </div>
        <!--加入我们-->
        <div id="jiaruwomen" class="body-wrap n">
            <div class="body-header">
                <span>加入我们</span>
            </div>
            <div class="body-content">
                <span class="bft">暂无招聘计划</span>
            </div>
        </div>
        <!--商家入驻-->
        <div id="shangjiaruzhu" class="body-wrap n">
            <div class="body-header">
                <span>商家入驻</span>
            </div>
            <div class="body-content">
                <span class="bft">您好，订饭组正在需要寻找更多的外卖店，他需要味道好，服务好，干净卫生，价格合理，当然最好是中式快餐哦，如果您有合适的餐馆推荐，一定要告诉我们哦~我们会去沟通考察。</span>
                <div class="shangjiaruzhu">
                    <span><label class="bft">餐馆名称：  </label><input id="hotelName" maxlength="20"></span>
                    <span><label class="bft">联系电话：  </label><input id="hotelPhone" maxlength="20"></span>
                    <span><label class="bft">餐馆位置：  </label><input id="hotelLocation" maxlength="30"></span>
                    <span><label class="bft">简单介绍：  </label><input id="hotelIntroduction" maxlength="100"></span>
                    <span><a id="hotel-commit" class="btn-commit">提交</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-wrap">
        <?php ob_start();
echo APP_PPDP;
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2."/home/fonter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

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

<!--提示框-->
<div id="alertModel" class="alertModel" >
    <a id="alert" data-reveal-id="alertModel" data-animation="fade"></a>
    <span id="alert-msg"></span>
    <button id="btn-ok" class="btn">知道了</button>
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
home/footer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/about.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){

        //获取url跳转参数
        var name=getUrlParam('p');
        if(name){
            $(".nav a[forward="+name+"]").addClass('active');
            $('.body-wrap').hide();
            $("#"+name).fadeIn(300);
        }


        //导航切换
        $(".nav a").click(function() {
            var forward=$(this).attr('forward');
            location.href = "?m=home&c=Accountc&a=about&p="+forward;
        });

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
            if($(this).text()!="济南"){
                alert("未开通");
            }else{
                window.location.reload();
            }
        });

        //弹出动画
        $(".place-wrap").animate({"opacity":"0.9"}, 200);




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
        $('.place-tab a').click(function(){
            //变样式
            var cl=$(this).parents('.place-tab').find('a');
            cl.removeClass('alive');
            $(this).addClass('alive');
            var pid=$(this).attr('id');
            $('.place-names').hide();
            var n="#"+pid.replace('t','n');
            $(n).show();
        });
    });

    function processFooter(){
        $(".footer-content").show();
    }


    //获取url跳转参数 
    function getUrlParam(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg); //匹配目标参数
        if (r != null) return unescape(r[2]); return null; //返回参数值
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
