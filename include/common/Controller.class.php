<?php
/**
* 控制器继承公共类
* =====================================
* 版权所有 流年博客  http://www.livem.cc
* ----------------------------------------------
* 这不是一个自由软件，未经授权不许任何使用和传播。
* =====================================
* @date: 2015-9-7
* @author: BO
* @version: 0.1
*/
if (!defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/lib/smarty/Smarty.class.php'; //引入Smarty模板框架
require_once ROOT_PATH.'include/common/function.php';

class Controller{

	public $smarty = null;

	public function __construct(){
		
		if (APP_NAME == 'Home') { //前台

			$template_dir   = ROOT_PATH.'templates/default/'; 
			$template_c_dir = ROOT_PATH.'include/cache/templates_c/'; 

		}else if (APP_NAME == 'Admin') {  //后台

			$template_dir   = ROOT_PATH.'admin/template/'; 
			$template_c_dir = ROOT_PATH.'include/cache/admin/templates_c/'; //模板缓存路径

			if (empty($_SESSION['login']) || $_SESSION['login'] != 1 ) {
				
				exit("非法访问！系统已自动记录你的IP地址！");
			}
		}
		$this ->smarty = new smarty();

		$this ->smarty ->setTemplateDir($template_dir);
		$this ->smarty ->setCompileDir($template_c_dir);
	}
	/**
	 * 调用 smarty display 方法
	 */
	public function display($template = null, $cache_id = null, $compile_id = null, $parent = null){
		$this ->smarty ->display($template, $cache_id, $compile_id , $parent);
	}

	/**
	 * 调用 smarty assign 方法
	 */
	public function assign($tpl_var, $value = null, $nocache = false) {
		$this ->smarty ->assign($tpl_var, $value, $nocache);
	}
	/**
	 * 实例化控制器
	 * @name: 控制器名
	 * @return: 对象
	 */
	public function A($name) {
		
		if (APP_NAME == 'Home') {

			require_once ROOT_PATH.'include/controller/'.$name.'Controller.class.php';
		}else if (APP_NAME == 'Admin') {

			require_once ROOT_PATH . 'admin/controller/' . $name . 'Controller.class.php';
		}
		$name = $name.'Controller';
		return $_r = new $name();
	}
	/**
	 * 实例化对应M层对象
	 * @param str $name Model类名
	 */
	public function D($name) {

		if (APP_NAME == 'Home') {

			require_once ROOT_PATH.'include/model/'.$name.'Model.class.php';
		}else if (APP_NAME == 'Admin') {

			require_once ROOT_PATH.'admin/model/'.$name.'Model.class.php';
		}

		$name = $name.'Model';
		return $_r = new $name();
	}
}