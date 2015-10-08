<?php
/**
* 评论管理控制器
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

class CommentController extends Controller {
	
	/**
	 * 评论提交验证
	 */
	public function add_verify() {
		
		if (empty($_POST) || empty($_POST['aid'])) { exit('非法提交！'); }
		
		is_str_verify($_POST['verify_code'], 'verify_code');
		is_str_verify($_POST['poster'], 'user');
		is_str_verify($_POST['email'], 'email');
		is_str_verify($_POST['url'], 'url');
		is_str_verify($_POST['content'], 'strlen', 2, 1000);
		
		$data = array(
			':aid'		=>	I($_POST['aid']),
			':gid'		=>	0,
			':date'		=>	date("Y-m-d", time()),
			':poster'	=>	I($_POST['poster']),
			':content'	=>	I($_POST['content']),
			':email'	=>	I($_POST['email']),
			':url'		=>	I($_POST['url']),
			':hide'		=>	'n',
			':ip'		=>	'127.0.0.1',
		);

		$c_model = $this ->D('Comment');
		$_r = $c_model ->add($data);
		if ($_r > 0) {
			$url = "/Article/show/id/".I($_POST['aid'])."";
			unset($_SESSION['code']);
			sucMsg($url);
		} else {
			errMsg('评论失败！');
		}
	}

	
}