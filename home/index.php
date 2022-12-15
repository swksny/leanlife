<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<link rel="stylesheet" href="../main.css">
		<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
		<script src="./js/main.js"></script>
	</head>
	<body>
		<?php
			include('./header.html');
			include('./appConstants.php');
			include('./appLogic.php');
			$foo = json_encode($appConstant::SKILL_LIST);
		?>
		<main>
			<div class="welcome center" id="welcome">
				<div class="center ">
					<p class="title">Welcome!</p>
					<p>ようこそおいでなすった</p>
					<p>ここはエンジニアsawashinのポートフォリオサイトです。<br>
						これまで何を考え、行動し、どのようなスキルを身につけ
						何を作成したかまとめております。<br>
						コーヒーと素敵な音楽とご一緒に、ご覧いただけますと幸いです
					</p>
				</div>
			</div>
			<div class="About-me">
				<div class="center">
					<p class="title2">profile</p>
				</div>
			</div>
			<div class="portfolio center">
				<p class="title2">portfolio</p>
				<div class="center" style="display:flex;">
					<div>
						<canvas id="skillFrontChart" width="300rem" height="300rem"></canvas>
					</div>
					<div>
						<canvas id="skillBackChart" width="300rem" height="300rem"></canvas>
					</div>
					<div>
						<canvas id="otherSkill" width="300rem" height="300rem"></canvas>
					</div>
				</div>
			</div>
			<div class="work">
				<div class="title2">
					<div class="center">我が子たち</div>
					<div class="my-works">
						<div class="work1">
							<div class="photo" style="background-image:url(../CharacterConversion.png);">
								<a class ="link" href="https://leanlife.sakura.ne.jp/home/CharacterConversion/"></a>
							</div>
							<p class="work-name">言語カタカナ変換</p>
						</div>
						<div class="work2">
							<div class="photo" style="background-image:url(../LeanLife.png);">
								<a class ="link" href="https://leanlife.sakura.ne.jp/home"></a>
							</div>
							<p class="work-name">ポートフォリオサイト</p>
						</div>
					</div>

				</div>
			</div>
			<div class="contact">
				<div class="center">
					連絡先
				</div>
			</div>
		</main>
		<?php include_once('./footer.html'); ?>
	</body>
</html>