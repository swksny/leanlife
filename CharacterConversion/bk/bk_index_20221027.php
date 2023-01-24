<?php
/*
★ポイント
既存のツール(https://tool.stabucky.com/convert/kanji2kana.php)と比べて下記が改善された
・数字、アルファベットも変換される
・ひらがなではなくカタカナに変換される
・文字数制限がない

■想定されるワード
・保育領域 東京第2営業所
・ITEMCRA営業所
・ヘルスケア&ウェルネス

*/
?>
<?php
    require_once('common.php');
?>


<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>Yahho API</title>
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<div class="title-block">
				日本語カタカナ変換
		</div>
		<div class="main">
			<div class="center">
				<div class="">
					<form action="" name="formsentence" method="post">
						<div>
							<textarea name="sentence" class="sentence-area"></textarea>
						</div>
						<div>
							<button class="button05"><a>変換する</a></button>
						</div>
					</form>
				</div>
			</div>
			<div class="center">
				<div>
					<div class="result sentence-area" id="result"><?= $display_var ?></div>
					<p><button id="copy-btn">Copy</button><span id="output"></span></p>
				</div>
			</div>
		</div>
	</body>
</html>

<script src="./main.js"></script>


<!--
	参考：
	・WebAPIについての説明
	https://qiita.com/busyoumono99/items/9b5ffd35dd521bafce47

	・file_get_contents を使って JSON を送信
	https://laraweb.net/surrounding/3324/

	・PHPでWebAPI（外部API）を呼び出す
	https://laraweb.net/surrounding/9720/

	・【PHP】Yahoo 日本語形態素解析APIの使い方　②、③
	https://ysklog.net/php/1581.html

	//https://qiita.com/search?q=%E6%98%8E%E6%97%A5

	ヤフーID
	//ygizc85217
	//ctanx87346 
-->