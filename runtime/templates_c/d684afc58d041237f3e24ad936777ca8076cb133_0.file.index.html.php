<?php
/* Smarty version 3.1.30, created on 2017-11-29 15:55:28
  from "D:\phpStudy\WWW\OAM\views\home\indexc\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e67f0a65c70_20015046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd684afc58d041237f3e24ad936777ca8076cb133' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\home\\indexc\\index.html',
      1 => 1511834951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e67f0a65c70_20015046 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="“订饭组（dingfanzu.com）”是北京地区知名的在线外卖订餐O2O平台，是写字楼白领专属订餐网站。已覆盖北京数百个写字楼，数十万用户，聚集了数千家餐饮商户。订外卖，找订饭组。" />
        <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/baidu_js_push.js"><?php echo '</script'; ?>
>
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
home/place.css">
        <link rel=stylesheet href="<?php echo CSS;?>
home/footer_1.css">
        <link rel=stylesheet href="<?php echo CSS;?>
home/reveal.css">
        <link rel=stylesheet href="<?php echo CSS;?>
home/login.css">
        <title><?php ob_start();
echo APP_PPDP;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1."/home/title.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
-订饭组-写字楼外卖_订餐组_订餐官网</title>
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
        <?php echo '<script'; ?>
>

            $(document).ready(function(){

                $.ajax({
                    type : 'get',
                    async : false,
                    url : 'http://api.k780.com/?app=ip.get&ip=<?php echo $_smarty_tpl->tpl_vars['newip']->value;?>
&appkey=27645&sign=c816884655c1de637165af8bb9f60d53&format=json&jsoncallback=data',
                    dataType : 'jsonp',
                    jsonp : 'callback',
                    jsonpCallback : 'data',
                    success : function(data){

                      address=data.result['att'];
                        $.ajax({
                                type:"get",
                                url:"?m=home&c=Indexc&a=city&city="+address,
                                dataType:"json",
                                success:function(val)
                                {
                                    if(val==0)
                                    {
                                        showAlert("该城市下没有店铺");
                                    }else{
                                        var  str="";
                                        var  st="";
                                        for(var i=0;i<val['city'].length;i++)
                                        {

                                            str+='<li><a id=t'+(i+1)+' cityId='+val['city'][i]['id']+' status='+1+'>'+val['city'][i]['city']+'</a></li>';
                                        }
                                        for(var j=0;j<val['shop'].length;j++)
                                        {
                                            st+='<div class="name-item"><a href="?m=home&c=Shopc&a=index&shopId='+val['shop'][j]['shopId']+'">'+val['shop'][j]['shopName']+'</a></div>';
                                        }
                                        $("#n1").html(st);
                                        $(".citylist").html(str);
                                        $(".current_city").text(address);
                                    }


                                }

                            }
                        )

                    }

                });


            }

            )
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
home/icon_search.png" width="20" height="20">
                <input id="search-input" class="search-input" type="text" placeholder="请输入店铺名称" onkeypress="onKeySearch()">
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
                    <a id="header-login" class="navBtn f-radius f-select n"  data-reveal-id="myModal" data-animation="fade">
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
        <div class="place-content"> 
            
            <div class="place-wrap-1">
                <div class="place-cc">
                <span class="current_city"></span>
                <a>[切换城市]</a>

                </div>
                <div class="place-wrap place-shadow">
                    <div class="place-tab">
                    <ul class="citylist">

                    </ul>
                    </div>
                    <div id="n1" class="place-names">

                    </div>
                    <div id="n2" class="place-names n">

                    </div>
                    <div id="n3" class="place-names n">

                    </div>
                    <div id="n4" class="place-names n">

                    </div>
                    <div id="n5" class="place-names n">

                    </div>
                    <div id="n6" class="place-names n">

                    </div>
                    <div id="n7" class="place-names n">

                    </div>
                    <div id="n8" class="place-names n">

                    </div>
                    <div id="n9" class="place-names n">

                    </div>
                </div> 
            </div>

          
            <?php ob_start();
echo APP_PPDP;
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable2."/home/fonter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
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
        <ul  class="place-nav n" style="margin-left: 10px;">
                <li><a class="city" ip="123.125.71.38">北京</a></li>
                <li><a class="city" ip="221.239.16.228">天津</a></li>
                <li><a class="city" ip="58.24.41.17">上海</a></li>
                <li><a class="city" ip="222.179.239">重庆</a></li>
                <li><a class="city" ip="218.12.47.124">河北</a></li>
                <li><a class="city" ip="218.28.191.24">河南</a></li>
                <li><a class="city" ip="221.209.3.56">黑龙江</a></li>
                <li><a class="city" ip="222.168.146.59">吉林</a></li>
                <li><a class="city" ip="218.25.19.123">辽宁</a></li>
                <li><a class="city" ip="222.174.221.0">山东</a></li>
                <li><a class="city" ip="218.21.128.31">内蒙古</a></li>
                <li><a class="city" ip="49.95.255.255">江苏</a></li>
                <li><a class="city" ip="218.22.9.4">安徽</a></li>
                <li><a class="city" ip="211.142.1.17">山西</a></li>
                <li><a class="city" ip="61.150.73.149">陕西</a></li>
                <li><a class="city" ip="61.178.172.126">甘肃</a></li>
                <li><a class="city" ip="218.75.35.101">浙江</a></li>
                <li><a class="city" ip="218.64.55.198">江西</a></li>
                <li><a class="city" ip="59.172.71.205">湖北</a></li>
                <li><a class="city" ip="220.168.56.116">湖南</a></li>
                <li><a class="city" ip="222.86.183.149">贵州</a></li>
                <li><a class="city" ip="218.88.220.0 218">四川</a></li>
                <li><a class="city" ip="116.52.147.50">云南</a></li>
                <li><a class="city" ip="124.117.66.0">新疆</a></li>
                <li><a class="city" ip="222.75.147.27">宁夏</a></li>
                <li><a class="city" ip="61.133.231.115">青海</a></li>
                <li><a class="city" ip="220.182.50.226">西藏</a></li>
                <li><a class="city" ip="219.159.235.101">广西</a></li>
                <li><a class="city" ip="219.137.148.0">广东</a></li>
                <li><a class="city" ip="218.66.59.145">福建</a></li>
                <li><a class="city" ip="202.100.198.24">海南</a></li>
                <li><a class="city" ip="220.130.172.241">台湾</a></li>
                <li><a class="city" ip="49.246.224.0">香港</a></li>
                <li><a class="city" ip="202.175.34.0">澳门</a></li>
        </ul>

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
home/cart.lib.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/cart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS;?>
home/header.js?v=1"><?php echo '</script'; ?>
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
                    });

                    function processFooter(){
                        var zh=$(document.body).height(); 
                        $(".footer-content").css('top', zh-60);
                        $(".footer-content").show();
                    };

    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
