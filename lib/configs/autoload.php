<?php
/**
 * Created by PhpStorm.
 * User: 康
 * Date: 2017/9/30
 * Time: 12:34
 */
  /*
   *   自动加载区域
   */
    //引入Smarty模板引擎
    require_once APP_SM."/Smarty.class.php";
//    //引入系统配置文件
//    require_once APP_PCOFDP."/config.php";
    //引入控制器基类的抽象方法
    require_once APP_LIB."/controllers/controabs.class.php";
    //引入控制器基类的控制器
    require_once APP_LIB."/controllers/controllerc.class.php";
    //引入模型层基类的抽象方法
    require_once APP_LIB."/models/modelabs.class.php";
    //引入模型层基类
    require_once APP_LIB."/models/models.class.php";
    //引入mysql数据库抽象规则类
    require_once APP_LIBARY."/Rule.php";
    //引入工具辅助目录
    require_once APP_CORE."/Core.php";
    //引入Cookie工具函数
    require_once APP_CORE."/Cookie.php";
    //引入session工具函数
    require_once APP_CORE."/Session.php";
    //引入mysql数据库操作类
    require_once APP_LIBARY."/MySql.php";
    //引入mysql数据库单例操作类
    require_once APP_LIBARY."/MySqlD.php";
    //引入mysqli数据库单例操作类
    require_once APP_LIBARY."/MySqliD.php";
    //引入mysqli数据库对象单例操作类
    require_once APP_LIBARY."/MySqliDX.php";
    //引入mysqlpdo数据库单例操作类
    require_once APP_LIBARY."/MySqlPDOD.php";
    //引入page分页操作类
    require_once APP_LIBARY."/Page.class.php";
    //引入mysqli数据库对象单例操作类
    require_once APP_LIBARY."/MySqliDX.php";
    //引入文件上传抽象规则类
    require_once APP_LIBARY."/UploadRule.php";
    //引入文件上传操作类
    require_once APP_LIBARY."/UploadM.php";
    //引入日志操作类
    require_once APP_LIBARY."/Log.php";
    //引入common公共模块
    require_once APP_LIB."/configs/"."common.php";
    //引入验证码
    require_once APP_LIBARY.'/string.func.php';

    require_once APP_LIBARY."/image.func.php";

    require_once APP_LIBARY."/Verify.php";
    //引入阿里云短信服务
    require_once APP_PATH."/aliyun-dysms-php-sdk/api_sdk/SmsSend.php";
    //引入NowApi短信服务
    require_once APP_PATH."/nowapi/SmsSend.php";

    require_once APP_PATH.'/PHPMailer-master/class.phpmailer.php';

    require_once APP_PATH.'/PHPMailer-master/class.smtp.php';



