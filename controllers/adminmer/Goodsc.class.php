<?php
use common\My_controller;
use LIB\models;
class Goodsc extends My_controller
{       //订餐系统商家后台商品添加请求
        public function index()
        {    if(isGet())
             {
                 $data=$this->model->loadmodel();

                 if(empty($data['cate']))
                 {
                      $data['cate']=0;
                 }
                 $this->SmAssign("cate",$data['cate']);

                 $this->SmDisplay("index",true,"Goodsc/index");

             }else if(isPost())
            {
                  if($this->model->loadmodel())
                  {
                      $this->success("Goodsc/index");
                  }else{
                      $this->alert("商品添加失败,请重新提交","Loginc/index");
                  }

            }

        }
        //订餐系统商家后台展示搜索分页逻辑处理
        public function goods_list()
        {
               if(isGet())
               {
                   $data=$this->model->loadmodel();

                   $this->SmAssign("data",$data['data']);

                   $this->SmAssign("page",$data['page']);

                   $this->SmAssign("count",$data['count']);

                   if(empty(get('p')))
                   {
                       $this->SmDisplay();
                   }else{
                       $this->SmDisplay("goods_res");
                   }
               }

        }
        //订餐系统商家后台修改分页搜索请求
        public function goods_edit()
        {
              if(isGet())
              {
                  $data=$this->model->loadmodel();
                  if($data==2)
                  {
                      $this->alert("抱歉您不能非法操作","Goodsc/goods_list");
                  }

                  $this->SmAssign("data",$data['data']);

                  if(empty($data['cate']))
                  {
                      $data['cate']=0;
                  }
                  $this->SmAssign("cate",$data['cate']);
                  $this->SmAssign("city",$data['city']['city']);

                    $this->SmDisplay("goods_edit","true","Goodsc/goods_edit");

              }else if (isPost())
              {
                   $status=$this->model->loadmodel();

                  switch($status)
                  {
                      case 0:$this->alert("商品修改失败,请重新提交","Goodsc/goods_list");break;
                      case 1:$this->success("Goodsc/goods_list");break;
                      case 2:$this->alert("抱歉您不能非法操作","Goodsc/goods_list");
                  }

              }
        }
        //订餐系统商家后台删除请求
        public function goods_delete()
        {
             $status=$this->model->loadmodel();
            switch($status)
            {
                case 0:$this->alert("商品删除失败,请重新提交","Goodsc/goods_list");break;
                case 1:$this->success("Goodsc/goods_list");break;
                case 2:$this->alert("抱歉您不能非法操作","Goodsc/goods_list");
            }
        }
}