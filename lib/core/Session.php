<?php
session_start();
/**
 * Created by PhpStorm.
 * User: 康
 * Date: 2017/10/12
 * Time: 19:58
 */
    //设置session
    function setSessions($name, $data, $expire=36000){
        $session_data = array();
        $session_data['data'] = $data;
        $session_data['expire'] = time()+$expire;
        $_SESSION[$name] = $session_data;
    }
    //获取session
    function getSessions($name){
        if(isset($_SESSION[$name])){
            if($_SESSION[$name]['expire']>time()){
                return $_SESSION[$name]['data'];
            }else{
                clearSessions($name);
            }
        }
        return false;
    }
    //清空session
    function clearSessions($name){
        unset($_SESSION[$name]);
    }