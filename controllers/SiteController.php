<?php

class SiteController {

	public static function actionIndex() {
		
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