<?php
	//全システム共通
	ini_set('dispray_errors',1);
	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/FivaridMap');
	include(DOCUMENT_ROOT.'/private/conf/conf.ini.php');

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

	include_once(DOCUMENT_ROOT.'/lib/function.php');
	include_once(DOCUMENT_ROOT.'/lib/session.php');
	include_once(DOCUMENT_ROOT.'/lib/dao/mainfunction.php');
	include_once(DOCUMENT_ROOT.'/private/logic/top.php');
	
	$api = "https://maps.googleapis.com/maps/api/js?key=".$environment['api'] ['GOOGLE_API_KEY']."&language=ja&region=JP&callback=initMap&libraries=places";

	session_start();

?>