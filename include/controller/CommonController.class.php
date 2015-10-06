<?php
/**
* 自定义公共类 (这个类文件无法从url访问)
* =====================================
* 版权所有 流年博客  http://www.livem.cc
* ----------------------------------------------
* 这不是一个自由软件，未经授权不许任何使用和传播。
* =====================================
* @date: 2015-9-7
* @author: BO
* @version: 0.1
*/
require_once ROOT_PATH.'include/common/Controller.class.php';

class CommonController extends Controller {
	
	/**
	 * 整理常用信息为一个数组
	 */
	public function common() {
		
		$common = array(
			'site'		=>	$this ->getOption(),
			'navi'		=>	$this ->getNavi(),
			'sidebar'	
				=>	array(
						'article'	=> $this ->D('Article') ->getSidebarArticleList(15),
						'comment'	=> $this ->D('Comment') ->getSidebarCommentList(array(0, 7)),
						'sortlist'	=> $this ->D('Sort')	->getSortList(),
					),
		);
		return $common;
	}
	/**
	 * 获取所有配置信息
	 */
	public function getOption(){
		
		$return_arr = array();
		$_arr = $this ->D('Common') ->getOption();
		
		foreach ($_arr as $key => $value) {
			$return_arr[$value['option_name']] = $value['option_value'];
		}
		return $return_arr;
	}
	/**
	 * 获取导航栏
	 */
	public function getNavi() {
		
	 	return $this ->D('Common') ->getNavi();
	}
	
}