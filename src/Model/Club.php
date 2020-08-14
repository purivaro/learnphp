<?php
namespace App\Model;

use App\Database\Db;

class Club extends Db {

	public function getAllClubs() {
		$sql = "
			SELECT
				clubs.id,
				clubs.title
			FROM 
				clubs
			ORDER BY
				category_id,
				title
		";
		$stmt = $this->pdo->query($sql);
		$data = $stmt->fetchAll();
		return $data;
	}

}
?>