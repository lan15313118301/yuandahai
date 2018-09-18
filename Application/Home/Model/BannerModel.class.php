<?php
namespace Home\Model;
use Think\Model;
class BannerModel extends Model{
	protected  function _after_select(&$resultSet,$option=''){
		//var_dump($resultSet);
		//exit;
		foreach($resultSet as &$value){
				
			if(LANG_SET=='en-us'){
				$value['b_picture']=$value['enb_picture'];
			}
		}
	}
}