<?php
ini_set('dispray_errors',1);

//全システム共通
define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT'].'/FivaridMap');
include(DOCUMENT_ROOT.'/private/conf/conf.ini.php');

include(DOCUMENT_ROOT.'/lib/function.php');
include(DOCUMENT_ROOT.'/lib/session.php');
include(DOCUMENT_ROOT.'/lib/dao/mainfunction.php');

$google_api_ini = parse_ini_file(DOCUMENT_ROOT.'/private/conf/application.ini',true);

$api = "https://maps.googleapis.com/maps/api/js?key=".$google_api_ini['api'] ['GOOGLE_API_KEY']."&language=ja&region=JP&callback=initMap&libraries=places";

session_start();

?>
