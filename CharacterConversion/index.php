<?php
// ■想定されるワード
// ・保育領域 東京第2営業所
// ・ITEMCRA営業所
// ・ヘルスケア&ウェルネス
//①再読み込み
//②post
//③redirect

session_start();
require_once('private/logic/include.php');

$mainLogic = new mainLogic($environment['api']['YAHHO_API_URL'],$environment['api']['YAHHO_API_ID']);
if(isset($_POST['sentence'])){
	$mainLogic->parsingPost();
}
?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>Yahho API</title>
		<link rel="stylesheet" type="text/css" href="./css/main.css">
	</head>
	<body>
		<div class="title-block">
				日本語カタカナ変換
		</div>
		<div class="main">
			<div class="center">
				<form action="" name="sentence" method="post">
					<div>
						<textarea name="sentence" class="sentence-area"></textarea>
					</div>
					<div>
						<button class="button05"><a>変換する</a></button>
					</div>
				</form>	
			</div>
			<div class="center">
				<div>
					<textarea class="result sentence-area" id="result" readonly><?= h($_SESSION['DISPLAY_VAR']); ?></textarea>
					<p><button id="copy-btn">Copy</button><span id="output"></span></p>
				</div>
			</div>
		</div>
	</body>
	<footer>
		<!-- Begin Yahoo! JAPAN Web Services Attribution Snippet -->
		<span style="margin:15px 15px 15px 15px"><a href="https://developer.yahoo.co.jp/sitemap/">Web Services by Yahoo! JAPAN</a></span>
		<!-- End Yahoo! JAPAN Web Services Attribution Snippet -->
	</footer>
</html>
<script src="./js/main.js"></script>
<?php session_reset(); ?>