<?php /* Smarty version 3.1.27, created on 2015-10-18 14:15:59
         compiled from "E:\wwwroot\wwwroot\demo\admin\template\sort_list.html" */ ?>
<?php
/*%%SmartyHeaderCode:208675623391f8f4f91_64110955%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3dc217d45249d3f11579f3dc526ff68fa57ee7d' => 
    array (
      0 => 'E:\\wwwroot\\wwwroot\\demo\\admin\\template\\sort_list.html',
      1 => 1445148448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208675623391f8f4f91_64110955',
  'variables' => 
  array (
    'sort' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5623391f96e223_27056733',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5623391f96e223_27056733')) {
function content_5623391f96e223_27056733 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '208675623391f8f4f91_64110955';
echo $_smarty_tpl->getSubTemplate ("header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class='title-nav'>分类列表</div>
<form action='' method='post'>
    <div class='article-list'>
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th><input type="checkbox" id="btu" value="全选" /></th>
                <th>分类ID</th>
                <th>分类名称</th>
                <th>别名</th>
                <th>帖子数量</th>
                <th>操作</th>
            </tr>
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
            <tr>
                <td><input name="a[]" type="checkbox" value="" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sortid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sortname'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sortalias'];?>
</td>
                <th><?php echo $_smarty_tpl->tpl_vars['value']->value['articlenum'];?>
</th>
                <th><a href="#">编辑</a> | <a href="#">删除</a></th>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['value'] = $foreach_value_Sav;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
            <tr><td>暂无分类</td></tr>
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