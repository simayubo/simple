<?php 
/**
* 入口文件
* =====================================
* 版权所有 流年博客  http://www.livem.cc
* ----------------------------------------------
* 这不是一个自由软件，未经授权不许任何使用和传播。
* =====================================
* @date: 2015-9-7
* @author: BO
* @version: 0.1
*/
header("content-type:text/html;charset=utf-8");
define('APP_NAME', 'Home');
define('DEBUG', TRUE);
define('ROOT_PATH',str_replace("\\", "/", dirname(__FILE__)).'/');
require ROOT_PATH.'inc.php';
