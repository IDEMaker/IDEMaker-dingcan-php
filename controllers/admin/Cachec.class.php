<?php
use common\My_controller;
class Cachec extends My_controller{
    //订餐系统后台缓存请求请求
    public function cahceClear()
    {
         if(isGet())
         {
             $this->model->loadmodel();

             $this->SmDisplay("cacheclear",true,"Cachec/cahceClear");

         }else if(isPost())
         {
                if($this->model->loadmodel())
                {
                    $this->alert("清除成功","Cachec/cahceClear");
                }else{
                    $this->alert("清除失败","Cachec/cahceClear");
                }
         }

    }
}