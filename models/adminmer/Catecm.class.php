<?php
use LIB\models;
class Catecm extends models{
    //订餐系统商家后台分类添加逻辑处理
    public function index()
    {
        if(empty(post('cName'))||empty(post('weight'))){
            return 2;//分类名称或者重权不能为空
        }
        $arr=post();

        $adminName=getSessions('adminmerName');

        $arr['adminName']=$adminName;

        $mysql=MySqlD::GetObj();

        $data=$mysql->SelectOne("dfz_cate","cName","adminName="."'".$adminName."'"." && cName="."'".post('cName')."'");
        if(!empty($data))
        {
                return 3;//该商户下有此分类
        }else{
            if($mysql->InsertOne("dfz_cate",$arr))
            {
                return 1;//分类添加成功
            }else{
                return 0;//分类添加失败
            }
        }

    }
    //订餐系统商家后台分页搜索展示逻辑处理
    public function cate_list()
    {    $search=empty(get("search"))?"":get("search");

        if(empty($search)){

            $where="adminName="."'shop".getSessions("shopmerId")."'";

        }else{

            $where="(cName like '%$search%' or weight = '$search')"." and adminName="."'shop".getSessions("shopmerId")."'";
        }
        //使用分页助手函数
         return page("dfz_cate",10,empty(get("p"))?1:get('p'),$where);
    }
    //订餐系统商家后台删除逻辑处理
    public function cate_delete()
    {    $id=get("cId");

         $mysql=MySqlD::GetObj();

         $res=$mysql->SelectAll("dfz_pro","*","pCateId=$id");

         if($res=="对不起没有数据")
         {
             $name=$mysql->SelectOne("dfz_cate","adminName","id=".$id);

             if($name['adminName']!="shop".getSessions('shopmerId'))
             {
                 return 3;//禁止非法删除
             }
               if($mysql->DeleteOne("dfz_cate","id=$id"))
               {
                    return 1;//分类删除成功
               }else{
                    return 0;//分类删除失败
               }
         }else{
             return 2;  //分类下有商品
         }

    }
    //订餐系统商家后台分类修改逻辑处理
    public function cate_edit()
    {
             if(isGet())
             {
                 $id=get("cId");

                 $mysql=MySqlD::GetObj();

                 $name=$mysql->SelectOne("dfz_cate","adminName","id=".$id);

                 if($name['adminName']!="shop".getSessions('shopmerId'))
                 {
                     return 2;//禁止非法查询
                 }

                 $data['user']=$mysql->SelectAll("dfz_admin","username",1,1000);

                 $data['data']=$mysql->SelectOne("dfz_cate","*","id=$id");

                 return $data;

             }else if(isPost()){

                     $post=post();

                     $mysql=MySqlD::GetObj();

                     $name=$mysql->SelectOne("dfz_cate","adminName","id=".$post['id']);

                     if($name['adminName']!="shop".getSessions('shopmerId'))
                     {
                          return 2;//禁止非法修改
                     }

                     if($mysql->Update("dfz_cate",$post,"id=".$post['id']))
                     {
                         return 1;//分类修改成功
                     }else{
                         return 0; //分类修改失败
                     }

             }
    }
}