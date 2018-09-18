<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller{
	public function _initialize(){
		if($_SESSION['userMsg'] == null){
			$this->success('非法登录，正在跳转',__MODULE__."/Public/index.html");
			exit;
		}
	}
}