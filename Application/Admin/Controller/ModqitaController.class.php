<?php
namespace Admin\Controller;

class ModqitaController extends BaseController{
	public function index(){
		$msg=M('admin')->find();
		$qita=M('qita')->select();	
		
		$this->assign('qita',$qita);
		$this->assign('msg',$msg);
		$this->display();
	}
	public function upt($qid){
		$qita=M("qita")->where("q_id=$qid")->find();
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->assign("qita",$qita);
		$this->display();
	}
	public function save($qid){
		//原来的图片名称
		$res=M("qita")->where("q_id=$qid")->find();
		$q_time=$res['q_time'];
		$_POST['q_time']=$q_time;
		$_POST['q_upttime']=time();
		$re=M("qita")->where("q_id=$qid")->data($_POST)->save();
		if($re){
			$this->success('此条栏目修改成功！',__MODULE__.'/Modqita/index.html');
		}else{
			$this->success('此条栏目修改失败！',__MODULE__.'/Modqita/index.html');
		}
	}
}