<?php

require_once ROOT_PATH.'include/common/Model.class.php';

class SortModel extends Model {
	
	public function getSortList() {

		$sql = "SELECT * FROM sp_sort";
		return $this ->db_dql($sql);
	}
}
