<?php
/* Smarty version 3.1.29, created on 2016-11-23 05:18:40
  from "C:\OpenServer\domains\Samson\views\default\upload.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5834fc80eb5776_76802421',
  'file_dependency' => 
  array (
    'dbe9c042e87e9359cd833fbbf454913ed95be6b9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Samson\\views\\default\\upload.tpl',
      1 => 1479867036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5834fc80eb5776_76802421 ($_smarty_tpl) {
?>
<div id="uploadPicture">
    <h3 class="menuCaption showHidden" onclick="showUploadBox();">Загрузить картинку</h3>
</div>
    <form id = "uploadForm" method="POST" enctype="multipart/form-data">
        <input type="text" name="pictureName" id="pictureName" value="" placeholder="Название картинки" required></br></br>
        <textarea name="description" maxlength = 200 id="pictureDescription" placeholder="Описание картинки"></textarea></br></br>
        <input type="file" name="fileName" id="fileName" required></br>
        <input type="submit" id="uploadButton" value="Загрузить">
    </form>




<?php }
}
