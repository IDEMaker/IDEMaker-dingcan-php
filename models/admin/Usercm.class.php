<?php
use LIB\models;
class Usercm extends models{
    //订餐系统后台用户展示逻辑处理
      public function user_list()
     {

          $Sqll="select i.id,i.username,i.phone,FROM_UNIXTIME(u.regTime,'%Y-%m-%d %H:%i:%S') as regtime from dfz_user  as u INNER JOIN  dfz_userinfo  as i on u.username=i.username";

          $sqlll="select count(*) as num  from dfz_user  as u INNER JOIN  dfz_userinfo  as i on u.username=i.username";
          $search=empty(get("search"))?"":get("search");

          if(empty($search))
          {
               $where=1;
          }else{
               $where=" i.username ='".get("search")."' or i.phone = '".get('search')."'";
          }
          return page("dfz_userinfo",5,empty(get('p'))?1:get('p'),$where,$config="",$issql=true,$Sqll,$sqlll);

     }
     //订餐系统后台用户修改逻辑请求
    public function user_edit()
    {       $mysql=MySqlPDOD::GetObj();
            if(isGet())
            {
                return $mysql->SelectOne("dfz_userinfo","id,username,name,email,addressDetail,jifen,balance","id=".get('id'));
            }else if(isPost())
            {       $data=$mysql->SelectOne("dfz_userinfo","username,name,email,addressDetail,jifen,balance","id=".post('id'));
                    $balance="";
                    $jifen="";
                    $password="";
                    if(post('isBlack')==1)
                    {
                        if(abs(post('balance')<0)==1)
                        {
                            $balance=floatval($data['balance'])-abs(floatval(post('balance')));
                        }else{

                            $balance=floatval($data['balance'])+abs(floatval(post('balance')));

                         }
                    }
                    if(post('isScore')==1)
                    {
                          if(abs(post('jifen')<0))
                          {
                              $jifen=intval($data['jifen'])-abs(intval(post('jifen')));
                          }else{
                              $jifen=intval($data['jifen'])+abs(intval(post('jifen')));
                              $jifen=$jifen>9999?9999:$jifen;
                          }
                    }
                    if(post('isPwd')==1)
                    {
                          $password=md5(post("password"));
                    }
                    if(!empty($balance))
                    {    $balance=$balance<0?0:$balance;
                         $arr['balance']=$balance;

                         if($mysql->Update("dfz_userinfo",$arr,"id=".post('id')))
                         {
                             if(abs(post('balance')<0)==1)
                             {
                                 $data['time']=date("Y-m-d H:i:s");
                                 $data['user']=getSessions('adminName')."(管理)";
                                 $data['action']="给".$data['username']."用户扣款".abs(floatval(post('balance')))."元".",扣款后余额".$arr['balance']."元";
                                 $data['status']="1";
                                 $log=new Log($data);
                                 $log->generateLog("homeBalrecharge");
                             }else{
                                 $data['time']=date("Y-m-d H:i:s");
                                 $data['user']=getSessions('adminName')."(管理)";
                                 $data['action']="给".$data['username']."用户加款".abs(floatval(post('balance')))."元".",加款后余额".$arr['balance']."元";
                                 $data['status']="1";
                                 $log=new Log($data);
                                 $log->generateLog("homeBalrecharge");
                             }

                         }
                    }
                    if(!empty($jifen))
                    {    $jifen=$jifen<0?0:$jifen;
                         $arr['jifen']=$jifen;

                         if($mysql->Update("dfz_userinfo",$arr,"id=".post('id')))
                         {
                             if(abs(post('jifen')<0))
                             {
                                 $data['time']=date("Y-m-d H:i:s");
                                 $data['user']=getSessions('adminName')."(管理)";
                                 $data['action']="给".$data['username']."用户扣除积分".intval(post('jifen'))."个".",扣除后积分".$arr['jifen']."个";
                                 $data['status']="1";
                                 $log=new Log($data);
                                 $log->generateLog("homejifenrecharge");
                             }else{
                                 $data['time']=date("Y-m-d H:i:s");
                                 $data['user']=getSessions('adminName')."(管理)";
                                 $data['action']="给".$data['username']."用户增加积分".intval(post('jifen'))."个".",增加后积分".$arr['jifen']."个";
                                 $data['status']="1";
                                 $log=new Log($data);
                                 $log->generateLog("homejifenrecharge");
                             }
                         }
                    }
                    if(!empty($password))
                    {
                        $arr['password']=$password;
                        $mysql->Update("dfz_user",$arr,"username=".$data['username']);
                    }
                    return true;

            }

    }
    //订餐系统后台删除用户逻辑处理
    public function user_delete()
    {
        $username=get("username");
        $mysql=MySqlPDOD::GetObj();
        if($mysql->DeleteOne("dfz_userinfo","username='".$username."'"))
        {
             $mysql->DeleteOne("dfz_user","username='".$username."'");
        }
        return true;
    }
}