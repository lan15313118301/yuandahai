<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller{
	public function index($n_cate=null,$page=null){
		//显示分页模式
		$News=new \Home\Model\NewsModel();
		$pageSize=6;
		$num='';//总条数
		//实现分页效果
		//$n_cate=$_GET['n_cate'];
		if($n_cate=='gongsi' || $n_cate==null){
			$n_cate="公司新闻";
			$num=$News->where("n_cate='$n_cate'")->count();
		}else if($n_cate=='hangye'){
			$n_cate="行业新闻";
			$num=$News->where("n_cate='$n_cate'")->count();
		}
		$page = isset($_GET['page']) ? $_GET['page'] :1 ;
		$pageNum='';//总页数
		$pageNum=ceil($num/$pageSize);
		// 	判断当前页码值得合法性 大于等于1 小于等于总页数
		if($page<1){//左端不合法
			$page=1;
		}
		if($page>0 && $page>$pageNum){//右端不合法
			$page=$pageNum;
		}
		$start=($page-1)*$pageSize;
		if($n_cate=='公司新闻' || $n_cate==null){
			$news=$News->limit("$start,$pageSize")->where("n_cate='$n_cate'")->order("n_pai desc,n_id desc")->select();
			$n_cate='gongsi';
		}else if($n_cate=='行业新闻'){
			$news=$News->limit("$start,$pageSize")->where("n_cate='$n_cate'")->order("n_pai desc,n_id desc")->select();
			$n_cate='hangye';
		}
		$bNum=2;
		//总共方块个数
		$allNum=$bNum*2+1;
		if($pageNum<=$allNum){//
			$start=1;
			$end=$pageNum;
		}else{
			if($page-$bNum<=0){
				$start=1;
				$end=$allNum;
			}else if($page+$bNum>$pageNum){
				$start=$pageNum-$allNum+1;
				$end=$pageNum;
			}else{//正常情况下{左右均符合相差2个}
				$start=$page-$bNum;
				$end=$page+$bNum;
			}
		}
		$pageStr="";
		if($page != 1){
			$pageStr.="<a href=".__MODULE__."/News/index/n_cate/$n_cate/page/".($page-1).".html>上一页</a>&nbsp;";
		}
		for($i=$start;$i<=$end;$i++){
			if($i==$page){
				$pageStr.="<span class='num current'>{$i}</span>&nbsp;";
			}else{
				$pageStr.="<a href=".__MODULE__."/News/index/n_cate/$n_cate/page/{$i}.html>{$i}</a>&nbsp;";
			}
		}
		if($page != $pageNum){
			$pageStr.="<a href=".__MODULE__."/News/index/n_cate/$n_cate/page/".($page+1).".html>下一页</a>&nbsp;";
		}
		$pageStr.="<span>共{$pageNum}页</span>&nbsp;";
		$Lianxi=new \Home\Model\LianxiModel();
		$contact=$Lianxi->where('l_id=1')->find();
		$hotnews=$News->order('n_click desc')->limit('0,6')->select();
		
		$this->assign('hotnews',$hotnews);
		$this->assign('contact',$contact);
		$this->assign('news',$news);
		$this->assign('pageStr',$pageStr);
		$this->display();
	}
	//显示文章的详细页
	public function detail($nid){
		$News=new \Home\Model\NewsModel();
		//查询出联系我们的相关信息
		$Lianxi=new \Home\Model\LianxiModel();
		$contact=$Lianxi->where('l_id=1')->find();
		//查询出新闻的相关信息
		$detailnews=$News->where("n_id=$nid")->find();
		//实现此文章的点击量加一
		$clicknum=$detailnews['n_click'];
		$biannum=$clicknum+1;
		$data=array('n_click'=>"$biannum");
		$click=$News->data($data)->where("n_id=$nid")->save();
		$hotnews=$News->order('n_click desc')->limit('0,6')->select();
		$this->assign('hotnews',$hotnews);
		$this->assign('detailnews',$detailnews);
		$this->assign('contact',$contact);
		$this->display();
	}
}