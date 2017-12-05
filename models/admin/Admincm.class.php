<?php
use common\My_controller;
class Admincm extends My_controller{
    //订餐系统后台管理员添加逻辑处理
    public function index()
    {
        $mysql=MySqlPDOD::GetObj();
        $arr=post();

        preg_match('#admin#',$arr['username'],$res);

        if(empty($res))
        {
            return 0;//必须包含admin
        }

        $arr['password']=md5($_POST['password']);
        if(empty($arr['username'])||empty($arr['password'])||empty($arr['email'])){
            return 2;//非空验证
        }elseif($mysql->SelectOne("dfz_admin","username","username=".$arr['username'])!="对不起没有数据"){
            return 3;//已存在
        }
        else{
            if($mysql->InsertOne("dfz_admin",$arr)){
               return 1;//成功
            }else{
               return 4;//失败
            }
        }
    }
    //订餐系统后台管理员列表逻辑处理
    public function admin_list()
    {
        if(isGet())
        {
            $sqll="select id,username,email from dfz_admin";

            $sqlll="select count(*) as num from dfz_admin";

            $where=" username like '%admin%'";

            return page("dfz_admin","10",empty(get('p'))?1:get('p'),$where,$config="",true,$sqll,$sqlll);

        }

    }
    //订餐系统后台管理员修改逻辑处理
    public function admin_edit()
    {
        $mysql=MySqlPDOD::GetObj();
        if(isGet())
        {
            $id=get("id");
            return $mysql->SelectOne("dfz_admin","id,username,email,password,shopPhone","id=".$id);
        }else if(isPost())
        {
            $data=post();
            $data['password']=md5($data['password']);
            if($mysql->Update("dfz_admin",$data,"id=".$data['id']))
            {
                return 1;
            }else{
                return 0;
            }
        }
    }
    //订餐系统后台管理员删除逻辑处理
    public function admin_delete()
    {
        $id=get('id');

        $mysql=MySqlPDOD::GetObj();
        if($mysql->DeleteOne("dfz_admin","id=".$id))
        {
              return 1;//成功
        }else{
              return 0;//失败
        }

    }
}