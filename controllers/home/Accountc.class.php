<?php
use common\My_controller;
class Accountc extends My_controller{

    //订餐系统前台用户中心订单查询请求
    public function order()
    {     $this->illegalLog();
          $this->success("Orderc/order_list");
    }
    //订餐系统前台用户中心送货地址请求
    public function address()
    {     $this->illegalLog();
          $this->success("Userc/address");
    }
    //订餐系统前台用户中心积分查询
    public function score()
    {      $this->illegalLog();
           $this->success('Userc/score');
    }
    //订餐系统前台用户中心余额查询
    public function balance()
    {     $this->illegalLog();
          $this->success("Userc/balance");
    }
    //订餐系统前台用户中心设置请求
    public function setting()
    {     $this->illegalLog();
          $this->success("Userc/setting");
    }
    //订餐系统前台关于我们请求
    public function about()
    {
          $this->success("Aboutc/about&p=".get('p'));
    }
    //订餐系统前台用户充值请求
    public function balrecharge()
    {
        $this->success("Userc/balrecharge");
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