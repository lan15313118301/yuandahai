<?php
namespace Home\Model;
use Think\Model;
class CateModel extends Model{
	protected  function _after_select(&$resultSet,$option=''){
		foreach($resultSet as &$value){
			if(LANG_SET=='en-us'){
				$value['c_name']=$value['enc_name'];
			}
		}
	}
	protected  function _after_find(&$result,$options=''){
			if(LANG_SET=='en-us'){
				$result['c_name']=$result['enc_name'];
				
			}
	}
}