<?php
namespace Admin\Controller;

class ModpsdController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->display();
	}
	//ajax合适用户名
	public function check(){
		$re=md5($_POST['password']);
		$res=M('admin')->find();
		if($res['password']==$re){
			echo"<font color='green'>原密码输入正确</font>";
		}else{
			echo"<font color='red'>原密码输入错误</font>";
		}
	}
public function save(){
			//原来的图片名称
			$res=M("admin")->where("id=1")->find();
			
			$picture=$res['picture'];
			if($_FILES['upload']['name']['0']!=""){
				
				$upload=new \Components\Upload();
				$re=$upload->saveFile("./Public/images");
				$picture=$re[0];
			}
			$_POST['picture']=$picture;
			$psd=md5($_POST['password']);
			$_POST['password']=$psd;
			$re=M("admin")->where("id=1")->data($_POST)->save();
			if($re){
				$this->success('密码修改成功！',__MODULE__.'/Index/index.html');
			}else{
				$this->success('密码修改失败！',__MODULE__.'/Index/index.html');
			}
		}
}