<?php
class PicturesModel
{
    function getPictures($sortData, $sortOrder)
    {
        $sql = "SELECT * FROM `pictures` ORDER BY `{$sortData}` {$sortOrder}";
        $rs = mysql_query($sql);
        return createSmartyRsArray($rs);
    }

    function getPictureById($itemId)
    {
        $itemId = intval($itemId);
        $sql = "SELECT * FROM `pictures` WHERE `ID` = '{$itemId}'";
        $rs = mysql_query($sql);
        return mysql_fetch_assoc($rs);
    }

    function insertDataPicture($name, $description, $image_name, $size)
    {
        $sql = "INSERT INTO `pictures` (`name`, `image_name`, `size`, `datetime`, `description`) VALUES ('{$name}', '{$image_name}', '{$size}', NOW(), '{$description}')";
        $rs = mysql_query($sql);
        return $rs;
    }

    function updateDataPicture($description, $pictureId)
    {
        $sql = "UPDATE `pictures` SET `description` = '{$description}' WHERE `ID` = '{$pictureId}'";
        $rs = mysql_query($sql);
        return $rs;
    }

    function deleteDataPicture($itemId)
    {
        $itemId = intval($itemId);
        $sql = "DELETE FROM `pictures` WHERE `ID` = '{$itemId}'";
        $rs = mysql_query($sql);
        return $rs;
    }
}



