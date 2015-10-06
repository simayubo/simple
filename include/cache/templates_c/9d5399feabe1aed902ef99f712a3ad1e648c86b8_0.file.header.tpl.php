<?php /* Smarty version 3.1.27, created on 2015-09-10 08:08:03
         compiled from "E:\wwwroot\wwwroot\demo\templates\default\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1244855f11e438782b7_11238221%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d5399feabe1aed902ef99f712a3ad1e648c86b8' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\templates\\default\\header.tpl',
      1 => 1441786027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1244855f11e438782b7_11238221',
  'variables' => 
  array (
    'common' => 0,
    'title' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f11e438b9d62_87622407',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f11e438b9d62_87622407')) {
function content_55f11e438b9d62_87622407 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1244855f11e438782b7_11238221';
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="content" content="text/html;charset=utf-8" />
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['common']->value['site']['site_key'];?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['common']->value['site']['site_description'];?>
"  />
	<link rel="stylesheet" href="/templates/<?php echo $_smarty_tpl->tpl_vars['common']->value['site']['template'];?>
/style.css" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<div id='main'>
	<div class='header'>
		<h1><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['site']['site_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['common']->value['site']['site_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['common']->value['site']['site_title'];?>
</a></h1>
		<h3><?php echo $_smarty_tpl->tpl_vars['common']->value['site']['site_info'];?>
</h3>
		<div class="top-avatar"><a href="#"><img src="/templates/<?php echo $_smarty_tpl->tpl_vars['common']->value['site']['template'];?>
/images/top-avatar.jpg" /></a></div>
	</div>
	<div class='nav'>
		<ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['common']->value['navi'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$foreach_value_Sav = $_smarty_tpl->tpl_vars['value'];
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
" class="current"><?php echo $_smarty_tpl->tpl_vars['value']->value['navname'];?>
</a></li>
			<?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
?>
		</ul>
		<div class="clean"></div>
	</div><?php }
}
?>