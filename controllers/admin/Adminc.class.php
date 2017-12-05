<?php
use common\My_controller;
class Adminc extends My_controller{
    //订餐系统后台管理员添加请求
     public function index()
     {    if(isGet())
          {
              $this->SmDisplay("index",true,"Adminc/index");
          }else if(isPost())
          {
              $status=$this->model->loadmodel();
              switch($status)
              {
                  case 0:$this->alert("用户名必须包含admin","Adminc/index");break;
                  case 1:$this->success("Adminc/index");break;
                  case 2:$this->alert("用户名或密码不能为空","Adminc/index");break;
                  case 3:$this->alert("该用户已存在","Adminc/index");break;
                  case 4:$this->alert("添加管理失败","Adminc/index");
              }
          }

     }
     //订餐系统管理员列表请求
     public function admin_list()
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
                   $this->SmDisplay("admin_res");
               }

           }
     }
     //订餐系统后台管理员修改请求
     public function admin_edit()
     {
            if(isGet())
            {
              $data=$this->model->loadmodel();
              $this->SmAssign("data",$data);
              $this->SmDisplay("admin_edit",true,"Adminc/admin_edit");
            }else if(isPost())
            {

                 $status=$this->model->loadmodel();
                switch($status)
                {
                    case 0:$this->alert("修改失败","Adminc/admin_list");break;
                    case 1:$this->success("Adminc/admin_list");break;
                }

            }
     }
     //订餐系统后台管理员删除请求
    public function admin_delete()
    {
          $status=$this->model->loadmodel();
            switch($status)
            {
                case 0:$this->alert("删除失败","Adminc/admin_list");break;
                case 1:$this->success("Adminc/admin_list");break;
            }

    }
}