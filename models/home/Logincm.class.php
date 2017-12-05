<?php
use LIB\models;
class Logincm extends models{
    //订餐系统前台登录逻辑处理
    public function check_in()
    {
        $username=post('username');
        $pwd=md5(post('password'));

//合法检查
        if($username==""){
            $data['code']=1;
            $data['msg']=urlencode("手机号不能为空");//中文urlencode一下
            echo urldecode(json_encode($data));
            return;
        }

//是否存在
        $sql="select * from dfz_user where username='$username'";
        $mysql=MySqlPDOD::GetObj();
        $row=$mysql->bindSql($sql);
        if($row=="对不起没有数据")
        {
            $row="";
        }
        if(!$row){
            $data['code']=1;
            $data['msg']=urlencode("该用户不存在");//中文urlencode一下
            echo urldecode(json_encode($data));
            return;
        }

//check
        $sql="select * from dfz_user where username='$username' and password='$pwd'";

        $row=$mysql->bindSql($sql);

        if($row=="对不起没有数据")
        {
            $row="";
        }
        if($row){
            setCookies("userId",$username,0,"/");
            $data['code']=0;
            $data['msg']=urlencode("登录成功");//中文urlencode一下
            echo urldecode(json_encode($data));
        }else{
            $data['code']=2;
            $data['msg']=urlencode("密码错误");//中文urlencode一下
            echo urldecode(json_encode($data));
        }

    }
    //订餐系统前台登录验证逻辑处理
    public function check_login()
    {
        if(isset($_COOKIE['userId'])&&$_COOKIE['userId']!=""){
            setSessions('userId',getCookies('userId'));
            $obj = new stdClass();
            $obj->code="0"; //已登录
            echo json_encode($obj);
        }else{
            $obj = new stdClass();
            $obj->code="1"; //未登录
            echo json_encode($obj);
        }
    }
    //订餐系统前台解密逻辑处理
    public function decode_cookie()
    {
         $name=get("name");
         return getCookies($name);
    }
    //订餐系统前台退出逻辑处理
    public function log_out()
    {
        if(isset($_COOKIE['userId'])&&$_COOKIE['userId']!=""){

            clearCookies("userId");

            $data['code']="0"; //退出成功
            echo json_encode($data);
        }else{
            $data['code']="1"; //退出异常
            echo json_encode($data);
        }

    }
}