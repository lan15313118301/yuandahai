<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
public function index(){
		//首页大图
		$Banner=new \Home\Model\BannerModel();
		$banner=$Banner->order('b_pai desc')->limit('0,5')->select();
		//产品概述
		$Gaishu=new \Home\Model\GaishuModel();
		$gaishu=$Gaishu->select();
		//查询产品(电器设备/生产设备)
		$dianqi=M()->query("select * from dn_product as p join dn_cate as c on c.c_id=p.c_id where c.c_name='检测设备' order by p_pai desc,p_id desc limit 0,8");
		foreach($dianqi as &$value){
			if(LANG_SET=='en-us'){
				$value['p_name']=$value['enp_name'];
				$value['p_intro']=$value['enp_intro'];
				$value['p_picture']=$value['enp_picture'];
				$value['p_content']=$value['enp_content'];
				$value['c_name']=$value['enc_name'];
			}
		}
		//$dianqi=M('product')->where("p_cate='电器部分'")->order('p_pai desc,p_id desc')->limit('0,8')->select();
		//查询产品(机械设备/检测设备)
		$jixie=M()->query("select * from dn_product as p join dn_cate as c on c.c_id=p.c_id where c.c_name='生产研发' order by p_pai desc,p_id desc limit 0,8");
		foreach($jixie as &$value){
			if(LANG_SET=='en-us'){
				$value['p_name']=$value['enp_name'];
				$value['p_intro']=$value['enp_intro'];
				$value['p_picture']=$value['enp_picture'];
				$value['p_content']=$value['enp_content'];
				$value['c_name']=$value['enc_name'];
			}
		}
		//$jixie=M('product')->where("p_cate='机械部分'")->order('p_pai desc,p_id desc')->limit('0,8')->select();
		//查询出联系我们的相关信息
		$Lianxi=new \Home\Model\LianxiModel();
		$contact=$Lianxi->where('l_id=1')->find();
		//查询新闻（公司新闻）
		$News=new \Home\Model\NewsModel();
		$gongsi=$News->where("n_cate='公司新闻'")->order('n_pai desc,n_id desc')->limit('0,7')->select();
		$gongcount=count($gongsi);
		//查询新闻（行业新闻）
		$hangye=$News->where("n_cate='行业新闻'")->order('n_pai desc,n_id desc')->limit('0,7')->select();
		$hangcount=count($hangye);
		//查询出合作伙伴
		$hezuo=M('cooperation')->order('co_pai desc,co_id desc')->select();
		
		$this->assign('gongcount',$gongcount);
		$this->assign('hangcount',$hangcount);
		$this->assign('hezuo',$hezuo);
		$this->assign('hangye',$hangye);
		$this->assign('gongsi',$gongsi);
		$this->assign('contact',$contact);
		$this->assign('jixie',$jixie);
		$this->assign('dianqi',$dianqi);
		$this->assign('gaishu',$gaishu);
		$this->assign('banner',$banner);
    	$this->display();
    }
}