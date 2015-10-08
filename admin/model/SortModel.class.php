<?php 

if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Model.class.php';

class SortModel extends Model{
	
	/**
	 * 获取分类列表
	 * @return array 分类数组
	 */
	public function getSortList() {

		$sql = "SELECT * FROM sp_sort";
		return $this ->db_dql($sql);
	}

	public function count() {
		
		$sql = "SELECT count(`sortid`) FROM sp_sort";
		$arr = $this ->db_dql($sql,null,1);
		return $arr['count(`sortid`)'];
	}
}