<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller{
	public function index(){
		
		//循环出公司表
		$Company=new \Home\Model\CompanyModel();
		$company=$Company->order('cm_pai desc,cm_id desc')->select();
		//查询出联系我们的相关信息
		$Lianxi=new \Home\Model\LianxiModel();
		$contact=$Lianxi->where('l_id=1')->find();
		$News=new \Home\Model\NewsModel();
		$hotnews=$News->order('n_click desc')->limit('0,6')->select();
		//查询出第一条的信息的名字
		
		$jianjie=$Company->where("cm_name='公司简介'")->find();
		
		$this->assign('jianjie',$jianjie);
		$this->assign('hotnews',$hotnews);
		$this->assign('contact',$contact);
		$this->assign('company',$company);
		$this->display();
	}
	public function detail($cmid=1){
		$Company=new \Home\Model\CompanyModel();
		$company=$Company->order('cm_pai desc,cm_id desc')->select();
		$company1=$Company->where("cm_id=$cmid")->find();
		//查询出联系我们的相关信息
		$Lianxi=new \Home\Model\LianxiModel();
		$contact=$Lianxi->where('l_id=1')->find();
		$News=new \Home\Model\NewsModel();
		$hotnews=$News->order('n_click desc')->limit('0,6')->select();
		
		$this->assign('hotnews',$hotnews);
		$this->assign('contact',$contact);
		$this->assign("company1",$company1);
		$this->assign('company',$company);
		$this->display();
	}
}