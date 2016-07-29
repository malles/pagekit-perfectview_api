<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvVatData
{

    /**
     * @var guid
     */
    protected $Id = null;

    /**
     * @var int
     */
    protected $Percentage = null;

    /**
     * @var string
     */
    protected $Description = null;

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
     * @param int $Percentage
     * @return $this
     */
    public function setPercentage($Percentage)
    {
        $this->Percentage = $Percentage;
        return $this;
    }

    /**
     * @return int
     */
    public function getPercentage()
    {
        return $this->Percentage;
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


}

