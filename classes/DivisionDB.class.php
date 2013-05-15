<?php

class DivisionDB{

	public function selDivisions(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM divisions";

		$result = $db->query($query);

		$divisions = array();

		foreach ($result as $row){
			$division = new Division(
							$row['div_num'],
							$row['div_title']);
			$division->getCh_Id($row['ch_id']);
			$division->setDiv_Id($row['div_id']);
			$divisions[] = $division;
		}
		return $divisions;
	}

	public function selDivisionsByChID($ch_id){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM divisions WHERE ch_id = '$ch_id'";

		$result = $db->query($query);

		$divisions = array();

		foreach ($result as $row){
			$division = new Division(
							$row['div_num'],
							$row['div_title']);
			$division->getCh_Id($row['ch_id']);
			$division->setDiv_Id($row['div_id']);
			$divisions[] = $division;
		}
		return $divisions;
	}

	public function selDivisionByID($div_id){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM divisions WHERE div_id = '$div_id'";

		$result = $db->query($query);
		$row = $result->fetch();

		$division = new Division(
							$row['div_num'],
							$row['div_title']);
		$division->getCh_Id($row['ch_id']);
		$division->setDiv_Id($row['div_id']);
		return $division;
	}



	public function addDivision($num, $title, $id){
		$db = Dbconn::getDB();

		$query = "INSERT INTO divisions (div_num, div_title, ch_id) VALUES ('$num', '$title', '$id')";
		$insert = $db->exec($query);
	}

}