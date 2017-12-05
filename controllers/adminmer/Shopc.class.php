<?php
use common\My_controller;
use LIB\models;
class Shopc extends My_controller
{     //订餐系统后台商家店铺管理请求
      public function index()
      {
          if(isGet())
          {
              $model=new models();
              $data=$model->loadmodel();
              $this->SmAssign("data",$data['data']);
              $this->SmAssign("city",$data['city']['city']);
              $this->SmDisplay("index",true,"Shopc/index");
          }else if(isPost())
          {
               $model=new models();
              if($model->loadmodel())
              {
                  $this->success("Shopc/index");

              }else{
                  $this->alert("修改失败，请重新操作","Shopc/index");
              }
          }

      }
}