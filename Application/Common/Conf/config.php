<?php
return array(
		// 允许访问的模块列表
		'MODULE_ALLOW_LIST'    =>    array('Home'),
		'DEFAULT_MODULE'       =>    'Home',  // 默认模块
		//数据库配置信息
		'DB_TYPE'   => 'mysql', // 数据库类型
		'DB_HOST'   => '127.0.0.1', // 服务器地址
	    'DB_NAME'   => 'yiyuangou', // 数据库名
		'DB_USER'   => 'yiyuangou', // 用户名
		'DB_PWD'    => 'yiyuangou', // 密码
		'DB_PORT'   => 3306, // 端口
		'DB_PREFIX' => 'y_', // 数据库表前缀
		'DB_CHARSET'=> 'utf8', // 字符集
		'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增
);