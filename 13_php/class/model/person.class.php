<?php
namespace Model;

use Database\Db;

class Person extends Db {
	public function getPersons() {
		$sql = "SELECT * FROM persons";
		$stmt = $this->connect()->query($sql);
		$data = $stmt->fetchAll();
		return $data;
	}
}