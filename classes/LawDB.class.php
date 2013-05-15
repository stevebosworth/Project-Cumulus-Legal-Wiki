<?php

class LawDB {

	public function selLaws(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM laws WHERE law_id > 0";

		$result = $db->query($query);

		$laws = array();

		foreach ($result as $row){
			$law = new Law(
							$row['law_name'],
							$row['law_code']);
			$law->setLaw_id($row['law_id']);
			$laws[] = $law;
		}
		return $laws;

	}

	public function selLawByID($law_id){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM laws WHERE law_id = '$law_id'";

		$result = $db->query($query);
		$row = $result->fetch();
		$law = new Law(
						$row['law_name'],
						$row['law_code']);
		$law->setLaw_id($row['law_id']);
		return $law;
	}

	public function addLaw($law_code, $law_name){
		$db = Dbconn::getDB();

		$query = "INSERT INTO laws (law_code, law_name) VALUES ('$law_code', '$law_name')";

		$insert = $db->exec($query);
	}
}