<?php
namespace App\Model;

use App\Database\Db;

class Ref extends Db {

	public function getRefsByGroupId($groupId) {
		$sql = "
			SELECT
				refs.id,
				refs.title
			FROM 
				refs
			WHERE
				refs.ref_group_id = '{$groupId}'
			ORDER BY
				id
		";
		$stmt = $this->pdo->query($sql);
		$data = $stmt->fetchAll();
		return $data;
	}

}
?>