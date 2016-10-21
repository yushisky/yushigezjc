<?php
return array(
		/* 系统数据加密设置 */
		'AUTH_KEY'				=>	')*k"p_Xaxw/|:3^]HAcSsAOsas~JasC(jcmVss211-Zt4y<r50uD;', //默认数据加密KEY
		
		/* 调试配置 */
		'SHOW_PAGE_TRACE'		=>	false,
		'SHOW_ERROR_MSG'		=>	false,
		'PAGE_TRACE_SAVE'		=>	false,
		/* URL配置 */
		'URL_CASE_INSENSITIVE'	=>	false, //默认false 表示URL区分大小写 true则表示不区分大小写
		'URL_MODEL'				=>	2, //URL模式,普通模式为0、PATHINFO模式为1、REWRITE模式为2和兼容模式为3
		'VAR_URL_PARAMS'		=>	'', //PATHINFO URL参数变量
		'URL_PATHINFO_DEPR'		=>	'/', //PATHINFO URL分割符
		'URL_HTML_SUFFIX'		=>	'.html',
		/* 数据库配置 */
		'DB_TYPE'				=>	'mysql', //数据库类型
		'DB_HOST'				=>	'rdsdanopk0n88do46qz1.mysql.rds.aliyuncs.com', //服务器地址
		'DB_NAME'				=>	'nabang2015', //数据库名
		'DB_USER'				=>	'nabang', //用户名
		'DB_PWD'				=>	'nabang2016', //密码
		'DB_PORT'				=>	'3306', //端口
		'DB_PREFIX'				=>	'nb_', //数据库表前缀
		//数据库配置2
		'nabang' => array(
			'db_type'  => 'mysql',
			'db_user'  => 'nabang',
			'db_pwd'   => 'nabang2016',
			'db_host'  => 'rdsdanopk0n88do46qz1.mysql.rds.aliyuncs.com',
			'db_port'  => '3306',
			'db_name'  => 'nabang'
		),
		/* COOKIE设置 */
		'COOKIE_DOMAIN'			=>	'nbesqcn2016.com', // Cookie有效域名
		'COOKIE_PATH'			=>	'/',  // Cookie路径
		'COOKIE_PREFIX'			=>	'nb_', //Cookie前缀 避免冲突
		'COOKIE_EXPIRE'			=>	10800,
		'SESSION_PREFIX'		=>	'nb_', //Session前缀
		/* 模板相关配置 */
		'LANG_SWITCH_ON'		=>	true,
		'LANG_AUTO_DETECT'		=>	true, // 自动侦测语言 开启多语言功能后有效
		'LANG_LIST'				=>	'zh-cn', // 允许切换的语言列表 用逗号分隔
		'VAR_LANGUAGE'			=>	'lang', // 默认语言切换变量
		'TMPL_PARSE_STRING'		=> 	array(
		    /*项目更新后要废弃*/
				'ADMIN_TMPL'	=> 	__ROOT__ . '/Public/admin',
				'HOME_TMPL'		=> 	__ROOT__ . '/Public/home',
				'CENTER_TMPL'	=> 	__ROOT__ . '/Public/center',
				'PUBLIC_JS'		=> 	__ROOT__ . '/Public/js',
				'Test_TMPL'		=>  __ROOT__ . '/Public/Test',
		    /*项目更新后要废弃*/
		    'H_UI_CSS' => __ROOT__ . '/Public/h-ui/css',
		    'H_UI_JS' => __ROOT__ . '/Public/h-ui/js'
		),
		/* 模块定义 */
		'MODULE_ALLOW_LIST'		=>  array('Home','Admin','Test'),
		'DEFAULT_MODULE'		=>  'Test',  // 默认模块
		'APP_SUB_DOMAIN_DEPLOY'	=>	0, // 开启子域名配置
		'APP_SUB_DOMAIN_RULES'	=>	array(
			'admin'				=>	'Admin',
			'*'					=>	'Home',
		    'test'				=>  'Test'
		),
		
		//默认错误跳转对应的模板文件
		'TMPL_ACTION_ERROR'		=>	'Common@Public:show_message',
		//默认成功跳转对应的模板文件
		'TMPL_ACTION_SUCCESS'	=>	'Common@Public:show_message'
);