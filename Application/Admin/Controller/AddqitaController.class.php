<?php
namespace Admin\Controller;

class AddqitaController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->display();
	}
	public function add(){
		//向数据库中添加信息
		$_POST['q_time']=time();
		$res=M("qita")->data($_POST)->add();
		if($res){
			$this->success("栏目添加成功！",__MODULE__."/Addqita/index.html");
		}else{
			$this->success("栏目添加失败！",__MODULE__."/Addqita/index.html");
		}
	}
}