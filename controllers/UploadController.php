<?php

class UploadController
{
    private $modelObject;

    function __construct()
    {
        include_once 'models/PicturesModel.php';
        $this->modelObject = new PicturesModel();
    }

    public function uploadAction()
    {
        $jsonData = array();

        $pictureName = isset($_POST['pictureName']) ? trim(htmlspecialchars($_POST['pictureName'])) : null;
        $pictureDescription = isset($_POST['pictureDescription']) ? trim(htmlspecialchars($_POST['pictureDescription'])) : null;
        $name = isset($_FILES['file']['name']) ? htmlspecialchars($_FILES['file']['name']) : null;
        $tmp_name = isset($_FILES['file']['tmp_name']) ? htmlspecialchars($_FILES['file']['tmp_name']) : null;
        $type = isset($_FILES['file']['type']) ? htmlspecialchars($_FILES['file']['type']) : null;
        $size = isset($_FILES['file']['size']) ? htmlspecialchars($_FILES['file']['size']) : null;

        if ($type != 'image/png' AND $type != 'image/jpeg' AND $type != 'image/jpg'){
            $jsonData['success'] = 0;
            $jsonData['message'] = 'Картинки можно загрузить формата png, jpg, jpeg';
            echo json_encode($jsonData);
            return false;
        }

        if ($size > 1024 * 1024) {
            $jsonData['success'] = 0;
            $jsonData['message'] = 'Картинка должна быть меньше 1МБ';
            echo json_encode($jsonData);
            return false;
        }



        if (is_uploaded_file($tmp_name)) {
            $resMove = move_uploaded_file($tmp_name, "www/images/pictures/" . $name);
            $resInsert = $this->modelObject->insertDataPicture($pictureName, $pictureDescription, $name, $size);
            if ($resMove && $resInsert) {
                $jsonData['success'] = 1;
                $jsonData['message'] = 'Картинка загрузилась';
            } else {
                $jsonData['success'] = 0;
                $jsonData['message'] = 'Произошла ошибка.';
            }
        }
        else{
            $jsonData['message'] = 'Картинка не загрузилась';
        }

        echo json_encode($jsonData);
    }

    public function deleteAction()
    {
        $jsonData= array();

        $pictureId = isset($_POST['pictureId']) ? trim(htmlspecialchars($_POST['pictureId'])) : null;

        $res = $this->modelObject->deleteDataPicture($pictureId);

        if ($res) {
            $jsonData['success'] = 1;
            $jsonData['message'] = "Картинка удалена";
        } else {
            $jsonData['success'] = 0;
            $jsonData['message'] = "Ошибка при удалении картинки";
        }

        echo json_encode($jsonData);

    }

}







