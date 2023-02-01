<?php
// ■想定されるワード
// ・保育領域 東京第2営業所
// ・ITEMCRA営業所
// ・ヘルスケア&ウェルネス
//①再読み込み
//②post
//③redirect

	require_once('private/logic/include.php');
	$MainLogic = new MainLogic($environment['api']['YAHHO_API_URL'],$environment['api']['YAHHO_API_ID']);
	$ChangeCombination = new ChangeCombination();
	$ConstClass = new ConstClass;
	$tables = $ChangeCombination->tableCreate($ConstClass::REPLACE_WORDS);

	print_r($ConstClass::REPLACE_WORDS);
	$session = getSession($ConstClass::REPLACE_WORDS);
	print_r($session);exit;

	if(isset($_POST['sentence'])){
		$MainLogic->parsingPost();
	}
	
	function getSession($words){
		$session = array();
		foreach($words as $before =>$after){
			if(isset($_POST[$after])){
				$session[$before] = $after;
			}
		}
		return $session;
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
				言語カタカナ変換
		</div>
		<div class="main">
			<form action="" name="sentence" method="post">
			<section class="chengeCombination" style="margin:1.0rem auto">
				<div>
					<div>変換ロジック</div>
					<div class="" style="display:flex; ">
						<?php foreach($tables as $table) : ?>
							<table style="width:150px; height:200px;">
							<?php foreach($table as $before => $after) : ?>
								<tr>
									<?php if(empty($after)): ?>
										<td>　</td>
										<td>　</td>
										<td>　</td>
										<td>　</td>
									<?php else:?>
										<td><input type="checkbox" name="<?= $after ?>" value="<?= $before ?>"></td>
										<td><?= $before; ?></td>
										<td>→</td>
										<td><?= $after; ?></td>
									<?php endif ;?>
								</tr>
							<?php endforeach; ?>
							</table>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
			<section>
				
					<div>
						<textarea name="sentence" class="sentence-area"></textarea>
					</div>
					<div>
						<button class="button05"><a>変換する</a></button>
					</div>
				
			</section>
			</form>	
			<section>
				<div>
					<textarea class="result sentence-area" id="result" readonly><?= h($_SESSION['DISPLAY_VAR']); ?></textarea>
					<p><button id="copy-btn">Copy</button><span id="output"></span></p>
				</div>
			</section>
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