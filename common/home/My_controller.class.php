<?php
namespace common;
use LIB\controller;
use LIB\models;
class My_controller extends controller{
    //公共控制器
    protected $model;
    public function __construct()
    {
        parent::__construct();
        $this->model=new models();
    }
}