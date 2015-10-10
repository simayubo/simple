<?php /* Smarty version 3.1.27, created on 2015-10-10 11:26:29
         compiled from "E:\wwwroot\wwwroot\demo\admin\template\comment_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:2999256188565c15135_29146961%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd91699373168b11569f97d882407cb23da736c00' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\admin\\template\\comment_list.html',
      1 => 1444447563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2999256188565c15135_29146961',
  'variables' => 
  array (
    'comment' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56188565d004a2_78409784',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56188565d004a2_78409784')) {
function content_56188565d004a2_78409784 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2999256188565c15135_29146961';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class='title-nav'>评论列表</div>
<form action='' method='post'>
<div class='article-list'>
	<table cellspacing="0" cellpadding="0">
		<tr>
			<th><input type="checkbox" id="btu" value="全选" /></th>
			<th>作者</th>
			<th>内容</th>
			<th>时间</th>
			<th>邮箱</th>
			<th>网址</th>
			<th>IP地址</th>
			<th>审核</th>
		</tr>
		<?php
$_from = $_smarty_tpl->tpl_vars['comment']->value;
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
				<td><input name="a[]" type="checkbox" value="" /></td>
				<td><a href="/admin.php?c=Comment&a=show&poster=<?php echo $_smarty_tpl->tpl_vars['value']->value['poster'];?>
" title='点击查看此用户所有评论'><?php echo $_smarty_tpl->tpl_vars['value']->value['poster'];?>
</a></td>
				<td><a href="/Article/show/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['aid'];?>
#comment-<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
" title='点击查看该评论在前台位置' target='_blank'><?php echo mb_substr($_smarty_tpl->tpl_vars['value']->value['content'],0,25,'utf-8');?>
..</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['date'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['email'];?>
</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
" title='点击查看该网址' target='_blank'><?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['ip'];?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['value']->value['hide'] == 'n') {?>
						<a href="/admin.php?c=Comment&a=setHide&cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
&hide=y" title='点击取消审核' style='color:green;font-size: 0.8em;padding: 5px; background: #EAEAEA;'>正常</a>
					<?php } else { ?>
						<a href="/admin.php?c=Comment&a=setHide&cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
&hide=n" title='点击审核此评论' style='color:#c7254e;font-size: 0.8em;padding: 5px; background: #f9f2f4;'>未审核</a>
					<?php }?>
				</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
			<tr><td>暂无数据</td></tr>
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
			<option value='unhide'>审核</option>
			<option value='hide'>取消审核</option>
		</select>
		<input type='submit' value='提交' class='sub' />
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