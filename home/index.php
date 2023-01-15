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
		<div class="modal add-center modal-outside-close" id="modal-1">
			<div class="modal-content">
				<div class="modal-header">
					<h1>お試しタイトル</h1>
					<span id="modal-1-close"  class="modal-close">×</span>
				</div>
				<div>
					確認用1
				</div>
			</div>
		</div>
		<div class="modal add-center modal-outside-close" id="modal-2">
			<div class="modal-content">
				<div class="modal-header">
					<h1>お試しタイトル</h1>
					<span id="modal-2-close" class="modal-close">×</span>
				</div>
				<div>
					確認用2
				</div>
			</div>
		</div>
		<div class="modal add-center modal-outside-close" id="modal-3">
			<div class="modal-content">
				<div class="modal-header">
					<h1>お試しタイトル</h1>
					<span id="modal-3-close" class="modal-close">×</span>
				</div>
				<div>
					確認用3
				</div>
			</div>
		</div>
		<div class="modal add-center modal-outside-close" id="modal-4">
			<div class="modal-content">
				<div class="modal-header">
					<h1>お試しタイトル</h1>
					<span id="modal-4-close" class="modal-close">×</span>
				</div>
				<div>
					確認用4
				</div>
			</div>
		</div>
			<div class="welcome center sa sa--lr" id="welcome" style="background-image:url('./technology-coffee.jpg'); background-size:cover; ">
				<div class="center ">
					<p class="title" style="margin-top:10.0rem;">Welcome!</p>
					<div class="" style="background-color:rgb(255,255,255,0.5); margin-top:3.5rem; padding:1.5rem; text-align:center;">
						<p class="">ようこそ<br>
						<br>
							ここは私、エンジニアsawashinのポートフォリオサイトです。<br>
							私の歴史、スキル、考えについてまとめてみました。<br>
							コーヒーと素敵な音楽とご一緒に、ご覧いただけますと幸いです。
						</p>
					</div>
				</div>
				<a href="#" class="scroll-a scroll-profile"><span class="scroll"></span>Scroll</a>
			</div>
			<div class="profile center" id="profile">
				<p class="title2">profile</p>
				<div class="section center">
					<div style="margin-bottom:1.0rem; display: flex;">
						<div class="center">
							<img src="./my-photo.JPG" class="img-my-photo" style="display:inline;">
						</div>
						<div>
							●要約<br>
							営業職(法個人)2年・社内SE2年目の1社4年目経験<br>
							長所は、切り替えとキャッチアップの速さです。<br>
							営業で培った定量を追う力を糧に、教えていただいたことはどんどん実行し、<br>
							失敗してもめげずに挑戦し続けます。<br>
							<br>
							●経歴<br>
							2012年4月：堺市立堺高等学校 高校サイエンス創造科(理数よりの普通科) <br>
							　　　　　→理数の強みをより伸ばすために選択<br>
							2015年4月：大阪経済大学 経営学部に入学<br>
							　　　　　→経営手法や会社について興味があり選択<br>
							2019年4月：人材紹介会社に営業職として従事<br>
							　　　　　→キャリアアドバイザーという職種と裁量が大きくアクティブな社風に興味を持ち入社を決意<br>
							2021年4月：異動希望が叶い社内SEへ<br>
							　　　　　→持ち前のキャッチアップの速さを生かし、3つの内製システムのメイン担当に任命される<br>
							現在に至る<br>
							<br>
							- GitHub: <a href="https://github.com/swksny">https://github.com/swksny</a>
						</div>
					</div>
				</div>
			</div>
			<div class="portfolio center" id="portfolio">
				<p class="title2">skill</p>
				<div class="section center">
					<div class="center" style="display:flex;">
						<div style="margin:1.0rem;">
							<p>SmartyでPHPの値を受け渡し、<br>HTMLで表示してました</p>
							<canvas id="skillFrontChart" width="360rem" height="320rem"></canvas>
						</div>
						<div style="margin:1.0rem;">
							<p>主にPHPの使用で、<br>自動化にはSeleniumを使用しました</p>
							<canvas id="skillBackChart" width="360rem" height="320rem"></canvas>
						</div>
						<div style="margin:1.0rem;">
							<p>Eclipseでのソースコード管理でしたが、<br>Gitの利用を推進しました</p>
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
									<!-- <a id="modal-open-cc" class ="link" href="https://leanlife.sakura.ne.jp/home/CharacterConversion/"></a> -->
									<span id="modal-1-open" class ="modal-open link" href=""></span>
								</div>

								<p class="work-name">言語カタカナ変換</p>
							</div>
							<div class="work2">
								<div class="photo" style="background-image:url(../LeanLife.png); background-size:cover;">
									<!-- <a class ="link" href="https://leanlife.sakura.ne.jp/home"></a> -->
									<span id="modal-2-open" class ="modal-open link" href=""></span>
								</div>
								<p class="work-name">ポートフォリオサイト</p>
							</div>
							<div class="work3">
								<div class="photo" style="background-image:url(../img/folder.png);">
									<!-- <a class ="link" href="http://localhost:8080/home/CopyFoderTool/logic.bat"></a> -->
									<span id="modal-3-open" class ="modal-open link" href=""></span>
								</div>
								<p class="work-name">フォルダ複製ツール</p>
							</div>
							<div class="work4">
								<div class="photo" style="background-image:url(../img/google-map.png);">
									<!-- <a class ="link" href="http://localhost:8080/home/FivaridMap"></a> -->
									<span id="modal-4-open" class ="modal-open link" href=""></span>
								</div>
								<p class="work-name">FivaridMap</p>
							</div>
					</div>
				</div>
			</div>
			<div class="contact center" id="contact">
				<p class="title2">Contact</p>
				<div class="section">
					Mail：swksn.823@gmail.com<br>
				</div>
			</div>
		</main>
		<?php include_once('./footer.html'); ?>
		<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
		<script src="../js/main.js"></script>
		<script src="../js/animation-template.js"></script>
	</body>
</html>