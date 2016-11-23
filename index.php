<?php

    include_once 'config/config.php';
    include_once 'config/db.php';
    include_once 'library/mainFunctions.php';


    $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

    $actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

    require_once 'library/Smarty/libs/Smarty.class.php';
    $smarty = new Smarty();
    $smarty->setTemplateDir(TemplatePrefix);
    $smarty->setCompileDir('tmp/smarty/templates_c');
    $smarty->setCacheDir('tmp/smarty/cache');
    $smarty->setConfigDir('library/Smarty/configs');

    $smarty->assign('templateWebPath',TemplateWebPath);

    loadPage($smarty, $controllerName, $actionName);