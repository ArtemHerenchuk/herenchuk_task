<?php
/* Smarty version 3.1.29, created on 2016-08-10 01:48:02
  from "C:\OpenServer\domains\Myshop\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57aa5da20adaf1_93528872',
  'file_dependency' => 
  array (
    'b4c0ef5826b876279310627bbdc0db618926ecb4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Myshop\\views\\default\\header.tpl',
      1 => 1470782856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_57aa5da20adaf1_93528872 ($_smarty_tpl) {
?>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
		<link rel="stylesheet" href="<?php echo TemplateWebPath;?>
/css/main.css" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-1.12.3.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
    </head>

<body>
	<div id="header">
		<h1>my shop - интернет магазин</h1>
	</div>
	
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<div id="CenterColumn">
			
	<?php }
}
