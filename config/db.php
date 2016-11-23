<?php

	$dblocation = "127.0.0.1";
	$dbname = "u263971911_task";
	$dbuser = "u263971911_htask";
	$dbpasswd = "12345678";

	$db = mysql_connect($dblocation, $dbuser, $dbpasswd);

	if(!$db){
		echo "Ошибка доступа к MySQL";
		exit();
	}

	mysql_set_charset('utf8');

	if(!mysql_select_db($dbname, $db)){
		echo "Ошибка доступа к базе данных: ($dbname)";
		exit();
	}
