<?php

namespace Bixie\PerfectviewApi\SoapTypes;

class PvApiResultOfObject
{

    /**
     * @var PvApiResultDataOfObject
     */
    protected $Result = null;

    /**
     * @var anyType
     */
    protected $Data = null;

    /**
     * @param PvApiResultDataOfObject $Result
     * @return $this
     */
    public function setResult($Result)
    {
        $this->Result = $Result;
        return $this;
    }

    /**
     * @return PvApiResultDataOfObject
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param anyType $Data
     * @return $this
     */
    public function setData($Data)
    {
        $this->Data = $Data;
        return $this;
    }

    /**
     * @return anyType
     */
    public function getData()
    {
        return $this->Data;
    }


}

