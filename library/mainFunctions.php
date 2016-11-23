<?php

	function loadPage($smarty, $controllerName, $actionName = 'index'){
		include_once PathPrefix.$controllerName.PathPostfix;
		$function = $actionName.'Action';
		$class = $controllerName.'Controller';
		$controller = new $class;
		$controller->$function($smarty);
	}

	
	function loadTemplate($smarty, $templateName){
		$smarty->display($templateName.TemplatePostfix);
	}

	function createSmartyRsArray($rs){
		if(!$rs)
			return false;
		$smartyRs = array();
		while($row = mysql_fetch_assoc($rs)){
			$smartyRs[] = $row;
		}
		return $smartyRs;
	}

	function redirect($url = '/'){
         header("Location: {$url}");
         exit();
     }


	
	
	
	
	
	
	
	
	
	
	
	
	
	