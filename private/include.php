<?php
	if(($_SERVER['SERVER_NAME']) == 'localhost'){
		define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
	}else{
		define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
	}
	
	define('SERVER_NAME',$_SERVER['SERVER_NAME'].':8080');
	define('BASE_DIR',DOCUMENT_ROOT.'/home');

	include(DOCUMENT_ROOT.'/private/conf/application.ini.php');
	include(BASE_DIR.'/header.html');
	include(BASE_DIR.'/appConstants.php');
	include(BASE_DIR.'/appLogic.php');
	
?>