<?php
use LIB\models;
class Accountcm extends models{
      //订餐系统商家后台余额查询逻辑处理
     public function myBalance()
     {
           $username=getCookies("adminmerName");
           $mysql=MySqlPDOD::GetObj();
           return $mysql->SelectOne("dfz_shop","balance,freezeBalance","adminName='".$username."'");

     }
     //订餐系统商家后台余额提现申请逻辑处理
     public function applyBalance()
     {
         $username=getCookies("adminmerName");
         $mysql=MySqlPDOD::GetObj();
         $data=$mysql->SelectOne("dfz_shop","balance,freezeBalance","adminName='".$username."'");
         $balance=floatval($data['balance'])-abs(floatval(post('balance')));
         if(empty(abs(floatval(post('balance'))))||empty(post("withAccount")))
         {
             return 2;//余额或者支付宝不能为空
         }
         if(abs(floatval(post('balance')))<100)
         {
             return 3;//余额不能小于100
         }
         if($balance<0||floatval(post('balance'))>floatval($data['balance']))
         {
             return 0;//余额不足
         }else{
             //修改余额
             $data['balance']=$balance;
             $data['freezeBalance']=floatval($data['freezeBalance'])+abs(floatval(post('balance')));

            if($mysql->Update("dfz_shop",$data,"adminName='".$username."'"))
            {
                //写入日志
                $data['time']=date("Y-m-d H:i:s");
                $data['user']="$username";
                $data['action']="支付宝账户为".post("withAccount")."用户,申请提现".abs(floatval(post('balance')))."元".",提现后余额为".$balance."元";
                $data['status']="0";
                $log=new Log($data);
                $log->generateLog("adminmerBal");
                //提现记录入库
                $arr['adminName']=$username;
                $arr['shopId']=getSessions("shopmerId");
                $arr['balance']=abs(floatval(post('balance')));
                $arr['withBalance']=$balance;
                $arr['withAccount']=post("withAccount");
                $arr['status']=0;
                $arr['createTime']=time();

                $mysql->InsertOne("dfz_shopinfo",$arr);
            }

             return 1;//提现成功
         }

     }
     //订餐系统商家后台提现申请记录逻辑处理
     public function mywithBalance()
     {
         $username=getCookies("adminmerName");
         $mysql=MySqlPDOD::GetObj();
         $Sqll="SELECT `shopId`,`adminName`,`balance`,`withBalance`,`status`,`withAccount`,FROM_UNIXTIME(createTime,'%Y-%m-%d %H:%i:%S') as createTime FROM  dfz_shopinfo ";
         $sqlll="SELECT count(*) as num FROM  dfz_shopinfo ";
         //条件为空时
         if(empty(get('search')))
         {
             $where="`adminName`='".$username."'"." order by createtime desc";
         }else{
             $search=get('search');
             //匹配是否包含年
             preg_match("#(.*)年#",$search,$res);
             if(empty($res[1]))
             {
                 $where="`adminName`='".$username."'"." and withAccount ='$search' or balance='$search' order by createtime desc";
                 //审核状态
                 if(get('search')=="待审核")
                 {
                     $where="`adminName`='".$username."' and status=0"." order by createtime desc";
                 }
                 if(get('search')=="已审核")
                 {
                     $where="`adminName`='".$username."' and status=1"." order by createtime desc";
                 }
             }else{
                 //年份查询当前的日期
                 $time=$res[1];
                 //最大日期 当前日期加+1 等于 加1年  如 2017+1=2018
                 $start=strtotime(($time+1)."-01-01");
                 $end=strtotime($time."-01-01");
                 //年份搜索条件
                 $where="`adminName`='".$username."' and (createtime >= $end and  createtime <=$start )"." order by createtime desc";
             }

         }
         $data=page("dfz_shop",10,empty(get('p'))?1:get('p'),$where,$config="",$issql=true,$Sqll,$sqlll);
         $balance=0;
         //循环整理提现余额
         if(!empty($data['data']))
         {
             foreach($data['data'] as $key=>$val)
             {
                 if($val['status']==1)
                 {
                     $balance+=$val['balance'];
                 }
             }
             $data['balance']=$balance;
         }

         if($data=="对不起没有数据")
         {
              $data=0;
         }
         return $data;

     }
}