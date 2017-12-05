<?php
use LIB\models;
class Logincm extends models
{     //订餐系统后台登录逻辑处理
      public function do_login()
      {
          $username=post('username');

          $username=addslashes($username);

          $password=md5(post('password'));

          $verify=post('verify');

          $verify1=Verify::getverifys();

          $autoFlag=post('autoFlag');

          if($verify==$verify1){

              $sql="select a.*,b.shopId,b.isAudit from dfz_admin as a join dfz_shop as b where a.username='{$username}' and a.password='{$password}' and b.adminName='{$username}'";

              $mysql=MySqlD::GetObj();

              $row=$mysql->bindSql($sql);

              preg_match("#admin#",$username,$res);

              if($row=="对不起没有数据")
              {

                  if(empty($res))
                  {
                      return 0;
                  }else{

                      if($data=$mysql->SelectOne("dfz_admin","*","username='".$username."' and password='".$password."'"))
                      {
                           $ro['id']="11";
                           $ro['username']=$data['username'];
                           $ro['shopid']="1000";

                          return $this->log_com($ro,$autoFlag);
                      }else{
                          return 0;
                      }
                  }
              }

                  return $this->log_com($row,$autoFlag);
          }else{
                  return 2;  //验证码错误
          }
      }
      public function log_com($row,$autoFlag)
      {
          if($row){
              //如果选了自动登陆，30天

              if($autoFlag){

                  setCookies("adminId",$row['id'],time()+30*24*3600);

                  setCookies("adminName",$row['username'],time()+30*24*3600);

                  setCookies("shopId",$row['shopid'],time()+30*24*3600);

              }else{//7天
                  setCookies("adminId",$row['id'],time()+7*24*3600);

                  setCookies("adminName",$row['username'],time()+7*24*3600);

                  setCookies("shopId",$row['shopid'],time()+7*24*3600);

              }

              setSessions("adminName",$row['username']);

              setSessions("adminId",$row['id']);

              setSessions('shopId',$row['shopid']);

              return 1; //登录成功

          }else{
              return 0; //登录失败
          }
      }
      //订餐系统后台退出逻辑处理
      public function logout()
      {
              clearSessions("adminName");

              clearSessions("adminId");

              clearSessions("shopId");
      }
}