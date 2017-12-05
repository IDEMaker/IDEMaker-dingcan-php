<?php
use LIB\models;
class Goodscm extends models{
    //订餐系统商家后台添加逻辑处理
    public function index()
    {
        if(isGet())
        {
            $mysql=MySqlD::GetObj();
            //查询cate表中分类名称，商户名称和负分类id

            $data['cate']=$mysql->SelectAll("dfz_cate","cName,adminName,id","adminName='".getSessions("adminmerName")."'");

            return $data;

        }else if(isPost())
        {   $mysql=MySqlPDOD::GetObj();

            $id=$mysql->SelectOne("dfz_shop","cityId","shopId=".getSessions('shopmerId'));

            $id=$id['cityId'];

            $upload=new UploadM();

            $uploadFiles[]=$upload->Up("myFile","upload/goods_image");

            //生成缩略图
            if(is_array($uploadFiles)&&$uploadFiles){

                foreach($uploadFiles as $key=>$uploadFile){

                    thumb(APP_PATH."/".$uploadFile['path_name'],APP_PATH."/upload/goods_image_thumb_50/".date("Y-m-d")."/".$uploadFile['name'],50,50);

                    thumb(APP_PATH."/".$uploadFile['path_name'],APP_PATH."/upload/goods_image_thumb_220/".date("Y-m-d")."/".$uploadFile['name'],220,220);
                }
            }
            $post=post();

            unset($post['province']);

            unset($post['city']);

            $post['pSn']=getMilliSeconds(); //得到商品唯一编号

            $post['adminName']=getSessions('adminmerName');//商品添加商户名称

            $post['shopId']=getSessions("shopmerId");

            $post['icon']=date("Y-m-d")."/".$uploadFiles[0]['name'];//商品图片缩略图

            $post['iconOgl']=$uploadFiles[0]['path_name']; //商品图片原图

            $post['cityId']=$id;//城市id

            $post['pubTime']=time(); //商品创建时间

            return $mysql->InsertOne("dfz_pro",$post);
        }

    }
    //订餐系统商家后台商品展示分页逻辑处理
    public function goods_list()
    {
         $sqll="select p.id,p.pSn,p.pName,p.pNum,p.priceB,p.icon,FROM_UNIXTIME(p.pubTime,'%Y-%m-%d %H:%i:%S') as pubTime,p.shopId,CONCAT(c.cName,'-',c.adminName) as cateName from dfz_pro as p join dfz_cate c on p.pCateId=c.id";

         $sqlll="select count(*) as num from dfz_pro as p join dfz_cate c on p.pCateId=c.id";

        $search=empty(get("search"))?"":get("search");

        if(empty($search)){

            $where="1 and p.shopId=".getSessions("shopmerId");

        }else{

            $where="(p.pSn = '$search' or p.pName like '%$search%' or p.pNum = '$search' or p.priceB = '$search') and p.shopId=".getSessions("shopmerId");
        }
          //使用原生sql语句进行查询
         return page("dfz_pro","5",empty(get('p'))?1:get('p'),$where,$config="",$issql=true,$sqll,$sqlll);
    }
    //订餐系统商家后台商品修改逻辑处理
    public function goods_edit()
    {
        if(isGet())
        {
            $id=get("id");

            $psn=get("pSn");

            $mysql=MySqlD::GetObj();

            $name=$mysql->SelectOne("dfz_pro","adminName","id=".$id);

            if($name['adminName']!="shop".getSessions('shopmerId'))
            {
                return 2;//禁止非法查询
            }
            $data['data']=$mysql->SelectOne("dfz_pro","id,pSn,pName,pNum,priceB,icon,pubTime,pubTime,shopId,pCateId,isHot,cityId","id=".$id." and pSn="."'".$psn."'");

            $data['city']=$mysql->SelectOne("dfz_city","CONCAT(province,'-',city) as city","id=".$data['data']['cityId']);

            //查询cate表中分类名称，商户名称和负分类id

            $data['cate']=$mysql->SelectAll("dfz_cate","cName,adminName,id","adminName='".getSessions("adminmerName")."'");

            return $data;
        }else if(isPost())
        {    $mysql=MySqlD::GetObj();

            $name=$mysql->SelectOne("dfz_pro","adminName","id=".post('id'));

            if($name['adminName']!="shop".getSessions('shopmerId'))
            {
                return 2;//禁止非法修改
            }
             if(post("isGoodsIcon")==1)
             {

                 $id=$mysql->SelectOne("dfz_shop","cityId","shopId=".getSessions('shopmerId'));

                 $id=$id['cityId'];

                 $upload=new UploadM();

                 $uploadFiles[]=$upload->Up("myFile","upload/goods_image");

                 //生成缩略图
                 if(is_array($uploadFiles)&&$uploadFiles){

                     foreach($uploadFiles as $key=>$uploadFile){

                         thumb(APP_PATH."/".$uploadFile['path_name'],APP_PATH."/upload/goods_image_thumb_50/".date("Y-m-d")."/".$uploadFile['name'],50,50);

                         thumb(APP_PATH."/".$uploadFile['path_name'],APP_PATH."/upload/goods_image_thumb_220/".date("Y-m-d")."/".$uploadFile['name'],220,220);
                     }
                 }
                 $post=post();

                 unset($post['isGoodsIcon']);

                 $post['pSn']=getMilliSeconds(); //得到商品唯一编号

                 $post['adminName']=getSessions('adminmerName');//商品添加商户名称

                 $post['icon']=date("Y-m-d")."/".$uploadFiles[0]['name'];//商品图片缩略图

                 $post['iconOgl']=$uploadFiles[0]['path_name']; //商品图片原图

                 $post['cityId']=$id;//城市id

                 $post['shopId']=getSessions("shopmerId");//店铺id

                 $post['pubTime']=time(); //商品创建时间

                 $edid=post("id");

                 if($mysql->Update("dfz_pro",$post,"id=".$edid))
                 {
                     return 1;
                 }else{
                     return 0;
                 }
             }else{

                 $id=$mysql->SelectOne("dfz_shop","cityId","shopId=".getSessions('shopmerId'));

                 $id=$id['cityId'];

                 $post=post();

                 unset($post['isGoodsIcon']);

                 $post['pSn']=getMilliSeconds(); //得到商品唯一编号

                 $post['adminName']=getSessions('adminmerName');//商品添加商户名称

                 $post['cityId']=$id;//城市id

                 $post['shopId']=getSessions("shopmerId");//店铺id

                 $post['pubTime']=time(); //商品创建时间

                 $edid=post("id");

                 if($mysql->Update("dfz_pro",$post,"id=".$edid))
                 {
                     return 1;
                 }else{
                     return 0;
                 }
             }
        }
    }
    //订餐系统商家后台商品删除逻辑处理
    public function goods_delete()
    {
          $id=get("id");

          $mysql=MySqlD::GetObj();

        $name=$mysql->SelectOne("dfz_pro","adminName","id=".$id);

        if($name['adminName']!="shop".getSessions('shopmerId'))
        {
            return 2;//禁止非法删除
        }
          if($mysql->DeleteOne("dfz_pro","id=".$id))
          {
              return 1;
          }else{
              return 0;
          }
    }

}