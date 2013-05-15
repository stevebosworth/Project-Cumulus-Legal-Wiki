<?php

class ChapterDB{
	public function selChapters(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM chapters";

		$result = $db->query($query);

		$chapters = array();

		foreach ($result as $row) {
			$chapter = new Chapter(
									$row['ch_num'],
									$row['ch_title']);
			$chapter->getTitle_Id($row['title_id']);
			$chapter->setCh_Id($row['ch_id']);
			$chapters[] = $chapter;
		}

		return $chapters;
	}

	public function selChaptersByTitleID($title_id){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM chapters WHERE title_id = '$title_id'";

		$result = $db->query($query);

		$chapters = array();

		foreach ($result as $row) {
			$chapter = new Chapter(
									$row['ch_num'],
									$row['ch_title']);
			$chapter->getTitle_Id($row['title_id']);
			$chapter->setCh_Id($row['ch_id']);
			$chapters[] = $chapter;
		}

		return $chapters;
	}

	public function selChapterByID($ch_id){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM chapters WHERE ch_id = '$ch_id'";

		$result = $db->query($query);
		$row = $result->fetch();

		$chapter = new Chapter(
								$row['ch_num'],
								$row['ch_title']);
		$chapter->getTitle_Id($row['title_id']);
		$chapter->setCh_Id($row['ch_id']);
		return $chapter;
	}

	public function addChapter($num, $title, $id){
		$db = Dbconn::getDB();

		$query = "INSERT INTO chapters (ch_num, ch_title, title_id) VALUES ('$num', '$title', '$id')";
		$insert = $db->exec($query);
	}

}