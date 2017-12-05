<?php
use LIB\models;
class Logincm extends models
{     //订餐系统商家后台登录逻辑处理
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


              if($row=="对不起没有数据")
              {
                  return 0; //没有商户
              }
              if($row['isaudit']==0)
              {
                  return 3; //商户未审核
              }
              if($row){
                  //如果选了自动登陆，30天
                  if($autoFlag){
                      setCookies("adminmerId",$row['id'],time()+30*24*3600);

                      setCookies("adminmerName",$row['username'],time()+30*24*3600);

                      setCookies("shopmerId",$row['shopid'],time()+30*24*3600);

                  }else{//7天
                      setCookies("adminmerId",$row['id'],time()+7*24*3600);

                      setCookies("adminmerName",$row['username'],time()+7*24*3600);

                      setCookies("shopmerId",$row['shopid'],time()+7*24*3600);
                  }
                  setSessions("adminmerName",$row['username']);

                  setSessions("adminmerId",$row['id']);

                  setSessions('shopmerId',$row['shopid']);

                  return 1; //登录成功

              }else{

                  return 0; //登录失败
              }
          }else{
                  return 2;  //验证码错误
          }
      }
    //订餐系统后台退出逻辑处理
    public function logout()
    {
        clearSessions("adminmerName");

        clearSessions("adminmerId");

        clearSessions("shopmerId");
    }

}