<?php
namespace Admin\Controller;

class ModbannerController extends BaseController{
	public function index(){
		$banner=M("banner")->select();
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->assign('banner',$banner);
		$this->display();
	}
	public function del($bid){
		//删除此条新闻
		$re=M("banner")->where("b_id=$bid")->delete();
		if($re){
			$this->success('此条大图删除成功！',__MODULE__.'/Modbanner/index.html');
		}else{
			$this->success('此条大图删除失败！',__MODULE__.'/Modbanner/index.html');
		}
	}
	public function upt($bid){
		$banner=M("banner")->where("b_id=$bid")->find();
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->assign("banner",$banner);
		$this->display();
	}
	public function save($bid){
		//原来的图片名称
		$res=M("banner")->where("b_id=$bid")->find();
		$b_picture=$res['b_picture'];
		$enb_picture=$res['enb_picture'];
		$b_time=$res['b_time'];
		if($_FILES['upload']['name']['0']!=""){
			$upload=new \Components\Upload();
			$re=$upload->saveFile("./Public/images");
			$b_picture=$re[0];
		}
		if($_FILES['enupload']['name']['0']!=""){
			$upload=new \Components\Uploads();
			$re=$upload->saveFile("./Public/images");
			$enb_picture=$re[0];
		}
		$_POST['b_picture']=$b_picture;
		$_POST['enb_picture']=$enb_picture;
		$_POST['b_time']=$b_time;
		$_POST['b_upttime']=time();
		$re=M("banner")->where("b_id=$bid")->data($_POST)->save();
		if($re){
			$this->success('此条导航大图修改成功！',__MODULE__.'/Modbanner/index.html');
		}else{
			$this->success('此条导航大图修改失败！',__MODULE__.'/Modbanner/index.html');
		}
	}
	public function delall(){
		$news=$_POST['news'];
		//将数组的值取出，变成字符串
		$str="'".join("','",$news)."'";
		//删除所有选项
		//$re=M()->execute("delete from dn_news where n_id in ($str)");
		$re=M("banner")->where("b_id in ($str)")->delete();
		if($re){
			$this->success('选中大图删除成功！',__MODULE__.'/Modbanner/index.html');
		}else{
			$this->success('选中大图删除失败！',__MODULE__.'/Modbanner/index.html');
		}
	}
	public function allpai(){
		//保存对应的排序值
		$arr=$_POST['paixu'];
		//进行一次筛选。选出有变动的值
		foreach($arr as $k=>$v){
			//找出对应数据库的保存的值
			$news=M("banner")->where("b_id=$k")->find();
			$yuan=$news['b_pai'];
			//看看是否排序值有所改动
			if($yuan != $v){
				$re=M()->execute("update dn_banner set b_pai='$v' where b_id=$k");
				if($re == false || $re == 0){
					break;
				}
			}
		}
		if($re){
			$this->success('排序修改成功！',__MODULE__.'/Modbanner/index.html');
		}else{
			$this->success('排序修改失败！',__MODULE__.'/Modbanner/index.html');
		}
	}
}