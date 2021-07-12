<?php

class SiteController {

	public static function actionIndex() {

	    if (User::checkLogged() && $_SESSION['user']['role_id'] == 6) {
	        $arr_quotes = [
	            ["Мудрий не той, хто знає багато, а той, хто знає потрібне.", "Пауло Коельо", "https://uk.wikipedia.org/wiki/%D0%9F%D0%B0%D1%83%D0%BB%D0%BE_%D0%9A%D0%BE%D0%B5%D0%BB%D1%8C%D0%B9%D0%BE#%D0%9F%D0%B0%D1%83%D0%BB%D0%BE_%D0%9A%D0%BE%D0%B5%D0%BB%D1%8C%D0%B9%D0%BE_%D1%96_%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D0%B0"],
                ["Навчання без роздумів – шкідливе, роздуми без навчання – небезпечні.", "Конфуцій", "https://uk.wikipedia.org/wiki/%D0%9A%D0%BE%D0%BD%D1%84%D1%83%D1%86%D1%96%D0%B9"],
                ["Багато чого не зробиш, поки не вивчишся. Але багато треба зробити, щоб навчитись.", "Конфуцій", "https://uk.wikipedia.org/wiki/%D0%9A%D0%BE%D0%BD%D1%84%D1%83%D1%86%D1%96%D0%B9"],
                ["Велич людини в її здатності мислити.", "Блез Паскаль", "https://uk.wikipedia.org/wiki/%D0%91%D0%BB%D0%B5%D0%B7_%D0%9F%D0%B0%D1%81%D0%BA%D0%B0%D0%BB%D1%8C"],
                ["Освіта – скарб; праця – ключ до нього.", "П'єр Буаст", "https://uk.wikipedia.org/wiki/%D0%9F%27%D1%94%D1%80_%D0%91%D1%83%D0%B0%D1%81%D1%82"],
                ["Якби всі людські бажання здійснилися, земля стала би пеклом.", "П'єр Буаст", "https://uk.wikipedia.org/wiki/%D0%9F%27%D1%94%D1%80_%D0%91%D1%83%D0%B0%D1%81%D1%82"],
                ["Ледарями часто стають люди із надто великими планами.", "П'єр Буаст", "https://uk.wikipedia.org/wiki/%D0%9F%27%D1%94%D1%80_%D0%91%D1%83%D0%B0%D1%81%D1%82"],
                ["Учень, який навчається без бажання — це птах без крил.", "Сааді", "https://uk.wikipedia.org/wiki/%D0%A1%D0%B0%D0%B0%D0%B4%D1%96_%D0%A8%D0%B8%D1%80%D0%B0%D0%B7%D1%96"],
                ["Скільки б ти не жив, усе життя слід вчитися.", "Сенека", "https://uk.wikipedia.org/wiki/%D0%9B%D1%83%D1%86%D1%96%D0%B9_%D0%90%D0%BD%D0%BD%D0%B5%D0%B9_%D0%A1%D0%B5%D0%BD%D0%B5%D0%BA%D0%B0"],
                ["Чого б ти не вчився, ти вчишся для себе.", "Петроній", "https://uk.wikipedia.org/wiki/%D0%9F%D0%B5%D1%82%D1%80%D0%BE%D0%BD%D1%96%D0%B9_%D0%90%D1%80%D0%B1%D1%96%D1%82%D1%80"],
                ["Вчіться у всіх, не наслідуйте нікому.", "М. Горький", "https://uk.wikipedia.org/wiki/%D0%9C%D0%B0%D0%BA%D1%81%D0%B8%D0%BC_%D0%93%D0%BE%D1%80%D1%8C%D0%BA%D0%B8%D0%B9"],
                ["Книга й школа — що є глибше?", "П. Тичина", "https://uk.wikipedia.org/wiki/%D0%A2%D0%B8%D1%87%D0%B8%D0%BD%D0%B0_%D0%9F%D0%B0%D0%B2%D0%BB%D0%BE_%D0%93%D1%80%D0%B8%D0%B3%D0%BE%D1%80%D0%BE%D0%B2%D0%B8%D1%87"],
            ];
	        $n = rand(0, count($arr_quotes) - 1);
        }

		require_once(ROOT . '/views/site/index.php');
		return true;
	}

	public static function actionContact() {

		require_once(ROOT . '/views/site/contact.php');
		return true;
	}

	public static function actionAbout() {
		
		require_once(ROOT . '/views/site/about.php');
		return true;
	}

	public static function actionHelp() {

		require_once(ROOT . '/views/site/help.php');
		return true;
	}

	public static function actionSchoolRegistration() {

		if (isset($_POST['submit'])) {

			$arr = [
				$_POST['s_name'],
				$_POST['s_region'],
				$_POST['s_city'],
				$_POST['s_district'],
				$_POST['s_adress'],
				$_POST['s_phone'],
				$_POST['s_email'],
				$_POST['d_fullname'],
				$_POST['d_phone'],
				$_POST['d_email'],
				$_POST['a_fullname'],
				$_POST['a_phone'],
				$_POST['a_email'],
				$_POST['z_fullname'],
				$_POST['z_phone'],
				$_POST['z_email'],
				$_POST['extra_info'],
			];

			$result = School::register( $arr );

		}

		require_once(ROOT . '/views/site/schoolRegistration.php');
		return true;
	}

}