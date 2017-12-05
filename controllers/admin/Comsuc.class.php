<?php
use common\My_controller;
class Comsuc extends My_controller
{   //订餐系统后台投诉建议列表请求
    public function comSu()
    {
        $data=$this->model->loadmodel();
        if($data=="对不起没有数据")
        {
            $data=0;
        }
        $this->SmAssign("data",$data['data']);
        $this->SmAssign("page",$data['page']);
        $this->SmAssign("count",$data['count']);

        if(empty(get('p')))
        {
            $this->SmDisplay("comsu");
        }else{
            $this->SmDisplay("comsu_res");
        }
    }
    //订餐系统后台投诉查看
    public function comSu_look()
    {
         $data=$this->model->loadmodel();
         $this->SmAssign("data",$data);
         $this->SmAssign("user",get('username'));
         $this->SmDisplay("comsu_look");
    }
}