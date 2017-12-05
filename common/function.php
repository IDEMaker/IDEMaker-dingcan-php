<?php
//工具函数
function parentsson($data,$pid=0)
{      $arr=array();
    foreach($data as $k=>$v)
    {
        if($v['parent_id']==$pid)
        {
            $arr[]=$v;
        }
    }
    return $arr;
}
//生成唯一订单或者商品编号
function getMilliSeconds() {
    list($t1, $t2) = explode(' ', microtime());
    return (float)sprintf('%.0f',(floatval($t1)+floatval($t2))*1000);
}
//得到当天的准确时间段
function getDate01($time){
    if(isToday($time)){
        return date('H:i',$time);
    }else{
        return date('Y-m-d H:i',$time);
    }

}

//前台订单判断是否当天时间段
function isToday($time) {
    $a_date = date('Y-m-d',$time);
    $b_date = date('Y-m-d',time());
    if($a_date==$b_date){
        return true;
    }else{
        return false;
    }
}
//前台用户计算原价
function getOriginalPrice($username,$shopId,$itemsTxt){

    $payPrice=0;
    if($username&&$shopId&&$itemsTxt){
        $arrayObj=json_decode($itemsTxt,true);
        $count=count($arrayObj);

        for($i=0;$i<$count;$i++){
            $itemId= strval($arrayObj[$i]['itemId']);

            $coun=$arrayObj[$i]['count'];

            $sql="select priceB from dfz_pro where shopId='{$shopId}' and pSn='{$itemId}' ";
            $mysql=MySqlPDOD::GetObj();
            $row=$mysql->bindSql($sql);

            if($row!="对不起没有数据"){
                $perPrice=$row[0]['priceb'];
                $payPrice=$payPrice+$perPrice*$coun;
            }
        }

    }

    return $payPrice;

}

//前台用户计算实付价格
function getPayPrice($username,$shopId,$itemsTxt){
    if($username&&$shopId&&$itemsTxt){

        //原价
        $payPrice=getOriginalPrice($username,$shopId,$itemsTxt);

        //计算积分抵现
        $disCount=0;
        $jifen=getJifen($username);
        if($jifen&&$jifen>0){
            $disCount=floor($jifen/100);//取整
        }

        //减去积分优惠
        $payPrice-=$disCount;
        if($payPrice<=0){
            $payPrice=0.01;
        }

        return $payPrice;
    }
}
//得到用户积分
function getJifen($username){
    if($username){
        $sql="select jifen from dfz_userinfo where username='$username'";
        $mysql=MySqlPDOD::GetObj();
        $row=$mysql->bindSql($sql);
        if($row!="对不起没有数据"||$row[0]==""){
            $jifen=$row[0]['jifen'];
            return $jifen;
        }else{
            return 0;
        }
    }
    return 0;
}
//前台计算用户积分优惠价格
function minusJifen($username){
    if($username){
        $allJifen=getJifen($username); //我的全部积分
        $jifenB=floor($allJifen/100)*100; //取整积分

        $leftJifen=$allJifen-$jifenB;
        if($leftJifen<=0)$leftJifen=0;
        $arr['jifen']=$leftJifen;
        $mysql=MySqlPDOD::GetObj();
        $mysql->Update("dfz_userinfo",$arr,"username='{$username}'");
        $arr['jifenb']=$jifenB;
        return $arr;
    }
}
//超时订单自动处理为取消状态
function autocancel($username,$orderId)
{
    $where="username='".$username."' and orderId='".$orderId."' and pay=0 and received=0"; //用户名；订单号；未支付;未被接单

    $arr2['received']=4;//5代表用户取消
    $arr2['receivedTime']=time();//处理时间

    $sql="select * from dfz_order where ".$where;

    $mysql=MySqlPDOD::GetObj();

    $row=$mysql->bindSql($sql);

    if($row!="对不起没有数据"&&$row[0]['received']!=4){
        $mysql->Update("dfz_order",$arr2,$where);
    }
}
/**
 * 两后台公共接单逻辑处理
 */
function takeOrder($id,$isshop){
    $mysql=MySqlPDOD::GetObj();
    if($isshop==true)
    {
        $shopid=getSessions("shopmerId");
    }else{
        $shopid=getSessions("shopId");
    }
    //查询是否当前商家订单反之非法操作
    $arr=$mysql->SelectOne("dfz_order","shopId","orderId=".$id);

    if($arr['shopId']!=$shopid)
    {
         return 3;
    }
    $where="orderId=".$id." and received=0";
    $arr['received']="1";//状态1商家接单
    $arr['receivedTime']=time(); //状态处理时间
    //先检索
    $sql="select id from dfz_order where ".$where;
    $row=$mysql->bindSql($sql);
    if($row=="对不起没有数据"||$row[0]==""){
        $mes="2";//订单已处理过
        return $mes;
    }
    if($mysql->Update("dfz_order", $arr,$where)){
        $mes="0";//接单成功
    }else{
        $mes="1";//接单失败
    }
    return $mes;
}

/**
 * 两后台公共取消订单逻辑处理
 */
function cancelOrder($id,$received,$isshop){
    $mysql=MySqlPDOD::GetObj();
    if($isshop==true)
    {
        $shopid=getSessions("shopmerId");
    }else{
        $shopid=getSessions("shopId");
    }
    //查询是否当前商家订单反之非法操作
    $arr=$mysql->SelectOne("dfz_order","shopId","orderId=".$id);

    if($arr['shopId']!=$shopid)
    {
        return 3;
    }
    $where="orderId=".$id;
    $arr['received']=$received;
    $arr['receivedTime']=time();
    //先检索
    $sql="select id,pay,price,username,orderId from dfz_order where orderId=".$id." and received=0";
    $row=$mysql->bindSql($sql);

    if($row=="对不起没有数据"||$row[0]==""){
        $mes="2";//订单已处理
        return $mes;
    }
    //取消订单时判断当前下单用户是否支付，如支付退还用户余额，并记录用户加款或扣款日志
    if($row[0]['pay']==1)
    {
          $data=$mysql->SelectOne("dfz_userinfo","balance","username='".$row[0]['username']."'");
          $balance=floatval($data['balance'])+abs(floatval($row[0]['price']));
          $ar['balance']=$balance;
          if($mysql->Update("dfz_userinfo",$ar,"username='".$row[0]['username']."'"))
          {
              //写入日志
              $data['time']=date("Y-m-d H:i:s",$arr['receivedTime']);
              $data['user']="$shopid"."(商家)";
              $data['action']="订单号:".$row[0]['orderid'].",处理失败,原因商家忙碌,取消订单,退还用户".abs(floatval($row[0]['price']))."元".",退还后用户余额".$balance."元";
              $data['status']="1";
              $log=new Log($data);
              $log->generateLog("homeBalrecharge");
          }
    }

    if($mysql->Update("dfz_order", $arr,$where)){
        $mes="0";//订单已取消
    }else{
        $mes="1";//取消失败
    }
    return $mes;
}
/*
 *  两后台完成处理订单逻辑处理
 */
function handOrder($id,$isshop){
    $mysql=MySqlPDOD::GetObj();
    if($isshop==true)
    {
        $shopid=getSessions("shopmerId");
    }else{
        $shopid=getSessions("shopId");
    }
    //查询是否当前商家订单反之非法操作
    $arr=$mysql->SelectOne("dfz_order","shopId","orderId=".$id);

    if($arr['shopId']!=$shopid)
    {
        return 3;
    }
    $where="orderId=".$id." and received=1";
    $arr['received']="3";
    $arr['receivedTime']=time();
    //先检索
    $sql="select id,price,orderId from dfz_order where ".$where;
    $row=$mysql->bindSql($sql);
    if($row=="对不起没有数据"||$row[0]==""){
        $mes="2";//订单已处理过
        return $mes;
    }


    if($mysql->Update("dfz_order", $arr,$where)){
        $data=$mysql->SelectOne("dfz_shop","balance","shopId='".$shopid."'");
        $balance=floatval($data['balance'])+abs(floatval($row[0]['price']));
        $ar['balance']=$balance;

        if($mysql->Update("dfz_shop",$ar,"shopId='".$shopid."'"))
        {   //完成订单时,检查订单商家给商家账户余额加款，并写入日志
            $data['time']=date("Y-m-d H:i:s",$arr['receivedTime']);
            $data['user']="$shopid"."(商家)";
            $data['action']="订单号:".$row[0]['orderid'].",处理完成,加款".abs(floatval($row[0]['price']))."元".",加款后余额".$balance."元";
            $data['status']="1";
            $log=new Log($data);
            $log->generateLog("adminmerBalrecharge");
        }
        $mes="0";//成功
    }else{
        $mes="1";//失败
    }
    return $mes;
}
/*
 * 两后台未完成订单逻辑处理
 */
function handCancelOrder($id,$received,$isshop){
    $mysql=MySqlPDOD::GetObj();
    if($isshop==true)
    {
        $shopid=getSessions("shopmerId");
    }else{
        $shopid=getSessions("shopId");
    }
    //查询是否当前商家订单反之非法操作
    $arr=$mysql->SelectOne("dfz_order","shopId","orderId=".$id);

    if($arr['shopId']!=$shopid)
    {
        return 3;
    }
    $where="orderId=".$id;
    $arr['received']=$received;
    $arr['receivedTime']=time();
    //先检索
    $sql="select id,pay,price,username,orderId from dfz_order where orderId=".$id." and received=1";
    $row=$mysql->bindSql($sql);

    if($row=="对不起没有数据"||$row[0]==""){
        $mes="2";//订单已处理
        return $mes;
    }
    //处理未完成订单时判断当前下单用户是否支付，如支付退还用户余额，并记录用户加款或扣款日志
    if($row[0]['pay']==1)
    {
        $data=$mysql->SelectOne("dfz_userinfo","balance","username='".$row[0]['username']."'");
        $balance=floatval($data['balance'])+abs(floatval($row[0]['price']));
        $ar['balance']=$balance;
        if($mysql->Update("dfz_userinfo",$ar,"username='".$row[0]['username']."'"))
        {
            $data['time']=date("Y-m-d H:i:s",$arr['receivedTime']);
            $data['user']="$shopid"."(商家)";
            $data['action']="订单号:".$row[0]['orderid'].",处理失败,原因买卖双方达成一致,取消订单,退还用户".abs(floatval($row[0]['price']))."元".",退还后用户余额".$balance."元";
            $data['status']="1";
            $log=new Log($data);
            $log->generateLog("homeBalrecharge");
        }
    }

    if($mysql->Update("dfz_order", $arr,$where)){
        $mes="0";//订单已取消
    }else{
        $mes="1";//取消失败
    }
    return $mes;
}
function sendEmail($useremail)
{
    $data=require_once APP_PATH.'/configs/config.php';

    $mail = new PHPMailer;

    $mail->SMTPDebug = 1;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $data['smtpHost'];  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $data['smtpAccount'];                 // SMTP username
    $mail->Password = $data['smtpPassword'];                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $data['smtpPort'];
    // TCP port to connect to

    $mail->setFrom($data['smtpSendEmail'], $data['smtpSendName']);

    $mail->addAddress($useremail);               // Name is optional

    $mail->isHTML(false);                                  // Set email format to HTML

    $mail->Subject = getCookies('userId').'-用户您好,订餐系统提醒您下单成功';
    $mail->Body    = getCookies('userId')."-用户你好,您的订单已提交,请及时关注您的订餐时间,代我们发货人员发货";
    $mail->AltBody = getCookies('userId').'-用户您好,订餐系统提醒您下单成功';
    $mail->send();

}
//订餐系统前台获取配置请求
function getConfig($configname)
{
       $data=require APP_PCOFDP."/config.php";
       $key=array_keys($data);
       for($i=0;$i<count($data);$i++)
       {
             if($key[$i]==$configname)
             {
                  return $data[$configname];
             }
       }
}

