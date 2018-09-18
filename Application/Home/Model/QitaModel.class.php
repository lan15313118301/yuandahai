<?php
namespace Home\Model;
use Think\Model;
class QitaModel extends Model{
	protected  function _after_select(&$resultSet,$option=''){
		foreach($resultSet as &$value){
			if(LANG_SET=='en-us'){
				$value['q_name']=$value['enq_name'];
				$value['q_content']=$value['enq_content'];
			}
		}
	}
	protected  function _after_find(&$result,$options=''){
		if(LANG_SET=='en-us'){
			$result['q_name']=$result['enq_name'];
			$result['q_content']=$result['enq_content'];
		}
	}
}