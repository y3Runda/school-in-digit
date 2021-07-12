<?php

/**
 * The User class is a model for working with users
 * @author Andrii Snurnikov
 */
class User {

    /**
     * Function for pupil registration
     * @param $c_school
     * @param $c_class
     * @param $email
     * @param $login
     * @param $password
     * @param $surname
     * @param $name
     * @param $patronymic
     * @param $birthdate
     * @param $gender_id
     * @return bool method result
     */
	public static function registerPupil($c_school, $c_class, $email, $login, $password, $surname, $name, $patronymic, $birthdate, $gender_id): bool
    {
		$db = Db::getConnection();
		$sql = 'INSERT INTO users (`email`, `login`, `password`, `surname`, `name`, `patronymic`, `birthdate`, `joindate`, `gender_id`, `role_id`) '
                . 'VALUES (:email, :login, :password, :surname, :name, :patronymic, :birthdate, :joindate, :gender_id, :role_id)';

		$joindate = date('Y') . '-' . date('m') . '-' . date('d');
		$role_id = 6; // pupil

		$result = $db->prepare($sql);
        $params = [
            ':email' => $email,
		    ':password' => $password,
            ':login' => $login,
            ':surname' => $surname,
            ':name' => $name,
            ':patronymic' => $patronymic,
            ':birthdate' => $birthdate,
            ':joindate' => $joindate,
            ':gender_id' => $gender_id,
            ':role_id' => $role_id,
        ];
        return $result->execute($params);
	}

	public static function registerTeacher() {

    }

    public static function registerParent() {

    }

    /**
     * This function is needed for checking entering style of email
     * @param $email
     * @return bool
     */
    public static function checkEmail($email): bool
    {
	    if (filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
	    return false;
    }

    /**
     * This function checks the number of such emails in the users table in the database
     * @param $email
     * @return bool
     */
    public static function checkEmailExists($email): bool
    {
        $db = Db::getConnection();
        $sql = "SELECT count(*) FROM users WHERE `email` = ?";
        $result = $db->prepare($sql);
        $result->execute([$email]);
        if ($result->fetchColumn()) return true;
        return false;
    }

    /**
     * @param $login
     * @return bool
     */
    public static function checkLengthLogin($login): bool
    {
        if (strlen($login) >= 8) return true;
        return false;
    }

    /**
     * This function checks the number of such logins in the users table in the database
     * @param $login
     * @return bool
     */
    public static function checkLoginExists($login): bool
    {
        $db = Db::getConnection();
        $sql = "SELECT count(*) FROM users WHERE `login` = ?";
        $result = $db->prepare($sql);
        $result->execute([$login]);
        if ($result->fetchColumn()) return true;
        return false;
    }

    /**
     * @param $password
     * @return bool
     */
    public static function checkLengthPassword($password): bool
    {
	    if (strlen($password) >= 8) return true;
        return false;
    }

    /**
     * @param $login
     * @param $password
     * @return bool
     */
    public static function passwordMatches($login, $password): bool
    {
        $db = Db::getConnection();
        $sql = "SELECT * FROM users WHERE `login` = ?";
        $result = $db->prepare($sql);
        $result->execute([$login]);
        $row = $result->fetchAll();
        $db_password = $row[0]["password"];
        if (password_verify($password, $db_password)) return true;
        return false;
    }

    public static function login($login) {
        $db = Db::getConnection();
        $sql = "SELECT * FROM users WHERE `login` = ?";
        $result = $db->prepare($sql);
        $result->execute([$login]);
        $row = $result->fetchAll();
        $_SESSION['user'] = $row[0];
    }

    /**
     * @return bool
     */
    public static function checkLogged(): bool
    {
        if (isset($_SESSION['user'])) return true;
        return false;
    }

}