<?php

class BookDB{

	public function selBooks(){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM books";

		$result = $db->query($query);

		$books = array();

		foreach ($result as $row){
			$book = new Book(
							$row['book_num'],
							$row['book_title']);
			$book->getLaw_Id($row['law_id']);
			$book->setBook_id($row['book_id']);
			$books[] = $book;
		}
		return $books;
	}

	public function selBooksByLawID($law_id){
		$db = Dbconn::getDB();

		$query = "SELECT * FROM books WHERE law_id = '$law_id'";

		$result = $db->query($query);

		$books = array();

		foreach ($result as $row){
			$book = new Book(
							$row['book_num'],
							$row['book_title']
							);
			$book->getLaw_Id($row['law_id']);
			$book->setBook_id($row['book_id']);
			$books[] = $book;
		}
		return $books;
	}


}