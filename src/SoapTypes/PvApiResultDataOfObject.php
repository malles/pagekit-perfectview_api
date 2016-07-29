<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvApiResultDataOfObject
{

    /**
     * @var bool
     */
    protected $Succeeded = null;

    /**
     * @var int
     */
    protected $Number = null;

    /**
     * @var string
     */
    protected $Code = null;

    /**
     * @var string
     */
    protected $Description = null;

    /**
     * @param bool $Succeeded
     * @return $this
     */
    public function setSucceeded($Succeeded)
    {
        $this->Succeeded = $Succeeded;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSucceeded()
    {
        return $this->Succeeded;
    }

    /**
     * @param int $Number
     * @return $this
     */
    public function setNumber($Number)
    {
        $this->Number = $Number;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param string $Code
     * @return $this
     */
    public function setCode($Code)
    {
        $this->Code = $Code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
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

