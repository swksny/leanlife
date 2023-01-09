<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/animation-template.css">
		<link rel="stylesheet" href="../css/lib/scroll.css">

	</head>
	<body style="background-color:rgba(247,246,245);">
		<?php
			include('../private/include.php');
		?>
		<main>
		<div id="loading" class="loader center">
			<div class="loader-inner ball-scale">
				<div></div>
			</div>
		</div>
			<div class="welcome center sa sa--lr" id="welcome" style="background-image:url('./technology-coffee.jpg'); background-size:cover; ">
				<div class="center ">
					<p class="title">Welcome!</p>
					<div class="" style="background-color:rgb(255,255,255,0.5); padding:1.5rem; text-align:center;">
						<p class="">ようこそおいでなすった<br>
						<br>
						ここはエンジニアsawashinのポートフォリオサイトです。<br>
							これまでのsawashinの歴史、スキル、考えについてまとめてみました<br>
							コーヒーと素敵な音楽とご一緒に、ご覧いただけますと幸いです
						</p>
					</div>
				</div>
				<a href="#" class="scroll-a"><span class="scroll"></span>Scroll</a>
			</div>
			<div class="profile center" id="profile">
				<p class="title2">profile</p>
				<div class="section center">
					<div style="margin-bottom:1.0rem;">
						簡単に要約すると、営業職2年・社内SE2年目の1社4年目経験の社会人です。<br>
						長所は、切り替えとキャッチアップの速さです。<br>
						教えていただいたことはどんどん実行し、失敗してもめげずに挑戦し続けます。<br>
						<br>
						簡単に私についてまとめましたので、ご覧ください。
						<br>
						2012年 高校：サイエンス創造科(理数よりの普通科) →理数が得意で、比較的家からも近かったので入学<br>
						2015年 大学：経営学部に入学 →将来の選択肢が多いと思い入学<br>
						2019年4月 人材紹介会社に営業職として従事 キャリアアドバイザーという職種と裁量が大きくアクティブな社風に興味を持ち入社を決意<br>
						2021年4月 異動希望が叶い社内SEへ異動<br>
						現在に至る
					</div>
				</div>
			</div>
			<div class="portfolio center" id="portfolio">
				<p class="title2">skill</p>
				<div class="section center">
					<div class="center" style="display:flex;">
						<div style="margin:1.0rem;">
							<p>SmartyでPHPの値を受け渡し</p>
							<canvas id="skillFrontChart" width="360rem" height="320rem"></canvas>
						</div>
						<div style="margin:1.0rem;">
							<p>phpの開発がメインでした</p>
							<canvas id="skillBackChart" width="360rem" height="320rem"></canvas>
						</div>
						<div style="margin:1.0rem;">
							<p>eclipseでソースコード管</p>
							<canvas id="otherSkill" width="360rem" height="320rem"></canvas>
						</div>
					</div>
					<div class="center">
						<div style="border:2px solid #808080; width:100.0rem; padding:2.0rem 1.5rem; margin:3.0rem 0;">
							5 - エキスパート：言語を使うだけでなく、その言語のライブラリやフレームワークを作ることもできる<br>
							4 - 上級：他のメンバーに教えることができる<br>
							3 - 中級：リファレンスをみなくても、実務レベルで自由に駆使できる<br>
							2 - 初級：多少複雑なプログラムでもリファレンスがあれば自力構築できるが、もう少し習熟が必要<br>
							1 - エントリー：単純なプログラムであれば、自力構築できる。軽く使用した程度
						</div>
					</div>
				</div>
			</div>
			<div id="my-children" class="work center">
				<div class="title2">my-children</div>
				<div class="section">
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
			<div class="contact center" id="contact">
				<p class="title">Contact</p>
				<div class="section">
					ここに連絡フォームを作る
				</div>
			</div>
		</main>
		<?php include_once('./footer.html'); ?>
		<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
		<script src="./js/main.js"></script>
		<script src="./js/animation-template.js"></script>
	</body>
</html>