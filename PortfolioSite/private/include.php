<?php
	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/PortfolioSite');
	include(DOCUMENT_ROOT.'/private/conf/conf.ini.php');
	
	$AppConstant = new AppConstant();
	
	$environment = '';
	$environment = getEnvironment($_SERVER['SERVER_NAME']);
	//$environment = getEnvironment(AppConstant::SERVER_NAME_PRODUCTION); //★無理やり本番環境で閲覧したい場合
	function getEnvironment($SERVER_NAME){
		if($SERVER_NAME == AppConstant::SERVER_NAME_LOCAL){
			return parse_ini_file(DOCUMENT_ROOT.'/private/conf/application.ini',true);
		}elseif($SERVER_NAME == AppConstant::SERVER_NAME_STAGING){
			return parse_ini_file(DOCUMENT_ROOT.'/private/conf/application.ini.stg',true);
		}elseif($SERVER_NAME == AppConstant::SERVER_NAME_PRODUCTION){
			return parse_ini_file(DOCUMENT_ROOT.'/private/conf/application.ini.production',true);
		}else{
			return parse_ini_file(DOCUMENT_ROOT.'/private/conf/application.ini',true);
		}
	}
	
	define('SERVER_NAME',$_SERVER['SERVER_NAME'].':8080');
	
	include(DOCUMENT_ROOT.'/header.html');
	include(DOCUMENT_ROOT.'/appConstants.php');
	include(DOCUMENT_ROOT.'/appLogic.php');

	// appConfSettingFromEnvironment($environment,$AppConstant);
	// function appConfSettingFromEnvironment($environment,$AppConstant){
	// 	if($environment == $AppConstant::LOCAL){	
	// 		include(DOCUMENT_ROOT.'/private/conf/application.ini.php');
	// 	}elseif($environment == $AppConstant::STAGING){
	// 		;
	// 	}elseif($environment == $AppConstant::PRODUCTION){
	// 		return;
	// 	}else{
	// 		define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
	// 	}
	// }
	?>