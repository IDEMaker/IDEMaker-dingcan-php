<?php
use LIB\models;
class Shopcm extends models
{     //订餐系统商家后台我的店铺逻辑处理
      public function index()
      {
          if(isGet())
          {   //接收shopid查询数据
              $shopid=getSessions("shopmerId");

              $mysql=MySqlD::GetObj();

              $data['data']=$mysql->SelectOne("dfz_shop","*","shopId=$shopid");
              $data['city']=$mysql->SelectOne("dfz_city","CONCAT(province,'-',city) as city","id=".$data['data']['cityId']);
              return $data;

          }else if(isPost())
          {
              $post=post();

              $uploadFiles="";

              $password="";

              if($post['isShopIcon']==1)
              {    //判断是否修改图片
                  $upload=new UploadM();

                  $uploadFiles[]=$upload->Up("myFile","upload/shop_image");

                  //生成缩略图
                  if(is_array($uploadFiles)&&$uploadFiles){

                      foreach($uploadFiles as $key=>$uploadFile){

                          thumb(APP_PATH."/".$uploadFile['path_name'],APP_PATH."/upload/shop_image_thumb/".date("Y-m-d")."/".$uploadFile['name'],200,200);
                      }
                  }
              }
              if($post['isShopPass']==1)
              {   //判断是否修改密码
                  $password=md5($post['password']);
              }
              $mysql=MySqlD::GetObj();
              if(empty($uploadFiles)&&empty($password))
              {   //业务处理只修改店铺
                  $res=$this->shop_hand($mysql,$post);

              }else if(!empty($uploadFiles)&&empty($password))
              {   //业务处理修改店铺跟文件
                  $post['shopIcon']=$uploadFiles[0]['path_name'];

                  $post['shopIconOgl']="upload/shop_image_thumb/".date("Y-m-d")."/".$uploadFiles[0]['name'];

                  $res=$this->shop_hand($mysql,$post);

              }else if(empty($uploadFiles)&&!empty($password))
              {   //业务处理修改店铺跟密码
                  if($this->shop_hand($mysql,$post))
                  {
                      $res=$mysql->Update("dfz_admin",['password'=>$password],"username like '%".$post['shopId']."%'");
                  }
              }else{
                  //业务处理修改店铺文件和密码
                  $post['shopIcon']=$uploadFiles[0]['path_name'];

                  $post['shopIconOgl']="upload/shop_image_thumb/".date("Y-m-d")."/".$uploadFiles[0]['name'];

                  if($this->shop_hand($mysql,$post))
                  {
                      $res=$mysql->Update("dfz_admin",['password'=>$password],"username like '%".$post['shopId']."%'");
                  }
              }
              return $res;

          }

      }
    //订餐系统商家后台店铺修改公共逻辑部分
    public function shop_hand($mysql,$post)
    {
        $city['province']=post("province");

        $city['city']=post("city");

        $mysql=MySqlD::GetObj();

        $res=$mysql->SelectOne("dfz_city","id","province="."'".$city['province']."' and "."city="."'".$city['city']."'");

        if(empty($res))
        {   //添加城市
            $id=$mysql->InsertOne("dfz_city",$city);
        }else{
            $id=$res['id']; //获取城市id
        }
        $post['cityId']=$id;

        unset($post['province']);

        unset($post['city']);

        unset($post['isShopIcon']);

        unset($post['isShopPass']);

        unset($post['password']);

        return $res=$mysql->Update("dfz_shop",$post,"shopId=".$post['shopId']);
    }

}