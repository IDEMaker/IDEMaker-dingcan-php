<?php
use common\My_controller;
class Orderc extends My_controller
{      //订餐系统后台订单综合查询请求
       public function order_list()
       {
           $data=$this->model->loadmodel();

           $this->SmAssign("rows",$data['data']);

           $this->SmAssign("page",$data['page']);

           $this->SmAssign("count",$data['count']);

           $this->SmAssign("price",$data['price']);
           if(empty(get('p')))
           {
               $this->SmDisplay();
           }else{
               $this->SmDisplay("order_list_res");
           }
       }
       //订餐系统后台接单请求
    public function order_moniter()
    {
        if(isGet())
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
        }else if(isPost())
        {
            $data=$this->model->loadmodel();
        }

    }
    //订餐系统商家后台检查订单请求
    public function check_order()
    {
        $this->model->loadmodel();
    }
    //订餐系统后台查询处理中订单请求
    public function hand_order()
    {
        if(isGet())
        {
            $data=$this->model->loadmodel();

            $this->SmAssign("rows",$data['data']);

            $this->SmAssign("page",$data['page']);

            $this->SmAssign("count",$data['count']);

            if(empty(get('p')))
            {
                $this->SmDisplay();
            }else{
                $this->SmDisplay("hand_res");
            }
        }else if(isPost()){

            $this->model->loadmodel();
        }


    }
}