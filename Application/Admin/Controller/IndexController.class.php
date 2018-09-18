<?php
namespace Admin\Controller;

class IndexController extends BaseController {
    public function index(){
    	$msg=M('admin')->find();
    		
    	$this->assign('msg',$msg);
    	$this->display();
    }
}