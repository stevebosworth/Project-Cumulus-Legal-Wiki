<?php

class Chapter{
	private $ch_id;
	private $ch_num;
	private $ch_title;
	private $title_id;

	public function __construct(
		$ch_num,
		$ch_title)
	{
		$this->ch_num = $ch_num;
        $this->ch_title = $ch_title;
	}


    /**
     * Gets the value of ch_id.
     *
     * @return mixed
     */
    public function getCh_Id()
    {
        return $this->ch_id;
    }

    /**
     * Sets the value of ch_id.
     *
     * @param mixed $ch_id the ch_id
     */
    public function setCh_Id($ch_id)
    {
        $this->ch_id = $ch_id;
    }

    /**
     * Gets the value of ch_num.
     *
     * @return mixed
     */
    public function getCh_Num()
    {
        return $this->ch_num;
    }

    /**
     * Sets the value of ch_num.
     *
     * @param mixed $ch_num the ch_num
     */
    public function setCh_Num($ch_num)
    {
        $this->ch_num = $ch_num;
    }

    /**
     * Gets the value of ch_title.
     *
     * @return mixed
     */
    public function getCh_Title()
    {
        return $this->ch_title;
    }

    /**
     * Sets the value of ch_title.
     *
     * @param mixed $ch_title the ch_title
     */
    public function setCh_Title($ch_title)
    {
        $this->ch_title = $ch_title;
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
}