<?php

/**
 * Class UserController
 * @author Andrii Snurnikov
 */
class UserController {
	
	public static function actionLogin(): bool
    {

		$login = false;
		$password = false;
		
		if ( isset($_POST['submit']) ) {

			$login = $_POST['login'];
			$password = $_POST['password'];

			

		}

		require_once(ROOT . '/views/user/login.php');
		return true;
	}

	public static function actionSignup(): bool
    {
		require_once(ROOT . '/views/user/signup.php');
		return true;
	}

	public static function actionSignupPupil(): bool
    {
        // form processing
	    if ( isset($_POST['do_signup']) ) // if the form is sent
	    {
            // getting data from a form
	        $c_school = $_POST['c_school'];
	        $c_class = $_POST['c_class'];
	        $email = $_POST['email'];
	        $surname = $_POST['surname'];
	        $name = $_POST['name'];
	        $patronymic = $_POST['patronymic'];
	        $birthdate = $_POST['birthdate'];
            $gender = $_POST['gender'];
            $login = $_POST['login'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];

            $errors = []; // array of errors

            if (!User::checkEmail($email)) $errors[] = 'У полі "E-Mail" має бути електронна пошта';
            if (User::checkEmailExists($email)) $errors[] = 'E-Mail вже використаний';
            if ($gender != 'male' && $gender != 'female') $errors[] = 'Виберіть вашу стать';
            else {
                if ($gender == 'male') $gender_id = 1;
                if ($gender == 'female') $gender_id = 2;
            }
            if (!User::checkLengthLogin($login)) $errors[] = 'Логін занадто короткий';
            if (User::checkLoginExists($login)) $errors[] = 'Такий логін вже використаний';
            if (!User::checkLengthPassword($login)) $errors[] = 'Пароль занадто короткий';
            if ($password1 != $password2) $errors[] = 'Паролі не співпадають';

            if (count($errors) == 0) {
                $result = User::registerPupil($c_school, $c_class, $email, $login, $password1, $surname, $name, $patronymic, $birthdate, $gender_id);
                if ($result) {
                    header("Location: /user/login");
                }
            }
        }

		require_once(ROOT . '/views/user/signupPupil.php');
		return true;
	}

	public static function actionSignupTeacher(): bool
    {

		require_once(ROOT . '/views/user/signupTeacher.php');
		return true;
	}

	public static function actionSignupParent(): bool
    {

		require_once(ROOT . '/views/user/signupParent.php');
		return true;
	}

}