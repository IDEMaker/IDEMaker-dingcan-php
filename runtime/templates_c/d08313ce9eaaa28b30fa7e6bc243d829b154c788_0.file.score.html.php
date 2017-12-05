<?php
/* Smarty version 3.1.30, created on 2017-11-29 16:36:24
  from "D:\phpStudy\WWW\OAM\views\home\userc\score.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e7188e2f594_72607030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd08313ce9eaaa28b30fa7e6bc243d829b154c788' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\home\\userc\\score.html',
      1 => 1511830550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e7188e2f594_72607030 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!--右侧内容-->
    <div class="content-right fl">
        <div class="summary fl">
            <h3 class="summary-header">我的积分</h3>
        </div>
        <div>
            <div class="account-balance fl">
                您的剩余积分：<span><span id="score-value"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span></span>
            </div>
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
home/header.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/account.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/myInfo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/footer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(function(){

        //初始化积分
//        var score=my_GetValue("jifen");
//        if(score>0){
//            $("#score-value").html(score);
//        }else{
//            $("#score-value").html("0");
//        }
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
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
