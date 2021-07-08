<?php

/**
 * Class School - model for working with schools and school's info
 */
class School {

	/**
	 * School registration
	 * @return boolean <p>Method result</p>
	 */
	public static function register( $arr ) {

		$db = Db::getConnection();

		$ip = $_SERVER['REMOTE_ADDR'];

		$sql = "INSERT INTO schoolstatements (ip, s_name, s_region, s_city, s_district, s_address, s_phone, s_email, d_fullname, d_phone, d_email, a_fullname, a_phone, a_email, z_fullname, z_phone, z_email, extra_info) VALUES (:ip, :s_name, :s_region, :s_city, :s_district, :s_address, :s_phone, :s_email, :d_fullname, :d_phone, :d_email, :a_fullname, :a_phone, :a_email, :z_fullname, :z_phone, :z_email, :extra_info)";

		$result = $db->prepare($sql);
		$result->bindParam(':ip', $ip, PDO::PARAM_STR);
		$result->bindParam(':s_name', $arr[0]);
		$result->bindParam(':s_region', $arr[1]);
		$result->bindParam(':s_city', $arr[2]);
		$result->bindParam(':s_district', $arr[3]);
		$result->bindParam(':s_address', $arr[4]);
		$result->bindParam(':s_phone', $arr[5]);
		$result->bindParam(':s_email', $arr[6]);
		$result->bindParam(':d_fullname', $arr[7]);
		$result->bindParam(':d_phone', $arr[8]);
		$result->bindParam(':d_email', $arr[9]);
		$result->bindParam(':a_fullname', $arr[10]);
		$result->bindParam(':a_phone', $arr[11]);
		$result->bindParam(':a_email', $arr[12]);
		$result->bindParam(':z_fullname', $arr[13]);
		$result->bindParam(':z_phone', $arr[14]);
		$result->bindParam(':z_email', $arr[15]);
		$result->bindParam(':extra_info', $arr[16]);

		return $result->execute();

	}

}