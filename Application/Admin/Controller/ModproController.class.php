<?php
namespace Admin\Controller;

class ModproController extends BaseController{
	public function index($currentPage=null){
		//实现分页效果
		//获取总条数$num
		$num=M('product')->count();
		$pageSize=10;
		$page=new \Components\Page($pageSize,$num,$currentPage);
		$pageNum=$page->pageNum;
		//获取起始值
		$start=$page->getStart();
		//查询产品的相关信息
		$product=M()->query("select * from dn_cate as c join dn_product as p on c.c_id=p.c_id order by p_id desc limit {$start},{$pageSize}");
		
		$showMsg=$page->showMsg();
		$fangkuai=$page->showPageByBlock(2,"Modpro");
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->assign("showMsg",$showMsg);
		$this->assign("fangkuai",$fangkuai);
		$this->assign("product",$product);
		$this->display();
	}
	public function del($pid){
		//删除此产品
		$re=M("product")->where("p_id=$pid")->delete();
		if($re){
			$this->success('此产品删除成功！',__MODULE__.'/Modpro/index.html');
		}else{
			$this->success('此产品删除失败！',__MODULE__.'/Modpro/index.html');
		}
	}
	public function upt($proId){
		$product=M("product")->where("p_id=$proId")->find();
		$cate=M("cate")->select();
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->assign('cate',$cate);
		$this->assign("product",$product);
		$this->display();
	}
	public function save($proId){
			//原来的图片名称
			$res=M("product")->where("p_id=$proId")->find();
			
			$p_picture=$res['p_picture'];
			$enp_picture=$res['enp_picture'];
			$p_time=$res['p_time'];
			if($_FILES['upload']['name']['0']!=""){
			//修改中文图片	
				$upload=new \Components\Upload();
				$re=$upload->saveFile("./Public/images");
				$p_picture=$re[0];
			}
			if($_FILES['enupload']['name']['0']!=""){
				//修改中文图片
				$uploads=new \Components\Uploads();
				$re=$uploads->saveFile("./Public/images");
				$enp_picture=$re[0];
			}
			$_POST['p_picture']=$p_picture;
			$_POST['enp_picture']=$enp_picture;
			$_POST['p_time']=$p_time;
			$_POST['p_upttime']=time();
			$re=M("product")->where("p_id=$proId")->data($_POST)->save();
			if($re){
				$this->success('此条产品信息修改成功！',__MODULE__.'/Modpro/index.html');
			}else{
				$this->success('此条产品信息修改失败！',__MODULE__.'/Modpro/index.html');
			}
		}
		public function delall(){
			$product=$_POST['news'];
			//将数组的值取出，变成字符串
			$str="'".join("','",$product)."'";
			//删除所有选项
			//$re=M()->execute("delete from dn_news where n_id in ($str)");
			$re=M("product")->where("p_id in ($str)")->delete();
			if($re){
				$this->success('选中产品删除成功！',__MODULE__.'/Modpro/index.html');
			}else{
				$this->success('选中产品删除失败！',__MODULE__.'/Modpro/index.html');
			}
			
		}
		public function allpai(){
			//保存对应的排序值
			$arr=$_POST['paixu'];
			//进行一次筛选。选出有变动的值
			foreach($arr as $k=>$v){
				//找出对应数据库的保存的值
				$product=M("product")->where("p_id=$k")->find();
				$yuan=$product['p_pai'];
				//看看是否排序值有所改动
				if($yuan != $v){
					$re=M()->execute("update dn_product set p_pai='$v' where p_id=$k");
					if($re == false || $re == 0){
						break;
					}
				}
			}
			if($re){
				$this->success('排序修改成功！',__MODULE__.'/Modpro/index.html');
			}else{
				$this->success('排序修改失败！',__MODULE__.'/Modpro/index.html');
			}
		}
	
}