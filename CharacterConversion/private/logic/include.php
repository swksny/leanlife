<?php
	//システムごと
	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/CharacterConversion');
	
	//オートロード
	include(DOCUMENT_ROOT.'/private/common/Loader.php');
	$loader = new ClassLoader();
	$loader->registerDir(DOCUMENT_ROOT.'/private/class');
	$loader->registerDir(DOCUMENT_ROOT.'/private/class/common');
	$loader->register();
	
	$environment = '';
	$environment = getEnvironment($_SERVER['SERVER_NAME']);
	$AppConstant = new AppConstant();
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

	//デバック用
	function d($v){
		print_r($v);exit;
	}
?>