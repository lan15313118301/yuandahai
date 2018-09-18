<?php
namespace Admin\Controller;

class ShowmessageController extends BaseController{
	public function index($currentPage=null){
		$num=M('message')->where("state='1'")->count();
		import('Com.Sina.Page');
		$pageSize=10;
		
		$page=new \Components\Page($pageSize,$num,$currentPage);
		$pageNum=$page->pageNum;
		//获取起始值
		$start=$page->getStart();
		//分页语句
		$message=M('message')->order('id desc')->limit("$start","$pageSize")->where("state='1'")->select();
		//小方块效果
		$showMsg=$page->showMsg();
		$fangkuai=$page->showPageByBlock(2,"Showmessage");
		$msg=M('admin')->find();

		$this->assign('message',$message);
		$this->assign('msg',$msg);
		$this->assign('showMsg',$showMsg);
		$this->assign('fangkuai',$fangkuai);
		$this->display();
	}
	public function del($mid){
		//将状态值改为0
		$array=array('state'=>'0');
		$re=M('message')->data($array)->where("id=$mid")->save();
		if($re){
			$this->success('放入回收站成功！',__MODULE__.'/Showmessage/index.html');
		}else{
			$this->success('放入回收站失败！',__MODULE__.'/Showmessage/index.html');
		}
	}
	public function huishou(){
		$msg=M('admin')->find();
		//查询所有留言信息
		$message=M('message')->where("state='0'")->select();
		
		$this->assign('message',$message);
		$this->assign('msg',$msg);
		$this->display();
	}
	public function huanyuan($mid){
		//将状态值改为1
		$array=array('state'=>'1');
		$re=M('message')->data($array)->where("id=$mid")->save();
		if($re){
			$this->success('回收客户信息成功！',__MODULE__.'/Showmessage/huishou.html');
		}else{
			$this->success('回收客户信息失败！',__MODULE__.'/Showmessage/huishou.html');
		}
	}
	public function changeall(){
		$message=$_POST['news'];
		//将数组的值取出，变成字符串
		foreach($message as $k=>$v){
			$re=M('message')->data(array('state'=>'0'))->where("id=$v")->save();
		}
		
		if($re){
			$this->success('选中产品删除成功！',__MODULE__.'/Showmessage/index.html');
		}else{
			$this->success('选中产品删除失败！',__MODULE__.'/Showmessage/index.html');
		}
	}
	public function upt($mid){
		$msg=M('admin')->find();
		//查询所有留言信息
		$message=M('message')->where("id=$mid")->find();
		
		$this->assign('message',$message);
		$this->assign('msg',$msg);
		$this->display();
	}
	public function truedel($mid){
		$re=M("message")->where("id=$mid")->delete();
		if($re){
			$this->success('此条留言彻底删除成功！',__MODULE__.'/Showmessage/huishou.html');
		}else{
			$this->success('此条留言删除失败！',__MODULE__.'/Showmessage/huishou.html');
		}
	}
	public function deltruemess(){
		$news=$_POST['news'];
		//将数组的值取出，变成字符串
		$str="'".join("','",$news)."'";
		//删除所有选项
		//$re=M()->execute("delete from dn_news where n_id in ($str)");
		$re=M("message")->where("id in ($str)")->delete();
		if($re){
			$this->success('选中新闻删除成功！',__MODULE__.'/Showmessage/huishou.html');
		}else{
			$this->success('选中新闻删除失败！',__MODULE__.'/Showmessage/huishou.html');
		}
	}
}