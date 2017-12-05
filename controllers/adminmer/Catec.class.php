<?php
use common\My_controller;
use LIB\models;
class Catec extends My_controller
{
    //订餐系统商家后台分类添加请求
    public function index()
    {   if(isGet())
       {
           $this->SmDisplay("index",true,"Catec/index");
       }else if(isPost())
       {
           $status=$this->model->loadmodel();
           switch($status)
           {
               case 0:$this->alert("分类添加失败,请重新提交","Catec/index");break;
               case 1:$this->success("Catec/index");break;
               case 2:$this->alert("分类名称或者重权不能为空","Catec/index");break;
               case 3:$this->alert("分类添加失败,该商户下存在此分类，请更换后重新提交","Catec/index");break;;
           }
       }
    }
    //订餐系统商家后台分页搜索展示请求
    public function cate_list()
    {
        $data=$this->model->loadmodel();
        $this->SmAssign("data",$data['data']);
        $this->SmAssign("page",$data['page']);
        $this->SmAssign("count",$data['count']);

        if(empty(get('p')))
        {
            $this->SmDisplay();
        }else{
            $this->SmDisplay("cate_res");
        }
    }
    //订餐系统商家后台删除请求
    public function cate_delete()
    {
            $status=$this->model->loadmodel();
            switch($status)
            {
                case 0:$this->alert("分类删除失败,请重新提交","Catec/cate_list");break;
                case 1:$this->success("Catec/cate_list");break;
                case 2:$this->alert("分类删除失败,该分类下存在商品，请删除后重新提交","Catec/cate_list");break;
                case 3:$this->alert("抱歉您不能非法操作","Catec/cate_list");
            }
    }
    //订餐系统商家后台修改请求
    public function cate_edit()
    {
           if(isGet())
           {
               $data=$this->model->loadmodel();
               if($data==2)
               {
                   $this->alert("抱歉您不能非法操作","Catec/cate_list");
               }

               $this->SmAssign("data",$data['data']);

               $this->SmAssign("user",$data['user']);

               $this->SmDisplay("cate_edit",true,"Catec/cate_edit");

           }else if(isPost()){

                 $status=$this->model->loadmodel();
                switch($status)
                {
                  case 0:$this->alert("分类修改失败,请重新提交","Catec/cate_list");break;
                  case 1:$this->success("Catec/cate_list");break;
                  case 2:$this->alert("抱歉您不能非法操作","Catec/cate_list");
                }

           }
    }

}