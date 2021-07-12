<?php

/**
 * Class Admin
 * @author Andrii Snurnikov 09.07.21
 */
class Admin
{

    /**
     * @param $email
     * @param $login
     * @param $password1
     * @param $surname
     * @param $name
     * @param $patronymic
     * @param $birthdate
     * @param $gender_id
     * @return bool
     */
    public static function registerAdmin($email, $login, $password1, $surname, $name, $patronymic, $birthdate, $gender_id) {

        return true;

    }

    /**
     * Function checks if typed system admin password is right
     * @param $pass
     * @return bool
     */
    public static function checkAdminPass($pass): bool
    {

        $db = Db::getConnection();
        $sql = "SELECT * FROM system_config WHERE id = 1";
        $result = $db->query($sql);
        $rows = $result->fetchAll();
        print_r($rows);

        $hash = $rows['value'];
        print_r($hash);

        return password_verify($pass, $hash);

    }

}