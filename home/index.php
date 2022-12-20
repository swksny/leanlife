<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="../main.css">

	</head>
	<body>
		<?php
			include('../private/include.php');
		?>
		<main>
			<div class="welcome center" id="welcome" style="background-image:url('./technology-coffee.jpg'); background-size:cover; ">
				<div class="center ">
					<p class="title">Welcome!</p>
					<div class="" style="background-color:rgb(255,255,255,0.5); padding:1.5rem; text-align:center;">
						<p class="">ようこそおいでなすった<br>
						<br>
						ここはエンジニアsawashinのポートフォリオサイトです。<br>
							これまで何を考え、行動し、どのようなスキルを身につけ
							何を作成したかまとめております。<br>
							コーヒーと素敵な音楽とご一緒に、ご覧いただけますと幸いです
						</p>
					</div>
				</div>
			</div>
			<div class="about-me" id="profile">
				<div class="center">
					<p class="title2">profile</p>
					<div style="margin-bottom:1.0rem;">
						簡単に要約すると、営業職2年・社内SE2年目の1社4年目経験の社会人です。<br>
						長所は、切り替えとキャッチアップの速さです。<br>
						教えていただいたことはどんどん実行し、失敗してもめげずに挑戦し続けます。<br>
						<br>
						簡単に私についてまとめましたので、ご覧ください。
					</div>
					<div>
						2012年 高校：サイエンス創造科(理数よりの普通科) →理数が得意で、比較的家からも近かったので入学<br>
						2015年 大学：経営学部に入学 →将来の選択肢が多いと思い入学<br>
						2019年4月 人材紹介会社に営業職として従事 キャリアアドバイザーという職種と裁量が大きくアクティブな社風に興味を持ち入社を決意<br>
						2021年4月 異動希望が叶い社内SEへ異動<br>
						現在に至る
					</div>
				</div>
			</div>
			<div class="portfolio center" id="portfolio">
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
			<div id="my-children" class="work">
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
						<div class="work3">
							<div class="photo" style="background-color:black;">
								<a class ="link" href=""></a>
							</div>
							<p class="work-name">フォルダ複製ツール</p>
						</div>
						<div class="work4">
							<div class="photo" style="background-color:black;">
								<a class ="link" href=""></a>
							</div>
							<p class="work-name">googleLike</p>
						</div>
					</div>

				</div>
			</div>
			<div class="contact" id="contact">

			</div>
		</main>
		<?php include_once('./footer.html'); ?>
		<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
		<script src="./js/main.js"></script>
	</body>
</html>