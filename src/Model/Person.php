<?php
namespace App\Model;

use App\Database\Db;

class Person extends Db {
	public function getAllPersons() {
		$sql = "SELECT * FROM persons";
		$stmt = $this->pdo->query($sql);
		$data = $stmt->fetchAll();
		return $data;
	}

}