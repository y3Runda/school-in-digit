<?php
	$title = "Вхід у систему";
	include ROOT . '/views/_layouts/header.php'; 
?>

<section class="title_section container">
	<div id="everything__title_section">
		<p id="heading">Вхід у систему</p>
	</div>
</section>

<section class="login_section container">
	<div id="everything__login_section">
		<form action="/user/login">
			<div id="noacc" style="margin-top: 0; text-align: center;">
				<p>Немає акаунту? <a href="/user/signup">Створіть його тут</a></p>
			</div>
			<div style="margin-top: 30px;">
				<p>Логін</p>
				<input type="text" name="login" required>
			</div>
			<div>
				<p>Пароль</p>
				<input type="password" name="password" required>
			</div>
			<div id="d-button">
				<button class="btn" type="submit">Увійти</button>
			</div>
		</form>
		<p id="forpass">
			<a href="">Забули пароль?</a>
		</p>
	</div>
</section>

<?php include ROOT . '/views/_layouts/footer.php'; ?>