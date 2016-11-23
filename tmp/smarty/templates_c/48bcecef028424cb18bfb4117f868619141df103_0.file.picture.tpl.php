<?php
/* Smarty version 3.1.29, created on 2016-11-22 02:28:46
  from "C:\OpenServer\domains\SamsonOS\views\default\picture.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5833832e35c382_63143253',
  'file_dependency' => 
  array (
    '48bcecef028424cb18bfb4117f868619141df103' => 
    array (
      0 => 'C:\\OpenServer\\domains\\SamsonOS\\views\\default\\picture.tpl',
      1 => 1479770922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5833832e35c382_63143253 ($_smarty_tpl) {
?>
<div id="picturePage">
    <h3><?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['name'];?>
</h3>
    <h3>Дата загрузки: <?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['datetime'];?>
</h3>

    <div id="updateDescription">
        <textarea name="description" id="description" maxlength="200" placeholder="<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['description'];?>
" value=""></textarea></br>
        <input type="hidden" id="descriptionId" name="pictureId" value="<?php echo $_smarty_tpl->tpl_vars['rsPictureId']->value;?>
">
        <input type="submit" id="updateDescriptionData" value="Обновить комментарий">
    </div>

    <div id="deletePicture">
        <input type="hidden" id="deletePictureId" name="pictureId" value="<?php echo $_smarty_tpl->tpl_vars['rsPictureId']->value;?>
">
        <input type="submit" value="Удалить картинку">
    </div>
    <img src="/images/pictures/<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['image_name'];?>
">
</div>


<?php }
}
