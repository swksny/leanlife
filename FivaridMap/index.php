<?php
	include_once('./private/include.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>JavaScript Basics</title>
</head>

<script async defer src=<?= $api; ?> ></script>

<body>
<div class="full">
	<h1>Favorite Map</h1>
	<input type="text" id="keyword">
	<button id="search">Search</button>
	<div style="display:flex;">
		<div id="map" style="height:600px; margin-bottom:30px; flex-grow:1;"></div>
		<div style="width:300px; background-color:#FFFFFF; margin-bottom:30px;flex-grow:0;">
			<div class="memos">
				<div class="memo_title">ジャンル</div>
				<div>ここに変数を入れる？</div>
			</div>
			<div class="memos">
				<div class="memo_title">店舗名</div>
				<div id =shop_name>ここに変数を入れる？</div>
			</div>
			<div class="memos">
				<div class="memo_title">平均評価</div>
				<div id =revu >ここに変数を入れる？</div>
			</div>
			<div class="memos">
				<div class="memo_title">メモ</div>
				<div><span id=text_area>ここに変数？</span></div>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<button id = test>一旦</button>

<script>
	'use strict';
	<?php foreach($new_array as $val):?>
		const js_array_<?= $val['marker_main_sk'] ?> = JSON.parse('<?php echo $new_array[$val['marker_main_sk']]['lat_lng'] ?>');
	<?php endforeach; ?>

	function initMap(){

		//対象のIDを取得、オプションを設定
		var target = document.getElementById('map');
		var tokyo = js_array_1;

		//検証用マップ作成
		var tmp_marker;
		var service;

		var Options = {
		zoom: 15,      //地図の縮尺値
		center: tokyo,    //地図の中心座標
		mapTypeId: 'roadmap'   //地図の種類
		};
		
		//マップ生成
		var map = new google.maps.Map(target, Options);
		
		// //情報ウィンドウの表示
		// var infoWindow = new google.maps.InfoWindow({
		//   position: tokyo,
		//   content:'<strong>hello!</strong> hello! hello! hello! hello! hello! hello!',
		// });

		// infoWindow.open(map);
		
		//データベースにある情報全て表示

		<?php foreach($new_array as $val):?>
			var marker_<?= $val['marker_main_sk'] ?> = new google.maps.Marker({
				position: js_array_<?= $val['marker_main_sk'] ?>,
				map: map,
				// title: 'Tokyo!',
				animation:google.maps.Animation.DROP,
				icon: {
					url:'yellow_star.png',
					scaledSize: new google.maps.Size(24, 24)
				}
			});

			var infoWindow_tmp = new google.maps.InfoWindow({
				position: js_array_<?= $val['marker_main_sk'] ?> ,
				content: '<?= $target_info_text ?>',
			});

			marker_<?= $val['marker_main_sk'] ?>.addListener('click',function(e){
				//infoWindow_tmp.open(map,marker_<?= $val['marker_main_sk'] ?>)
				document.getElementById('text_area').textContent = '<?= $val['memo'] ?>' ;
				// document.getElementById('shop_name').textContent = e.name;
			});
		<?php endforeach; ?>


/*
		//専用のマーカー ※置いておく
		const svgMarker = {
		path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
		fillColor: "blue",
		fillOpacity: 0.6,
		strokeWeight: 0,
		rotation: 0,
		scale: 2,
		anchor: new google.maps.Point(15, 30),
		};
*/
	/*
		//クリックした場所にマーカーを配置
		map.addListener('click',function(e){
			var marker = new google.maps.Marker({
				position: e.latLng,
				map: map,
				title: e.latLng.toString(),
				animation:google.maps.Animation.DROP
			}); 
			console.log(111111);

	
			var infoWindow = new google.maps.InfoWindow({
				content: e.latLng.toString()
			});


			marker.addListener('click',function(){
				infoWindow.open(map,marker);
				document.getElementById('text_area').textContent = e.latLng.toString();
			});

			
			//  //クリックしたマーカーを削除
			//  marker.addListener('click',function(){
			//    this.setMap(null);
			//  });

			
		});
	*/

		// ★メモ★ 
		//textSearch()は複数単語で絞れる nearbySearch()は単一の単語のみ

		var marker_search = [];

		//♦︎textSearch()
		document.getElementById('search').addEventListener('click', function() {
			service = new google.maps.places.PlacesService(map);
			service.textSearch({
				location: tokyo,
				radius: '500',
				query: document.getElementById('keyword').value
			}, function(results, status) {
				if (status === google.maps.places.PlacesServiceStatus.OK) {
					var i;
					for (i = 0; i < results.length; i++) {
						//マーカー設置
						marker_search[i] = [];
						marker_search[i]['id'] = i;
						marker_search[i]['info'] = new google.maps.Marker({
							map: map,
							position: results[i].geometry.location,
							title: results[i].name,
							animation:google.maps.Animation.DROP
						});

						//情報ウィンドウ作成
						marker_search[i]['infoWindow'] = new google.maps.InfoWindow({
							position: results[i].geometry.location,
							content: results[i].name + i +
							`<br><button id=info_${i}>追加する</button>`
						});
						//ボタンの要素取得
						//var btn = document.getElementById(`info_${elem['id']}`);
						//console.log(btn);
						//infoWindow.open(map,marker_search);
					}
					marker_search.forEach(function(elem, index) {
						elem['info'].addListener('click',function(){
							document.getElementById('shop_name').textContent = elem['info'].title;
							map.panTo(new google.maps.LatLng(elem['info'].position));
							elem['infoWindow'].open(map);

							// document.getElementById(`info_${elem['id']}`).addEventListener('click', function() {
							// 	console.log('クリックされました！');
							// }, false);
						});
					});
					console.log('発火の前');
						if(document.getElementById('info_12')){
							console.log('発火');
							document.getElementById('info_12').addEventListener('click', function() {
								console.log(document.getElementById('info_12'));
								console.log('クリックされました！');
							}, false);
						}else{
							console.log('要素空');	
						}
						console.log('通過');
					/*
					marker_search[2].addListener('click',function(){
						// document.getElementById('shop_name').textContent = e.name;
						// infoWindow.open(map,marker_search)
						console.log('ナイス！');
					});
					*/
				} else {
					alert('Failed: ' + status);
					return;
				}
				//console.log('★');
				//console.log(marker_search.position);

			});
		});


		//♦︎nearbySearch()
		// document.getElementById('search').addEventListener('click', function() {
        // 	service = new google.maps.places.PlacesService(map);
		// 	service.nearbySearch({
		// 		location: tokyo,
		// 		radius: '500',
		// 		name: document.getElementById('keyword').value
		// 	}, function(results, status) {
		// 		var i;
		// 		if (status === google.maps.places.PlacesServiceStatus.OK) {
		// 			for (i = 0; i < results.length; i++) {
		// 				console.log(results);
		// 				new google.maps.Marker({
		// 					map: map,
		// 					position: results[i].geometry.location,
		// 					title: results[i].name
		// 				});
		// 			}
		// 		} else {
		// 			alert('Failed: ' + status);
		// 			return;
		// 		}
		// 	});
		// });
	}
	// var test = document.getElementById('revu');




	
</script>
</body>
</html>