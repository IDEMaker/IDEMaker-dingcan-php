<?php
use common\My_controller;
class Shopc extends My_controller
{   //订餐系统前台店铺请求
     public function index()
     {     $shopid=get("shopId");
           $this->SmDisplay("shop/".$shopid);
     }
     //订餐系统前台获取所有店铺请求
     public function load_place()
     {
         $this->model->loadmodel();
     }
     //订餐系统前台获取当前的城市请求
     public function current_business()
     {
         $this->model->loadmodel();
     }
     //订餐系统前台获取当前店铺详细信息请求
    public function loadshop_info()
    {
          $this->model->loadmodel();
    }
}