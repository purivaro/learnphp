<?php
namespace Model;

use Database\Db;

class Person extends Db {
	public function getAllPersons() {
		$sql = "SELECT * FROM persons";
		$stmt = $this->pdo->query($sql);
		$data = $stmt->fetchAll();
		return $data;
	}

	public function getPersons($search=null) {
		$filters = [];

		if($search[':search']) {
			$where .= "
				AND (
					firstname LIKE :search
					OR nickname LIKE :search
				)
			";
			$filters[":search"] = "%{$search[':search']}%";
		}

		$sql = "SELECT * FROM persons WHERE 1=1 {$where} ";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($filters);
		return $stmt->fetchAll();
	}

	public function addPerson($person) {
		$sql = "INSERT INTO persons (firstname, nickname, dob) VALUES (:firstname, :nickname, :dob)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($person);
		return $this->pdo->lastInsertId();
	}

	public function updatePerson($person) {
		$sql = "UPDATE persons SET 
			firstname = :firstname, 
			nickname = :nickname, 
			dob = :dob, 
			gender_id = :gender_id 
			WHERE id = :id
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($person);
	}

	public function deletePerson($id) {
		$sql = "DELETE FROM persons WHERE id = ?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
	}

}