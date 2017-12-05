<?php
use common\My_controller;
/*
 *  欢迎使用框架 源文件在lib\configs\code.php
 */
class Indexc extends My_controller
{   //订餐系统后台首页请求
	 public function index()
	 {
         $this->SmDisplay();
	 }
	 //订餐系统中心页面请求
	 public function main()
     {
          $this->SmDisplay();
     }
     //订餐系统更新前台页面请求
     public function updatePage()
     {
           $this->model->loadmodel();
     }
}

?>