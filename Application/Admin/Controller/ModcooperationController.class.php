<?php
namespace Admin\Controller;

class ModcooperationController extends BaseController{
	public function index($currentPage=null){
		//实现分页效果
		//获取总条数$num
		$num=M('cooperation')->count();
		//import('Com.Sina.Page');
		$pageSize=10;
		$page=new \Components\Page($pageSize,$num,$currentPage);
		$pageNum=$page->pageNum;
		//获取起始值
		$start=$page->getStart();
		//分页语句
		$cooperation=M("cooperation")->order('co_id desc')->limit("$start","$pageSize")->select();
		//小方块效果
		$showMsg=$page->showMsg();
		$fangkuai=$page->showPageByBlock(2,"Modcooperation");
// 		$msg=M('admin')->find();
// 		$cooperation=M('cooperation')->select();
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->assign('cooperation',$cooperation);
		$this->assign("showMsg",$showMsg);
		$this->assign("fangkuai",$fangkuai);
		$this->display();
	}
	public function del($coid){
		//删除此条新闻
		$re=M("cooperation")->where("co_id=$coid")->delete();
		if($re){
			$this->success('此条合作伙伴删除成功！',__MODULE__.'/Modcooperation/index.html');
		}else{
			$this->success('此条合作伙伴删除失败！',__MODULE__.'/Modcooperation/index.html');
		}
	}
	public function upt($cooperationId){
		$cooperation=M("cooperation")->where("co_id=$cooperationId")->find();
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->assign("cooperation",$cooperation);
		$this->display();
	}
	public function save($coid){
		//原来的图片名称
		$res=M("cooperation")->where("co_id=$coid")->find();
		$co_picture=$res['co_picture'];
		$co_time=$res['co_time'];
		if($_FILES['upload']['name']['0']!=""){
			
			$upload=new \Components\Upload();
			$re=$upload->saveFile("./Public/images");
			$co_picture=$re[0];
		}
		$_POST['co_picture']=$co_picture;
		$_POST['co_time']=$co_time;
		$_POST['co_upttime']=time();
		$re=M("cooperation")->where("co_id=$coid")->data($_POST)->save();
		if($re){
			$this->success('此合作伙伴修改成功！',__MODULE__.'/Modcooperation/index.html');
		}else{
			$this->success('此合作伙伴修改失败！',__MODULE__.'/Modcooperation/index.html');
		}
	}
	public function delall(){
		$cooperation=$_POST['news'];
		//将数组的值取出，变成字符串
		$str="'".join("','",$cooperation)."'";
		//删除所有选项
		//$re=M()->execute("delete from dn_news where n_id in ($str)");
		$re=M("cooperation")->where("co_id in ($str)")->delete();
		if($re){
			$this->success('选中合作伙伴删除成功！',__MODULE__.'/Modcooperation/index.html');
		}else{
			$this->success('选中合作伙伴删除失败！',__MODULE__.'/Modcooperation/index.html');
		}
	}
	public function allpai(){
		//保存对应的排序值
		$arr=$_POST['paixu'];
		//进行一次筛选。选出有变动的值
		foreach($arr as $k=>$v){
			//找出对应数据库的保存的值
			$news=M("cooperation")->where("co_id=$k")->find();
			$yuan=$news['co_pai'];
			//看看是否排序值有所改动
			if($yuan != $v){
				$re=M()->execute("update dn_cooperation set co_pai='$v' where co_id=$k");
				if($re == false || $re == 0){
					break;
				}
			}
		}
		if($re){
			$this->success('排序修改成功！',__MODULE__.'/Modcooperation/index.html');
		}else{
			$this->success('排序修改失败！',__MODULE__.'/Modcooperation/index.html');
		}
	}
	
}