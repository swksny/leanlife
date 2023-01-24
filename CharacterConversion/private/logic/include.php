<?php
	//全システム共通
	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/CharacterConversion');
	include(DOCUMENT_ROOT.'/private/conf/conf.ini.php');
	
	//システムごと
	include(DOCUMENT_ROOT.'/private/logic/mainLogic.php');
	include(DOCUMENT_ROOT.'/private/logic/common.php');

	$AppConstant = new AppConstant();
	
	$environment = '';
	$environment = getEnvironment($_SERVER['SERVER_NAME']);
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

	// define('SERVER_NAME',$_SERVER['SERVER_NAME'].':8080');

	// $application_ini = appConfSettingFromEnvironment($environment,$AppConstant);
	// function appConfSettingFromEnvironment($environment,$AppConstant){
	// 	if($environment == $AppConstant::LOCAL){
	// 		return parse_ini_file(DOCUMENT_ROOT.'/private/conf/application.ini',true);
	// 	}elseif($environment == $AppConstant::STAGING){
	// 		return parse_ini_file(DOCUMENT_ROOT.'/private/conf/application.ini',true);
	// 	}elseif($environment == $AppConstant::PRODUCTION){
	// 		return;
	// 	}else{
	// 		// define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
	// 	}
	// }
	// print_r();exit; ///★デバック用

?>