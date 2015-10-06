<?php 
/**
* 公共函数文件
* =====================================
* 版权所有 流年博客  http://www.livem.cc
* ----------------------------------------------
* 这不是一个自由软件，未经授权不许任何使用和传播。
* =====================================
* @date: 2015-9-7
* @author: BO
* @version: 0.1
*/

function set_url() {
	$u = $_SERVER["REQUEST_URI"];
	var_dump($u);
	$_u = str_replace("?","",str_replace("/", "", strrchr(strrchr($u, "/"),"?")));
	$a = explode("&", $_u);
	foreach($a as $_r)
 	{
 		$_a = explode("=", $_r);
 		var_dump($_a);
 		//$_GET[$Php2Html_TmpArray[0]] = $Php2Html_TmpArray[1];
	}
	var_dump($a);
}
//验证码函数
function verify_code() {
	
	$randCode = '';
	$chars = 'abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPRSTUVWXYZ23456789';
	for ( $i = 0; $i < 5; $i++ ){
		$randCode .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
	}
	$img = imagecreate(70,22);

	$bgColor = imagecolorallocate($img,255,255,255);
	$pixColor = imagecolorallocate($img,mt_rand(30, 180), mt_rand(10, 100), mt_rand(40, 250));

	for($i = 0; $i < 5; $i++){
		$x = $i * 13 + mt_rand(0, 4) - 2;
		$y = mt_rand(0, 3);
		$text_color = imagecolorallocate($img, mt_rand(30, 180), mt_rand(10, 100), mt_rand(40, 250));
		imagechar($img, 5, $x + 5, $y + 3, $randCode[$i], $text_color);
	}
	for($j = 0; $j < 60; $j++){
		$x = mt_rand(0,70);
		$y = mt_rand(0,22);
		imagesetpixel($img,$x,$y,$pixColor);
	}
	
	$_SESSION['code'] = $randCode;
	header('Content-Type: image/png');
	imagepng($img);
	imagedestroy($img);
}
/**
 * 表单验证
 * @param $str	传入处理字符串
 * @param $type	处理类型
 * @param $s	如果类型为 'strlen' $s代表最低字符数
 * @param $e	如果类型为 'strlen' $e代表最高字符数
 */
function is_str_verify($str, $type, $s = 0, $e = 10) {
	if (!empty($str)) {
		if ($type == 'user') {
			$len = mb_strlen($str,'UTF8');
			if ($len < 2 || $len > 8) {
				errMsg("用户名只允许2-8个中英文字符！");
			}
		}elseif ($type == 'email'){
			if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$str)) {
				errMsg("邮箱格式不正确 (test@test.com)");
			}
		}elseif ($type == 'url') {
			if (!preg_match("/^(https?:\/\/)?(((www\.)?[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)?\.([a-zA-Z]+))|(([0-1]?[0-9]?[0-9]|2[0-5][0-5])\.([0-1]?[0-9]?[0-9]|2[0-5][0-5])\.([0-1]?[0-9]?[0-9]|2[0-5][0-5])\.([0-1]?[0-9]?[0-9]|2[0-5][0-5]))(\:\d{0,4})?)(\/[\w- .\/?%&=]*)?$/i",$str)) {
				errMsg("网址格式不正确 (http://www.test.com)");
			}
		}elseif ($type == 'strlen') {
			$len = mb_strlen($str,'UTF8');
			if ($len < $s || $len > $e) {
				errMsg("请输入".$s."-".$e."个字符！");
			}
		}elseif ($type == 'verify_code') {
			if ( strtolower($str) ==  strtolower($_SESSION['code'])) {
				$_SESSION['code'] = NULL;
			}else {
				errMsg("验证码错误！");
			}
		}else {
			exit('Type error!');
		}
	}else {
		errMsg("所有输入框不能为空！");
	}
}

// 加密函数
// $string： 明文 或 密文
// $operation：DECODE表示解密,其它表示加密
// $key： 密匙
// $expiry：密文有效期
function authcode($string, $operation = '', $key = 'simple', $expiry = 0) {
	// 动态密匙长度，相同的明文会生成不同密文就是依靠动态密匙
	$ckey_length = 4;
	// 密匙
	$key = md5($key ? $key : C('AU_KEY'));
	// 密匙a会参与加解密
	$keya = md5(substr($key, 0, 16));
	// 密匙b会用来做数据完整性验证
	$keyb = md5(substr($key, 16, 16));
	// 密匙c用于变化生成的密文
	$keyc = $ckey_length ? ($operation == 'DECODE' ? substr($string, 0, $ckey_length): substr(md5(microtime()), -$ckey_length)) : '';
	// 参与运算的密匙
	$cryptkey = $keya.md5($keya.$keyc);
	$key_length = strlen($cryptkey);
	// 明文，前10位用来保存时间戳，解密时验证数据有效性，10到26位用来保存$keyb(密匙b)，解密时会通过这个密匙验证数据完整性
	// 如果是解码的话，会从第$ckey_length位开始，因为密文前$ckey_length位保存 动态密匙，以保证解密正确
	$string = $operation == 'DECODE' ? base64_decode(substr($string, $ckey_length)) : sprintf('%010d', $expiry ? $expiry + time() : 0).substr(md5($string.$keyb), 0, 16).$string;
	$string_length = strlen($string);
	$result = '';
	$box = range(0, 255);
	$rndkey = array();
	// 产生密匙簿
	for($i = 0; $i <= 255; $i++) {
		$rndkey[$i] = ord($cryptkey[$i % $key_length]);
	}
	// 用固定的算法，打乱密匙簿，增加随机性，好像很复杂，实际上对并不会增加密文的强度
	for($j = $i = 0; $i < 256; $i++) {
		$j = ($j + $box[$i] + $rndkey[$i]) % 256;
		$tmp = $box[$i];
		$box[$i] = $box[$j];
		$box[$j] = $tmp;
	}
	// 核心加解密部分
	for($a = $j = $i = 0; $i < $string_length; $i++) {
		$a = ($a + 1) % 256;
		$j = ($j + $box[$a]) % 256;
		$tmp = $box[$a];
		$box[$a] = $box[$j];
		$box[$j] = $tmp;
		// 从密匙簿得出密匙进行异或，再转成字符
		$result .= chr(ord($string[$i]) ^ ($box[($box[$a] + $box[$j]) % 256]));
	}
	if($operation == 'DECODE') {
		// substr($result, 0, 10) == 0 验证数据有效性
		// substr($result, 0, 10) - time() > 0 验证数据有效性
		// substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16) 验证数据完整性
		// 验证数据有效性，请看未加密明文的格式
		if((substr($result, 0, 10) == 0 || substr($result, 0, 10) - time() > 0) && substr($result, 10, 16) == substr(md5(substr($result, 26).$keyb), 0, 16)) {
			return substr($result, 26);
		} else {
			return '';
		}
	} else {
		// 把动态密匙保存在密文里，这也是为什么同样的明文，生产不同密文后能解密的原因
		// 因为加密后的密文可能是一些特殊字符，复制过程可能会丢失，所以用base64编码
		return $keyc.str_replace('=', '', base64_encode($result));
	}
}

//普通过滤
function I($str) {
	return htmlspecialchars($str);
}
function errMsg($str) {
	echo "<script>alert('".$str."');javascript:history.go(-1); </script>";
	exit();
}
function sucMsg($url) {
	echo "<script>window.location.href ='".$url."';</script>";
}




