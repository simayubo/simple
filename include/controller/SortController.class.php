<?php
/**
 * 分类控制器
 */
if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Controller.class.php';

class SortController extends Controller {
	
	public function show() {
		
		if (empty($_GET['id'])) { exit('缺少参数！'); }

		$id = intval($_GET['id']);
		$common  = $this ->A('Common') ->common();
		$article = $this ->D('Article')->getSortArticle($id, 0, 10);

		if (empty($article[0]['sortname'])) {
			$title = '找不到分类 - '.$common['site']['site_title'];
		}else {
			$title = $article[0]['sortname'].' - '.$common['site']['site_title'];
		}
		
		$this -> assign('common', $common);
		$this -> assign('article', $article);
		$this -> assign('title', $title);
		$this -> display('sort.tpl');
	}
}
