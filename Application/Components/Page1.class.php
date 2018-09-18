<?php
namespace Components;
class Page1{
	protected $pageSize;//每页条数
	protected $page;//当前页的页码值
	protected $num;//总条数
	public $pageNum;
	protected $pageArr;
// 	分页类的构造方法：
// 	规定每页显示记录的条数--分页类
// 	接收当前的页码值--分页类
// 	获取记录总条数--分页类要用
// 	算出总页数
// 	判断当前页码值得合法性
/*
 * $pageSize:每页条数
 * $num:总条数
 */
function __construct($pageSize=10,$num=0,$page){
	// 	接收当前的页码值--分页类
	$page=isset($page) ? $page : 1;
	// 	算出总页数
	$pageNum=ceil($num/$pageSize);
	// 	判断当前页码值得合法性 大于等于1 小于等于总页数
	if($page<1){//左端不合法
		$page=1;
	}
	if($page>0 && $page>$pageNum){//右端不合法
		$page=$pageNum;
	}
	$this->pageSize=$pageSize;
	$this->page=$page;
	$this->num=$num;
	$this->pageNum=$pageNum;
	//产生分页的配置数组
	$arr=array(
			'num'=>"共{$num}条",
			'pagesize'=>"每页{$pageSize}条",
			'pagenum'=>"共{$pageNum}页",
			'page'=>"当前是{$page}页",
			'first'=>"<a href='?page=1'>首页</a>",
			'last'=>"<a href='?page=".($page-1)."'>上一页</a>",
			'next'=>"<a href='?page=".($page+1)."'>下一页</a>",
			'end'=>"<a href='?page=".($pageNum)."'>尾页</a>"
	);
	$this->pageArr=$arr;
}
// 	方法：
// 	获取limit的开始位置--分页类中产生
	function getStart(){
		// ($page-1)*$pageSize 数据模型类要用
		return ($this->page-1)*$this->pageSize;
	}
// 	方法：
// 	呈现分页的效果---分页类
	function showMsg(){//$str="num,last,next"
			$pageMsg="
			共{$this->num}条/共{$this->pageNum}页&nbsp;";
		
		return $pageMsg;
	}
	//以小方块形式呈现分页
	function showPageByBlock($bNum=2,$xiangmu,$cid='0'){
		$allBNum=$bNum*2+1;//总共显示的小方块个数
		if($this->pageNum<=$allBNum){//第一种
			$start=1;
			$end=$this->pageNum;
		}else{
			if($this->page-$bNum<=0){//前面不够$bNum个
				$start=1;
				$end=$allBNum;
			}else if($this->page+$bNum>$this->pageNum){//第四种
				$start=$this->pageNum-$allBNum+1;
				$end=$this->pageNum;
			}else{//第三种
				$start=$this->page-$bNum;
				$end=$this->page+$bNum;	
			}
		}
		$pageStr="";
		if($this->page != 1){
				$pageStr.="<a href='".__MODULE__."/{$xiangmu}/index/cid/".$cid."/currentPage/".($this->page-1).".html'>上一页</a>&nbsp;";
		}
		for($i=$start;$i<=$end;$i++){
			if($i==$this->page){
				$pageStr.="<span class='num current'>{$i}</span>&nbsp;";
			}else{
				$pageStr.="<span class='num'><a href='".__MODULE__."/{$xiangmu}/index/cid/".$cid."/currentPage/{$i}.html'>{$i}</a></span>&nbsp;";
				//$pageStr.="<a href='?page={$i}'>{$i}</a>";
			}
		}
		if($this->page!=$this->pageNum){
				$pageStr.="<a href='".__MODULE__."/{$xiangmu}/index/cid/".$cid."/currentPage/".($this->page+1).".html'>下一页</a>";
		}
		return $pageStr;
	}
}