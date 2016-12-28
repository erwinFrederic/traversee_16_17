<?php

class VersetEntity
{
    protected $_id;
    protected $_vreference;
    protected $_content;

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
    public function getVreference()
    {
        return $this->_vreference;
    }

    /**
     * @param mixed $vreference
     */
    public function setVreference($vreference)
    {
        if ( !empty ($vreference) )
            $this->_vreference = $vreference;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->_content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        if ( !empty ($content) )
            $this->_content = $content;
    }

}