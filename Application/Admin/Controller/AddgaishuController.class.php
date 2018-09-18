<?php
namespace Admin\Controller;

class AddgaishuController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->display();
	}
	public function add(){
		//向数据库中添加信息
		$picture='';
		$en_picture='';
		//中文图片
		if($_FILES['upload']['name']['0']!=""){
			//加载文件上传类
			$upload=new \Components\Upload();
			$re=$upload->saveFile("./Public/images");
			$picture=$re[0];
		}
		//英文图片
		if($_FILES['enupload']['name']['0']!=""){
			//加载文件上传类
			$enupload=new \Components\Uploads();
			$re=$enupload->saveFile("./Public/images");
			$en_picture=$re[0];
		}
		$_POST['picture']=$picture;
		$_POST['en_picture']=$en_picture;
		$_POST['time']=time();
		$res=M("gaishu")->data($_POST)->add();
		if($res){
			$this->success("概述添加成功！",__MODULE__."/Addgaishu/index.html");
		}else{
			$this->success("概述添加失败！",__MODULE__."/Addgaishu/index.html");
		}
	}
}