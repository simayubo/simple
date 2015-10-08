<?php 

if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Model.class.php';

class CommentModel extends Model{
	
	public function count() {
		
		$sql = "SELECT count(`cid`) FROM sp_comment";
		$arr = $this ->db_dql($sql,null,1);
		return $arr['count(`cid`)'];
	}
	//获取最新评论列表
	public function getNewCommentList($data) {
		
		$sql = "SELECT cid, aid, poster, content FROM sp_comment ORDER BY cid DESC LIMIT ?,?";
		$arr = $this ->db_dql($sql, $data);
		
		$res = array();
		foreach ($arr as $key => $value) {
			foreach ($value as $_key => $_value) {
				switch ($_key) {
					case 'content': $res[$key][$_key] = mb_substr($_value, 0, 18, 'utf-8');
					break;
					default: $res[$key][$_key] = $_value ;
					break;
				}
			}
		}
		return $res;
	}
}