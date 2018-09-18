<?php
namespace Home\Controller;
use Think\Controller;
class SaleController extends Controller{
	public function index(){
		$Cate=new \Home\Model\CateModel();
		$cate2=$Cate->order("c_pai desc,c_id desc")->select();
		//$cate1=M()->query("select * from dn_cate as c join dn_pronews as p on p.c_id = c.c_id where c.c_cate='详细页'");
		//查询出联系我们的相关信息
		$Lianxi=new \Home\Model\LianxiModel();
		$contact=$Lianxi->where('l_id=1')->find();
		//查询出销售网络的相关信息
		$Qita=new \Home\Model\QitaModel();
		$sale=$Qita->where("q_name='销售网络'")->find();
		$News=new \Home\Model\NewsModel();
		$hotnews=$News->order('n_click desc')->limit('0,6')->select();
		$language=COOKIE('think_language');
		
		$this->assign('language',$language);
		$this->assign('hotnews',$hotnews);
		$this->assign('sale',$sale);
		$this->assign('contact',$contact);
		$this->assign('cate2',$cate2);
		$this->display();
	}
}