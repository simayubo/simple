<?php /* Smarty version 3.1.27, created on 2015-10-08 13:30:16
         compiled from "E:\wwwroot\wwwroot\demo\admin\template\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:277385615ff6829e2c8_57719598%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3d8ec8d0cb1748f20cb822aed399dae342b01f9' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\admin\\template\\index.html',
      1 => 1444282213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277385615ff6829e2c8_57719598',
  'variables' => 
  array (
    'count' => 0,
    'article' => 0,
    'value' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5615ff6833fbf3_10197113',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5615ff6833fbf3_10197113')) {
function content_5615ff6833fbf3_10197113 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '277385615ff6829e2c8_57719598';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class='block'>
	<div class='title-nav'>站点统计</div>
	<p>
		当前共有 <span><?php echo $_smarty_tpl->tpl_vars['count']->value['article'];?>
</span> 篇文章， <span><?php echo $_smarty_tpl->tpl_vars['count']->value['comment'];?>
</span> 条评论， <span><?php echo $_smarty_tpl->tpl_vars['count']->value['sort'];?>
</span> 个分类。 <br/>点击下面链接快速开始:<br/><br/>
		<b><a href="/admin.php?c=Article&a=add">写文章</a> &nbsp;<a href="#">外观设置</a> &nbsp;<a href="#">插件管理</a> &nbsp;<a href="#">系统设置</a></b>
	</p>
</div>
<hr color='#EAEAEA'>
<div class='page-main-block'>
	<h2>最新文章</h2>
	<ul>
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
			<li><a href="/Article/show/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['aid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
" target='_blank'><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></li>
		<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
			<li><a>暂无文章</a></li>
		<?php
}
?>
	</ul>
</div>
<div class='page-main-block'>
	<h2>最新评论</h2>
	<ul>
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
			<li><span><a href="/Article/show/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['aid'];?>
#comment-<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
" title="查看该评论上的文章" target='_blank'><?php echo $_smarty_tpl->tpl_vars['value']->value['poster'];?>
</a>：<?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
...</span> </li>
		<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
			<span>暂无评论</span> 
		<?php
}
?>
	</ul>
</div>
<div class='page-main-block'>
	<h2>官方公告</h2>
	<ul>
		<li><a href="#">大声大声道这是我的第一篇文章！</a></li>
		<li><a href="#">这是我的第一篇文的时代章！</a></li>
		<li><a href="#">这是我第一篇文章！</a></li>
		<li><a href="#">都是这是我的打到第一篇文章！</a></li>
		<li><a href="#">这是我的第的时代一篇文章！</a></li>
		<li><a href="#">这是我的第一 篇文章！</a></li>
	</ul>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>