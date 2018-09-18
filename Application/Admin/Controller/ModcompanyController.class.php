<?php
namespace Admin\Controller;

class ModcompanyController extends BaseController{
	public function index(){
		$company=M('company')->select();
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->assign('company',$company);
		$this->display();
	}
	public function del($cmid){
		//删除此条新闻
		$re=M("company")->where("cm_id=$cmid")->delete();
		if($re){
			$this->success('此条栏目删除成功！',__MODULE__.'/Modcompany/index.html');
		}else{
			$this->success('此条栏目删除失败！',__MODULE__.'/Modcompany/index.html');
		}
	}
	public function upt($cmid){
		$company=M("company")->where("cm_id=$cmid")->find();
		$msg=M('admin')->find();
		 
		$this->assign('msg',$msg);
		$this->assign("company",$company);
		$this->display();
	}
	public function save($cmid){
		//原来的图片名称
		$res=M("company")->where("cm_id=$cmid")->find();
		$cm_time=$res['cm_time'];
		$_POST['cm_time']=$cm_time;
		$_POST['cm_upttime']=time();
		$re=M("company")->where("cm_id=$cmid")->data($_POST)->save();
		if($re){
			$this->success('此条栏目修改成功！',__MODULE__.'/Modcompany/index.html');
		}else{
			$this->success('此条栏目修改失败！',__MODULE__.'/Modcompany/index.html');
		}
	}
	public function delall(){
		$news=$_POST['news'];
		//将数组的值取出，变成字符串
		$str="'".join("','",$news)."'";
		//删除所有选项
		//$re=M()->execute("delete from dn_news where n_id in ($str)");
		$re=M("company")->where("cm_id in ($str)")->delete();
		if($re){
			$this->success('选中栏目删除成功！',__MODULE__.'/Modcompany/index.html');
		}else{
			$this->success('选中栏目删除失败！',__MODULE__.'/Modcompany/index.html');
		}
	}
	public function allpai(){
		//保存对应的排序值
		$arr=$_POST['paixu'];
		//进行一次筛选。选出有变动的值
		foreach($arr as $k=>$v){
			//找出对应数据库的保存的值
			$news=M("company")->where("cm_id=$k")->find();
			$yuan=$news['cm_pai'];
			//看看是否排序值有所改动
			if($yuan != $v){
				$re=M()->execute("update dn_company set cm_pai='$v' where cm_id=$k");
				if($re == false || $re == 0){
					break;
				}
			}
		}
		if($re){
			$this->success('排序修改成功！',__MODULE__.'/Modcompany/index.html');
		}else{
			$this->success('排序修改失败！',__MODULE__.'/Modcompany/index.html');
		}
	}
}