<?php
class Page{
    public $count;
    public $page_num;
    public $page_count;
    public $p;
    public $offset=3;
    public $config=array(
        'left'=>"&lt;&lt;",
        'right'=>"&gt;&gt;"
    );

    /**
     * @param $count
     * @param int $page_num
     */
    function __construct($count,$page_num=10){
        $this->count=$count;
        $this->page_num=$page_num;
        $this->p=isset($_GET['p'])?$_GET['p']:1;
    }

    /**
     * 普通分页
     * @return string
     */
    function show(){
        //求总页数
        $this->page_count=$page_count=ceil($this->count/$this->page_num);

        //开始
        $start=$this->p-$this->offset<1?1:$this->p-$this->offset;//max()
        //结束
        $end=$this->p+$this->offset>$page_count?$page_count:$this->p+$this->offset;//min()

        //上一页
        if($this->p>=1){
            $prev=$this->p-1<1?1:$this->p-1;//7
            $first="<a href='?p=".$prev."'>".$this->config['left']."</a>";
        }
        //下一页
        if($this->p<=$this->page_count){
            $next=$this->p+1>$this->page_count?$this->page_count:$this->p+1;
            $last="<a href='?p=".$next."'>".$this->config['right']."</a>";
        }

        $str="";
        for($i=$start;$i<=$end;$i++){
            $str.="<a href='?p=".$i."'>".$i."</a>&nbsp;&nbsp;";
        }
        return  $first.$str.$last;
    }

    /**
     * ajax分页
     * @return string
     */
    function showAjax(){
        //求总页数
        $this->page_count=$page_count=ceil($this->count/$this->page_num);

        //开始
        $start=$this->p-$this->offset<1?1:$this->p-$this->offset;//max()
        //结束
        $end=$this->p+$this->offset>$page_count?$page_count:$this->p+$this->offset;//min()

        //上一页
        if($this->p>=1){
            $prev=$this->p-1<1?1:$this->p-1;//7
            $first="<a href='javascript:;' onclick='page(".$prev.")' class='ww'>".$this->config['left']."</a>";
        }
        //下一页
        if($this->p<=$this->page_count){
            $next=$this->p+1>$this->page_count?$this->page_count:$this->p+1;
            $last="<a href='javascript:;' onclick='page(".$next.")' class='ww'>".$this->config['right']."</a>";
        }

        $str="";
        $p=empty(get("p"))?1:get("p");
        for($i=$start;$i<=$end;$i++){
             if($p==$i)
             {
                 $str.="<a href='javascript:;' onclick='page(".$i.")' class='active'>".$i."</a>";

             }else{
                 $str.="<a href='javascript:;' onclick='page(".$i.")'>".$i."</a>";
             }
        }
        $last=empty($last)?"":$last;
        return  "<div align='center'><ul><li>$first$str$last</li></ul></div>";
    }

    function setConfig($config){
        foreach($config as $k=>$v){
            $this->config[$k]=$v;
        }
    }
}

