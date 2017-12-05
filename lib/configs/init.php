<?php
header("content-type:text/html;charset=utf-8");
if(!defined("APP_STATIC"))
{
   echo "请先设置静态资源配置";die;
}
/**
 * Created by PhpStorm.
 * User: 康
 * Date: 2017/9/29
 * Time: 15:26
 *
 *  定义项目控制目录路径   Project control list path
 *  定义项目视图目录路径   Project view directory path
 *  定义项目模型目录路径   Project model directory path
 *  定义项目公共目录路径   Project public directory path
 *  定义项目配置目录路径   Project configuration directory path
 *  定义项目公共配置路径   project public configuration path
 *  定义基类目录路径       Project class directory path
 *  定义smarty项目目录
 *  定义基类数据库类项目目录
 *  定义基类工具辅助项目目录
 *  定义文件上传静态资源目录
 *  定义js静态资源目录
 *  定义css静态资源目录
 *  定义image静态资源目录
 */
     define("APP_PCLP",APP_PATH."/controllers");
     define("APP_PVDP",APP_PATH."/views");
     define("APP_PMDP",APP_PATH."/models");
     define("APP_PPDP",APP_PVDP."/public");
     define("APP_PCOFDP",APP_PATH."/configs");
     define("APP_COMMON",APP_PATH."/common");
     define("APP_LIB",str_replace("\\","/",dirname(__DIR__)));
     define("APP_SM",APP_LIB."/smarty/"."libs");
     define("APP_LIBARY",APP_LIB."/library");
     define("APP_CORE",APP_LIB."/core");
     define("APP_UPLOAD",APP_STATIC);
     define("JS",APP_STATIC."webs/Srce/js/");
     define("CSS",APP_STATIC."webs/Srce/css/");
     define("IMAGE",APP_STATIC."webs/Srce/image/");
    /*
     *  初始化创建默认欢迎页
     */
    if(!file_exists(APP_PCLP."/".APP_PDP))
    {
        $PATH=APP_PCLP."/".APP_PDP;

        mkdir($PATH,"0755",true) or die("没有写权限,请给项目添加写入权限");

        chmod($PATH,"0755");

        $code=file_get_contents(APP_LIB."/configs/"."code.php");

        file_put_contents($PATH."/"."Indexc.class.php",$code);
    }
    //引入加载类
    require_once APP_LIB."/configs/"."autoload.php";

    //接收路由参数 引入路由模式
    $GLOBALS["APP_M"]=isset($_GET['m']) ? trim($_GET['m']) : APP_PDP;

    $GLOBALS['APP_C']=ucfirst(isset($_GET['c']) ? trim($_GET['c']) : "Indexc");

    $GLOBALS['APP_A']=isset($_GET['a']) ? trim($_GET['a']) : "index";

    require_once APP_LIB."/configs/"."routing.php";
?>