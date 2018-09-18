<?php
return array(
	//'配置项'=>'配置值'
		'MODULE_ALLOW_LIST'         =>  array('Home','Admin'), // 配置你原来的分组列表
		'DEFAULT_GROUP'             =>  'Home',
		'URL_ROUTER_ON'         =>  true,   // 是否开启URL路由
		'URL_ROUTE_RULES'       =>  array(
				'/^cn\/en\/([a-zA-Z]+)\/([a-zA-Z]+)\/([a-zA-Z-]+\d+[a-zA-Z]?)$/'=>'Clothing/showBySN?year=:1&month=:2&sn=:3|format_xname'
		
		
		), // 默认路由规则 针对模块
);