<?php
	include($_SERVER['DOCUMENT_ROOT'].'/private/conf/conf.ini.php');
	
	$AppConstant = new AppConstant();
	
	$environment = 0;
	$environment = checkEnvironment($_SERVER['SERVER_NAME']);
	function checkEnvironment($SERVER_NAME){
		if($SERVER_NAME == AppConstant::SERVER_NAME_LOCAL){
			return AppConstant::LOCAL;
		}elseif($SERVER_NAME == AppConstant::SERVER_NAME_STAGING){
			return AppConstant::STAGING;
		}elseif($SERVER_NAME == AppConstant::SERVER_NAME_PRODUCTION){
			return AppConstant::PRODUCTION;
		}else{
			return AppConstant::STAGING;
		}
	}
	

	
	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
	
	// if(($_SERVER['SERVER_NAME']) == 'localhost'){
		// 	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
		// }else{
	// 	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
	// }
	
	define('SERVER_NAME',$_SERVER['SERVER_NAME'].':8080');
	define('BASE_DIR',DOCUMENT_ROOT.'/home');

	
	include(BASE_DIR.'/header.html');
	include(BASE_DIR.'/appConstants.php');
	include(BASE_DIR.'/appLogic.php');

	appConfSettingFromEnvironment($environment,$AppConstant);
	function appConfSettingFromEnvironment($environment,$AppConstant){
		if($environment == $AppConstant::LOCAL){
			
			include(DOCUMENT_ROOT.'/private/conf/application.ini.php');
		}elseif($environment == $AppConstant::STAGING){
			;
		}elseif($environment == $AppConstant::PRODUCTION){
			return;
		}else{
			define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
		}
	}
	?>