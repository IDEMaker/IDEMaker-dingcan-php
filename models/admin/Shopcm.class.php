<?php
use LIB\models;
class Shopcm extends models{
    //订餐系统后台入驻店铺逻辑处理
    public function index()
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
        $post=post();
        unset($post['province']);

        unset($post['city']);

        $arr=$post;
        //查询最大店铺id 生成shopId
        $sql="select max(shopId) as m from dfz_shop";

        $mysql=MySqlD::GetObj();

        $row=$mysql->bindSql($sql);

        if($row&&$row['m']>0){

            $arr['shopId']=$row['m']+1;

        }else{

            $arr['shopId']=1000;
        }

        //文件上传
        $upload=new UploadM();

        $uploadFiles[]=$upload->Up("myFile","upload/shop_image");

        //生成缩略图
        if(is_array($uploadFiles)&&$uploadFiles){

            foreach($uploadFiles as $key=>$uploadFile){

                thumb(APP_PATH."/".$uploadFile['path_name'],APP_PATH."/upload/shop_image_thumb/".date("Y-m-d")."/".$uploadFile['name'],200,200);

            }
        }
        $mes=array();

        //查询是否存在此店铺
        $sql="select * from dfz_shop where shopId='".$arr['shopId']."'";

        $row=$mysql->bindSql($sql);

        if(is_array($row))
        {
            $mes['mes']=0;

             return $mes;  //商户存在
        }
        //实现店铺添加自动生成商户号
        if($uploadFiles){

            $user="shop".$arr['shopId'];

            $pwd=md5($arr['shopId']);

            $arr['shopIcon']=$uploadFiles[0]['path_name'];

            $arr['shopIconOgl']="upload/shop_image_thumb/".date("Y-m-d")."/".$uploadFiles[0]['name'];

            $arr['adminName']=$user;

            $arr['cityId']=$id;

            $res=$mysql->InsertOne("dfz_shop",$arr);

        }
        //商户号入库处理
        if($res){
            $data=array(
                "username"=>$user,

                "password"=>$pwd,

                "shopPhone"=>$arr['shopPhone'],
            );
            if($mysql->InsertOne("dfz_admin",$data))
            {   $mes['mes']=1;  //商户添加成功

                $data['password']=$arr['shopId'];

                $mes['data']=$data;

                return $mes;
            }

        }else{
            $mes['mes']=2; //商户添加失败

            return $mes;

        }
        return $mes;
    }
    //订餐系统后台数据搜索分页逻辑处理
    public function shop_list()
    {       //接收get参数生成查询条件
            $search=empty(get("search"))?"":get("search");
            if(empty($search)){
                $where="1 and shopId!=1000";
            }else{
                $where="shopName like '%$search%' or shopId like '%$search%' or adminName like '%$search%'and shopId!=1000";
            }
            if($search==1)
            {
                 $where="1 and shopId!=1000";
            }
            if($search=="运营")
            {
                $where="shopState=1 and shopId!=1000";
            }else if($search=="休息")
            {
                $where="shopState=0 and shopId!=1000";
            }
            if($search=="已审核")
            {
                $where="isAudit=1 and shopId!=1000";
            }else if($search=="未审核")
            {
                $where="isAudit=0 and shopId!=1000";
            }
           //使用分页助手函数，实现分页数据查询
            return page("dfz_shop",5,empty(get('p'))?1:get('p'),$where);
    }
    //订餐系统后台店铺删除逻辑处理
    public function shop_delete()
    {       //接收shopid参数
            $shopid=get("shopId");

            $mysql=MySqlD::GetObj();

            //删除店铺数据
            $res=$mysql->DeleteOne("dfz_shop","shopId=".$shopid);

            if($res)
            { //删除店铺管理商户
               $res=$mysql->DeleteOne("dfz_admin","username like '%$shopid%'");
            }
            if($res)
            {
                 return 1;
            }else{
                 return 0;
            }
    }
    public function shop_edit()
    {
           if(isGet())
           {   //接收shopid查询数据
               $shopid=get("shopId");

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
    //订餐系统后台店铺修改公共逻辑部分
    public function shop_hand($mysql,$post)
    {   $city['province']=post("province");

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
    //订餐系统后台提现申请查询请求逻辑处理
    public function withBalance()
    {    $mysql=MySqlPDOD::GetObj();
        if(isGet())
        {
            $Sqll="SELECT `id`,`shopId`,`adminName`,`balance`,`withBalance`,`status`,`withAccount`,FROM_UNIXTIME(createTime,'%Y-%m-%d %H:%i:%S') as createTime FROM  dfz_shopinfo ";
            $sqlll="SELECT count(*) as num FROM  dfz_shopinfo ";

            if(empty(get('search')))
            {
                $where="status=0";
            }else{
                $search=get("search");
                $where=" (withAccount='$search' or adminName='$search' or shopId='$search') and status=0";
            }
            return page("dfz_shopinfo","10",empty(get('p'))?1:get('p'),$where,$config="",$issql=true,$Sqll,$sqlll);

        }else if(isPost())
        {
            $id=post("id");
             $sql="SELECT `id`,`shopId`,`adminName`,`balance`,`withBalance`,`status`,`withAccount`,FROM_UNIXTIME(createTime,'%Y-%m-%d %H:%i:%S') as createTime FROM  dfz_shopinfo where id=".$id;
            $data=$mysql->bindSql($sql);
            $myData=$mysql->SelectOne("dfz_shop",'freezebalance',"shopId='".$data[0]['shopid']."'");
            $freezeB=floatval($myData['freezebalance'])-floatval(abs(post("balance")));
            if($freezeB<0)
            {
                 return 0;//该账户余额参数错误
            }else{
                $ar['freezebalance']=$freezeB;
                if($mysql->Update("dfz_shopinfo",['status'=>1],"id=".$id))
                {
                      if($mysql->Update("dfz_shop",$ar,"shopId='".$data[0]['shopid']."'"))
                      {
                          $arr['time']=date("Y-m-d H:i:s");
                          $arr['user']= getSessions("adminName");
                          $arr['action']="支付宝账户为".$data[0]["withaccount"]."用户申请提现".abs($data[0]['balance'])."元,审核成功".",提现后余额为".$data[0]['withbalance']."元".",提现时间为".date('Y-m-d H:i:s',strtotime($data[0]['createtime']));
                          $arr['status']="1";
                          $log=new Log($arr);
                          $log->generateLog("adminBal");
                          return 1;
                      }
                }

            }



        }

    }
    //订餐系统后台提现记录逻辑查询
    public function mywithBalance()
    {

        $Sqll="SELECT `shopId`,`adminName`,`balance`,`withBalance`,`status`,`withAccount`,FROM_UNIXTIME(createTime,'%Y-%m-%d %H:%i:%S') as createTime FROM  dfz_shopinfo ";
        $sqlll="SELECT count(*) as num FROM  dfz_shopinfo ";
        //条件为空时
        if(empty(get('search')))
        {
            $where="1 order by createtime desc";
        }else{
            $search=get('search');
            //匹配是否包含年
            preg_match("#(.*)年#",$search,$res);
            if(empty($res[1]))
            {
                $where=" withAccount ='$search' or balance='$search'  or adminName='$search' or shopId='$search' order by createtime desc";
                //审核状态
                if(get('search')=="待审核")
                {
                    $where=" status=0"." order by createtime desc";
                }
                if(get('search')=="已审核")
                {
                    $where=" status=1"." order by createtime desc";
                }
            }else{
                //年份查询当前的日期
                $time=$res[1];
                //最大日期 当前日期加+1 等于 加1年  如 2017+1=2018
                $start=strtotime(($time+1)."-01-01");
                $end=strtotime($time."-01-01");
                //年份搜索条件
                $where=" (createtime >= $end and  createtime <=$start )"." order by createtime desc";
            }

        }
        $data=page("dfz_shop",10,empty(get('p'))?1:get('p'),$where,$config="",$issql=true,$Sqll,$sqlll);
        $balance=0;
        //循环整理提现余额
        if(!empty($data['data']))
        {
            foreach($data['data'] as $key=>$val)
            {
                if($val['status']==1)
                {
                    $balance+=$val['balance'];
                }
            }
            $data['balance']=$balance;
        }

        if($data=="对不起没有数据")
        {
            $data=0;
        }

        return $data;

    }
    //订餐系统后台我的店铺详情请求
    public function myshop()
    {
        if(isGet())
        {   //接收shopid查询数据
            $shopid=getSessions("shopId");

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
                $res=$this->myshop_hand($mysql,$post);

            }else if(!empty($uploadFiles)&&empty($password))
            {   //业务处理修改店铺跟文件
                $post['shopIcon']=$uploadFiles[0]['path_name'];

                $post['shopIconOgl']="upload/shop_image_thumb/".date("Y-m-d")."/".$uploadFiles[0]['name'];

                $res=$this->myshop_hand($mysql,$post);

            }else if(empty($uploadFiles)&&!empty($password))
            {   //业务处理修改店铺跟密码

                if($this->myshop_hand($mysql,$post))
                {  
                    $res=$mysql->Update("dfz_admin",['password'=>$password],"username= '".getSessions('adminName')."'");
                }
            }else{
                //业务处理修改店铺文件和密码
                $post['shopIcon']=$uploadFiles[0]['path_name'];

                $post['shopIconOgl']="upload/shop_image_thumb/".date("Y-m-d")."/".$uploadFiles[0]['name'];
                
                if($this->myshop_hand($mysql,$post))
                {
                    $res=$mysql->Update("dfz_admin",['password'=>$password],"username= '".getSessions('adminName')."'");
                }
            }
            return $res;

        }

    }
    //订餐系统后台店铺修改公共逻辑部分
    public function myshop_hand($mysql,$post)
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
    //订餐系统后台余额查询逻辑处理
    public function myBalance()
    {
        $username=getCookies("adminName");

        preg_match('#admin#',$username,$res);
        if(!empty($res))
        {
            $username="admin";
        }

        $mysql=MySqlPDOD::GetObj();

        return $mysql->SelectOne("dfz_shop","balance,freezeBalance","adminName='".$username."'");
    }
    //订餐系统后台申请入驻逻辑处理
    public function shopApply()
    {
        $mysql=MySqlPDOD::GetObj();

        if(isGet())
        {
            $sqll="select id,username,hotelPhone,readStatus,FROM_UNIXTIME(time,'%Y-%m-%d %H:%i:%S') as time from dfz_hotel";

            $sqlll="select count(*) as num from dfz_hotel";

            if(empty(get('search')))
            {
                $where=" readStatus=0";
            }else{
                $search=get('search');
                $where="username='".$search."' and readStatus=0";
            }



            return page("dfz_hotel","10",empty(get('p'))?1:get('p'),$where,$config="",true,$sqll,$sqlll);


        }else if(isPost())
        {
             $id=post('id');
             $data['readStatus']=1;
             if($mysql->Update("dfz_hotel",$data,"id=".$id))
             {
                  $data['code']=1;
                  echo json_encode($data);
             }else{
                 $data['code']=0;
                 echo json_encode($data);
             }
        }
    }
    //订餐系统后台入驻申请详情查看逻辑处理
    public function shopApply_look()
    {
          $mysql=MySqlPDOD::GetObj();

           $id=get('id');

           return $mysql->SelectOne("dfz_hotel","id,hotelName,hotelPhone,hotelLocation,hotelIntroduction,username,FROM_UNIXTIME(time,'%Y-%m-%d %H:%i:%S') as time","id=".$id);

    }
}