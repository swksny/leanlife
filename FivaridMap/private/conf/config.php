<?php
/*
require_once:すでに読み込まれている場合はそのファイルを読み込みません。
include:ファイルを見つけられない場合に warning を発行します。※処理は続行される
require：require は include とほぼ同じですが、失敗した場合に E_COMPILE_ERROR レベルの致命的なエラーも発生するという点が異なります。 
*/
//こちらを 1 にしておいてあげると、ブラウザのほうにエラー表示をしてくれるので便利かと思います

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
