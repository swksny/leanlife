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

	$IncludeFile = new IncludeFile(DOCUMENT_ROOT.'/private/app/bep-eng.txt',10);
	$englishReplaceWords = $IncludeFile->execute();

	$replaceWords = array();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){	
		$session = getSession($ConstClass::REPLACE_WORDS);
		$replaceWords = $session;
	}else{
		$session = getDefaultSession($ConstClass::REPLACE_WORDS);
		$replaceWords = $session;
	}

	$tables = $ChangeCombination->tableCreate($replaceWords);

	$replaceWords = array_merge($englishReplaceWords,$replaceWords);
	
	$sentence = isset($_POST['sentence'])? $_POST['sentence']:'';
	$displayVar = '';
	if($sentence != ''){
		// print_r($sentence);exit;
		$displayVar = $MainLogic->parsingPost($replaceWords,$sentence);
	}else{
		$displayVar = '';
	}
	
	function getSession($words){
		$session = array();
		foreach($words as $before =>$after){
			if(isset($_POST[$after])){
				$session[] = array(
					'before' => $before,
					'after' => $after,
					'checked' => true,
				);
			}else{
				$session[] = array(
					'before' => $before,
					'after' => $after,
					'checked' => false,
				);
			}
		}
		return $session;
	}

	function getDefaultSession($words){
		$session = array();
		foreach($words as $before => $after){
			$session[] = array(
				'before' => $before,
				'after' => $after,
				'checked' => true,
			);
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
			<section>
				<h1>概要</h1>
				<div class="summary" style="margin:0.5rem auto 2.0rem auto">
					<div class="sentence">
						1.<a href="https://fastapi.metacpan.org/source/MASH/Lingua-JA-Yomi-0.01/lib/Lingua/JA">bep-eng.dic（NVDA 日本語版の辞書）</a>で英語を置換<br>
						2.カスタムした「変換ロジック」の組み合わせで置換 ※左上から順番に置換される<br>
						3.YahooAPIで漢字をひらがなに変換<br>

					</div>
				</div>
			</section>
			<section>
				<h1>変換ロジック</h1>
				<div class="changeCombination" style="margin:0.5rem auto 2.0rem auto">
					<div class="" style="display:flex; ">
						<?php foreach($tables as $table) : ?>
							<table style="width:150px; height:200px;">
							<?php foreach($table as $val) : ?>
								<tr>
									<?php if(!isset($val['after'])): ?>
										<td>　</td>
										<td>　</td>
										<td>　</td>
										<td>　</td>
									<?php else:?>
										<td><input type="checkbox" name="<?= $val['after'] ?>" value="<?= $val['before'] ?>" <?= $val['checked'] ? 'checked':'';?> ></td>
										<td><?= $val['before']; ?></td>
										<td>→</td>
										<td><?= $val['after']; ?></td>
									<?php endif ;?>
								</tr>
							<?php endforeach; ?>
							</table>
						<?php endforeach; ?>
					</div>
				</div>
			</section>
			<section>
					<h1>日本語の文章</h1>
					<div>
						<textarea name="sentence" class="sentence-area"><?= isset($_POST['sentence']) ? $_POST['sentence']:''; ?></textarea>
					</div>
					<div>
						<button class="button05"><a>変換する</a></button>
					</div>
			</section>
			</form>	
			<section>
				<h1>変換後</h1>
				<div>
					<textarea class="result sentence-area" id="result" readonly><?= h($displayVar); ?></textarea>
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