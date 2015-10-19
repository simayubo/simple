<?php /* Smarty version 3.1.27, created on 2015-10-18 19:20:27
         compiled from "E:\wwwroot\wwwroot\demo\templates\default\sort.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:178335623807bdf0307_19017703%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3deef8be2eb9a97cf875dd2dc2f12f98e67cf881' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\templates\\default\\sort.tpl',
      1 => 1445167213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178335623807bdf0307_19017703',
  'variables' => 
  array (
    'article' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5623807bf1f0e5_09725721',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5623807bf1f0e5_09725721')) {
function content_5623807bf1f0e5_09725721 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'E:\\wwwroot\\wwwroot\\demo\\include\\lib\\smarty\\plugins\\modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '178335623807bdf0307_19017703';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="article">
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
		<div class="article-list">
			<h1><a href="/Article/show/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['aid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h1>
			<span><a href="/Sort/show/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['sortid'];?>
" title="查看所有 <?php echo $_smarty_tpl->tpl_vars['value']->value['sortname'];?>
 分类下文章"><?php echo $_smarty_tpl->tpl_vars['value']->value['sortname'];?>
</a> | <a><?php echo $_smarty_tpl->tpl_vars['value']->value['date'];?>
</a> | <a href="/Article/show/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['aid'];?>
#comment" title="查看所有 <?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
 的评论">评论<?php echo $_smarty_tpl->tpl_vars['value']->value['comnum'];?>
次</a><!-- | <a>阅读<?php echo $_smarty_tpl->tpl_vars['value']->value['views'];?>
次</a>--></span>
			<p><?php echo smarty_modifier_truncate(htmlspecialchars_decode($_smarty_tpl->tpl_vars['value']->value['content']),500,"...");?>
</p>
			<span style="margin:10px 0 0 0;"><a href="/Article/show/id/<?php echo $_smarty_tpl->tpl_vars['value']->value['aid'];?>
">[阅读全文-></a></span>
		</div>
	<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
		<div class="article-list">暂无数据！</div>
	<?php
}
?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="clean"></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>