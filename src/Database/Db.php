<?php
namespace App\Database;

use PDO;

class Db {
	private $host = "localhost";
	private $user = "puri";
	private $password = "puri.varo+555";
	private $dbName = "learnDB";

	protected $pdo;

	function __construct() {
		$this->pdo = $this->connect();
	}

	protected function connect() {
		$dsn = "mysql:host={$this->host};dbname={$this->dbName}";
		$pdo = new PDO($dsn, $this->user, $this->password);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
}
?>