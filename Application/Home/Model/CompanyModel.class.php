<?php
namespace Home\Model;
use Think\Model;
class CompanyModel extends Model{
	protected  function _after_select(&$resultSet,$option=''){
		foreach($resultSet as &$value){
			if(LANG_SET=='en-us'){
				$value['cm_name']=$value['encm_name'];
				$value['cm_content']=$value['encm_content'];
			}
		}
	}
	protected  function _after_find(&$result,$options=''){
		if(LANG_SET=='en-us'){
			$result['cm_name']=$result['encm_name'];
			$result['cm_content']=$result['encm_content'];
		}
	}
}