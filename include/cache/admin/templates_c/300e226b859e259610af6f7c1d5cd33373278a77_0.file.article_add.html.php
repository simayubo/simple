<?php /* Smarty version 3.1.27, created on 2015-10-09 14:56:29
         compiled from "E:\wwwroot\wwwroot\demo\admin\template\article_add.html" */ ?>
<?php
/*%%SmartyHeaderCode:288555617651da8fbc9_10201871%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '300e226b859e259610af6f7c1d5cd33373278a77' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\admin\\template\\article_add.html',
      1 => 1444373786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288555617651da8fbc9_10201871',
  'variables' => 
  array (
    'time' => 0,
    'sort' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5617651db059c6_80817564',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5617651db059c6_80817564')) {
function content_5617651db059c6_80817564 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '288555617651da8fbc9_10201871';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class='title-nav'>编写文章</div>
<div class='post-left'>
	<form action='' method='post'>
	<input type='text' name='title' class='title' />
	<textarea name='content' class='content'></textarea>
	<div class='clean'></div>
</div>
<div class='post-right'>
	<div class="Menubox"> 
		<ul> 
			<li><a href="#" id="menu1" onclick="setTab('menu',1,2)" class="menu">选项</a></li> 
			<li><a href="#" id="menu2" onclick="setTab('menu',2,2)">附件</a></li> 
		</ul> 
		<div class='clean'></div>
	</div> 
	<div class="Contentbox"> 
		<div id="con_menu_1" class="memu"> 
			<div class='intor'>发布时间</div>
			<input type='text' name='date' value="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
" class='date' />
			<div class='intor'>分类</div>
			<div class='sort'>
				<?php
$_from = $_smarty_tpl->tpl_vars['sort']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
					<label><input name="sortid" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['sortid'];?>
" /><?php echo $_smarty_tpl->tpl_vars['value']->value['sortname'];?>
 </label> <br/>
				<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
					<label>暂无分类</label>
				<?php
}
?>
			</div>
			<div class='intor'>标签</div>
			<input type='text' class='tags' />
			<div class='intor'>权限管理</div>
			<label><input name="allow_remark" type="checkbox" value="y" checked='checked' />允许评论 </label> 
			<label><input name="top" type="checkbox" value="y" />置顶 </label> 
			<label><input name="link" type="checkbox" value="y" />允许被引用 </label> 
		</div> 
		<div id="con_menu_2" style="display:none"> 
			<div class='intor'>上传附件</div>
			<div class='sort'>
				上传文件请 <a href="#">点击这里</a>
			</div> 
		</div> 
		<div class='sub'>
			<button type='submit' name='do' value='save' class='save'>保存草稿</button>
			<button type='submit' name='do' value='post' class='post'>发表文章</button>
		</div>
	</div> 
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 charset="utf-8" src="/include/lib/kindeditor/kindeditor-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="content"]', {
			resizeType : 1,
			themeType : 'simple',
			allowPreviewEmoticons : true,
			items : [
				'fontname','fontsize','forecolor','hilitecolor','bold', 'italic', 'underline','insertorderedlist','insertunorderedlist','justifyleft','justifycenter','justifyright','quickformat','lineheight','hr','|','plainpaste','link','unlink','code', 'emoticons','|','source','fullscreen','preview'
			]
		});
	});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
> 
	function setTab(name,cursel,n){ 
		for(i=1;i<=n;i++){ 
			var menu=document.getElementById(name+i); 
			var con=document.getElementById("con_"+name+"_"+i); 
			menu.className=i==cursel?"menu":""; 
			con.style.display=i==cursel?"block":"none"; 
		} 
	} 
<?php echo '</script'; ?>
> <?php }
}
?>