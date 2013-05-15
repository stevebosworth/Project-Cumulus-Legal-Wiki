<?php

class Division{
	private $div_id;
	private $div_num;
	private $div_title;
	private $ch_id;

	public function __construct(
		$div_num,
		$div_title)
	{
		$this->div_num = $div_num;
        $this->div_title = $div_title;
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
     * Gets the value of div_num.
     *
     * @return mixed
     */
    public function getDiv_Num()
    {
        return $this->div_num;
    }

    /**
     * Sets the value of div_num.
     *
     * @param mixed $div_num the div_num
     */
    public function setDiv_Num($div_num)
    {
        $this->div_num = $div_num;
    }

    /**
     * Gets the value of div_title.
     *
     * @return mixed
     */
    public function getDiv_Title()
    {
        return $this->div_title;
    }

    /**
     * Sets the value of div_title.
     *
     * @param mixed $div_title the div_title
     */
    public function setDiv_Title($div_title)
    {
        $this->div_title = $div_title;
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
}