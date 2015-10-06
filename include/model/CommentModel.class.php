<?php
/**
* 评论　MODEL 类
* =====================================
* 版权所有 流年博客  http://www.livem.cc
* ----------------------------------------------
* 这不是一个自由软件，未经授权不许任何使用和传播。
* =====================================
* @date: 2015-9-8
* @author: BO
* @version: 0.1
*/
require_once ROOT_PATH.'include/common/Model.class.php';

class CommentModel extends Model {
	
	//添加评论
	public function add($data) {
		
		$sql = "INSERT INTO sp_comment (aid, gid, date, poster, content, email, url, hide, ip) 
				values (:aid,:gid,:date,:poster,:content,:email,:url,:hide,:ip)";
		return $this ->db_dml($sql, $data);
	}
	//获取对应文章评论列表
	public function getCommentList($data) {
		
		$sql = "SELECT * FROM sp_comment WHERE aid = ? LIMIT ?,?";
		return $this ->db_dql($sql, $data);
	}
	//获取侧栏评论列表
	public function getSidebarCommentList($data) {
		
		$sql = "SELECT cid, aid, poster, content FROM sp_comment ORDER BY cid DESC LIMIT ?,?";
		$arr = $this ->db_dql($sql, $data);
		
		$res = array();
		foreach ($arr as $key => $value) {
			foreach ($value as $_key => $_value) {
				switch ($_key) {
					case 'content': $res[$key][$_key] = mb_substr($_value, 0, 30, 'utf-8');
					break;
					default: $res[$key][$_key] = $_value ;
					break;
				}
			}
		}
		return $res;
		//return $arr;
	}
} 
