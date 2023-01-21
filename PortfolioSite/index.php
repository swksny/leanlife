<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<link rel="stylesheet" href="./css/lib/normalize.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="./css/lib/animation.css">
		<link rel="stylesheet" href="./css/lib/scroll.css">

	</head>
	<body style="background-color:rgba(247,246,245);">
		<?php
			include('./private/include.php');
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
					<h1>日本語カタカナ変換</h1>
					<span id="modal-1-close"  class="modal-close">×</span>
				</div>
				<div class="modal-body">
					日本語をカタカナに変換する機能です。<br>
					現職で会社の組織変更対応を担っており、<br>
					その中での部署名のカタカナを効率よく振るために<br>
					<a href="https://tool.stabucky.com/convert/kanji2kana.php">既存の外部サイトのツール</a>を参考にYahoo APIを利用して作成してました。<br>
					本番運用を試みておりますが、現状では改善点が多くある状況です。<br>
					<br>
					♦︎既存のツールと比べた改善点<br>
					・数字、アルファベットも変換される<br>
					・ひらがなではなくカタカナに変換される<br>
					・文字数制限がない<br>
					<!-- <br>
					♦︎想定される文字列<br>
					・保育領域 東京第2営業所<br>
					・ITEMCRA営業所<br>
					・ヘルスケア&ウェルネス<br> -->
					<br>
					→<a href="<?= $environment['URL']['CHARACTER_CONVERSION']; ?>">サイトはこちら</a>
				</div>
			</div>
		</div>
		<div class="modal add-center modal-outside-close" id="modal-2">
			<div class="modal-content">
				<div class="modal-header">
					<h1>お試しタイトル</h1>
					<span id="modal-2-close" class="modal-close">×</span>
				</div>
				<div class="modal-body">
					実際に業務で利用したPHP、JSを中心に作成しました。<br>
					<br>
					♦︎ポイント<br>
					・シンプルでわかりやすいデザインを意識<br>
					・開発環境は独学で身につけたDocker技術での仮想環境の構築<br>
					・YahhoAPIやGoogleAPIなど、モダンな技術への挑戦<br>
					<br>
					♦︎今後について<br>
					レスポンシブ対応や、セキュリティ対策は必須となるので、<br>
					まずはこちらから対応していこうと考えてます。<br>
					やることは膨大にあると認識しております。<br>
					<br>
					→<a href="<?= $environment['URL']['PORT_FOLIO_SITE']; ?>">サイトはこちら</a>
				</div>
			</div>
		</div>
		<div class="modal add-center modal-outside-close" id="modal-3">
			<div class="modal-content">
				<div class="modal-header">
					<h1>フォルダ作成ツール</h1>
					<span id="modal-3-close" class="modal-close">×</span>
				</div>
				<div class="modal-body">
					ディレクリの中身ごと、ある一定の法則に従ってコピーできるツールです。<br>
					主に現職の特定の業務効率を上げるべく開発しました。<br>
					<br>
					→<a href="<?= $environment['URL']['COPY_FOLDER_TOOL'].'/logic.bat'; ?>">ダウンロードはこちら</a>
				</div>
			</div>
		</div>
		<div class="modal add-center modal-outside-close" id="modal-4">
			<div class="modal-content">
				<div class="modal-header">
					<h1>FivaridMap</h1>
					<span id="modal-4-close" class="modal-close">×</span>
				</div>
				<div class="modal-body">
					知人だけの洗練された口コミサイトをつくりたいと思い、着手。<br>
					現状の私のスキルでは限界があったため、開発を中断しております。<br>
					<br>
					→<a href="<?= $environment['URL']['FIVARID_MAP'];?>">サイトはこちら</a><br>
					※DBをローカル環境にしか構築していないため、閲覧できません。
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
							私の経歴、スキル、考えについてまとめてみました。<br>
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
							<div class="profile-section">
								●要約<br>
								<div class="profile-content">
									営業職(法個人)2年・社内SE2年目の1社4年目経験です。<br>
									長所は、切り替えの速さとキャッチアップ力です。<br>
									営業で培った定量を追う力とメンタルを武器に、教えていただいたことはどんどん実行し、<br>
									失敗してもめげずに挑戦し続けます。
								</div>
							</div>
							<div class="profile-section">
								●経歴
								<div class="profile-content">
									<!-- 2012年4月：高校入学 サイエンス創造科(理数よりの普通科) <br>
									　　　　　→理数の強みをより伸ばすために選択<br>
									2015年4月：大学入学 経営学部に入学<br>
									　　　　　→経営手法や会社そのものについて興味があり入学<br>
									2019年4月：人材紹介会社に営業職として従事<br>
									　　　　　→キャリアアドバイザーという職種と裁量が大きくアクティブな社風に興味を惹かれ入社<br>
									2021年4月：異動希望が叶い社内SEへ<br>
									　　　　　→持ち前のキャッチアップ力を生かし、3つの内製システムのメイン担当を任せていただく<br>
									現在に至る<br> -->
									<ul class="timeline">
										<li>
											<p class="timeline-date">2012年4月</p>
											<div class="timeline-content">
												<h2>高校入学 サイエンス創造科(理数よりの普通科)</h2>
												<p>理数の強みをより伸ばすために選択</p>
											</div>
										</li>
										<li>
											<p class="timeline-date">2015年4月</p>
											<div class="timeline-content">
												<h2>大学入学 経営学部に入学</h2>
												<p>経済や会社の経営について興味があり入学</p>
											</div>
										</li>
										<li>
											<p class="timeline-date">2019年4月</p>
											<div class="timeline-content">
												<h2>人材紹介会社に営業職として従事</h2>
												<p>キャリアアドバイザーという職種と裁量が大きくアクティブな社風に興味を惹かれ入社</p>
											</div>
										</li>
										<li>
											<p class="timeline-date">2021年4月</p>
											<div class="timeline-content">
												<h2>異動希望が叶い社内SEへ異動</h2>
												<p>持ち前のキャッチアップ力を生かし、3つの内製システムのメイン担当を任せていただく</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div>
								- GitHub: <a href="">※現在、非公開です</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="portfolio center" id="portfolio">
				<p class="title2">skill</p>
				<div class="section center">
					<div class="center" style="display:flex;">
						<div style="margin:1.0rem;">
							<p>ほとんどのシステムでは<br>SmartyでPHPの値を受け渡し、<br>HTML/CSSで表示でした。</p>
							<canvas id="skillFrontChart" width="360rem" height="320rem"></canvas>
						</div>
						<div style="margin:1.0rem;">
							<p>主にPHPの使用で、<br>Chrome上で動くRPAには<br>PythonのSeleniumを使用しておりました</p>
							<canvas id="skillBackChart" width="360rem" height="320rem"></canvas>
						</div>
						<div style="margin:1.0rem;">
							<!-- SVN、eclipse、さくらエディタが中心に<br>活躍しておりましたが、 -->
							<p>所属部署ではあまり利用されていない、<br>GitHub・vscode等のモダンな技術に<br>触れることも意識しました</p>
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
								<div class="photo" style="background-image:url(./img/CharacterConversion.png);">
									<!-- <a id="modal-open-cc" class ="link" href="https://leanlife.sakura.ne.jp/home/CharacterConversion/"></a> -->
									<span id="modal-1-open" class ="modal-open link" href=""></span>
								</div>

								<p class="work-name">言語カタカナ変換</p>
							</div>
							<div class="work2">
								<div class="photo" style="background-image:url(./img/LeanLife.png); background-size:cover;">
									<!-- <a class ="link" href="https://leanlife.sakura.ne.jp/home"></a> -->
									<span id="modal-2-open" class ="modal-open link" href=""></span>
								</div>
								<p class="work-name">ポートフォリオサイト</p>
							</div>
							<div class="work3">
								<div class="photo" style="background-image:url(./img/folder.png);">
									<!-- <a class ="link" href="http://localhost:8080/home/CopyFoderTool/logic.bat"></a> -->
									<span id="modal-3-open" class ="modal-open link" href=""></span>
								</div>
								<p class="work-name">フォルダ複製ツール</p>
							</div>
							<div class="work4">
								<div class="photo" style="background-image:url(./img/google-map.png);">
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
		<script src="./js/main.js"></script>
		<script src="./js/animation-template.js"></script>
	</body>
</html>