<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>奇云付</title>
</head>
<?php
/* *
 * 功能：即时到账交易接口接入页
 * 
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。
 */

require_once("7ypay.config.php");
require_once("lib/7ypay_submit.class.php");

/**************************请求参数**************************/
        $notify_url = "http://localhost/SDK/notify_url.php";
        //需http://格式的完整路径，不能加?id=123这类自定义参数

        //页面跳转同步通知页面路径
        $return_url = "http://localhost/SDK/return_url.php";
        //需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/

        //商户订单号
        $out_trade_no = $_POST['WIDout_trade_no'];
        //商户网站订单系统中唯一订单号，必填


		//支付方式
        $type = $_POST['type'];
        //商品名称
        $name = $_POST['WIDsubject'];
		//付款金额
        $money = $_POST['WIDtotal_fee'];
		//站点名称
        $sitename = 'IDEMaker开源项目';
        //必填

        //订单描述


/************************************************************/

//构造要请求的参数数组，无需改动
$parameter = array(
		"pid" => trim($alipay_config['partner']),
		"type" => $type,
		"notify_url"	=> $notify_url,
		"return_url"	=> $return_url,
		"out_trade_no"	=> $out_trade_no,
		"name"	=> $name,
		"money"	=> $money,
		"sitename"	=> $sitename
);

//建立请求
$alipaySubmit = new AlipaySubmit($alipay_config);
$html_text = $alipaySubmit->buildRequestForm($parameter);

echo $html_text;

?>
</body>
</html>