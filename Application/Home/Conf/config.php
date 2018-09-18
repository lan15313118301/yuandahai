<?php

function is_mobile(){//判断手机电脑
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
    $is_mobile = false;
    foreach ($mobile_agents as $device) {
        if (stristr($user_agent, $device)) {
            $is_mobile = true;
            break;
        }
    }
    return $is_mobile;
 }
 
 if(is_mobile()){ //判断手机电脑
    $is = "Mobile";
 }else{
    $is = "View";          
 }
return array(
	//'配置项'=>'配置值'
		//开启语言吧功能
		'LANG_SWITCH_ON'=>true,
		//自动检测语言开启多语言功能后有效
		'LANG_AUTO_DETECT'=>true,
		//允许切换的语言列表，用逗号分隔
		'LANG_LIST'=>'zh-cn,en-us',
		//默认语言切换变量
		'VAR_LANGUAGE'=>'lang',
		
		'TOKEN_ON'=>true,  // 是否开启令牌验证
		'TOKEN_NAME'=>'__hash__',    // 令牌验证的表单隐藏字段名称
		'TOKEN_TYPE'=>'md5',  //令牌哈希验证规则 默认为MD5
		'TOKEN_RESET'=>true,  //令牌验证出错后是否重置令牌 默认为true
		
		//m模板
		'DEFAULT_V_LAYER' => $is, // 设置默认的视图层名称
		//"SHOW_PAGE_TRACE"		=>true,
		
		/* 默认设定 */
		//'DEFAULT_MODULE'        => 'Index', // 默认模块名称
		'DEFAULT_CONTROLLER'    => 'Index',
		'DEFAULT_ACTION'        => 'index', // 默认操作名称
		
		/* 数据库设置 */
		'DB_TYPE'               => 'mysql',     // 数据库类型
		'DB_HOST'               => 'localhost', // 服务器地址
		'DB_NAME'               => 'yaundahai',          // 数据库名
		'DB_USER'               => 'root',      // 用户名
		'DB_PWD'                => 'root',          // 密码
		'DB_PORT'               => '3306',        // 端口
		'DB_PREFIX'             => 'dn_',    // 数据库表前缀
		'DB_FIELDTYPE_CHECK'    => false,       // 是否进行字段类型检查
		'DB_FIELDS_CACHE'       => false,        // 启用字段缓存
		'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8
		'DB_DEPLOY_TYPE'        => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
		'DB_RW_SEPARATE'        => false,       // 数据库读写是否分离 主从式有效
		'DB_MASTER_NUM'         => 1, // 读写分离后 主服务器数量
		'DB_SLAVE_NO'           => '', // 指定从服务器序号
		'DB_SQL_BUILD_CACHE'    => false, // 数据库查询的SQL创建缓存
		'DB_SQL_BUILD_QUEUE'    => 'file',   // SQL缓存队列的缓存方式 支持 file xcache和apc
		'DB_SQL_BUILD_LENGTH'   => 20, // SQL缓存的队列长度
		'DB_SQL_LOG'            => false, // SQL执行日志记录
		
		/* 模板引擎设置 */
		'TMPL_CONTENT_TYPE'     => 'text/html', // 默认模板输出类型
		'TMPL_ACTION_ERROR'     => 'Public:success', // 默认错误跳转对应的模板文件
		'TMPL_ACTION_SUCCESS'   => 'Public:success', // 默认成功跳转对应的模板文件
		'TMPL_EXCEPTION_FILE'   => THINK_PATH.'Tpl/think_exception.tpl',// 异常页面的模板文件
		'TMPL_DETECT_THEME'     => false,       // 自动侦测模板主题
		'TMPL_TEMPLATE_SUFFIX'  => '.html',     // 默认模板文件后缀
		'TMPL_FILE_DEPR'        =>  '/', //模板文件MODULE_NAME与ACTION_NAME之间的分割符
		
);