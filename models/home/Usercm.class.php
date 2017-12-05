<?php
use LIB\models;
class Usercm extends models{
    //订餐系统前台获取验证码逻辑处理
    public function get_code()
    {   //非法获取验证
        if(isset($_SESSION['send_count'])){
            $_SESSION['send_count']+=1;
        }else{
            $_SESSION['send_count']=1;
        }
        if($_SESSION['send_count']>4){
            $res['code']=1;
            $res['msg']=urlencode("超过发送次数");//中文urlencode一下
            return urldecode(json_encode($res));die;
        }
        //加载配置文件
        $config=require_once APP_PCOFDP."/config.php";
        if($config['server']==1)
        {  //判断是否阿里通信
            $obj=new SmsSend($config);

            $response = $obj::sendSms(
                post('phone') // 短信接收者
            );
            $res=array();
            if ($response->Message=="OK" && $response->Code=="OK")
            {
                $res['code']=0;
                $res['msg']=urlencode(getSessions('send_code'));
                return urldecode(json_encode($res));
            }else{
                $res['code']=1;
                $res['msg']=urlencode("发送验证码失败");//中文urlencode一下
                return urldecode(json_encode($res));
            }
        }else if($config['server']==2)
        {  //判断是否nowApi通信
            $nowapi_parm['phone']=post('phone');
            $result=nowapi_call($nowapi_parm,$config);
            $result=json_encode($result);
            $reso=json_decode($result,true);

            if ($reso['status']=="OK")
            {
                $res['code']=0;
                $res['msg']=urlencode(getSessions('send_code'));
                return urldecode(json_encode($res));
            }else{
                $res['code']=1;
                $res['msg']=urlencode("发送验证码失败");//中文urlencode一下
                return urldecode(json_encode($res));
            }

        }

    }
    //订餐系统前台注册逻辑处理
    public function registr()
    {

                $arr['username']=post('username');
                $arr['password']=md5(post('password'));
                $arr['regTime']=time();
                $code=post('code');//验证码

                $arr2['username']=post('username');
                $arr2['phone']=post('username');

                //合法检查
                if(!isset($arr['username'])||!isset($arr['password'])){
                    $data['code']=1;
                    $data['msg']=urlencode("手机号或密码不能为空");//中文urlencode一下
                    echo urldecode(json_encode($data));
                    return;
                }

//                //验证码 暂时注释
//                 if(!isset($code)||$code!=getSessions('send_code')){
//                     $data['code']=1;
//                     $data['msg']=urlencode(getSessions('send_code'));//中文urlencode一下
//                     echo urldecode(json_encode($data));
//                     return;
//                 }



                //查重
                $sql="select * from dfz_user where username='".$arr['username']."'";

                $mysql=MySqlPDOD::getObj();

                $row=$mysql->bindSql($sql);

                if($row=="对不起没有数据")
                {
                     $row="";
                }
                if($row){
                    $data['code']=2;
                    $data['msg']=urlencode("该用户已注册");//中文urlencode一下
                    echo urldecode(json_encode($data));
                    return;
                }

                //开始插入

                if($res=$mysql->InsertOne("dfz_user", $arr)) {

                    if ($mysql->InsertOne("dfz_userinfo",$arr2)!=$res) {

                        $data['code'] = 0;

                        $data['msg'] = urlencode("创建成功");//中文urlencode一下

                        setCookies("userId", $arr['username'], 0, "/");

                        echo urldecode(json_encode($data));

                    }else {

                            $this->callback($mysql,$arr);
                    }

                    }else{

                            $this->callback($mysql,$arr);
                    }
    }
    //添加数据回溯处理
    public function callback($mysql,$arr)
    {
        $mysql->DeleteOne("dfz_user", "username={$arr['username']}");
        $mysql->DeleteOne("dfz_userinfo", "username={$arr['username']}");
        $data['code'] = 1;
        $data['msg'] = urlencode("创建失败");//中文urlencode一下
        echo urldecode(json_encode($data));
    }

    //订餐系统前台获取用户详细信息逻辑处理
    public function load_myinfo()
    {
        $arr['username'] = post('username');

        if ($arr['username']) {
            $sql = "select * from dfz_userinfo where username='" . $arr['username'] . "'";

            $mysql = MySqlPDOD::GetObj();
            $row = $mysql->bindSql($sql);
            if($row=="对不起没有数据")
            {
                $row="";
            }
            if ($row) {
                $data['code']=0;
                $data['msg']=urlencode("获取成功");//中文urlencode一下
                $data['data']=$row[0];
                echo urldecode(json_encode($data));
            } else {
                $data['code']=1;
                $data['msg']=urlencode("没有信息");//中文urlencode一下
                echo urldecode(json_encode($data));
            }

        }
    }
    //订餐系统前台忘记密码逻辑处理
    public function ch_pwd()
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

//update

        $arr['password']=$pwd;
        if($mysql->Update("dfz_user", $arr,"username={$username}")){
            $data['code']=0;
            $data['msg']=urlencode("修改成功");//中文urlencode一下
            echo urldecode(json_encode($data));
        }else{
            $data['code']=1;
            $data['msg']=urlencode("修改失败");//中文urlencode一下
            echo urldecode(json_encode($data));
        }

    }
    //订餐系统前台用户地址逻辑处理
    public function address()
    {
        $arr['name']=post('name');
        $arr['building']=post('place');
        $arr['addressDetail']=post('addressDetail');
        $arr['phone']=post('pn');

        $username=post('username');

        $mysql=MySqlPDOD::GetObj();
        if($mysql->Update("dfz_userinfo",$arr,"username='{$username}'")){
            $data['code']=0;
            $data['msg']=urlencode("保存成功");//中文urlencode一下
            echo urldecode(json_encode($data));
        } else{

            $data['code']=1;
            $data['msg']=urlencode("保存失败");//中文urlencode一下
            echo urldecode(json_encode($data));

        }
    }
    //订餐系统前台用户积分查询逻辑处理
    public function score()
    {
        $userid=getCookies("userId");

        $mysql=MySqlPDOD::GetObj();

        return $mysql->SelectOne("dfz_userinfo","jifen","username=".$userid);
    }
    //订餐系统前台用户中心余额查询逻辑处理
    public function balance()
    {
        $userid=getCookies("userId");

        $mysql=MySqlPDOD::GetObj();

        return $mysql->SelectOne("dfz_userinfo","balance","username=".$userid);
    }
    //订餐系统前台用户中心设置逻辑处理
    public function setting()
    {
        $username=post('username');
        $arr['name']=post('name');
        $arr['email']=post('email');

        $mysql=MySqlPDOD::getObj();

        if($mysql->Update("dfz_userinfo",$arr,"username='{$username}'")){

            $data['code']=0;
            $data['msg']=urlencode("保存成功");//中文urlencode一下
            echo urldecode(json_encode($data));
        } else{
            $data['code']=1;
            $data['msg']=urlencode("保存失败");//中文urlencode一下
            echo urldecode(json_encode($data));

        }
    }
    //订餐系统前台用户中心修改密码逻辑处理
    public function saveNewPwd()
    {
        $username=post('username');
        $pwd=post('pwd');
        $pwd2=post('pwd2');

//原密码
        $pwd=md5($pwd);

//新密码
        $arr['password']=md5($pwd2);


        if($pwd&&$pwd2){
            $mysql=MySqlPDOD::GetObj();
            $sql="select * from dfz_user where username='{$username}' and password='{$pwd}'";
            $row=$mysql->bindSql($sql);
            if($row!="对不起没有数据"){
                if($mysql->Update("dfz_user",$arr,"username='{$username}'")){
                    $data['code']=0;
                    $data['msg']=urlencode("修改成功");//中文urlencode一下
                    echo urldecode(json_encode($data));
                }else{
                    $data['code']=1;
                    $data['msg']=urlencode("修改失败");//中文urlencode一下
                    echo urldecode(json_encode($data));
                }
            }else{
                $data['code']=1;
                $data['msg']=urlencode("原密码错误");//中文urlencode一下
                echo urldecode(json_encode($data));
            }
        }else{
            $data['code']=1;
            $data['msg']=urlencode("参数不能为空");//中文urlencode一下
            echo urldecode(json_encode($data));
        }
    }

}