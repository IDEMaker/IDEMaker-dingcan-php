<?php
 abstract class Rule{
    /*
         查询单条语句规范
         返回值 array
    */
 	abstract public function SelectOne($table,$column,$where,$limt);
    /*
         查询多条语句的规范
         返回值 array
    */
 	abstract public function SelectAll($table,$colum,$where,$limit);
    /*
         添加单条语句的规范
         返回值 int 自增ID
    */
 	abstract public function InsertOne($table,$data);
    /*
         添加多条语句的规范
         返回值 int 自增ID
    */
 	abstract public function InsertAll($table,$data);
    /*
         删除单条数据
         返回值 bool 真假  true false  1  0
    */
 	abstract public function DeleteOne($table,$data);
    /*
         删除多条数据
         返回值 bool 真假  true false  1  0
    */
 	abstract public function DeleteAll($table,$data);
    /*
         修改数据
         返回值 bool 真假 true  false  1  0
    */
 	abstract public function Update($table,$data,$where);
  
 }


?>