<?php 
	$title = "Головна сторінка";
	include ROOT . '/views/_layouts/header.php'; 
?>

<section class="title_section container" style="padding-top: 100px; padding-bottom: 100px;">
	<div id="everything__title_section">
		<p id="heading" style="font-size: 3rem;">School in Digit</p>
		<p id="subheading">Автоматизована система для закладів освіти</p>
		<div id="login_signup_btns">
			<a href="/user/login" style="margin-left: 0px;">Вхід</a>
			<a href="/user/signup">Реєстрація</a>
		</div>
	</div>
</section>

<section class="menu_section container">
	<div id="everything__menu_section">
		<a href="/about">
			<div class="d_icon">
				<img src="" alt="">
			</div>
			<div class="d_desc">
				<p class="d_t">Про систему</p>
				<p class="d_d">Коротко про систему та для чого вона потрібна.</p>
			</div>
		</a>
		<a href="/about">
			<div class="d_icon">
				<img src="" alt="">
			</div>
			<div class="d_desc">
				<p class="d_t">Чому "School in Digit"?</p>
				<p class="d_d">Коротко про систему та для чого вона потрібна.</p>
			</div>
		</a>
		<a href="/about">
			<div class="d_icon">
				<img src="" alt="">
			</div>
			<div class="d_desc">
				<p class="d_t">Учням</p>
				<p class="d_d">Коротко про систему та для чого вона потрібна.</p>
			</div>
		</a>
		<a href="/about">
			<div class="d_icon">
				<img src="" alt="">
			</div>
			<div class="d_desc">
				<p class="d_t">Вчителям</p>
				<p class="d_d">Коротко про систему та для чого вона потрібна.</p>
			</div>
		</a>
		<a href="/about">
			<div class="d_icon">
				<img src="" alt="">
			</div>
			<div class="d_desc">
				<p class="d_t">Батькам</p>
				<p class="d_d">Коротко про систему та для чого вона потрібна.</p>
			</div>
		</a>
		<a href="/about">
			<div class="d_icon">
				<img src="" alt="">
			</div>
			<div class="d_desc">
				<p class="d_t">Допомога</p>
				<p class="d_d">Коротко про систему та для чого вона потрібна.</p>
			</div>
		</a>
	</div>
</section>

<section class="school_registration_section container">
	<div id="everything__school_registration_section">
		<a href="/school/registration">Зареєструвати школу</a>
	</div>
</section>

<?php include ROOT . '/views/_layouts/footer.php'; ?>