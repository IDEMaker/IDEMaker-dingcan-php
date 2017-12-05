<?php
use common\My_controller;
class Loginc extends My_controller
{     //订餐系统前台登录请求
      public function check_in()
      {
          $this->model->loadmodel();
      }
      //订餐系统前台验证登录请求
      public function check_login()
      {
            $this->model->loadmodel();
      }
      //订餐系统前台解码请求
      public function decode_cookie()
      {
            echo $this->model->loadmodel();
      }
      //订餐系统前台退出请求
      public function log_out()
      {
            $this->model->loadmodel();
      }
}