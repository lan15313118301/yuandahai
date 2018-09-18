<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller{
	public function index(){
		
		$this->display('login');
	}
	public function checkLogin(){
		$username=md5($_POST['username']);
		$password=md5($_POST['password']);
		//验证用户名密码
		$re=M("admin")->where("username='%s' and password='%s'",array("$username","$password"))->find();
		if($re){
			$_SESSION['userMsg']=$re;
			$this->success('登录成功，正在跳转！',__MODULE__."/Index/index.html");
		}else{
			$this->success('用户名密码不匹配，重新输入！',__MODULE__.'/Public/index.html');
		}
	}
	public function nologin(){
		session_destroy();
		$this->success('正在退出，请稍候...',__MODULE__.'/Public/index.html');
	}
}