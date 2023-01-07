<?php
	include($_SERVER['DOCUMENT_ROOT'].'/private/conf/conf.ini.php');
	
	$environment = 0;
	$environment = checkEnvironment($_SERVER['SERVER_NAME']);
	function checkEnvironment($SERVER_NAME){
		if($SERVER_NAME == 'localhost'){
		}else{
			define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
		}
	}
	
	$AppConstant = new AppConstant();

	appConfSettingFromEnvironment($environment,$AppConstant);
	function appConfSettingFromEnvironment($environment,$AppConstant){
		if($environment == $AppConstant::LOCAL){
			define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
		}elseif($environment == $AppConstant::STAGING){
			define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
		}elseif($environment == $AppConstant::PRODUCTION){
			return;
		}else{
			define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
		}
	}

	// if(($_SERVER['SERVER_NAME']) == 'localhost'){
	// 	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
	// }else{
	// 	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
	// }
	
	define('SERVER_NAME',$_SERVER['SERVER_NAME'].':8080');
	define('BASE_DIR',DOCUMENT_ROOT.'/home');

	include(DOCUMENT_ROOT.'/private/conf/application.ini.php');
	include(BASE_DIR.'/header.html');
	include(BASE_DIR.'/appConstants.php');
	include(BASE_DIR.'/appLogic.php');
	
?>