<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvDatastoreItemData
{

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @var bool
     */
    protected $IsInactive = null;

    /**
     * @var bool
     */
    protected $IsDefault = null;

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
     * @param string $Description
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
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

    /**
     * @param bool $IsDefault
     * @return $this
     */
    public function setIsDefault($IsDefault)
    {
        $this->IsDefault = $IsDefault;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->IsDefault;
    }


}

