<?php
/**
* 
* 版权所有 流年博客  http://www.livem.cc
* ----------------------------------------------
* 这不是一个自由软件，未经授权不许任何使用和传播。
* ==========================
* @date: 2015-9-7
* @author: BO
* @version: 0.1
*/
if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Controller.class.php';

class IndexController extends Controller {
	
	/* 首页 */
	public function main() {
		
		$common  = $this ->A('Common') ->common();
		$article = $this ->D('Article')->getArticleList(0, 10);

		$this -> assign('common', $common);
		$this -> assign('article', $article);
		$this -> assign('title', $common['site']['site_title']);
		$this -> display('index.tpl');
	}
	
	/* 调用验证码 */
	public function verify_code() {
		
		require_once ROOT_PATH.'include/common/function.php';
		verify_code();
	}
	/**
	 * 后台登录
	 */
	public function login() {

		if (!empty($_SESSION['login']) && $_SESSION['login'] == 1 ) {
			
			header("location:/admin.php");
			exit();
		}

		$err  = ''; //定义错误消息
		if (!empty($_POST)) {

			if (!empty($_POST['verify_code']) && (strtolower(I($_POST['verify_code'])) == strtolower($_SESSION['code']))) {
				
				unset($_SESSION['verify_code']); //验证码验证后删除
				if (!empty($_POST['username']) && !empty($_POST['password'])) {
					
					$res = $this ->D('Common') ->getUser(I($_POST['username']));
					if ($res && I($_POST['password']) == authcode($res['pwd'], 'DECODE') ) {
						
						$_SESSION['login'] = 1;  //写入session
						header("location:/admin.php"); //跳转后台
						
					} else{ $err = '用户名或密码错误！'; }
				}else{ $err = '用户名或密码不能为空！'; }
			}else { $err = '验证码错误！'; }
		}
		$common  = $this ->A('Common') ->common();

		$this ->assign('title', '后台登录');
		$this ->assign('err', $err);
		$this ->assign('common', $common);
		$this ->display('login.tpl');
	}
	
	public function test () { 
		
		echo authcode('admin');
	}
	
}