<?php
class IndexController
{
    private $modelObject;

    public function __construct()
    {
        include_once 'models/PicturesModel.php';
        $this->modelObject = new PicturesModel();
    }


    public function sortAction(){

        $type = '';
        $order = '';

        switch ($_POST['sort']) {
            case 0:
                $type = 'datetime';
                $order = 'ASC';
                break;
            case 1:
                $type = 'datetime';
                $order = 'DESC';
                break;
            case 2:
                $type = 'size';
                $order = 'ASC';
                break;
            case 3:
                $type = 'size';
                $order = 'DESC';
                break;
        }
        echo json_encode($this->modelObject->getPictures($type, $order));
    }

    /**
     *  Формирование главной страницы сайта
     */

    public function indexAction($smarty)
    {
        $rsPictures = $this->modelObject->getPictures('datetime', 'DESC');

        $smarty->assign('pageTitle', 'Главная страница сайта');
        $smarty->assign('rsPictures', $rsPictures);

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'upload');
        loadTemplate($smarty, 'sort');
        loadTemplate($smarty, 'index');
        loadTemplate($smarty, 'footer');
    }

}