<?php
use LIB\controller;
use LIB\models;
class Loginc extends controller
{     //订餐系统后台登录请求页面
       public function index()
       {
             $this->SmDisplay("index",true,"Loginc/do_login");
       }
       //订餐系统后台登录验证码请求
       public function verifys()
       {
            Verify::verifys();
       }
       //订餐系统登录请求
       public function do_login()
       {
               $model=new models();
               $status=$model->loadmodel();
               switch($status)
               {
                   case 0:$this->alert("登录失败,请重新登录","Loginc/index");break;
                   case 1:$this->success("Indexc/index");break;
                   case 2:$this->alert("验证码不正确","Loginc/index");break;
                   case 3:$this->alert("该商户存在违规,或者未审核,请联系管理","Loginc/index");
               }
       }
       //订餐系统退出请求
       public function logout()
       {
               $model=new models();
               $model->loadmodel();
               $this->success("Loginc/index");
       }
}