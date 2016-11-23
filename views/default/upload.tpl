<div id="uploadPicture">
    <h3 class="menuCaption showHidden" onclick="showUploadBox();">Загрузить картинку</h3>
</div>
    <form id = "uploadForm" method="POST" enctype="multipart/form-data">
        <input type="text" name="pictureName" id="pictureName" value="" placeholder="Название картинки" required></br></br>
        <textarea name="description" maxlength = 200 id="pictureDescription" placeholder="Описание картинки"></textarea></br></br>
        <input type="file" name="fileName" id="fileName" required></br>
        <input type="submit" id="uploadButton" value="Загрузить">
    </form>




