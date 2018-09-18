<?php
namespace Home\Model;
use Think\Model;
class LianxiModel extends Model{
	protected  function _after_find(&$result,$options=''){
			if(LANG_SET=='en-us'){
				$result['l_name']=$result['enl_name'];
				$result['l_zhaopin']=$result['enl_zhaopin'];
				$result['l_addr']=$result['enl_addr'];
				$result['l_content']=$result['enl_content'];
			}
	}
}