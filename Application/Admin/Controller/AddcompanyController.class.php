<?php
namespace Admin\Controller;

class AddcompanyController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->display();
	}
	public function add(){
	//向数据库中添加信息
		$_POST['cm_time']=time();
		$res=M("company")->data($_POST)->add();
		if($res){
			$this->success("关于我们栏目添加成功！",__MODULE__."/Addcompany/index.html");
		}else{
			$this->success("关于我们栏目添加失败！",__MODULE__."/Addcompany/index.html");
		}
	}
}