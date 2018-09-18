<?php
namespace Admin\Controller;

class AddbannerController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->display();
	}
	public function add(){
			//向数据库中添加信息
			if($_FILES['upload']['name']['0']!=""){
				$upload=new \Components\Upload();
				$re=$upload->saveFile("./Public/images");
				$b_picture=$re[0];
			}
			if($_FILES['enupload']['name']['0']!=""){
				$upload=new \Components\Uploads();
				$re=$upload->saveFile("./Public/images");
				$enb_picture=$re[0];
			}
			$_POST['enb_picture']=$enb_picture;
			$_POST['b_picture']=$b_picture;
			$_POST['b_time']=time();
			$res=M("banner")->data($_POST)->add();
			if($res){
				$this->success("首页大图添加成功！",__MODULE__."/Addbanner/index.html");
			}else{
				$this->success("首页大图添加失败！",__MODULE__."/Addbanner/index.html");
			}
		}
}