<?php
namespace Admin\Controller;

class ModcateController extends BaseController{
	public function index($currentPage=null){
		//实现分页效果
		$num=M('cate')->count();
		$pageSize=10;
		$page=new \Components\Page($pageSize,$num,$currentPage);
		$pageNum=$page->pageNum;
		//获取起始值
		$start=$page->getStart();
		$cate=M("cate")->order('c_id desc')->limit("$start","$pageSize")->select();
		//小方块效果
		$showMsg=$page->showMsg();
		$fangkuai=$page->showPageByBlock(2,"Modcate");
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->assign("showMsg",$showMsg);
		$this->assign("fangkuai",$fangkuai);
		$this->assign("cate",$cate);
		$this->display();
	}
	public function del($cid){
		$res=M()->execute("delete from dn_product where c_id in (select c_id from dn_cate where c_id=$cid)");
		$re=M("cate")->where("c_id=$cid")->delete();
		if($re){
			$this->success('此条产品种类及相关产品成功！',__MODULE__.'/Modcate/index.html');
		}else{
			$this->success('此条产品种类及相关产品失败！',__MODULE__.'/Modcate/index.html');
		}
	}
	public function upt($cateId){
		$cate=M("cate")->where("c_id=$cateId")->find();
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->assign("cate",$cate);
		$this->display();
	}
	public function save($cateId){
		//原来的图片名称
		$res=M("cate")->where("c_id=$cateId")->find();
		$c_time=$res['c_time'];
		$c_upttime=time();
		$_POST['c_time']=$c_time;
		$_POST['c_upttime']=$c_upttime;
		$re=M("cate")->where("c_id=$cateId")->data($_POST)->save();
		if($re){
			$this->success('产品种类修改成功！',__MODULE__.'/Modcate/index.html');
		}else{
			$this->success('产品种类修改失败！',__MODULE__.'/Modcate/index.html');
		}
	}
	public function delall(){
		$cate=$_POST['news'];
		//将数组的值取出，变成字符串
		$str="'".join("','",$cate)."'";
		//删除所有选项
		//$re=M()->execute("delete from dn_news where n_id in ($str)");
		$res=M()->execute("delete from dn_product where c_id in ($str)");
		$re=M("cate")->where("c_id in ($str)")->delete();
		if($re){
			$this->success('选中产品种类和相应产品删除成功！',__MODULE__.'/Modcate/index.html');
		}else{
			$this->success('选中产品种类和相应产品删除失败！',__MODULE__.'/Modcate/index.html');
		}
	}
public function allpai(){
		//保存对应的排序值
		$arr=$_POST['paixu'];
		//进行一次筛选。选出有变动的值
		foreach($arr as $k=>$v){
			//找出对应数据库的保存的值
			$cate=M("cate")->where("c_id=$k")->find();
			$yuan=$cate['c_pai'];
			//看看是否排序值有所改动
			if($yuan != $v){
// 			$data=array();
// 			$data["n_pai"]="$v";
			//$re=M("news")->where("c_id=".$k)->setField('n_pai', $v);
			$re=M()->execute("update dn_cate set c_pai='$v' where c_id=$k");				
				if($re == false || $re == 0){
					break;
				}
			}
		}
		if($re){
			$this->success('排序修改成功！',__MODULE__.'/Modcate/index.html');
		}else{
			$this->success('排序修改失败！',__MODULE__.'/Modcate/index.html');
		}
	}
}