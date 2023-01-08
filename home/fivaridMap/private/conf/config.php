<?php
/*
require_once:すでに読み込まれている場合はそのファイルを読み込みません。
include:ファイルを見つけられない場合に warning を発行します。※処理は続行される
require：require は include とほぼ同じですが、失敗した場合に E_COMPILE_ERROR レベルの致命的なエラーも発生するという点が異なります。 
*/
//こちらを 1 にしておいてあげると、ブラウザのほうにエラー表示をしてくれるので便利かと思います


ini_set('dispray_errors',1);

define('BASE_DIR','/var/www/html/home/FivaridMap');

include(BASE_DIR.'/lib/function.php');
include(BASE_DIR.'/lib/session.php');
include(BASE_DIR.'/lib/dao/mainfunction.php');

$google_api_ini = parse_ini_file(BASE_DIR.'/private/conf/application.ini',true);

$api = "https://maps.googleapis.com/maps/api/js?key=".$google_api_ini['api'] ['GOOGLE_API_KEY']."&language=ja&region=JP&callback=initMap&libraries=places";

session_start();

?>
