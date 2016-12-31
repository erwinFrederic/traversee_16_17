<?php

class UserEntity
{
    protected $_uid;
    protected $_uemail;
    protected $_unomprenoms;
    protected $_upaysorigine;
    protected $_vid;

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->_uid;
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
        $this->_uemail = $uemail;
    }

    /**
     * @return mixed
     */
    public function getUnomprenoms()
    {
        return $this->_unomprenoms;
    }

    /**
     * @param mixed $unomprenoms
     */
    public function setUnomprenoms($unomprenoms)
    {
        $this->_unomprenoms = $unomprenoms;
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
        $this->_upaysorigine = $upaysorigine;
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