<?php
namespace Admin\Controller;

class CompanyController extends BaseController{
	public function addgongsi(){
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->display();
	}
}