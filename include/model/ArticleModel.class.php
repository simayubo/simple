<?php
/**
* 文章操作 M 层
* =====================================
* 版权所有 流年博客  http://www.livem.cc
* ----------------------------------------------
* 这不是一个自由软件，未经授权不许任何使用和传播。
* =====================================
* @date: 2015-9-7
* @author: BO
* @version: 0.1
*/
require_once ROOT_PATH.'include/common/Model.class.php';

class ArticleModel extends Model {
	
	//获取文章详细列表
	public function getArticleList($sta, $num) {
		
		$sql = "SELECT 	
				sp_articles.aid,
				sp_articles.title, 
				sp_articles.date,
				sp_articles.excerpt, 
				sp_articles.content, 
				sp_articles.alias, 
				sp_articles.sortid,
				sp_articles.views,
				sp_articles.comnum,
				sp_articles.top,
				sp_articles.sorttop,
				sp_articles.hide,
				sp_sort.sortname,
				sp_sort.sortalias
			FROM	
				sp_articles LEFT JOIN sp_sort ON sp_articles.sortid = sp_sort.sortid 
			ORDER BY sp_articles.aid DESC 
			LIMIT ?,?
		";
		return $this ->db_dql($sql, array($sta, $num));
	}
	//获取文章阅读页内容
	public function getArticle($aid) {
		
		$sql = "SELECT 	
				sp_articles.aid,
				sp_articles.title, 
				sp_articles.date,
				sp_articles.excerpt, 
				sp_articles.content, 
				sp_articles.alias, 
				sp_articles.sortid,
				sp_articles.views,
				sp_articles.comnum,
				sp_articles.top,
				sp_articles.sorttop,
				sp_articles.hide,
				sp_articles.allow_remark,
				sp_articles.password,
				sp_sort.sortname,
				sp_sort.sortalias
			FROM	
				sp_articles LEFT JOIN sp_sort ON sp_articles.sortid = sp_sort.sortid 
			WHERE 
				sp_articles.aid = ?
		";
		$_res = $this ->db_dql($sql, array($aid));
		if (!$_res) { return false; exit; }
		$res = array();
		foreach ($_res as $key => $value) {
			
			foreach ($value as $_key => $_value) {
				$res[$_key] = $_value;
			}
		}
		
		return $res;
	}

	//获取侧边栏最新文章列表
	public function getSidebarArticleList($num) {
		
		$sql = "SELECT aid, title FROM sp_articles ORDER BY aid DESC LIMIT 0,?";
		return $this ->db_dql($sql, array($num));
	}

	/**
	 * 获取文章页相邻文章 
	 * $aid 当前文章ID
	 * $type 'lsat' 上一篇 'next' 下一篇
	 * $data sql占位符数据
	 */
	public function getAdjacentArticle($type, $data) {

		$sql = '';
		if ($type == 'last') {
			$sql = "SELECT aid,title FROM sp_articles WHERE aid  < ? ORDER BY aid DESC LIMIT 1";
		}elseif ($type == 'next') {
			$sql = "SELECT aid,title FROM sp_articles WHERE aid  > ? ORDER BY aid LIMIT 1";
		}
		return $this ->db_dql($sql, $data, 1);
	}

	public function getSortArticle($id, $sta, $num) { 

		$sql = "SELECT 	
				sp_articles.aid,
				sp_articles.title, 
				sp_articles.date,
				sp_articles.excerpt, 
				sp_articles.content, 
				sp_articles.alias, 
				sp_articles.sortid,
				sp_articles.views,
				sp_articles.comnum,
				sp_articles.top,
				sp_articles.sorttop,
				sp_articles.hide,
				sp_sort.sortname,
				sp_sort.sortalias
			FROM	
				sp_articles LEFT JOIN sp_sort ON sp_articles.sortid = sp_sort.sortid 
			WHERE sp_articles.sortid = ? 
			ORDER BY sp_articles.aid DESC 
			LIMIT ?,?
		";
		return $this ->db_dql($sql, array($id, $sta, $num));
	}
	//点击量+1
	public function setCount($aid) {

		$sql = "UPDATE sp_articles SET views = views+1 WHERE aid = ?";
		return $this ->db_dql($sql, array($aid));
	}
}