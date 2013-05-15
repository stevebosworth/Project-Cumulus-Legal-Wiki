<?php


class Related{
	private $rel_id;
	private $usr_id;
	private $sec_num;
	private $rel_sec_id;

	public function __construct($sec_num, $rel_sec_id)
	{
		$this->sec_num = $sec_num;
		$this->rel_sec_id = $rel_sec_id;
	}


    /**
     * Gets the value of rel_id.
     *
     * @return mixed
     */
    public function getRel_id()
    {
        return $this->rel_id;
    }

    /**
     * Sets the value of rel_id.
     *
     * @param mixed $rel_id the rel_id
     *
     * @return self
     */
    public function setRel_id($rel_id)
    {
        $this->rel_id = $rel_id;

        return $this;
    }

    /**
     * Gets the value of usr_id.
     *
     * @return mixed
     */
    public function getUsr_id()
    {
        return $this->usr_id;
    }

    /**
     * Sets the value of usr_id.
     *
     * @param mixed $usr_id the usr_id
     *
     * @return self
     */
    public function setUsr_id($usr_id)
    {
        $this->usr_id = $usr_id;

        return $this;
    }

    /**
     * Gets the value of sec_num.
     *
     * @return mixed
     */
    public function getSec_num()
    {
        return $this->sec_num;
    }

    /**
     * Sets the value of sec_num.
     *
     * @param mixed $sec_num the sec_num
     *
     * @return self
     */
    public function setSec_num($sec_num)
    {
        $this->sec_num = $sec_num;

        return $this;
    }

    /**
     * Gets the value of rel_sec_id.
     *
     * @return mixed
     */
    public function getRel_sec_id()
    {
        return $this->rel_sec_id;
    }

    /**
     * Sets the value of rel_sec_id.
     *
     * @param mixed $rel_sec_id the rel_sec_id
     *
     * @return self
     */
    public function setRel_sec_id($rel_sec_id)
    {
        $this->rel_sec_id = $rel_sec_id;

        return $this;
    }
}
