<?php

class VersetEntity
{
    protected $_id;
    protected $_base64;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

	/**
	 * @return mixed
	 */
	public function getBase64() {
		return $this->_base64;
	}

	/**
	 * @param mixed $base64
	 */
	public function setBase64($base64) {
		$this->_base64 = $base64;
	}



}