<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:09:52
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/home/userc/address.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a228a00438c98_72019035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfefad02560a6d09a54e5d4b7a3432fd34e900b0' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/home/userc/address.html',
      1 => 1511830508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a228a00438c98_72019035 (Smarty_Internal_Template $_smarty_tpl) {
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
            <h3 class="summary-header">送餐地址</h3>
        </div>
        <div class="accountform">
            <div>
                <div class="accountformfield">
                    <label>我的饭组</label> <span id="myFanzu">&nbsp;</span>
                </div>
                <div class="accountformfield">
                    <label>姓名</label><input id="name" placeholder="请输入您的姓名">
                    <div class="accountformfield-hint form-error">
                        <span id="error-name"></span>
                    </div>
                </div>
                <div class="accountformfield phonefield">
                    <label>手机号</label><input id="pn" placeholder="请输入您的手机号" >
                    <div class="accountformfield-hint form-error">
                        <span id="error-pn"></span>
                    </div>
                </div>
                <div class="accountformfield">
                    <label>地点</label>
                    <input id="place" placeholder="请输入您的地址">
                </div>
                <div class="accountformfield">
                    <label>详细地址</label>
                    <input id="address-detail" placeholder="详细地址">
                    <div class="accountformfield-hint form-error">
                        <span id="error-detail"></span>
                    </div>
                </div>
            </div>
            <div class="accountform-buttons">
                <a id="save-address" class="save-btn" href="#">保存</a>
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
home/shopInfo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS;?>
home/footer.js"><?php echo '</script'; ?>
>
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
</body>
</html><?php }
}
