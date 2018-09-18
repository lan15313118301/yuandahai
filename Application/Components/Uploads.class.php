<?php
namespace Components;
class Uploads{
	//把文件保存
	function saveFile($toPath="./",$allowType=array('image/png','image/gif','image/jpeg','image/pjpeg'),$allowSize=2000000){
		if(!empty($_FILES)){//有文件上传
			$reArr=array();
			foreach($_FILES['enupload']['error'] as $k=>$v){
				if($v===0){//文件上传没有出错
					//获取类型进行判断
					$type=$_FILES['enupload']['type'][$k];
					if(in_array($type,$allowType)){//类型是否合法
						//判断size
						$size=$_FILES['enupload']['size'][$k];
						if($size<=$allowSize){
							//转移
							$oldName=$_FILES['enupload']['name'][$k];
							$newName=$this->newName($oldName);
							//保存
							$re=move_uploaded_file($_FILES['enupload']['tmp_name'][$k],$toPath."/".$newName);
							if($re){
								$reArr[$k]=$newName;
							}else{
								$reArr[$k]=false;
							}
						}else{
							$reArr[$k]=false;
						}
					}else{
						$reArr[$k]=false;
					}
				}else{
					$reArr[$k]=false;
				}
			}
			return $reArr;
		}else{
			return false;
		}
	}
	//产生新名称
	private function newName($oldName){//a.jpg
		$name=md5(uniqid(microtime(),true));
		$ext=pathinfo($oldName,PATHINFO_EXTENSION);
		return $name.".".$ext;
	}
}