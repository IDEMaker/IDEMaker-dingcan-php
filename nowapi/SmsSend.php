<?php
function nowapi_call($a_parm,$config){
    if(!is_array($a_parm)){
        return false;
    }
    //combinations

    $num=substr(time(),-1);
    $str="12345678910";
    $st=substr(rand($str,strlen($str)),-3);
    $var=urlencode("code=".$va=$var=$num.=$st);
    $va=md5($va);
    setSessions("send_code",$va,60);

    $a_parm['param']=$var;

    $a_parm['app']='sms.send';

    $a_parm['tempid']=$config['tempid'];

    $a_parm['appkey']=$config['appkey'];

    $a_parm['sign']=$config['sign'];

    $a_parm['format']='json';

    $a_parm['format']=empty($a_parm['format'])?'json':$a_parm['format'];

    $apiurl=empty($a_parm['apiurl'])?'http://api.k780.com/?':$a_parm['apiurl'].'/?';
    unset($a_parm['apiurl']);
    foreach($a_parm as $k=>$v){
        $apiurl.=$k.'='.$v.'&';
    }
    $apiurl=substr($apiurl,0,-1);
    if(!$callapi=file_get_contents($apiurl)){
        return false;
    }
    //format
    if($a_parm['format']=='base64'){
        $a_cdata=unserialize(base64_decode($callapi));
    }elseif($a_parm['format']=='json'){
        if(!$a_cdata=json_decode($callapi,true)){
            return false;
        }
    }else{
        return false;
    }
    //array
    if($a_cdata['success']!='1'){
        echo $a_cdata['msgid'].' '.$a_cdata['msg'];
        return false;
    }
    return $a_cdata['result'];
}