<?php
/* Smarty version 3.1.29, created on 2016-11-21 17:07:22
  from "C:\OpenServer\domains\SamsonOS\views\default\picture.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5832ff9adb2693_12608710',
  'file_dependency' => 
  array (
    '1e532457ce1ef000d63d98fe3f7689eb5a185a10' => 
    array (
      0 => 'C:\\OpenServer\\domains\\SamsonOS\\views\\default\\picture.tpl',
      1 => 1479727710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5832ff9adb2693_12608710 ($_smarty_tpl) {
?>
<div id="picturePage">
    <h3><?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['name'];?>
</h3>
    <h3>Дата загрузки: <?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['datetime'];?>
</h3>

    <div id="updateDescription">
        <textarea name="description" id="description" maxlength="200" placeholder="<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['description'];?>
"></textarea></br>
        <input type="hidden" id="descriptionId" name="pictureId" value="<?php echo $_smarty_tpl->tpl_vars['rsPictureId']->value;?>
">
        <input type="submit" id="updateDescriptionData" onclick="updateDescriptionData; return false" value="Обновить комментарий">
    </div>

    <div id="deletePicture">
        <input type="hidden" id="deletePictureId" name="pictureId" value="<?php echo $_smarty_tpl->tpl_vars['rsPictureId']->value;?>
">
        <input type="submit" id="delete" onclick="deletePicture; return false" value="Удалить картинку">
    </div>
    <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['image_name'];?>
">
</div>


<?php }
}
