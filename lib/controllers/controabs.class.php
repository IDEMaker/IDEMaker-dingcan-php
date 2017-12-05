<?php
namespace LIB\conrule;
abstract class controabs{
      //抽象方法，成功跳转，跨控制器跳转
      abstract  protected function success($url);
      //抽象方法，成功失败跳转 跨控制器alert方法
      abstract  protected function alert($message,$url);
      //抽象方法，控制器视图渲染时
      abstract  protected function display($url=false);
      //抽象方法，控制器视图传值时
      abstract  protected function assign($name,$value="");

}