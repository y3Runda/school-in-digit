<?php 
	$title = "Реєстрація школи";
	include ROOT . '/views/_layouts/header.php'; 
?>

<section class="title_section container">
	<div id="everything__title_section">
		<p id="heading">Реєстрація школи</p>
		<p id="subheading">Заява на приєднання школи до автиматизованої системи "School in Digit"</p>
	</div>
</section>

<section class="statement_section container">
	<form action="/school/registration" method="submit" id="everything__statement_section">
		<div class="title" style="margin-top: 0;">Заповніть, будь ласка, нижче розміщену форму для підключення до системи "School in Digit". Форма може бути заповнена лише Директором чи Заступником директора закладу освіти.</div>
		<div class="subtitle">Основна інформація про заклад освіти <text style="color: red;">*</text></div>
		<div class="input">
			<div class="desc">Повна назва</div>
			<input type="text" autocomplete="off" required placeholder="Наприклад: Школа №123">
		</div>
		<div class="input">
			<div class="desc">Область</div>
			<input type="text" autocomplete="off" required placeholder="Наприклад: Чернігівська">
		</div>
		<div class="input">
			<div class="desc">Місто</div>
			<input type="text" autocomplete="off" required>
		</div>
		<div class="input">
			<div class="desc">Район</div>
			<input type="text" autocomplete="off" required>
		</div>
		<div class="input">
			<div class="desc">Адреса</div>
			<input type="text" autocomplete="off" required placeholder="Вулиця, будинок">
		</div>
		<div class="input">
			<div class="desc">Контактний телефон</div>
			<input type="text" autocomplete="off" required placeholder="У форматі +380ХХХХХХХХХ">
		</div>
		<div class="input">
			<div class="desc">Електронна адреса</div>
			<input type="text" autocomplete="off" required placeholder="">
		</div>

		<div class="subtitle">Директор <text style="color: red;">*</text></div>
		<div class="input">
			<div class="desc">П.І.Б</div>
			<input type="text" autocomplete="off" required placeholder="">
		</div>
		<div class="input">
			<div class="desc">Контактний телефон</div>
			<input type="text" autocomplete="off" required placeholder="У форматі +380ХХХХХХХХХ">
		</div>
		<div class="input">
			<div class="desc">Електронна адреса</div>
			<input type="text" autocomplete="off" required placeholder="">
		</div>

		<div class="subtitle">Особа, визначена Адміністратором <text style="color: red;">*</text></div>
		<div class="input">
			<div class="desc">П.І.Б</div>
			<input type="text" autocomplete="off" required placeholder="">
		</div>
		<div class="input">
			<div class="desc">Контактний телефон</div>
			<input type="text" autocomplete="off" required placeholder="У форматі +380ХХХХХХХХХ">
		</div>
		<div class="input">
			<div class="desc">Електронна адреса</div>
			<input type="text" autocomplete="off" required placeholder="">
		</div>

		<div class="subtitle">Особа, яка залишає Заяву</div>
		<div class="input">
			<div class="desc">П.І.Б</div>
			<input type="text" autocomplete="off" placeholder="">
		</div>
		<div class="input">
			<div class="desc">Контактний телефон</div>
			<input type="text" autocomplete="off" placeholder="У форматі +380ХХХХХХХХХ">
		</div>
		<div class="input">
			<div class="desc">Електронна адреса</div>
			<input type="text" autocomplete="off" placeholder="">
		</div>

		<div class="subtitle">Додаткова інформація</div>
		<textarea rows="5" maxlength="395" contenteditable="false"></textarea>

		<div class="title"><text style="color: red;">*</text> - поля обов'язкові для заповнення</div>
	
		<div class="title">Дані щодо Особи, яка залишає Заяву не заповнюються, якщо заяву залишає Директор</div>
		
		<button type="submit" border="0">Надіслати</button>
	</form>
</section>

<?php include ROOT . '/views/_layouts/footer.php'; ?>