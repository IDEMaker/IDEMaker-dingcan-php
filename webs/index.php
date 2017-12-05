<?php
/**
 * Created by PhpStorm.
 * User: 康
 * Date: 2017/9/29
 * Time: 15:27
 *  定义项目报错机制
 *  定义当前项目的跟目录        Project root
 *  定义静态资源配置
 *  定义项目目录路径 模块目录   Project directory path
 *  初始化入口文件
 */
 set_time_limit(0);
error_reporting(0); //错误报告  //0：关闭提醒 255：所有提醒 7：部分提醒
  define("APP_PATH",str_replace("/webs","",str_replace("\\","/",__DIR__)));
  define("APP_PDP","home");
  define("APP_STATIC","/");
  require APP_PATH."/lib/configs/"."init.php";
?>
