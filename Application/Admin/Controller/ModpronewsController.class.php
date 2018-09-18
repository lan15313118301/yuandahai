<?php
namespace Admin\Controller;

class ModpronewsController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
		$pronews=M()->query("select * from dn_pronews as p join dn_cate as c on p.c_id=c.c_id");
		
		$this->assign('pronews',$pronews);
		$this->assign('msg',$msg);
		$this->display();
	}
	public function del($pnid){
		//删除此产品
		$re=M("pronews")->where("p_id=$pnid")->delete();
		if($re){
			$this->success('此产品文章删除成功！',__MODULE__.'/Modpronews/index.html');
		}else{
			$this->success('此产品文章删除失败！',__MODULE__.'/Modpronews/index.html');
		}
	}
	public function upt($pnid){
		$pronews=M("pronews")->where("p_id=$pnid")->find();
		$cate=M('cate')->where("c_cate='详细页'")->select();
		$msg=M('admin')->find();
			
		$this->assign('msg',$msg);
		$this->assign('cate',$cate);
		$this->assign("pronews",$pronews);
		$this->display();
	}
	public function save($pnid){
		//原来的图片名称
		$res=M("pronews")->where("p_id=$pnid")->find();
			
		$_POST['p_time']=$res['p_time'];
		$_POST['p_upttime']=time();
		$re=M("pronews")->where("p_id=$pnid")->data($_POST)->save();
		if($re){
			$this->success('此条产品文章修改成功！',__MODULE__.'/Modpronews/index.html');
		}else{
			$this->success('此条产品文章修改失败！',__MODULE__.'/Modpronews/index.html');
		}
	}
	public function delall(){
		$product=$_POST['news'];
		//将数组的值取出，变成字符串
		$str="'".join("','",$product)."'";
		//删除所有选项
		//$re=M()->execute("delete from dn_news where n_id in ($str)");
		$re=M("pronews")->where("p_id in ($str)")->delete();
		if($re){
			$this->success('选中产品删除成功！',__MODULE__.'/Modpronews/index.html');
		}else{
			$this->success('选中产品删除失败！',__MODULE__.'/Modpronews/index.html');
		}
			
	}
}