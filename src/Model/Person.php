<?php
namespace App\Model;

use App\Database\Db;

class Person extends Db {

	public function getAllPersons() {
		$sql = "
			SELECT
				persons.id,
				persons.firstname,
				persons.nickname,
				persons.dob,
				persons.salary,
				refs.title AS gender,
				clubs.title AS club
			FROM 
				persons
				LEFT JOIN refs ON persons.gender_id = refs.id
				LEFT JOIN clubs ON persons.club_id = clubs.id
			ORDER BY
				persons.gender_id,
				persons.dob
		";
		$stmt = $this->pdo->query($sql);
		$data = $stmt->fetchAll();
		return $data;
	}

	public function addPerson($person) {
		$sql = "
			INSERT INTO persons (
				firstname, 
				nickname, 
				dob, 
				gender_id, 
				club_id, 
				salary
			) VALUES (
				:firstname, 
				:nickname, 
				:dob, 
				:gender_id, 
				:club_id, 
				:salary
			)
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($person);
		return $this->pdo->lastInsertId();
	}

	public function updatePerson($person) {
		$sql = "
			UPDATE persons SET
				firstname = :firstname, 
				nickname = :nickname, 
				dob = :dob,
				gender_id = :gender_id, 
				club_id = :club_id, 
				salary = :salary
			WHERE id = :id
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute($person);
		return true;
	}

	public function deletePerson($id) {
		$sql = "
			DELETE FROM persons WHERE id = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		return true;
	}

	public function getPersonById($id) {
		$sql = "
			SELECT
				persons.id,
				persons.firstname,
				persons.nickname,
				persons.dob,
				persons.salary,
				persons.gender_id,
				persons.club_id
			FROM 
				persons
			WHERE 
				persons.id = ?
		";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetchAll();
		return $data[0];
	}
}
?>