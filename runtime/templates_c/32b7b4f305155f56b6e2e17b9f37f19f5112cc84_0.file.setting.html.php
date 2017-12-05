<?php
/* Smarty version 3.1.30, created on 2017-11-29 16:35:17
  from "D:\phpStudy\WWW\OAM\views\home\userc\setting.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e71457f8ff0_65798387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32b7b4f305155f56b6e2e17b9f37f19f5112cc84' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\OAM\\views\\home\\userc\\setting.html',
      1 => 1511830564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e71457f8ff0_65798387 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h3 class="summary-header">账户设置</h3>
                </div>
                <div class="accountform" id="form-settings">
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
                            <label>手机号</label><span id="pn"></span>
                            <div class="accountformfield-hint">
                                <span></span>
                            </div>
                        </div>  
                        <div class="accountformfield passwordfield">
                            <label>密码</label><span>******</span>
                            <button id="btn-update-pwd">修改密码</button>
                            <div class="accountformfield-hint">
                                <span></span>
                            </div>
                        </div> 
                        <div class="accountformfield emailfield">
                            <label>我的邮箱</label><input id="email" placeholder="请输入邮箱">
                            <div class="accountformfield-hint">
                                <span></span>
                            </div>
                        </div> 
                    </div>
                    <div class="accountform-buttons">
                        <a id="save-settings" class="save-btn" href="#">保存</a>
                    </div>
                </div>

                <div class="accountform n" id="form-pwd">
                    <div> 
                        <div class="accountformfield">
                            <label>原密码</label><input id="pwd" placeholder="">
                            <div class="accountformfield-hint form-error">
                                <span id="error-pwd"></span>
                            </div>
                        </div>
                        <div class="accountformfield">
                            <label>新密码</label><input id="pwd2" placeholder="">
                            <div class="accountformfield-hint form-error">
                                <span id="error-pwd2"></span>
                            </div>
                        </div>
                        <div class="accountformfield">
                            <label>确认新密码</label><input id="pwd3" placeholder="">
                            <div class="accountformfield-hint form-error">
                                <span id="error-pwd3"></span>
                            </div>
                        </div>
                    </div> 
                    <div class="accountform-buttons">
                        <a id="save-new-pwd" class="save-btn" href="#">修改</a>
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

                            initSettings();

                //修改密码
                $("#btn-update-pwd").click(function(event) {
                    $("#form-settings").hide();
                    $("#form-pwd").show();
                });

                //保存设置
                $("#save-settings").click(function(event) {
                    saveSettings();
                });

                //保存新密码
                $("#save-new-pwd").click(function(event) {
                    saveNewPwd();
                });

            });

            function initSettings(){ 
                var userId=my_GetValue("userId");
                var name=my_GetValue("name");
                var place=my_GetValue("place");
                var email=my_GetValue("email"); 

                if(place){
                    $("#myFanzu").html(place);
                }
                
                $("#pn").html(userId);
                if(name&&name.length>0){ 
                    $("#name").val(name);
                }
                if(email&&email.length>0){
                    $("#email").val(email); 
                } 
            }

            function saveSettings(){
                var username=my_GetValue("userId");
                var name=$("#name").val().trim();
                var email=$("#email").val().trim();
                if(name.length<=0){
                    $("#error-name").html("请输入姓名");
                    return;
                }
                var postUrl="?m=home&c=Userc&a=setting";
                    $.post(postUrl,  
                        {
                            username:username,
                            name:name,
                            email:email
                        },
                        function(data,status,xhr) {   
                           if(status=="success"){   
                                $res= $.parseJSON(data); 
                                if($res.code=="0"){  
                                    my_SaveValue("name",name); 
                                    my_SaveValue("email",email);
                                    showAlert("保存成功");

                                }else if($res.code=="1"){
                                    showAlert("保存失败");
                                } 
                           }else{
                                showAlert("服务器异常,请重试");
                           }
                       });  
            }


            //保存新密码
            function saveNewPwd(){
                var username=my_GetValue("userId");
                var pwd=$("#pwd").val().trim();
                var pwd2=$("#pwd2").val().trim();
                var pwd3=$("#pwd3").val().trim();

                $("#error-pwd,#error-pwd2,#error-pwd3").html("");
                if(pwd.length<6){ 
                    $("#error-pwd").html("密码长度必须大于6位");
                    return;
                }else if(pwd2.length<6){ 
                    $("#error-pwd2").html("密码长度必须大于6位");
                    return;
                }else if(pwd2!=pwd3){
                    $("#error-pwd3").html("两次密码不一致");
                    return;
                }

                var postUrl="?m=home&c=Userc&a=saveNewPwd";
                    $.post(postUrl,  
                        {
                            username:username,
                            pwd:pwd,
                            pwd2:pwd2
                        },
                        function(data,status,xhr) {   
                           if(status=="success"){    
                                var res= $.parseJSON(data);  
                                if(res.code=="0"){   
                                    showAlert("修改成功");

                                }else if(res.code=="1"){
                                    showAlert(res.msg);
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
