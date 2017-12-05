<?php
use LIB\models;
class Comsucm extends models{
    //订餐系统后台投诉建议列表逻辑处理
    public function comSu()
    {
         $Sqll="Select username,FROM_UNIXTIME(time,'%Y-%m-%d %H:%i:%S') as time From dfz_advice";

         $sqlll="Select count(*) as num From dfz_advice";

         $where=" ID In (Select Max(ID) From dfz_advice Group By username)";

        return page("dfz_advice","10",empty(get('p'))?1:get('p'),$where,$config="",$issql=true,$Sqll,$sqlll);
    }
    //订餐系统后台用户中心投诉列表查看
    public function comSu_look()
    {
          $mysql=MySqlPDOD::GetObj();
          $sql="Select advice,FROM_UNIXTIME(time,'%Y-%m-%d %H:%i:%S') as time From dfz_advice where username=".get('username');

          return $mysql->bindSql($sql);
    }
}