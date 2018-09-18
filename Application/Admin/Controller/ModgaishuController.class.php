<?php
namespace Admin\Controller;

class ModgaishuController extends BaseController{
	public function index(){
		$gaishu=M('gaishu')->select();
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->assign('gaishu',$gaishu);
		$this->display();
	}
	public function del($gid){
		//删除此条新闻
		$re=M("gaishu")->where("g_id=$gid")->delete();
		if($re){
			$this->success('此条产品概述删除成功！',__MODULE__.'/Modgaishu/index.html');
		}else{
			$this->success('此条产品概述删除失败！',__MODULE__.'/Modgaishu/index.html');
		}
	}
	public function upt($gaishuId){
		$gaishu=M("gaishu")->where("g_id=$gaishuId")->find();
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->assign("gaishu",$gaishu);
		$this->display();
	}
	public function save($gid){
		//原来的图片名称
		$res=M("gaishu")->where("g_id=$gid")->find();
		$g_picture=$res['g_picture'];
		$eng_picture=$res['eng_picture'];
		$g_time=$res['g_time'];
		if($_FILES['upload']['name']['0']!=""){
			$upload=new \Components\Upload();
			$re=$upload->saveFile("./Public/images");
			$g_picture=$re[0];
		}
		if($_FILES['enupload']['name']['0']!=""){
			$upload=new \Components\Uploads();
			$re=$upload->saveFile("./Public/images");
			$eng_picture=$re[0];
		}
		$_POST['g_picture']=$g_picture;
		$_POST['eng_picture']=$eng_picture;
		$_POST['g_time']=$g_time;
		$_POST['g_upttime']=time();
		$re=M("gaishu")->where("g_id=$gid")->data($_POST)->save();
		if($re){
			$this->success('此条产品概述修改成功！',__MODULE__.'/Modgaishu/index.html');
		}else{
			$this->success('此条产品概述修改失败！',__MODULE__.'/Modgaishu/index.html');
		}
	}
	public function delall(){
		$gaishu=$_POST['news'];
		//将数组的值取出，变成字符串
		$str="'".join("','",$gaishu)."'";
		//删除所有选项
		//$re=M()->execute("delete from dn_news where n_id in ($str)");
		$re=M("gaishu")->where("g_id in ($str)")->delete();
		if($re){
			$this->success('选中概述删除成功！',__MODULE__.'/Modgaishu/index.html');
		}else{
			$this->success('选中概述删除失败！',__MODULE__.'/Modgaishu/index.html');
		}
	}
	public function allpai(){
		//保存对应的排序值
		$arr=$_POST['paixu'];
		//进行一次筛选。选出有变动的值
		foreach($arr as $k=>$v){
			//找出对应数据库的保存的值
			$news=M("gaishu")->where("g_id=$k")->find();
			$yuan=$news['g_pai'];
			//看看是否排序值有所改动
			if($yuan != $v){
				$re=M()->execute("update dn_gaishu set g_pai='$v' where g_id=$k");
				if($re == false || $re == 0){
					break;
				}
			}
		}
		if($re){
			$this->success('排序修改成功！',__MODULE__.'/Modgaishu/index.html');
		}else{
			$this->success('排序修改失败！',__MODULE__.'/Modgaishu/index.html');
		}
	}
}