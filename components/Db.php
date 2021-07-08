<?php

class Db {

	public static function getConnection(): PDO
    {
		// Getting the connection parameters from a file
		$paramsPath = ROOT . '/config/db_params.php';
		$params = include($paramsPath);
		// Setting up the connection
		$dns = "mysql:host={$params['host']};dbname={$params['dbname']}";
		try {
			$db = new PDO($dns, $params['user'], $params['pass']);
		} catch(PDOException $e) {
			die ("Не вдалося з'єднатись з базою даних. Спробуйте пізніше.");
		}
		// Setting the encoding
		$db->exec("set names utf8");

		return $db;
	}
}