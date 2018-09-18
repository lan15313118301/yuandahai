<?php
namespace Home\Controller;
use Think\Controller;
class EmyployeeController extends Controller{
	public function index(){
		//人才理念
		$Qita=new \Home\Model\QitaModel();
		$rencai=$Qita->where("q_name='人才理念'")->find();
		$Lianxi=new \Home\Model\LianxiModel();
		$contact=$Lianxi->where('l_id=1')->find();
		//招聘岗位
		$Job=new \Home\Model\JobModel();
		$zhaopin=$Job->order('j_pai desc')->select();
		$News=new \Home\Model\NewsModel();
		$hotnews=$News->order('n_click desc')->limit('0,6')->select();
		
		$this->assign('hotnews',$hotnews);
		$this->assign('zhaopin',$zhaopin);
		$this->assign('contact',$contact);
		$this->assign('rencai',$rencai);
		$this->display();
	}
}