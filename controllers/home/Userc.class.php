<?php
use common\My_controller;
class Userc extends My_controller{
    //订餐系统前台注册请求
    public function registr()
    {
        echo  $this->model->loadmodel();
    }
    //订餐系统前台获取验证码请求
    public function get_code()
    {
        echo $this->model->loadmodel();
    }
    //订餐系统前台获取用户详细信息请求
    public function load_myinfo()
    {
         $this->model->loadmodel();
    }
    //订餐系统前台忘记密码请求
    public function ch_pwd()
    {
        $this->model->loadmodel();
    }
    //订餐系统前台用户收货地址请求
    public function address()
    {    $this->illegalLog();
         if(isGet())
         {
             $this->SmDisplay();
         }else if(isPost())
         {
              $this->model->loadmodel();
         }

    }
    //订餐系统前台用户积分查询
    public function score()
    {   $this->illegalLog();
        $data=$this->model->loadmodel();

        $this->SmAssign("data",$data['jifen']);

         $this->SmDisplay();
    }
    //订餐系统前台用户余额查询
    public function balance()
    {   $this->illegalLog();
        $data=$this->model->loadmodel();

        $this->SmAssign("data",$data['balance']);

        $this->SmDisplay();
    }
    //订餐系统前台用户中心信息设置
    public function setting()
    {    $this->illegalLog();
        if(isGet())
        {
            $this->SmDisplay();
        }else if(isPost()){

            $this->model->loadmodel();

        }


    }
    //订餐系统前台用户充值请求
    public function balrecharge()
    {   $this->illegalLog();
        $this->SmDisplay("balrecharge");
    }
    //订餐系统前台用户中心修改密码请求
    public function saveNewPwd()
    {
          $this->model->loadmodel();
    }
    //订餐系统用户中心防止非法登录
    public function illegalLog()
    {
        if(empty(getCookies("userId")))
        {     //公共控制器进行防非法登录
            $this->alert("您还没有登录呢","Indexc/index");die;
        }
    }

}