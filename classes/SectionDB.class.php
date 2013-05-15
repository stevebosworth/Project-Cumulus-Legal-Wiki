<?php

class SectionDB {


	//simple select all from the sections table
	//returns an array containing a single object
	public function selSections(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM sections";

		$result = $db->query($query);

		$sections = array();

		foreach ($result as $row){
			$section = new Section(
									$row['sec_num'],
									$row['sec_title'],
									$row['sec_txt'],
									$row['enact_yr'],
									$row['enact_bill'],
									$row['enact_sec'],
									$row['law_id'],
									$row['book_id'],
									$row['title_id'],
									$row['ch_id'],
									$row['div_id'],
									$row['$sub_div_id']);
		 	$sections[] = $section;
		}
		return $sections;
	}


	//get related laws, books, titles, chapters, divisions and sub divisions
	//returns an array of objects
	public function selAllFromSections(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM sections s
					INNER JOIN laws l ON s.law_id = l.law_id
					INNER JOIN books b ON s.book_id = b.book_id
					INNER JOIN titles t ON s.title_id = t.title_id
					INNER JOIN chapters c ON s.ch_id = c.ch_id
					INNER JOIN divisions d ON s.div_id = d.div_id
					INNER JOIN subdivisions sd ON s.sub_div_id = sd.sub_div_id";

		$result = $db->query($query);

		$sections = array();

		foreach ($result as $row){
			$law = new Law(
							$row['law_name']
				);
			$law->setLaw_Id($row['law_id']);
			$book = new Book(
							  $row['book_num'],
							  $row['book_title']
				);
			$book->setBook_Id($row['book_id']);
			$title = new Title(
								$row['title_num'],
								$row['title_title']
				);
			$title->setTitle_Id($row['title_id']);
			$chapter = new Chapter(
									$row['ch_num'],
									$row['ch_title']
				);
			$chapter->setCh_Id($row['ch_id']);
			$title->setTitle_Id($row['title_id']);
			$division = new Division(
								$row['div_num'],
								$row['div_title']
				);
			$division->setDiv_Id($row['div_id']);
			$sub_division = new SubDivision(
								$row['sub_div_num'],
								$row['sub_div_title']
				);
			$sub_division->setSub_Div_Id($row['sub_div_id']);
			$section = new Section(
									$row['sec_num'],
									$row['sec_title'],
									$row['sec_txt'],
									$row['enact_yr'],
									$row['enact_bill'],
									$row['enact_sec'],
									$row['law_id'],
									$row['book_id'],
									$row['title_id'],
									$row['ch_id'],
									$row['div_id'],
									$row['$sub_div_id']);
		 	$sections[] = array($section,$law,$book, $title, $chapter, $division, $sub_division);
		}
		return $sections;
	}


	//get related laws, books, titles, chapters, divisions and sub divisions
	//returns a single section
	//returns an array of objects
	public function selAllFromSection($sec_num){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM sections s
					INNER JOIN laws l ON s.law_id = l.law_id
					INNER JOIN books b ON s.book_id = b.book_id
					INNER JOIN titles t ON s.title_id = t.title_id
					INNER JOIN chapters c ON s.ch_id = c.ch_id
					INNER JOIN divisions d ON s.div_id = d.div_id
					INNER JOIN subdivisions sd ON s.sub_div_id = sd.sub_div_id
					WHERE s.sec_num = '$sec_num'";

		$result = $db->query($query);

		$sections = array();

		foreach ($result as $row){
			$law = new Law(
							$row['law_name']
				);
			$law->setLaw_Id($row['law_id']);
			$book = new Book(
							  $row['book_num'],
							  $row['book_title']
				);
			$book->setBook_Id($row['book_id']);
			$title = new Title(
								$row['title_num'],
								$row['title_title']
				);
			$title->setTitle_Id($row['title_id']);
			$chapter = new Chapter(
									$row['ch_num'],
									$row['ch_title']
				);
			$chapter->setCh_Id($row['ch_id']);
			$title->setTitle_Id($row['title_id']);
			$division = new Division(
								$row['div_num'],
								$row['div_title']
				);
			$division->setDiv_Id($row['div_id']);
			$sub_division = new SubDivision(
								$row['sub_div_num'],
								$row['sub_div_title']
				);
			$sub_division->setSub_Div_Id($row['sub_div_id']);
			$section = new Section(
									$row['sec_num'],
									$row['sec_title'],
									$row['sec_txt'],
									$row['enact_yr'],
									$row['enact_bill'],
									$row['enact_sec'],
									$row['law_id'],
									$row['book_id'],
									$row['title_id'],
									$row['ch_id'],
									$row['div_id'],
									$row['$sub_div_id']);
		 	$sectionAll[] = array($section, $law, $book, $title, $chapter, $division, $sub_division);
		}
		return $sectionAll;
	}

	public function getSectionAll($objSection){

		$sec_array = $objSection;



		foreach($sec_array as $s){
			foreach($s as $i){
				switch($i){
					case is_a($i, 'section'):
						$sec_num    = $i->getSec_Num();
						$sec_title  = $i->getSec_Title();
						$sec_txt    = $i->getSec_Txt();
						$enact_yr   = $i->getEnact_Yr();
						$enact_bill = $i->getEnact_Bill();
						$enact_sec  = $i->getEnact_Sec();
					break;
					case is_a($i, 'book'):
						if($i->getBook_Id() > 0){
							$book_num   = $i->getBook_Num();
							$book_title = $i->getBook_Title();
						}else{
							$book_num   = "";
							$book_title = "";
						}
					break;
					case is_a($i, 'title'):
						if($i->getTitle_Id() > 0){
							$title_num   = $i->getTitle_Num();
							$title_title = $i->getTitle_Title();
						}else{
							$title_num   = "";
							$title_title = "";
						}
					break;
					case is_a($i, 'chapter'):
						if($i->getCh_Id() > 0){
							$ch_num   = $i->getCh_Num();
							$ch_title = $i->getCh_Title();
						}else{
							$ch_num   = "";
							$ch_title = "";
						}
					break;
					case is_a($i, 'division'):
					if($i->getDiv_Id() > 0){
						$div_num   = $i->getDiv_Num();
						$div_title = $i->getDiv_Title();
					}else{
						$div_num   = "";
						$div_title = "";
					}
					break;
					case is_a($i, 'subdivision'):
					if($i->getDiv_Id() > 0){
						$sub_div_num   = $i->getSub_div_num();
						$sub_div_title = $i->getSub_div_title();
					}else{
						$sub_div_num   = "";
						$sub_div_title = "";
					}
					break;
				} //switch
            } //second foreach
        } //first foreach
	    $result[] = array('sec_num' => $sec_num,
						'sec_title' => $sec_title,
						'sec_txt' => $sec_txt,
						'book_num' => $book_num,
						'book_title' => $book_title,
						'title_num' => $title_num,
						'title_title' => $title_title,
						'ch_num' => $ch_num,
						'ch_title' => $ch_title,
						'div_num' => $div_num,
						'div_title' => $div_title,
						'sub_div_num' => $sub_div_num,
						'sub_div_title' => $sub_div_title,
	    				'enact_yr' => $enact_yr,
	    				'enact_bill' => $enact_bill,
	    				'enact_sec' => $enact_sec);

        return $result;
	}

	public function selSectionByNum($sec_num){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM sections WHERE sec_num = '$sec_num'";

		$result = $db->query($query);
		$row = $result->fetch();

		$section = new Section(
								$row['sec_num'],
								$row['sec_title'],
								$row['sec_txt'],
								$row['enact_yr'],
								$row['enact_bill'],
								$row['enact_sec'],
								$row['law_id'],
								$row['book_id'],
								$row['title_id'],
								$row['ch_id'],
								$row['div_id'],
								$row['$sub_div_id']);
		return $section;
	}

	public function selSectionByBook($book_id){
		$db = Dbconn::getDb();

		$query = "SELECT * FROM sections WHERE book_id = '$book_id'";

		$result = $db->query($query);
		$row = $result->fetch();

		$section = new Section(
								$row['law_id'],
								$row['book_id'],
								$row['title_id'],
								$row['ch_id'],
								$row['div_id'],
								$row['$sub_div_id'],
								$row['sec_num'],
								$row['sec_title'],
								$row['sec_txt'],
								$row['enact_yr'],
								$row['enact_bill'],
								$row['enact_sec']);
		return $section;
	}

	public function addSection($sec_num, $sec_title, $sec_txt, $enact_yr, $enact_bill, $enact_sec, $law_id, $book_id, $title_id, $ch_id, $div_id, $sub_div_id){
		$db = Dbconn::getDb();

		try{
		$query = $db->prepare("INSERT INTO sections(
													sec_num,
													sec_title,
													sec_txt,
													enact_yr,
													enact_bill,
													enact_sec,
													law_id,
													book_id,
													title_id,
													ch_id,
													div_id,
													sub_div_id)
											VALUES (:sec_num,
													:sec_title,
													:sec_txt,
													:enact_yr,
													:enact_bill,
													:enact_sec,
													:law_id,
													:book_id,
													:title_id,
													:ch_id,
													:div_id,
													:sub_div_id)");

		$query->bindParam('sec_num', $sec_num);
		$query->bindParam('sec_title', $sec_title);
		$query->bindParam('sec_txt', $sec_txt);
		$query->bindParam('enact_yr', $enact_yr);
		$query->bindParam('enact_bill', $enact_bill);
		$query->bindParam('enact_sec', $enact_sec);
		$query->bindParam('law_id', $law_id);
		$query->bindParam('book_id', $book_id);
		$query->bindParam('title_id', $title_id);
		$query->bindParam('ch_id', $ch_id);
		$query->bindParam('div_id', $div_id);
		$query->bindParam('sub_div_id', $sub_div_id);


		//if(isset($law_id) && isset($sec_num)){
		$insert = $query->execute();

		echo $insert;
		//}
		}
		catch(PDOException $e)
		{
			echo $e;
		}
	}

	public function updateSection($sec_num, $sec_title, $sec_txt)
	{
		$db = Dbconn::getDB();

		$query = $db->prepare("UPDATE sections SET sec_title=:sec_title, sec_txt=:sec_txt WHERE sec_num=:sec_num");

		$query->bindParam('sec_num', $sec_num);
		$query->bindParam('sec_title', $sec_title);
		$query->bindParam('sec_txt', $sec_txt);
		// $query->bindParam('enact_yr', $enact_yr);
		// $query->bindParam('enact_bill', $enact_bill);
		// $query->bindParam('enact_sec', $enact_sec);

		$update = $query->execute();

		return $update;
	}

	public function deleteSection($sec_num)
	{
		$db = Dbconn::getDB();

		$query = $db->prepare("DELETE FROM sections WHERE sec_num = :sec_num");

		$query->bindParam('sec_num', $sec_num);

		$delete = $query->execute();

		return $delete;
	}
}