<?php /* Smarty version 3.1.27, created on 2015-10-18 10:21:25
         compiled from "E:\wwwroot\wwwroot\demo\templates\default\article.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:276595623022523c681_05092191%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6708c6d4e111cb242087df598440f0736ad2a1e' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\templates\\default\\article.tpl',
      1 => 1445134879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276595623022523c681_05092191',
  'variables' => 
  array (
    'article' => 0,
    'adjacent' => 0,
    'comment' => 0,
    'value' => 0,
    'common' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56230225343384_63252237',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56230225343384_63252237')) {
function content_56230225343384_63252237 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '276595623022523c681_05092191';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="article">
	<div class="article-list">
		<?php if ($_smarty_tpl->tpl_vars['article']->value == null) {?>
			没有找到此文章！
		<?php } elseif ($_smarty_tpl->tpl_vars['article']->value['hide'] == 'y') {?>
            没有找到此文章！
        <?php } else { ?>
			<h1><a href="/Article/show/id/<?php echo $_smarty_tpl->tpl_vars['article']->value['aid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h1>
			<span><a href="#"><?php echo $_smarty_tpl->tpl_vars['article']->value['sortname'];?>
</a> | <a><?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
</a> | <a href="#comment">评论<?php echo $_smarty_tpl->tpl_vars['article']->value['comnum'];?>
次</a><!--  | <a href="#">阅读<?php echo $_smarty_tpl->tpl_vars['article']->value['views'];?>
次</a> --></span>
			<p><?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['article']->value['content']);?>
</p>
		
	</div>
	<div class="xl">
		<span class='left'><?php if ($_smarty_tpl->tpl_vars['adjacent']->value['last'] != null) {?>
			<a href="/Article/show/id/<?php echo $_smarty_tpl->tpl_vars['adjacent']->value['last']['aid'];?>
" title="上篇文章 <?php echo $_smarty_tpl->tpl_vars['adjacent']->value['last']['title'];?>
">上一篇：<?php echo $_smarty_tpl->tpl_vars['adjacent']->value['last']['title'];?>
</a><?php }?>
		</span>
		<span class='right'><?php if ($_smarty_tpl->tpl_vars['adjacent']->value['next'] != null) {?>
			<a href="/Article/show/id/<?php echo $_smarty_tpl->tpl_vars['adjacent']->value['next']['aid'];?>
" title="下篇文章 <?php echo $_smarty_tpl->tpl_vars['adjacent']->value['next']['title'];?>
">下一篇：<?php echo $_smarty_tpl->tpl_vars['adjacent']->value['next']['title'];?>
</a><?php }?>
		</span>
		<div class="clean"></div>
	</div>
	<div class="comment">
		<a name='comment'></a>
		<h4>评论列表: (<a href="#comment"><?php echo $_smarty_tpl->tpl_vars['article']->value['comnum'];?>
</a>)</h4><br/>
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
			<div class="comment-list">
			<a name="comment-<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
">
				<h4><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
" title="查看 <?php echo $_smarty_tpl->tpl_vars['value']->value['poster'];?>
 的主页"  target="_blank" rel="nofollow"><?php echo $_smarty_tpl->tpl_vars['value']->value['poster'];?>
</a>:<span><i>--------- <?php echo $_smarty_tpl->tpl_vars['value']->value['date'];?>
</i></span></h4>
				<p><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
 &nbsp;<a>回复</a></p>
			</div>
		<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
        <?php if ($_smarty_tpl->tpl_vars['article']->value['allow_remark'] == 'y') {?>
		<form action="/Comment/add_verify" method="post">
			<h4 style="border-top:1px solid #dedede; padding-top:10px;">发表评论:</h4><br/>
			<label>昵称：<font color='red'>*</font></label>
			<label><input type='text' name="poster" style="height:25px; width:40%;" /></label>
			<label>邮箱：<font color='red'>*</font></label>
			<label><input type='text' name="email" style="height:25px; width:40%;" /></label>
			<label>网址：</label>
			<label><input type='text' name="url" value='<?php echo $_smarty_tpl->tpl_vars['common']->value['site']['site_url'];?>
' style="height:25px; width:40%;" /></label>
			<label>内容：<font color='red'>*</font></label>
			<label><textarea rows='5' name="content" style=" width:60%;"></textarea></label>
			<label>验证码：<font color='red'>*</font> <input type='text' name="verify_code" style="height:25px; width:10%;" /> <img src="/Index/verify_code"  onclick="this.src=this.src+'?'+Math.random" /></label>
			<input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['aid'];?>
" />
			<label><input type="submit" value='提交' style="width:30%;" /></label>
		</form>
        <?php } else { ?>
        <font color='red'>管理员已关闭此篇文章的评论</color>
        <?php }?>
		<?php }?>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="clean"></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>