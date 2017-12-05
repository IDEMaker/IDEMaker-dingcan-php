<?php
use common\My_controller;
class Aboutc extends My_controller
{       //订餐系统前台about请求
        public function about()
        {
            $this->SmDisplay("about");
        }
        //订餐系统前台投诉建议请求
        public function comSu()
        {
             $this->model->loadmodel();
        }
        //订餐系统前台商家入驻申请
        public function shopApply()
        {
            $this->model->loadmodel();
        }
}