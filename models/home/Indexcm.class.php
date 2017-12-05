<?php
use LIB\models;
class Indexcm extends models{
    //订餐系统前台获取ip逻辑处理
    public function index()
    {   if(empty(get("ip")))
        {
            $ip=getIp();

            $newip="";

            switch($ip)
            {
                case "::1":$newip="106.121.56.17";break;

                case "127.0.0.1":$newip="106.121.56.17";break;
            }
        }else{
         $newip=get("ip");
     }

        return $newip;
    }
    //订餐系统获取当前城市 店铺 逻辑处理
    public function city()
    {
          $city=get("city");

          $city=explode(",",$city);

          $mysql=MySqlPDOD::GetObj();

          $data['city']=$mysql->SelectAll("dfz_city","id,city","province='".$city[1]."'",7);
          if($data['city']=="对不起没有数据")
          {

              echo 0;die;
          }else{

              krsort($data);
              $data['shop']=$mysql->SelectAll("dfz_shop","shopId,shopName","cityId=".$data['city'][0]['id'],"1000");
              if($data['shop']=="对不起没有数据")
              {

                  echo 0;die;
              }
              echo json_encode($data);
          }


    }
}