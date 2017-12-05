<?php
//异常处理方法
function EXC($exec,$code,$path,$line)
{   
	    try{

            throw new Exception($exec,$code);

	    }catch(Exception $e){
                $exec=array();
                $exec['mes']=$e->getMessage();
                //try catch 封装无法得到 真实的文件路径 以及行号 所以 需要接收传值
                // $exec['file']=$e->getFile();
                // $exec['line']=$e->getLine();
                $exec['code']=$e->getCode();
                $str="";
                $str.="错误类型:".$exec['mes']."<br>";
                $str.="错误文件:".$path."<br>";
                $str.="错误行号:".$line."<br>";
                $str.="错误代号:".$exec['code']."<br>";
                echo $str;
	    } 
}

//防止sql注入方法
function PRESql($where)
{   
    $where=strtolower($where);

    $preg='#[or,and,;or,;and]+\s+[\d]+[>,=,<]+[\d]+|[;]+#';

    preg_match_all($preg,$where,$res);
 

    if(!empty($res[0]))
    {    $str="";
         foreach ($res[0] as $key => $value) {
               
                  $str.=$value." ";
                  
         }
          
          $str=rtrim($str," ");

          $vallen=strrpos($where,$str);
           
          $where=substr($where,0,$vallen);
          
          return $where;

    }
    return $where;

}
//防止Xss攻击方法

function PREXss($data)
{
    if(count($data) == count($data,1)){ 
        
         foreach($data as $key=>$val)
         {
                $preg='#[<,>]+#';

                if(preg_match_all($preg,$val,$res)!=0)
                {
                  $data[$key]=htmlspecialchars($val);
                }
                
         }

         return $data;
         
    }else{  
          foreach($data as $k=>$v)
         {
                $preg='#[<,>]+#';

                foreach($v as $kk=>$vv)
                {     
                       if(preg_match_all($preg,$vv,$res)!=0)
                        {
                          $data[$k][$kk]=htmlspecialchars($vv);
                        }
                }
              
                
         } 

          return $data;
    }
}
    //var_dump打印
    function dump($data)
    {     echo "<pre>";
          var_dump($data);
          echo "</pre>";die;
    }
    //print_r()打印
    function P($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";die;
    }
    //get 获取
    function get($name)
    {
          return empty($_GET[$name])?"":$_GET[$name];
    }
    //post获取
    function post($name="")
    {
        if(empty($name))
        {
            return empty($_POST)?"":$_POST;
        }else{
            return empty($_POST[$name])?"":$_POST[$name];
        }
    }
    //ip获取
    function getIp(){
        $onlineip='';
        if(getenv('HTTP_CLIENT_IP')&&strcasecmp(getenv('HTTP_CLIENT_IP'),'unknown')){
            $onlineip=getenv('HTTP_CLIENT_IP');
        } elseif(getenv('HTTP_X_FORWARDED_FOR')&&strcasecmp(getenv('HTTP_X_FORWARDED_FOR'),'unknown')){
            $onlineip=getenv('HTTP_X_FORWARDED_FOR');
        } elseif(getenv('REMOTE_ADDR')&&strcasecmp(getenv('REMOTE_ADDR'),'unknown')){
            $onlineip=getenv('REMOTE_ADDR');
        } elseif(isset($_SERVER['REMOTE_ADDR'])&&$_SERVER['REMOTE_ADDR']&&strcasecmp($_SERVER['REMOTE_ADDR'],'unknown')){
            $onlineip=$_SERVER['REMOTE_ADDR'];
        }
        return $onlineip;
    }
    //isGet请求
    function isGet()
    {
         if($_SERVER['REQUEST_METHOD']=="GET")
         {
             return true;
         }else{
             return false;
         }
    }
    //isPost请求
    function isPost()
    {
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            return true;
        }else{
            return false;
        }
    }
    function page($table,$pagenum,$p=1,$where=1,$config="",$issql=false,$Sqll="",$sqlll="")
    {
        $mysql=MySqlPDOD::GetObj();
        $count=$mysql->count($table,$where,$issql,$sqlll);

        $page=new \Page($count,$pagenum);
        if(empty($config))
        {
            $config=array(
                'left'=>'上一页',
                'right'=>'下一页'
            );
        }
        $page->setConfig($config);
        $data['page']=$page->showAjax();
        $data['data']=$mysql->pageData($table,$pagenum,$p,$where,$issql,$Sqll);
        $data['count']=$count;
        return $data;
    }

?>