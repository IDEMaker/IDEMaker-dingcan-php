<?php
use common\My_controller;
class Logc extends My_controller{
    //订餐系统后台日志清除请求
    public function LogClear()
    {
        if(isGet())
        {
            $file=$this->model->loadmodel();

            $this->SmAssign("file",$file);

            $this->SmDisplay("logclear",true,"Logc/LogClear");

        }else if(isPost())
        {
            if($this->model->loadmodel())
            {   $path=APP_PATH."/webs/Mylg";
                mkdir($path,0755);
                chmod($path,0755);
                $this->alert("清除成功","Logc/LogClear");
            }else{
                $this->alert("清除失败","Logc/LogClear");
            }
        }
    }
}