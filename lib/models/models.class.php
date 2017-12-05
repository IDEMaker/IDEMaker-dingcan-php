<?php
namespace LIB;
use \LIB\modelrule\modelabs;
class models extends modelabs
{    //构造方法初始化数据
      public function __construct()
      {
          $this->module=$GLOBALS['APP_M'];
          $this->class=$GLOBALS['APP_C'];
          $this->action=$GLOBALS['APP_A'];
      }
      //加载模型层数据
      public function loadmodel($class=false,$action="")
      {
               if($class==false)
               {
                   $class=$this->class."m";
                   $action=$this->action;
                   if(file_exists($PATH=APP_PMDP."/".$this->module."/".$class.".class.php"))
                   {
                       require $PATH;

                       $controller=new $class();
                   }else{
                       echo "对不起,找不到模块下".$PATH."这个类!";die;
                   }
               }else{
                   $url=explode("/",$action);
                   if(count($url)==2)
                   {
                       array_unshift($url,$GLOBALS['APP_M']);
                   }
                   if(file_exists($PATH=APP_PMDP."/".$url[0]."/".$url[1].".class.php"))
                   {
                       require $PATH;

                       $controller=new $url[1]();
                   }else{
                       echo "对不起,找不到模块下".$PATH."这个类!";die;
                   }
                   $action=$url[2];
               }

          //通过实例化对象调用方法
          if(method_exists($controller,$action))
          {
              return $controller->$action();
          }else{
              echo "对不起,找不到模块下".$PATH."下面的".$action."方法!";die;
          }
      }
}
