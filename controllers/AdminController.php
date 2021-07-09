<?php

class AdminController
{

    public static function actionSignup() {

        if (isset($_POST['do_signup'])) {

            $adminpass = $_POST['syspass'];
            $email = $_POST['email'];
            $surname = $_POST['surname'];
            $name = $_POST['name'];
            $patronymic = $_POST['patronymic'];
            $gender = $_POST['gender'];
            $birthdate = $_POST['birthdate'];
            $login = $_POST['login'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];

            $errors = [];

            if (!Admin::checkAdminPass($adminpass)) $errors[] = 'Неправильний адмін-пароль';
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
                $result = Admin::registerAdmin($email, $login, $password1, $surname, $name, $patronymic, $birthdate, $gender_id);
                if ($result) {
                    header("Location: /user/login");
                }
            }

        }

        require_once(ROOT . '/views/admin/signup.php');
        return true;
    }

    public static function actionSchoolRegistration() {

        require_once(ROOT . '/views/admin/schoolRegistration.php');
        return true;
    }

}