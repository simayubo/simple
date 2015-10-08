<?php /* Smarty version 3.1.27, created on 2015-10-08 05:38:19
         compiled from "E:\wwwroot\wwwroot\demo\admin\template\article_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:273765615e52b5bdb94_05078797%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '541742f15ac059c408822c24773ef2f8ca04c26e' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\admin\\template\\article_list.html',
      1 => 1444275496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273765615e52b5bdb94_05078797',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5615e52b608446_62386135',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5615e52b608446_62386135')) {
function content_5615e52b608446_62386135 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '273765615e52b5bdb94_05078797';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class='title-nav'>文章列表</div>
<div class='article-list'>
	<table cellspacing="0" cellpadding="0">
		<tr>
			<th><input type="checkbox" id="btu" value="全选" /></th>
			<th></th>
			<th>标题</th>
			<th>作者</th>
			<th>分类</th>
			<th>日期</th>
		</tr>
		<tr>
			<td><input name="a[]" type="checkbox" value="" /></td>
			<td><div class='comment-num'><a href="#">12</a></div></td>
			<td><a href="#">这是一个测试文章，请自行删除</a></td>
			<td><a href="#">admin</a></td>
			<td><a href="#">测试分类一</a></td>
			<td>2015-10-1</td>
		</tr>
		<tr>
			<td><input name="a[]" type="checkbox" value="" /></td>
			<td><div class='comment-num'><a href="#">12</a></div></td>
			<td><a href="#">这是一个测试文章，请自行删除</a></td>
			<td><a href="#">admin</a></td>
			<td><a href="#">测试分类一</a></td>
			<td>2015-10-1</td>
		</tr>
		<tr>
			<td><input name="a[]" type="checkbox" value="" /></td>
			<td><div class='comment-num'><a href="#">12</a></div></td>
			<td><a href="#">这是一个测试文章，请自行删除</a></td>
			<td><a href="#">admin</a></td>
			<td><a href="#">测试分类一</a></td>
			<td>2015-10-1</td>
		</tr>
		<tr>
			<td><input name="a[]" type="checkbox" value="" /></td>
			<td><div class='comment-num'><a href="#">12</a></div></td>
			<td><a href="#">这是一个测试文章，请自行删除</a></td>
			<td><a href="#">admin</a></td>
			<td><a href="#">测试分类一</a></td>
			<td>2015-10-1</td>
		</tr>
		<tr>
			<td><input name="a[]" type="checkbox" value="" /></td>
			<td><div class='comment-num'><a href="#">12</a></div></td>
			<td><a href="#">这是一个测试文章，请自行删除</a></td>
			<td><a href="#">admin</a></td>
			<td><a href="#">测试分类一</a></td>
			<td>2015-10-1</td>
		</tr>
		<tr>
			<td><input name="a[]" type="checkbox" value="" /></td>
			<td><div class='comment-num'><a href="#">12</a></div></td>
			<td><a href="#">这是一个测试文章，请自行删除</a></td>
			<td><a href="#">admin</a></td>
			<td><a href="#">测试分类一</a></td>
			<td>2015-10-1</td>
		</tr>
	</table>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript">

	window.onload=function()
	{
		var arr =document.getElementsByTagName('input');
		var b = document.getElementById("btu");
		var iSelect=true;
		b.onclick=function()
		{
			if(iSelect==true)
			{
				for(var i=0;i<arr.length;i++)
				{
					arr[i].checked=true;
				}
				iSelect=false;
				b.value='反选';
			}
			else if(iSelect==false)
			{
				for(var i=0;i<arr.length;i++)
				{
					arr[i].checked=false;
				}
				iSelect=true;
				b.value='全选';
			}

		}
	}
<?php echo '</script'; ?>
><?php }
}
?>