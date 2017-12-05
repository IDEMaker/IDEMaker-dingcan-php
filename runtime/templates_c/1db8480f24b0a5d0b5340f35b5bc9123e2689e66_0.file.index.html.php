<?php
/* Smarty version 3.1.30, created on 2017-12-02 19:18:46
  from "/home/wwwroot/www.dingfan.fmlynet.cn/views/adminmer/indexc/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a228c1666d104_50266407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1db8480f24b0a5d0b5340f35b5bc9123e2689e66' => 
    array (
      0 => '/home/wwwroot/www.dingfan.fmlynet.cn/views/adminmer/indexc/index.html',
      1 => 1511421476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a228c1666d104_50266407 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>订饭组外卖订餐商家后台管理系统</title>
    <link rel=stylesheet href="<?php echo CSS;?>
adminmer/reset.css">
    <link rel=stylesheet href="<?php echo CSS;?>
adminmer/bootstrap-admin.css">
    <link rel="stylesheet" href="<?php echo CSS;?>
adminmer/backstage.css">


</head>

<body>
<div class="head">
    <div class="logo fl" onclick="window.open('?m=adminmer&c=Indexc&a=index','_self')"></div>
    <span class="head_text">商家后台系统</span>

    <!-- <div class="operation_user clearfix"> -->
    <div class="link fr">
        <b>欢迎您
             <?php echo getSessions('adminmerName');?>

        </b>
        <a href="?m=home&c=Shopc&a=index&shopId=<?php echo getSessions('shopmerId');?>
" class="">预览前台</a>
        <a href="#" onclick="updatePage()" class="">刷新前台</a>
        <a href="?m=adminmer&c=Loginc&a=logout" class="">退出</a>
    </div>
    <!-- </div> -->
</div>
<div class="content clearfix">
    <div class="main">
        <!--右侧内容-->
        <div class="cont">
            <!-- 嵌套网页开始 -->
            <iframe src="?m=adminmer&c=Indexc&a=main"  frameborder="0" name="mainFrame" width="100%" height="100%" scrolling="yes"></iframe>
            <!-- 嵌套网页结束 -->
        </div>
    </div>
    <!--左侧列表-->
    <div class="menu">
        <div class="cont">
            <ul class="mList">
                <li>
                    <div class="menu-item-title" onclick="show('menu1','change1')"><span  id="change1" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">商品管理</span>
                    </div>
                    <dl id="menu1" style="display:none;">
                        <dd><a href="?m=adminmer&c=Goodsc&a=index" target="mainFrame">添加商品</a></dd>
                        <dd><a href="?m=adminmer&c=Goodsc&a=goods_list" target="mainFrame">商品列表</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu2','change2')"><span  id="change2" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">分类管理</span>
                    </div>
                    <dl id="menu2" style="display:none;">
                        <dd><a href="?m=adminmer&c=Catec&a=index" target="mainFrame">添加分类</a></dd>
                        <dd><a href="?m=adminmer&c=Catec&a=cate_list" target="mainFrame">分类列表</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu3','change3')"><span  id="change3" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">订单管理</span>
                    </div>
                    <dl id="menu3" style="display:none;">
                        <dd><a href="?m=adminmer&c=Orderc&a=order_list" target="mainFrame">综合查询</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu7','change7')">
                        <span  id="change7" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">接单管理</span>
                    </div>
                    <dl id="menu7" style="display:none;">
                        <dd><a href="?m=adminmer&c=Orderc&a=order_moniter" target="mainFrame" class="">开始接单</a></dd>
                        <dd><a href="?m=adminmer&c=Orderc&a=hand_order" target="mainFrame">处理中订单</a></dd>
                    </dl>
                </li>
                <li>
                    <div class="menu-item-title" onclick="show('menu4','change4')"><span  id="change3" class="menu-item-icon ico-open"></span>
                        <span class="menu-item-name">我的店铺</span>
                    </div>
                    <dl id="menu4" style="display:none;">
                        <dd><a href="?m=adminmer&c=Shopc&a=index" target="mainFrame">店铺详情</a></dd>
                        <dd><a href="?m=adminmer&c=Accountc&a=myBalance" target="mainFrame">我的余额</a></dd>
                        <dd><a href="?m=adminmer&c=Accountc&a=applyBalance" target="mainFrame">余额提现</a></dd>
                        <dd><a href="?m=adminmer&c=Accountc&a=mywithBalance" target="mainFrame">我的提现</a></dd>
                    </dl>
                </li>

            </ul>
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
<audio id="player">
    <source src="<?php echo APP_STATIC;?>
webs/Srce/raw/2478.mp3">
</audio>

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
 type="text/javascript">
    $(function(){
        $('.mList a').click(function(e) {
            $('.title').text($(this).text());
            $('.mList a').removeClass('active');
            $(this).addClass('active');
        });
        isMSIE();

        //轮询查订单
        setInterval("checkOrder()",60000);
    });
    //展开收缩
    function show(menu,change){
        if($("#"+change).hasClass('ico-open')){
            $("#"+change).removeClass('ico-open');
            $("#"+change).addClass('ico-close');
        }else{
            $("#"+change).removeClass('ico-close');
            $("#"+change).addClass('ico-open');
        }
        //隐藏显示
        $("#"+menu).toggle();
    }
    //判断浏览器
    function isMSIE(){
        var explorer=navigator.userAgent;
        if(explorer.indexOf("MSIE") >= 0){
            alert('请使用Chrome浏览器！');
        }
    }

    //生成html
    function updatePage(){
        var postUrl="?m=adminmer&c=Indexc&a=updatePage";
        $.post(postUrl,
            '',
            function(data, status, xhr) {
                if(status=="success"){
                    $res= $.parseJSON(data);
                    if($res.code=="0"){ //
                        showAlert("提示","刷新成功");
                    }else if($res.code=="1"){ //

                    }
                }else{
                    showAlert("提示","服务器异常，请联系平台人员");
                }
            });
    }

    //检查订单
    function checkOrder(){
        var shopId="<?php echo getSessions('shopmerId');?>
";
        if(!shopId){
            return;
        }
        var requestUrl="?m=adminmer&c=Orderc&a=check_order&shopId="+shopId;

        $.ajax({ url:requestUrl,
            type:'post',
            async:true,
            timeout:3000,
            success:function(data){
                if(data=="success"){
                    playVoice();
                }
            },
            error:function(data){
            }
        });
    }
    //播放背景音
    function playVoice(){
        var audio = $("#player")[0];
        audio.play();
    }


<?php echo '</script'; ?>
>

</body>
</html><?php }
}
