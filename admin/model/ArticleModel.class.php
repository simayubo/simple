<?php 

if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Model.class.php';

class ArticleModel extends Model{
	
	/**
	 * 获取文章列表
	 * @param  int $sta 从哪开始
	 * @param  int $num 取几条
	 * @param  array $where 如果有条件，则以数组传入条件
	 */
	public function getArticleList($sta, $num, $where = null) {

		$sql = '';
		$data = array();
		if (empty($where)) { //如果为空

			$sql = "SELECT 	sp_articles.aid,sp_articles.title, 	sp_articles.date, sp_articles.allow_remark, sp_articles.userid,	sp_articles.sortid,sp_articles.comnum,sp_articles.top,sp_articles.hide,sp_sort.sortname,sp_user.uid
			FROM	
				sp_articles 
				LEFT JOIN sp_sort ON sp_articles.sortid = sp_sort.sortid 
				LEFT JOIN sp_user ON sp_articles.userid = sp_user.id 
			ORDER BY sp_articles.top DESC, sp_articles.aid DESC 
			LIMIT ?,? ";
			
		}else { //如果不为空

			$sql = "SELECT 	sp_articles.aid,sp_articles.title, 	sp_articles.date, sp_articles.allow_remark, sp_articles.userid,	sp_articles.sortid,sp_articles.comnum,sp_articles.top,sp_articles.hide,sp_sort.sortname,sp_user.uid
			FROM	
				sp_articles 
				LEFT JOIN sp_sort ON sp_articles.sortid = sp_sort.sortid 
				LEFT JOIN sp_user ON sp_articles.userid = sp_user.id 
			WHERE ".$where[0]."= ".$where[1]."
			ORDER BY sp_articles.top DESC, sp_articles.aid DESC 
			LIMIT ?,? ";
		}
		$data = array($sta, $num);
		return $this ->db_dql($sql, $data);
	}
	/**
	 * 获取单个文章所有数据
	 * @param  [type] $aid 文章id
	 */
	public function getArticle($aid) {

		$sql = "SELECT * FROM sp_articles WHERE aid = ?";
		return $this ->db_dql($sql, array($aid), 1);
	}
	/**
	 * 添加文章
	 * @param array $date 传入数据数组
	 */
	public function add($data) {

		$sql = "INSERT INTO sp_articles (title, date, excerpt, content, sortid, top, allow_remark, hide) values (:title, :date, :excerpt, :content, :sortid, :top, :allow_remark, :hide)";
		return $this ->db_dml($sql, $data);
	}

	//统计数量
	public function count() {
		
		$sql = "SELECT count(`aid`) FROM sp_articles";
		$arr = $this ->db_dql($sql,null,1);
		return $arr['count(`aid`)'];
	}
	//获取最新文章列表
	public function getNewArticleList($num) {
		
		$sql = "SELECT aid, title FROM sp_articles WHERE hide = 'n' ORDER BY aid DESC LIMIT 0,?";
		return $this ->db_dql($sql, array($num));
	}
}