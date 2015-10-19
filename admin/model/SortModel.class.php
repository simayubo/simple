<?php
/**
 * 后台分类Model类
 */
if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Model.class.php';

class SortModel extends Model{
    /**
     * @param $sta 从哪开始
     * @param $num 取几条
     * @return array|bool
     */
	public function getSortList($sta = null, $num = null) {
        if($sta == null && $num == null) {
            $sql = "SELECT * FROM sp_sort";
            return $this ->db_dql($sql);
        }else {
            $sql = "SELECT * FROM sp_sort ORDER BY sortid LIMIT ?,?";
            return $this ->db_dql($sql, array($sta, $num));
        }
	}
    /**
     * 统计函数
     * @return mixed
     */
	public function count() {
		$sql = "SELECT count(`sortid`) FROM sp_sort";
		$arr = $this ->db_dql($sql,null,1);
		return $arr['count(`sortid`)'];
	}

    /**
     * 统计分类下有多少文章
     * @param $data 带占位符的二维数组
     */
    public function articleCount($data) {
        $sql = "UPDATE sp_sort SET articlenum = (SELECT count(aid) FROM sp_articles WHERE sortid = :sortid AND hide = 'n') WHERE sortid = :sort";
        return $this ->db_batch($sql, $data);
    }


}