<?php

if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Controller.class.php';

class IndexController extends Controller {

	public function main() {

		$this ->assign('title', '后台管理首页');
		$this ->assign('count', $this ->count());
		$this ->assign('article', $this ->D('Article') ->getNewArticleList(9));
		$this ->assign('comment', $this ->D('Comment') ->getNewCommentList(array(0,9)));
		$this ->assign('menu', 'main');
		$this ->display('index.html');
	}
	public function outLogin() {

		unset($_SESSION['login']);
		if (empty($_SESSION['login'])) {
			
			sucMsg('/');
		}else {
			errMsg("退出失败！");
		}
	}
	public function count() {

		$count = array(
			'article' 	=>	$this -> D('Article') 	->count(), 
			'sort'		=>	$this -> D('Sort') 		->count(),
			'comment'	=>	$this -> D('Comment')	->count(),
			);
		return $count;
	}
}