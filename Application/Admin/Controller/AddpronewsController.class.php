<?php
namespace Admin\Controller;

class AddpronewsController extends BaseController{
	public function index(){
		//查询出所有种类
		$cate=M('cate')->where("c_cate='详细页'")->select();
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->assign('cate',$cate);
		$this->display();
	}
	public function add(){
		//向数据库中添加信息
		$_POST['p_time']=time();
		$res=M("pronews")->data($_POST)->add();
		if($res){
			$this->success("产品文章添加成功！",__MODULE__."/Addpronews/index.html");
		}else{
			$this->success("产品文章添加失败！",__MODULE__."/Addpronews/index.html");
		}
	}
}