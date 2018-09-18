<?php
namespace Home\Model;
use Think\Model;
class NewsModel extends Model{
	protected  function _after_select(&$resultSet,$option=''){
		foreach($resultSet as &$value){
			if(LANG_SET=='en-us'){
				$value['n_title']=$value['enn_title'];
				$value['n_info']=$value['enn_info'];
				$value['n_picture']=$value['enn_picture'];
				$value['n_content']=$value['enn_content'];
				if($value['n_cate']=='公司新闻'){
					$value['n_cate']='Company news';
				}else if($value['n_cate']=='行业新闻'){
					$value['n_cate']='Industry news';
				}
			}
		}
	}
	protected  function _after_find(&$result,$options=''){
			if(LANG_SET=='en-us'){
				$result['n_title']=$result['enn_title'];
				$result['n_info']=$result['enn_info'];
				$result['n_picture']=$result['enn_picture'];
				$result['n_content']=$result['enn_content'];
				if($result['n_cate']=='公司新闻'){
					$result['n_cate']='Company news';
				}else if($result['n_cate']=='行业新闻'){
					$result['n_cate']='Industry news';
				}
			}
	}
}