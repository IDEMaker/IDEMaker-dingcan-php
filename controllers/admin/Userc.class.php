<?php
use common\My_controller;
class Userc extends My_controller{
    //订餐系统后台展示请求
    public function user_list()
    {       $data=$this->model->loadmodel();

           if($data=="对不起没有数据")
           {
                $data=0;
           }

            $this->SmAssign("data",$data['data']);

            $this->SmAssign("page",$data['page']);

            $this->SmAssign("count",$data['count']);

            if(empty(get('p')))
            {
                $this->SmDisplay();
            }else{
                $this->SmDisplay("user_res");
            }
    }
    //订餐系统后台用户修改请求
    public function user_edit()
    {
             if(isGet())
             {
                 $data=$this->model->loadmodel();
                 $this->SmAssign("data",$data);
                 $this->SmDisplay("user_edit",true,"Userc/user_edit");
             }else if(isPost())
             {
                 if($this->model->loadmodel())
                 {
                     $this->success("Userc/user_list");
                 }

             }

    }
    //订餐系统后台用户删除请求
    public function user_delete()
    {
              if($this->model->loadmodel())
              {
                  $this->success("Userc/user_list");
              }
    }
}