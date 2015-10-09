<?php

if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Controller.class.php';

class CommentController extends Controller {

	/**
	 * 显示评论列表
	 */
	public function show() {

		$comment = $this ->D('Comment') ->getCommentList(0, 10);

		$this ->assign('title', '评论列表 - Simple后台管理');
		$this ->assign('menu', 'content');
		$this ->assign('comment', $comment);
		$this ->display('comment_list.html');
	}

	//更改评论审核
	public function setHide() {

		if (!empty($_GET['cid']) || !empty($_GET['hide'])) {
			
			$r = $this ->D('Comment') ->setHide($_GET['hide'], $_GET['cid']);
			if ($r > 0) {
				sucMsg('/admin.php?c=Comment&a=show');
			}else{
				errMsg('修改失败！');
			}
		}
	}
}