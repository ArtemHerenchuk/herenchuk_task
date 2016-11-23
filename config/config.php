<?php

	//константы для обращения к контроллерам.
	define("PathPrefix", "controllers/");
	define("PathPostfix", "Controller.php");

    //>используемый шаблон
    $template = 'default';

    //пути к файлам шаблонов(*.tpl)
    define('TemplatePrefix', 'views/default/');
	define("TemplatePostfix", ".tpl");
	
	//Пути к файлам шаблонов в вебпространстве
	define("TemplateWebPath", "templates/{$template}/");
	//<
	

