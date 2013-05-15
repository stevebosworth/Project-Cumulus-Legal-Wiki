<?php

class SubDivisionDB{

	public function selSubDivisions(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM subdivisions";

		$result = $db->query($query);

		$sub_divisions = array();

		foreach ($result as $row){
			$sub_division = new SubDivision(
							$row['sub_div_num'],
							$row['sub_div_title']);
			$sub_division->getDiv_Id($row['div_id']);
			$sub_division->getDiv_Id($row['sub_div_id']);
			$sub_divisions[] = $sub_division;
		}
		return $sub_divisions;
	}

	public function selSubDivisionsByDivID($div_id){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM subdivisions WHERE div_id = '$div_id'";

		$result = $db->query($query);

		$sub_divisions = array();

		foreach ($result as $row){
			$sub_division = new SubDivision(
							$row['sub_div_num'],
							$row['sub_div_title'],
							$row['div_id']);
			$sub_division->getDiv_Id($row['sub_div_id']);
			$sub_divisions[] = $sub_division;
		}
		return $sub_divisions;
	}

	public function selDivisionByID($div_id){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM divisions WHERE div_id = '$div_id'";

		$result = $db->query($query);
		$row = $result->fetch();

		$sub_division = new SubDivision(
							$row['sub_div_num'],
							$row['sub_div_title'],
							$row['div_id']);
		$sub_division->getDiv_Id($row['sub_div_id']);
		return $division;
	}

	public function addSubDivision($num, $title, $id){
		$db = Dbconn::getDB();

		$query = "INSERT INTO subdivisions (sub_div_num, sub_div_title, div_id) VALUES ('$num', '$title', '$id')";
		$insert = $db->exec($query);
	}

}