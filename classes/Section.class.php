<?php

class Section{

	private $law_id;
	private $book_id;
	private $title_id;
	private $ch_id;
	private $div_id;
	private $sub_div_id;
	private $sec_num;
    private $sec_title;
	private $sec_txt;
	private $enact_yr;
	private $enact_bill;
	private $enact_sec;

	public function __construct(
		$sec_num,
        $sec_title,
		$sec_txt,
		$enact_yr,
		$enact_bill,
		$enact_sec,
        $law_id,
        $book_id,
        $title_id,
        $ch_id,
        $div_id,
        $sub_div_id)
    {
        $this->sec_num = $sec_num;
        $this->sec_title = $sec_title;
        $this->sec_txt = $sec_txt;
        $this->enact_yr = $enact_yr;
        $this->enact_bill = $enact_bill;
        $this->enact_sec = $enact_sec;
        $this->law_id = $law_id;
        $this->book_id = $book_id;
        $this->title_id = $title_id;
        $this->ch_id = $ch_id;
        $this->div_id = $div_id;
        $this->sub_div_id = $sub_div_id;
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
     * Gets the value of div_id.
     *
     * @return mixed
     */
    public function getDiv_Id()
    {
        return $this->div_id;
    }

    /**
     * Sets the value of div_id.
     *
     * @param mixed $div_id the div_id
     */
    public function setDiv_Id($div_id)
    {
        $this->div_id = $div_id;
    }

    /**
     * Gets the value of sub_div_id.
     *
     * @return mixed
     */
    public function getSub_Div_Id()
    {
        return $this->sub_div_id;
    }

    /**
     * Sets the value of sub_div_id.
     *
     * @param mixed $sub_div_id the sub_div_id
     */
    public function setSub_Div_Id($sub_div_id)
    {
        $this->sub_div_id = $sub_div_id;
    }

    /**
     * Gets the value of sec_num.
     *
     * @return mixed
     */
    public function getSec_Num()
    {
        return $this->sec_num;
    }

    /**
     * Sets the value of sec_num.
     *
     * @param mixed $sec_num the sec_num
     */
    public function setSec_Num($sec_num)
    {
        $this->sec_num = $sec_num;
    }

    /**
     * Gets the value of sec_title.
     *
     * @return mixed
     */
    public function getSec_Title()
    {
        return $this->sec_title;
    }

    /**
     * Sets the value of sec_title.
     *
     * @param mixed $sec_title the sec_title
     */
    public function setTec_Title($sec_title)
    {
        $this->sec_title = $sec_title;
    }

    /**
     * Gets the value of sec_txt.
     *
     * @return mixed
     */
    public function getSec_Txt()
    {
        return $this->sec_txt;
    }

    /**
     * Sets the value of sec_txt.
     *
     * @param mixed $sec_txt the sec_txt
     */
    public function setSec_Txt($sec_txt)
    {
        $this->sec_txt = $sec_txt;
    }

    /**
     * Gets the value of enact_yr.
     *
     * @return mixed
     */
    public function getEnact_Yr()
    {
        return $this->enact_yr;
    }

    /**
     * Sets the value of enact_yr.
     *
     * @param mixed $enact_yr the enact_yr
     */
    public function setEnact_Yr($enact_yr)
    {
        $this->enact_yr = $enact_yr;
    }

    /**
     * Gets the value of enact_bill.
     *
     * @return mixed
     */
    public function getEnact_Bill()
    {
        return $this->enact_bill;
    }

    /**
     * Sets the value of enact_bill.
     *
     * @param mixed $enact_bill the enact_bill
     */
    public function setEnact_Bill($enact_bill)
    {
        $this->enact_bill = $enact_bill;
    }

    /**
     * Gets the value of enact_sec.
     *
     * @return mixed
     */
    public function getEnact_Sec()
    {
        return $this->enact_sec;
    }

    /**
     * Sets the value of enact_sec.
     *
     * @param mixed $enact_sec the enact_sec
     */
    public function setEnact_Sec($enact_sec)
    {
        $this->enact_sec = $enact_sec;
    }
}