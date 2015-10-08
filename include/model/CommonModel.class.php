<?php
/**
* 自定义公共 M 层
* =====================================
* 版权所有 流年博客  http://www.livem.cc
* ----------------------------------------------
* 这不是一个自由软件，未经授权不许任何使用和传播。
* =====================================
* @date: 2015-9-7
* @author: BO
* @version: 0.1
*/
if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Model.class.php';

class CommonModel extends Model{
	
	//获取所有配置信息列表
	public function getOption() {
		$sql = "SELECT option_name, option_value FROM sp_options";
		return $this ->db_dql($sql);
	}
	//获取导航列表
	public function getNavi() {
		$sql = "SELECT navname, url, newtab FROM sp_navi";
		return $this ->db_dql($sql);
	}
	//传入uid 返回用户所有信息
	public function getUser($user) {

		$sql = "SELECT * FROM sp_user WHERE uid = ? LIMIT 1";
		return $this ->db_dql($sql, array($user), 1);
	}
	
}