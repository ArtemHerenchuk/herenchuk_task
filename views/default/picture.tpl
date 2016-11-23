<div id="picturePage">
    <h3>{$rsPicture['name']}</h3>
    <h3>Дата загрузки: {$rsPicture['datetime']}</h3>

    <div id="deletePicture">
        <input type="hidden" id="deletePictureId" name="pictureId" value="{$rsPictureId}">
        <input type="submit" value="Удалить картинку">
    </div>

    <img src="/www/images/pictures/{$rsPicture['image_name']}"></br></br>

    <div id="updateDescription">
        <textarea name="description" id="description" maxlength="200" placeholder="{$rsPicture['description']}""></textarea></br>
        <input type="hidden" id="descriptionId" name="pictureId" value="{$rsPictureId}">
        <input type="submit" id="updateDescriptionData"  value="Обновить комментарий">
    </div>
</div>


