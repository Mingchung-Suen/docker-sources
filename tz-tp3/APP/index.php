<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// tiaozhan定制版
if(getenv('APP_STATUS') == 'deploy') {
    define('APP_DEBUG',False);
    define('APP_STATUS','deploy');
} elseif(getenv('APP_STATUS') == 'testing') {
    define('APP_DEBUG',False);
    define('APP_STATUS','testing');
} else {
    define('APP_DEBUG',True);
}
// 定义应用目录
define('APP_PATH','./Application/');
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
