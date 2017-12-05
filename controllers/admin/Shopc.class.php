<?php
use common\My_controller;
class Shopc extends My_controller
{
    //订餐系统后台店铺添加请求
    public function index()
      {
           if(isGet())
           {
               $this->SmDisplay("index",true,"Shopc/index");

           }else if(isPost()){

               $mes=$this->model->loadmodel();

               switch($mes['mes'])
               {
                   case 0:$this->alert("商户已存在,请更换","Shopc/index");break;
                   case 1:$this->alert("商户登录账户:".$mes['data']['username']."\\n商户登录密码:".$mes['data']['password']."\\n商户入驻成功!","Shopc/index");break;
                   case 2:$this->alert("入驻失败,请重新提交","Shopc/index");break;
               }
           }

      }
      //订餐系统后台店铺展示请求
      public function shop_list()
      {     $data=$this->model->loadmodel();

            $this->SmAssign("data",$data['data']);
            $this->SmAssign("page",$data['page']);
            $this->SmAssign("count",$data['count']);
            if(empty(get('p')))
            {
                $this->SmDisplay();
            }else{
                $this->SmDisplay("shop_res");
            }

      }
      //订餐系统后台店铺删除请求
      public function shop_delete()
      {
            if($res=$this->model->loadmodel())
            {
                   $this->success("Shopc/shop_list");
            }else{
                   $this->alert("删除失败，请重新操作","Shopc/shop_list");
            }
      }
      //订餐系统后台店铺修改请求
      public function shop_edit()
      {
             if(isGet())
             {
                     $data=$this->model->loadmodel();

                     $this->SmAssign("data",$data['data']);

                     $this->SmAssign("city",$data['city']['city']);

                     $this->SmDisplay("shop_edit",true,"Shopc/shop_edit");

             }else if(isPost()){

                    if($this->model->loadmodel())
                    {
                         $this->success("Shopc/shop_list");
                    }else{
                        $this->alert("修改失败，请重新操作","Shopc/shop_list");
                    }
             }
      }
      //订餐系统后台提现申请查询请求
     public function withBalance()
     {
          if(isGet())
          {
              $data=$this->model->loadmodel();

              $this->SmAssign("data",$data['data']);

              $this->SmAssign("page",$data['page']);

              $this->SmAssign("count",$data['count']);

              if(empty(get('p')))
              {
                  $this->SmDisplay("withbalance");
              }else{
                  $this->SmDisplay("withbalance_res");
              }
          }else if(isPost()) {
              $status = $this->model->loadmodel();
               echo $status;
          }

     }
     //订餐系统后台提现记录查询请求
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
             $this->SmDisplay("mywithbalance");
         }else{
             $this->SmDisplay("mywithbalance_res");
         }
     }
     //订餐系统后台我的店铺详细请求
    public function myshop()
    {
        if(isGet())
        {

            $data=$this->model->loadmodel();
            $this->SmAssign("data",$data['data']);
            $this->SmAssign("city",$data['city']['city']);
            $this->SmDisplay("myshop",true,"Shopc/myshop");
        }else if(isPost())
        {

            if($this->model->loadmodel())
            {
                $this->success("Shopc/myshop");

            }else{
                $this->alert("修改失败，请重新操作","Shopc/myshop");
            }
        }

    }
    //订餐系统后台余额查询请求
    public function myBalance()
    {
        $data=$this->model->loadmodel();

        $this->SmAssign("data",$data);
        $this->SmDisplay("balance");
    }
    //订餐系统后台申请入驻查询请求
    public function shopApply()
    {
           if(isGet())
           {
                $data=$this->model->loadmodel();

               $this->SmAssign("data",$data['data']);

               $this->SmAssign("page",$data['page']);

               $this->SmAssign("count",$data['count']);

               if(empty(get('p')))
               {
                   $this->SmDisplay("shopapply");
               }else{
                   $this->SmDisplay("shopapply_res");
               }

           }else if(isPost())
           {
                $this->model->loadmodel();
           }
    }
    //订餐系统后台入驻申请详情查看请求
    public function shopApply_look()
    {
           $data=$this->model->loadmodel();

           $this->SmAssign("data",$data);

           $this->SmDisplay("shopapply_look");
    }

}