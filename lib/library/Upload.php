<?php
header("content-type:text/html;charset=utf-8");
class Upload extends UploadRule{
     /*
             获取图片上传详细信息
             return array
     */
	 public function GetInfo($name){
             return $_FILES[$name];
	 }
     /*
             验证上传图片的类型
             return bool true false
     */
	 public function CheckType($name){

             return in_array($name['type'],$this->FileType);
	 }
     /*
             验证上传图片的大小
             return bool  true false
     */
	 public function CheckSize($name){
	 	     
             return $name['size']>$this->FileMaxSize;
	 }
	 /*
	         生成一个文件保存路径
	         return string
	 */
	 public function FilePath($name){

             if(is_dir($path=$name."/".date("Y-m-d")))
             {
             	 return $path;
             }else{
             	 mkdir($path=$name."/".date("Y-m-d"),0777,true);
             	 return $path;
             }
	 }
     /*
             生成文件名
             retrun string
     */
	 public function FileName($name,$path="upload"){

	 	    $path=self::FilePath($path);
            $type=rtrim(strchr($name['name'],"."),".");
            $data['path_name']=$path."/".md5($name['name']).".".$type;
            $data['path']=$path;
            $data['name']=md5($name['name']).".".$type;
            return $data;
            
	 }
     /*
            文件上传按钮
            return array 文件名 路径
     */
	 public function Up($name,$path="upload"){

	 	     $file=self::GetInfo($name);
	 	     
 	    	if($file['name']=="")
 	        {
 	         	$this->CheckError(1);
 	        }  
	 	    
	 	    if(!self::CheckType($file))
	 	    {
                $this->CheckError(2);
	 	    }

	 	    if(self::CheckSize($file))
	 	    {
                 $this->CheckError(3);
	 	    }

	 	    $filename=self::FileName($file);

	 	    move_uploaded_file($file['tmp_name'],$filename['path_name']);

	 	    return  $filename;

	 }
}
?>