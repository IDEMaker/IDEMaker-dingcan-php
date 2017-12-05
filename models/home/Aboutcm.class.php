<?php
use LIB\models;
class Aboutcm extends models{
    //订餐系统后台投诉建议逻辑处理
     public function comSu()
     {
         $mysql=MySqlPDOD::GetObj();

         $ss=getSessions('userId');
         if(!isset($ss)){
             $obj = new stdClass();
             $obj->code="1";
             $obj->msg="请求失败";
             echo urldecode(json_encode($obj));
             return;
         }


         $arr=post();
//合法验证
         if(!isset($arr['username'])||!isset($arr['advice'])){
             $obj = new stdClass();
             $obj->code="1";
             $obj->msg=urlencode("不能为空");//中文urlencode一下
             echo urldecode(json_encode($obj));
         }
         $arr['time']=time();
//开始插入
         if($mysql->InsertOne("dfz_advice", $arr)){
             $obj = new stdClass();
             $obj->code="0";
             $obj->msg=urlencode("提交成功");//中文urlencode一下
             echo urldecode(json_encode($obj));
         }else{
             $obj = new stdClass();
             $obj->code="1";
             $obj->msg=urlencode("提交失败");//中文urlencode一下
             echo urldecode(json_encode($obj));
         }
     }
     //订餐系统前台商家入驻申请逻辑处理
    public function shopApply()
    {
        $mysql=MySqlPDOD::GetObj();

        $ss=getSessions('userId');
        if(!isset($ss)){
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg="请求失败";
            echo urldecode(json_encode($obj));
            return;
        }

        if($mysql->SelectOne("dfz_hotel","username","username=".post('username')))
        {
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg=urlencode("对不起,您已经申请过哦");//中文urlencode一下
            echo urldecode(json_encode($obj));
            return;
        }

        $arr=post();
//合法验证
        if(!isset($arr['hotelName'])){
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg=urlencode("不能为空");//中文urlencode一下
            echo urldecode(json_encode($obj));
        }
        $arr['time']=time();
//开始插入
        if($mysql->InsertOne("dfz_hotel", $arr)){
            $obj = new stdClass();
            $obj->code="0";
            $obj->msg=urlencode("提交成功");//中文urlencode一下
            echo urldecode(json_encode($obj));
        }else{
            $obj = new stdClass();
            $obj->code="1";
            $obj->msg=urlencode("提交失败");//中文urlencode一下
            echo urldecode(json_encode($obj));
        }
    }
}