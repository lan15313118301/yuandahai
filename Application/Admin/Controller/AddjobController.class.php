<?php
namespace Admin\Controller;

class AddjobController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->display();
	}
	public function add(){
		//向数据库中添加信息
		$_POST['j_time']=time();
		$res=M("job")->data($_POST)->add();
		if($res){
			$this->success("招聘信息发布成功！",__MODULE__."/Addjob/index.html");
		}else{
			$this->success("招聘信息发布失败！",__MODULE__."/Addjob/index.html");
		}
	}
}