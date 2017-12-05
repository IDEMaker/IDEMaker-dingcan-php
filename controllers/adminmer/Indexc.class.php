<?php
use common\My_controller;
/*
 *  欢迎使用框架 源文件在lib\configs\code.php
 */
class Indexc extends My_controller
{
	 public function index()
	 {
         $this->SmDisplay();
	 }
	 public function main()
     {
          $this->SmDisplay();
     }
     public function updatePage()
     {
          $this->model->loadmodel();
     }
}

?>