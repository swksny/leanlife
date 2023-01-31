<?php
	//全システム共通
	ini_set('dispray_errors',1);
	define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/FavoriteMap');
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

	//★TODO 設定ファイル一度の分岐で取得できるようにする
	if($_SERVER['SERVER_NAME'] == AppConstant::SERVER_NAME_LOCAL){
		$dbIni = parse_ini_file(DOCUMENT_ROOT.'/private/conf/db.ini',true);
	}elseif($_SERVER['SERVER_NAME'] == AppConstant::SERVER_NAME_PRODUCTION){
		$dbIni = parse_ini_file(DOCUMENT_ROOT.'/private/conf/db.ini.production',true);
	}else{
		$dbIni = parse_ini_file(DOCUMENT_ROOT.'/private/conf/db.ini',true);
	}

	$api = "https://maps.googleapis.com/maps/api/js?key=".$environment['api'] ['GOOGLE_API_KEY']."&language=ja&region=JP&callback=initMap&libraries=places";
	$dbName = $dbIni['DB']['DBNAME'];
	$dbUsername = $dbIni['DB']['USERNAME'];
	$dbPassword = $dbIni['DB']['PASSWORD'];
	$dbHost = $dbIni['DB']['HOST'];

	// print_r($dbHost);exit;

	include_once(DOCUMENT_ROOT.'/lib/function.php');
	include_once(DOCUMENT_ROOT.'/lib/session.php');
	include_once(DOCUMENT_ROOT.'/lib/dao/mainfunction.php');
	include_once(DOCUMENT_ROOT.'/private/logic/top.php');

	session_start();

?>