<?php
use LIB\models;
class Systemcm extends models{
    //订餐系统后台手机验证码逻辑处理
    public function phoneVali()
    {
          return $this->hand_com(post());
    }
    //订餐系统支付宝配置逻辑处理
    public function alipayVali()
    {
         return  $this->hand_com(post());
    }
    //订餐系统后台邮箱配置逻辑处理
    public function emailVali()
    {
        return  $this->hand_com(post());
    }
    //订餐系统后台系统配置逻辑处理
    public function systemVali()
    {

        $post=post();

         if(isPost())
         {
             if($post['isLogoIcon']==1)
             {
                 $upload=new UploadM();
                 $myfile=$upload->Up("myFile",IMAGE."home");
                 $post['myFile']=$myfile['path_name'];
             }
             unset($post['isLogoIcon']);
         }
        return $this->hand_com($post);
    }
    //订餐系统后台系统管理公共逻辑处理模块
    public function hand_com($post)
    {
        if(isGet())
        {
            return require_once APP_PCOFDP."/config.php";

        }else if(isPost())
        {
            $path=APP_PCOFDP."/config.php";
            $data1=require_once APP_PCOFDP."/config.php";
            $data2=$post;
            $data=array_merge($data1,$data2);
            $strarr=var_export($data,true);
            $newstr="<?php\nreturn\t".$strarr.";";
            file_put_contents($path,$newstr);
        }
    }
}