<?php
namespace Admin\Controller;

class ModlianxiController extends BaseController{
	public function index(){
		$lianxi=M("lianxi")->where("l_id=1")->find();
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->assign('lianxi',$lianxi);
		$this->display('upt');
	}
	public function save(){
		//原来的图片名称
		$res=M("lianxi")->where("l_id=1")->find();
		$l_erweima=$res['l_erweima'];
		if($_FILES['upload']['name']['0']!=""){
			
			$upload=new \Components\Upload();
			$re=$upload->saveFile("./Public/images");
			$l_erweima=$re[0];
		}
		$_POST['l_erweima']=$l_erweima;
		$re=M("lianxi")->where("l_id=1")->data($_POST)->save();
		if($re){
			$this->success('信息修改成功！',__MODULE__.'/Modlianxi/index.html');
		}else{
			$this->success('信息修改失败！',__MODULE__.'/Modlianxi/index.html');
		}
	}
}