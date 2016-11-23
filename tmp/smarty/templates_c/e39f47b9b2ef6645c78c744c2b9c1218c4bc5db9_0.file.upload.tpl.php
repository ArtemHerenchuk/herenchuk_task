<?php
/* Smarty version 3.1.29, created on 2016-11-22 19:11:03
  from "C:\OpenServer\domains\SamsonOS\views\default\upload.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58346e17ae0141_78691189',
  'file_dependency' => 
  array (
    'e39f47b9b2ef6645c78c744c2b9c1218c4bc5db9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\SamsonOS\\views\\default\\upload.tpl',
      1 => 1479831033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58346e17ae0141_78691189 ($_smarty_tpl) {
?>
<div id="uploadPicture">
    <div class="menuCaption showHidden" onclick="showUploadBox();"><h3>Загрузить картинку</h3></div>
</div>
    <div id="uploadForm">

        <input type="text" name="pictureName" id="pictureName" value="" placeholder="Название картинки"></br></br>
        <textarea name="description" maxlength = 200 id="pictureDescription" placeholder="Описание картинки"></textarea></br></br>
        <input type="file" name="fileName" id="fileName" required></br>
        <input type="submit" id="uploadButton" value="Загрузить">
    </div>




<?php }
}
