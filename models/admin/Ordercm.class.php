<?php
use LIB\models;
class Ordercm extends models{
    //订餐系统后台订单综合列表逻辑处理
    public function order_list()
    {

        if(empty(get('search')))
        {
            $where=" 1 order by orderTime desc";
        }else{
            $search=get('search');
            $where="orderId='".$search."' or orderName='$search' or orderPhone='$search'  order by orderTime desc";
        }
        $data=page("dfz_order",10,empty(get('p'))?1:get('p'),$where);

        $balance=0;
        //循环整理订单支付成功余额
        if(!empty($data['data']))
        {
            foreach($data['data'] as $key=>$val)
            {
                if($val['received']==3)
                {
                    $balance+=$val['price'];
                }
            }
            $data['price']=$balance;
        }
        if($data['data']=="")
        {
            return $data=0;
        }
        foreach($data['data'] as $key=>$val)
        {
            $data['data'][$key]['items']=json_decode($val['items'],true);
        }
        return $data;


    }
    //订餐系统后台接单逻辑处理
    public function order_moniter()
    {   if(isGet())
    {
        $shopId=getSessions('shopId');
        if(empty(get('search')))
        {
            $where=" shopId='".$shopId."' and (pay=1 or paymethod=2) and received=0 order by orderTime desc ";
        }else{
            $search=get('search');
            $where=" shopId='".$shopId."' and (pay=1 or paymethod=2) and received=0 and orderId='$search' order by orderTime desc ";
        }
        $sqll="select * from dfz_order ";

        $sqlll="select count(*) as num from dfz_order";

        $data=page("dfz_order","3",empty(get('p'))?1:get('p'),$where,$config="",$issql=true,$sqll,$sqlll);

        if($data['data']=="")
        {
            return $data=0;
        }
        foreach($data['data'] as $key=>$val)
        {
            $data['data'][$key]['items']=json_decode($val['items'],true);
        }
        return $data;
    }else if(isPost())
    {

        $type=post('type');
        $id=post('id');


//接单
        $res="";
        if(!empty($id)&&!empty($type)){
            if($type=="take"){
                $res=takeOrder($id,false);  //传输订单id进行接单处理

                if($res=="0"){
                    $obj = new stdClass();
                    $obj->code="0";
                    $obj->msg=urlencode("接单成功");//中文urlencode一下
                    echo urldecode(json_encode($obj));
                }else if($res=="2") {
                    $obj = new stdClass();
                    $obj->code="2";
                    $obj->msg=urlencode("接单已处理");//中文urlencode一下
                    echo urldecode(json_encode($obj));
                }else if($res=="3"){
                    $obj = new stdClass();
                    $obj->code="3";
                    $obj->msg=urlencode("对不起不能非法操作");//中文urlencode一下
                    echo urldecode(json_encode($obj));
                }else{
                    $obj = new stdClass();
                    $obj->code="1";
                    $obj->msg=urlencode("接单失败");//中文urlencode一下
                    echo urldecode(json_encode($obj));
                }
            }elseif ($type=="cancel") {
                $res=cancelOrder($id,'2',false);
                if($res=="0"){
                    $obj = new stdClass();
                    $obj->code="0";
                    $obj->msg=urlencode("已拒绝");//中文urlencode一下
                    echo urldecode(json_encode($obj));
                }else if($res=="2"){
                    $obj = new stdClass();
                    $obj->code="2";
                    $obj->msg=urlencode("订单已处理");//中文urlencode一下
                    echo urldecode(json_encode($obj));
                }else if($res=="3"){
                    $obj = new stdClass();
                    $obj->code="3";
                    $obj->msg=urlencode("对不起不能非法操作");//中文urlencode一下
                    echo urldecode(json_encode($obj));
                }else{
                    $obj = new stdClass();
                    $obj->code="1";
                    $obj->msg=urlencode("操作失败，请重试");//中文urlencode一下
                    echo urldecode(json_encode($obj));
                }
            }

        }
    }

    }
    //订餐系统后台检查订餐逻辑处理
    public function check_order()
    {
        //按时间排序
        $orderBy="order by orderTime desc ";
        //where条件
        $shopId=$_REQUEST['shopId'];
        $where=$shopId?"where shopId='{$shopId}' and (pay=1 or paymethod=2) and received=0 ":null;
        //得到数据库中所有商品
        $sql="select id from dfz_order {$where} ";
        $mysql=MySqlPDOD::GetObj();
        $rows=$mysql->bindSql($sql);
        if($rows=="对不起没有数据"){
            echo "fail";
        }else{
            echo "success";
        }
    }
    //订餐系统后台查询处理中订单逻辑处理
    public function hand_order()
    {
        if(isGet())
        {
            $shopId=getSessions('shopId');
            if(empty(get('search')))
            {
                $where=" shopId='".$shopId."' and (pay=1 or paymethod=2) and received=1 order by urgeCount desc";
            }else{
                $search=get('search');
                $where=" shopId='".$shopId."' and (pay=1 or paymethod=2) and received=1 and orderId='$search' order by urgeCount desc";
            }
            $sqll="select * from dfz_order ";

            $sqlll="select count(*) as num from dfz_order";

            $data=page("dfz_order","3",empty(get('p'))?1:get('p'),$where,$config="",$issql=true,$sqll,$sqlll);

            if($data['data']=="")
            {
                return $data=0;
            }
            foreach($data['data'] as $key=>$val)
            {
                $data['data'][$key]['items']=json_decode($val['items'],true);
            }
            return $data;
        }else if(isPost())
        {
            $type=post('type');
            $id=post('id');

            $res="";
            if(!empty($id)&&!empty($type)){
                if($type=="handfls"){
                    $res=handOrder($id,false);

                    if($res=="0"){
                        $obj = new stdClass();
                        $obj->code="0";
                        $obj->msg=urlencode("订单处理成功");//中文urlencode一下
                        echo urldecode(json_encode($obj));
                    }else if($res=="2") {
                        $obj = new stdClass();
                        $obj->code="2";
                        $obj->msg=urlencode("接单已完成处理");//中文urlencode一下
                        echo urldecode(json_encode($obj));
                    }else if($res=="3"){
                        $obj = new stdClass();
                        $obj->code="3";
                        $obj->msg=urlencode("对不起不能非法操作");//中文urlencode一下
                        echo urldecode(json_encode($obj));
                    }else{
                        $obj = new stdClass();
                        $obj->code="1";
                        $obj->msg=urlencode("订单处理成功失败");//中文urlencode一下
                        echo urldecode(json_encode($obj));
                    }
                }elseif ($type=="handcancel") {
                    $res=handCancelOrder($id,'2',false);
                    if($res=="0"){
                        $obj = new stdClass();
                        $obj->code="0";
                        $obj->msg=urlencode("未完成订单处理成功");//中文urlencode一下
                        echo urldecode(json_encode($obj));
                    }else if($res=="2"){
                        $obj = new stdClass();
                        $obj->code="2";
                        $obj->msg=urlencode("订单已被处理");//中文urlencode一下
                        echo urldecode(json_encode($obj));
                    }else if($res=="3"){
                        $obj = new stdClass();
                        $obj->code="3";
                        $obj->msg=urlencode("对不起不能非法操作");//中文urlencode一下
                        echo urldecode(json_encode($obj));
                    }else{
                        $obj = new stdClass();
                        $obj->code="1";
                        $obj->msg=urlencode("操作失败，请重试");//中文urlencode一下
                        echo urldecode(json_encode($obj));
                    }
                }

            }
        }

    }
}