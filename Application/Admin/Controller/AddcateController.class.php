<?php
namespace Admin\Controller;

class AddcateController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->display();
	}
	public function add(){
		$_POST['c_time']=time();
		$re=M('cate')->data($_POST)->add();
		if($re){
			$this->success("种类添加成功！",__MODULE__."/Addcate/index.html");
		}else{
			$this->success("种类添加失败！",__MODULE__."/Addcate/index.html");
		}
		
	}
}
