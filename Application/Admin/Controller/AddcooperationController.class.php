<?php
namespace Admin\Controller;

class AddcooperationController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->display();
	}
	public function add(){
		//向数据库中添加信息
		$co_picture='';
		if($_FILES['upload']['name']['0']!=""){
			
			$upload=new \Components\Upload();
			$re=$upload->saveFile("./Public/images");
			$co_picture=$re[0];
		}
		$_POST['co_picture']=$co_picture;
		$_POST['co_time']=time();
		$res=M("cooperation")->data($_POST)->add();
		if($res){
			$this->success("合作单位添加成功！",__MODULE__."/Addcooperation/index.html");
		}else{
			$this->success("合作单位添加失败！",__MODULE__."/Addcooperation/index.html");
		}
	}
}