<?php
namespace common;
use LIB\controller;
use LIB\models;
class My_controller extends controller{
    //定义受保护的model属性
    protected $model;
    //实例化时自动加载构造方法
    public function __construct()
    {
        parent::__construct();
        $this->model=new models();
        $admin=getSessions("adminName");
        preg_match('#shop#',$admin,$res);
        if(!empty($res))
        {
            $this->alert("对不起,不允许登录,请登录商家平台","adminmer/Loginc/index");
        }
        preg_match('#admintest#',$admin,$res);
       
        if(!empty($res))
        {  
            $edit=$GLOBALS['APP_A'];
            $C=$GLOBALS['APP_C'];
            preg_match('#edit|delete#',$edit,$res);

if(!empty($res)||$C=="Shopc"||$C=="Cachec"||$C=="Logc"||$C=="Systemc"||$C=="Adminc")
{
  $this->alert("对不起,没有权限访问","admin/Indexc/index");die;
}

             
        }
        if(empty(getSessions("adminName")))
        {     //公共控制器进行防非法登录
              $this->alert("请先登录","Loginc/index");
        }

    }
}
