<?php
/* Smarty version 3.1.29, created on 2016-11-23 05:23:08
  from "C:\OpenServer\domains\Samson\views\default\picture.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5834fd8c0f7057_41210587',
  'file_dependency' => 
  array (
    '2385b2c07bc6fe40ef62ea2edc63cc4acaab4c0a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Samson\\views\\default\\picture.tpl',
      1 => 1479867767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5834fd8c0f7057_41210587 ($_smarty_tpl) {
?>
<div id="picturePage">
    <h3><?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['name'];?>
</h3>
    <h3>Дата загрузки: <?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['datetime'];?>
</h3>

    <div id="deletePicture">
        <input type="hidden" id="deletePictureId" name="pictureId" value="<?php echo $_smarty_tpl->tpl_vars['rsPictureId']->value;?>
">
        <input type="submit" value="Удалить картинку">
    </div>

    <img src="/www/images/pictures/<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['image_name'];?>
"></br></br>

    <div id="updateDescription">
        <textarea name="description" id="description" maxlength="200" placeholder="<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['description'];?>
"}"></textarea></br>
        <input type="hidden" id="descriptionId" name="pictureId" value="<?php echo $_smarty_tpl->tpl_vars['rsPictureId']->value;?>
">
        <input type="submit"  value="Обновить комментарий">
    </div>
</div>


<?php }
}
