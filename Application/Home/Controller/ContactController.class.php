<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends Controller{
	public function index(){
		//查询出联系我们的相关信息
		$Lianxi=new \Home\Model\LianxiModel();
		$News=new \Home\Model\NewsModel();
		$contact=$Lianxi->where('l_id=1')->find();
		$hotnews=$News->order('n_click desc')->limit('0,6')->select();
		
		$this->assign('hotnews',$hotnews);
		$this->assign('contact',$contact);
		$this->display();
	}
	public function add(){
		$dianhua=$_POST['dianhua'];
		//正则判断
		if(preg_match('/(\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$/',$dianhua)){
		//向客户标注添加数据
			$_POST['m_time']=time();
			$message=M("message")->data($_POST)->add();
			if($message){
				$this->success("已经将您的信息通知企业，谢谢！",__MODULE__.'/Contact/index.html');
			}else{
				$this->success("您的信息通知企业失败，再试一次！",__MODULE__.'/Contact/index.html');
			}
		}else{
			$this->success("您的电话号码信息格式不正确，请重新输入！",__MODULE__.'/Contact/index.html');
		}
	}
}