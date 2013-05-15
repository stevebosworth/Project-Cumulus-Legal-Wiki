<?php

class Law{
	private $law_id;
	private $law_name;
    private $law_code;

	public function __construct($law_name){
		$this->law_name = $law_name;
	}




    /**
     * Gets the value of law_id.
     *
     * @return mixed
     */
    public function getLaw_id()
    {
        return $this->law_id;
    }

    /**
     * Sets the value of law_id.
     *
     * @param mixed $law_id the law_id
     *
     * @return self
     */
    public function setLaw_id($law_id)
    {
        $this->law_id = $law_id;

        return $this;
    }

    /**
     * Gets the value of law_name.
     *
     * @return mixed
     */
    public function getLaw_name()
    {
        return $this->law_name;
    }

    /**
     * Sets the value of law_name.
     *
     * @param mixed $law_name the law_name
     *
     * @return self
     */
    public function setLaw_name($law_name)
    {
        $this->law_name = $law_name;

        return $this;
    }

    /**
     * Gets the value of law_code.
     *
     * @return mixed
     */
    public function getLaw_code()
    {
        return $this->law_code;
    }

    /**
     * Sets the value of law_code.
     *
     * @param mixed $law_code the law_code
     *
     * @return self
     */
    public function setLaw_code($law_code)
    {
        $this->law_code = $law_code;

        return $this;
    }
}