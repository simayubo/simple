<?php 

if( !defined('APP_NAME')) { exit('Error!'); }

require_once ROOT_PATH.'include/common/Model.class.php';

class CommentModel extends Model{
	
	/**
	 * 获取详细评论列表
	 * @param  int $sta 从哪开始
	 * @param  int $num 取几条
	 * @return 评论列表
	 */
	public function getCommentList($sta, $num) {

		$sql = "SELECT cid, aid, poster, date, content, email, url, hide, ip FROM sp_comment ORDER BY cid DESC LIMIT ?,?";
		return $this ->db_dql($sql, array($sta, $num));
	}
	/**
	 * 修改评论审核
	 * @param string 	$hide 'n' = >审核 'y' => 取消审核
	 * @param int 		$cid  传入评论行的ID值
	 */
	public function setHide($hide, $cid) {

		$sql = "UPDATE sp_comment SET hide = ? WHERE cid = ?";
		return $this ->db_dml($sql, array($hide, $cid));
	}
	//统计评论总数
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