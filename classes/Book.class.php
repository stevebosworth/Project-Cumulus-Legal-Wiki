<?php

	class Book{
		private $book_id;
		private $law_id;
		private $book_title;
		private $book_num;

	public function __construct($book_num, $book_title){
		$this->book_num = $book_num;
        $this->book_title = $book_title;
	}

    /**
     * Gets the value of book_id.
     *
     * @return mixed
     */
    public function getBook_Id()
    {
        return $this->book_id;
    }

    /**
     * Sets the value of book_id.
     *
     * @param mixed $book_id the book_id
     */
    public function setBook_Id($book_id)
    {
        $this->book_id = $book_id;
    }

    /**
     * Gets the value of law_id.
     *
     * @return mixed
     */
    public function getLaw_Id()
    {
        return $this->law_id;
    }

    /**
     * Sets the value of law_id.
     *
     * @param mixed $law_id the law_id
     */
    public function setLaw_Id($law_id)
    {
        $this->law_id = $law_id;
    }

    /**
     * Gets the value of book_title.
     *
     * @return mixed
     */
    public function getBook_Title()
    {
        return $this->book_title;
    }

    /**
     * Sets the value of book_title.
     *
     * @param mixed $book_title the book_title
     */
    public function setBook_Title($book_title)
    {
        $this->book_title = $book_title;
    }

    /**
     * Gets the value of book_num.
     *
     * @return mixed
     */
    public function getBook_Num()
    {
        return $this->book_num;
    }

    /**
     * Sets the value of book_num.
     *
     * @param mixed $book_num the book_num
     */
    public function setBook_Num($book_num)
    {
        $this->book_num = $book_num;
    }
}

 ?>