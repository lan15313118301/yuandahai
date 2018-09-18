<?php
namespace Home\Model;
use Think\Model;
class ProductModel extends Model{
	protected  function _after_select(&$resultSet,$option=''){
		foreach($resultSet as &$value){
			if(LANG_SET=='en-us'){
				$value['p_name']=$value['enp_name'];
				$value['p_intro']=$value['enp_intro'];
				$value['p_picture']=$value['enp_picture'];
				$value['p_content']=$value['enp_content'];
			}
		}
	}
	protected  function _after_find(&$result,$options=''){
			if(LANG_SET=='en-us'){
				$result['p_name']=$result['enp_name'];
				$result['p_intro']=$result['enp_intro'];
				$result['p_picture']=$result['enp_picture'];
				$result['p_content']=$result['enp_content'];
			}
	}
}