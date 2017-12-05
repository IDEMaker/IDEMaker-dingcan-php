<?php
use LIB\models;
class Logcm extends models{
    //订餐系统后台清除缓存逻辑处理
     public function logClear()
     {
         $path=APP_PATH."/webs/Mylg";
         if(isGet())
          {
//               return $this->getFiles($path."/",true);

          }else if(isPost())
         {
                switch(post('isDel'))
                {
                    case "全部":return $this->deldir($path);break;
                    case "最近一年":

                        $lastyear=date("Y-m-d", strtotime("-1 year")); //获取格式为2016-12-30 13:26:13

                        $tnum = strtotime(date('Y-m-d')) - strtotime($lastyear);//拿当前时间-开始时间 = 相差时间
                        $tnum = $tnum/(3600*24);//此时间单位为 天
                        for($i=1;$i<=$tnum;$i++)
                        {

                            $a=$this->deldir($path."/".date("Y-m-d", strtotime($lastyear."+$i day"))); //获取格式为2016-12-30 13:26:13d
                        }
                        return true;
                        break;
                    case "最近一月":
                        $lastday=date("Y-m-d", strtotime("-1 month")); //获取格式为2016-12-30 13:26:13

                        $tnum = strtotime(date('Y-m-d')) - strtotime($lastday);//拿当前时间-开始时间 = 相差时间
                        $tnum = $tnum/(3600*24);//此时间单位为 天

                        for($i=1;$i<=$tnum;$i++)
                        {

                            $a=$this->deldir($path."/".date("Y-m-d", strtotime($lastday."+$i day"))); //获取格式为2016-12-30 13:26:13d
                        }
                        return true;
                        break;
                    case "最近一周":
                        $lastday=date("Y-m-d", strtotime("-7 day")); //获取格式为2016-12-30 13:26:13

                        $tnum = strtotime(date('Y-m-d')) - strtotime($lastday);//拿当前时间-开始时间 = 相差时间
                        $tnum = $tnum/(3600*24);//此时间单位为 天

                        for($i=1;$i<=$tnum;$i++)
                        {

                            $a=$this->deldir($path."/".date("Y-m-d", strtotime($lastday."+$i day"))); //获取格式为2016-12-30 13:26:13d
                        }
                        return true;
                        break;
                }
//               return $this->deldir($path.post('isDel'));
         }

     }
    /**
    *获取某个目录下所有文件
    *@param $path文件路径
    *@param $child 是否包含对应的目录
    */
    public  function getFiles($path,$child=false){
        $files=array();
        if(!$child){
            if(is_dir($path)){
                $dp = dir($path);
            }else{
                return null;
            }
            while ($file = $dp ->read()){
                if($file !="." && $file !=".." && is_file($path.$file)){
                    $files[] = $file;
                }
            }
            $dp->close();
        }else{
            $this->scanfiles($files,$path);
        }
        return $files;
    }
    /**
     *@param $files 结果
     *@param $path 路径
     *@param $childDir 子目录名称
     */
    public function scanfiles(&$files,$path,$childDir=false){
        $dp = dir($path);
        while ($file = $dp ->read()){
            if($file !="." && $file !=".."){
                if(is_file($path.$file)){//当前为文件
                    $files[]= $file;
                }else{//当前为目录
                    $this->scanfiles($files[$file],$path.$file.DIRECTORY_SEPARATOR,$file);
                }
            }
        }
        $dp->close();
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
                     if(is_file($fullpath)) {
                         unlink($fullpath);
                     }
                     continue;
                 } else {
                     //如果是目录,递归本身删除下级目录
                     $this->deldir($fullpath);
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