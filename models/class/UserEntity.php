<?php

class UserEntity
{
    protected $_uid;
    protected $_uemail;
    protected $_unom;
    protected $_uprenoms;
    protected $_upaysorigine;
    protected $_uvilleorigine;
    protected $_vid;

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->_uid;
    }

	/**
	 * @return mixed
	 */
	public function getUnom() {
		return $this->_unom;
	}

	/**
	 * @param mixed $unom
	 */
	public function setUnom($unom) {
		$this->_unom = $unom;
	}

	/**
	 * @return mixed
	 */
	public function getUprenoms() {
		return $this->_uprenoms;
	}

	/**
	 * @param mixed $uprenoms
	 */
	public function setUprenoms($uprenoms) {
		$this->_uprenoms = $uprenoms;
	}

	/**
	 * @return mixed
	 */
	public function getUvilleorigine() {
		return $this->_uvilleorigine;
	}

	/**
	 * @param mixed $uvilleorigine
	 */
	public function setUvilleorigine($uvilleorigine) {
		$this->_uvilleorigine = $uvilleorigine;
	}

    /**
     * @param mixed $uid
     */
    public function setUid($uid)
    {
        $this->_uid = $uid;
    }

    /**
     * @return mixed
     */
    public function getUemail()
    {
        return $this->_uemail;
    }

    /**
     * @param mixed $uemail
     */
    public function setUemail($uemail)
    {
        $this->_uemail = htmlspecialchars($uemail);
    }

    /**
     * @return mixed
     */
    public function getUpaysorigine()
    {
        return $this->_upaysorigine;
    }

    /**
     * @param mixed $upaysorigine
     */
    public function setUpaysorigine($upaysorigine)
    {
        $this->_upaysorigine = htmlspecialchars($upaysorigine);
    }

    /**
     * @return mixed
     */
    public function getVid()
    {
        return $this->_vid;
    }

    /**
     * @param mixed $vid
     */
    public function setVid($vid)
    {
        $this->_vid = $vid;
    }

}