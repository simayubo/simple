<?php 
/**
* 后台入口文件
*/
header("content-type:text/html;charset=utf-8");
define('APP_NAME', 'Admin');
define('DEBUG', TRUE);
define('ROOT_PATH',str_replace("\\", "/", dirname(__FILE__)).'/');
require ROOT_PATH.'inc.php';