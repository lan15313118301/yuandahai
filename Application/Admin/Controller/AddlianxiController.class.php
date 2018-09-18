<?php
namespace Admin\Controller;

class AddlianxiController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->display();
	}
	public function add(){
		$l_erweima='';
		if($_FILES['upload']['name']['0']!=""){
			
			$upload=new \Components\Upload();
			$re=$upload->saveFile("./Public/images");
			$l_erweima=$re[0];
		}
		$_POST['l_erweima']=$l_erweima;
		$re=M('lianxi')->data($_POST)->add();
		if($re){
			$this->success("种类添加成功！",__MODULE__."/Addlianxi/index.html");
		}else{
			$this->success("种类添加失败！",__MODULE__."/Addlianxi/index.html");
		}
	
	}
}