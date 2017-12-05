<?php
//加载公共控制器类
$get=empty(get("m"))?APP_PDP:get("m");
if(is_file($path=APP_COMMON."/".$get."/My_controller.class.php"))
{
     require_once $path;
}
//加载公共函数库
if(is_file($path=APP_COMMON."/"."function.php"))
{
    require_once $path;
}