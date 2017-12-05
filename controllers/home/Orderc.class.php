<?php
use common\My_controller;
class Orderc extends My_controller{

    public function __construct()
    {
        parent::__construct();
        if(empty(getCookies("userId")))
        {     //公共控制器进行防非法登录
            $this->alert("您还没有登录呢","Indexc/index");die;
        }
    }
    //订餐系统前台订单展示请求
    public function order_list()
    {
            $data=$this->model->loadmodel();

           $this->SmAssign("rows",$data['data']);

            $this->SmAssign("page",$data['page']);

            $this->SmAssign("count",$data['count']);

            if(empty(get('p')))
            {
                $this->SmDisplay();
            }else{
                $this->SmDisplay("order_res");
            }

    }
    //订餐系统前台用户订单提交请求
    public function order_confirm()
    {  //调用usercm模型层获取积分数据
        $data=$this->model->loadmodel(true,"Usercm/score");

        $this->SmAssign("jifen",$data['jifen']);

         $this->SmDisplay();
    }
    //订餐系统前台用户获取实付价格请求
    public function getPay_Price()
    {
          $this->model->loadmodel();
    }
    //订餐系统前提用户中心下单请求
    public function commit_Order()
    {
           $this->model->loadmodel();
    }
    //订餐系统前台用户中心支付请求
    public function pay()
    {
          $this->SmDisplay();
    }
    //订餐系统前台微信支付请求
    public function weixinPay()
    {
          $this->SmDisplay();
    }
    //订餐系统前台支付宝支付请求
    public function alipay()
    {
         $status=$this->model->loadmodel();
        switch($status)
        {
            case 0: $this->alert("支付参数错误","Orderc/order_list");;break;
            case 2:$this->alert("充值参数错误,余额不能小于0.01","Accountc/balance");break;
        }

    }
    //订餐系统前台支付宝异步请求接口
    public function notify_url()
    {
        
         $this->model->loadmodel();
    }
    //订餐系统前台支付宝跳转返回请求接口
    public function return_url()
    {
        $status=$this->model->loadmodel();
         switch($status)
         {
             case 0:$this->alert("支付参数错误","Orderc/order_list");break;
             case 1:$this->success("Orderc/order_list");break;
             case 2:$this->alert("支付失败","Orderc/order_list");break;
             case 3:$this->success("Accountc/balance");break;
         }
    }
    //订餐系统前台余额支付请求
    public function money_pay()
    {
          if(isGet())
          {
              $data=$this->model->loadmodel();
              $this->SmAssign("oldbalance",$data['balance']);
              $this->SmAssign("newbalance",get('price'));
              $this->SmAssign("orderId",get("orderId"));
              $this->SmDisplay();

          }else if(isPost())
          {
              $this->model->loadmodel();
          }

    }
    //订餐系统前台用户取消订单请求
    public function order_Cancel()
    {
          $this->model->loadmodel();
    }
    //订餐系统前提用户催单请求
    public function urge_Order()
    {
         $this->model->loadmodel();
    }
}