<?php
class MySql extends Rule{
     //定义私有的连接数据库属性  类型 array
     private $root=array();
     //构造方法 当实例化时自动加载  类型 array
     public function __construct($root=array()){
         $root=require_once APP_PCOFDP."/database.php";
       	if(!empty($root))
       	{
       	 	$this->root=$root;
       	}

        @mysql_connect($this->root['Host'].":".$this->root['Port'],$this->root['HostName'],$this->root['HostPwd']) or die("链接失败");

        mysql_select_db($this->root['DbName']);

        mysql_query("set names ".$this->root['Charset']);
     }
      //析构方法 当页面加载完毕时 
     public function __destruct()
     {
          @mysql_close();
     }
     //查询单条数据 方法 

     //$data=$OBJ->SelectOne("test");

     //$data=$OBJ->SelectOne("test","actile");

     //return array
     public function SelectOne($table,$column="*",$where="1",$limit="1")
     {       //预处理Sql注入
             $where=PRESql($where);
             
             $Sql="SELECT {$column} FROM  {$table} WHERE {$where}  LIMIT {$limit}";

             $Result=mysql_query($Sql);

             if(empty($Result))
             {
                 $data="对不起没有数据";
             }else{
                 $data=mysql_fetch_assoc($Result);
             }
              return $data;
     }
     //查询多条数据 方法

     //$data=$OBJ->SelectAll("test");

     //$data=$OBJ->SelectAll("test","actile");

     //$data=$OBJ->SelectAll("test","*","1","20");

     //return array
     public function SelectAll($table,$column="*",$where="1",$limit="10")
     {      //预处理Sql注入
             $where=PRESql($where);
             
              $Sql="SELECT {$column} FROM  {$table} WHERE {$where}  LIMIT {$limit}";

              $Result=mysql_query($Sql);

              while($Arr=mysql_fetch_assoc($Result))
              {
                    $data[]=$Arr;
              }

              if(empty($data))
              {
                  $data="对不起没有数据";
              }

              return $data;

     }
    //添加单条数据 方法 $data 类型 array() 一维数组

    //$data=$OBJ->InsertOne("test",$arr=['acticle'=>"曹禺"]);

    //return int 自增id 
     public  function InsertOne($table,$data)
     {       //预处理Sql注入
              $data=PREXss($data);

             $keys=implode(array_keys($data),"`,`");

             $values=implode(array_values($data),"','");
             
             $Sql="INSERT INTO {$table} (`".$keys."`) VALUES('".$values."')";

             mysql_query($Sql);

             return mysql_insert_id();
     }
     //添加多条数据 方法 $data 类型 array() 二维数组

     //$data=$OBJ->InsertAll("test",$arr=[['acticle'=>"哈"],["acticle"=>"哈"],["acticle"=>"哈"]]);

     //return int 自增id
     public function InsertAll($table,$data)
     {        //预处理Sql注入
              $data=PREXss($data);
                 
             foreach ($data as $key => $value)
             {
  
                  $keys[]=implode(array_keys($value),"`,`");


                  $values[]=implode(array_values($value),"','");

             }
                     
             $keys=array_unique($keys);

             $values=implode($values,"'),('");
             
             $Sql="INSERT INTO {$table} (`".$keys[0]."`)  VALUES('".$values."')";

             mysql_query($Sql);

             return mysql_insert_id();
     }
     //删除单条数据 方法 

     //$data=$OBJ->DeleteOne("test","id=1");

     //return bool  true false  1  0
     public function DeleteOne($table,$where)
     {      //预处理Sql注入
             $where=PRESql($where);
             
            $Sql="DELETE FROM {$table} WHERE {$where}";
             
            return mysql_query($Sql);
     }
     //删除多条数据 方法  $data 类型 array() 一维数组

     //$data=$OBJ->DeleteAll("test",$arr=['id',"=","45"]);

     //$data=$OBJ->DeleteAll("test",$arr=['id',">","10"]);

     //$data=$OBJ->DeleteAll("test",$arr=['id',"<","10"]);

     //$data=$OBJ->DeleteAll("test",$arr=['1',"6","10"],"id");

     //return bool true false 1  0 
     public function DeleteAll($table,$data,$id=null)
     {
            if(is_numeric($data[1]))
            {
                  $data=$id." IN"."(".join(",",$data).")"; 
                
            }else{

                  $data=join(" ",$data);
            }

            $Sql="DELETE FROM {$table} WHERE {$data}";
             
            return mysql_query($Sql);
     }
     //修改数据 方法 $data 类型 array() 一维数组

     //$data=$OBJ->Update("test",$arr=['acticle'=>"哈"],"id=47"); 

     //return bool true false 1  0 
     public  function Update($table,$data,$where)
     {       //预处理Sql注入
             $where=PRESql($where);

             if(count($data)>1)
             {
                 $keys=array_keys($data);
                 $values=array_values($data);
                 $value="";
                 foreach($keys as $key=>$val)
                 {
                     $value.="`".$val."`='".$values[$key]."',";
                 }
                 $values=rtrim($value,",");

                 $Sql="UPDATE {$table}  SET $values WHERE {$where}";
             }else{

                 $keys=implode(array_keys($data),"`,`");


                 $values=implode(array_values($data),"','");

                 $Sql="UPDATE {$table}  SET `".$keys."`='".$values."' WHERE {$where}";
             }

             return mysql_query($Sql);
     }
}

?>