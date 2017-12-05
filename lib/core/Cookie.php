<?php
/**
 * Created by PhpStorm.
 * User: 康
 * Date: 2017/10/12
 * Time: 19:58
 */
    //设置加密cookie
    function setCookies($name,$data,$time=0,$path="/")
    {
        $str=serialize($data);
        $new=base64_encode(base64_encode($str)."KANGZ");
        setcookie($name,$new,$time,$path);
    }
    //获取解密cookie
    function getCookies($name)
    {
        $new=unserialize(base64_decode(str_replace("KANGZ","",base64_decode(empty($_COOKIE[$name])?"":$_COOKIE[$name]))));
        return  $new;
    }
    //删除或销毁cookie
    function clearCookies($name){
        setcookie($name,'',time()-3600,"/");
    }
?>