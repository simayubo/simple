<?php /* Smarty version 3.1.27, created on 2015-09-12 12:45:57
         compiled from "E:\wwwroot\wwwroot\demo\templates\default\sidebar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2609255f40265490850_82747948%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '154d7d7db5a8de1151423a27ee186c7963bb06da' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\templates\\default\\sidebar.tpl',
      1 => 1442054755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2609255f40265490850_82747948',
  'variables' => 
  array (
    'common' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f40265527534_95995339',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f40265527534_95995339')) {
function content_55f40265527534_95995339 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2609255f40265490850_82747948';
?>
<div id="sidebar">
	<div class="mod" style="margin-top: 10px;">
		<input type="text" class="text" /> <input type="submit" value="搜索" />
	</div>
	<div class="mod">
		<h3>近期文章</h3>
		<ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['common']->value['sidebar']['article'];
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
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
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
	<div class="mod">
		<h3>近期评论</h3>
		<?php
$_from = $_smarty_tpl->tpl_vars['common']->value['sidebar']['comment'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
			<span><a href="/Article/show/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['aid'];?>
#comment-<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
" title="查看该评论上的文章"><?php echo $_smarty_tpl->tpl_vars['value']->value['poster'];?>
</a>：<?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
...</span> 
		<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
			<span>暂无评论</span> 
		<?php
}
?>
	</div>
	<div class="mod">
		<h3>分类列表</h3>
		<ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['common']->value['sidebar']['sortlist'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
				<li><a href="/Sort/show/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['sortid'];?>
" title="查看 <?php echo $_smarty_tpl->tpl_vars['value']->value['sortname'];?>
 分类下所有文章"><?php echo $_smarty_tpl->tpl_vars['value']->value['sortname'];?>
 (<?php echo $_smarty_tpl->tpl_vars['value']->value['articlenum'];?>
)</a></li>
			<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
				<li>暂无分类</li> 
			<?php
}
?>
		</ul>
	</div>
	<div class="mod">
		<h3>附加功能</h3>
		<ul>
			<li><a href="/Index/login">登录</a></li>
			<li><a href="http://www.livem.cc">流年博客</a></li>
		</ul>
	</div>
</div><?php }
}
?>