<?php
/**
* M 层公共继承类
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

class Model {
	
	private static $CONNECT = null;  //数据库连接标示
	/**
	* 初始化数据库连接
	* @date: 2015-9-7
	* @author: BO
	* @return: null
	*/
	public function __construct() {
		
		$DB_HOST = 'localhost';
		$DB_NAME = 'demo';
		$DB_PWD  = '';
		$DB_USER = 'root';
		
		try {
			$connect = new PDO("mysql:host=".$DB_HOST.";dbname=".$DB_NAME."", $DB_USER, $DB_PWD); 
			$connect ->exec("SET names utf8");
			$connect ->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		} catch (PDOException $e) {
    		echo '数据库连接错误: '.$e->getMessage();
		}
		self::$CONNECT = $connect;
	}
	/**
	 * 自定义dql语句
	 * 用于 SELECT 查询语句
	 * @param str   $sql    传入sql语句
	 * @param array $array  传入占位数据，以数组形式传入
	 * @param int   $find   如果为1则返回单条数据，0为返回列表
	 * @return 数组 or False
	 */
	public function db_dql($sql, $array = null, $find = 0) {
		
		$res = self::$CONNECT ->prepare($sql);
		$_arr = array();
		if (empty($array)){
			$_r = $res ->execute();
			$_arr = $res ->fetchAll(PDO::FETCH_ASSOC);
		}else {
			$_r = $res ->execute($array);
			$_arr = $res ->fetchAll(PDO::FETCH_ASSOC);
		}
		$res = null; //释放结果集
		if ($_r) {
			if ($find == 1){ //如果$find=1，转换为单条数据
				$r_arr = array();
				foreach ($_arr as $row => $value){
					foreach ($value as $_row => $_value){
						$r_arr[$_row] = $_value;
					}
				}
				$_arr = $r_arr;
			}
			return $_arr;
		}else {
			return FALSE;
		}
	}
	/**
	 * 自定义dml语句
	 * 用于INSECT, DELETE, UPDATE 操作
	 * @param $sql   传入sql语句
	 * @param $array 传入占位符数据
	 */
	public function db_dml($sql, $array = array()) {
		
		$res = self::$CONNECT ->prepare($sql);
		$_r = null;
		if (empty($array)){
			$_r = $res ->execute();
		}else {
			$_r = $res ->execute($array);
		}
		if ($_r > 0) {
			return $_r;
		}else {
			return FALSE;
		}
	}
	//批量处理
	public function db_batch($sql, $array) {

		if (!is_array($array)) exit('Date type error!'); //检测数据是否为数组
		$res = self::$CONNECT ->prepare($sql);

		foreach ($array as $key => $value) {
			foreach ($value as $_key => $_value) {
				$res ->bindParam($_key,$_value);
			}
		}

		$res ->execute();
	}
	/**
	 * 析构函数
	 * 通常用于关闭资源或释放资源
	 */
	public function __destruct() {
		self::$CONNECT = null;
	}
	
}