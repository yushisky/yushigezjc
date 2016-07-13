<?php
header('Content-type:text/html;charset=utf-8');
return array(
	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息
	//'URL_PATHINFO_DEPR'=>'=',//正常情况下都不会去修改
	//'TMPL_TEMPLATE_SUFFIX'=>'.tpl',
	// 添加数据库配置信息
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'jinling', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => '3306', // 端口
	'DB_PREFIX' => 'jl_', // 数据库表前缀
	'DB_CHARSET'=> 'utf8',
	'DB_FIELDTYPE_CHECK' => FALSE,//是否进行字段类型检查
	'DB_FIELDS_CACHE' => TRUE,//启用字段缓存
	'DB_DEPLOY_TYPE' => 0, //数据库的部署方式
	//定界符的修改
	'TMPL_L_DELIM'  => '<{',//设置定界符
	'TMPL_R_DELIM'  => '}>',//设置定界符
	'TMPL_ENGINE_type' => 'think',//php
	'DEFAULT_MODULE' =>'Home',//home//设置模块 
	// 设置我们的访问的控制器
	'MODULE_ALOW_LIST'=> array('Home','Admin'),//允许那个的模块可以访问
	'LOAD_EXT_FLIE' => 'one,two',//允许那个的模块可以访问
	'__UPLOAD__' => __ROOT__.'/Public/home/Upload',
	'__COMMON__' => __ROOT__.'/Common',
	//开启和关闭session
	'SESSION_AUTO_START' =>true,//true
);






