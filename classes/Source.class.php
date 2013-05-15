<?php

class Source{
	private $id;
	private $sec_num;
	private $url;

	public function __construct($sec_num, $url)
	{
		$this->sec_num = $sec_num;
		$this->url = $url;
	}



    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Gets the value of url.
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the value of url.
     *
     * @param mixed $url the url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}

