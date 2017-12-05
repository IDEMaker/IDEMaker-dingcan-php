<?php
    /**
     * Created by PhpStorm.
     * User: 康
     * Date: 2017/9/30
     * Time: 12:31
     */
    /*
      *   访问路由模式
      *   接收路由参数 没有就为默认值
      *   实例化模块下的控制器
      *   通过实例化对象调用方法
      */
    //实例化控制器
    if(file_exists($PATH=APP_PCLP."/".$GLOBALS["APP_M"]."/".$GLOBALS['APP_C'].".class.php"))
    {
        require $PATH;

        $controller=new $GLOBALS['APP_C']();
        
    }else{
        echo "对不起,找不到模块下".$PATH."这个类!";die;
    }
    //通过实例化对象调用方法
    if(method_exists($controller,$GLOBALS['APP_A']))
    {
        $controller->$GLOBALS['APP_A']();
    }else{ 
        echo "对不起,找不到模块下".$PATH."下面的".$GLOBALS['APP_A']."方法!";die;
    }
 ?>