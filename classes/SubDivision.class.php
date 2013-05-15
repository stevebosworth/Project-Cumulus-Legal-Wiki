<?php

class SubDivision{
	private $sub_div_id;
	private $sub_div_num;
	private $sub_div_title;
	private $div_id;

	public function __construct(
		$sub_div_num,
		$sub_div_title)
	{
        $this->sub_div_num = $sub_div_num;
        $this->sub_div_title = $sub_div_title;
	}


    /**
     * Gets the value of sub_div_id.
     *
     * @return mixed
     */
    public function getSub_div_id()
    {
        return $this->sub_div_id;
    }

    /**
     * Sets the value of sub_div_id.
     *
     * @param mixed $sub_div_id the sub_div_id
     */
    public function setSub_div_id($sub_div_id)
    {
        $this->sub_div_id = $sub_div_id;
    }

    /**
     * Gets the value of sub_div_num.
     *
     * @return mixed
     */
    public function getSub_div_num()
    {
        return $this->sub_div_num;
    }

    /**
     * Sets the value of sub_div_num.
     *
     * @param mixed $sub_div_num the sub_div_num
     */
    public function setSub_div_num($sub_div_num)
    {
        $this->sub_div_num = $sub_div_num;
    }

    /**
     * Gets the value of sub_div_title.
     *
     * @return mixed
     */
    public function getSub_div_title()
    {
        return $this->sub_div_title;
    }

    /**
     * Sets the value of sub_div_title.
     *
     * @param mixed $sub_div_title the sub_div_title
     */
    public function setSub_div_title($sub_div_title)
    {
        $this->sub_div_title = $sub_div_title;
    }

    /**
     * Gets the value of div_id.
     *
     * @return mixed
     */
    public function getDiv_id()
    {
        return $this->div_id;
    }

    /**
     * Sets the value of div_id.
     *
     * @param mixed $div_id the div_id
     */
    public function setDiv_id($div_id)
    {
        $this->div_id = $div_id;
    }
}