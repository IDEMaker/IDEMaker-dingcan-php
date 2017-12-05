<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" d3d3LjcxaWRjLmNu54mI5p2D5omA5pyJ77yB6Z2S6bG8UVHvvJoyNDA3MDM1MzI2>
<html>
	<head>
	<title>奇云付免签约即时到账交易接口</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="js/jquery.min.js"></script>
  <link rel="icon" href="//www.71idc.cn/favicon.ico"  type="image/x-icon">
  <script src="js/bootstrap.min.js"></script>
    </head>
<body>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="https://www.7ypay.cn/">奇云付支付测试</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active">
            <a href="https://www.7ypay.cn/"><span class="glyphicon glyphicon-user"></span> 首页</a>
          </li>
        </ul>
      </div><!-- /.d3d3LjcxaWRjLmNu54mI5p2D5omA5pyJ77yB6Z2S6bG8UVHvvJoyNDA3MDM1MzI2 -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
      <div class="panel panel-primary">
        <div class="panel-body">
        <form name=alipayment action=7ypay.php method=post target="_blank">
		 <center><dt><span class="label label-success">普通支付方式</span></dt></center><br/>		
            <div class="input-group">			 
              <span class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></span>
			   <input size="30" name="WIDout_trade_no" value="<?php echo date("YmdHis").mt_rand(100,999); ?>" class="form-control" placeholder="商户订单号" />			    
            </div><dt>商户网站订单系统中唯一订单号</dt>
			<br/>
			<div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></span>
              <input size="30" name="WIDsubject" value="测试商品" class="form-control" placeholder="商品名称" required="required" />			   
            </div>
			<br/>
			<div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-yen"></span></span>
              <input size="30" name="WIDtotal_fee" value="0.01" class="form-control" placeholder="付款金额" required="required"/>			        
            </div>        			
<br/> 
<center>
<div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <button type="radio" name="type" value="alipay" class="btn btn-primary">支付宝</button>
  </div>
  <div class="btn-group" role="group">
    <button type="radio" name="type" value="qqpay" class="btn btn-success">QQ钱包</button>
  </div>
  <div class="btn-group" role="group">
    <button type="radio" name="type" value="wxpay" class="btn btn-info">微信支付</button>
  </div>
   <div class="btn-group" role="group">
    <button type="radio" name="type" value="tenpay" class="btn btn-warning">财付通</button>
  </div>
</div>
</center> </div>
          </form>
        </div>
      </div>      
    </div>
  </div>
</body>
</html>
