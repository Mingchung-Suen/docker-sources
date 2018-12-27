<?php
return array(
	/* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  getenv('APP_MYSQL_HOST'), // 服务器地址
    'DB_NAME'               =>  getenv('APP_MYSQL_NAME'), // 数据库名
    'DB_USER'               =>  getenv('APP_MYSQL_USER'), // 用户名
    'DB_PWD'                =>  getenv('APP_MYSQL_PASS'),  // 密码
    'DB_PORT'               =>  getenv('APP_MYSQL_PORT'), // 端口
    'DB_PREFIX' 	    =>  getenv('APP_MYSQL_PREFIX'), // 数据库表前缀
    'DB_CHARSET'            =>  'utf8', // 字符集
    'URL_MODEL'		    =>	2,

    'COOKIE_SECURE'         =>  true,   // Cookie安全传输
    'COOKIE_HTTPONLY'       =>  true,      // Cookie httponly设置
   );
