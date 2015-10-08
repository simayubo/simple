<?php 

if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Model.class.php';

class ArticleModel extends Model{
	
	/**
	 * 添加文章
	 * @param array $date 传入数据数组
	 */
	public function add($data) {

		$sql = "INSERT INTO sp_articles (title, date, excerpt, content, sortid, top, allow_remark, hide) values (:title, :date, :excerpt, :content, :sortid, :top, :allow_remark, :hide)";
		return $this ->db_dml($sql, $data);
	}

	public function count() {
		
		$sql = "SELECT count(`aid`) FROM sp_articles";
		$arr = $this ->db_dql($sql,null,1);
		return $arr['count(`aid`)'];
	}
	//获取最新文章列表
	public function getNewArticleList($num) {
		
		$sql = "SELECT aid, title FROM sp_articles ORDER BY aid DESC LIMIT 0,?";
		return $this ->db_dql($sql, array($num));
	}
}