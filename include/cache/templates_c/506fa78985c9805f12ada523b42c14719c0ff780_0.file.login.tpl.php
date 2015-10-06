<?php /* Smarty version 3.1.27, created on 2015-09-14 12:45:28
         compiled from "E:\wwwroot\wwwroot\demo\templates\default\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2017355f6a548ab06b6_05957041%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '506fa78985c9805f12ada523b42c14719c0ff780' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\templates\\default\\login.tpl',
      1 => 1442227498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2017355f6a548ab06b6_05957041',
  'variables' => 
  array (
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f6a548af3cc0_46494651',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f6a548af3cc0_46494651')) {
function content_55f6a548af3cc0_46494651 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2017355f6a548ab06b6_05957041';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<div class="login">
		<form action="" method="post">
			<h2>登录</h2>
			<label>用户名：</label><br/>
			<label><input type="text" name="username" style="height:25px; width:100%;" /></label><br/>
			<label>密码：</label><br/>
			<label><input type="password" name="password" style="height:25px; width:100%;" /></label><br/>
			<label style="display:block; margin-top:15px;">验证码：<input type="text" name="verify_code" style="height:25px; width:30%;" /> <img src="/Index/verify_code" onclick="this.src=this.src+'?'+Math.random"  /> </label><br/>
			<span style="display:block; color:red; text-aligin:center;"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</span>
			<label><input type="submit" value="登录" style="height:35px; width:103%;" /></label>
		</form>
	</div>
<div class="clean"></div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>