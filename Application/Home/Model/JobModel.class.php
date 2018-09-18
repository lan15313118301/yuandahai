<?php
namespace Home\Model;
use Think\Model;
class JobModel extends Model{
	protected  function _after_select(&$resultSet,$option=''){
		foreach($resultSet as &$value){
			if(LANG_SET=='en-us'){
				$value['j_name']=$value['enj_name'];
				$value['j_content']=$value['enj_content'];
			}
		}
	}
	protected  function _after_find(&$result,$options=''){
		if(LANG_SET=='en-us'){
			$result['j_name']=$result['enj_name'];
			$result['j_content']=$result['enj_content'];
		}
	}
}