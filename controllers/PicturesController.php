<?php
class PicturesController
{
    private $modelObject;

    public function __construct()
    {
        include_once 'models/PicturesModel.php';
        $this->modelObject = new PicturesModel();
    }

    public function updateAction()
    {
        $jsonData = array();
        $description = isset($_REQUEST['description']) ? trim(htmlspecialchars($_REQUEST['description'])) : null;
        $pictureId = isset($_REQUEST['pictureId']) ? trim(htmlspecialchars($_REQUEST['pictureId'])) : null;

        $res = $this->modelObject->updateDataPicture($description, $pictureId);

        $var = $this->modelObject->getPictureById($pictureId);

        if ($res) {
            $jsonData['success'] = 1;
            $jsonData['message'] = "Комментарий обновлен";
            $jsonData['description'] = $var['description'];
        } else {
            $jsonData['success'] = 0;
            $jsonData['message'] = "Комментарий не обновлен";
        }

        echo json_encode($jsonData);
    }


    public function indexAction($smarty)
    {
        $itemId = isset($_GET['id']) ? $_GET['id'] : null;
        if ($itemId == null)
            exit();

        //получить данные картинки
        $rsPicture = $this->modelObject->getPictureById($itemId);

        $smarty->assign('pageTitle', '');
        $smarty->assign('rsPicture', $rsPicture);
        $smarty->assign('rsPictureId', $itemId);

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'picture');
        loadTemplate($smarty, 'footer');
    }
}


