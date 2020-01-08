<!doctype HTML>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>掲示板を作る</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php
	
	mb_internal_encoding("utf-8");
	$pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","mysql");
	$stmt = $pdo->query("select *from contactform");
	
	?>
	<!-------------------ヘッダー--------------------------->
	<header>
		<div class="logo">
			<img src="4eachblog_logo.jpg">
		</div>
		<div class="container">
			<nav>
				<ul>
					<li>トップ</li>
					<li>プロフイール</li>
					<li>4eachについて</li>
					<li>登録フォーム</li>
					<li>問い合わせ</li>
					<li>その他</li>
				</ul>
			</nav>
		</div>
	</header>
	<!-------------------メインコンテンツ--------------------------->
	<main>
    <!-------------------掲示板--------------------------->
		<div class="left">
			<div class="board">
				<h1>プログラミングに役立つ掲示板</h1>
				<form method="post" action="insert.php">
					<div class="wrapper">
						<h2>入力フォーム</h2>
						<div class="contact-container">
							<label>ハンドルネーム</label>
							<input type="text" class="text" name="handlename" textsize="50">
						</div>
						<div class="contact-container">
							<label>タイトル</label>
							<input type="text" class="text" name="title" textsize="50">
						</div>
						<div class="contact-container">
							<label>コメント</label>
							<textarea cols="70" rows="10" name="comments"></textarea>
						</div>
						<div class="contact-container">
							<input type="submit" class="btn" value="投稿する">
						</div>
					</div>
				</form>

			</div>
<!-------------------掲示板入力--------------------------->
			<?php
while ($row = $stmt->fetch()) {

 echo "<div class='kiji'>";
 echo "<h3>".$row['title']."</h3>";
 echo "<div class='contents'>";
 echo $row['comments'];
 echo "<div class='handlename'>posted by".$row['handlename']."</div>";
 echo "</div>";
 echo "</div>";
 }
?>
		</div>
<!-------------------コンテンツメニュー--------------------------->
		<div class="right">
			<div class="main-menu">
				<h2>人気の記事</h2>
				<ul class="main-menu--list">
					<li>PHP オススメの本</li>
					<li>PHP MyAdminの使い方</li>
					<li>今人気のエディタ Top5</li>
					<li>HTMLの基礎</li>
				</ul>

				<h2>オススメリンク</h2>
				<ul class="main-menu--list">
					<li>インターノウス株式会社</li>
					<li>XAMPPのダウンロード</li>
					<li>Eclipseのダウンロード</li>
					<li>Braketsのダウンロード</li>
				</ul>


				<h2>カテゴリ</h2>
				<ul class="main-menu--list">
					<li>HTML</li>
					<li>PHP</li>
					<li>MySQL</li>
					<li>JavaScript</li>
				</ul>
			</div>
		</div>

	</main>
	<!-------------------フッター--------------------------->
	<footer>
<!--		 <div class="footer-container">-->
			<p>aaaaaaaaaaaaaa</p>
<!--		</div>-->
	</footer>
</body>


</html>