<?php
use LIB\models;
class Cachecm extends models{
    //订餐系统后台清除缓存逻辑处理
     public function cahceClear()
     {
          if(isPost())
          {
               if(post('isClear')==1)
               {
                   $path=APP_PATH."/runtime/templates_c";

                   return $this->deldir($path);


               }else if(post('isClear')==0)
               {
                   $path=APP_PATH."/runtime/cache";

                   return $this->deldir($path);
               }
          }
     }
     //订餐系统后台清除文件函数
     public function deldir($dir) {
         //打开文件目录
         $dh = opendir($dir);
         //循环读取文件
         while ($file = readdir($dh)) {
             if($file != '.' && $file != '..') {
                 $fullpath = $dir . '/' . $file;

                 //判断是否为目录
                 if(!is_dir($fullpath)) {
                     //如果不是,删除该文件
                     if(!unlink($fullpath)) {
                     }
                 } else {
                     //如果是目录,递归本身删除下级目录
                     deldir($fullpath);
                 }
             }
         }
         //关闭目录
         closedir($dh);
         //删除目录
         if(rmdir($dir)) {
             return true;
          } else {
             return false;
         }
     }
}