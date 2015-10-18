<?php
/**
* 文章逻辑M层
* =====================================
* 版权所有 流年博客  http://www.livem.cc
* ----------------------------------------------
* 这不是一个自由软件，未经授权不许任何使用和传播。
* =====================================
* @date: 2015-9-8
* @author: BO
* @version: 0.1
*/
if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Controller.class.php';

class ArticleController extends Controller {

	public function show() {

		if (!empty($_GET['id'])) {
			
			$id = addslashes($_GET['id']);
			
			$common  = $this ->A('Common') ->common();
			$comment = $this ->D('Comment')->getCommentList(array($id, 0, 10));	

			$d_article = $this ->D('Article');
			$article = $d_article->getArticle($id);
			//相邻文章
			$adjacent= array(
				'last' => $d_article ->getAdjacentArticle('last' ,array($id)),
				'next' => $d_article ->getAdjacentArticle('next' ,array($id))
				);

			$this -> assign('common', $common);
			$this -> assign('article', $article);
			$this -> assign('adjacent', $adjacent);
			$this -> assign('comment', $comment);
			$this -> assign('title', $article['title'].' - '.$common['site']['site_title']);
			$this -> display('article.tpl');
			
		}else {
			$this ->display('404.tpl');
		}
	}
	
	
}