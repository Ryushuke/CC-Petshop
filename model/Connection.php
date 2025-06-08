<?php

use PDO;

class Connection
{
	const USER = 'root';
	const PASSWORD = null;
	const database = 'dbpetshop';

	public static function getConnection()
	{
		$pdo = new PDO(
			'mysql:host=localhost;dbname=' . self::database,
			self::USER,
			self::PASSWORD
		);

		return $pdo;
	}
}

?>
