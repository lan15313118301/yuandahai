<?php
namespace Home\Model;
use Think\Model;
class GaishuModel extends Model{
	protected  function _after_select(&$resultSet,$option=''){
		//var_dump($resultSet);
		//exit;
		foreach($resultSet as &$value){
				
			if(LANG_SET=='en-us'){
				$value['g_name']=$value['eng_name'];
				$value['g_picture']=$value['eng_picture'];
				$value['g_content']=$value['eng_content'];
			}
		}
	}
}