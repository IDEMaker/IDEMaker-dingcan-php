<?php
abstract class UploadRule{
      /*
           定义文件的类型
      */
      public $FileType=array("image/jpg","image/png","image/gif","image/bmp","image/jpeg");
      /*
           定义上传的最大值 2M
      */
      public $FileMax=2;
      /*
           上传最大值的值 2M
      */
      public $FileMaxSize=2097152;
      /*
           定义错误信息
      */
      public static $error="";
      /*
           获取文件的详细信息 
           return  array;
      */
      abstract public function GetInfo($name);
      /*
           验证文件上传类型
           return bool true || false
      */          
      abstract public function CheckType($name,$k);
      /*
           验证文件上传大小
           return bool true || false
      */
      abstract public function CheckSize($name,$k);
      /*
           设置上传路径
           return string
      */
      abstract public function FilePath($name);
      /*
           设置文件名
           return string
      */
      abstract public function FileName($name,$path,$k);
      /*
           进行文件上传
           return array;
      */
      abstract public function Up($name,$path);
      /*
           通过延迟绑定业务进行验证错误类型
           错误类型 1 指向 $code1
           错误类型 2 指向 $code2
           错误类型 3 指向 $code3
      */
      public  function CheckError($code)
      {      self::$error=$code;
             $code1="您没有上传文件";
             $code2="你上传的格式不支持";
             $code3="您上传的文件大小不支持";
             switch(static::$error)
             {
                 case "1":echo $code1;die;
                 case "2":echo $code2;die;
                 case "3":echo $code3;die;
             }
      }
}
?>