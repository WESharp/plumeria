<?php
	//目录所在文件绝对路径
	if ( !defined('ABSPATH') )
	{
		define('ABSPATH', dirname(__FILE__) . '/');
	}
	//配置服务器应用url	
	define('HOSTURL', 'http://' . $_SERVER['HTTP_HOST'] .':'. $_SERVER['SERVER_PORT'] . '/plumeria/'  );
	
	//数据库配置
	//数据库服务器地址
	define('DBHOST', 'localhost');
	//数据库端口
	define('DBPORT', 3306);
	//数据库服务器用户名
	define('DBUSER', 'root');
	//数据库密码
	define('DBPASS', '1234');
	//数据库名称
	define('DBNAME', 'test');
?>