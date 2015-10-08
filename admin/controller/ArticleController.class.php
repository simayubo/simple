<?php

if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Controller.class.php';

class ArticleController extends Controller {

	public function add(){
		
		if (!empty($_POST)) {

			$data = array();
			if ($_POST['do'] == 'post') { //直接发表
				
				empty($_POST['title']) ? errMsg('标题不能为空！'):'';
				empty($_POST['content']) ? errMsg('文章内容不能为空！'):'';
				empty($_POST['sortid']) ? errMsg('请选择文章分类！'):'';
			} 

			$data = array(
				':title'		=>	empty($_POST['title']) ? '未命名文章' : I($_POST['title']),
				':date'			=>	empty($_POST['date']) ?	date('Y-m-d H:i:s') : I($_POST['date']),
				':excerpt'		=>	empty($_POST['excerpt']) ? '' : I($_POST['excerpt']),
				':content'		=>	empty($_POST['content']) ? '无内容' : I($_POST['content']),
				':sortid'		=>	empty($_POST['sortid']) ? 0 : I($_POST['sortid']),
				':top'			=>	empty($_POST['top']) ? 'n' : I($_POST['top']),
				':allow_remark'	=>	empty($_POST['allow_remark']) ? 'n' : I($_POST['allow_remark']),
				':hide'			=>	$_POST['do'] == 'save'? 'y' : 'n',
				);

			$r = $this ->D('Article') ->add($data);
			if ($r) {
				sucMsg('/admin.php?c=Article&a=post');
			}else{
				errMsg('发表文章失败！');
			}
		}

		$this ->assign('sort', $this ->D('Sort') ->getSortList());
		$this ->assign('title', '编写文章 - Simple后台管理');
		$this ->assign('menu', 'write');
		$this ->assign('time', date('Y-m-d H:i:s'));
		$this ->display('article_add.html');
	}
	/**
	 * 文章列表
	 * @return [type] [description]
	 */
	public function post() {

		$this ->assign('title', '文章列表 - Simple后台管理');
		$this ->assign('menu', 'content');
		$this ->display('article_list.html');
	}
}