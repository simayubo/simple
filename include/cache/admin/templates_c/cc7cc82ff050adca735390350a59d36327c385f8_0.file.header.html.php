<?php /* Smarty version 3.1.27, created on 2015-10-08 05:40:31
         compiled from "E:\wwwroot\wwwroot\demo\admin\template\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:226335615e5af6baa78_72818739%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc7cc82ff050adca735390350a59d36327c385f8' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\admin\\template\\header.html',
      1 => 1444275627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226335615e5af6baa78_72818739',
  'variables' => 
  array (
    'title' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5615e5af71f0d6_10648323',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5615e5af71f0d6_10648323')) {
function content_5615e5af71f0d6_10648323 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '226335615e5af6baa78_72818739';
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="content" content="text/html;charset=utf-8" />
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<link rel="stylesheet" href="/admin/template/css.css" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<div id="nav">
	<ul>
		<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "main") {?>class='parent'<?php }?>><a href="/admin.php">管理首页</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "write") {?>class='parent'<?php }?>><a href="/admin.php?c=Article&a=add">写文章</a></li>
		<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "content") {?>class='parent'<?php }?>><a href="/admin.php?c=Article&a=post">内容</a>
			<ul>
				<li><a href="/admin.php?c=Article&a=post">文章</a></li>
				<li><a href="#">评论</a></li>
				<li><a href="#">分类</a></li>
			</ul>
		</li>
		<li <?php if ($_smarty_tpl->tpl_vars['menu']->value == "setting") {?>class='parent'<?php }?>><a href="#">设置</a>
			<ul>
				<li><a href="#">基本设置</a></li>
				<li><a href="#">模板</a></li>
				<li><a href="#">插件</a></li>
				<li><a href="#">SEO优化</a></li>
				<li><a href="#">导航栏</a></li>
			</ul>
		</li>
		<li style="float: right; border-left: 1px solid #383D45;"><a href="admin.php?c=Index&a=outLogin">退出</a></li>
		<div class='clean'></div>
	</ul>
</div>
<div id="main">
<?php }
}
?>