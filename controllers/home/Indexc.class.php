<?php
use common\My_controller;
class Indexc extends My_controller
{     //订餐系统前台请求
       public function index()
      {
           $ip=$this->model->loadmodel();
           $this->SmAssign("newip",$ip);
           $this->SmDisplay();
      }
      //订餐系统前台获取当前城市请求
      public function city()
      {
           $this->model->loadmodel();
      }
}