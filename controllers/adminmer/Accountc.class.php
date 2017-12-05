<?php
use common\My_controller;
class Accountc extends My_controller
{     //订餐系统商家后台余额管理请求
      public function myBalance()
      {
            $data=$this->model->loadmodel();

            $this->SmAssign("data",$data);
            $this->SmDisplay("balance");
      }
     //订餐系统商家后台余额提现请求
      public function applyBalance()
      {
            if(isGet())
            {   $data=$this->model->loadmodel(true,"Accountcm/myBalance");

                $this->SmAssign("data",$data);

                $this->SmDisplay("applybalance",true,"Accountc/applyBalance");
            }else if(isPost())
            {
                $status=$this->model->loadmodel();

                switch($status)
                {
                    case 0:$this->alert("余额不足哦","Accountc/applyBalance");break;
                    case 1:$this->success("Accountc/applyBalance");break;
                    case 2:$this->alert("余额或者支付宝账户不能为空","Accountc/applyBalance");
                    case 3:$this->alert("提现余额不能小于100哦","Accountc/applyBalance");
                }

            }


      }
      //订餐系统商家后台提现余额查询请求
    public function mywithBalance()
    {
        $data=$this->model->loadmodel();

        $this->SmAssign("data",$data['data']);

        $this->SmAssign("page",$data['page']);

        $this->SmAssign("count",$data['count']);

        if(!empty($data['balance']))
        {
            $this->SmAssign("balance",$data['balance']);
        }else{
            $this->SmAssign("balance",0);
        }
        if(empty(get('p')))
        {
            $this->SmDisplay("withbalance");
        }else{
            $this->SmDisplay("mywithbalance_res");
        }
    }
}