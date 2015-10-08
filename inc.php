<?php
/**
* 系统初始化
* =====================================
* 版权所有 流年博客  http://www.livem.cc
* ----------------------------------------------
* 这不是一个自由软件，未经授权不许任何使用和传播。
* =====================================
* @date: 2015-9-7
* @author: BO
* @version: 0.1
*/
if (!defined('APP_NAME')) {exit('Error!');}

DEBUG == TRUE?'':error_reporting(0); //判断是否debug模式

ini_set('date.timezone','Asia/Shanghai'); //设置时区

require_once ROOT_PATH.'include/common/function.php';

if (APP_NAME == 'Home') { //如果是前台
	
	//PATH_INFO模式
	if (empty($_SERVER['PATH_INFO'])) { 
	
		$_GET['c'] = 'IndexController';
		$_GET['a'] = 'main';
	}else {
		$url = $_SERVER['PATH_INFO'];
		$url = explode('/', $url);
	
		foreach ($url as $key => $value) { //过滤html实体
			$url[$key] = htmlspecialchars($value);
		}
		$_GET['c'] = empty($url[1])?'IndexController':$url[1].'Controller';
		$_GET['a'] = empty($url[2])?'main':$url[2];
	
		//如果存在参数，则将参数及参数值循环重新赋值给GET
		if (!empty($url[3])) {
		
			for ($i = 3; $i < count($url); $i = $i + 2) {
		
				if (empty($url[$i + 1])) {
					exit('参数错误');
				}else {
					$_GET[$url[$i]] = $url[$i+1];
				}
			}
		}
	}

	$control_dir = 'include/controller/';

} else if (APP_NAME == 'Admin') {  //如果是后台

	$_GET['c'] = empty($_GET['c'])?'IndexController':I($_GET['c']).'Controller';
	$_GET['a'] = empty($_GET['a'])?'main':I($_GET['a']);

	$control_dir = 'admin/controller/';
}

$control = $_GET['c'];
$action  = $_GET['a'];

if (!file_exists(ROOT_PATH.$control_dir.$control.'.class.php')) //判断是否存在类文件
	if (DEBUG == TRUE) exit('Class file not found!');
	else exit('Page error!');
	
require_once ROOT_PATH.$control_dir.$control.'.class.php'; //引入对应类文件

if (!class_exists($control) || $control == 'CommonController') //判断是否存在控制器
	if (DEBUG == TRUE) exit('Controll not found!'); 
	else exit('Page error!');

 //初始化session
if (empty($_COOKIE['simple_session_id'])) {
	session_start();
	$session_time = 2 * 3600;
	setcookie('simple_session_id', session_id(), time() + $session_time);
} else {
	session_id($_COOKIE['simple_session_id']);
	session_start();
}

$c = new $control(); //初始化控制器

if (!method_exists($c, $action))  //判断是否存在成员方法
	if (DEBUG == TRUE) exit('Class method not found!'); 
	else exit('Page error!');
	
$c -> $action(); //加载成员方法