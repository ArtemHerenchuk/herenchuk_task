<?php
/* Smarty version 3.1.29, created on 2016-11-22 22:05:55
  from "C:\OpenServer\domains\Samson\views\default\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58349713308935_68598609',
  'file_dependency' => 
  array (
    '12dfb44f4b6e1bfbe45b95337d8bde9f08f3c554' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Samson\\views\\default\\index.tpl',
      1 => 1479840384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58349713308935_68598609 ($_smarty_tpl) {
$_from = $_smarty_tpl->tpl_vars['rsPictures']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pictures_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_pictures']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pictures'] : false;
$__foreach_pictures_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_pictures'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_pictures']->value['iteration']++;
$__foreach_pictures_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
	<div id="indexBlock">
		<a href="/pictures/<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
/">
			<img src="www/images/pictures/<?php echo $_smarty_tpl->tpl_vars['item']->value['image_name'];?>
" width="200" height="200" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />
			<input type="hidden" name="openPictureId" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
">
		</a><br />
		<a href="/pictures/<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
	</div>

	<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_pictures']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pictures']->value['iteration'] : null) % 5 == 0) {?>
		<div style="clear: both;"></div>
	<?php }
$_smarty_tpl->tpl_vars['item'] = $__foreach_pictures_0_saved_local_item;
}
if ($__foreach_pictures_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_pictures'] = $__foreach_pictures_0_saved;
}
if ($__foreach_pictures_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_pictures_0_saved_item;
}
?>



	
<?php }
}
