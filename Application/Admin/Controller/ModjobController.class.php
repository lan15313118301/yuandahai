<?php
namespace Admin\Controller;

class ModjobController extends BaseController{
	public function index($currentPage=null){
		//实现分页效果
		//获取总条数$num
		$num=M('job')->count();
		//import('Com.Sina.Page');
		$pageSize=10;
		$page=new \Components\Page($pageSize,$num,$currentPage);
		$pageNum=$page->pageNum;
		//获取起始值
		$start=$page->getStart();
		//分页语句
		$job=M("job")->order('j_id desc')->limit("$start","$pageSize")->select();
		//小方块效果
		$showMsg=$page->showMsg();
		$fangkuai=$page->showPageByBlock(2,"Modjob");
		$msg=M('admin')->find();
		
		$this->assign('msg',$msg);
		$this->assign('job',$job);
		$this->assign('showMsg',$showMsg);
		$this->assign('fangkuai',$fangkuai);
		$this->display();
	}
	public function del($jid){
		//删除此条新闻
		$re=M("job")->where("j_id=$jid")->delete();
		if($re){
			$this->success('此条岗位需求删除成功！',__MODULE__.'/Modjob/index.html');
		}else{
			$this->success('此条岗位需求删除失败！',__MODULE__.'/Modjob/index.html');
		}
	}
	public function upt($jid){
		$job=M("job")->where("j_id=$jid")->find();
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->assign("job",$job);
		$this->display();
	}
	public function save($jid){
		//原来的图片名称
		$res=M("job")->where("j_id=$jid")->find();
		$j_time=$res['j_time'];
		$_POST['j_time']=$j_time;
		$_POST['j_upttime']=time();
		$re=M("job")->where("j_id=$jid")->data($_POST)->save();
		if($re){
			$this->success('此条招聘信息修改成功！',__MODULE__.'/Modjob/index.html');
		}else{
			$this->success('此条招聘信息修改失败！',__MODULE__.'/Modjob/index.html');
		}
	}
	public function delall(){
		$news=$_POST['news'];
		//将数组的值取出，变成字符串
		$str="'".join("','",$news)."'";
		//删除所有选项
		//$re=M()->execute("delete from dn_news where n_id in ($str)");
		$re=M("job")->where("j_id in ($str)")->delete();
		if($re){
			$this->success('选中的招聘岗位删除成功！',__MODULE__.'/Modjob/index.html');
		}else{
			$this->success('选中的招聘岗位删除失败！',__MODULE__.'/Modjob/index.html');
		}
	}
	public function allpai(){
		//保存对应的排序值
		$arr=$_POST['paixu'];
		//进行一次筛选。选出有变动的值
		foreach($arr as $k=>$v){
			//找出对应数据库的保存的值
			$news=M("job")->where("j_id=$k")->find();
			$yuan=$news['j_pai'];
			//看看是否排序值有所改动
			if($yuan != $v){
				$re=M()->execute("update dn_job set j_pai='$v' where j_id=$k");
				if($re == false || $re == 0){
					break;
				}
			}
		}
		if($re){
			$this->success('排序修改成功！',__MODULE__.'/Modjob/index.html');
		}else{
			$this->success('排序修改失败！',__MODULE__.'/Modjob/index.html');
		}
	}
}