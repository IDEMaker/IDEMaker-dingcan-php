<?php
header("content-type:text/html;charset=utf-8");
class UploadM extends UploadRule{
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
	 public function CheckType($name,$k=0){

             return in_array($name['type'][$k],$this->FileType);
	 }
     /*
             验证上传图片的大小
             return bool  true false
     */
	 public function CheckSize($name,$k=0){
	 	     
             return $name['size'][$k]>$this->FileMaxSize;
	 }
	 /*
	         生成一个文件保存路径
	         return string
	 */
	 public function FilePath($name){

             if(is_dir($path=APP_PATH."/".$name."/".date("Y-m-d")))
             {
             	 return $path;
             }else{
             	 mkdir($path=APP_PATH."/".$name."/".date("Y-m-d"),0777,true);
             	 return $path;
             }
	 }
     /*
             生成文件名
             retrun string
     */
	 public function FileName($name,$path="upload",$k=0){

	 	    $path=self::FilePath($path);
            $type=rtrim(strchr($name['name'][$k],"."),".");
            $data['path_name']=$path."/".md5($name['name'][$k]).mt_rand(111,999).$type;
            $data['path']=$path;
            $data['name']=md5($name['name'][$k]).mt_rand(111,999).$type;
            return $data;

	 }
     /*
            单文件多文件入口上传按钮
            return array 文件名 路径 
     */
	 public function Up($name,$path="upload"){

	 	     $file=self::GetInfo($name);

             $data=array();
	 	    if(count($file['name'])>=2)
            {
                  for($k=0;$k<count($file['name']);$k++)
                  {
                        
                        if(!self::CheckType($file,$k))
                        {
                            $this->CheckError(2);
                        }

                        if(self::CheckSize($file,$k))
                        {
                             $this->CheckError(3);
                        }

                        $filename=self::FileName($file,$path);

                        move_uploaded_file($file['tmp_name'][$k],$filename['path_name']);

                      $filename['path_name']=str_replace(APP_PATH."/","",$filename['path_name']);
                      $filename['path']=str_replace(APP_PATH."/","",$filename['path']);
                      
                        $data[]['path_name']=$filename['path_name'];
                  }
                      return  $data;
            }
           
 	    	if($file['name'][0]=="")
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

	 	    $filename=self::FileName($file,$path);

	 	    move_uploaded_file($file['tmp_name'][0],$filename['path_name']);

            $filename['path_name']=str_replace(APP_PATH."/","",$filename['path_name']);
            $filename['path']=str_replace(APP_PATH."/","",$filename['path']);
         return  $filename;

	 }
}
?>