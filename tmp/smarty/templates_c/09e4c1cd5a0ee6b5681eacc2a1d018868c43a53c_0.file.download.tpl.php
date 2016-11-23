<?php
/* Smarty version 3.1.29, created on 2016-11-21 20:43:33
  from "C:\OpenServer\domains\SamsonOS\views\default\upload.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_583332457e58e8_69440667',
  'file_dependency' => 
  array (
    '09e4c1cd5a0ee6b5681eacc2a1d018868c43a53c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\SamsonOS\\views\\default\\upload.tpl',
      1 => 1479750143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583332457e58e8_69440667 ($_smarty_tpl) {
?>
<div id="uploadPicture">
    <div class="menuCaption showHidden" onclick="showUploadBox();"><h3>Загрузить картинку</h3></div>
    <div id="uploadForm">
        <input type="text" name="pictureName" id="pictureName" value="" placeholder="Название картинки"></br></br>
        <textarea name="description" maxlength = 200 id="pictureDescription" placeholder="Описание картинки"></textarea></br></br>
        <input type="file" name="fileName" id="fileName" required></br>
        <input type="submit" id="uploadButton" value="Загрузить">
    </div>
</div>



<?php }
}
