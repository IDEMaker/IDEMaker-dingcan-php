<?php
namespace LIB;
use \LIB\conrule\controabs;
class controller extends controabs
{  //私有基类传值变量数组
    private $vTar=array();
    //受保护的smarty对象
    protected $smarty;
    //构造方法自动加载实例化smarty类
    public function __construct()
    {
        $this->smarty=$smarty=new \Smarty();  //实例化smarty类
        $smarty->debugging = false;          //smarty debug
        $smarty->caching = false;            //smarty 开启缓存
        $smarty->cache_lifetime = 120;       //smarty 缓存有效时间
        $smarty->setTemplateDir(APP_PVDP);   //smarty 视图模板路径
        $smarty->compile_dir =APP_PATH."/runtime/templates_c";  //smarty 模板编译路径
        $smarty->cache_dir = APP_PATH."/runtime/cache";          //smarty 模板缓存目录
        $smarty->config_dir =APP_PATH."/configs";                 //smarty 配置目录
    }
    //基类不带提示跳转方法
    protected function success($url)
    {
         $url=explode("/",$url);
          if(count($url)==2)
          {
              array_unshift($url,$GLOBALS['APP_M']);
          }
        $GLOBALS['APP_M']=$url[0];
        $GLOBALS['APP_C']=$url[1];
        $GLOBALS['APP_A']=$url[2];
        header("location:?m=$GLOBALS[APP_M]&c=$GLOBALS[APP_C]&a=$GLOBALS[APP_A]");

    }
    //基类带提示跳转方法
    protected function alert($message,$url){
        $url=explode("/",$url);
        if(count($url)==2)
        {
            array_unshift($url,$GLOBALS['APP_M']);
        }
        $GLOBALS['APP_M']=$url[0];
        $GLOBALS['APP_C']=$url[1];
        $GLOBALS['APP_A']=$url[2];
        echo "<script>alert('$message');location.href='?m=$GLOBALS[APP_M]&c=$GLOBALS[APP_C]&a=$GLOBALS[APP_A]'</script>";
    }
    //基类视图跳转方法
    protected function display($url=false)
    {   if($url==false)
        {
            $url=strtolower($GLOBALS['APP_C']);
        }
        if(file_exists($PATH=APP_PATH."/".APP_PVDP."/".$GLOBALS['APP_M']."/".$GLOBALS['APP_C']."/".$url.".html"))
        {
             require $PATH;
        }else{
           $this->alert("没有找到".$PATH."文件",$GLOBALS['APP_M']."/".$GLOBALS['APP_C']."/".$GLOBALS['APP_A']);die;
        }
    }
   //基类传值方法
    protected function assign($name,$value="")
    {
              if(is_array($name))
              {
                    $this->vTar=array_merge($this->vTar,$name);
              }else{
                    $this->vTar[$name]=$value;
              }
    }
    //对smarty引擎渲染方法进行封装处理
    protected function SmDisplay($url="",$isform=false,$formurl="")
    {          if(!$isform)
               {    if(empty($url))
                    {
                        $this->smarty->display($this->getMA());
                    }else{
                        $this->smarty->display($this->getMA($url));
                    }
               }else{
                    if(empty($url))
                    {   $this->smarty->assign("form",$this->getfrom($formurl));
                        $this->smarty->display($this->getMA());
                    }else{
                        $this->smarty->assign("form",$this->getfrom($formurl));
                        $this->smarty->display($this->getMA($url));
                    }
                }

    }
    //smarty引擎传值
    protected function SmAssign($name,$data)
    {
           $this->smarty->assign($name,$data);
    }
    //获取当前的模板和当前的方法
    protected function getMA($url=false)
   {        if($url==false)
            {
                $url=$GLOBALS['APP_A'];
            }
             return $GLOBALS['APP_M']."/".strtolower($GLOBALS['APP_C'])."/".$url.".html";
    }
    protected function getfrom($form)
    {   $url=explode("/",$form);
        if(count($url)==2)
        {
            array_unshift($url,$GLOBALS['APP_M']);
        }
        $GLOBALS['APP_M']=$url[0];
        $GLOBALS['APP_C']=ucfirst($url[1]);
        $GLOBALS['APP_A']=$url[2];
        return "?m=".$GLOBALS['APP_M']."&c=".$GLOBALS['APP_C']."&a=".$GLOBALS['APP_A'];
    }
}