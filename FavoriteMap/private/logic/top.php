<?php
$target_info_lat = 35.68082969143581;
$target_info_lng = 139.77347373962402;
$target_info_text = '個々の情報を見たい';

//DB接続
$dsn="mysql:host={$dbHost};dbname={$dbName};charset=utf8";
$username=$dbUsername;
$password = $dbPassword;
$driver_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
try{
	$pdo = new PDO($dsn, $username, $password, $driver_options);
} catch (PDOException $e) {
	echo 'データベースにアクセスできません！' . $e->getMessage();
	exit;
}

$mainFunction = new mainDaoClass();
$result = $mainFunction->getMapAllDate($pdo);

/*
$tm = (double)sprintf("%.14f",$result[0]['map_lat']);
$ln = (double)sprintf("%.14f",$result[0]['map_lng']);
$tm_2 = (double)sprintf("%.14f",$result[1]['map_lat']);
$ln_2 = (double)sprintf("%.14f",$result[1]['map_lng']);

$jsonstr =  json_encode(array('lat'=> $tm, 'lng' => $ln));
$jsonstr_2 =  json_encode(array('lat'=> $tm_2, 'lng' => $ln_2));
*/

$new_array = array();
foreach($result as $r){
	$new_array[$r['marker_main_sk']]['marker_main_sk'] = $r['marker_main_sk'];
	$new_array[$r['marker_main_sk']]['lat_lng'] = json_encode(
		array(
			'lat'=> (double)sprintf("%.14f",$r['map_lat'])
			, 'lng' => (double)sprintf("%.14f",$r['map_lng'])
		));
		$new_array[$r['marker_main_sk']]['memo'] = $r['memo'];
}
// print_r($new_array);exit;
?>