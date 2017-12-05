<?php
use LIB\models;
class Ordercm extends models{
    //订餐系统前台用户获取订单逻辑处理
    public function order_list()
    {
          $username=getCookies("userId");

          $sqll="SELECT * FROM dfz_order";
          $sqlll="SELECT count(*) as num  FROM dfz_order";
          $where=" 1 and username='$username'order by ordertime desc";
          $data=page("dfz_order",3,empty(get('p'))?1:get('p'),$where,$config="",$issql=true,$sqll,$sqlll);
          if($data['data']=="")
          {
               return $data=0;
          }
          foreach($data['data'] as $key=>$val)
          {
                 $data['data'][$key]['items']=json_decode($val['items'],true);
          }
          return $data;
    }
    //订餐系统前提用户获取实付金额逻辑处理
    public function getPay_Price()
    {

        $username=post('username');
        $shopId=post('shopId');
        $itemsTxt=post('itemsTxt');
        $payPrice=getPayPrice($username,$shopId,$itemsTxt);
        if($payPrice>=0){
            $obj = new stdClass();
            $obj->code="0";
            $obj->payPrice=$payPrice;
            $obj->msg=urlencode("获取成功");//中文urlencode一下
            echo urldecode(json_encode($obj));
        }else{
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg=urlencode("获取失败");//中文urlencode一下
            echo urldecode(json_encode($obj));
        }
    }
    //订餐系统前提用户中心下单逻辑处理
    public function commit_Order()
    {
        //验证是否登录后
        $ss=getCookies('userId');
        if(!isset($ss)){
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg="api请求失败";
            echo urldecode(json_encode($obj));
            return;
        }

        $arr['username']=post('username');
        $arr['items']=post('items');
        $arr['shopId']=post('shopId');
        $arr['shopName']=post('shopName');
        $arr['shopPhone']=post('shopPhone');
        $arr['price']=getPayPrice($arr['username'],$arr['shopId'],$arr['items']);
        $arr['orderAddress']=post('orderAddress');
        $arr['orderName']=post('name');
        $arr['orderPhone']=post('pn');
        $arr['orderArrivedTime']=post('orderArrivedTime');
        $arr['orderRemark']=trim(post('orderRemark'));
        $arr['orderTime']=time();
        $arr['pay']=0;
        $arr['paymethod']=post('paymethod');
        $arr['received']=0;
        $arr['orderId']=getMilliSeconds();


////查看
//// $row=fetchOne();
       $mysql=MySqlPDOD::GetObj();
        if($mysql->InsertOne("dfz_order",$arr,false)){
            //减积分
            $data['username']=$arr['username'];
            $data['orderId']=$arr['orderId'];
            $data['place']=$arr['price'];
            $data['orderTime']=$arr['orderTime'];
            $jifen=minusJifen($arr['username']);

            $data['time']=date("Y-m-d H:i:s",$arr['orderTime']);
            $data['user']=getSessions('userId')."(用户)";
            $data['action']="订单号".$data['orderId']."原因下单成功，扣除积分".intval($jifen['jifenb'])."个".",扣除后积分".$jifen['jifen']."个";
            $data['status']="1";
            $log=new Log($data);
            $log->generateLog("homejifenrecharge");

            $obj = new stdClass();
            $obj->data=$data;
            $obj->code="0";
            echo urldecode(json_encode($obj));
            return;
        }

    }
    //订餐系统前台用户自动取消逻辑处理
    public function order_Cancel()
    {
        //验证是否登录后
        $ss=getSessions('userId');
        if(!isset($ss)){
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg="请求不合法";
            echo urldecode(json_encode($obj));
            return;
        }

        $arr['username']=post('username');
        $arr['orderId']=post('orderId');

        if(!isset($arr['username'])||!isset($arr['orderId'])){
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg=urlencode("参数为空");//中文urlencode一下
            echo urldecode(json_encode($obj));
            return;
        }

        $where="username='".$arr['username']."' and orderId='".$arr['orderId']."' and pay=0 and received=0"; //用户名；订单号；未支付;未被接单

        $arr2['received']=5;//5代表用户取消
        $arr2['receivedTime']=time();//处理时间

//是否已接
        $sql="select * from dfz_order where ".$where;
        $mysql=MySqlPDOD::GetObj();
        $row=$mysql->bindSql($sql);
        if($row=="对不起没有数据"||$row[0]==""){
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg=urlencode("无法取消");//中文urlencode一下
            echo urldecode(json_encode($obj));
            return;
        }

        if($row[0]['pay']==1)
        {
            $data=$mysql->SelectOne("dfz_userinfo","balance","username='".$row[0]['username']."'");
            $balance=floatval($data['balance'])+abs(floatval($row[0]['price']));
            $ar['balance']=$balance;
            if($mysql->Update("dfz_userinfo",$ar,"username='".$row[0]['username']."'"))
            {
                $data['time']=date("Y-m-d H:i:s",$arr['receivedTime']);
                $data['user']=getSessions('userId')."(用户)";
                $data['action']="订单号:".$row[0]['orderId'].",交易失败,原因用户取消订单,退还用户".abs(floatval($row[0]['price']))."元".",退还后用户余额".$balance."元";
                $data['status']="1";
                $log=new Log($data);
                $log->generateLog("homeBalrecharge");
            }
        }
        if($mysql->Update("dfz_order",$arr2,$where)){
            $obj = new stdClass();
            $obj->code="0";
            $obj->msg=urlencode("取消成功");//中文urlencode一下
            echo urldecode(json_encode($obj));
        }else{
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg=urlencode("取消失败");//中文urlencode一下
            echo urldecode(json_encode($obj));
        }

    }
    //订餐系统用户催单逻辑处理
    public function urge_Order()
    {
        //验证是否登录后
        $ss=getSessions('userId');
        if(!isset($ss)){
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg="api请求不合法";
            echo urldecode(json_encode($obj));
            return;
        }

        $arr['username']=post('username');
        $arr['orderId']=post('orderId');



       if(!isset($arr['username'])||!isset($arr['orderId'])){
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg=urlencode("参数为空");//中文urlencode一下
            echo urldecode(json_encode($obj));
            return;
        }

        $where="username='".$arr['username']."' and orderId='".$arr['orderId']."'"; //用户名；订单号

        $sql="select * from dfz_order where ".$where;

        $mysql=MySqlPDOD::GetObj();

        $row=$mysql->bindSql($sql);

        if($row!="对不起没有数据"||$row[0]!=""){
            $urgeCount=$row[0]['urgeCount']+1; //催单次数加1
            if($urgeCount<=10)
            {
                $arr['urgeCount']=$urgeCount;
                if($mysql->Update("dfz_order",$arr,$where)){
                    $obj = new stdClass();
                    $obj->code="0";
                    $obj->msg=urlencode("催单成功");//
                    echo urldecode(json_encode($obj));
                }else{
                    $obj = new stdClass();
                    $obj->code="1";
                    $obj->msg=urlencode("催单失败");//
                    echo urldecode(json_encode($obj));
                }
            }else{
                $obj = new stdClass();
                $obj->code="1";
                $obj->msg=urlencode("催单失败,次数上限");//
                echo urldecode(json_encode($obj));
            }

        }else{
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg=urlencode("订单不存在");//
            echo urldecode(json_encode($obj));
        }
    }
    //订餐系统前台用户余额支付逻辑处理
    public function money_pay()
    {    $mysql=MySqlPDOD::GetObj();
         if(isGet())
         {
                $username=getCookies("userId");
                $where="username=".$username;
                return $mysql->SelectOne("dfz_userinfo","balance",$where);

         }else if(isPost())
         {

             $useraname=post("username");
             $orderid=post("orderId");
             $price=post("price");
             $ordertime=post('orderTime');
             $where=" username='".$useraname."' and orderId='".$orderid."' and price='".$price."' and orderTime='".$ordertime."'";
             $data=$mysql->SelectOne("dfz_order","*",$where);

             if($data=="对不起没有数据"||$data=="")
             {
                 $obj = new stdClass();
                 $obj->code="0";
                 $obj->msg=urlencode("对不起支付参数有误");//
                 echo urldecode(json_encode($obj));

             }else{
                 $arr=$mysql->SelectOne("dfz_userinfo","balance","username=".$useraname);

                 $balance=floatval($arr['balance'])-abs(floatval($price));

                 if($balance<0)
                 {
                     $obj = new stdClass();
                     $obj->code="0";
                     $obj->msg=urlencode("对不起余额不足,请充值");//
                     echo urldecode(json_encode($obj));
                 }else{
                     $ar['balance']=$balance;

                     if($res=$mysql->Update("dfz_userinfo",$ar,"username='".$useraname."'"))
                     {
                              $da['pay']=1;
                              $da['payTime']=time();
                              if($mysql->Update("dfz_order",$da,$where))
                              {
                                  $data['time']=date("Y-m-d H:i:s");
                                  $data['user']=getSessions('userId')."(用户)";
                                  $data['action']="订单号:".$orderid.",下单成功,扣款余额".abs(floatval($price))."元".",扣款后用户余额".$balance."元";
                                  $data['status']="1";
                                  $log=new Log($data);
                                  $log->generateLog("homeBalrecharge");

                                  $obj = new stdClass();
                                  $obj->code="1";
                                  $obj->msg=urlencode("支付成功");//
                                  echo urldecode(json_encode($obj));
                              }
                     }

                 }
             }

         }
    }
    //订餐系统前台支付宝支付逻辑处理
    public function alipay()
    {

                $mysql=MySqlPDOD::GetObj();

                $useraname=get("username");
                $orderid=get("orderId");
                $price=get("price");
                $ordertime=get('orderTime');
                if($useraname&&$orderid&&$price&$ordertime)
                {
                    $where=" username='".$useraname."' and orderId='".$orderid."' and price='".$price."' and orderTime='".$ordertime."'";
                    $data[]=$mysql->SelectOne("dfz_order","*",$where);

                    if($data==""||$data[0]=="")
                    {
                        return 0;//支付参数错误
                    }
                    $str="订餐系统用户购物-"."<br>";
                    foreach($data as $key=>$val)
                    {

                        $arr['items']=json_decode($val['items'],true);
                    }
                    foreach($arr['items'] as $key=>$val)
                    {
                        $str.=$val['name']."<br>";
                    }
                }

                if($orderid=="")
                {

                    $orderid="1000";

                    $str="订餐系统用户充值-用户名".getCookies('userId');

                    if(floatval($price)<0.01)
                    {
                           return 2;
                    }

                }

                    $configs=require_once(APP_PATH."/SDK/7ypay.config.php");
                    require_once(APP_PATH."/SDK/lib/7ypay_submit.class.php");

                    /**************************请求参数**************************/

                    $notify_url = $configs['notify_url'];
                    //需http://格式的完整路径，不能加?id=123这类自定义参数

                    //页面跳转同步通知页面路径
                    $return_url = $configs['return_url'];
                    //需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/

                    //商户订单号
                    $out_trade_no = $_POST['WIDout_trade_no']=$orderid;
                    //商户网站订单系统中唯一订单号，必填

                   
                    //支付方式
                    $type = $_POST['type']=get('a');
                    //商品名称
                    $name = $_POST['WIDsubject']=$str;
                    //付款金额
                    $money = $_POST['WIDtotal_fee']=$price;
                    //站点名称
                    $sitename = $configs['sitename'];
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



    }
    //订餐系统前台异步通知接口逻辑处理
    public function notify_url()
    {
       //计算得出通知验证结果
        require_once(APP_PATH."/SDK/7ypay.config.php");
        require_once(APP_PATH."/SDK/lib/7ypay_notify.class.php");
        $alipayNotify = new AlipayNotify($alipay_config);
        $verify_result = $alipayNotify->verifyNotify();

        if($verify_result) {//验证成功
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //请在这里加上商户的业务逻辑程序代


            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——

            //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表

            //商户订单号

            $out_trade_no = $_GET['out_trade_no'];

            //彩虹易支付交易号

            $trade_no = $_GET['trade_no'];

            //交易状态
            $trade_status = $_GET['trade_status'];

            //支付方式
            $type = $_GET['type'];


            if ($_GET['trade_status'] == 'TRADE_SUCCESS') {
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //请务必判断请求时的total_fee、seller_id与通知时获取的total_fee、seller_id为一致的
                //如果有做过处理，不执行商户的业务程序

                //注意：
                //付款完成后，支付宝系统发送该交易状态通知

            }

            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
             
            echo "success";		//请不要修改或删除

            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        }
        else {
            //验证失败
            echo "fail";
        }
    }
    //订餐系统前台跳转返回逻辑处理
    public function return_url()
    {
        //计算得出通知验证结果
        require_once(APP_PATH."/SDK/7ypay.config.php");
        require_once(APP_PATH."/SDK/lib/7ypay_notify.class.php");

        $alipayNotify = new AlipayNotify($alipay_config);
        $verify_result = $alipayNotify->verifyReturn();

        if($verify_result) {//验证成功
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //请在这里加上商户的业务逻辑程序代码

            //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
            //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

            //商户订单号

            $out_trade_no = $_GET['out_trade_no'];

            //支付宝交易号

            $trade_no = $_GET['trade_no'];

            //交易状态
            $trade_status = $_GET['trade_status'];


            //支付方式
            $type = $_GET['type'];


            if($_GET['trade_status'] == 'TRADE_SUCCESS') {
                //判断该笔订单是否在商户网站中已经做过处理
                //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
                //如果有做过处理，不执行商户的业务程序
                $mysql=MySqlPDOD::GetObj();

                if($out_trade_no=="1000")
                {
                      $balance=$mysql->SelectOne("dfz_userinfo","balance","username=".getCookies('userId'));

                      $data['balance']=floatval($balance['balance'])+abs(floatval($_GET['money']));

                      if($mysql->Update("dfz_userinfo",$data,"username=".getCookies('userId')))
                      {
                          $data['time']=date("Y-m-d H:i:s");
                          $data['user']=getSessions('userId')."(用户)";
                          $data['action']="订单号:".$out_trade_no.",通过支付宝充值余额成功,支付宝交易号".$trade_no."充值余额".$_GET['money'];
                          $data['status']="1";
                          $log=new Log($data);
                          $log->generateLog("homeBalrecharge");
                          return 3;//余额充值成功
                      }else{
                          return 2;//余额充值失败
                      }

                }else{


                    $data=$mysql->SelectOne("dfz_order","username","orderId=".$out_trade_no);
                    $da['pay']=1;
                    $da['payTime']=time();
                    if($mysql->Update("dfz_order",$da,"orderId=".$out_trade_no))
                    {
                        $data['time']=date("Y-m-d H:i:s");
                        $data['user']=getSessions('userId')."(用户)";
                        $data['action']="订单号:".$out_trade_no.",通过支付宝下单成功,支付宝交易号".$trade_no."下单余额".$_GET['money'];
                        $data['status']="1";
                        $log=new Log($data);
                        $log->generateLog("homeBalrecharge");

                    }
                }


            }
            else {
                return 2;//下单支付失败
            }

            return 1;

            //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——

            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        }
        else {
            //验证失败
            //如要调试，请看alipay_notify.php页面的verifyReturn函数
            return 0;//支付参数错误
        }
    }
}