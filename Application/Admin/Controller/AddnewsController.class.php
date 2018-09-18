<?php
namespace Admin\Controller;

class AddnewsController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->display();
	}
	public function add(){
		//向数据库中添加信息
		$n_picture='';
		$n_time=time();
		if($_FILES['upload']['name']['0']!=""){
			$upload=new \Components\Upload();
			$re=$upload->saveFile("./Public/images");
			$n_picture=$re[0];
		}
		if($_FILES['enupload']['name']['0']!=""){
			$upload=new \Components\Uploads();
			$re=$upload->saveFile("./Public/images");
			$enn_picture=$re[0];
		}
		$_POST['n_picture']=$n_picture;
		$_POST['enn_picture']=$enn_picture;
		$_POST['n_time']=$n_time;
		$res=M("news")->data($_POST)->add();
		if($res){
			$this->success("文章添加成功！",__MODULE__."/Addnews/index.html");
		}else{
			$this->success("文章添加失败！",__MODULE__."/Addnews/index.html");
		}
	}
}


