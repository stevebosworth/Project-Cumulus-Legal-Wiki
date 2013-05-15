<?php

class Title{
	private $title_id;
	private $title_num;
	private $title_title;
	private $book_id;

	public function __construct(
		$title_num,
		$title_title)
	{
		$this->title_num = $title_num;
        $this->title_title = $title_title;
	}

    /**
     * Gets the value of title_id.
     *
     * @return mixed
     */
    public function getTitle_Id()
    {
        return $this->title_id;
    }

    /**
     * Sets the value of title_id.
     *
     * @param mixed $title_id the title_id
     */
    public function setTitle_Id($title_id)
    {
        $this->title_id = $title_id;
    }

    /**
     * Gets the value of title_num.
     *
     * @return mixed
     */
    public function getTitle_Num()
    {
        return $this->title_num;
    }

    /**
     * Sets the value of title_num.
     *
     * @param mixed $title_num the title_num
     */
    public function setTitle_Num($title_num)
    {
        $this->title_num = $title_num;
    }

    /**
     * Gets the value of title_title.
     *
     * @return mixed
     */
    public function getTitle_Title()
    {
        return $this->title_title;
    }

    /**
     * Sets the value of title_title.
     *
     * @param mixed $title_title the title_title
     */
    public function setTitle_Title($title_title)
    {
        $this->title_title = $title_title;
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
}