<?php
use common\My_controller;
class Systemc extends My_controller{
    //订餐系统后台手机验证码配置请求
    public function phoneVali()
    {
        if(isGet()){
            $data=$this->model->loadmodel();
            $this->SmAssign("data",$data);
            $this->SmDisplay("phonevali",true,"Systemc/phoneVali");
        }else if(isPost())
        {
            $this->model->loadmodel();
            $this->success("Systemc/phoneVali");
        }
    }
    //订餐系统支付宝配置请求
    public function alipayVali()
    {
         if(isGet())
         {
             $data=$this->model->loadmodel();

             $this->SmAssign("data",$data);

             $this->SmDisplay("alipayvali",true,"Systemc/alipayVali");

         }else if(isPost())
         {
             $this->model->loadmodel();

             $this->success("Systemc/alipayVali");
         }
    }
    //订餐系统后台邮箱配置请求
    public function emailVali()
    {
        if(isGet())
        {
            $data=$this->model->loadmodel();

            $this->SmAssign("data",$data);

            $this->SmDisplay("emailvali",true,"Systemc/emailVali");

        }else if(isPost())
        {
            $this->model->loadmodel();

            $this->success("Systemc/emailVali");
        }
    }
    //订餐系统后台系统配置请求
    public function systemVali()
    {
        if(isGet())
        {
            $data=$this->model->loadmodel();

            $this->SmAssign("data",$data);

            $this->SmDisplay("systemvali",true,"Systemc/systemVali");

        }else if(isPost())
        {
            $this->model->loadmodel();

            $this->success("Systemc/systemvali");
        }
    }
}