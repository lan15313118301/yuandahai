<?php
namespace Admin\Controller;

class ModnewsController extends BaseController{
	public function index($currentPage=null){
		//实现分页效果
		//获取总条数$num
		$num=M('news')->count();
		$pageSize=10;
		$page=new \Components\Page($pageSize,$num,$currentPage);
		$pageNum=$page->pageNum;
		//获取起始值
		$start=$page->getStart();
		//分页语句
		$news=M("news")->order('n_id desc')->limit("$start","$pageSize")->select();
		//小方块效果
		$showMsg=$page->showMsg();
		$fangkuai=$page->showPageByBlock(2,"Modnews");
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->assign("showMsg",$showMsg);
		$this->assign("fangkuai",$fangkuai);
		$this->assign("news",$news);
		$this->display();
	} 
	public function del($nid){
		//删除此条新闻
		$re=M("news")->where("n_id=$nid")->delete();
		if($re){
			$this->success('此条新闻删除成功！',__MODULE__.'/Modnews/index.html');
		}else{
			$this->success('此条新闻删除失败！',__MODULE__.'/Modnews/index.html');
		}
	}
	public function upt($newsId){
		$news=M("news")->where("n_id=$newsId")->find();
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->assign("news",$news);
		$this->display();
	}
	public function save($newsId){
		//原来的图片名称
		$res=M("news")->where("n_id=$newsId")->find();
		$n_picture=$res['n_picture'];
		$enn_picture=$res['enn_picture'];
		$n_time=$res['n_time'];
		$n_upttime=time();
		if($_FILES['upload']['name']['0']!=""){
			
			$upload=new \Components\Upload();
			$re=$upload->saveFile("./Public/images");
			$n_picture=$re[0];
		}
		if($_FILES['enupload']['name']['0']!=""){
			$upload=new \Components\Uploads();
			$re=$upload->saveFile("./Public/images");
			$enn_picture=$re[0];
		}
		$_POST['enn_picture']=$enn_picture;
		$_POST['n_picture']=$n_picture;
		$_POST['n_time']=$n_time;
		$_POST['n_upttime']=$n_upttime;
		$re=M("news")->where("n_id=$newsId")->data($_POST)->save();
		if($re){
			$this->success('此条新闻修改成功！',__MODULE__.'/Modnews/index.html');
		}else{
			$this->success('此条新闻修改失败！',__MODULE__.'/Modnews/index.html');
		}
	}
	public function delall(){
		$news=$_POST['news'];
		//将数组的值取出，变成字符串
		$str="'".join("','",$news)."'";
		//删除所有选项
		//$re=M()->execute("delete from dn_news where n_id in ($str)");
		$re=M("news")->where("n_id in ($str)")->delete();
		if($re){
			$this->success('选中新闻删除成功！',__MODULE__.'/Modnews/index.html');
		}else{
			$this->success('选中新闻删除失败！',__MODULE__.'/Modnews/index.html');
		}
	}
	public function allpai(){
		//保存对应的排序值
		$arr=$_POST['paixu'];
		//进行一次筛选。选出有变动的值
		foreach($arr as $k=>$v){
			//找出对应数据库的保存的值
			$news=M("news")->where("n_id=$k")->find();
			$yuan=$news['n_pai'];
			//看看是否排序值有所改动
			if($yuan != $v){
// 			$data=array();
// 			$data["n_pai"]="$v";
			//$re=M("news")->where("c_id=".$k)->setField('n_pai', $v);
			$re=M()->execute("update dn_news set n_pai='$v' where n_id=$k");				
				if($re == false || $re == 0){
					break;
				}
			}
		}
		if($re){
			$this->success('排序修改成功！',__MODULE__.'/Modnews/index.html');
		}else{
			$this->success('排序修改失败！',__MODULE__.'/Modnews/index.html');
		}
	}
}