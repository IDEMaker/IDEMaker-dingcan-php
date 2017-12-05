<?php
use LIB\models;
class Shopcm extends models{
    public function index()
    {

    }
    //订餐系统前台获取当前所有店铺逻辑处理
    public function load_place()
    {
        $mysql=MySqlPDOD::GetObj();
        $rows=$mysql->bindSql($sql="select shopId,shopName from dfz_shop");

        if($rows){
            $obj = new stdClass();

            $obj->code="0";
            $obj->msg=json_encode($rows);

            echo json_encode($obj);
        }
    }
    //订餐系统前台获取当前城市逻辑处理
    public function current_business()
    {
             $cityid=get("cityId");
             $mysql=MySqlPDOD::GetObj();
             $data=$mysql->SelectAll("dfz_shop","shopId,shopName","cityId=".$cityid,"1000");
             if($data=="对不起没有数据")
             {
                  $data=0;
                  echo json_encode($data);
             }else{
                 echo json_encode($data);
             }

    }
    //订餐系统前台获取当前商铺的详细信息逻辑处理
    public function loadshop_info()
    {

        $arr['shopId'] = post("shopId");

        $mysql = MySqlPDOD::GetObj();

        if ($arr['shopId']) {
            $sql = "select * from dfz_shop where shopId='" . $arr['shopId'] . "'";

            $row = $mysql->bindSql($sql);
            if ($row == "对不起没有数据") {

                $obj = new stdClass();
                $obj->code = "1";
                $obj->msg = urlencode("没有信息");//中文urlencode一下
                echo urldecode(json_encode($obj));
            }
            if ($row) {
                $obj = new stdClass();
                $obj->code = "0";
                $obj->msg = urlencode("获取成功");//中文urlencode一下
                $obj->data = $row[0];
                echo urldecode(json_encode($obj));
            } else {
                $obj = new stdClass();
                $obj->code = "1";
                $obj->msg = urlencode("没有信息");//中文urlencode一下
                echo urldecode(json_encode($obj));
            }

        }
    }
}