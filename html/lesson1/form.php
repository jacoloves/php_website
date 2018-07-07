<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Progate</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div class="header">
		<div class="header-left">Progate</div>
		<div class="header-right">
			<ul>
				<li>会社概要</li>
				<li>採用</li>
				<li class="selected">お問い合わせ</li>
			</ul>
		</div>
	</div>

	<div class="main">
		<div class="contact-form">
			<div class="form-title">お問い合わせ</div>
                        <!-- この下にformタグを書いていきましょう -->
			<form action="sent.php" method="post">	
				<div class="form-item">名前</div>
				<!-- この下にinputタグを書いていきましょう -->
				<input type="text" name="name">
                                <div class="form-item">年齢</div>
			        <!-- この下にselectタグを書いていきましょう -->
				<select name="age">
					<option value="未選択">選択してください</option>
					<?php
						for ($i = 6; $i <= 100 ; $i++) {
							echo "<option value='{$i}'>{$i}</option>";
						}
					?>
				</select>

				<div class="for-item">お問い合わせの種類</div>
				<?php
					$types = array('Progateに関するお問い合わせ', 'Progateに対する意見', '採用に関するお問い合わせ', '取材・メディア関連のお問い合わせ', '料金に関するお問い合わせ', 'その他');
				?>

				<!-- この下にselectタグを書いていきましょう -->
				<select name="category">
					<option value="未選択">選択してください</option>
					<?php
						foreach ($types as $value) {
							echo "<option value='{$value}'>{$value}</option>";
						}
					?>
				</select>	
                                <div class="form-item">内容</div>
				<!-- この下にtextareaタグを書いていきましょう -->
				<textarea name="body"></textarea>
                                <!-- この下に送信ボタンを作りましょう -->
				<input type="submit" value="送信">
			</form>
		</div>
	</div>

	<div class="footer">
		<div class="footer-left">
			<ul>
				<li>会社概要</li>
				<li>採用</li>
				<li>お問い合わせ</li>
			</ul>
		</div>
		<div class="like-box">
			<iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;show_faces=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:300px;" allowTransparency="true"></iframe>
		</div>
	</div>
</body>
</html>
