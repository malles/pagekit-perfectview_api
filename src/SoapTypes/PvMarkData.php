<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvMarkData
{

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Category = null;

    /**
     * @var string
     */
    protected $Name = null;

    /**
     * @var string
     */
    protected $ExternalDescription = null;

    /**
     * @var bool
     */
    protected $IsInactive = null;

    /**
     * @param guid $Id
     * @return $this
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return guid
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Category
     * @return $this
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param string $Name
     * @return $this
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $ExternalDescription
     * @return $this
     */
    public function setExternalDescription($ExternalDescription)
    {
        $this->ExternalDescription = $ExternalDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalDescription()
    {
        return $this->ExternalDescription;
    }

    /**
     * @param bool $IsInactive
     * @return $this
     */
    public function setIsInactive($IsInactive)
    {
        $this->IsInactive = $IsInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive()
    {
        return $this->IsInactive;
    }


}

