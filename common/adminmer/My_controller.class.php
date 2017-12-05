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
        $admin=getSessions("adminmerName");
        preg_match('#admin#',$admin,$res);
        if(!empty($res))
        {
            $this->alert("对不起,不允许登录,请登录管理平台","admin/Loginc/index");
        }
        if(empty(getSessions("adminmerName")))
        {     //公共控制器进行防非法登录
              $this->alert("请先登录","Loginc/index");
        }

    }
}