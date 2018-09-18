<?php
namespace Admin\Controller;

class AddproController extends BaseController{
	public function index(){
		//查询出所有种类
		$cate=M('cate')->select();
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->assign('cate',$cate);
		$this->display();
	}
	public function add(){
	//向数据库中添加信息
		$p_picture='';
		$p_time=time();
		if($_FILES['upload']['name']['0']!=""){
		//中文图片	
			$upload=new \Components\Upload();
			$re=$upload->saveFile("./Public/images");
			$p_picture=$re[0];
		}
		if($_FILES['enupload']['name']['0']!=""){
		//英文图片		
			$uploads=new \Components\Uploads();
			$re=$uploads->saveFile("./Public/images");
			$enp_picture=$re[0];
		}
		$_POST['p_picture']=$p_picture;
		$_POST['enp_picture']=$enp_picture;
		$_POST['p_time']=$p_time;
		$res=M("product")->data($_POST)->add();
		if($res){
			$this->success("产品添加成功！",__MODULE__."/Addpro/index.html");
		}else{
			$this->success("产品添加失败！",__MODULE__."/Addpro/index.html");
		}
	}
}