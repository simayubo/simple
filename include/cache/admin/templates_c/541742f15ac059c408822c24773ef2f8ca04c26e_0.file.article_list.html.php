<?php /* Smarty version 3.1.27, created on 2015-10-18 14:15:49
         compiled from "E:\wwwroot\wwwroot\demo\admin\template\article_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:2873356233915cf31b1_83674754%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '541742f15ac059c408822c24773ef2f8ca04c26e' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\admin\\template\\article_list.html',
      1 => 1445148946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2873356233915cf31b1_83674754',
  'variables' => 
  array (
    'article' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56233915daa464_85093326',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56233915daa464_85093326')) {
function content_56233915daa464_85093326 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2873356233915cf31b1_83674754';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class='title-nav'>文章列表 - <a href="/admin.php?c=Article&a=post" style='padding: 5px;background: #eaeaea;font-size: 0.8em;' title='查看所有文章'>全部</a></div>
<form action='' method='post'>
<div class='article-list'>
	<table cellspacing="0" cellpadding="0">
		<tr>
			<th><input type="checkbox" id="btu" value="全选" /></th>
			<th></th>
			<th>标题</th>
			<th>作者</th>
			<th>分类</th>
			<th>日期</th>
			<th>允许评论</th>
		</tr>
		<?php
$_from = $_smarty_tpl->tpl_vars['article']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
			<tr>
				<td><input name="a[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['aid'];?>
" /></td>
				<td><div class='comment-num'><a href="/admin.php?c=Comment&a=show&aid=<?php echo $_smarty_tpl->tpl_vars['value']->value['aid'];?>
" title='点击查看此文章的所有评论'><?php echo $_smarty_tpl->tpl_vars['value']->value['comnum'];?>
</a></div></td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['value']->value['top'] == 'y') {?><span class='top'>置顶</span><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['value']->value['hide'] == 'y') {?><span class='draft'>草稿</span><?php }?>
					<a href="/admin.php?c=Article&a=edit&aid=<?php echo $_smarty_tpl->tpl_vars['value']->value['aid'];?>
" title='点击编辑此文章'><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
				</td>
				<td><a href="/admin.php?c=Article&a=post&userid=<?php echo $_smarty_tpl->tpl_vars['value']->value['userid'];?>
" title='查看该用户所有文章'><?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
</a></td>
				<td><a href="/admin.php?c=Article&a=post&sortid=<?php echo $_smarty_tpl->tpl_vars['value']->value['sortid'];?>
" title='查看该分类下所有文章'><?php echo $_smarty_tpl->tpl_vars['value']->value['sortname'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['date'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['value']->value['allow_remark'] == 'n') {?><span style='color:#c7254e;font-size: 0.8em;padding: 5px; background: #f9f2f4;'>禁止</span><?php } else { ?><span style='color:green;font-size: 0.8em;padding: 5px; background: #EAEAEA;'>允许</span><?php }?></td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
			暂无数据
		<?php
}
?>
	</table>
</div>
<div class='page'>
	<div class='page-left'>
		<select name='type'  class='sel'>
			<option value='-1' selected = "selected">选项</option>
			<option value='delete'>删除</option>
		</select>
		<input type='submit' value='提交' onclick="return confirm('确定你的操作？')" class='sub' />
	</div>
	<div class='page-right'>
		<ul>
			<li> <a href="#" class='menu'>1</a></li>
			<li> <a href="#">2</a></li>
			<li> <a href="#">3</a></li>
			<li> <a href="#">4</a></li>
			<li> <a href="#">5</a></li>
			<li> <a href="#">》</a></li>
		</ul>
	</div>
</div>
</form>
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