<?php /* Smarty version 3.1.27, created on 2015-09-10 08:08:03
         compiled from "E:\wwwroot\wwwroot\demo\templates\default\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1846255f11e43937888_52918093%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb35a3c0a32c5271a69d9fe943d420d9ec1a6e1c' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\templates\\default\\footer.tpl',
      1 => 1441622741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1846255f11e43937888_52918093',
  'variables' => 
  array (
    'common' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f11e43958111_01780860',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f11e43958111_01780860')) {
function content_55f11e43958111_01780860 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1846255f11e43937888_52918093';
?>
		<div id="footer">
			Copy <a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['site']['site_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['common']->value['site']['site_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['common']->value['site']['site_title'];?>
</a> by <a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['site']['site_url'];?>
" title="Simple Blog">Simple Blog</a>  <?php echo $_smarty_tpl->tpl_vars['common']->value['site']['icp'];?>
 <?php echo $_smarty_tpl->tpl_vars['common']->value['site']['footer_info'];?>

		</div>
	</div>
	</body>
</html><?php }
}
?>