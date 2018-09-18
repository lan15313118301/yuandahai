<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller{
	//显示列表页面
	public function index($cid='0',$currentPage=null){
		//$cate1=M('cate')->where("c_cate='详细页'")->select();

		$News=new \Home\Model\NewsModel();
		$Product=new \Home\Model\ProductModel();
		$Cate=new \Home\Model\CateModel();
 		$cate=$Cate->order('c_pai desc,c_id desc')->select();
		//实现分页//查询出总页数
		if($cid=='0'){
			//查询无游梁式抽油
			$arr=M()->query("select count(*) as zong from dn_cate as c join dn_product as p on c.c_id=p.c_id where c.c_name='破碎筛分'");
			$num=($arr[0]['zong']);
		}else{
			$num=M('product')->where("c_id=$cid")->count();
		}
		//import('Com.Sina.Page1');
		$pageSize=15;
		$page=new \Components\Page1($pageSize,$num,$currentPage);
		$pageNum=$page->pageNum;
		//获取起始值
		$start=$page->getStart();
		//分页语句
		if($cid=='0'){
			$product=M()->query("select * from dn_cate as c join dn_product as p on c.c_id=p.c_id where c.c_name='无游梁式抽油机' order by p_pai desc,p_id desc limit {$start},{$pageSize}");
			foreach($product as &$value){
				if(LANG_SET=='en-us'){
					$value['p_name']=$value['enp_name'];
					$value['p_intro']=$value['enp_intro'];
					$value['p_picture']=$value['enp_picture'];
					$value['p_content']=$value['enp_content'];
					$value['c_name']=$value['enc_name'];
				}
			}
		}else{
			//$product=M('product')->limit("$start","$pageSize")->where("c_id=$cid")->select();
			$product=M()->query("select * from dn_cate as c join dn_product as p on c.c_id=p.c_id where c.c_id=$cid order by p_pai desc,p_id desc limit {$start},{$pageSize}");
			foreach($product as &$value){
				if(LANG_SET=='en-us'){
					$value['p_name']=$value['enp_name'];
					$value['p_intro']=$value['enp_intro'];
					$value['p_picture']=$value['enp_picture'];
					$value['p_content']=$value['enp_content'];
					$value['c_name']=$value['enc_name'];
				}
			}
		}
		//小方块效果
		$showMsg=$page->showMsg();
		$fangkuai=$page->showPageByBlock(2,"Product",$cid);
		//调用分页类实现分页
		//查询出联系我们的相关信息
		$Lianxi=new \Home\Model\LianxiModel();
		$contact=$Lianxi->where('l_id=1')->find();
		$hotnews=$News->order('n_click desc')->limit('0,6')->select();
		$language=COOKIE('think_language');
		
		$this->assign('language',$language);
		$this->assign('hotnews',$hotnews);
		$this->assign('contact',$contact);
		$this->assign('product',$product);
		$this->assign('cate',$cate);
		$this->assign('showMsg',$showMsg);
		$this->assign('fangkuai',$fangkuai);
		$this->display();
	}
	//显示单页面
	public function detail($pid){
		$cate2=M('cate')->where("c_cate='列表页'")->order('c_pai desc,c_id desc')->select();
		$cate1=M()->query("select * from dn_cate as c join dn_pronews as p on p.c_id = c.c_id where c.c_cate='详细页'");
		$pcont=M()->query("select * from dn_cate as c join dn_pronews as p on p.c_id = c.c_id where p.p_id=$pid");
		//查询出联系我们的相关信息
		$contact=M('lianxi')->where('l_id=1')->find();
		$hotnews=M('news')->order('n_click desc')->limit('0,6')->select();
		
		$this->assign('hotnews',$hotnews);
		$this->assign('contact',$contact);
		$this->assign('pcont',$pcont[0]);
		$this->assign('cate1',$cate1);
		$this->assign('cate2',$cate2);
		$this->display();
	}
	//显示产品的详细页
	public function prodisplay($pid){
		$Cate=new \Home\Model\CateModel();
		$cate2=$Cate->where("c_cate='列表页'")->order('c_pai desc,c_id desc')->select();
		//查询每个产品记录
		//$product=M("product")->where("p_id=$pid")->find();
		$products=M()->query("select * from dn_cate as c join dn_product as p on p.c_id=c.c_id where p.p_id=$pid");
		foreach($products as &$value){
			if(LANG_SET=='en-us'){
				$value['p_name']=$value['enp_name'];
				$value['p_intro']=$value['enp_intro'];
				$value['p_picture']=$value['enp_picture'];
				$value['p_content']=$value['enp_content'];
				$value['c_name']=$value['enc_name'];
			}
		}
		$product=$products[0];
		//查询出联系我们的相关信息
		$Lianxi=new \Home\Model\LianxiModel();
		$contact=$Lianxi->where('l_id=1')->find();
		//实现此文章的点击量加一
		$clicknum=$product['p_click'];
		$biannum=$clicknum+1;
		$data=array('p_click'=>"$biannum");
		$click=M('product')->data($data)->where("p_id=$pid")->save();
		$News=new \Home\Model\NewsModel();
		$hotnews=$News->order('n_click desc')->limit('0,6')->select();
		$language=COOKIE('think_language');
		
		$this->assign('language',$language);
		$this->assign('hotnews',$hotnews);
		$this->assign('contact',$contact);
		$this->assign('product',$product);
		$this->assign('cate2',$cate2);
		$this->display();
	}
}