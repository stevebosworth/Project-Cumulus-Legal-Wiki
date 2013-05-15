<?php

class TitleDB{
	public function selTitles(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM titles";

		$result = $db->query($query);

		$titles = array();

		foreach ($result as $row) {
			$title = new Title(
									$row['title_num'],
									$row['title_title']);
			$title->getBook_Id($row['book_id']);
			$title->setTitle_Id($row['title_id']);
			$titles[] = $title;
		}

		return $titles;
	}

	public function selTitlesByBookID($book_id){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM titles WHERE book_id = '$book_id'";

		$result = $db->query($query);

		$titles = array();

		foreach ($result as $row) {
			$title = new Title(
									$row['title_num'],
									$row['title_title']);
			$title->getBook_Id($row['book_id']);
			$title->setTitle_Id($row['title_id']);
			$titles[] = $title;
		}

		return $titles;
	}


	public function addTitle($num, $title, $id){

		$db = Dbconn::getDB();

		$query = "INSERT INTO titles (title_num, title_title, book_id) VALUES ('$num', '$title', '$id')";
		$insert = $db->exec($query);
	}
}