<?php
	require_once '../classes/Dbconn.class.php';
	require_once '../classes/section.class.php';
	require_once '../classes/section_db.class.php';
	require_once '../classes/law.class.php';
	require_once '../classes/law_db.class.php';
	require_once '../classes/book.class.php';
	require_once '../classes/book_db.class.php';
	require_once '../classes/title.class.php';
	require_once '../classes/title_db.class.php';
	require_once '../classes/chapter.class.php';
	require_once '../classes/chapter_db.class.php';
	require_once '../classes/division.class.php';
	require_once '../classes/division_db.class.php';
	require_once '../classes/sub_division.class.php';
	require_once '../classes/sub_division_db.class.php';

	$table = $_POST['table'];
	$num   = $_POST['num'];
	$title = $_POST['title'];
	$id    = $_POST['id'];

if(isset($num) && isset($title) && !empty($num) && !empty($title) && is_numeric($num))
{
	switch ($table) {
		case 'title':
			$insert = new TitleDB();
			$insert->addTitle($num, $title, $id);
			echo "Success!  You can add another title in this book or close this window.";
		break;

		case 'chapter':
			$insert = new ChapterDB();
			$insert->addChapter($num, $title, $id);
			echo "Success!  You can add another chapter in this title or close this window.";
		break;

		case 'division':
			$insert = new DivisionDB();
			$insert->addDivision($num, $title, $id);
			echo "Success!  You can add another division in this title or close this window.";
		break;

		case 'subdivisions':
			$insert = new SubDivisionDB();
			$insert->addSubDivision($num, $title, $id);
			echo "Success!  You can add another sub-division in this division or close this window.";
		break;
	}
}else{
	echo "You must enter a number and title.";
}

