<?php
class Log{

    protected $time;

    protected $user;

    protected $action;

    protected $status;

    public function __construct($logData)
    {
        $this->time=$logData['time'];
        $this->user=$logData['user'];
        $this->action=$logData['action'];
        $this->status=$logData['status'];


    }
    public function generateLog($logname)
    {
        $filepath=APP_PATH."/webs/Mylg/".date("Y-m-d")."/-$logname.txt";

        if(!is_file($filepath))
        {
            if(!is_dir(APP_PATH."/webs/Mylg/".date("Y-m-d")))
            {
                mkdir(APP_PATH."/webs/Mylg/".date("Y-m-d"),0755);
                chmod(APP_PATH."/webs/Mylg/".date("Y-m-d"),0755);
            }

            fopen($filepath,"w");
        }

        $str="当前时间:$this->time \t 当前用户:$this->user \t 当前操作方法:$this->action \t 当前的状态:$this->status \n";
        $myfile = fopen($filepath, "a");
        fwrite($myfile,$str);
        fclose($myfile);

    }
}